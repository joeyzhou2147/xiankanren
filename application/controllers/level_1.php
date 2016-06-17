<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Level_1 extends CI_Controller {

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
		$this->load->view('index');
	}

    public function home(){
        $this->load->view('level_1/home');
    }
    public function home01(){
        $this->load->view('level_1/home01');
    }

    public function search(){
        $this->load->view('level_1/search');
    }

    public function people(){
        $this->load->view('level_1/people');
    }


    public function people_contact(){
        $this->load->view('level_1/people_contact');
    }

    public function  me(){
        $this->load->view('level_1/me');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */