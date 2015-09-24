<?php
	require 'db_constants.php';//Adding the
	require 'db_inc.php';//databses files..
	//select data from 'articles' table...
	$sql='Select title,content,date,written_by from articles order by date asc limit 1';
	$result=mysqli_query($db,$sql) or die(mysqli_error($db));
	$row=mysqli_fetch_assoc($result);
	extract($row);
	$date=date('d-M-Y',strtotime("$date"));
	
	//selecting data from 'meetings' table..
	$sql='select * from meeting order by date_of_meeting limit 1';
	$result=mysqli_query($db,$sql) or die(mysqli_error($db));
	$row=mysqli_fetch_assoc($result);
	extract($row);
	list($date,$time)=explode(' ',$date_of_meeting);
	$date=date('d-M-Y',strtotime("$date"));
	
	
	require 'index.html';
?>