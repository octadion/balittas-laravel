<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\listnews;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class KomoditasController extends Controller
{
   
	public function pemanis()
	{
		$post   = Post::all();
		 return view('front.komoditas.pemanis', compact('post'));
	}

	public function seratbuah()
	{
		$post   = Post::all();
		 return view('front.komoditas.seratbuah', compact('post'));
	}

    public function tembakau()
	{
		$post   = Post::all();
		 return view('front.komoditas.tembakau', compact('post'));
	}

    public function tanamanpenghasilserat()
	{
		$post   = Post::all();
		 return view('front.komoditas.tanamanpenghasilserat', compact('post'));
	}

    public function seratbatangdaun()
	{
		$post   = Post::all();
		 return view('front.komoditas.seratbatangdaun', compact('post'));
	}
}