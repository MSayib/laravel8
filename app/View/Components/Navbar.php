<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // Untuk membuat Dynamic Navbar
        $navs = [
            'Home' => '/',
            'About' => '/about',
            'Contact' => '/contact',
            'Profile' => '/profile',
        ];

        //digenerate artisan sebagai components.navbar, kita bisa ganti lokasi ke layouts.navbar
        return view('layouts.navbar', compact('navs'));
    }
}
