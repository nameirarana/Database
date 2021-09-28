  <?php
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
			
			 
			$c1a = $_POST["c1"];  // Storing Selected Value In Variable
			//echo "You have selected :" .$c1a; 
			$c2a = $_POST['c2']; 
			$c3a = $_POST['c3']; 
			$c4a = $_POST['c4']; 
			$c5a = $_POST['c5']; 
			
			$sql_select="update course set status = 0" ;
			$query_s_id = oci_parse($con, $sql_select);
			$runselect = oci_execute($query_s_id);
			$sql_select="insert into course (co_name,co_type,co_dur,age,status,fee) values ('".$_POST["course_name"]."','".$c1a."','1',4,1,".$_POST["course_fee1"].")" ;
			$query_s_id = oci_parse($con, $sql_select);
			$runselect = oci_execute($query_s_id);
			$sql_select="insert into course (co_name,co_type,co_dur,age,status,fee) values ('".$_POST["course_name"]."','".$c2a."','1',5,1,".$_POST["course_fee2"].")" ;
			$query_s_id = oci_parse($con, $sql_select);
			$runselect = oci_execute($query_s_id);
			$sql_select="insert into course (co_name,co_type,co_dur,age,status,fee) values ('".$_POST["course_name"]."','".$c3a."','1',8,1,".$_POST["course_fee3"].")" ;
			$query_s_id = oci_parse($con, $sql_select);
			$runselect = oci_execute($query_s_id);
			$sql_select="insert into course (co_name,co_type,co_dur,age,status,fee) values ('".$_POST["course_name"]."','".$c4a."','1',13,1,".$_POST["course_fee4"].")" ;
			$query_s_id = oci_parse($con, $sql_select);
			$runselect = oci_execute($query_s_id);
			$sql_select="insert into course (co_name,co_type,co_dur,age,status,fee) values ('".$_POST["course_name"]."','".$c5a."','1',15,1,".$_POST["course_fee5"].")" ;
			$query_s_id = oci_parse($con, $sql_select);
			$runselect = oci_execute($query_s_id);
			
			echo "<br><br>";
			
			echo "UPDATED" ; 
			
		}
?>