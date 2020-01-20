<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// header('Access-Control-Allow-Origin: *');

class Auth extends CI_Controller {

	public function index(){
		$this->load->view('auth/login');
	}

	public function callback(){
		$get = $this->input->get();
		if($get['appkey'] == APP_KEY){
			$requestEmployee = $this->get_curl('https://login.b4t.go.id/Api/employee?nip='.$get['nip'].'&appkey='.APP_KEY);
			$requestEmployee = json_decode($requestEmployee,TRUE);
			$session = [
				'nip'  => $get['nip'],
				'username' => $requestEmployee['username'],
				'logged_in' => TRUE
			];
			// $this->session->session_start();
			$this->session->set_userdata($session);
			redirect('Dashboard');
		}else{
			redirect('https://login.b4t.go.id');
		}
		exit();
	}
	public function destroy(){
		$this->session->sess_destroy();
		redirect('https://login.b4t.go.id');
	}
	private function get_curl($url){
		// Initiate the curl session
		$ch = curl_init();
		// Set the URL
		curl_setopt($ch, CURLOPT_URL, $url);
		// Removes the headers from the output
		curl_setopt($ch, CURLOPT_HEADER, 0);
		// Return the output instead of displaying it directly
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		// Execute the curl session
		$output = curl_exec($ch);
		if ($output === false) $output = curl_error($ch);
		// echo stripslashes($output);
		// Close the curl session
		curl_close($ch);
		// Return the output as a variable
		return $output;
	}
	
}
	
/* End of file Dashboard */
/* Location: ./application/controllers/Dashboard */