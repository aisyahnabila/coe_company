<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\CategoryArticle;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all(); // Mengambil semua data artikel
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CategoryArticle::all();
        return view('admin.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'slug' => 'required|unique:articles',
            'featured_img' => 'required|image',
            'category_id' => 'required|exists:category_article,id',
        ]);

        // Menyimpan gambar ke direktori
        if ($request->hasFile('featured_img')) {
            $validatedData['featured_img'] = $request->file('featured_img')->store('images', 'public');
        }

        Article::create($validatedData);
        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);
        $categories = CategoryArticle::all();
        return view('admin.articles.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'slug' => 'required|unique:articles,slug,' . $id, // Pastikan slug unik kecuali artikel yang sedang di-edit
            'featured_img' => 'sometimes|image',
            'category_id' => 'required|exists:category_article,id',
        ]);

        $article = Article::firstOrFail($id);

        // Jika ada gambar baru, maka simpan dan replace gambar lama
        if ($request->hasFile('featured_img')) {
            $validatedData['featured_img'] = $request->file('featured_img')->store('images', 'public');
        }

        $article->update($validatedData);

        // $article = Article::find($id);
        // $article->update($request->all());

        return redirect()->route('articles.index')->with('success', 'Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');
    }
}
