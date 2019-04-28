<?php

function sendjoinemail($email, $name) {
$to = $email;

$subject = 'Birthday Reminders for August';

$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Johny</td><td>10th</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

$headers[] = 'To: $username <$email>';
$headers[] = 'From: Birthday Reminder <birthday@example.com>';
$headers[] = 'Bcc: birthdaycheck@example.com';

@mail($to, $subject, $message, implode("\r\n", $headers));
}
?>
