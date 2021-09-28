<html>

<head>
<title>Database connection </title>
</head>
<?php  // creating a database connection 
$target_dir = "";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".<br>";
    $uploadOk = 1;
  } else {
    echo "File is not an image.<br>";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.<br>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.<br>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br>";
  } else {
    echo "Sorry, there was an error uploading your file.<br>";
  }
}
   $db_sid = 
   "(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST =  DESKTOP-PKTE2SQ)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = orcl)
    )
  )";            // Your oracle SID, can be found in tnsnames.ora  ((oraclebase)\app\Your_username\product\11.2.0\dbhome_1\NETWORK\ADMIN) 
  
   $db_user = "scott";   // Oracle username e.g "scott"
   $db_pass = "hamza123";    // Password for user e.g "1234"
   $con = oci_connect($db_user,$db_pass,$db_sid); 
   if($con) 
      { echo "Oracle Connection Successful.<br>"; 
		
		} 
   else 
      { die('Could not connect to Oracle: '); } 
  
    if(isset($_POST["button"])){

	 $q="insert into Student(DOB,Gender,BayForm_no,Stud_Name,picture_id) values( to_date('".$_POST["DOB"]."','DD/MM/YYYY'),'".$_POST["gender"]."',".$_POST["bform"].",'". $_POST["Name"]."','".basename($_FILES["fileToUpload"]["name"])."')";
	 $query_id = oci_parse($con, $q); 		
	 $r = oci_execute($query_id); 

	 // Selected the Inserted Record and shows on the webpage 
	 if($r)
	 {

			 echo "Student Insertion Successful!!!";
			 echo "<br>";
	 }
	 else
	 {
		 echo "Student Record not inserted!<br>";
		 $e = oci_error($query_id);  
		 echo $e['message'];
	 }
		
	$q="insert into CareTaker (Phone,ct_name,income,isEmployee,cnic,address,Email) values (".$_POST["F_contact"].",'".$_POST["F_name"]."',".$_POST["F_inc"].",".$_POST["F_isEmp"].",".$_POST["F_CNIC"].",'".$_POST["F_add"]."','".$_POST["F_email"]."')";
	 $query_id = oci_parse($con, $q); 		
	 $r = oci_execute($query_id); 

	 // Selected the Inserted Record and shows on the webpage 
	 if($r)
	 {

			 echo "Father Insertion Successful!!!";
			 echo "<br>";
	 }
	 else
	 {
		 echo "Father Record not inserted!<br>";
		 $e = oci_error($query_id);  
		 echo $e['message'];
	 }
	 $q="insert into CareTaker (Phone,ct_name,income,isEmployee,cnic,address,Email) values (".$_POST["M_contact"].",'".$_POST["M_name"]."',".$_POST["M_inc"].",".$_POST["M_isEmp"].",".$_POST["M_CNIC"].",'".$_POST["M_add"]."','".$_POST["M_email"]."')";
	 $query_id = oci_parse($con, $q); 		
	 $r = oci_execute($query_id); 

	 // Selected the Inserted Record and shows on the webpage 
	 if($r)
	 {

			 echo "Mother Insertion Successful!!!";
			 echo "<br>";

	 }
	 else
	 {
		 echo "Mother Record not inserted!<br>";
		 $e = oci_error($query_id);  
		 echo $e['message'];
	 }
	 
	 $q="insert into CareTaker (Phone,ct_name,income,isEmployee,cnic,address,Email) values (".$_POST["G_contact"].",'".$_POST["G_name"]."',".$_POST["M_inc"].",".$_POST["G_isEmp"].",".$_POST["G_CNIC"].",'".$_POST["G_Address"]."','".$_POST["G_email"]."')";
	 $query_id = oci_parse($con, $q); 		
	 $r = oci_execute($query_id); 


	 // Selected the Inserted Record and shows on the webpage 
	 if($r)
	 {

			 echo "Guardian Insertion Successful!!!";
			 echo "<br>";

	 }
	 else
	 {
		 echo "Guardian Record not inserted!<br>";
		 $e = oci_error($query_id);  
		 echo $e['message'];
	 }
	
			$sql_select="select Roll_No from Student where BayForm_no=".$_POST["bform"];
			$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			$row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS);
		 
		 	$sql_select="select ct_id from CareTaker where cnic=".$_POST["F_CNIC"];
			$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			$row1 = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS);
		 
		  	$sql_select="select ct_id from CareTaker where cnic=".$_POST["M_CNIC"];
			$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			$row2 = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS);
		 
		  	$sql_select="select ct_id from CareTaker where cnic=".$_POST["G_CNIC"];
			$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			$row3 = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS);
			
	$q="insert into takeCareOf (ct_id,Roll_No,relation,gender) values (".$row1[0].",".$row[0].",'Father','M')";
	 $query_id = oci_parse($con, $q); 		
	 $r = oci_execute($query_id); 

	 // Selected the Inserted Record and shows on the webpage 
	 if($r)
	 {

			 echo "Father Insertion into takeCareOf Successful!!!";
			 echo "<br>";
	 }
	 else
	 {
		 echo "Father Record not inserted into takeCareOf!<br>";
		 $e = oci_error($query_id);  
		 echo $e['message'];
	 }
	 
	 $q="insert into takeCareOf (ct_id,Roll_No,relation,gender) values (".$row2[0].",".$row[0].",'Mother','F')";
	 $query_id = oci_parse($con, $q); 		
	 $r = oci_execute($query_id); 

	 // Selected the Inserted Record and shows on the webpage 
	 if($r)
	 {

			 echo "Mother Insertion into takeCareOf Successful!!!";
			 echo "<br>";
	 }
	 else
	 {
		 echo "Mother Record not inserted into takeCareOf!<br>";
		 $e = oci_error($query_id);  
		 echo $e['message'];
	 }
	 
	 $q="insert into takeCareOf (ct_id,Roll_No,relation,gender) values (".$row3[0].",".$row[0].",'".$_POST["G_relation"]."','".$_POST["G_Gender"]."')";
	 $query_id = oci_parse($con, $q); 		
	 $r = oci_execute($query_id); 

	 // Selected the Inserted Record and shows on the webpage 
	 if($r)
	 {

			 echo "Guardian Insertion into takeCareOf Successful!!!";
			 echo "<br>";
	 }
	 else
	 {
		 echo "Guardian Record not inserted into takeCareOf!<br>";
		 $e = oci_error($query_id);  
		 echo $e['message'];
	 }
	 //display
	 
	 echo "<br><br><br>";
	 
