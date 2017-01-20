<?php
Class Usuario extends CI_Model
{
    function login($username, $password)
    {
        $this -> db -> select('id, email, password');
        $this -> db -> from('usuarios');
        $this -> db -> where('email', $username);
        $this -> db -> where('password', MD5($password));
        $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }

    function save($username, $password)
    {
        $data = array(
            'email' => $username,
            'password' => MD5($password),
        );
        $this->db->set($data);
        $this->db->insert('usuarios');
        $this->db->insert_id();
    }

}
?>