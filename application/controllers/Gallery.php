<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

    /*
     * Index page for this controller.
     */
    public function index()
    {
        $this->load->view('gallery');
    }
}
