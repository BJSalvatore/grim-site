<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
        public function getHome() {
        return view('pages/home');
    }

        public function getAbout() {
          $title = "About the band";
        return view('pages/about')->with("title", $title);
    }

        public function getContact() {
          $title ="Contact Us";
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

        return view('pages/contact')->with("title", $title)->with("bandemail", $bandemail)->with("bandphone", $bandphone)->withBandaddress($bandaddress);
    }

        public function getMerch() {
          $title = "Buy Our Stuff!";
        return view('pages/merch')->withTitle($title);
    }

        public function getPhotos() {
          $title = "Check Us Out!";
        return view('pages/photos')->withTitle($title);
    }

        public function getPress() {
          $title = "The Press Loves Us!";
        return view('pages/press')->withTitle($title);
    }

        public function getBlog() {
          $title = "Things We Have to Say!";
        return view('pages/blog')->withTitle($title);
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
