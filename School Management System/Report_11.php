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
			  left: 70%;
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
				width: 125px;
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
					
		</style>

	</head>
	
	<body>
	
		 <form name="input" action="Student_Admission.html" method="get">
		 
		  <input class = "fsSubmitButton134 top-right" type = "submit" value = "ADD+" name = "button">
		  </form>
	
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

		 <div align="center" height="70" width="80"><b><font size="8" face="algerian" color="866684">Students Per Class Form</font></b></div>
		
			
		
		<br>
		
	 <table align = "center">	
		
		<br><br>
		
	<div class="topnav ">
	 
	 <tr>

			<form method="post">
			<td >
					<div align="left" height="70" width="80"><b><font size="7" face="algerian" color="866684">Search </font></b></div>
			</td>
			
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>
					<input type="text" placeholder="" name = "Search_ID">
			</td>
			
			<td><pre>             </pre></td>
			<td></td>
			<td></td>
			
			<td>
					<select name ="option12">
					<option value ="All">All</option>
					<option size="10" value="Name">Name</option>
					<option value="ID">ID</option>
					<option value="Class_ID">Class_ID</option>
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
			$selected_val = $_POST['option12'];  // Storing Selected Value In Variable
			echo "You have selected :" .$selected_val;  // Displaying Selected Value
		
			if($selected_val == "All")
			{


						 $sql_select="select unique class_id from Student s, registration r where s.s_rollnumber = r.s_rollnumber order by class_id" ;
						  $query_id3 = oci_parse($con, $sql_select);
						  $runselect = oci_execute($query_id3);

						while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
						 { 
							echo "<table border = 1 align = center>"; 
							 
							 echo " <br> ";
								echo " <br> ";
								
								
							$q="select class_Name,Section from class c, registration r where c.class_id = ". $row[0] .""  ;
							$query_id6 = oci_parse($con, $q);
							$ru = oci_execute($query_id6);
							$row57 = oci_fetch_array($query_id6, OCI_BOTH+OCI_RETURN_NULLS);
								
							
							
							
							
							//echo " Class Name: " . $row57[0] . " <tr> ";	
							//echo " Class Name: " . $row57[1] . " <tr> ";	
							 
							//echo " Class ID: " . $row[0] . " <tr> ";
						
							
							$q1="select count(r.class_id) from Registration r where r.class_id = ". $row[0] .""  ;
						  $query_id7 = oci_parse($con, $q1);
						  $ruu = oci_execute($query_id7);
							$row5557 = oci_fetch_array($query_id7, OCI_BOTH+OCI_RETURN_NULLS);
							
							
							echo '<div class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Class ' . $row57[0] . '' . $row57[1] . '   [' . $row[0] . ']   ('  . $row5557[0] . ' total)</pre> </font></b></div>';
						
							
							echo "<br>";
							
							echo "<br>";
						
							echo "<tr>";
							
							 $sql_select="select s.s_rollnumber, s.s_name, s.s_gender from Student s, registration r where s.s_rollnumber = r.s_rollnumber and class_id = ".$row[0]."" ;
							  $query_id4 = oci_parse($con, $sql_select);
							  $run = oci_execute($query_id4);
							  
							  echo "<tr>";
							  echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>ID </b></td>';

									echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Name </b></td>';
									
									echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Age(yrs) </b></td>';
									
								echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Gender </b></td>';
								
								echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Edit </b></td>';
								
								echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Delete </b></td>';
								
								echo "</tr>";
								
							while($row1 = oci_fetch_array($query_id4, OCI_BOTH+OCI_RETURN_NULLS)) 
							 { 
								
								echo "<form action = \"student_edit.php\" method = 'post'>";
								echo "<tr>";
								echo '<td align="center" width="400" height = "50" style ="font-size:20px">' . $row1[0] . '</td>';
								echo '<td align="center" width="400" height = "50" style ="font-size:20px">' . $row1[1] . '</td>';
								
								
								$q2="select DOB,sysdate, round((sysdate-DOB)/365,1),s_name from Student where s_rollnumber = '". $row1[0] ."'";
								  $query_id8 = oci_parse($con, $q2);
								  $ruuu = oci_execute($query_id8);
								$row48 = oci_fetch_array($query_id8, OCI_BOTH+OCI_RETURN_NULLS);
							
								echo '<td align="center" width="400" height = "50" style ="font-size:20px">'  . $row48[2] . '</td>';
								  
								echo '<td align="center" width="400" height = "50" style ="font-size:20px">' . $row1[2] . '</td>';  
								echo "<input type = 'hidden' name = 'std_id' value= ".$row1[0].">";
								//echo '<td align="center" width="400" height = "50" style ="font-size:20px"> <input type="submit" value="edit" name = "edit"> </a> </td> ';
								//echo '<td align="center" width="400" height = "50" style ="font-size:20px"> <input type="submit" value="delete" name = "delete"></a> </td> ';
								
								//echo '<td align="center" width="400" height = "50" style ="font-size:20px"> <input type="submit" value="edit" name = "edit" width="38" height="30"/> </a> </td> ';

								echo '<td align="center" width="400" height = "50" style ="font-size:20px">';
									
								echo '<button type="submit hidden" name="edit" value=" ">';
								echo		'<image src="edit.jpeg" class="yooo" width="38" height="30"/> </a> ';
								echo '</button>';
								echo '</td> ';
								
								echo '<td align="center" width="400" height = "50" style ="font-size:20px">';
									
								echo '<button type="submit hidden" name="delete" value=" ">';
								echo		'<image src="delete.png" class="yooo" width="38" height="30"/> </a> ';
								echo '</button>';
								echo '</td> ';
								
								
								echo "</tr>";
								echo "</form>";
								
							 }
								 
							echo "</tr>";
						 }
						 
						echo "</table>";
						
			}
		
		
			if($selected_val == "ID")
			{
				
					
					echo "<br>";
					
				
						 $sql_select="select r.class_id from registration r where r.s_rollnumber = '".$_POST["Search_ID"]."'" ;
						  $query_id3 = oci_parse($con, $sql_select);
						  $runselect = oci_execute($query_id3);
							//$row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS);
							
							if(!$rowxy = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS))
							{
								echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Sorry No Records Found ! :(</pre> </font></b></div>';
			
							}
							
							 $sql_selectxy="select r.class_id from registration r where r.s_rollnumber = '".$_POST["Search_ID"]."'" ;
						  $query_id3xy = oci_parse($con, $sql_selectxy);
						  $runselectxy = oci_execute($query_id3xy);
							$row = oci_fetch_array($query_id3xy, OCI_BOTH+OCI_RETURN_NULLS);
							
							
							
							{
							
						//echo .$row[0];
						//echo " Class ID: " . $row[0] . " <tr> ";
					
					 
							echo "<table border = 1 align = center>"; 
							 
							 echo " <br> ";
								echo " <br> ";
								
								
							$q="select class_Name,Section from class c, registration r where c.class_id = ". $row[0] .""  ;
							$query_id6 = oci_parse($con, $q);
							$ru = oci_execute($query_id6);
							$row57 = oci_fetch_array($query_id6, OCI_BOTH+OCI_RETURN_NULLS);
								
							
							
							
							
							//echo " Class Name: " . $row57[0] . " <tr> ";	
							//echo " Class Name: " . $row57[1] . " <tr> ";	
							 
							//echo " Class ID: " . $row[0] . " <tr> ";
						
							
							$q1="select count(r.class_id) from Registration r where r.class_id = ". $row[0] .""  ;
						  $query_id7 = oci_parse($con, $q1);
						  $ruu = oci_execute($query_id7);
							$row5557 = oci_fetch_array($query_id7, OCI_BOTH+OCI_RETURN_NULLS);
							
							
							echo '<div class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Class ' . $row57[0] . '' . $row57[1] . '   [' . $row[0] . ']   ('  . $row5557[0] . ' total)</pre> </font></b></div>';
						
							
							echo "<br>";
							
							echo "<br>";
						
							echo "<tr>";
							
							 $sql_select="select s.s_rollnumber, s.s_name, s.s_gender from Student s, registration r where s.s_rollnumber = r.s_rollnumber and s.s_rollnumber = '".$_POST["Search_ID"]."' and class_id = ".$row[0]."" ;
							  $query_id4 = oci_parse($con, $sql_select);
							  $run = oci_execute($query_id4);
							  
							  echo "<tr>";
							  echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>ID </b></td>';

									echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Name </b></td>';
									
									echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Age(yrs) </b></td>';
									
								echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Gender </b></td>';
								
								echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Edit </b></td>';
								
								echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Delete </b></td>';
								
								echo "</tr>";
								
							while($row1 = oci_fetch_array($query_id4, OCI_BOTH+OCI_RETURN_NULLS)) 
							 { 
								
								echo "<form action = \"student_edit.php\" method = 'post'>";
								echo "<tr>";
								echo '<td align="center" width="400" height = "50" style ="font-size:20px">' . $row1[0] . '</td>';
								echo '<td align="center" width="400" height = "50" style ="font-size:20px">' . $row1[1] . '</td>';
								
								
								$q2="select DOB,sysdate, round((sysdate-DOB)/365,1),s_name from Student where s_rollnumber = '". $row1[0] ."'";
								  $query_id8 = oci_parse($con, $q2);
								  $ruuu = oci_execute($query_id8);
								$row48 = oci_fetch_array($query_id8, OCI_BOTH+OCI_RETURN_NULLS);
							
								echo '<td align="center" width="400" height = "50" style ="font-size:20px">'  . $row48[2] . '</td>';
								  
								echo '<td align="center" width="400" height = "50" style ="font-size:20px">' . $row1[2] . '</td>';  
								echo "<input type = 'hidden' name = 'std_id' value= ".$row1[0].">";
								//echo '<td align="center" width="400" height = "50" style ="font-size:20px"> <input type="submit" value="edit" name = "edit"> </a> </td> ';
								//echo '<td align="center" width="400" height = "50" style ="font-size:20px"> <input type="submit" value="delete" name = "delete"></a> </td> ';
								
								//echo '<td align="center" width="400" height = "50" style ="font-size:20px"> <input type="submit" value="edit" name = "edit" width="38" height="30"/> </a> </td> ';

								echo '<td align="center" width="400" height = "50" style ="font-size:20px">';
									
								echo '<button type="submit hidden" name="edit" value=" ">';
								echo		'<image src="edit.jpeg" class="yooo" width="38" height="30"/> </a> ';
								echo '</button>';
								echo '</td> ';
								
								echo '<td align="center" width="400" height = "50" style ="font-size:20px">';
									
								echo '<button type="submit hidden" name="delete" value=" ">';
								echo		'<image src="delete.png" class="yooo" width="38" height="30"/> </a> ';
								echo '</button>';
								echo '</td> ';
								
								
								echo "</tr>";
								echo "</form>";
								
							 }
								 
							echo "</tr>";
						 
						 
						echo "</table>";
							}
			}
			
			
			if($selected_val == "Class_ID")
			{
						
						 $sql_select="select r.class_id from registration r where r.class_id = '".$_POST["Search_ID"]."'" ;
						  $query_id3 = oci_parse($con, $sql_select);
						  $runselect = oci_execute($query_id3);
						  
						  if(!$row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS))
							{
								echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Sorry No Records Found ! :(</pre> </font></b></div>';
			
							}
							
							else
							{

						
							echo "<table border = 1 align = center>"; 
							 
							 echo " <br> ";
								echo " <br> ";
								
								
							$q="select class_Name,Section from class c, registration r where c.class_id = ". $row[0] .""  ;
							$query_id6 = oci_parse($con, $q);
							$ru = oci_execute($query_id6);
							$row57 = oci_fetch_array($query_id6, OCI_BOTH+OCI_RETURN_NULLS);
								
							
							
							
							
							//echo " Class Name: " . $row57[0] . " <tr> ";	
							//echo " Class Name: " . $row57[1] . " <tr> ";	
							 
							//echo " Class ID: " . $row[0] . " <tr> ";
						
							
							$q1="select count(r.class_id) from Registration r where r.class_id = ". $row[0] .""  ;
						  $query_id7 = oci_parse($con, $q1);
						  $ruu = oci_execute($query_id7);
							$row5557 = oci_fetch_array($query_id7, OCI_BOTH+OCI_RETURN_NULLS);
							
							
							echo '<div class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Class ' . $row57[0] . '' . $row57[1] . '   [' . $row[0] . ']   ('  . $row5557[0] . ' total)</pre> </font></b></div>';
						
							
							echo "<br>";
							
							echo "<br>";
						
							echo "<tr>";
							
							 $sql_select="select s.s_rollnumber, s.s_name, s.s_gender from Student s, registration r where s.s_rollnumber = r.s_rollnumber and class_id = ".$row[0]."" ;
							  $query_id4 = oci_parse($con, $sql_select);
							  $run = oci_execute($query_id4);
							  
							  echo "<tr>";
							  echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>ID </b></td>';

									echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Name </b></td>';
									
									echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Age(yrs) </b></td>';
									
								echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Gender </b></td>';
								
								echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Edit </b></td>';
								
								echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Delete </b></td>';
								
								echo "</tr>";
								
							while($row1 = oci_fetch_array($query_id4, OCI_BOTH+OCI_RETURN_NULLS)) 
							 { 
								
								echo "<form action = \"student_edit.php\" method = 'post'>";
								echo "<tr>";
								echo '<td align="center" width="400" height = "50" style ="font-size:20px">' . $row1[0] . '</td>';
								echo '<td align="center" width="400" height = "50" style ="font-size:20px">' . $row1[1] . '</td>';
								
								
								$q2="select DOB,sysdate, round((sysdate-DOB)/365,1),s_name from Student where s_rollnumber = '". $row1[0] ."'";
								  $query_id8 = oci_parse($con, $q2);
								  $ruuu = oci_execute($query_id8);
								$row48 = oci_fetch_array($query_id8, OCI_BOTH+OCI_RETURN_NULLS);
							
								echo '<td align="center" width="400" height = "50" style ="font-size:20px">'  . $row48[2] . '</td>';
								  
								echo '<td align="center" width="400" height = "50" style ="font-size:20px">' . $row1[2] . '</td>';  
								echo "<input type = 'hidden' name = 'std_id' value= ".$row1[0].">";
								//echo '<td align="center" width="400" height = "50" style ="font-size:20px"> <input type="submit" value="edit" name = "edit"> </a> </td> ';
								//echo '<td align="center" width="400" height = "50" style ="font-size:20px"> <input type="submit" value="delete" name = "delete"></a> </td> ';
								
								//echo '<td align="center" width="400" height = "50" style ="font-size:20px"> <input type="submit" value="edit" name = "edit" width="38" height="30"/> </a> </td> ';

								echo '<td align="center" width="400" height = "50" style ="font-size:20px">';
									
								echo '<button type="submit hidden" name="edit" value=" ">';
								echo		'<image src="edit.jpeg" class="yooo" width="38" height="30"/> </a> ';
								echo '</button>';
								echo '</td> ';
								
								echo '<td align="center" width="400" height = "50" style ="font-size:20px">';
									
								echo '<button type="submit hidden" name="delete" value=" ">';
								echo		'<image src="delete.png" class="yooo" width="38" height="30"/> </a> ';
								echo '</button>';
								echo '</td> ';
								
								
								echo "</tr>";
								echo "</form>";
								
							 }
								 
							echo "</tr>";
						 
						 
						echo "</table>";
						
							}
			}
			
			
			if($selected_val == "Name")
			{
				
						
				
							$sql_select="select r.class_id from student s,registration r where s.s_name =   '".$_POST["Search_ID"]."' and s.s_rollnumber = r.s_rollnumber " ;
						  $query_id3 = oci_parse($con, $sql_select);
						  $runselect = oci_execute($query_id3);
						  
						  	$s11="select r.class_id from student s,registration r where s.s_name =   '".$_POST["Search_ID"]."' and s.s_rollnumber = r.s_rollnumber " ;
						  $q11 = oci_parse($con, $s11);
						  $ru11 = oci_execute($q11);
						  
						  if(!$rowh1 = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS))
							{
								
								echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Sorry No Records Found ! :(</pre> </font></b></div>';
			
							}
							
							else
							{
								
								
								
								
			
								while($row = oci_fetch_array($q11, OCI_BOTH+OCI_RETURN_NULLS)) 
								 { 
							 
								
							 
									echo "<table border = 1 align = center>"; 
									 
									 echo " <br> ";
										echo " <br> ";
										
										
									$q="select class_Name,Section from class c, registration r where c.class_id = ". $row[0] .""  ;
									$query_id6 = oci_parse($con, $q);
									$ru = oci_execute($query_id6);
									$row57 = oci_fetch_array($query_id6, OCI_BOTH+OCI_RETURN_NULLS);
										
									
									
									//echo " Class Name: " . $row57[0] . " <tr> ";	
									//echo " Class Name: " . $row57[1] . " <tr> ";	
									 
									//echo " Class ID: " . $row[0] . " <tr> ";
								
									
									$q1="select count(r.class_id) from Registration r where r.class_id = ". $row[0] .""  ;
								  $query_id7 = oci_parse($con, $q1);
								  $ruu = oci_execute($query_id7);
									$row5557 = oci_fetch_array($query_id7, OCI_BOTH+OCI_RETURN_NULLS);
									
									
									echo '<div class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Class ' . $row57[0] . '' . $row57[1] . '   [' . $row[0] . ']   ('  . $row5557[0] . ' total)</pre> </font></b></div>';
								
									
									echo "<br>";
									
									echo "<br>";
								
									echo "<tr>";
									
									 $sql_select="select s.s_rollnumber, s.s_name, s.s_gender from Student s, registration r where s.s_rollnumber = r.s_rollnumber and s.s_name = '".$_POST["Search_ID"]."' and class_id = ".$row[0]."" ;
									  $query_id4 = oci_parse($con, $sql_select);
									  $run = oci_execute($query_id4);
									  
									  echo "<tr>";
									  echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>ID </b></td>';

											echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Name </b></td>';
											
											echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Age(yrs) </b></td>';
											
										echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Gender </b></td>';
										
										echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Edit </b></td>';
										
										echo '<td align="center" width="400" height = "50" style ="font-size:25px"><b>Delete </b></td>';
										
										echo "</tr>";
										
									while($row1 = oci_fetch_array($query_id4, OCI_BOTH+OCI_RETURN_NULLS)) 
									 { 
										
										echo "<form action = \"student_edit.php\" method = 'post'>";
										echo "<tr>";
										echo '<td align="center" width="400" height = "50" style ="font-size:20px">' . $row1[0] . '</td>';
										echo '<td align="center" width="400" height = "50" style ="font-size:20px">' . $row1[1] . '</td>';
										
										
										$q2="select DOB,sysdate, round((sysdate-DOB)/365,1),s_name from Student where s_rollnumber = '". $row1[0] ."'";
										  $query_id8 = oci_parse($con, $q2);
										  $ruuu = oci_execute($query_id8);
										$row48 = oci_fetch_array($query_id8, OCI_BOTH+OCI_RETURN_NULLS);
									
										echo '<td align="center" width="400" height = "50" style ="font-size:20px">'  . $row48[2] . '</td>';
										  
										echo '<td align="center" width="400" height = "50" style ="font-size:20px">' . $row1[2] . '</td>';  
										echo "<input type = 'hidden' name = 'std_id' value= ".$row1[0].">";
										//echo '<td align="center" width="400" height = "50" style ="font-size:20px"> <input type="submit" value="edit" name = "edit"> </a> </td> ';
										//echo '<td align="center" width="400" height = "50" style ="font-size:20px"> <input type="submit" value="delete" name = "delete"></a> </td> ';
										
										//echo '<td align="center" width="400" height = "50" style ="font-size:20px"> <input type="submit" value="edit" name = "edit" width="38" height="30"/> </a> </td> ';

										echo '<td align="center" width="400" height = "50" style ="font-size:20px">';
											
										echo '<button type="submit hidden" name="edit" value=" ">';
										echo		'<image src="edit.jpeg" class="yooo" width="38" height="30"/> </a> ';
										echo '</button>';
										echo '</td> ';
										
										echo '<td align="center" width="400" height = "50" style ="font-size:20px">';
											
										echo '<button type="submit hidden" name="delete" value=" ">';
										echo		'<image src="delete.png" class="yooo" width="38" height="30"/> </a> ';
										echo '</button>';
										echo '</td> ';
										
										
										echo "</tr>";
										echo "</form>";
												
											 }
												 
											echo "</tr>";
										 }
										 
										echo "</table>";
										
							}	
			}
		}

?>
</body>
</html>
