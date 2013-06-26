<?php
/**
 * Created by JetBrains PhpStorm.
 * User: acer
 * Date: 11/06/13
 * Time: 8:34 PM
 * To change this template use File | Settings | File Templates.
 */

class admin extends CI_Controller{
    public function index(){
        redirect(site_url('admin/login'));
    }

    public function dashboard(){
        $this->load->model('user_model');
        $users=$this->user_model->getUsers();
        $this->load->view('header',array('title'=>'User Admin','js'=>array("public/js/admin.js")));
        $this->load->view('admin/admin',array('users'=>$users));
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
        if($result=='true'){
            $this->session->set_userdata('userId',$result->id);
            $this->session->set_userdata('role',$result->role);
            die();
            redirect(site_url('admin/dashboard'));
        }else{
            redirect(site_url('admin/login'));
        }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url('admin/login'));
    }



    public function create_user(){
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $this->load->model("user_model");
         $result=$this->user_model->create($email,$password);
        if($result=="1"){
            redirect('admin', 'refresh');
        }
        if($result==false){

        }
    }

    public function display_customers(){
         $this->load->model('user_model');
         $customers=$this->user_model->display_customers();

         $this->load->view('header',array('title'=>'RayZR'));
         $this->load->view('admin/display_customers',array('customers'=>$customers));
         $this->load->library('pagination');
        $config['base_url'] = 'http://rayzrcodeigniterpractice.com/admin/display_customers';
    }

    public function delete_user($user_id){

       $this->load->model('user_model');
      $result=$this->user_model->delete($user_id);
        if($result=="1"){
            redirect('admin', 'refresh');
        }
    }

}