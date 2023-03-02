<?php
	$servername="localhost";
	$username="root";
	$password="";
	$databasename="movies";
	$cnn=mysqli_connect($servername,$username,$password,$databasename);
	if($cnn==true)
	{
		$name=$_REQUEST['txtname'];
		$mail=$_REQUEST['txtmail'];
		$sub=$_REQUEST['txtsub'];
        $message=$_REQUEST['txtmessage'];
		$SQL="Insert into moviescontact values('$name','$mail','$sub','$message')";
		mysqli_query($cnn,$SQL);
		$rows=mysqli_affected_rows($cnn);	
		if($rows>0)
        echo '<script type="text/JavaScript"> 
        alert("Successfully send your message...");
        </script>';
            
		else
        echo '<script type="text/JavaScript"> 
        alert("Successfully send your message...");
        </script>';
	}
	else
	{
		echo "Cannot open database";
	}
	
?>