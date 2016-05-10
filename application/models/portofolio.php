<?php

class Portofolio extends CI_Model{

    var $tbl = 'portofolio';
    function get_all() {

        $this->db->from($this->tbl);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result(); 
        }

    }

    function get_insert($data){
     $this->db->insert($this->tbl, $data);
     return TRUE;
 }

 function get_update($id,$data) {

    $this->db->where('id_portofolio', $id);
    $this->db->update($this->tbl, $data);

    return TRUE;
}

function get_hapus($id) {
    $this->db->where('id_portofolio', $id);
    $this->db->delete($this->tbl);
    if ($this->db->affected_rows() == 1) {

        return TRUE;
    }
    return FALSE;
}

function portofolio_byid($id){
    $this->db->from($this->tbl);
    $this->db->where('id_portofolio', $id);

    $query = $this->db->get();

    if ($query->num_rows() == 1) {
        return $query->result();
    }
}


}
?>
