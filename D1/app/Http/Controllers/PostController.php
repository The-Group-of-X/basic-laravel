<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $facebookPosts = [
            [
                'id' => 1,
                'author' => 'John Doe',
                'content' => 'Had a great day at the park with friends!',
                'timestamp' => '2025-08-04 14:30:00',
                'likes' => 120,
                'comments' => [
                    ['user' => 'Jane Smith', 'comment' => 'Sounds fun!'],
                    ['user' => 'Alex Brown', 'comment' => 'Wish I was there!'],
                    ['user' => 'Adish Brown', 'comment' => 'Wish I was oho!']
                ]
            ],
            [
                'id' => 2,
                'author' => 'Emily Johnson',
                'content' => 'Just finished reading an amazing book.',
                'timestamp' => '2025-08-04 10:15:00',
                'likes' => 87,
                'comments' => [
                    ['user' => 'Mike Lee', 'comment' => 'Which book?'],
                ]
            ],
            [
                'id' => 3,
                'author' => 'David Kim',
                'content' => 'Coffee is life ☕ #morningvibes',
                'timestamp' => '2025-08-04 08:00:00',
                'likes' => 200,
                'comments' => [
                    ['user' => 'Laura Chen', 'comment' => 'Totally agree!'],
                    ['user' => 'Chris Walker', 'comment' => 'Where did you get it from?']
                ]
            ]
        ];

        return view('post.post', compact('facebookPosts'));
    }
}
