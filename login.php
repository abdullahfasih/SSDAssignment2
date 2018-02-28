<html>
	<head>
	<title>Login</title>
	</head>
	<body>
		<form name="login" action="<?= $_SERVER['PHP_SELF'];?>" method="POST">
			Username:<br>
     	<fieldset>
				<input type="text" name="userName"/> <br>
        <span class="error"><?= $userName_error ?></span>
      </fieldset>
      Email Address:<br>
      <fieldset>
				<input  type="text" name="emailAddress"> <br>
        <span class="error"><?= $emailAddress_error ?></span>
      </fieldset>
      Password:<br>
      <fieldset>                                         
      	<input type="password" name="password">
        <span class="error"><?= $password_error ?></span>
      </fieldset>
			<input type="submit" value="Submit">
		</form>	
	</body>
</html>
