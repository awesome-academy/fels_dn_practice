<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Lessions;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\LessionsRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RegisterRequest;


class LessionsController extends Controller
{
    public function index()
    {
        $filters = request()->only('action', 'key');
        $take = config('setting.paginate');
        if ($filters && $filters['action'] == 'search') {
            // for search
            $lessions = DB::table('lessions')
            ->where('category_id', 'like', '%'.$filters['key'].'%')
            ->orWhere('user_id', 'like', '%'.$filters['key'].'%')
            ->orderBy('result','ASC')->paginate($take);
        } else {
            $lessions = DB::table('lessions')->orderBy('id','ASC')->paginate($take);
        }
            return view('admin.lessions.show', ['lessions' => $lessions]);
    }

    public function create()
    {
        return view('admin.lessions.create');
    }

    public function store(LessionsRequest $request)
    {
        $lessions = Lessions::create($request->all());
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
        $lessions = Lessions::where('id', $id)->first();
        return view('admin.lessions.edit',['lessions' => $lessions]);
    }

    public function update(LessionsRequest $request, $id)
    {
        try {
            $lessions = [
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
            'result' => $request->result,
            'name' => $request->name,
        ];
        Lessions::where('id', '=', $id)->update($lessions);

        return redirect()->back()->with(['update_success' => 'update success']);
        } catch (ModelNotFoundException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            Lessions::destroy($id);

            return redirect()->back()->with([
                'deleteLessions' => trans('admin.delete-lession')
            ]);
        } catch (ModelNotFoundException $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
