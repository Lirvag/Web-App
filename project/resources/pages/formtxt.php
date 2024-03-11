<?php

$title = 'Form Student';
$saved_message = isset($saved) && $saved ? '<h3 class="success">Въвеждането е успешно!</h3>' : '';

// показване на въведените данни
$fields = ['name','lname','spec','kurs'];
foreach($fields as $field) {
	$$field  = isset($_POST[$field]) ? $_POST[$field] : '';
}
$spec_ki = ($spec == 'KI') ? 'selected' : '';
$spec_kit = ($spec == 'KIT') ? 'selected' : '';
$spec_kdm = ($spec == 'KDM') ? 'selected' : '';
$spec_i = ($spec == 'I') ? 'selected' : '';

$kurs_1 = ($kurs == '1') ? 'selected' : '';
$kurs_2 = ($kurs == '2') ? 'selected' : '';
$kurs_3 = ($kurs == '3') ? 'selected' : '';
$kurs_4 = ($kurs == '4') ? 'selected' : '';



$content = <<<HTML
<div class="container-center">
	<h2>Form Student</h2>
	$saved_message
	<form method="POST" action="formtxt.php">
		<div class="form-group">	
			<label for="name">Собствено име:</label>
			<input type="text" name="name" id="name" value='$name'>
		</div>
		<div class="form-group">
			<label for="lname">Фамилно име:</label>
			<input type="text" name="lname" id="lname" value='$lname'>
		</div>
		<div class="form-group">
			<label for="spec">Специалност:</label>
			<select name="spec" id="spec">
				<option value="KI" $spec_ki>Компютърна информатика</option>
				<option value="KIT" $spec_kit>Компютърни информационни технологии</option>
				<option value="KDM" $spec_kdm>Компютърен дизайн и мултимедия</option>
				<option value="I" $spec_i>Икономика</option>
			</select>
		</div>
		<div class="form-group">
			<label for="kurs">Курс:</label>
			<select name="kurs" id="kurs">
				<option value="1" $kurs_1>Първи</option>
				<option value="2" $kurs_2>Втори</option>
				<option value="3" $kurs_3>Трети</option>
				<option value="4" $kurs_4>Четвърти</option>
			</select>
		</div>
		<button type="submit">ВЪВЕДИ</button>
	</form>
</div>

HTML;

include './resources/layout.php';
