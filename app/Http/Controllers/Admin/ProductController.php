<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', ['products' => $products]);
    }
    public function create()
    {
        return view('admin.product.create');
    }
    public function store(Request $request)
    {
        try
        {
            // Validate the request to ensure all fields are provided and valid

            $request->validate([
                'image' => 'required|image|mimes:jpeg,webp,png,jpg,gif|max:2048',
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'cost' => 'required|numeric|min:0',
                'quantity' => 'required|integer|min:0',
            ]);
            // dd($request->all());

            // Create a unique name for the image
            $imageName =  time() . '.' . $request->image->extension();

            // Move the image to the public/products directory
            $request->image->move(public_path('products'), $imageName);

            // Create and save the product
            $product = new Product;
            $product->image = 'products/' . $imageName;
            $product->name = $request->name;
            $product->description = $request->description;
            $product->cost = $request->cost;
            $product->quantity = $request->quantity;
            $product->save();
            // dd($product);

            return redirect()->route('admin.product.index')->with('success', 'Product created successfully!');
        }

        catch (Exception $e)
        {
            return back()->withErrors(['error' => 'Failed to create product: ' . $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $product = Product::find($id);
        // dd($product);

        return view('admin.product.edit', compact('product'));
    }
    public function update(Request $request)
    {
        try
        {
            $product = Product::find($request->id);
            if ($request->image)
            {
                // Create a unique name for the image
                $imageName =  time() . '.' . $request->image->extension();

                // Move the image to the public/products directory
                $request->image->move(public_path('products'), $imageName);
            }
            else
            {
                $imageName =  $product->image;
            }
            $product->image = $imageName;
            $product->name = $request->name;
            $product->description = $request->description;
            $product->cost = $request->cost;
            $product->quantity = $request->quantity;
            $product->save();
            return redirect()->route('admin.product.index')->with('success', 'Product updated successfully!!');
        }
        catch (Exception $e)
        {
            return back()->withErrors(['error' => 'Failed to update product: ' . $e->getMessage()]);
        }
    }

    public function delete($id)
    {
        try
        {
            Product::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Product deleted successfully!!');
        }
        catch (Exception $e)
        {
            return back()->withErrors(['error' => 'Failed to delete product: ' . $e->getMessage()]);
        }
    }
}
