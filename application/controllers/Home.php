<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	private $role;
	// function __construct()
	// {
	// 	// parent::__construct();
	// }
	public function index()
	{
		$this->load->helper('form');
		if(1==1){
			$this->signUpPage();
		}else{
			$data1 =[
				'da' => "111",
				'2' => "222",
				'3' => "333",
				'ggg' => "444",
				'reshs' => "555",
				'rgr' => "666",
				'f' => "777",
				'n' => "888",
				'9' => "999"
			];
			$this->load->view('welcome/welcome_message',$data1);
		}
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function signUpPage()
	{
		$this->load->view('sign');
	}
	public function signUp()
	{
		$post = $_POST;

		//随便加的判断
		if($post['register']=='true'){
			$register_data['username'] = $post['username'];
			$register_data['password'] = $post['password'];
			$this->Model->User_m->register($register_data);
		}else{
			$view_data = [
				'msg' => '无法注册'
			];
			$this->load->view('sign',$view_data);
		}
	}
}
