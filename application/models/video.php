<?php

class Video extends CI_Model{

    var $tbl = 'video';
    function get_all() {

        $this->db->from($this->tbl);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result(); 
        }

    }


 function get_update($id,$data) {

    $this->db->where('id_video', $id);
    $this->db->update($this->tbl, $data);

    return TRUE;
}

function video_byid($id){
    $this->db->from($this->tbl);
    $this->db->where('id_video', $id);

    $query = $this->db->get();

    if ($query->num_rows() == 1) {
        return $query->result();
    }
}


}
?>
