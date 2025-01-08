<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Controller extends BaseController{
    
    public function home(){
        return view('home');
    }

    public function kriteria(){
        return view('kriteria');
    }

    public function calonKaryawan(){
        return view('home');
    }

    public function hasilAkhir(){
        return view('home');
    }

}
