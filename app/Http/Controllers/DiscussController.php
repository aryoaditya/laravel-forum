<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiscussController extends Controller
{
    public function index()
    {
        // SELECT * FROM posts
        $posts = DB::table('posts')
            ->where('active', true)
            ->get();

        $view_data = [
            'posts' => $posts,
        ];

        return view('discussions.index', $view_data);
    }

    public function create()
    {
        return view('discussions.create');
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        // INSERT INTO posts SET title='judul', content='content'
        DB::table('posts')
            ->insert([
                'title' => $title,
                'content' => $content,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        
        return redirect('discussions');
    }

    public function show(string $id)
    {
        // SELECT * FROM posts WHERE id="$id"
        $selected_posts = DB::table('posts')
            ->where('id', $id)
            ->first();

        $view_data = [
            'post' => $selected_posts
        ];
        
        return view('discussions.detail', $view_data);
    }

    public function edit(string $id)
    {
        // SELECT * FROM posts WHERE id="$id"
        $selected_posts = DB::table('posts')
            ->where('id', $id)
            ->first();

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
        DB::table('posts')
            ->where('id', $id)
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
        DB::table('posts')
            ->where('id', $id)
            ->delete();

        return redirect("discussions");
    }
}
