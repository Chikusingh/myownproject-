<?php
  print_r($_POST);
  exit;
if(!empty($_POST))
{
	extract($_POST);
	$_SESSION['error']=array();
	  if(empty($currentPassword))
	  {
		 $_SESSION['error']="please enter current password"; 
	  }
	    if(!empty($_SESSION['error']))
		{
			header("location:change_pass.php");
		}
		else
		{
			
		}
			
}
else
{
	header:("location:change_pass.php");
}
?>