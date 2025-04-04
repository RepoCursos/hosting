<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create(): View
    {
        return view('category.create');
    }

    public function store(CategoryRequest $request): RedirectResponse
    {
        Category::create($request->all());
        return redirect()->route('category.index')->with('success', 'Category created');
    }

    public function edit(Category $category): View
    {
        return view('category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
        $category->update($request->all());
        return redirect()->route('category.index')->with('success', 'Category updated');
    }

    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();
        return redirect()->route('category.index')->with('danger', 'Category deleted');
    }
}
