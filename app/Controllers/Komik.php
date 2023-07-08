<?php

namespace App\Controllers;
use App\Models\KomikModel;

class Komik extends BaseController{

    protected $komikModel; //Declare variable
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
    
    // Select All Komik
    public function index(){
    $data =[
        'title'=>"Home | Web Programming",
        'car'=>["toyota", "honda", "Ferrari"],
        'komik'=> $this->komikModel->getKomik(),
    ];

    return view('komik/index', $data);
    }


    public function detail($slug){
        $data = [
            'title'=>"detail | Web Programming",
            'komik'=>$this->komikModel->getKomik($slug),
        ];
        return view("/komik/detail", $data);
    }

}