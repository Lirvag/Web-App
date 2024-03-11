<?php

$title = 'About me';

function getError($key) {
  global $errors;
  if (isset($errors[$key]) && is_array($errors[$key])) {
    return implode('; ', $errors[$key]);
  }
};
// променливи за грешки
$name_error = getError('name');
$date_error = getError('date');
$email_error = getError('email');
$phone_error = getError('phone');
$gender_error = getError('gender');

$message_sent = $inserted ? '<h3 class="success">Съобщението е изпратено</h3>' : '';

// при грешка възстановяваме старите (въведените) данни, 
// за да не се попълват втори път и да е по-ясна грешката
$fields = ['name', 'date', 'email', 'phone', 'gender', 'comment'];
foreach ($fields as $field) {
  $$field = isset($_POST[$field]) ? $_POST[$field] : '';
}
$gender_male = ($gender == 'male') ? 'checked' : '';
$gender_female = ($gender == 'female') ? 'checked' : '';


$content = <<<HTML
<div class="container-center">
  <h2>Изпрати ми имейл</h2>
  $message_sent
  <form action="contact-me.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" value="$name" required/>
      <span class="error">$name_error</span>
    </div>
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" name="date" id="date" value="$date"required/>
      <span class="error">$date_error</span>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" value="$email" required/>
      <span class="error">$email_error</span>
    </div>
    <div class="form-group">
      <label for="phone">Phone number:</label>
      <input type="tel" name="phone" id="phone" value ="$phone"required/>
      <span class="error">$phone_error</span>
    </div>
    <div class="form-group">
      <input type="hidden" value="" name="gender">
      <label for="gender">Gender:</label>
      <input type="radio" name="gender" id="gender-male" value="male" $gender_male />
      <label for="gender-male">Male</label>
      <input type="radio" name="gender" id="gender-female" value="female" $gender_female/>
      <label for="gender-female">Female</label>
      <span class="error">$gender_error</span>
    </div>
    <div class="form-group">
      <label for="comment">Comment:</label>
      <br>
      <textarea name="comment" id="comment">$comment</textarea>
    </div>
    <button type="submit">Send</button>
  </form>
</div>

HTML;
include './resources/layout.php';
