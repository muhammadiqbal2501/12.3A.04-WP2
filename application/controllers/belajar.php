<?php

class belajar extends CI_Controller
{
    public function index()
    {
         $this->load->view('view_belajar');
    }
    public function parsing()
    {
        //$data['bio'] = "nama saya iqbal";
        $data=array(
            'nama' => "m.iqbal",
            'pekerjaan' => "apahayoo"
        );

        $this->load->view('view_belajar', $data);
    }
 }
