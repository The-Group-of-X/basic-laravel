<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {

        if (request()->has('getData')) {
            $data = Post::orderBy('id', 'desc');
            if (request()->has('filter') && request('filter') != null) {
                $data = $data->where('title', 'LIKE', '%' . request('filter') . '%');
            }
            $data = $data->get();
            return response()->json(['data' => $data]);
        }


        if (request()->has('statusChange')) {
            $post = Post::where('id', request('id'))->first();
            if ($post) {
                $post->is_active = !$post->is_active;
                if ($post->save()) {
                    return response()->json(['message' => 'Status changed successfully', 'status' => true]);
                } else {
                    return response()->json(['message' => 'Status change failed', 'status' => false]);
                }
            } else {
                return response()->json(['message' => 'Post not found', 'status' => false]);
            }
        }

        return view('info.index');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // validation
        $data = new Post();
        $data->title = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        if ($data->save()) {
            return response()->json(['message' => 'Info submitted successfully', 'status' => true]);
        } else {
            return response()->json(['message' => 'Info submission failed', 'status' => false]);
        }
    }
}
