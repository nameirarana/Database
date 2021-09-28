 <html>
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">
			img {
			  display: block;
			  margin-left: auto;
			  margin-right: auto;
			}
			
			.container {
			  position: relative;
			  text-align: center;
			  color: white;
			}

			.bottom-left {
			  position: absolute;
			  bottom: 8px;
			  left: 16px;
			}

			.top-left {
			  position: absolute;
			  top: 8px;
			  left: 16px;
			}
			
			.top-left56 {
			  position: absolute;
			  top: 11px;
			  left: 150px;
			}

			.top-right {
			  position: absolute;
			  top: 200px;
			  right: 150px;
			}

			.bottom-right {
			  position: absolute;
			  bottom: -1050px;
			  right: 1150px;
			}

			.centered {
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  transform: translate(-50%, -50%);
			}
			
			.centered56 {
			  position: absolute;
			  top: 85%;
			  left: 50%;
			  transform: translate(-50%, -50%);
			}
		
			.image1a {
			  position: absolute;
			  top: 50%;
			  left: 10%;
			  transform: translate(-50%, -50%);
			}
		
			.image1b {
			  position: absolute;
			  top: 25%;
			  left: 60%;
			  transform: translate(-50%, -50%);
			}
		
			.centered123 {
			  position: absolute;
			  top: 35%;
			  left: 65%;
			  transform: translate(-50%, -50%);
			}
		
			.centered557 {
			  position: absolute;
			  top: 40%;
			  left: 50%;
			  transform: translate(-50%, -50%);
			}
			
			.img-circular{
			  border-radius: 50%;
			}
			
			.column {
			  flex: 50%;
			  padding: 10px;
			  height: 300px; /* Should be removed. Only for demonstration */
			}
			
			.finalsubmit12 {
				  position: absolute;
				  top: 185%;
				  left: 27%;
				  transform: translate(-50%, -50%);
			}

			.fsSubmitButton134
			{
			cursor: pointer;
			padding: 10px 20px 11px !important;
			font-size: 21px !important;
			background-color: #F36C8C;
			font-weight: bold;
			text-shadow: 1px 1px #F36C8C;
			color: #ffffff;
			border-radius: 100px;
			-moz-border-radius: 100px;
			-webkit-border-radius: 100px;
			border: 1px solid #F36C8C;
			box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
			-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
			-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
			}
			
			.yooo
			{
				cursor: pointer;
			}
			
			.fsSubmitButton
			{
			padding: 10px 20px 11px !important;
			font-size: 21px !important;
			background-color: #F36C8C;
			font-weight: bold;
			text-shadow: 1px 1px #F36C8C;
			color: #ffffff;
			border-radius: 100px;
			-moz-border-radius: 100px;
			-webkit-border-radius: 100px;
			border: 1px solid #F36C8C;
			box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
			-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
			-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
			}
		
			
			select {
				width: 125px;
				height: 45px;
				margin: 10px;
			}
			select:focus {
				min-width: 125	12px;
				width: auto;
			}    
			
			
			
			textarea {
			width: 300px;
			height: 5em;
			}

			input, select, textarea {
			font-size: 150%;
			}
			
			
			#button {

			background:url("edit.jpeg");
			border:0;
			outline:0;

			}


			.centima{
			  position: absolute;
			  top: 125%;
			  left: 500%;
			  transform: translate(-50%, -50%);
			}
					
		</style>

	</head>
	
	<body>
	
	
		<div class="container">
		 <img class="centered" src="3.jpg" height="100" width="3000" alt="3">
		  <a href="HamarayBachay.html" >
		 <img class="top-left img-circular" src="4.jpg" height="70" width="80" alt="4" ></a>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <div class="centered" height="70" width="80"><b><font size="11" face="algerian" color="866684">HAMARAY BACHEY</font></b></div>

		</div>
		<br>
		<br>

		 <div align="center" height="70" width="80"><b><font size="8" face="algerian" color="866684">Students Per Class Form</font></b></div>
		

		
  </table>
  
  <br><br>

