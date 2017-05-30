<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

	public function index(){
		$this->load->view('template', $this->data);
	}

	public function login() {
		$lang = 'french';
		if(isset($_GET['lang_user'])){
			$lang = $_GET['lang_user'];
		}
		$this->lang->load('global', $lang);

		$this->session->unset_userdata('user');
		$this->load->model(array('Users_m','Connections_m'));

		if($this->input->post('send-login')) {

			$login = $this->input->post('login');
			$password = $this->input->post('password');
			$user = $this->Users_m->login($login,$password);
			if($user){
				$this->Connections_m->insert(array(
					'users_id' => $user->id,
					'timestamp' => strtotime('now')
				));
				$this->session->set_userdata('user', $user);
				redirect('/watches/index');
				die();
			}else{
				$this->addError($this->lang->line('error_login'));
			}
		}		
		$this->load->view('template_landing');
	}

	public function logout() {
		$this->session->unset_userdata('user');
		redirect('users/login');
	}

	public function lost_password(){
		$lang = 'french';
		if(isset($_GET['lang_user'])){
			$lang = $_GET['lang_user'];
		}
		$this->lang->load('global', $lang);
		$this->load->model(array('Users_m'));
		if($this->input->post('send-login')) {
			$email = $this->input->post('login');
			$user = $this->Users_m->emailExist($email);
			
			if($user){
				$password = uniqid();
				$params = array(
					'to' => $email,
					'subject' => $this->lang->line('new_password_subject'),
					'body' => array(
						'template' => 'emails/new_password.php',
						'data' => array(
							'password' => $password
						)
					)
				);
				if($this->sendMail($params)){
					$new_param['id'] = $user->id;
					$new_param['password'] = md5($password);
					$this->Users_m->update($new_param);
					$this->addMessage($this->lang->line('new_password_send').$email);
					redirect('users/login');
				}
				
			}else{
				$this->addError($this->lang->line('email_not_exist'));
			}
		}
		$this->load->view('template_landing');
	}

}
