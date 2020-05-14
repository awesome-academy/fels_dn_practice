<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Lessions;
use App\Models\Words;
use App\User;
class HomeController extends Controller
{
    public function index()
    {
        $categoryTotal = Category::pluck('id')->count();
        $lessionTotal = Lessions::pluck('id')->count();
        $wordTotal = Words::pluck('id')->count();
        $userTotal = Category::pluck('id')->count();
        return view('admin.home', [
            'categoryTotal' => $categoryTotal,
            'lessionTotal' => $lessionTotal,
            'wordTotal' => $wordTotal,
            'userTotal' => $userTotal,
        ]);
    }
}
