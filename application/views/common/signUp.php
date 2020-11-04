<!DOCTYPE html>
<html>
<head>
<title>Student Signup form</title>
</head>
 
<body>
<form method="post">
<table width="600" align="center" border="1" cellspacing="5" cellpadding="5">
	<tr>
		<td colspan="2"><?php echo @$error; ?></td>
	</tr>	
  <tr>
    <td width="230">Enter Your Name: </td>
    <td width="329"><input type="text" name="name"/></td>
  </tr>

  <tr>
    <td width="230">Enter Your Username: </td>
    <td width="329"><input type="text" name="username"/></td>
  </tr>
  
  <tr>
    <td>Enter Your Email: </td>
    <td><input type="text" name="email"/></td>
  </tr>

  <tr>
    <td>Enter Your Password: </td>
    <td><input type="password" name="password"/></td>
  </tr>

  <tr>
    <td>Enter Your Phone no: </td>
    <td><input type="text" name="phone"/></td>
  </tr>

  <tr>
    <td>Gender: </td>
    <td>
      <input type="radio" name="gender" value="male"> Male<br>
      <input type="radio" name="gender" value="female"> Female<br>
      <input type="radio" name="gender" value="other"> Other
    </td>
  </tr>

  <tr>
    <td>Enter Your Address </td>
    <td><input type="text" name="address"/></td>
  </tr>
  <tr>
    <td>Country: </td>
    <td>
      <select id="" name="country">
        <option selected="selected">Select Country</option>
        <option value="ネパール">Nepal</option>
        <option value="インド">India</option>
        <option value="日本">Japan</option>
        <option value="その他">Other</option>
      </select>
    </td>
  </tr>
  
 <tr>
    <td colspan="2" align="center">
	<input type="submit" name="signUp" value="Sign Up"/></td>
  </tr>
</table>
	</form>
</body>
</html>