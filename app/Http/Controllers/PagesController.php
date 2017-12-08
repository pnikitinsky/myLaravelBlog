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
    public function getIndex() {
        return view("pages.main")->withData($this->data);
    }

    /**
     * Returns the about view
     * @return mixed
     */
    public function getAbout() {
        return view("pages.about")->withData($this->data);
    }

    /**
     * Returns the contact view
     * @return mixed
     */
    public function getContact() {
        return view("pages.contact")->withData($this->data);
    }

//    public function postContact() {
//
//    }

}
