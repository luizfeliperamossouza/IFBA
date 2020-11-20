<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta name="google-signin-client_id" content="799771785807-rqc4c6qtvf3o52e6ej97q3i7n87cmcv5.apps.googleusercontent.com">
    </head>
    <body>
		<div class="g-signin2" data-onsuccess="onSignIn"></div>
		
		<p id='msg'></p>
		<script>
		function onSignIn(googleUser) {
			var profile = googleUser.getBasicProfile();
			var userID = profile.getId(); 
			var userName = profile.getName(); 
			var userPicture = profile.getImageUrl(); 
			var userEmail = profile.getEmail(); 			 
			var userToken = googleUser.getAuthResponse().id_token; 
			

			if(userEmail !== ''){
				var user = {
					userID:userID,
					userName:userName,
					userPicture:userPicture,
					userEmail:userEmail
				};
				$.post('validador.php', user, function(retorna){
					if(retorna === '"erro"'){
						var msg = "Usuário não vinculado a esse email.";
						document.getElementById('msg').innerHTML = msg;
					}else{
						window.location.href = retorna;
					}
					
				});
			}else{
				var msg = "Usuário não encontrado!";
				document.getElementById('msg').innerHTML = msg;
			}
		}
		</script>		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
    </body>
</html>