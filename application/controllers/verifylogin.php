<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('usuario','',TRUE);
        $this->load->model('relacion_usuarios_tipos','',TRUE);
    }

    function index()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

        if($this->form_validation->run() == FALSE)
        {
            //Field validation failed.  User redirected to login page
            $this->load->view('login_view');
        }
        else
        {
            $username = $this->input->post('email');
            $password = $this->input->post('password');
            $result = $this->usuario->login($username, $password);
            $cod=0;
            if($result)
            {
                $sess_array = array();
                foreach($result as $row)
                {
                   $cod=$row->id;
                }
            }

            $result = $this->relacion_usuarios_tipos->select($cod);
            $acceso=0;
            if ($result) {
                foreach ($result as $row) {
                    $acceso = $row->usuarios_tipos_id;
                }
            }
            if ($acceso==1)
            {
                $this->load->view('bienvenidoadmin');
            }
            else
            {
                $this->load->view('bienvenidousuario');
            }

        }

    }

    function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('email');

        //query the database
        $result = $this->usuario->login($username, $password);

        if($result)
        {
            $sess_array = array();
            foreach($result as $row)
            {
                $sess_array = array(
                    'id' => $row->id,
                    'email' => $row->email
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Usuario invalido');
            return false;
        }
    }
}
?>