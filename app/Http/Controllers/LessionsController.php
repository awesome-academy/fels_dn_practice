<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Lessions;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class LessionsController extends Controller
{
    public function index()
    {
        $filters = request()->only('action', 'key');
        if ($filters && $filters['action'] == 'search') {
            // for search
            $lessions = DB::table('lessions')
            ->where('category_id', 'like', '%'.$filters['key'].'%')
            ->orWhere('user_id', 'like', '%'.$filters['key'].'%')
            ->orderBy('result','ASC')->get();
        } else {
            $lessions = DB::table('lessions')->orderBy('id','ASC')->get();
        }
            return view('admin.lessions.show', ['lessions' => $lessions]);
    }

    public function create()
    {
        return view('admin.lessions.create');
    }

    public function store(lessionsRequest $request)
    {
        $lessions = lessions::create($request->all());
        if ($lessions) {
            $red = redirect('/lessions')->with('success', __('admin.lessions.list_cat.add'));
        } else {
            $red = redirect('/lessions/create')->with('danger', __('admin.lessions.list_cat.err_add'));
        }
            return $red;
    }

    public function show($id)
    {
        $lessions = Lessions::findOrFail($id);
            return view('admin.lessions.show', ['lessions', $lessions]);
    }

    public function edit($id)
    {
        $lessions = lessions::where('id',$id)->first();
        return view('admin.lessions.edit',['lessions' => $lessions]);
    }

    public function update(lessionsRequest $request, $id)
    {
        $lessions = lessions::findOrFail($id);
        $lessions->Update($request->all());
        return redirect('lessions')->with('update', __('admin.lessions.list_cat.update'));
    }

    public function destroy($id)
     {
        try {
            Lessions::destroy($id);

            return redirect()->back()->with([
                'deleteLession' => trans('admin.delete-lession')
            ]);
        } catch (ModelNotFoundException $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
