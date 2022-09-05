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

class KontakController extends Controller
{
   
	public function kepuasanpelanggan()
	{
		$post   = Post::all();
		 return view('front.kontak.kepuasanpelanggan', compact('post'));
	}

    public function layananpengaduan()
	{
		$post   = Post::all();
		 return view('front.kontak.layananpengaduan', compact('post'));
	}

}