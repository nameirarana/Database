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

			$sql_select="select s_rollnumber from Student where s_rollnumber = '" .$_POST["s.rollnumber"]."'" ;
			$query_s_id = oci_parse($con, $sql_select);
			$runselect = oci_execute($query_s_id);
			$r_id = oci_fetch_array($query_s_id, OCI_BOTH+OCI_RETURN_NULLS);

			echo " Class Name: " . $r_id[0] . " <tr> ";	

			echo "<br>";

		  if($runselect)
		 {
			echo "You have been enrolled in Course blah";
				echo "<br>";

		 }
		 else
		 {
			 $q_select="select s_rollnumber from Student where s_bayformno = '" .$_POST["cnic"]."'" ;;
			 $query_cnic = oci_parse($con, $q_select);
			 $r = oci_execute($query_cnic);
			 $r_cnic = oci_fetch_array($query_cnic, OCI_BOTH+OCI_RETURN_NULLS);

			 if ($r)
			 {
				 echo "You have been enrolled in Course";
				 echo "<br>";
			 }

			 else
			 {
         header("Location: Student_Admission.html");
         exit();
			 }
     }
	}

?>
</body>
</html>
