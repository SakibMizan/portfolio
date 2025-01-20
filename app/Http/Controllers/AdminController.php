<?php

namespace App\Http\Controllers;

use App\Models\Aboutme;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function adminhomepage()
    {
        return view('admin.adminhome');
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout(); // Logs out the user
            return redirect('/register'); // Redirects to the Register page
        }
        return redirect('/'); // Redirects to homepage for unauthenticated users
    }

    public function post_project()
    {
        return view('admin.post_project');
    }

    public function add_project(Request $request)
    {
        $user = Auth()->user();
        $user_id = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;

        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;

        $image = $request->image;
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('projectimage', $imageName);
            $post->image = $imageName; // Save the image name in the database
        }

        $post->github_link = $request->github_link;
        $post->live_preview_link = $request->live_preview_link;

        $post->post_status = 'active';

        $post->user_id = $user_id;
        $post->name = $name;
        $post->usertype = $usertype;

        $post->save();
        return redirect()->back()->with('message', 'Project Added Successfully');
    }

    public function show_project()
    {
        $post = Post::all();
        return view('admin.show_project', compact('post'));
    }

    public function delete_project($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back()->with('message', 'Project Deleted Successfully');
    }

    public function edit_project($id)
    {
        $post = Post::find($id);
        return view('admin.edit_project', compact('post'));
    }

    public function update_project(Request $request, $id)
    {
        $data = Post::find($id);
        $data->title = $request->title;
        $data->description = $request->description;

        $image = $request->image;
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('projectimage', $imageName);
            $data->image = $imageName;
        }

        $data->github_link = $request->github_link;
        $data->live_preview_link = $request->live_preview_link;

        $data->save();
        return redirect()->back()->with('message', 'Project Updated Successfully');
    }

    public function post_aboutme()
    {
        return view('admin.post_aboutme');
    }

    public function add_aboutme(Request $request)
    {
        $aboutme = new Aboutme;
        $aboutme->name = $request->name;
        $aboutme->title = $request->title;
        $aboutme->description = $request->description;
        $aboutme->email = $request->email;
        $aboutme->phone = $request->phone;

        $image = $request->image;
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('myimages', $imageName);
            $aboutme->image = $imageName;
        }

        $aboutme->linkedin = $request->linkedin;

        $cv = $request->file('cv');
        if ($cv) {
            $cvName = time() . '.' . $cv->getClientOriginalExtension();
            $cv->move('myfiles', $cvName);
            $aboutme->cv = $cvName;
        }


        $aboutme->save();
        return redirect()->back()->with('message', 'Added Successfully');
    }

    public function show_aboutme()
    {
        $aboutme = AboutMe::all();
        return view('admin.show_aboutme', compact('aboutme'));
    }

    public function delete_aboutme($id)
    {
        $aboutme = AboutMe::find($id);
        $aboutme->delete();
        return redirect()->back()->with('message', 'About Me Entry Deleted Successfully');
    }

    public function edit_aboutme($id)
    {
        $aboutme = AboutMe::find($id);
        return view('admin.edit_aboutme', compact('aboutme'));
    }

    public function update_aboutme(Request $request, $id)
    {
        $data = AboutMe::find($id);
        $data->name = $request->name;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->email = $request->email;
        $data->phone = $request->phone;

        $image = $request->image;
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('aboutme_images', $imageName);
            $data->image = $imageName;
        }

        $data->linkedin = $request->linkedin;

        $cv = $request->file('cv');
        if ($cv) {
            $cvName = time() . '.' . $cv->getClientOriginalExtension();
            $cv->move('aboutme_cvs', $cvName);
            $data->cv = $cvName;
        }

        $data->save();
        return redirect()->back()->with('message', 'About Me Entry Updated Successfully');
    }
}
