<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    public function index() {
        return Category::all();
    }
    public function store(Request $request) {
        return Category::create($request->validate(['name' => 'required|string']));
    }
    public function show(Category $category) {
        return $category;
    }
    public function update(Request $request, Category $category) {
        $category->update($request->validate(['name' => 'required|string']));
        return $category;
    }
    public function destroy(Category $category) {
        $category->delete();
        return response()->noContent();
    }
    public function getByProduct(Product $product) {
        return $product->categories;
    }
}
