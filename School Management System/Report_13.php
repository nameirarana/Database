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
			  right: 50px;
			}

			.bottom-right {
			  position: absolute;
			  bottom: 8px;
			  right: 16px;
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
			  top: 27%;
			  left: 60%;
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
				width: 250px;
				height: 45px;
				margin: 12px;
			}
			select:focus {
				min-width: 300	12px;
				width: 250px;
			}


			textarea {
			width: 300px;
			height: 5em;
			}

			input, select, textarea {
			font-size: 150%;
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

		 <div align="center" height="70" width="80"><b><font size="8" face="algerian" color="866684">Students Dormant Form</font></b></div>

		<br>

	 <table align = "center">

		<br><br>

	<div class="topnav ">

	 <tr>
			<form method="post">
			<td></td>
			<td></td>
			<td></td>

			<td>
					<select name="Dormant_Time" >
					<option size="10" value="6">6 Months</option>
					<option size="10" value="12">1 Year</option>
					<option size="10" value="24">2 Years</option>
					<option size="10" value="60">5 Years</option>
					<option size="10" value="61">More than 5 Years</option>
					</select>
					
					<input class = "fsSubmitButton134 centered123" type = "submit" value = "search" name = "button1">
					
					</div>
			</td>
			</form>


	</tr>


  </div>
  </table>

  <br><br>

<br><br>
</body>
</html>

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


if(isset($_POST['button1']))
{
			$selected_val = $_POST['Dormant_Time'];  // Storing Selected Value In Variable
			echo "You have selected :" .$selected_val;  // Displaying Selected Value
		
		

				
				
				if($selected_val == "6") 
				{
					$q_dormant="select unique rh.s_rollnumber FROM registration_history rh, Registration r where MONTHS_BETWEEN(sysdate,rh.R_Date)>= 6 and MONTHS_BETWEEN(sysdate,rh.R_Date) <12 and rh.s_rollnumber != r.s_rollnumber";
					$query_dormant = oci_parse($con, $q_dormant);
				$r_dormant = oci_execute($query_dormant);
				//$row_dormant = oci_fetch_array($query_dormant, OCI_BOTH+OCI_RETURN_NULLS);
				//echo " Class Name: " . $row_dormant[0] . " <tr> ";	
				
							$q="select unique rh.s_rollnumber FROM registration_history rh, Registration r where MONTHS_BETWEEN(sysdate,rh.R_Date)>= 6 and MONTHS_BETWEEN(sysdate,rh.R_Date) <12 and rh.s_rollnumber != r.s_rollnumber";
							$query_id6 = oci_parse($con, $q);
							$ru = oci_execute($query_id6);
							$row57 = oci_fetch_array($query_id6, OCI_BOTH+OCI_RETURN_NULLS);
							if ($row57)
							{ 
								echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Students who have been dormant</pre> </font></b></div>';
								
							}
							else
							{
								echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Sorry No Records Found ! :(</pre> </font></b></div>';
				
							}
								
									
				while($row_dormant = oci_fetch_array($query_dormant, OCI_BOTH+OCI_RETURN_NULLS))
				{
					
					
					$q_student="select s_name, s_bayformno from Student s where s.s_rollnumber = '". $row_dormant[0] ."'" ;
					$query_student = oci_parse($con, $q_student);
					$r_student = oci_execute($query_student);
					$row_student = oci_fetch_array($query_student, OCI_BOTH+OCI_RETURN_NULLS);
					echo	"<br>";

					echo "<table border = 0 align = center>";

					echo '<tr>';
						echo '<td width="350">';
						echo	"<br>";
						echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Student ID:  ' .$row_dormant[0]. '</pre></font></b></div>';
						echo	"<br>";
						echo '</td>';

						echo '<td width="350">';
						echo	"<br>";
						echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Name:  ' .$row_student[0]. '</pre></font></b></div>';
						echo	"<br>";
						echo '</td>';

						echo '<td>';
						echo	"<br>";
						echo	'<div><b><font size="5" face="algerian" color="866684"><pre>CNIC:  ' .$row_student[1]. '</pre></font></b></div>';
						echo	"<br>";
						echo '</td>';
					echo '</tr>';

					echo	"<br>";

					echo "</table>";


				}
				}
				
				if($selected_val == "12") 
				{
					$q_dormant="select unique rh.s_rollnumber FROM registration_history rh, Registration r where MONTHS_BETWEEN(sysdate,rh.R_Date)>=12 and MONTHS_BETWEEN(sysdate,rh.R_Date) <24 and rh.s_rollnumber != r.s_rollnumber";
					$query_dormant = oci_parse($con, $q_dormant);
				$r_dormant = oci_execute($query_dormant);
				//$row_dormant = oci_fetch_array($query_dormant, OCI_BOTH+OCI_RETURN_NULLS);
				//echo " Class Name: " . $row_dormant[0] . " <tr> ";	
				
							$q="select unique rh.s_rollnumber FROM registration_history rh, Registration r where MONTHS_BETWEEN(sysdate,rh.R_Date)>=12 and MONTHS_BETWEEN(sysdate,rh.R_Date) <24 and rh.s_rollnumber != r.s_rollnumber";
							$query_id6 = oci_parse($con, $q);
							$ru = oci_execute($query_id6);
							$row57 = oci_fetch_array($query_id6, OCI_BOTH+OCI_RETURN_NULLS);
							if ($row57)
							{ 
								echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Students who have been dormant</pre> </font></b></div>';
								
							}
							else
							{
								echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Sorry No Records Found ! :(</pre> </font></b></div>';
				
							}
								
									
				while($row_dormant = oci_fetch_array($query_dormant, OCI_BOTH+OCI_RETURN_NULLS))
				{
					
					
					$q_student="select s_name, s_bayformno from Student s where s.s_rollnumber = '". $row_dormant[0] ."'" ;
					$query_student = oci_parse($con, $q_student);
					$r_student = oci_execute($query_student);
					$row_student = oci_fetch_array($query_student, OCI_BOTH+OCI_RETURN_NULLS);
					echo	"<br>";

					echo "<table border = 0 align = center>";

					echo '<tr>';
						echo '<td width="350">';
						echo	"<br>";
						echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Student ID:  ' .$row_dormant[0]. '</pre></font></b></div>';
						echo	"<br>";
						echo '</td>';

						echo '<td width="350">';
						echo	"<br>";
						echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Name:  ' .$row_student[0]. '</pre></font></b></div>';
						echo	"<br>";
						echo '</td>';

						echo '<td>';
						echo	"<br>";
						echo	'<div><b><font size="5" face="algerian" color="866684"><pre>CNIC:  ' .$row_student[1]. '</pre></font></b></div>';
						echo	"<br>";
						echo '</td>';
					echo '</tr>';

					echo	"<br>";

					echo "</table>";


				}
				}
				
				if($selected_val == "24") 
				{
					$q_dormant="select unique rh.s_rollnumber FROM registration_history rh, Registration r where MONTHS_BETWEEN(sysdate,rh.R_Date)>=24 and MONTHS_BETWEEN(sysdate,rh.R_Date) < 60 and rh.s_rollnumber != r.s_rollnumber";
					$query_dormant = oci_parse($con, $q_dormant);
				$r_dormant = oci_execute($query_dormant);
				//$row_dormant = oci_fetch_array($query_dormant, OCI_BOTH+OCI_RETURN_NULLS);
				//echo " Class Name: " . $row_dormant[0] . " <tr> ";	
				
							$q="select unique rh.s_rollnumber FROM registration_history rh, Registration r where MONTHS_BETWEEN(sysdate,rh.R_Date)>=24 and MONTHS_BETWEEN(sysdate,rh.R_Date) < 60 and rh.s_rollnumber != r.s_rollnumber";
							$query_id6 = oci_parse($con, $q);
							$ru = oci_execute($query_id6);
							$row57 = oci_fetch_array($query_id6, OCI_BOTH+OCI_RETURN_NULLS);
							if ($row57)
							{ 
								echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Students who have been dormant</pre> </font></b></div>';
								
							}
							else
							{
								echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Sorry No Records Found ! :(</pre> </font></b></div>';
				
							}
								
									
				while($row_dormant = oci_fetch_array($query_dormant, OCI_BOTH+OCI_RETURN_NULLS))
				{
					
					
					$q_student="select s_name, s_bayformno from Student s where s.s_rollnumber = '". $row_dormant[0] ."'" ;
					$query_student = oci_parse($con, $q_student);
					$r_student = oci_execute($query_student);
					$row_student = oci_fetch_array($query_student, OCI_BOTH+OCI_RETURN_NULLS);
					echo	"<br>";

					echo "<table border = 0 align = center>";

					echo '<tr>';
						echo '<td width="350">';
						echo	"<br>";
						echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Student ID:  ' .$row_dormant[0]. '</pre></font></b></div>';
						echo	"<br>";
						echo '</td>';

						echo '<td width="350">';
						echo	"<br>";
						echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Name:  ' .$row_student[0]. '</pre></font></b></div>';
						echo	"<br>";
						echo '</td>';

						echo '<td>';
						echo	"<br>";
						echo	'<div><b><font size="5" face="algerian" color="866684"><pre>CNIC:  ' .$row_student[1]. '</pre></font></b></div>';
						echo	"<br>";
						echo '</td>';
					echo '</tr>';

					echo	"<br>";

					echo "</table>";


				}
				}
				
				if($selected_val == "60") 
				{
					$q_dormant="select unique rh.s_rollnumber FROM registration_history rh, Registration r where MONTHS_BETWEEN(sysdate,rh.R_Date)>=60 and MONTHS_BETWEEN(sysdate,rh.R_Date) <72 and rh.s_rollnumber != r.s_rollnumber";
					$query_dormant = oci_parse($con, $q_dormant);
				$r_dormant = oci_execute($query_dormant);
				//$row_dormant = oci_fetch_array($query_dormant, OCI_BOTH+OCI_RETURN_NULLS);
				//echo " Class Name: " . $row_dormant[0] . " <tr> ";	
				
							$q="select unique rh.s_rollnumber FROM registration_history rh, Registration r where MONTHS_BETWEEN(sysdate,rh.R_Date)>=60 and MONTHS_BETWEEN(sysdate,rh.R_Date) <72 and rh.s_rollnumber != r.s_rollnumber";
							$query_id6 = oci_parse($con, $q);
							$ru = oci_execute($query_id6);
							$row57 = oci_fetch_array($query_id6, OCI_BOTH+OCI_RETURN_NULLS);
							if ($row57)
							{ 
								echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Students who have been dormant</pre> </font></b></div>';
								
							}
							else
							{
								echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Sorry No Records Found ! :(</pre> </font></b></div>';
				
							}
								
									
				while($row_dormant = oci_fetch_array($query_dormant, OCI_BOTH+OCI_RETURN_NULLS))
				{
					
					
					$q_student="select s_name, s_bayformno from Student s where s.s_rollnumber = '". $row_dormant[0] ."'" ;
					$query_student = oci_parse($con, $q_student);
					$r_student = oci_execute($query_student);
					$row_student = oci_fetch_array($query_student, OCI_BOTH+OCI_RETURN_NULLS);
					echo	"<br>";

					echo "<table border = 0 align = center>";

					echo '<tr>';
						echo '<td width="350">';
						echo	"<br>";
						echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Student ID:  ' .$row_dormant[0]. '</pre></font></b></div>';
						echo	"<br>";
						echo '</td>';

						echo '<td width="350">';
						echo	"<br>";
						echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Name:  ' .$row_student[0]. '</pre></font></b></div>';
						echo	"<br>";
						echo '</td>';

						echo '<td>';
						echo	"<br>";
						echo	'<div><b><font size="5" face="algerian" color="866684"><pre>CNIC:  ' .$row_student[1]. '</pre></font></b></div>';
						echo	"<br>";
						echo '</td>';
					echo '</tr>';

					echo	"<br>";

					echo "</table>";


				}
				}
				
				if($selected_val > "60") 
				{
					$q_dormant="select unique rh.s_rollnumber FROM registration_history rh, Registration r where MONTHS_BETWEEN(sysdate,rh.R_Date)>= 72 and rh.s_rollnumber != r.s_rollnumber";
					$query_dormant = oci_parse($con, $q_dormant);
				$r_dormant = oci_execute($query_dormant);
				//$row_dormant = oci_fetch_array($query_dormant, OCI_BOTH+OCI_RETURN_NULLS);
				//echo " Class Name: " . $row_dormant[0] . " <tr> ";	
				
							$q="select unique rh.s_rollnumber FROM registration_history rh, Registration r where MONTHS_BETWEEN(sysdate,rh.R_Date)>= 72 and rh.s_rollnumber != r.s_rollnumber";
							$query_id6 = oci_parse($con, $q);
							$ru = oci_execute($query_id6);
							$row57 = oci_fetch_array($query_id6, OCI_BOTH+OCI_RETURN_NULLS);
							if ($row57)
							{ 
								echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Students who have been dormant</pre> </font></b></div>';
								
							}
							else
							{
								echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Sorry No Records Found ! :(</pre> </font></b></div>';
				
							}
								
									
				while($row_dormant = oci_fetch_array($query_dormant, OCI_BOTH+OCI_RETURN_NULLS))
				{
					
					
					$q_student="select s_name, s_bayformno from Student s where s.s_rollnumber = '". $row_dormant[0] ."'" ;
					$query_student = oci_parse($con, $q_student);
					$r_student = oci_execute($query_student);
					$row_student = oci_fetch_array($query_student, OCI_BOTH+OCI_RETURN_NULLS);
					echo	"<br>";

					echo "<table border = 0 align = center>";

					echo '<tr>';
						echo '<td width="350">';
						echo	"<br>";
						echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Student ID:  ' .$row_dormant[0]. '</pre></font></b></div>';
						echo	"<br>";
						echo '</td>';

						echo '<td width="350">';
						echo	"<br>";
						echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Name:  ' .$row_student[0]. '</pre></font></b></div>';
						echo	"<br>";
						echo '</td>';

						echo '<td>';
						echo	"<br>";
						echo	'<div><b><font size="5" face="algerian" color="866684"><pre>CNIC:  ' .$row_student[1]. '</pre></font></b></div>';
						echo	"<br>";
						echo '</td>';
					echo '</tr>';

					echo	"<br>";

					echo "</table>";


				}
				}
}
?>
