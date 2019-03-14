<?php
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Формы</title>
</head>
<body>
	<form>
		
		<label for="name" name="name" id="name"></label>
		<input type="text" placeholder="Логин"><br />

 					@$get = $_GET['error']; 
                    if($get == 'login'){
                        echo "
                        <div class='error'>
                            <h3>Логин не верный!</h3>
                        </div>
                        ";
                    }

		<label for="email" name="email" id="email"></label><br />
		<input type="email" placeholder="Электронная почта"><br />

                   if($get == 'email'){
                        echo "
                        <div class='error'>
                            <h3>Неверный адрес электронной почты!</h3>
                        </div>
                        ";
                    }

		<label for="password" name="password" id="password"></label><br />
		<input type="password" placeholder="Пароль"><br />

                   if($get == 'pass'){
                        echo "
                        <div class='error'>
                            <h3>Пароль не верный!</h3>
                        </div>
                        ";
                    }

		<br /><br />
		<script src = "./post.js"></script>
		<input type="submit" name="submit" id="button" value="Жмяк">
	</form>


</body>
</html>
?>