<body>
<center><a href='index.php'><img src='images/home.png' width=75 height=75/></a><style>
body{
	background-image:url("images/back1.jpg");
	background-repeat:no-repeat;	
}
</style>
<form method='post' action='signup1.php'>
<br><br><br><br>
<table align='center' style='background-color:#FFA0BA;border:2px solid red;border-radius:10px;box-shadow:10px 10px 10px #666666;'>
<tr>
	<td colspan=2 align='center' style='font-size:22px;'><b>User Details</b></td>
</tr>
<tr>
	<td><b>User ID:</b></td>
	<td><input type='text' name='pid' required></td>
</tr>
<tr>
	<td><b>Password:</b></td>
	<td><input type='password' name='pass' required></td>
</tr>
<tr>
	<td><b>Full Name:</b></td>
	<td><input type='text' name='name' required></td>
</tr>
<tr>
	<td><b>Address</b></td>
	<td><textarea rows=5 cols=40 name='addr' required></textarea></td>
</tr>
<tr>
	<td><b>Gender:</b></td>
	<td>
	<select name='gender' required>
	<option value=''>Select One</option>
	<option value='Male'>Male</option>
	<option value='Female'>Female</option>
	</select>
	</td>
</tr>
<tr>
	<td><b>Birth Date:</b></td>
	<td><input type='date' name='dob' required></td>
</tr>
<tr>
	<td><b>Phone:</b></td>
	<td><input type='text' name='phone' required pattern="^[789][0-9]{9}$"></td>
</tr>
<tr>
	<td><b>Email:</b></td>
	<td><input type='email' name='email' required></td>
</tr>
<tr>
	<td align='center'><input type='submit' value='Sign Up' style='font-size:16px;font-weight:bold;color:white;background-color:red;text-shadow:2px 2px 2px black;'></td>
	<td align='center'><input type='reset' value='Clear' style='font-size:16px;font-weight:bold;color:white;background-color:red;text-shadow:2px 2px 2px black;'></td>
</tr>
</table>
</center>
</form>
</body>
