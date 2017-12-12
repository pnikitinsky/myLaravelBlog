<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller;

/**
 * Class PagesController
 * @package App\Http\Controllers
 * Base Controller for Pavel's blog
 */
class PagesController extends Controller {
    public $data;
    public function __construct()  {
        $first = 'Pavel';
        $last  = 'N.';
        $fullname = $first . " " . $last;
        $email = "pavelN@gmail.com";
        $this->data = [];
        $this->data['email'] = $email;
        $this->data['first'] = $first;
        $this->data['fullname'] = $fullname;
    }

    /**
     * Returns the main view
     * @return mixed
     */
    public function index() {
        return view("pages.welcome")->withData($this->data);
    }

    /**
     * Returns the about view
     * @return mixed
     */
    public function about() {
        return view("pages.about")->withData($this->data);
    }

    /**
     * Returns the contact view
     * @return mixed
     */
    public function contact() {
        return view("pages.contact")->withData($this->data);
    }

//    public function postContact() {
//
//    }

}
