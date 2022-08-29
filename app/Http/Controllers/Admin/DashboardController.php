<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Data;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PublicInfo;
use App\Models\User;

class DashboardController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
        $user = User::select('id','name')->count();
		$post = Post::select('id')->count();
		$data = Data::select('id')->count();
		$info = PublicInfo::select('id')->count();
		// $post = Post::select('id', 'title', 'thumbnail', 'content', 'description', 'slug', 'category_id', 'date','user_id')->whereId($id)->where('user_id', Auth::user()->id)->firstOrFail();
		return view('admin.dashboard.index', compact('user', 'post','data','info'));
	}
}
