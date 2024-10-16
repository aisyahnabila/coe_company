<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Mitra;
use App\Models\Page;
use App\Models\Partnership;
use App\Models\Staff;
use Illuminate\Http\Request;

class LandigPageController extends Controller
{
    //
    public function index()
    {
        $about = Page::findOrFail(1);
        $seminars = Article::where('category_id', 1)->get();
        $pengmass = Article::where('category_id', 2)->get();
        $mitras = Mitra::all();
        $kerjasamas = Partnership::all();
        return view('index', compact('about', 'seminars', 'pengmass', 'kerjasamas', 'mitras'));
    }
    public function staff()
    {
        $leaders = Staff::where('position_id', 1)->get();
        $employees = Staff::where('position_id', 2)->get();

        return view('employee', compact('leaders','employees'));
    }
}
