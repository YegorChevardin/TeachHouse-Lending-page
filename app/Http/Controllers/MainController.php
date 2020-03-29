<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\User;
use App\Post;


class MainController extends Controller {
	 public function view() {
		if(View::exists('Main/main')) {
			$posts = Post::orderBy('created_at', 'DESC')->paginate(1);
			$postsDate = [];
			foreach($posts as $post) {
				$postsDate[$post->id] = date('j F Y, H:i', strtotime($post->created_at));
			}
			
            return view('Main/main', ['posts' => $posts, 'postsDate' => $postsDate]);
        }
        abort(404);
	}
	
	public function addPost(Request $request) {
		if(View::exists('Main/main')) {
			$posts = Post::orderBy('created_at', 'DESC')->paginate($request->addPost);
			$postsDate = [];
			foreach($posts as $post) {
				$postsDate[$post->id] = date('j F Y, H:i', strtotime($post->created_at));
			}
			
			return view('Main/layouts/posts', ['posts' => $posts, 'postsDate' => $postsDate]);
		}
		abort(404);
	}
}