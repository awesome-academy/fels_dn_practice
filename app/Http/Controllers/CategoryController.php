<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\User;
use Mail;
use Auth;

class CategoryController extends Controller
{
    protected $CateRepo;

    public function __construct(CategoryRepositoryInterface $categories)
    {
        $this->CateRepo = $categories;
        $this->middleware('auth');
    }

    public function index()
    {

        $filters = request()->only('action', 'key');
        $take = config('setting.paginate');
        if ($filters && $filters['action'] == 'search') {
            // for search
            $categories = DB::table('categories')
            ->where('title', 'like', '%'.$filters['key'].'%')
            ->orWhere('desc', 'like', '%'.$filters['key'].'%')
            ->orderBy('id','ASC')->paginate($take);
        } else {
            $categories = DB::table('categories')->orderBy('id','ASC')->paginate($take);
        }
        $listcategories = $this->CateRepo->paginate('id','DESC',$take);

        return view('admin.categories.show', ['categories' => $categories]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $categories = $this->CateRepo->create($request->all());
        if ($categories) {
            $c_id = Auth::guard('web')->user()->id;
            $c_name = Auth::guard('web')->user()->name;
            $c_email = Auth::guard('web')->user()->email;
            /*send mail*/
            Mail::send('mail.test', [
                'c_name' => $c_name,
                'categories' => $categories,
            ], function($mail) use ($c_email)
            {
                $mail->to($c_email);
                $mail->from('pentapperthanh37@gmail.com');
                $mail->subject('Send Email After Added!');
            });
            $red = redirect('/categories')->with('success', __('admin.categories.list_cat.add'));
        } else {
            $red = redirect('/categories/create')->with('danger', __('admin.categories.list_cat.err_add'));
        }
        return $red;
    }

    public function show($id)
    {
        $idcategories = $this->CateRepo->findOrFail($id);
        $category = Category::findOrFail($id);
        return view('admin.categories.show', ['category', $category]);
    }

    public function edit($id)
    {
        $category = Category::where('id',$id)->first();
        return view('admin.categories.edit',['categories' => $category]);
    }

    public function update(CategoryRequest $request, $id)
    {
        $this->CateRepo->update($id);
        return redirect('categories')->with('update', __('admin.categories.list_cat.update'));
    }

    public function destroy($id)
    {
        $this->CateRepo->delete($id);
        return redirect('categories');
    }
}
