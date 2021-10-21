<?php

namespace App\Controllers;

class Layout extends BaseController
{

    public function header()
    {
        return view('layout/header');
    }

    public function sidebar()
    {
        return view('layout/sidebar');
    }

    public function footer()
    {
        return view('layout/footer');
    }
}


