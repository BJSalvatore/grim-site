<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
        public function getHome() {
        return view('pages/home');
    }

        public function getAbout() {

        return view('pages/about');
    }

        public function getContact() {
          $bandphone = "(818)492-8690";
          $bandemail = "boboedy@yahoo.com";
          $bandaddress = [
            'bandcontact' => 'The Grim C/O Bob Oedy',
            'bandstreetaddress' => '20612 Mandell Street',
            'bandcity' => 'Winnetka',
            'bandstate'=> 'CA',
            'bandzip' => '91306',
            'bandcountry'=> 'USA'
          ];

        return view('pages/contact')->with("bandemail", $bandemail)->with("bandphone", $bandphone)->withBandaddress($bandaddress);
    }

        public function getMerch() {
        return view('pages/merch');
    }

        public function getPhotos() {
        return view('pages/photos');
    }

        public function getPress() {
        return view('pages/press');
    }

        public function getBlog() {
        return view('pages/blog');
    }

      // public function postContact(){
      //
      // };
    //
    //     public function getBlog_Entry() {
    //     return view('blog_entry');
    // }
    //


}
