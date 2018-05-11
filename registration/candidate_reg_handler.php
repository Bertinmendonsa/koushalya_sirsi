<?php
require('dbconnect.php');
session_start();
// inputs
$scheme_Id = $_POST['scheme_Id']; //SELECTED SCHEME ID
$qualification = $_POST['qualification']; //QUALIFIACTION ID
$role_Id = $_POST['role_Id']; //ROLE ID
$serial = $_POST['serial'];//ENROLMENT ID

$fname = $_POST['fname']; //FIRST_NAME
$mname = $_POST['mname']; //MIDDLE_NAME
$lname = $_POST['lname']; //LAST_NAME
$dob  = $_POST['dob']; //DATE_OF_BIRTH
$gender = $_POST['gender'];  //GENDER
$marital_stat = $_POST['marital_stat']; //MARITAL STATUS

$ffname =  $_POST['ffname']; //FATHERS FIRST NAME
$fmname = $_POST['fmname']; //FATHERS MIDDLE NAME
$flname = $_POST['flname']; //FATHERS LAST NAME

$mfname = $_POST['mfname']; //MOTHERS FIRST NAME
$mmname = $_POST['mmname']; //MOTHERS MIDDLE NAME
$mlname = $_POST['mlname']; //MOTHERS LAST NAME

$nationality = $_POST['nationality']; //NATIONALITY
$religion = $_POST['religion']; //RELIGION ID
$caste = $_POST['caste']; //CASTE ID

$aadhar = $_POST['aadhar']; //AADHAR  CARD NUMBER
$pan = $_POST['pan']; //PAN CARD NUMBER
$voter = $_POST['voter']; //VOTER ID CARD NUMBER

$mobile = $_POST['mobile']; //MOBILE NUMBER
$landline = $_POST['landline']; //LANDLINE NUMBER
$alternate = $_POST['alternate']; //ALTERNAE PHONE NUMBER
$email = $_POST['email']; //EMAIL ID

//PERMANENT ADDRESS

$line1 = $_POST['line1']; //ADDRESS LINE1
$line2 = $_POST['line2']; //ADDRESS LINE2
$stateId = $_POST['stateId']; //STATE ID
$city = $_POST['city']; //DISTRICT ID
$town = $_POST['town']; //TOWN NAME
$pincode = $_POST['pincode']; //PINCODE
$parlimentC = $_POST['parlimentC']; //PARLIMENT CONSTITUENCY


// if present and peranet adress are same permanent address will be copied to present address
if(isset($_POST['sameAdd'])){
	$pline1 = $line1; // PRESENT ADDRESS LINE1
	$pline2 = $line2;	// PRESENT ADDRESS LINE2
	$preStateId = $stateId; //PRESENT STATE ID
	$precity = $city; //PRESENT DISTRICT ID
	$pretown = $town; //PRESENT TOWN
	$ppincode = $pincode;//PRESENT CITY PINCODE
	$preparlimet = $parlimentC;  //PRESENT PARLIMENT CONSTITUENCY

}
else{
	$pline1 = $_POST['pline1']; // PRESENT ADDRESS LINE1
	$pline2 = $_POST['pline2']; // PRESENT ADDRESS LINE2
	$preStateId = $_POST['preStateId']; //PRESENT STATE ID
	$precity = $_POST['precity']; //PRESENT DISTRICT ID
	$pretown = $_POST['pretown']; //PRESENT TOWN
	$ppincode = $_POST['ppincode']; //PRESENT CITY PINCODE
	$preparlimet = $_POST['preparlimet']; //PRESENT PARLIMENT CONSTITUENCY

}
//PRESENT ADDRESS



$bankId = $_POST['bankId']; //BANK ID
$branch = $_POST['branch']; //BANK BRANCH
$ifsc = $_POST['ifsc']; //IFSC CODE
$account = $_POST['account']; //ACCOUNT NUMBER

$disabled = $_POST['disability']; //DISABLED STATUS
$news = $_POST['news']; //NEWS HEARD ABOUT KOUSHALYA KENDRA
// $hostelfacility = $_POST['hostelfacility']; //HOSTEL FACILITY REQUIREMENT

$sector = $_POST['sector']; //SECTOR
$counselor = $_POST['counselor']; //COUNSELOR

$regcenter = $_POST['regcenter']; //REGCENTER ID


// PASSWORD FOR CANDIDATES

$password = sha1($_POST['password']); //PASSWORD SET BY CANDIDATES
//newly adder Fields
$holder_name=$_POST['holder_name'];




// payment integration part

$_SESSION['candidate_name'] = $fname." ".$mname." ".$lname;
$_SESSION['candidate_mobile'] = $mobile;
$_SESSION['candidate_email']= $email;





