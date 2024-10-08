<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\CategoryArticle;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


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
        // dd($request->all());

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'slug' => 'required|unique:articles',
            'featured_img' => 'required|image',
            'registration_link' => 'nullable|url',
            'category_id' => 'required|exists:category_article,id',
        ]);

        //using user_id, the user who is logged in
        $validatedData['user_id'] = Auth::id();

        // save img to directory
        if ($request->hasFile('featured_img')) {
            $validatedData['featured_img'] = $request->file('featured_img')->store('images', 'public');
        }

        // save article
        Article::create($validatedData);
        return redirect()->route('articles.index')->with('success', 'Article created successfully!');
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
        $article = Article::findOrFail($id);
        $categories = CategoryArticle::all();
        return view('admin.articles.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'slug' => 'required|unique:articles,slug,' . $id,
            'featured_img' => 'nullable|image',
            'registration_link' => 'nullable|url',
            'category_id' => 'required|exists:category_article,id',
        ]);

        $article = Article::findOrFail($id);

        // Cek jika ada gambar baru, simpan dan replace gambar lama
        if ($request->hasFile('featured_img')) {
            // Hapus gambar lama jika ada
            if ($article->featured_img) {
                Storage::disk('public')->delete($article->featured_img);
            }
            $validatedData['featured_img'] = $request->file('featured_img')->store('images', 'public');
        } else {
            // Jika tidak ada gambar baru, gunakan gambar lama
            $validatedData['featured_img'] = $article->featured_img;
        }

        // Pastikan semua data yang diperlukan dimasukkan
        $validatedData['title'] = $request->input('title');
        $validatedData['content'] = $request->input('content');
        $validatedData['slug'] = $request->input('slug');
        $validatedData['category_id'] = $request->input('category_id');


        // dd($validatedData);

        $article->update($validatedData);
        // dd($article);
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
