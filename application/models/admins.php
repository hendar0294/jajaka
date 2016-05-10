<?php

class Admins extends CI_Model{

    var $tbl = 'admin';
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

    $this->db->where('id', $id);
    $this->db->update($this->tbl, $data);

    return TRUE;
}

function get_hapus($id) {
    $this->db->where('id', $id);
    $this->db->delete($this->tbl);
    if ($this->db->affected_rows() == 1) {

        return TRUE;
    }
    return FALSE;
}

function admin_byid($id){
    $this->db->from($this->tbl);
    $this->db->where('id', $id);

    $query = $this->db->get();

    if ($query->num_rows() == 1) {
        return $query->result();
    }
}

// function get_jadwal_bykontak($kontak){
//     $this->db->from($this->tbl);
//     $this->db->where('kontak', $kontak);

//     $query = $this->db->get();

//     if ($query->num_rows() == 1) {
//         return $query->result();
//     }
// }
}
?>
