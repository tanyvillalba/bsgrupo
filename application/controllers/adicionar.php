<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adicionar extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('usuario','',TRUE);
    }
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->library('form_validation');
        $formSubmit = $this->input->post('submitForm');
        if( $formSubmit == 'AddUsuario' )
        {
            $this->load->view('bienvenidoadmin');
        }
        else
        {
            $this->load->view('login_view');
        }

    }
}