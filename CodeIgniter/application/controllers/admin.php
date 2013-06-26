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

        if($this->session->userdata('loggedIn')==true){
        $this->load->model('user_model');
        $users=$this->user_model->getUsers();
        $this->load->view('header',array('title'=>'User Admin','js'=>array("public/js/admin.js")));
         $this->load->view('admin/adminNavBar');
        $this->load->view('admin/admin',array('users'=>$users));
        $this->load->view('footer');
        }
        else{
            redirect(site_url('admin/login'));
        }
    }

    public function login($submit=null){
        if($submit==null){
            $this->load->view("header",array('title'=>'RayZR'));
            $this->load->view('admin/login');
            $this->load->view('footer');
        }else{
        $email=$this->input->post('email');
        $password=$this->input->post('password');

        $this->load->model('user_model');
        $result=$this->user_model->login($email,$password);
        if($result==true){

            $this->session->set_userdata('loggedIn',true);
            $this->session->set_userdata('userId',$result->id);
            $this->session->set_userdata('role',$result->role);

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
        if($this->session->userdata('loggedIn')==true){
        $this->load->model('user_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url().'/admin/display_customers/';
        $config['total_rows'] = $this->user_model->count_customer_records();
        $config['per_page'] = 10;
        $config['full_tag_open'] = '  <div class="pagination pagination-centered"><ul>';
        $config['full_tag_close'] = '</ul> </div>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $this->pagination->initialize($config);

        $data['pagination']=$this->pagination->create_links();
        $page=($this->uri->segment(3))?$this->uri->segment(3):0;
        $data['results']=$this->user_model->display_customers($config['per_page'],$page);
        $data["links"]=$this->pagination->create_links();
         $this->load->view('header',array('title'=>'RayZR','js'=>array("public/js/admin.js")));
        $this->load->view('admin/adminNavBar');
         $this->load->view('admin/display_customers',$data);
        $this->load->view('footer');
        }else{
            redirect(site_url('admin/login'));
        }


    }



    public function delete_user($user_id){

       $this->load->model('user_model');
      $result=$this->user_model->delete($user_id);
        if($result=="1"){
            redirect('admin', 'refresh');
        }
    }

}