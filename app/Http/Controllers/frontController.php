<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index()
    {
        return view ('front_home');
    }
    public function about()
    {   $data['title']="about us";
         $data['path']="about ";
        return view ('front_about',$data);
    }
    public function service()
    {   $data['title']="Service";
         $data['path']="Service";
        return view ('front_service',$data);
    }
    public function feature()
    {   $data['title']="Feature";
         $data['path']="Feature";
        return view ('front_feature',$data);
    }
    public function team()
    {   $data['title']="Team";
         $data['path']="Team";
        return view ('front_team',$data);
    }
    public function appointment()
    {   $data['title']="Appointment";
         $data['path']="Appointment";
        return view ('front_appointment',$data);
    }
    public function testimonial()
    {   $data['title']="Tstimonial";
         $data['path']="Testimonial";
        return view ('front_testimonial',$data);
    }
    public function error()
    {   $data['title']="Error";
         $data['path']="Error";
        return view ('front_error',$data);
    }
     public function contact()
    {   $data['title']="Contact";
         $data['path']="Contact";
        return view ('front_Contact',$data);
    }

}
