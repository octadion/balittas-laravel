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

class InformasiPublikController extends Controller
{
   
	public function penghargaan()
	{
		$post   = Post::all();
		 return view('front.informasi-publik.penghargaan', compact('post'));
	}

    public function indexkepuasan()
	{
		$post   = Post::all();
		 return view('front.informasi-publik.indexkepuasan', compact('post'));
	}

    public function publichearing()
	{
		$post   = Post::all();
		 return view('front.informasi-publik.publichearing', compact('post'));
	}

    public function zonaintegeritas()
	{
		$post   = Post::all();
		 return view('front.informasi-publik.zonaintegeritas', compact('post'));
	}

    public function corevalues()
	{
		$post   = Post::all();
		 return view('front.informasi-publik.corevalues', compact('post'));
	}
}