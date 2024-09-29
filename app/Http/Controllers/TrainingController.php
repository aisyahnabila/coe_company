<?php

namespace App\Http\Controllers;
use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index(Request $request)
    {
        $trainings = Training::all();
        if ($request->has('section') && $request->section === 'training') {
            return redirect('/#training');
        }
        return view('index', compact('trainings'));
    }
}
