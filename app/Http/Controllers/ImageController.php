<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    public function allbanner()
    {
        $headerBanners = Image::all();
        return response()->json($headerBanners);
    }

    public function index()
    {
        $images = Image::all();
        return view('admin.images.index', compact('images'));
    }

    public function create()
    {
        return view('admin.images.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'redirect_url' => 'nullable|url',


        ]);

        if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = time() . '_' . $file->getClientOriginalName(); // Adding time to avoid name conflicts
        $filePath = public_path('banner');
        $file->move($filePath, $fileName); // Move the file to the banner directory
        $imagePath = 'banner/' . $fileName; // Store the path relative to the public directory
       }
     
        Image::create([
            'image_path' => $imagePath,
            'redirect_url' => $request->redirect_url,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('images.index')
                         ->with('success', 'Image added successfully.');
    }

    public function edit(Image $image)
    {
        return view('admin.images.edit', compact('image'));
    }

    public function update(Request $request, Image $image)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'redirect_url' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {

        $file = $request->file('image');

        if ($image->image_path) {
                Storage::delete($image->image_path);
            }

        $fileName = time() . '_' . $file->getClientOriginalName(); // Adding time to avoid name conflicts
        $filePath = public_path('banner');
        $file->move($filePath, $fileName); // Move the file to the banner directory
        $imagePath = 'banner/' . $fileName; // Store the path relative to the public directory
        $image->image_path = $imagePath;
       }
     
        $image->title = $request->title;
        $image->description = $request->description;
        $image->redirect_url = $request->redirect_url;
        $image->save();

        return redirect()->route('images.index')
                         ->with('success', 'Image updated successfully.');
    }

    public function destroy(Image $image)
    {
        Storage::disk('public')->delete($image->image_path);
        $image->delete();

        return redirect()->route('images.index')
                         ->with('success', 'Image deleted successfully.');
    }
}
