<!--VERY IMPORTANT-->
<?php include(dirname(__FILE__).'/common/functions/setupEverything.php');?>
<!--xml header-->
<?php include(dirname(__FILE__).'/common/xmlhead.php');?>
<title>View Employee</title>
<!--end head-->
<?php include(dirname(__FILE__).'/common/top.php');?>


<center>
<form action="index.php" method="post">

	First Name: <br><input type="text" name="fname"><br><br>
	Last Name: <br><input type="text" name="lname"><br><br>
	Job Title: <br><input type="text" name="jtitle"><br><br>
	Benefits Package: <br><input type="text" name="bpackage"><br><br>
	Pay Rate: <br><input type="text" name="prate"><br><br>
	Email: <br><input type="text" name="email"><br><br>
	Forms: <br><input type="text" name="forms"><br><br>
	<input type="submit">
</form>
</center>

<!--end body/html-->
<?php include(dirname(__FILE__).'/common/bot.php');?>
