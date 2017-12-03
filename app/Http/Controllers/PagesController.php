<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller;

class PagesController extends Controller {
    public function getIndex() {
        return view("pages.welcome");
    }

    public function getAbout() {
        $first = 'Pavel';
        $last  = 'N.';
        $fullname = $first . " " . $last;
        $email = "pavelN@gmail.com";
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;
        return view("pages.about")->withData($data);
    }

    public function getContact() {
        return view("pages.contact");
    }

//    public function postContact() {
//
//    }

}
