
	<?php
	require_once("Logger.php");
#Function f�r att f� ig�ng det hela s� att s�ga. Den ena knappen g�r s� att man kan skicka ett meddelande med sin loggning och den andra �r s� att man kommer till Adminview. 
function load(){
$message = "
	<div>
		<hr/>
		<h2>This is an application that logs IP-addresses. Type a message (if you want) and press the button bellow to log your IP </h2>
<form action='model/addtodb.php' method='post'>
	Message: <input type='text' name='message' message='message'><br>
	
	<input type='submit' value='submit'>
</form>

		<h2>If you are an Admin and want to know what ip addresses have been logged click here</h2>
<form action='view/adminview.php' method='post'>
	
	<input type='submit' value='Admin'>
</form>
		    </div>";
		return $message;
}
	echo load();
	

	