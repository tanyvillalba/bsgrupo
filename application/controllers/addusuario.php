<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddUsuario extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('usuario','',TRUE);
    }

    function index()
    {
        $this->load->library('form_validation');
        //This method will have the credentials validation
            //$this->load->view('addusuariomantenimiento');
        $formSubmit = $this->input->post('submitForm');
        if( $formSubmit == 'AddUsuario' ) {
            $username = $this->input->post('email');
            $password = $this->input->post('password');
            $result = $this->usuario->save($username, $password);
            $this->load->view('addusuariomantenimiento');
        }
        else
        {
            $this->load->view('login_view');
        }
    }
}