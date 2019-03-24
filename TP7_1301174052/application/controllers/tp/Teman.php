<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Teman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("teman_model");
        $this->load->model("datadiri_model");
    }

    public function index()
    {
        $data["teman"] = $this->teman_model->getAll();
        $data["datadiri"] = $this->datadiri_model->getAll();
        $this->load->view("tp/list", $data);
    }
}