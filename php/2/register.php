<?php
$page_title="Регистрация";
include('header.html');
if($_SERVER['REQUEST_METHOD']=='POST'){
	$error=[];
	if(empty($_POST['f_name'])){
		$error[]="Забравихте да въведете собственото си име!";
	}else{
		$fn=trim($_POST['f_name']);
	}
	if(empty($_POST['l_name'])){
		$error[]="Забравихте да въведете фамилното си име!";
	}else{
		$ln=trim($_POST['l_name']);
	}
	if(empty($_POST['email'])){
		$error[]="Забравихте да си въведете email-address!";
	}else{
		$e=trim($_POST['email']);
	}
	if(empty($_POST['pass'])){
		$error[]="Забравихте да си въведете паролата!";
	}else{
		$p=trim($_POST['pass']);
	}
	if(empty($error)){
		require('mysqli_connect.php');
		$q="INSERT INTO `user3ki`(`f_name`, `l_name`, `email`, `pass`, `reg_date`) 
				VALUES ('$fn','$ln','$e','$p',NOW())";
		$r=@mysqli_query($dbc,$q);
		if($r){
			echo '<h1>Благодаря за регистрацията!</h1>
				<p>Вие успешно се регистрирахте!!!</p><br><br><br>';
		}else{
			echo '<h1>Системна грешка!!!</h1>
				<p class="error">Не можахте да бъдете регистриран поради 
				системна грешка. Извинявайте за неудобството!</p>';
		}
		mysqli_close($dbc);
		include('footer.html');
		exit();
	}else{
		echo '<h1>ГРЕШКА!</h1>
			<p class="error">Възникнаха следните грешки:<br>';
			foreach($error as $msg){
				echo " - $msg <br>\n";
			}
			echo '</p>
				<p>Моля въведете отново нужната информация!</p>';
	}
}
?>
<h1>РЕГИСТРАЦИОННА ФОРМА:</h1>
<form method="post" action="register.php">
<table>
<tr>
	<td>Собствено име:</td>
	<td>
<input type="text" name="f_name" size="15" maxlength="20"
	value="<?php if(isset($_POST['f_name'])) 
				echo $_POST['f_name']; ?> " >
	</td>
</tr>
<tr>
	<td>Фамилно име:</td>
	<td>
<input type="text" name="l_name" size="15" maxlength="40"
	value="<?php if(isset($_POST['l_name'])) 
				echo $_POST['l_name']; ?> " >
	</td>
</tr>
<tr>
	<td>Email-address:</td>
	<td>
<input type="email" name="email" size="15" maxlength="60"
	value="<?php if(isset($_POST['email'])) 
				echo $_POST['email']; ?> " >
	</td>
</tr>		
<tr>
	<td>Парола:</td>
	<td>
<input type="password" name="pass" size="15" maxlength="20"
	value="<?php if(isset($_POST['pass'])) 
				echo $_POST['pass']; ?> " >
	</td>
</tr>		
<tr>
	<td colspan="2">
		<input type="submit" name="submit" value="РЕГИСТРИРАЙ">
	</td>
</tr>
</table>
</form>
<?php
include('footer.html');
?>
		
		
		
		
		
