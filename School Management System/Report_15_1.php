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
			  top: 225px;
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
			
			.centered11a {
			  position: absolute;
			  top: 26%;
			  left: 63%;
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
			border: 1px solid #F36C8C;
			box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
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
			
			.pictureee {
			  position: absolute;
			  top: 75%;
			  left: 90%;
			  transform: translate(-50%, -50%);
			}
					
		</style>
		
		
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

		 <div align="center" height="70" width="80"><b><font size="8" face="algerian" color="866684">Parent Information</font></b></div>

		
		<br>
		
	 
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

  
   $ff_id = 1;
  $std_ro=32;
			$mm_id =1;
			
			$mm = 1;
			$gg = 1;
 
	if(isset($_POST["View"]))
		{
			
			
			if($_POST["Search_ID"][0]=='F'){
			
			$q2a="select f.f_ID,f_name,f_cnic,f_num,f_address,f_mail,f_income,f_isalive,f_emp_ID from Father f where (f.f_iD= '".$_POST["Search_ID"]."') or f.f_name = '".$_POST["Search_ID"]."'"  ;
			$query_id2a = oci_parse($con, $q2a);
			$r2a = oci_execute($query_id2a);
			
			if($row2a = oci_fetch_array($query_id2a, OCI_BOTH+OCI_RETURN_NULLS))
			{
					echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Father Information</pre> </font></b></div>';
			}
			
			$q2="select f.f_ID,f_name,f_cnic,f_num,f_address,f_mail,f_income,f_isalive,f_emp_ID from Father f where (f.f_iD= '".$_POST["Search_ID"]."') or f.f_name = '".$_POST["Search_ID"]."'"  ;
			$query_id2 = oci_parse($con, $q2);
			$r2 = oci_execute($query_id2);
			
			
			while($row2 = oci_fetch_array($query_id2, OCI_BOTH+OCI_RETURN_NULLS)) 
			{	
		
				echo	"<br>";
		
				if( $row2[7]  == 1)
				{
					$row2[7]  = "Yes";
				}
				else
				{
					$row2[7]  = "No";
				}
				

				
		
				echo "<table border = 0 align = center>"; 
				
				echo '<tr>';
					echo '<td width="350">';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>F_ID:  ' .$row2[0]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				
					echo '<td width="350">';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Name:  ' .$row2[1]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>CNIC:  ' .$row2[2]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				echo '</tr>';
				
				echo '<tr>';	
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Number:  ' .$row2[3]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Address:  ' .$row2[4]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Email:  ' .$row2[5]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
				echo '</tr>';
				
				echo '<tr>';
				
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Income:  ' .$row2[6]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Is Alive:  ' .$row2[7]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Emp_ID:  ' .$row2[8]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				
				echo '</tr>';
				
				echo	"<br>";
				
				echo "</table>";	
				
				$ff_id =  $row2[0] ; 
				
			}
			
			
			echo "<br>";
			echo "<br>";			
			echo "<br>";
			echo "<br>";
			
			
			
			
			
			$qS1A="select distinct m_ID, g_ID from student where f_ID = '".$ff_id."' "  ;
			$query_idS1A = oci_parse($con, $qS1A);
			$r2S1A = oci_execute($query_idS1A);
			

			
			
			while($row1s = oci_fetch_array($query_idS1A, OCI_BOTH+OCI_RETURN_NULLS)) 
			{	
				
				if ($mm != $row1s[0])
				{
						$q3a="select m.m_ID,m_name,m_cnic,m_num,m_address,m_mail,m_income,m_isalive,m_emp_ID from Mother m, Student s where m.m_ID = '" .$row1s[0]."'"  ;
						$query_id3a = oci_parse($con, $q3a);
						$r3a = oci_execute($query_id3a);
						
						$mm = $row1s[0];
						
						if($row3a = oci_fetch_array($query_id3a, OCI_BOTH+OCI_RETURN_NULLS))
						{
						echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Mother Information</pre> </font></b></div>';
						}
						
						$q3="select unique m.m_ID,m_name,m_cnic,m_num,m_address,m_mail,m_income,m_isalive,m_emp_ID from Mother m where (m.m_ID = '" .$row1s[0]."')"  ;
						$query_id3 = oci_parse($con, $q3);
						$r3 = oci_execute($query_id3);
						
						while($row3 = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
						{	
					
							echo	"<br>";
					
							if( $row3[7]  == 1)
							{
								$row3[7]  = "Yes";
							}
							else
							{
								$row3[7]  = "No";
							}
					
							echo "<table border = 0 align = center>"; 
							
							echo '<tr>';
								echo '<td width="350">';
								echo	"<br>";
								echo	'<div><b><font size="5" face="algerian" color="866684"><pre>M_ID:  ' .$row3[0]. '</pre></font></b></div>';
								echo	"<br>";
								echo '</td>';
							
								echo '<td width="350">';
								echo	"<br>";
								echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Name:  ' .$row3[1]. '</pre></font></b></div>';
								echo	"<br>";
								echo '</td>';
								
								echo '<td>';
								echo	"<br>";
								echo	'<div><b><font size="5" face="algerian" color="866684"><pre>CNIC:  ' .$row3[2]. '</pre></font></b></div>';
								echo	"<br>";
								echo '</td>';
							echo '</tr>';
							
							echo '<tr>';	
								echo '<td>';
								echo	"<br>";
								echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Number:  ' .$row3[3]. '</pre></font></b></div>';
								echo	"<br>";
								echo '</td>';
								
								echo '<td>';
								echo	"<br>";
								echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Address:  ' .$row3[4]. '</pre></font></b></div>';
								echo	"<br>";
								echo '</td>';
								
								echo '<td>';
								echo	"<br>";
								echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Email:  ' .$row3[5]. '</pre></font></b></div>';
								echo	"<br>";
								echo '</td>';
								
							echo '</tr>';
							
							echo '<tr>';
							
								echo '<td>';
								echo	"<br>";
								echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Income:  ' .$row3[6]. '</pre></font></b></div>';
								echo	"<br>";
								echo '</td>';
								
								echo '<td>';
								echo	"<br>";
								echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Is Alive:  ' .$row3[7]. '</pre></font></b></div>';
								echo	"<br>";
								echo '</td>';
								
								echo '<td>';
								echo	"<br>";
								echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Emp_ID:  ' .$row3[8]. '</pre></font></b></div>';
								echo	"<br>";
								echo '</td>';
								
								echo '</tr>';
								
								echo	"<br>";
								
								echo "</table>";

								$mm_id =  $row3[0] ;
								echo "<br>";
			echo "<br>";
			//$q1='select s_rollnumber,s_name from student where s_rollnumber = ' .$_POST["Search_ID"]. ;
			$q1a="select s_rollnumber,s_name,DOB,s_gender,sysdate, round((sysdate-DOB)/365,1),s_bayformno,s_yearenrolled,s_pid from student where f_id= '".$ff_id."' and m_id = '".$row1s[0]."'"  ;
			$query_id1a = oci_parse($con, $q1a);
			$r1a = oci_execute($query_id1a);
			
			if(!$row1a = oci_fetch_array($query_id1a, OCI_BOTH+OCI_RETURN_NULLS))
			{
				echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Sorry, No Records Found ! :(</pre> </font></b></div>';
			
			}
			
			$q1="select s_rollnumber,s_name,DOB,s_gender,sysdate, round((sysdate-DOB)/365,1),s_bayformno,s_yearenrolled,s_pid from student where f_id= '".$ff_id."' and m_id = '".$row1s[0]."'"  ;
			$query_id1 = oci_parse($con, $q1);
			$r1 = oci_execute($query_id1);

				
			while($row1 = oci_fetch_array($query_id1, OCI_BOTH+OCI_RETURN_NULLS)) 
			{	
		
				echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Student Information</pre> </font></b></div>';
			
			
				echo "<table border = 0 align = center>"; 
				
				echo	"<br>";
				
				echo '<tr>';
					echo '<td width="350">';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>RollNumber:  ' .$row1[0]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				
					echo '<td width="350">';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Name:  ' .$row1[1]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>DOB:  ' .$row1[2]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					
						echo '<input type="hidden">';
						echo '<pre>                           </pre>';
						
					echo '</td>';
					
					echo '<td rowspan = "70">';
					echo	"<br>";
					echo '<img src=" ' .$row1[8]. '" height="200" width="220" alt="3">';
				
					echo	"<br>";
					echo '</td>';
					
				echo '</tr>';
				
				echo	"<br>";
				
				echo '<tr>';
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Gender:  ' .$row1[3]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Age:  ' .$row1[5]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Bayform Number:  ' .$row1[6]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				echo '</tr>';
				
				echo	"<br>";
				
				echo '<tr>';
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Year Enrolled:  ' .$row1[7]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					
					echo '<td>';
					
$std_ro = $row1[0];		
		$q1aa="select r.class_Id from Registration r, Student s where r.s_rollnumber= '".$row1[0]."' and s.s_rollnumber = r.s_rollnumber"  ;
					$query_id1aa = oci_parse($con, $q1aa);
					$r1aa = oci_execute($query_id1aa);
					$row2aaa = oci_fetch_array($query_id1aa, OCI_BOTH+OCI_RETURN_NULLS);
					
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Class_ID:  ' .$row2aaa[0]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					
					
				echo '</tr>';
				echo"</table>";
			}
				
							
			$q4a="select g.g_ID,g_name,g_cnic,g_gender,g_num,g_address,g_mail,g_income,g_emp_ID from Guardian g, Student s where (s_rollnumber= '" .$std_ro."') and g.g_ID = s.g_ID"  ;
			$query_id4a = oci_parse($con, $q4a);
			$r4a = oci_execute($query_id4a);	
			
			if($row4a = oci_fetch_array($query_id4a, OCI_BOTH+OCI_RETURN_NULLS))
			{
				echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Guardian Information</pre> </font></b></div>';
			
			}
			
			$q4="select g.g_ID,g_name,g_cnic,g_gender,g_num,g_address,g_mail,g_income,g_emp_ID from Guardian g, Student s where (s_rollnumber= '" .$std_ro."') and g.g_ID = s.g_ID"  ;
			$query_id4 = oci_parse($con, $q4);
			$r4 = oci_execute($query_id4);
			
			
			while($row4 = oci_fetch_array($query_id4, OCI_BOTH+OCI_RETURN_NULLS)) 
			{	
		
				echo	"<br>";
		
				echo "<table border = 0 align = center>"; 
				
				echo '<tr>';
					echo '<td width="350">';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>G_ID:  ' .$row4[0]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				
					echo '<td width="350">';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Name:  ' .$row4[1]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>CNIC:  ' .$row4[2]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				echo '</tr>';
				
				echo '<tr>';	
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Gender:  ' .$row4[3]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Number:  ' .$row4[4]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Address:  ' .$row4[5]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
				echo '</tr>';
				
				echo '<tr>';
				
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Email:  ' .$row4[6]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Income:  ' .$row4[7]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Emp_ID:  ' .$row4[8]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				
				echo '</tr>';
				
				echo	"<br>";
				
				echo "</table>";

				echo "<br>";
				echo "<br>";			
				echo "<br>";
				echo "<br>";
			
				
						}
							
				
							echo "<br>";
							echo "<br>";			
							echo "<br>";
							echo "<br>";
					}
			
			}
			}
			}
			if($_POST["Search_ID"][0]=='M'){
			
			$q2a="select f.m_ID,m_name,m_cnic,m_num,m_address,m_mail,m_income,m_isalive,m_emp_ID from mother f where (f.m_iD= '".$_POST["Search_ID"]."') or f.m_name = '".$_POST["Search_ID"]."'"  ;
			$query_id2a = oci_parse($con, $q2a);
			$r2a = oci_execute($query_id2a);
			
			if($row2a = oci_fetch_array($query_id2a, OCI_BOTH+OCI_RETURN_NULLS))
			{
					echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Mother Information</pre> </font></b></div>';
			}
			
			$q2="select f.m_ID,m_name,m_cnic,m_num,m_address,m_mail,m_income,m_isalive,m_emp_ID from mother f where (f.m_iD= '".$_POST["Search_ID"]."') or f.m_name = '".$_POST["Search_ID"]."'"  ;
			$query_id2 = oci_parse($con, $q2);
			$r2 = oci_execute($query_id2);
			
			
			while($row2 = oci_fetch_array($query_id2, OCI_BOTH+OCI_RETURN_NULLS)) 
			{	
		
				echo	"<br>";
		
				if( $row2[7]  == 1)
				{
					$row2[7]  = "Yes";
				}
				else
				{
					$row2[7]  = "No";
				}
				

				
		
				echo "<table border = 0 align = center>"; 
				
				echo '<tr>';
					echo '<td width="350">';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>M_ID:  ' .$row2[0]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				
					echo '<td width="350">';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Name:  ' .$row2[1]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>CNIC:  ' .$row2[2]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				echo '</tr>';
				
				echo '<tr>';	
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Number:  ' .$row2[3]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Address:  ' .$row2[4]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Email:  ' .$row2[5]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
				echo '</tr>';
				
				echo '<tr>';
				
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Income:  ' .$row2[6]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Is Alive:  ' .$row2[7]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Emp_ID:  ' .$row2[8]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				
				echo '</tr>';
				
				echo	"<br>";
				
				echo "</table>";	
				
				$ff_id =  $row2[0] ; 
		
			
			
			$qS1A="select f_ID, g_ID from student where m_ID = '".$ff_id."' "  ;
			$query_idS1A = oci_parse($con, $qS1A);
			$r2S1A = oci_execute($query_idS1A);
			

			
			
			while($row1s = oci_fetch_array($query_idS1A, OCI_BOTH+OCI_RETURN_NULLS)) 
			{	
				
				if ($mm != $row1s[0])
				{
						$q3a="select m.f_ID,f_name,f_cnic,f_num,f_address,f_mail,f_income,f_isalive,f_emp_ID from father m, Student s where m.f_ID = '" .$row1s[0]."'"  ;
						$query_id3a = oci_parse($con, $q3a);
						$r3a = oci_execute($query_id3a);
						
						$mm = $row1s[0];
						
						if($row3a = oci_fetch_array($query_id3a, OCI_BOTH+OCI_RETURN_NULLS))
						{
						echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Father Information</pre> </font></b></div>';
						}
						
						$q3="select unique m.f_ID,f_name,f_cnic,f_num,f_address,f_mail,f_income,f_isalive,f_emp_ID from father m where (m.f_ID = '" .$row1s[0]."')"  ;
						$query_id3 = oci_parse($con, $q3);
						$r3 = oci_execute($query_id3);
						
						while($row3 = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
						{	
					
							echo	"<br>";
					
							if( $row3[7]  == 1)
							{
								$row3[7]  = "Yes";
							}
							else
							{
								$row3[7]  = "No";
							}
					
							echo "<table border = 0 align = center>"; 
							
							echo '<tr>';
								echo '<td width="350">';
								echo	"<br>";
								echo	'<div><b><font size="5" face="algerian" color="866684"><pre>F_ID:  ' .$row3[0]. '</pre></font></b></div>';
								echo	"<br>";
								echo '</td>';
							
								echo '<td width="350">';
								echo	"<br>";
								echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Name:  ' .$row3[1]. '</pre></font></b></div>';
								echo	"<br>";
								echo '</td>';
								
								echo '<td>';
								echo	"<br>";
								echo	'<div><b><font size="5" face="algerian" color="866684"><pre>CNIC:  ' .$row3[2]. '</pre></font></b></div>';
								echo	"<br>";
								echo '</td>';
							echo '</tr>';
							
							echo '<tr>';	
								echo '<td>';
								echo	"<br>";
								echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Number:  ' .$row3[3]. '</pre></font></b></div>';
								echo	"<br>";
								echo '</td>';
								
								echo '<td>';
								echo	"<br>";
								echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Address:  ' .$row3[4]. '</pre></font></b></div>';
								echo	"<br>";
								echo '</td>';
								
								echo '<td>';
								echo	"<br>";
								echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Email:  ' .$row3[5]. '</pre></font></b></div>';
								echo	"<br>";
								echo '</td>';
								
							echo '</tr>';
							
							echo '<tr>';
							
								echo '<td>';
								echo	"<br>";
								echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Income:  ' .$row3[6]. '</pre></font></b></div>';
								echo	"<br>";
								echo '</td>';
								
								echo '<td>';
								echo	"<br>";
								echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Is Alive:  ' .$row3[7]. '</pre></font></b></div>';
								echo	"<br>";
								echo '</td>';
								
								echo '<td>';
								echo	"<br>";
								echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Emp_ID:  ' .$row3[8]. '</pre></font></b></div>';
								echo	"<br>";
								echo '</td>';
								
								echo '</tr>';
								
								echo	"<br>";
								
								echo "</table>";

								$mm_id =  $row3[0] ;
				
								echo "<br>";
			echo "<br>";
			//$q1='select s_rollnumber,s_name from student where s_rollnumber = ' .$_POST["Search_ID"]. ;
			$q1a="select s_rollnumber,s_name,DOB,s_gender,sysdate, round((sysdate-DOB)/365,1),s_bayformno,s_yearenrolled,s_pid from student where m_id= '".$ff_id."' and f_id = '".$mm_id."'"  ;
			$query_id1a = oci_parse($con, $q1a);
			$r1a = oci_execute($query_id1a);
			
			if(!$row1a = oci_fetch_array($query_id1a, OCI_BOTH+OCI_RETURN_NULLS))
			{
				echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Sorry, No Records Found ! :(</pre> </font></b></div>';
			
			}
			
			$q1="select s_rollnumber,s_name,DOB,s_gender,sysdate, round((sysdate-DOB)/365,1),s_bayformno,s_yearenrolled,s_pid from student where m_id= '".$ff_id."' and f_id = '".$mm_id."'"  ;
			$query_id1 = oci_parse($con, $q1);
			$r1 = oci_execute($query_id1);

				
			while($row1 = oci_fetch_array($query_id1, OCI_BOTH+OCI_RETURN_NULLS)) 
			{	
		
				echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Student Information</pre> </font></b></div>';
			
			
				echo "<table border = 0 align = center>"; 
				
				echo	"<br>";
				
				echo '<tr>';
					echo '<td width="350">';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>RollNumber:  ' .$row1[0]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				
					echo '<td width="350">';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Name:  ' .$row1[1]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>DOB:  ' .$row1[2]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					
						echo '<input type="hidden">';
						echo '<pre>                           </pre>';
						
					echo '</td>';
					
					echo '<td rowspan = "70">';
					echo	"<br>";
					echo '<img src=" ' .$row1[8]. '" height="200" width="220" alt="3">';
				
					echo	"<br>";
					echo '</td>';
					
				echo '</tr>';
				
				echo	"<br>";
				
				echo '<tr>';
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Gender:  ' .$row1[3]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Age:  ' .$row1[5]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Bayform Number:  ' .$row1[6]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				echo '</tr>';
				
				echo	"<br>";
				
				echo '<tr>';
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Year Enrolled:  ' .$row1[7]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					
					echo '<td>';
					
$std_ro = $row1[0];		
		$q1aa="select r.class_Id from Registration r, Student s where r.s_rollnumber= '".$row1[0]."' and s.s_rollnumber = r.s_rollnumber"  ;
					$query_id1aa = oci_parse($con, $q1aa);
					$r1aa = oci_execute($query_id1aa);
					$row2aaa = oci_fetch_array($query_id1aa, OCI_BOTH+OCI_RETURN_NULLS);
					
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Class_ID:  ' .$row2aaa[0]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					
					
				echo '</tr>';
				echo"</table>";
			}
				
							
			$q4a="select g.g_ID,g_name,g_cnic,g_gender,g_num,g_address,g_mail,g_income,g_emp_ID from Guardian g, Student s where (s_rollnumber= '" .$std_ro."') and g.g_ID = s.g_ID"  ;
			$query_id4a = oci_parse($con, $q4a);
			$r4a = oci_execute($query_id4a);	
			
			if($row4a = oci_fetch_array($query_id4a, OCI_BOTH+OCI_RETURN_NULLS))
			{
				echo '<div align = "Center" class="fsSubmitButton" height="90" width="80"><b><font size="5" face="algerian" color="white"><pre style ="font-size:25px" >Guardian Information</pre> </font></b></div>';
			
			}
			
			$q4="select g.g_ID,g_name,g_cnic,g_gender,g_num,g_address,g_mail,g_income,g_emp_ID from Guardian g, Student s where (s_rollnumber= '" .$std_ro."') and g.g_ID = s.g_ID"  ;
			$query_id4 = oci_parse($con, $q4);
			$r4 = oci_execute($query_id4);
			
			
			while($row4 = oci_fetch_array($query_id4, OCI_BOTH+OCI_RETURN_NULLS)) 
			{	
		
				echo	"<br>";
		
				echo "<table border = 0 align = center>"; 
				
				echo '<tr>';
					echo '<td width="350">';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>G_ID:  ' .$row4[0]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				
					echo '<td width="350">';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Name:  ' .$row4[1]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>CNIC:  ' .$row4[2]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				echo '</tr>';
				
				echo '<tr>';	
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Gender:  ' .$row4[3]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Number:  ' .$row4[4]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Address:  ' .$row4[5]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
				echo '</tr>';
				
				echo '<tr>';
				
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Email:  ' .$row4[6]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Income:  ' .$row4[7]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
					
					echo '<td>';
					echo	"<br>";
					echo	'<div><b><font size="5" face="algerian" color="866684"><pre>Emp_ID:  ' .$row4[8]. '</pre></font></b></div>';
					echo	"<br>";
					echo '</td>';
				
				echo '</tr>';
				
				echo	"<br>";
				
				echo "</table>";

				echo "<br>";
				echo "<br>";			
				echo "<br>";
				echo "<br>";
			
				
						}
							
				
							echo "<br>";
							echo "<br>";			
							echo "<br>";
							echo "<br>";
				
			}
				}
			}
			
			echo "<br>";
			echo "<br>";			
			echo "<br>";
			echo "<br>";
			
			
					
		}
				
						
			
			
			
			
			
			
			
					
				//echo $row1[8];
				
				//echo '<img class="pictureee" src=" ' .$row1[8]. '" height="200" width="220" alt="3">';
				
				
				
						
			echo "<br>";
			echo "<br>";			
			echo "<br>";
			echo "<br>";
			
			
			
			
			
			
				
			}
			
			
			}
				
				
			
		
?>
</body>
</html>
