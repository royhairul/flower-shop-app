<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\UploadedFile;
use App\Models\Flower;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
        $flowers = Flower::get();

        return view("admin.dashboard", compact("flowers"));
    }

    public function product()
    {
        //
        $flowers = Flower::get();

        return view("product", compact("flowers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');


        }

        Flower::create($validatedData);

        return redirect()->route('admin.dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Flower::findOrFail($id);
        return view('admin.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required'
        ]);

        $item = Flower::findOrFail($id);

        $item->update([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        return redirect()->route('admin.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Flower::findOrFail($id);

        $item->delete();

        return redirect()->route('admin.dashboard');
    }
}
