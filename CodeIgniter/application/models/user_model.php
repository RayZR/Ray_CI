<?php
/**
 * Created by JetBrains PhpStorm.
 * User: acer
 * Date: 11/06/13
 * Time: 8:30 PM
 * To change this template use File | Settings | File Templates.
 */

class user_model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function create($email,$password){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','email','is_unique[user.email]');
        if($this->form_validation->run()==false){
            echo "duplicated email";
            return false;
        }else{
            $result= $this->db->insert('user',array(
                'email'=>$email,
                'password'=>sha1($password)
            ));
            return $result;
        }

    }
//return Array
//Keep UserId null will Get the whole table
    public function getUsers($userId=null){
        if($userId==null){
            $query=$this->db->get('user');
        }else{
            $query=$this->db->get_where('user',['userId'=>$userId]);
        }

        return $query->result();
    }

    public function delete($user_id){
        $this->db->where(array('userId'=>$user_id));
        $result=$this->db->delete('user');

        return $result;
    }

    public function login($email,$password){
        $query= $this->db->get_where('user',array(
            'email'=>$email,
            'password'=>sha1($password)
        ));
        $result=$query->result();
        return $result;

    }

    public function display_customers(){
        $query=$this->db->get('myTable');
        return $query->result();
    }

}