<html>

<head>
<title>Database connection </title>
</head>
<?php  // creating a database connection 

		$db_sid =
       "(DESCRIPTION =
      (ADDRESS = (PROTOCOL = TCP)(HOST = Turab-PC)(PORT = 1521))
      (CONNECT_DATA =
        (SERVER = DEDICATED)
        (SERVICE_NAME = orcl)
      )
      )";            // Your oracle SID, can be found in tnsnames.ora  ((oraclebase)\app\Your_username\product\11.2.0\dbhome_1\NETWORK\ADMIN)

       $db_user = "scott";   // Oracle username e.g "scott"
       $db_pass = "1234";    // Password for user e.g "1234"
       $con = oci_connect($db_user,$db_pass,$db_sid);
       if($con)
        { echo "Oracle Connection Successful."; }
       else
        { die('Could not connect to Oracle: '); }


    if(isset($_POST["button"])){
			 $q = "select * from Student where s_rollnumber = '" .$_POST["s_roll"]."'";
			 $query_id = oci_parse($con, $q); 		
			 $r = oci_execute($query_id); 
			$row11 = oci_fetch_array($query_id, OCI_BOTH+OCI_RETURN_NULLS);
			
			if($row11){
				
			$q="update Registration_history set R_status = 1 where s_rollnumber='".$_POST["s_roll"]."'";
			$query_id = oci_parse($con, $q); 		
			$r = oci_execute($query_id); 
			 if($r)
	 {

			 echo "Updated<br>";
			 echo "<br>";
			 	$q="commit";
			$query_id = oci_parse($con, $q); 		
			$r = oci_execute($query_id);
	 }
	 else
	 {
		 echo "Not Updated!<br>";
		 $e = oci_error($query_id);  
		 echo $e['message'];
	 }
			
				}
			
			
			else{
				
				echo "<br>Sorry!!! No Record Found For This Student<br>";
			}
			}


?>
</body>
</html>

