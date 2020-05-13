<?php

namespace App\Http\Controllers;

use App\Models\Words;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\WordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Repositories\Word\WordRepositoryInterface;

class WordController extends Controller
{
    protected $wordRepo;
    public function __construct(WordRepositoryInterFace $word)
    {
        $this->wordRepo = $word;
    }

    public function index()
    {
        $take = config('setting.paginate');
        $words = $this->wordRepo->paginate('id', 'DESC', $take);
        return view('admin.words.show')->with('words', $words);
    }

    public function create()
    {
        return view('admin.words.create');
    }

    public function store(WordRequest $request)
    {
        $word = [
            'category_id' => $request->category_id,
            'content'=> $request->content,
            'name' => $request->name,
        ];
        $word = $this->wordRepo->create($word);
        return redirect()->route('words.index')->with('success', __('admin.words.list_word.add'));

    }

    public function show($id)
    {
        $thisbook = $this->wordRepo->findOrFail($id);
        return view('admin.words.show')->with('thisbook', $thisbook);
    }

    public function edit($id)
    {
        $idword = $this->wordRepo->findOrFail($id);
        return view('admin.words.edit')->with('idword', $idword);
    }

    public function update(WordRequest $request, $id)
    {
        $categories = Category::findOrFail($id);
        $categories->Update($request->all());
        return redirect()->route('words.index')->with('update', __('admin.words.list_word.update'));
    }

    public function destroy($id)
    {
        $book = $this->wordRepo->delete($id);
        return redirect('words');
    }
}
