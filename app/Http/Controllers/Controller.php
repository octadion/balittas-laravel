<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Repositories\Front\CartRepository;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $data = [];
    protected $uploadsFolder = 'uploads/';

    // protected $provinces = [];

    // private $cartRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->initAdminMenu();

        // $this->cartRepository = new CartRepository();
    }

    /**
     * Initiate admin menu
     *
     * @return void
     */
    private function initAdminMenu()
    {
        $this->data['currentAdminMenu'] = 'dashboard';
        $this->data['currentAdminSubMenu'] = '';
    }

    /**
     * Load view for particular theme
     *
     * @param string $view view path
     * @param arry   $data data
     *
     * @return void
     */
    protected function loadTheme($view, $data = [])
    {
        return view('front/' .'/'. $view, $data);
    }

    /**
     * Get provinces
     *
     * @return array
     */
    /**
     * Get cities by province ID
     *
     * @param int $provinceId province id
     *
     * @return array
     */
}
