<?php
class Users extends CI_Controller{
    
    
    function dashsboard(){
        $this->template->load('adminTemplate','dashboard');
    }
    function login(){
        if(isset($_POST['submit']))
        {
            $username = $_POST['username'];
            $pass  = md5($_POST['password']);
            $check = $this->db->get_where('users',array('username'=>$username,'password'=>$pass  ));
            if($check->num_rows()>0)
            {
                $sess = array('status'=>'login');
                $this->session->set_userdata($sess);
                redirect('kendaraan');
            }else{
                $this->load->view('login');
            }
        }else{
                    $this->load->view('login');
        }
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect('kendaraan');
    }
}