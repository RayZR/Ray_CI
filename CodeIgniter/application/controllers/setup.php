<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class setup extends CI_Controller{
    public function index(){
        $this->load->view('header',array('title'=>"setup"));
        $this->load->view('setup/default');
        $this->load->view('footer');

    }

    public function install(){
        error_reporting(E_ALL);
        ini_set('display_errors', True);
        $this->load->model('setup_model');
        $result=$this->setup_model->CreateDatabaseSchema();
        $this->load->view('header',array('title'=>"setup"));
        $this->load->view('setup/install',array('result'=>$result));
        $this->load->view('footer');
    }
}