echo "<body>";
echo "<h1 align = \"center\">Hamary Bachey</h1>";
echo "<h2 align = \"center\">Student Admission Form</h2></br>";
echo "<h3>Student Information</h3>";
echo "<form action=\"student_info.php\" method=\"post\" enctype=\"multipart/form-data\">";
echo "<table>";
echo "<tr>";
echo "<td>";
echo "</td>";
echo "<td>";
echo "Name:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"Name\" value = \"".$_POST["Name"]."\">";
echo "</td>";
echo "<td></td>";
echo "<td></td>";
echo "<td rowspan = \"2\">";
echo "<img src = \"".basename($_FILES["fileToUpload"]["name"])."\" height = \"50\"></img>";
echo "</td>";
echo "</td>";
echo  "</tr>";
echo "<tr>";
echo "<td></td>";
echo "<td>";
echo "Date Of Birth:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"DOB\" value =\"".$_POST["DOB"]."\" >";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td></td>";
echo "<td>";
echo "Gender";
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
echo "<td></td>";
echo "<td>";
echo "<input type=\"file\" name=\"fileToUpload\" id=\"fileToUpload\"></td>"; 
echo "</tr>";
echo "<tr>";
echo "<td></td>";
echo "<td>";
echo "Bayform_No";
echo "</td>";
echo "<td><input type=\"text\" name=\"bform\" value = \"".$_POST["bform"]."\"></td>";
echo "<td></td>";
echo "<td></td>";
echo "<td>";
echo "</td>";
echo "</tr>";
echo "<tr></tr>";
echo "<tr>";
echo "<td colspan = \"10\">________________________________________________________________________________________________________________________________</td>";
echo "</tr>";
echo "<tr></tr>";
echo "<tr>";
echo "<td colspan = \"10\">";
echo "<h3>";
echo "Parent Information";
echo "</h3>";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td></td>";
echo "<td>";
echo "Mother Name:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"M_name\" value = \"".$_POST["M_name"]."\">";
echo "</td>";
echo "<td>";
echo "Father Name:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"F_name\" value = \"".$_POST["F_name"]."\">";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td></td>";
echo "<td>";
echo "Mother Contact:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"M_contact\" value = \"".$_POST["M_contact"]."\">";
echo "</td>";
echo "<td>";
echo "Father Contact:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"F_contact\" value = \"".$_POST["F_contact"]."\" >";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td></td>";
echo "<td>";
echo "Mother CNIC:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"M_CNIC\" value = \"".$_POST["M_CNIC"]."\" >";
echo "</td>";
echo "<td>";
echo "Father CNIC:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"F_CNIC\" value = \"".$_POST["F_CNIC"]."\">";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td></td>";
echo "<td>";
echo "Mother EMAIL:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"M_email\" value = \"".$_POST["M_email"]."\" >";
echo "</td>";
echo "<td>";
echo "Father EMAIL:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"F_email\" value = \"".$_POST["F_email"]."\">";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td></td>";
echo "<td>";
echo "Mother ADDRESS:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"M_add\" value = \"".$_POST["M_add"]."\" >";
echo "</td>";
echo "<td>";
echo "Father ADDRESS:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"F_add\" value = \"".$_POST["F_add"]."\">";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td></td>";
echo "<td>";
echo "Mother Income:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"M_inc\" value = \"".$_POST["M_inc"]."\" >";
echo "</td>";
echo "<td>";
echo "Father Income:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"F_inc\" value = \"".$_POST["F_inc"]."\" >";
echo "</td>";
echo "</tr>";
echo "<tr></tr>";
echo "<tr>";
echo "<td></td>";
echo "<td>";
echo "IsEmployee:";
echo "</td>";
echo "<td>";
 echo " <label>Yes</label>";
 echo "<input type=\"radio\" id=\"Yes\" name=\"M_isEmp\" value=\"1\">";
 echo "<label>No</label>";
 echo "<input type=\"radio\" id=\"No\" name=\"M_isEmp\" value=\"0\">";

