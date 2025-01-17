<?php

namespace App\Http\Controllers;

use App\Models\Aboutme;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $post = Post::all();
            $aboutme = Aboutme::first();
            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {
                return view('home.homepage', compact('post', 'aboutme'));
            } elseif ($usertype == 'admin') {
                return view('admin.adminhome');
            } else {
                return redirect()->back();
            }
        }
    }

    public function homepage()
    {
        $post = Post::all();
        $aboutme = Aboutme::first();
        return view('home.homepage', compact('post', 'aboutme'));
    }

    // About page
    public function about()
    {
        $aboutme = Aboutme::first();  // Assuming there's only one record
        return view('home.about', compact('aboutme'));
    }

    // Projects page
    public function services()
    {
        $post = Post::all();
        return view('home.services', compact('projects'));
    }

    // Contact page
    public function contact()
    {
        return view('home.contact');
    }
}
