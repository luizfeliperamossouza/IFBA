
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Acesso</title>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta name="google-signin-client_id" content="799771785807-rqc4c6qtvf3o52e6ej97q3i7n87cmcv5.apps.googleusercontent.com">
    </head>
    <body>
		Bem vindo!
		
		<a href="login.php" onclick="signOut();">Sair</a>
		<script>
		  function signOut() {
			var auth2 = gapi.auth2.getAuthInstance();
			auth2.signOut().then(function () {
			  console.log('User signed out.');
			});
		  }
		</script>
		
    </body>
</html>