echo "</td>";

echo "<td>";
echo "IsEmployee:";
echo "</td>";
echo "<td>";
 echo "<label>Yes</label>";
 echo "<input type=\"radio\" id=\"Yes\" name=\"F_isEmp\" value=\"1\">";
 echo" <label>No</label>";
 echo" <input type=\"radio\" id=\"No\" name=\"F_isEmp\" value=\"0\">";

echo "</td>";
echo "</tr>";
echo "<tr></tr>";
echo "<tr>";
echo "<td colspan = \"10\">________________________________________________________________________________________________________________________________</td>";
echo "</tr>";
echo "<tr></tr>";
echo "<tr>";
echo "<td colspan = \"10\">";
echo "<h3>";
echo "Guardian Information";
echo "</h3>";
echo "<tr></tr>";
echo "<tr>";
echo "<td>";
echo "</td>";
echo "<td>";
echo "Guardian Name:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"G_name\" value = \"".$_POST["G_name"]."\">";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "</td>";
echo "<td>";
echo "Guardian Contact:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"G_contact\" value = \"".$_POST["G_contact"]."\" >";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "</td>";
echo "<td>";
echo "Guardian CNIC:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"G_CNIC\" value = \"".$_POST["G_CNIC"]."\" >";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td></td>";
echo "<td>";
echo "Guardian Gender";
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
echo "<tr>";
echo "</tr>";
echo "<tr>";
echo "<td></td>";
echo "<td>";
echo "Relation:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"G_relation\" value = \"".$_POST["G_relation"]."\" >";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td></td>";
echo "<td>";
echo "EMAIL:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"G_email\" value = \"".$_POST["G_email"]."\" >";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td></td>";
echo "<td>";
echo "ADDRESS:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"G_Address\" value = \"".$_POST["G_Address"]."\" >";
echo "</td>";
echo "</tr>";
echo  "<tr>";
echo "<td></td>";
echo "<td>";
echo "IsEmployee:";
echo "</td>";
echo "<td>";
 echo "<label>Yes</label>";
  echo "<input type=\"radio\" id=\"Yes\" name=\"G_isEmp\" value=\"1\">";
echo "<label>No</label>";
echo "<input type=\"radio\" id=\"No\" name=\"G_isEmp\" value=\"0\">";

echo "</td>";
echo "</tr>";
echo "<tr></tr>";
echo "<tr>";
echo "<td colspan = \"10\">________________________________________________________________________________________________________________________________</td>";
echo "</tr>";
echo "<tr></tr>";
echo "<tr>";
echo "<td colspan = \"10\">";
echo "<h3 align = \"center\">";
echo "For Staff Only";
echo "</h3>";
echo "<tr></tr>";
echo "<tr>";
echo "<td>";
echo "</td>";
echo "<td>";
echo "Fee Amount:";
echo "</td>";
echo "<td>";
echo "<input type=\"text\" name=\"feeAmount\" value = \"".$_POST["feeAmount"]."\" >";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "</td>";
echo "<td>";
echo "Discount:</td>";
echo "<td>";
echo "<input type=\"text\" name=\"fDiscount\" value = \"".$_POST["fDiscount"]."\">";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "</td>";
echo "<td>";
echo "Final Amount:</td>";
echo "<td>";
echo "<input type=\"text\" name=\"fFinal\" value = \"".$_POST["fFinal"]."\" >";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "</td>";
echo "<td>";
echo "Fee Fully Paid:</td>";
echo "<td>";
echo "<input type=\"radio\" id=\"fFull\" name=\"fFull\" value=\"yes\">";
echo " <label for=\"fFull\">Yes</label>";
echo "<input type=\"radio\" id=\"fFull\" name=\"fFull\" value=\"no\">";
echo "<label for=\"fFull\">No</label><br>";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "</td>";
echo "<td>";
echo "Challan #:</td>";
echo "<td>";
echo "<input type=\"text\" name=\"fFinal\" value = \"".$_POST["fFinal"]."\">";
echo "</td>";
echo "</tr>";
	 
	}

?>
</body>
</html>

