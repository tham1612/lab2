<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::query()->with('category')->latest('id')->paginate('6');

        return view('admin.products.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::query()->pluck('name', 'id')->all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->except('img_thumb');
        if ($request->hasFile('img_thumb')) {

            $pathFile = $request->file('img_thumb')->store('products', 'public');

            $data['img_thumb'] = 'storage/' . $pathFile;
        }

        Product::query()->create($data);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::query()->pluck('name', 'id')->all();
        return view('admin.products.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->except('img_thumb');
        if ($request->hasFile('img_thumb')) {

            $pathFile = $request->file('img_thumb')->store('products', 'public');

            $data['img_thumb'] = 'storage/' . $pathFile;
        }
        $currentImg_thumb = $product->img_thumb;
        $product->update($data);
        if ($request->hasFile('img_thumb')
            && $currentImg_thumb
            && file_exists(public_path($currentImg_thumb))) {
            unlink(public_path($currentImg_thumb));
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
