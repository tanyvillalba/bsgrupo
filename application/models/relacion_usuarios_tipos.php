<?php
Class Relacion_Usuarios_Tipos extends CI_Model
{
    function select($usuarios_id)
    {
        $this -> db -> select('id, usuarios_id, usuarios_tipos_id');
        $this -> db -> from('relacion_usuarios_tipos');
        $this -> db -> where('usuarios_id', $usuarios_id);
        $query = $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }

    function save($usuarios_id, $usuarios_tipos_id)
    {
        $data = array(
            'usuarios_id' => $usuarios_id,
            'usuarios_tipos_id' => $usuarios_tipos_id,
        );
        $this->db->set($data);
        $this->db->insert('relacion_usuarios_tipos');
        $this->db->insert_id();
    }

}
?>