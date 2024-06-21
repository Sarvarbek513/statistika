<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewFromRequest;
use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function clientindex(): View
    {
        $news = News::all();
        return view('client.index',compact('news'));

    }

    public function index(): View
    {
        $news = News::all();
        return view('admin.news.index',compact('news'));
    }

    public function create(): View
    {
        return view('admin.news.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|max:255',
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // 2MB Max
            'vaqt' => 'required|max:255',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        News::create($input);
        return redirect()->route('news.index')->with('success', 'News article created successfully.');
    }
}
