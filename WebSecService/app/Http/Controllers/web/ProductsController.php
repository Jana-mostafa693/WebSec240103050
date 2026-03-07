<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductsController extends Controller
{
    // عرض كل المنتجات مع إمكانية التصفية والفرز
    public function list(Request $request)
    {
        $query = Product::select("products.*");

        $query->when($request->keywords, fn($q) => 
            $q->where("name", "like", "%{$request->keywords}%")
        );

        $query->when($request->min_price, fn($q) => 
            $q->where("price", ">=", $request->min_price)
        );

        $query->when($request->max_price, fn($q) => 
            $q->where("price", "<=", $request->max_price)
        );

        $query->when($request->order_by, fn($q) => 
            $q->orderBy($request->order_by, $request->order_direction ?? "ASC")
        );

        $products = $query->get();

        return view("products.list", compact('products'));
    }

    // عرض صفحة إضافة/تعديل منتج
    public function edit(Request $request, Product $product = null)
    {
        $product = $product ?? new Product();
        return view("products.edit", compact('product'));
    }

    // حفظ المنتج (إضافة جديد أو تعديل موجود)
    public function save(Request $request, Product $product = null)
    {
        $product = $product ?? new Product();

        // الحقول اللي في fillable هتسمح بالـ mass assignment
        $product->fill($request->only([
            'name', 'code', 'model', 'photo', 'price', 'description'
        ]));

        $product->save();

        return redirect()->route('products_list')
            ->with('success', 'Product saved successfully!');
    }

    // حذف منتج
    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->route('products_list')
            ->with('success', 'Product deleted successfully!');
    }
}