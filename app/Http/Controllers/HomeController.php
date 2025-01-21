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
        $aboutme = Aboutme::skip(1)->first();
        return view('home.homepage', compact('post', 'aboutme'));
    }

    public function homeaboutpage()
    {
        $aboutme = Aboutme::first();
        return view('home.aboutpage', compact('aboutme'));
    }

    public function homeprojectspage()
    {
        $post = Post::all();
        $aboutme = Aboutme::first();
        return view('home.projects', compact('post', 'aboutme'));
    }

    public function homeexperiencepage()
    {
        $aboutme = Aboutme::first();
        return view('home.experience', compact('aboutme'));
    }

    public function homecontactpage()
    {
        $aboutme = Aboutme::first();
        return view('home.contact', compact('aboutme'));
    }
}
