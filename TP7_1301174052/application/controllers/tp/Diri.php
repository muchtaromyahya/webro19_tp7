<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Diri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("datadiri_model");
    }

    public function index()
    {
        $data["datadiri"] = $this->datadiri_model->getAll();
        $this->load->view("tp/datadiri", $data);
    }
}