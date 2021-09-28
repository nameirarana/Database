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
			  top: 165%;
			  left: 350%;
			  transform: translate(-50%, -50%);
			}
					
		</style>

	</head>
	
	<body>
	
	
		<div class="container">
		 <img class="centered" src="3.jpg" height="100" width="3000" alt="3">
		  <a href="HamarayBachay.html" >
		 <img class="top-left img-circular" src="4.jpg" height="70" width="80" alt="4" ><a>
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
		
			
		<br>
		 <br>
		<br>
		
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
		
		
			
			

	if(isset($_POST["button1"])) {

	
				
				
				
				$q="update Student set s_name = '".$_POST["Name"]."'  ,s_bayformno = '".$_POST["bform"]."' , DOB='".$_POST["DOB"]."'  , relation = '".$_POST["G_relation"]. "'  where s_rollnumber ='".$_POST["ID11"]. "'";
				  $query_id6 = oci_parse($con, $q);
				  $ru = oci_execute($query_id6);
				  $q="update mother set m_name = '".$_POST["M_name"]."' ,m_cnic = '".$_POST["M_CNIC"]."' , m_num='".$_POST["M_contact"]."' , m_address = '".$_POST["M_add"]."' , m_mail = '".$_POST["M_email"]."' ,m_income = '".$_POST["M_inc"]."',m_emp_id = '".$_POST["M_empid"]."' where m_id ='".$_POST["IDF"]. "'";
				  $query_id6 = oci_parse($con, $q);
				  $ru = oci_execute($query_id6);
				   $q="update father set f_name = '".$_POST["F_name"]."' ,f_cnic = '".$_POST["F_CNIC"]."' , f_num='".$_POST["F_contact"]."' , f_address = '".$_POST["F_add"]."' , f_mail = '".$_POST["F_email"]."' ,f_income = '".$_POST["F_inc"]."' ,f_emp_id = '".$_POST["F_empid"]."' where f_id ='".$_POST["IDM"]. "'";
				  $query_id6 = oci_parse($con, $q);
				  $ru = oci_execute($query_id6);
				  $q="update guardian set g_name = '".$_POST["G_name"]."' ,g_cnic = '".$_POST["G_CNIC"]."' , g_num='".$_POST["G_contact"]."' , g_address = '".$_POST["G_Address"]."' , g_mail = '".$_POST["G_email"]."' ,g_income = '".$_POST["G_inc"]."',g_emp_id = '".$_POST["G_Emp"]."' where g_id ='".$_POST["IDG"]. "'";
				  $query_id6 = oci_parse($con, $q);
				  $ru = oci_execute($query_id6);
		
				echo "<br>";
				echo "UPDATED";

	}
	
	
	
  ?>