<br><br> 
  
 
  
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

		
			
			
		/*	if(isset($_POST["button1"])) {
					$q="update Student set s_name = '".$row1[1]."' ,s_bayformno = '".$row1[2]."' , DOB='".$row1[4]."' , relation = '".$row1[9]."' , s_pid = '".$row1[10]."' where s_rollnumber ='".$row1[0]."'";
				  $query_id6 = oci_parse($con, $q);
				  $ru = oci_execute($query_id6);
				  $q="update mother set m_name = '".$row3[1]."' ,m_cnic = '".$row3[2]."' , m_num=".$row3[3]." , m_address = '".$row3[4]."' , m_mail = '".$row3[5]."' ,m_income = ".$row3[6]." ,m_emp_id = ".$row3[7]." where m_id ='".$row3[0]."'";
				  $query_id6 = oci_parse($con, $q);
				  $ru = oci_execute($query_id6);
				   $q="update father set f_name = '".$row2[1]."' ,f_cnic = '".$row2[2]."' , f_num=".$row2[3]." , f_address = '".$row2[4]."' , f_mail = '".$row2[5]."' ,f_income = ".$row2[6]." ,f_emp_id = ".$row2[7]." where f_id ='".$row2[0]."'";
				  $query_id6 = oci_parse($con, $q);
				  $ru = oci_execute($query_id6);
				  $q="update guardian set g_name = '".$row4[1]."' ,g_cnic = '".$row4[2]."' , g_num=".$row4[4]." , g_address = '".$row4[5]."' , g_mail = '".$row4[6]."' ,g_income = ".$row4[7]." ,g_emp_id = ".$row4[8]." where g_id ='".$row4[0]."'";
				  $query_id6 = oci_parse($con, $q);
				  $ru = oci_execute($query_id6);
			
			echo "UPDATED";
		}	*/	
			

	if(isset($_POST["edit"])) {

			echo "<form action = \"student_edit_furthur.php\" method = 'post'>";
		
		//echo '<form>';
		
		$q="select * from student where s_rollnumber = '".$_POST["std_id"]."'";
		  $query_id6 = oci_parse($con, $q);
		  $ru = oci_execute($query_id6);
		  $row1 = oci_fetch_array($query_id6, OCI_BOTH+OCI_RETURN_NULLS);
		  
			
			echo "<input type=\"hidden\" name=\"ID11\" value =\"".$row1[0]."\" >";
			
			echo	'<div align =center><b><font size="7" face="algerian" color="866684">Student Information</font></b></div>';
			echo "<br>";
			echo "<br>";
			echo "<br>";
			echo "<table align = center>";
			echo "<tr>";
			echo "<td>";
			echo "</td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Name: </font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"Name\" value = \"".$row1[1]."\">";
			echo "</td>";
			echo "<td></td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Date of Birth:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"DOB\" value =\"".$row1[4]."\" >";
			echo "</td>";
			echo "</tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr>";
			echo "<td></td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Gender:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<label for= \"gender\"></label>";
			echo "<select id=\"cars\" name = \"gender\">";
			echo "<option value=\"M\">Male</option>";
			echo "<option value=\"F\">Female</option>";
			echo  "<option value=\"O\">other</option>";
			echo "</select>";
			echo "</td>";
			echo "<td></td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Bayform No:</font></b></div>';
			echo "</td>";
			
			echo "<td><input type=\"text\" name=\"bform\" value = \"".$row1[2]."\"></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td>";
			echo "</td>";
			
			echo "<tr><pre>          </pre></tr>";
			
			
			echo '<td class = "centered123">';
			
							 
					echo "  <p><img class =\"centima\" src=".$row1[10]." width=\"200\" Height = \"170\" /> </p>";
								
								
							 
						
			echo '</td>'; 
			
			
			echo "</tr>";
			echo "<tr></tr>";
			echo "<tr><pre>      </pre></tr>";
			
			echo "<tr>";
			echo "<td colspan = \"10\">________________________________________________________________________________________________________________________________</td>";
			echo "</tr>";
			echo "</table>";		  
		 $q="select * from father where f_id = '".$row1[6]."'";
		  $query_id6 = oci_parse($con, $q);
		  $ru = oci_execute($query_id6);
		  $row2 = oci_fetch_array($query_id6, OCI_BOTH+OCI_RETURN_NULLS); 
		   $q="select * from mother where m_id = '".$row1[7]."'";
		  $query_id6 = oci_parse($con, $q);
		  $ru = oci_execute($query_id6);
		  $row3 = oci_fetch_array($query_id6, OCI_BOTH+OCI_RETURN_NULLS);
		  
		    $q="select * from guardian where g_id = '".$row1[8]."'";
		  $query_id6 = oci_parse($con, $q);
		  $ru = oci_execute($query_id6);
		  $row4 = oci_fetch_array($query_id6, OCI_BOTH+OCI_RETURN_NULLS);
		  
		  
		  echo "<input type=\"hidden\" name=\"IDM\" value =\"".$row2[0]."\" >";
		  echo "<input type=\"hidden\" name=\"IDF\" value =\"".$row3[0]."\" >";
		  echo "<input type=\"hidden\" name=\"IDG\" value =\"".$row4[0]."\" >";
		  
		  
			echo "<br>";
			echo "<br>";
			echo "<br>";		  
			echo	'<div align =center><b><font size="7" face="algerian" color="866684">Parent Information</font></b></div>';
			echo "<br>";
			echo "<br>";
			echo "<br>";		  
					  

			echo "<table align = center>";
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td></td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Mother Name:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"M_name\" value = \"".$row3[1]."\">";
			echo "</td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Father Name:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"F_name\" value = \"".$row2[1]."\">";
			echo "</td>";
			echo "</tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr>";
			echo "<td></td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Mother CNIC:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"M_CNIC\" value = \"".$row3[2]."\" >";
			echo "</td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Father CNIC:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"F_CNIC\" value = \"".$row2[2]."\">";
			echo "</td>";
			echo "</tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr>";
			echo "<td></td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Mother Contact:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"M_contact\" value = \"".$row3[3]."\">";
			echo "</td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Father Contact:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"F_contact\" value = \"".$row2[3]."\" >";
			echo "</td>";
			echo "</tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr>";
			echo "<td></td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Mother Email:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"M_email\" value = \"".$row3[5]."\" >";
			echo "</td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Father Email:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"F_email\" value = \"".$row2[5]."\">";
			echo "</td>";
			echo "</tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr>";
			echo "<td></td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Mother Address:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"M_add\" value = \"".$row3[4]."\" >";
			echo "</td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Father Address:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"F_add\" value = \"".$row2[4]."\">";
			echo "</td>";
			echo "</tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr>";
			echo "<td></td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Mother Income:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"M_inc\" value = \"".$row3[6]."\" >";
			echo "</td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Father Income:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"F_inc\" value = \"".$row2[6]."\" >";
			echo "</td>";
			echo "</tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr>";
			echo "<td></td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Is Alive ?</font></b></div>';
			echo "</td>";
			echo "<td>";
			 echo " <label>Yes</label>";
			 echo "<input type=\"radio\" id=\"Yes\" name=\"M_isA\" value=\"1\">";
			 
			 
			 echo "<label>No</label>";
			 echo "<input type=\"radio\" id=\"No\" name=\"M_isA\" value=\"0\">";

			echo "</td>";

			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Is Alive ?</font></b></div>';
			echo "</td>";
			echo "<td>";
			 echo "<label>Yes</label>";
			 echo "<input type=\"radio\" id=\"Yes\" name=\"F_isA\" value=\"1\">";
			 echo" <label>No</label>";
			 echo" <input type=\"radio\" id=\"No\" name=\"F_isA\" value=\"0\">";
			 
			echo "</td>";
			echo "</tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr>";
			echo "<td></td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Mother Emp_ID:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"M_empid\" value = \"".$row3[8]."\" >";
			echo "</td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Father Emp_ID:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"F_empid\" value = \"".$row2[8]."\" >";
			echo "</td>";
			echo "</tr>";
			echo "<tr></tr>";
			echo "<tr><pre>      </pre></tr>";
			
			echo "<tr>";
			echo "<td colspan = \"10\">________________________________________________________________________________________________________________________________</td>";
	echo "</table>";

			echo "<br>";
			echo "<br>";
			echo "<br>";		  
			echo	'<div align =center><b><font size="7" face="algerian" color="866684">Guardian Information</font></b></div>';
			echo "<br>";
			echo "<br>";
			echo "<br>";	
					 
			echo "<table align = center>";		 
			echo "<tr></tr>";
			echo "<tr>";
			echo "<td colspan = \"10\">";
			
			echo "<tr></tr>";
			echo "<tr>";
			echo "<td>";
			echo "</td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Guardian Name:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"G_name\" value = \"".$row4[1]."\">";
			echo "</td>";
			echo "</tr>";
			
				echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr>";
			echo "<td>";
			echo "</td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Guardian CNIC:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"G_CNIC\" value = \"".$row4[2]."\" >";
			echo "</td>";
			echo "</tr>";
			
				echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr>";
			echo "<td>";
			echo "</td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Guardian Contact:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"G_contact\" value = \"".$row4[4]."\" >";
			echo "</td>";
			echo "</tr>";
			
				echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr>";
			echo "<td></td>";
			echo "<td>";
				echo	'<div align =center><b><font size="5" face="algerian" color="866684">Guardian Gender:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<label for= \"G_gender\"></label>";
			echo "<select id=\"cars\" name = \"G_Gender\">";
			 echo "<option value=\"M\">Male</option>";
			echo" <option value=\"F\">Female</option>";
			 echo "<option value=\"O\">other</option>";
			echo "</select>";
			echo "</td>";
			echo "</tr>";
			
				echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr>";
			echo "</tr>";
			echo "<tr>";
			echo "<td></td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Guardian Relation:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"G_relation\" value = \"".$row1[9]."\" >";
			echo "</td>";
			echo "</tr>";
			
				echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr>";
			echo "<td></td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Guardian Address:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"G_Address\" value = \"".$row4[5]."\" >";
			echo "</td>";
			echo "</tr>";
			
				echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr>";
			echo "<td></td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Guardian Emp_ID:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"G_Emp\" value = \"".$row4[8]."\" >";
			echo "</td>";
			echo "</tr>";
			
				echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr>";
			echo "<td></td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Guardian Email:</font></b></div>';
			echo "</td>";
			echo "<td>";
			echo "<input type=\"text\" name=\"G_email\" value = \"".$row4[6]."\" >";
			echo "</td>";
			echo "</tr>";
			
				echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr></tr>";
			echo "<tr></tr>";
			
			echo "<tr>";
			echo "<td></td>";
			echo "<td>";
			echo	'<div align =center><b><font size="5" face="algerian" color="866684">Guardian Income: </font></b></div>';
			echo "</td>";
			
			//echo "<td><pre></pre></td>";
			
			echo "<td>";
			echo "<input type=\"text\" name=\"G_inc\" value = \"".$row4[7]."\" >";
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "</table>";
			
			
			echo '<input class = "fsSubmitButton134 bottom-right" type = "submit" value = "Submit" name = "button1">';;
			echo '</form>';	
		
			//echo '</form>';
			
			


	}
	if(isset($_POST["delete"])) {
				
				$q="delete from Registration where s_rollnumber = '".$_POST["std_id"]."'";
				  $query_id6 = oci_parse($con, $q);
				  $ru = oci_execute($query_id6);
				  if( $ru)
				  {
						$q1="delete from Student where s_rollnumber = '".$_POST["std_id"]."'";
					  $query_id61 = oci_parse($con, $q1);
					  $ru1 = oci_execute($query_id61);

					  if( $ru1)
					  {
						  echo "DELETION SUCCESSFULL";
					  }
					  else
					  {
						   echo "DELETION NOT SUCCESSFULL";
					  }
				  
				  }
				  else
				  {
					   echo "DELETION NOT POSSIBLE";
				  }
				

	}
	
	
	
  ?>