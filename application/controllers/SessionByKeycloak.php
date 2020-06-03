<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class SessionByKeycloak extends CI_Controller {  
	  
    public function login()  
    {  
		// var_dump($_POST);exit;
		// $keycloak=$_POST['keycloak'];
		$this->session->set_userdata(array('user'=>'$keycloak'));
		return true; 
	}
	public function logout()  
    {  
		//removing session 
		$this->session->unset_userdata('user');
		return true;  
        // redirect("Login");  
    }    
    // public function process()  
    // {  
	// 	if(!empty($this->session->userdata('user'))){
	// 		$this->load->view('secured_view');
	// 		return;
	// 	}
	// 	$user = $this->input->post('user');  
	// 	$pass = $this->input->post('pass');
	// 	$data = array(
	// 		'grant_type' => 'password',
	// 		'client_id' => 'ci-client',
	// 		'client_secret' => '15227149-7dfb-4c8a-998d-f9efb9c57ec9',
	// 		'scope' => 'openid',
	// 		'username' => $user,
	// 		'password' => $pass,
	// 	);

	// 	$data_string = http_build_query($data);
		
	// 	$curl = curl_init('http://localhost:8180/auth/realms/demo/protocol/openid-connect/token');
	// 	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");

	// 	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	// 	'Content-Type: application/x-www-form-urlencoded',
	// 	'Content-Length: ' . strlen($data_string)
	// 	)
	// 	);

	// 	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  // Make it so the data coming back is put into a string
	// 	curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);  // Insert the data

	// 	// Send the request
	// 	$result = curl_exec($curl);
	// 	$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	// 	// Free up the resources $curl is using
	// 	curl_close($curl);
	// 	// echo $httpcode;
	// 		// echo 'test';
    //     if ($httpcode==200)   
    //     {  
    //         //declaring session  
	// 		$this->session->set_userdata(array('user'=>$result));
    //         $this->load->view('secured_view');  
    //     }  
    //     else{  
    //         $data['error'] = 'Your Account is Invalid';  
    //         $this->load->view('login_view', $data);  
    //     }  
	// }   
}  
?>  
