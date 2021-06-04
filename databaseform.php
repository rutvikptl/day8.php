<?php
$connection = mysqli_connect("localhost","root","","db_internship");

if($_POST){
	$name = $_POST['txt1'];
	$gender = $_POST['txt2'];
	$mobile = $_POST['txt3'];

	$q = mysqli_query($connection , "insert into tbl_user(user_name,user_gender,user_mobile) values('{$name}','{$gender}','{$mobile}')") or die("error".mysqli_error($connection));
	if ($q) {
		echo "<script> alert('record added'</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>

	<form method="post">
     name:<input type="text" name="txt1"/>
     gender:<select name="txt2">
            <option>male</option>
            <option>female</option>
           </select>

     mobile no:<input type="number" name="txt3"/>
      <input type="submit"/> 
      </form>

</body>
</html>