 <?php 

	$username="favotext_admin"; 
	$password="Netchong!@3"; 
	$database="favotext_statistics"; 
	$host="localhost"; 

    $file_id = $_GET['file_id'];   

   // echo $file_id.'<br />'; 

 //require(“includes/dbinfo.php”);

     // 连接到 MySQL 服务器 
    $connection = mysql_connect ($host, $username, $password); 
    //echo $username.'<br />'; 

    // 设置活动的 MySQL 数据库 
     $db_selected = mysql_select_db($database, $connection); 

     // 查询该 ID 值的数据库列 

     $query = mysql_query("select * from download_statistics"); 

     // 将字段值读入到 $myrow 数组 

     while($myrow = mysql_fetch_array($query))
	 {
		 $file = $myrow["file_name"]; 
		 
		 //echo $file.'<br />'; 
		 
		 $times = $myrow['download_times']; 
		 
		 echo 'File "'.$file.'" was downloaded '.$times.' times'.'.<br />'; 
	 }
	 
	 //关闭当前数据库连接  
	 mysql_close($connection);  
 ?>