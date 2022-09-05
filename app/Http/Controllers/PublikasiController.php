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

class PublikasiController extends Controller
{

	public function prosiding()
	{
		$post   = Post::all();
		return view('front.publikasi.prosiding', compact('post'));
	}

	public function monografbuku()
	{
		$post   = Post::all();
		return view('front.publikasi.monograf-buku', compact('post'));
	}

	public function infoteknologi()
	{
		$post   = Post::all();
		return view('front.publikasi.info-teknologi', compact('post'));
	}
	
	public function leaflet()
	{
		$post   = Post::all();
		return view('front.publikasi.leaflet', compact('post'));
	}

	public function jurnalpenelitian()
	{
		$post   = Post::all();
		return view('front.publikasi.jurnalpenelitian', compact('post'));
	}

	public function lainlain()
	{
		$post   = Post::all();
		return view('front.publikasi.lainlain', compact('post'));
	}
}