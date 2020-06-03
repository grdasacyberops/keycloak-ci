<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_SecureByKeycloak extends CI_Controller {
	
	public function __construct()
    {	
		parent::__construct();
		// $this->session->set_userdata(array('user'=>'test'));
		// $this->session->unset_userdata('user');
		// if($this->session->userdata('user'))
        // if (!$this->session->userdata('user')){
		// 	// redirect('login'); // the user is not logged in, redirect them!
			// echo "
			// 	<script src='http://localhost/codeigniter/assets/keycloak.js'></script>
			// 	<script>
			// 		var keycloak = Keycloak({
			// 			url:'http://localhost:8180/auth',
			// 			realm:'demo',
			// 			clientId:'ci-client2'
			// 		});
			// 		window.onload = function(){
			// 			keycloak.init({onLoad:'login-required'}).success(function(authenticated){
			// 				console.log(authenticated ? 'authenticated' : 'not authenticated');
			// 					if(authenticated){
			// 						var data=JSON.stringify(keycloak);
			// 						// var data='test';
			// 						var url='http://localhost/codeigniter/index.php/sessionbykeycloak/login'
			// 						fetch(url, {
			// 							mode:'no-cors',
			// 							method: 'POST',
			// 							body:{
			// 								'keycloak':data
			// 							}
			// 						});
			// 					}
			// 			}).error(function() {
			// 				console.log('failed to initialize');
			// 			});
			// 		}
			// 	</script>
			// 	";
        // }
    }
	public function index()
	{
		// return;
		// if(!empty($this->session->userdata('user'))){
		// 	$this->load->view('secured_view');
		// }
	}	
}
