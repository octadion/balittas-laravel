<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Order;
use App\Models\Slide;
use App\Models\Post;
use App\Models\Public_info;

/**
 * HomeController
 *
 * PHP version 7
 *
 * @category HomeController
 * @package  HomeController
 * @author   Sugiarto <sugiarto.dlingo@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */
class HomeController extends Controller
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
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		   $post   =  Post::all('id', 'title', 'thumbnail', 'content', 'description', 'slug', 'category_id', 'date','views')->skip(0)->take(3);

     	
		
		 return view('front.home', compact('post'));
	}
    public function sejarah()
	{
		return $this->loadTheme('services.tentang.sejarah', $this->data);
	}
    public function listnews()
	{
		

      //  $post = Post::with('category')->where('user_id', Auth::user()->id);
       $post   = Post::all();

     return view('front.services.tentang.listnews', compact('post'));
    
	}

	public function organisasi()
	{
		

      //  $post = Post::with('category')->where('user_id', Auth::user()->id);
       $post   = Post::all();

     return view('front.services.tentang.organisasi', compact('post'));
    
	}

	public function visidanmisi()
	{
		

      //  $post = Post::with('category')->where('user_id', Auth::user()->id);
       $post   = Post::all();

     return view('front.services.tentang.visidanmisi', compact('post'));
    
	}

	public function kebijakanmutu()
	{
		

      //  $post = Post::with('category')->where('user_id', Auth::user()->id);
       $post   = Post::all();

     return view('front.services.tentang.kebijakanmutu', compact('post'));
    
	}

	public function sdm()
	{
		

      //  $post = Post::with('category')->where('user_id', Auth::user()->id);
       $post   = Post::all();

     return view('front.services.tentang.sdm', compact('post'));
    
	}
	public function berita($slug)
	{
		//$post = Post::all('id', 'title', 'thumbnail', 'content', 'description', 'slug', 'category_id', 'date')->whereId($id);
		//Post::find($slug)->increment('views');
		//$post = Post::select('id', 'title', 'thumbnail', 'content', 'description', 'slug', 'category_id', 'date','views')->whereId($id)->firstOrFail();
		$post = Post::select('id', 'title', 'thumbnail', 'content', 'description', 'slug', 'category_id', 'date','views','user_id')->where('slug',$slug)->firstOrFail();
		$post2 = Post::all('id', 'title', 'thumbnail', 'content', 'description', 'slug', 'category_id', 'date','views')->skip(0)->take(3);

		$post->increment('views');


        //return $post;
		 return view('front.services.tentang.berita', compact('post','post2'));
	}
	public function layanan($id)
	{
		//$post = Post::all('id', 'title', 'thumbnail', 'content', 'description', 'slug', 'category_id', 'date')->whereId($id);
		 $layanan = Public_info::select('id', 'title', 'content', 'slug','updated_at','created_at')->whereId($id)->firstOrFail();
		  $layanan2 = Public_info::all('id', 'title', 'content', 'slug','updated_at','created_at');
		  $post2 = Post::all('id', 'title', 'thumbnail', 'content', 'description', 'slug', 'category_id', 'date');
        //return $layanan;
		 return view('front.services.tentang.layanan', compact('layanan','layanan2','post2'));
	}

}
