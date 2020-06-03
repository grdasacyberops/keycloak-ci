/*
 * JBoss, Home of Professional Open Source
 * Copyright 2016, Red Hat, Inc. and/or its affiliates, and individual
 * contributors by the @authors tag. See the copyright.txt in the
 * distribution for a full listing of individual contributors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
const keycloak = Keycloak({
	"realm": "demo",
	"auth-server-url": "http://localhost:8180/auth/",
	"ssl-required": "external",
	"clientId": "ci-client2",
	"public-client": true,
	"confidential-port": 0
  });
// window.onload = function () {
//     keycloak.init({ onLoad: 'login-required' }).success(function () {
//         if (keycloak.authenticated) {
//             authenticated();
//         } else {
//             notAuthenticated();
//         }

//         // document.getElementById('wrapper').style.display = 'block';
//     });
// }

// function notAuthenticated() {
//     // document.getElementById('not-authenticated').style.display = 'block';
// 	// document.getElementById('authenticated').style.display = 'none';
// 	console.log('authenticated');
// }

// function authenticated() {
//     // document.getElementById('not-authenticated').style.display = 'none';
//     // document.getElementById('authenticated').style.display = 'block';
// 	// document.getElementById('message').innerHTML = 'User: ' + keycloak.tokenParsed['preferred_username'];
// 	console.log('not authenticated');
// }

// function request(endpoint) {
//     var req = function() {
//         var req = new XMLHttpRequest();
//         var output = document.getElementById('message');
//         req.open('GET', serviceUrl + '/' + endpoint, true);

//         if (keycloak.authenticated) {
//             req.setRequestHeader('Authorization', 'Bearer ' + keycloak.token);
//         }

//         req.onreadystatechange = function () {
//             if (req.readyState == 4) {
//                 if (req.status == 200) {
//                     output.innerHTML = 'Message: ' + JSON.parse(req.responseText).message;
//                 } else if (req.status == 0) {
//                     output.innerHTML = '<span class="error">Request failed</span>';
//                 } else {
//                     output.innerHTML = '<span class="error">' + req.status + ' ' + req.statusText + '</span>';
//                 }
//             }
//         };

//         req.send();
//     };

//     if (keycloak.authenticated) {
//         keycloak.updateToken(30).success(req);
//     } else {
//         req();
//     }
// }

// keycloak.onAuthLogout = notAuthenticated;
