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
		   $post   = Post::all();

     	
		
		 return view('front.home', compact('post'));
	}
    public function sejarah()
	{
		return $this->loadTheme('services.tentang.sejarah', $this->data);
	}
    public function listnews()
	{
		

      //  $post = Post::with('category')->where('user_id', Auth::user()->id);
	 $post = Post::all();

     return view('front.services.tentang.listnews', compact('post'));
    
	}
	public function berita($id)
	{
		//$post = Post::all('id', 'title', 'thumbnail', 'content', 'description', 'slug', 'category_id', 'date')->whereId($id);
		 $post = Post::select('id', 'title', 'thumbnail', 'content', 'description', 'slug', 'category_id', 'date')->whereId($id)->whereCategory_id('6')->firstOrFail();
		  $post2 = Post::all('id', 'title', 'thumbnail', 'content', 'description', 'slug', 'category_id', 'date')->take(1);
        //return $post;
		 return view('front.services.tentang.berita', compact('post','post2'));
	}
	public function layanan($id)
	{
		//$post = Post::all('id', 'title', 'thumbnail', 'content', 'description', 'slug', 'category_id', 'date')->whereId($id);
		 $layanan = Public_info::select('id', 'title', 'content', 'slug','updated_at','created_at')->whereId($id)->firstOrFail();
		  $layanan2 = Public_info::all('id', 'title', 'content', 'slug','updated_at','created_at')->take(1);
		  $post2 = Post::all('id', 'title', 'thumbnail', 'content', 'description', 'slug', 'category_id', 'date');
        //return $layanan;
		 return view('front.services.tentang.layanan', compact('layanan','layanan2','post2'));
	}

}