if (isset($_POST['submit']))
{


    // for candidate photo


	$filename = $_FILES["image"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file name
	$file_ext = substr($filename, strripos($filename, '.')); // get file extension
	$filesize = $_FILES["image"]["size"];
	$allowed_file_types = array('.jpg','.png','.JPG','.JPEG');

	if (in_array($file_ext,$allowed_file_types) && ($filesize < 500000))
	{
		// Rename file
		$newfilename = $serial . $file_ext;
		if (file_exists("photos/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{
            if(move_uploaded_file($_FILES["image"]["tmp_name"], "photos/" . $newfilename)){
                echo "File uploaded successfully.";
            }
            else{
                echo "sorry couldn't uplod file";
            }


		}
	}
	elseif (empty($file_basename))
	{
		// file selection error
		echo "Please select a file to upload.";
	}
	elseif ($filesize > 500000)
	{
		// file size error
		echo "The file you are trying to upload is too large.";
	}
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["image"]["tmp_name"]);
    }




    // for AADHAR card
    $AadharFile = $_FILES["aadharfile"]["name"];
    $aadhar_file_basename = substr($AadharFile, 0, strripos($AadharFile, '.')); // get file name
	$aadhar_file_ext = substr($AadharFile, strripos($AadharFile, '.')); // get file extension
    $aadhar_filesize = $_FILES["aadharfile"]["size"];
    $aadhar_allowed_file_types = array('.jpg','.png','.JPG','.JPEG');

    if (in_array($aadhar_file_ext,$aadhar_allowed_file_types) && ($aadhar_filesize < 500000))
	{
		// Rename file
		$aadhar_newfilename = $serial . $aadhar_file_ext;
		if (file_exists("aadhar_card/" . $aadhar_newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{
            if(move_uploaded_file($_FILES["aadharfile"]["tmp_name"], "aadhar_card/" . $aadhar_newfilename)){
                echo "AADHAR uploaded successfully.";
            }
            else{
                echo "sorry couldn't uplod AADHAR";
            }


		}
	}
	elseif (empty($aadhar_file_basename))
	{
		// file selection error
		echo "Please select a file to upload.";
	}
	elseif ($aadhar_filesize > 500000)
	{
		// file size error
		echo "The file you are trying to upload is too large.";
	}
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$aadhar_allowed_file_types);
		unlink($_FILES["aadharfile"]["tmp_name"]);
    }


}



//insert query

$candidateQuery = "INSERT INTO `kk_candidates`(`first_name`, `middle_name`, `last_name`,
`dob`, `gender`, `martial_status`, `father_first_name`, `father_middle_name`,
`father_last_name`, `educational_qualification_id`, `cast_category_id`, `religion_id`,
`nationality`, `mobile_number`, `land_line_number`, `voter_id`, `email`, `alternate_number`,
`permanent_address_line_1`, `permanent_address_line_2`, `permanent_town`, `permanent_district_id`,
`permanent_parliment_constituency_id`, `permanent_state_id`, `present_address_line_1`, `present_address_line_2`,
`present_town`, `present_district_id`, `present_parliment_constituency_id`, `present_pincode`,
 `present_state_id`, `bank_id`,
`bank_branch`, `ifsc_code`, `disability`, `about_scheme`, `sector`,
`job_role_id`, `center_id`, `photo_path`, `aadhar_path`, `active`, `payment_status`, `payment_transaction_id`,
`enrollment_id`,`scheme_id`,`mother_first_name`,`mother_middle_name`,`mother_last_name`,`password`,`account_holder_name`)
 VALUES ('$fname','$mname','$lname','$dob','$gender','$marital_stat','$ffname','$fmname','$flname',
 '$qualification','$caste','$religion','$nationality','$mobile','$landline',
 '$voter','$email','$alternate','$line1','$line2','$town','$city','$parlimentC',
 '$stateId','$pline1','$pline2','$pretown','$precity','$preparlimet','$ppincode',
 '$preStateId','$bankId','$branch','$ifsc','$disabled','$news','$sector','$role_Id','$regcenter','photos/$newfilename','aadhar_card/$aadhar_newfilename'
 ,'1','','','$serial','$scheme_Id','$mfname','$mmname','$mlname','$password','$holder_name')";

 echo "<br/>".$candidateQuery;
 if(mysqli_query($conn,$candidateQuery)){
	 $last_id = mysqli_insert_id($conn);
	 $_SESSION['candidate_table_id'] = $last_id;
	 header("Location: payment.php");
 }
 else{
	 echo mysqli_error($conn);

 }





?>
