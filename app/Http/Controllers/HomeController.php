<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Order;
use App\Models\Slide;
use App\Models\Post;

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

		return $this->loadTheme('home', $this->data);
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
	public function berita($id)
	{
		//$post = Post::all('id', 'title', 'thumbnail', 'content', 'description', 'slug', 'category_id', 'date')->whereId($id);
		 $post = Post::select('id', 'title', 'thumbnail', 'content', 'description', 'slug', 'category_id', 'date')->whereId($id)->firstOrFail();
		  $post2 = Post::all('id', 'title', 'thumbnail', 'content', 'description', 'slug', 'category_id', 'date');
        //return $post;
		 return view('front.services.tentang.berita', compact('post','post2'));
	}
}
