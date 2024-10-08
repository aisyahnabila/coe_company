<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Mitra;
use App\Models\Page;
use App\Models\Partnership;
use Illuminate\Http\Request;

class LandigPageController extends Controller
{
    //
    public function index()
    {
        $about = Page::findOrFail(1);
        $seminars = Article::where('category_id', 2)->get();
        $pengmass = Article::where('category_id', 3)->get();
        $mitras = Mitra::all();
        $kerjasamas = Partnership::all();
        return view('index',compact('about','seminars','pengmass','kerjasamas','mitras'));
    }
    public function staff()
    {
        return view('employee');
    }

}
