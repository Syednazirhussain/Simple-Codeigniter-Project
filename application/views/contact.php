<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
</head>
<body>

<form action="<?php base_url('sendMail'); ?>" method="post" accept-charset="utf-8">
  Name:<br>
  <input type="text" name="name" >
  <br>
  Email :<br>
  <input type="email" name="email">
  <br><br>
  Message :<br>
  <input type="text" name="message">
  <br>
  <input type="submit" name="submit" value="Submit">
</form> 

</body>
</html>