<?php
//Controler
namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        //return view('welcome_message');
        //return view('v_home');
        return view('welcome_message');


    }
    public function home4(): string
    {
        //return view('welcome_message');
        //return view('v_home');
        return view('v_home');


    }
    public function produk(): string
    {
        //return view('welcome_message');
        //return view('v_home');
        return view('v_produk');


    }
}
