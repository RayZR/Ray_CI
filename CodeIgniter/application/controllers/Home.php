<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
        $this->load->view('header',array('title'=>"RayZR",
            'css'=>array("public/home.css"),
            'js'=>array("public/js/home.js")));
		$this->load->view('home/home');
        $this->load->view('footer');
	}

    public function callBack($para1,$para2){
        echo "The input is".$para1."and".$para2;
    }

    public function about(){
        $this->load->view('header',array('title'=>"About"));
        $this->load->view('home/about');
        $this->load->view('footer');
    }

    public function login($submit=null){
        if($submit==null){
            $this->load->view("header",array('title'=>'RayZR'));
            $this->load->view('login/login');
            $this->load->view('footer');
    }else{
        $email=$this->input->post('email');
        $password=$this->input->post('password');

        $this->load->model('user_model');
        $result=$this->user_model->login($email,$password);
        if($result==true){
            $this->session->set_userdata('userId',$result->id);
            $this->session->set_userdata('role',$result->role);
            redirect(site_url('admin/dashboard'));
        }else{
            redirect(site_url('Home/login'));
        }
        }
    }

}

