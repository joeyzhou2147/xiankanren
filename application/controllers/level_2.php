<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Level_2 extends CI_Controller {

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
    function __construct()
    {
        parent::__construct();
    }

    public function index()
	{
		$this->load->view('index');
	}

    public function filter(){
        $this->load->view('level_2/filter');
    }

    public function edit(){
        $this->load->view('level_2/edit');
    }

    public function comment(){
        $this->load->view('level_2/comment');
    }

    public function  me(){
        $this->load->view('level_1/me');
    }

    public function  me_my_card(){
        $this->load->view('level_2/me_my_card');
    }

    public function  me_my_notify(){
        $this->load->view('level_2/me_my_notify');
    }

    public function  me_my_tag(){
        $this->load->view('level_2/me_my_tag');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */