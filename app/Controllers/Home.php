<?php

namespace App\Controllers;

class Home extends BaseController {

    public function index() {
        $data = [
            'full_name' => 'Rony Chandra Kudus',
            'avatar'    => 'https://cacan.id/wp-content/uploads/my_blog/cacan-400x400.jpg',
            'icon'      => 'fas fa-home',
            'title'     => 'Home'
        ];
        return view('home',$data);
    }

    //--------------------------------------------------------------------
}
