<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Order;
use App\Models\Slide;

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
		return $this->loadTheme('services.tentang.listnews', $this->data);

	}
	public function berita()
	{
		return $this->loadTheme('services.tentang.berita', $this->data);
		
	}
}
