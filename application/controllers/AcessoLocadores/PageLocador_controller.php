<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PageLocador_controller extends CI_Controller
{
    // d1
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('page_locador');
    }
}