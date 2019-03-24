<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Teman_model extends CI_Model {
    private $_table = "tb_datateman"; //nama tabel

    // nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
    public $id_teman;
    public $nama;
    public $panggilan;
    public $email;

    /*
    Rules ini nanti kita butuhkan untuk validasi input.

    Pada Rules di atas, kita memberikan aturan untuk 
    wajib mengisi (required) field
    */
    public function rules(){
        return [

        ];
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["id_teman" => $id])->row();
    }
}