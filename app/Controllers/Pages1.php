<?php

namespace App\Controllers;

class Pages1 extends BaseController
{
    public function index()
    {

        $data =[
            'title'=>"Home | Web Programming",
            'car'=>["toyota", "honda", "Ferrari"]
        ];

 
       return view('pages/home', $data);
    }

    public function about()
    {
        $data =[
            'title'=>"About me",
        ];
        return view('pages/about', $data);

    }

    public function contact(){
        $data =["title"=>"contact us"];
        return view('pages/contact', $data);
    }

}