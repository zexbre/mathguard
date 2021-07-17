<!-- notice the form submit action to formhandler.php -->
<form action='formhandler.php' method='post'>
<h1>MathGuard antispam class form example</h1>
	<b>Title:</b> <i>(For example: The best coding site ever..)</i><br/>
	<input type='text' name='title' size='30'/><br/><br/>

	<b>Description:</b><br/>
	<textarea name='description' rows='5' cols='50'></textarea><br/><br/>

	<b>Keywords:</b> <i>(Space, or comma separated keywords)</i><br/>
	<input type='text' name='keywords' value='' size='30'/><br/><br/>

	<b>URL:</b><br/>
	<input type='text' name='url' value='http://' size='30'/><br/><br/>

	<b>Email:</b><br/>
	<input type='text' name='email' value='@' size='30'/><br/><br/>

	<? require("ClassMathGuard.php"); MathGuard::insertQuestion(); ?> 
	<br/><br/>
	
	<input type='hidden' name='action' value='submit'/><br/>
	<input type='submit' name='Submit' value='Add URL' class='mybutton'/><br/>
</form>