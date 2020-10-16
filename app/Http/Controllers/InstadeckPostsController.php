<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Post;

class InstadeckPostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = auth()->user()->following()->pluck('profiles.user_id');
        // $posts = Post::whereIn('user_id', $users)->with('user')->orderBy('created_at', 'DESC')->get();
        $posts = Post::whereIn('user_id', $users)->with('user')->orderBy('created_at', 'DESC')->paginate(2);
        return view('/instadeck/index', compact('posts'));
    }
    
    public function create()
    {
        return view('/instadeck/create');
    }

    public function store()
    {
        $dhsData = request()->validate([
            'image' => 'required|image',
            'caption' => 'required',
        ]);

        $dhsImagePath = request('image')->store('uploads', 'public');

        $dhsImage = Image::make(public_path("/storage/{$dhsImagePath}"))->fit(1200, 1200);
        $dhsImage->save();
        
        auth()->user()->posts()->create([
            'image' => $dhsImagePath,
            'caption' => $dhsData['caption'],
        ]);

        return redirect('/instadeck/profile/' . auth()->user()->id);
    }

    public function show(Post $post)
    {
        return view('/instadeck/show', compact('post'));
    }
}
