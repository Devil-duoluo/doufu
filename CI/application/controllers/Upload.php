<?php

class Upload extends CI_Controller {
    public function index()
    {
        $this->do_upload();
    }

    public function do_upload()
    {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png|txt';
        $config['max_size']         = 2048;
        $config['max_width']        = 1024;
        $config['max_height']       = 768;
        $this->load->library('upload', $config);
        $this->load->helper(array('form','url'));
        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $this->load->database();
            $Gname=($this->input->post('Gname'));
            $Ginfo=($this->input->post('Ginfo'));
            $Gprice=($this->input->post('Gprice'));
            $photo=($this->upload->data('file_name'));
            $this->db->query("insert into `ji` VALUE ('','$Gname','$Gprice','$Ginfo','$photo','admin')");
            $this->load->view('upload_success', $data);
        }
    }
    public function change($id)
    {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png|txt';
        $config['max_size']         = 2048;
        $config['max_width']        = 1024;
        $config['max_height']       = 768;
        $this->load->library('upload', $config);
        $this->load->helper(array('form','url'));
        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                $this->load->database();
                $Gname=($this->input->post('Gname'));
                $Ginfo=($this->input->post('Ginfo'));
                $Gprice=($this->input->post('Gprice'));
                $photo=($this->upload->data('file_name'));
                $this->db->query("insert into `ji` VALUE ('','$Gname','$Gprice','$Ginfo','$photo','admin')");
                $this->load->view('upload_success', $data);
        }
        $this->load->helper(array( 'url'));
        $this->load->model('Show_model');
        $this->Show_model->change($id);
        $this->load->view('upload_success', $data);
    }
    public  function homes(){
        $this->load->helper(array('url'));
        $this->load->database();
        $userdata=$this->db->get('ji');
        $result = @$userdata->result_array();
        $this->load->view('home',array('photo'=>$result));
    }
    public function show($id){
        $this->load->model('Show_model');
        $list=$this->Show_model->show_list($id);
        $this->load->view('show',array('list'=>$list));
    }
    public function del($id){
        $this->load->helper(array('url'));
        $this->load->model('Show_model');
        $this->Show_model->del($id);
        redirect('upload/homes');
    }
}
