<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryArticle;
use Illuminate\Http\Request;

class CategoryArticleController extends Controller
{
    /**
     * Display list article.
     */
    public function index()
    {
        $categories = CategoryArticle::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * form create new category
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * store new category.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255|unique:category_article,category_name',
        ]);

        CategoryArticle::create($request->all());

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil ditambahkan!');
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
        $category = CategoryArticle::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        $category = CategoryArticle::findOrFail($id);
        $category->update($validated);

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CategoryArticle::destroy($id);
        return redirect()->route('categories.index')->with('success', 'Kategori berhasil dihapus
        !');
    }
}
