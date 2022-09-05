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

class LayananController extends Controller
{
   
	public function inovasilayanan()
	{
		$post   = Post::all();
		 return view('front.layanan.inovasilayanan', compact('post'));
	}

    public function penyediaansumber()
	{
		$post   = Post::all();
		 return view('front.layanan.penyediaansumber', compact('post'));
	}

    public function labolatorium()
	{
		$post   = Post::all();
		 return view('front.layanan.labolatorium', compact('post'));
	}
}