<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>This is secured by keycloak</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		display:block;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	<script src='http://desenv.elofy.com.br/assets/keycloak.js'></script>
	<script>
		// var keycloak = Keycloak({
		// 	url:'http://132.145.137.32:8080/auth/',
		// 	realm:'master',
		// 	clientId:'ci-client'
		// });
		var keycloak= Keycloak('http://desenv.elofy.com.br/keycloak.json');
		window.onload = function(){
			keycloak.init({onLoad:'login-required'}).success(function(authenticated){
				// console.log(authenticated ? 'authenticated' : 'not authenticated');
				// 	if(authenticated){
				// 		var data=JSON.stringify(keycloak);
				// 		var url='<?php echo site_url('sessionbykeycloak/login')?>';
				// 		fetch(url, {
				// 			mode:'no-cors',
				// 			method: 'POST',
				// 			body:{
				// 				'keycloak':data
				// 			}
				// 		});
						
				// 	}
			}).error(function() {
				console.log('failed to initialize');
			});
		}
	</script>
	<script>
		async function unset_session_data(){
			keycloak.logout();
			// var url='<?php echo  site_url('/sessionbykeycloak/logout')?>';
			// 	const response = await fetch(url, {
			// 	mode:"no-cors",
			// 	method: "POST",
			// 	// body: "password=admin123&username=demouser",
			// 	// headers:{
			// 	// 	"Content-type":"application/x-www-form-urlencoded"
			// 	// }
			// 	});
			// console.log(response);
		}
	</script>
</head>
<body>

<div id="container">
	<h1>Secured view by keycloak</h1>
	<div id="body">
		<p>You can't see this page if you don't login by keycloak.</p>	
	</div>
	<a href="<?php echo site_url('nonsecured')?>">Go to public view</a>
	<a href="#" onclick="unset_session_data()">Logout</a>
</div>

</body>
</html>
