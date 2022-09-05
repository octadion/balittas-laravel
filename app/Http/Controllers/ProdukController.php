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

class ProdukController extends Controller
{
   
	public function varietasunggul()
	{
		$post   = Post::all();
		 return view('front.produk.varietasunggul', compact('post'));
	}

    public function hakkekayaan()
	{
		$post   = Post::all();
		 return view('front.produk.hakkekayaan', compact('post'));
	}

}