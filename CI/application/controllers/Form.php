<?php

class Form extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username','callback_username_check');
        $this->form_validation->set_rules('password', 'Password', 'required',array('required'=>'密码不能为空'));
        $this->form_validation->set_rules('email', 'Email', 'required',array('required'=>'邮箱不能为空'));
        $this->form_validation->set_rules('phone', 'Phone', 'required',array('required'=>'手机不能为空'));
        $this->form_validation->set_rules('number', 'Number', 'required',array('required'=>'验证码不能为空'));
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('register');
        }
        else {
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $phone=$this->input->post('phone');
            $email=$this->input->post('email');
            $number=$this->input->post('number');
            $time=date('Y/m/d H:i:s');
            $ip=$this->input->server('REMOTE_ADDR');
            $this->load->database();
            $this->db->query("insert into `ji` VALUE ('','{$username}','{$password}','{$email}','{$phone}','{$number}','','{$time}','1','{$ip}')");
            $this->load->view('formsuccess');
        }
    }

    public function username_check($username){
        $valid_email = "/[0-9][@][A-Za-z0-9]*[.][com]/";
        $valid_mobile = "/^[1]{1}[0-9]{10}$/";
        if (!preg_match($valid_email, $username) && !preg_match($valid_mobile, $username)) {
            $this->form_validation->set_message('username_check', '用户名必须是邮箱或者是电话');
            return FALSE;}
            if (empty($username)) {
                $this->form_validation->set_message('username_check', '用户名不能为空');
                return false;
            }
            $this->load->database();
            $userdata = $this->db->get_where('ji',array('username'=>$username));
            $a=@$userdata->result_array();
            if ($username == @$a[0]['username']) {
                $this->form_validation->set_message('username_check', '用户名已存在');
                return false;
            }
        }
    function login(){
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user', 'User','callback_user_check');
        $this->form_validation->set_rules('pass', 'Pass', 'callback_pass_check');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login');
        }
    }
    function user_check(){
        $user=$this->input->post('user');
        if (empty($user)) {
            $this->form_validation->set_message('user_check', '用户名不能为空');
            return false;
        }
    }
    function pass_check(){
        $pass = $this->input->post('pass');
        $this->load->database();
        $datas = $this->db->get_where('ji', array('password' => $pass));
        $a = @$datas->result_array();
        if ($pass == @$a[0]['password']) {
            $this->form_validation->set_message('pass_check', '√');
            return false;
        }
    }
}