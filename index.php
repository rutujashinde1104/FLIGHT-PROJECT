<body>
<script type='text/javascript'>
imgs = new Array();
imgs[0]='header1.jpg';
imgs[1]='header2.jpg';
imgs[2]='header3.jpg';
imgs[3]='header4.jpg';
imgs[4]='header5.jpg';
imgs[5]='header6.jpg';
imgs[6]='header7.jpg';
imgs[7]='header8.jpg';
imgs[8]='header9.jpg';
imgs[9]='header10.jpg';

i=1;

function change()
{
	document.getElementById('myImg').src = 'images/'+imgs[i];
	i=(i+1)%10;
}

setInterval('change()',2500);

</script>
<table align='center' width='100%' style='background-color:#FFABA0;'>
<tr>
	<td align='center' width='20%'>
		<img src='images/logo.jpg' width=150 height=150/>
	</td>
	<td align='center' width='60%'>
		<img src='images/header1.jpg' width=700 height=250 id='myImg'/>
	</td>
	<td align='center' width='20%'>
		<img src='images/logo1.gif' width=150 height=150/>
	</td>	
</tr>
<table>
<style>
a{
	font-size:16px;
	font-weight:bold;
	text-decoration:none;
	color:white;
	padding:0px 70px 0px 70px;
}
a:hover{
	color:black;
	background-color:white;
}
body{
	background-image:url("images/back1.jpg");
	background-repeat:no-repeat;	
}
</style>
<div style='text-align:center;border:1px solid red;background-color:#0000FF;'>
	<a href='search.php'>Search</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='signup.php'>Sign Up</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='about_us.php'>About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='contact_us.php'>Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;
</div><br><br>
<table align='center' width=500 style='border:1px solid black;background-color:#FFABAB;border-radius:8px;box-shadow:8px 8px 8px #666666;'>
<tr>
	<td align='center'>
<form method='post' action='login.php' name='login' onsubmit='return validate()'>
<table>
<tr>
	<td colspan=2 align='center'><b>Login</b></td>
</tr>
<tr>
	<td><b>Login ID:</b></td>
	<td><input type='text' name='uid' required></td>
</tr>
<tr>
	<td><b>Password:</b></td>
	<td><input type='password' name='pass' required></td>
</tr>
<tr>
	<td><b>Type:</b></td>
	<td>
	<select name='type' required>
	<option value=''>Select One</option>
	<option value='Admin'>Admin</option>
	<option value='User'>User</option>
	</select>		
	</td>
</tr>
<tr>
	<td align='center'><input type='submit' value='Sign In' style='font-size:16px;font-weight:bold;color:white;background-color:red;text-shadow:2px 2px 2px black;'></td>
	<td align='center'><input type='reset' value='Clear' style='font-size:16px;font-weight:bold;color:white;background-color:red;text-shadow:2px 2px 2px black;'></td>
</tr>
</table>
</form>
	</td>
</tr>
</table>
<div align='center' style='position:fixed;bottom:0px;left:200px;right:200px;'>
	<img src='images/footer.gif' width=1000 height=80/>
</div>
</body>
