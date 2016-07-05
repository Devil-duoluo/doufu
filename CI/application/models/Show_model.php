<?php
class Show_model extends CI_Model{
    public function show_list($id){
        $this->load->database();
        $userdata=$this->db->get_where('ji',array('id'=>$id));
        $result = @$userdata->result_array();
        return $result;
    }
    public function del($id){
        $this->load->database();
        $delete=$this->db->delete('ji',array('id'=>$id));
        if($delete){
            return true;
        }else{
            return false;
        }
    }
    public function change($id)
    {
        $Gname=($this->input->post('Gname'));
        $Gprice=($this->input->post('Gprice'));
        $Ginfo=($this->input->post('Ginfo'));
        $photo=($this->upload->data('file_name'));
        $this->load->database();
        $arr = array(
            'Gname' => $Gname,
            'Gprice' => $Gprice,
            'Ginfo' => $Ginfo,
            'photo' => $photo,
        );

        $this->db->where('id', $id);
        $this->db->update('ji',$arr);

    }
}