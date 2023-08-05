<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class DiscussController extends Controller
{
    public function index()
    {
        if(!Auth::check()){
            return redirect('login');
        }
        // SELECT * FROM posts
        $posts = Post::active()->get();

        // array dari database dipecah, dibuat variabel yang menyimpan setiap record
        // 'posts' => ['title' => 'text', 'content' => 'text']
        $view_data = [
            'posts' => $posts,
        ];

        return view('discussions.index', $view_data);
    }

    public function create()
    {
        if(!Auth::check()){
            return redirect('login');
        }

        return view('discussions.create');
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        // INSERT INTO posts SET title='judul', content='content'
        Post::create([
                'title' => $title,
                'content' => $content
            ]);
        
        return redirect('discussions');
    }

    public function show(string $id)
    {
        if(!Auth::check()){
            return redirect('login');
        }
        // SELECT * FROM posts WHERE id="$id"
        $selected_posts = Post::where('id', $id)->first();
        $comments = $selected_posts->comments()->get();
        $total_comments = $selected_posts->total_comments();
        
        $view_data = [
            'post' => $selected_posts,
            'comments'=> $comments,
            'total_comments' => $total_comments
        ];
        
        return view('discussions.detail', $view_data);
    }

    public function edit(string $id)
    {
        if(!Auth::check()){
            return redirect('login');
        }
        // SELECT * FROM posts WHERE id="$id"
        $selected_posts = Post::where('id', $id)->first();

        $view_data = [
            'post' => $selected_posts
        ];

        return view('discussions.edit', $view_data);
    }

    public function update(Request $request, string $id)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        // UPDATE posts SET title='', content='', dsb
        Post::where('id', $id)
            ->update([
                'title' => $title,
                'content' => $content,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        return redirect("discussions/$id");
    }

    public function destroy(string $id)
    {
        // UPDATE posts SET title='', content='', dsb
        Post::where('id', $id)->delete();

        return redirect("discussions");
    }
}
