<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    //
    public function index(Request $request)
    {
        // Set locale dari query parameter
        if ($request->has('lang')) {
            session(['locale' => $request->lang]);
        }

        app()->setLocale(session('locale', 'en'));

        $photos = Photo::all();
        return view('photos.index', compact('photos'));
    }

    public function create(Request $request)
    {
        if ($request->has('lang')) {
            session(['locale' => $request->lang]);
        }

        app()->setLocale(session('locale', 'en'));

        return view('photos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
        ]);

        $path = $request->file('image')->store('photos', 'public');

        Photo::create([
            'title' => $request->title,
            'image_path' => $path,
        ]);

        return redirect()->route('photos.index');
    }
}
