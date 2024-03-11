<form method="POST" action="printtxt.php">
	Собствено име:
	<input type="text" name="name"><br>
	Фамилно име:
	<input type="text" name="lname"><br>
	Специалност:
	<select name="spec">
		<option value="KI">Компютърна информатика</option>
		<option value="KIT">Компютърни информационни технологии</option>
		<option value="KDM">Компютърен дизайн и мултимедия</option>
		<option value="I">Икономика</option>
	</select><br>
	Курс:
	<select name="kurs">
		<option value="1">Първи</option>
		<option value="2">Втори</option>
		<option value="3">Трети</option>
		<option value="4">Четвърти</option>
	</select><br>
	<input type="submit" name="submit" value="ВЪВЕДИ">
</form>