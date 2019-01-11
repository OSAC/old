<html>
<head>
<title>Ascol - Csit open expo 2012 registration form </title></head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script language="javascript">
function formValidator()
{
	// Make quick references to our fields
	var name = document.getElementById('name');
	var email = document.getElementById('email');	
	var phone = document.getElementById('phone');
	var college = document.getElementById('college');
	var username = document.getElementById('username');
	
	// Check each input in the order that it appears in the form!
	if(isAlphabet(name, "Please enter the valid name")){
	if(isNumeric(phone, "Please enter the valid phone no.")){
								if(emailValidator(email, "Please enter a valid email address")){
								if(isAlphabet(college, "Please enter the valid  college name")){
								if(isAlphanumeric(username, "Please enter the valid  username")){
								
							return true;
						}
					}
				}	
			}
		}	
	return false;
	
}
function notEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
	return false;
}

function isNumeric(elem, helperMsg){
	var numericExpression = /[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphabet(elem, helperMsg){
	var alphaExp =/[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphanumeric(elem, helperMsg){
	var alphaExp = /[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

</script>
<body>
<div class="register">
<span> Please fill up the form below </span>
<font color="Red">"Fields with * are mandatory" </font>
<hr>
<form method="post" action="register.php" name="register" onsubmit="return formValidator()">
<label for="name">Name : </label><input type="text" name="name" id="name" placeholder="your name here"><font color="red"> * </font><br>

<label for="email">Email : </label><input type="text" name="email" id="email" placeholder="your email here"><font color="red"> * </font><br>
<label for="phone">Phone: </label><input type="text" name="phone" id="phone" placeholder="your cell no. here"><font color="red"> * </font><br>
<label for="college">College:</label><input type="text" name="college" id="college" placeholder="your college here"><font color="red"> * </font><br>
<label>Register for: </label>
<select name="sel_event">
	<option value="game">Gaming Competition</option>
	<option value="code">Coding Competition</option>
	<option value="design">Designing Competition</option>
	<option value="presentation">presentation Competition</option>
	<option value="stall">Stalls</option>
		
</select><br>
<label for="college">Enter a username:</label><input type="text" name="username" id="username" placeholder="username"><font color="red"> * </font><br>
<label> Upload your photo : </label><input type="file" name="photo" id="photo"><br><br>
<label> Any suggestions / comments</span> <br>
 <textarea name="message"></textarea>
 <input type="submit" value="Register" name="register">
 
</form>
</div>
</body>
</html>

<?php
include('class.register.php');
$r=new register;
$r->add_record();
?>