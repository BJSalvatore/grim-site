<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
        public function getHome() {
        return view('home');
    }

        public function getAbout() {
        return view('about');
    }

        public function getBlog_Entry() {
        return view('blog_entry');
    }

        public function getBlog() {
        return view('blog');
    }

        public function getContact() {
        return view('contact');
    }

        public function getMerch() {
        return view('merch');
    }

        public function getPhotos() {
        return view('photos');
    }

        public function getPress() {
        return view('press');
    }
}
