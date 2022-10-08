
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	


<?php
$html = '<style>
body{
	background-image:url(public/bg.jpg);
	

	background-size: contain;
}
.margin{
	padding-top:130px;
	
	
}
.alphabet{
    margin-right: 20px;
}

label{
    min-width: fit-content;
    margin-right: 120px;
}


.aligninput{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: start;
    margin: 6px;
    min-width: fit-content;
}
.checkwidth{
    margin-right: -7rem;
} 
input{
	margin-right:120px;
}
.blockwise{
	width : 12px;
	
	border : none;
	
}
.radiobtn{
	accent-color: red;
}
input[type=checkbox]{
	accent-color: red;
}
input:checked {
	height: 50px;
	width: 50px;
  }
</style>';


   	// $link = mysqli_connect("localhost","root","","birlaform");
	// $no = 1;
	// $q = "SELECT * FROM `admin` ORDER BY id DESC";
	// $res = mysqli_query($link,$q);
	// $row = mysqli_num_rows($res);
	// if($row > 0) { 
	// while($row = mysqli_fetch_assoc($res)) {
	//     $html .= '<tr align="center"><td>Name : '.$no.'</td>
	//     <td>Toll No:'.$row['toll_number'].'</td>
	//     <td>'.$row['toll_fax'].'</td></tr>';
	   
	//     $no++;
	// }
	
	$link = mysqli_connect("localhost","root","","birlaform");
	$no = 0;
	$q = "SELECT * FROM `birla1` ORDER BY id DESC";
	$res = mysqli_query($link,$q);
	
	$row = mysqli_num_rows($res);
	
    
   //for admin
	if($row > 0) { 
	if($row = mysqli_fetch_assoc($res) ) {


		//admin 
		$name_company = $row['name_company'];
        $toll_number = $row['toll_number'];
        $toll_fax = $row['toll_fax'];

		//string split using split func
        $name_company_exp = str_split($name_company);
        $toll_number_exp = str_split($toll_number);
		$toll_fax_exp = str_split($toll_fax);
    

		//patient

		$employeeid = $row['employeeid'];
        $name_patient = $row['name_patient'];
        $gender = $row['gender'];
        $age = $row['age'];
        $dob = $row['dob'];
        $contact_patient = $row['contact_patient'];
        $contact_relative = $row['contact_relative'];
        $insured_number = $row['insured_number'];
        $policy_number = $row['policy_number'];
        $mediclaim = $row['mediclaim'];
        $company_name = $row['company_name'];
        $physician = $row['physician'];
        $name_physician = $row['name_physician'];
        $contact_physician = $row['contact_physician'];

		//split into string char
        $employeeid_exp = str_split($employeeid);
		$name_patient_exp = str_split($name_patient);
		$gender_exp = str_split($gender);
		$age_exp = str_split($age);
		$dob_exp = str_split($dob);
		$contact_patient_exp = str_split($contact_patient);
		$contact_relative_exp = str_split($contact_relative);
		$insured_number_exp = str_split($insured_number);
		$policy_number_exp = str_split($policy_number);
		$mediclaim_exp = str_split($mediclaim);
		$company_name_exp = str_split($company_name);
		$physician_exp = str_split($physician);
		$name_physician_exp = str_split($name_physician);
		$contact_physician_exp = str_split($contact_physician);
		
		//doctor
		$name_doctor = $row['name_doctor'];
        $contact_doctor = $row['contact_doctor'];
        $nature_illness = $row['nature_illness'];
        $relevant = $row['relevant'];
        $duration = $row['duration'];
        $date_consultation = $row['date_consultation'];
        $past_history = $row['past_history'];
        $diagnosis = $row['diagnosis'];
        $icd_code = $row['icd_code'];
        $line_treatment = $row['line_treatment'];
        $invest_medical = $row['invest_medical'];
        $route_drug = $row['route_drug'];
        $name_surgery = $row['name_surgery'];
        $icd_pcs = $row['icd_pcs'];
        $other_treatment = $row['other_treatment'];
        $injury_occur = $row['injury_occur'];
       
		//split into string char
        $name_doctor_exp = str_split($name_doctor);
		$contact_doctor_exp = str_split($contact_doctor);
		$nature_illness_exp = str_split($nature_illness);
		$relevant_exp = str_split($relevant);
		$duration_exp = str_split($duration);
		$date_consultation_exp = str_split($date_consultation);
		$past_history_exp = str_split($past_history);
		$diagnosis_exp = str_split($diagnosis);
		$icd_code_exp = str_split($icd_code);
		$line_treatment_exp = str_split($line_treatment);
		$invest_medical_exp = str_split($invest_medical);
		$route_drug_exp = str_split($route_drug);
		$name_surgery_exp = str_split($name_surgery);
		$icd_pcs_exp = str_split($icd_pcs);
		$other_treatment_exp = str_split($other_treatment);
		$injury_occur_exp = str_split($injury_occur);





	}
	} else {
        echo "Something went wrong" ;
	}

	
	$html .="

<div class=margin>
	<h3>DETAILS OF THE THIRD PARTY ADMINISTRATOR</h3><P>(To be filled in block letters)</P>
	<div>
		
		<span>a.</span> Name of TPA/Insurance Company : ";

		for ($i=0; $i < 28; $i++) { 
	# code...
	if($i<count($name_company_exp)){

		$html .="<input class=blockwise value=\"".$name_company_exp[$i]."\">";
	}
	else{
		$html .= "
		<input  class=blockwise>";
	}
	
}
	$html .="
	</div>

	
	<div>
	<span>b.</span>
<label>Toll free phone number</label>&nbsp;";
for ($i=0; $i < 13; $i++) { 
	# code...
	if($i<count($toll_number_exp)){

		$html .="<input class=blockwise value=\"".$toll_number_exp[$i]."\">";
	}
	else{
		$html .= "
		<input  class=blockwise>";
	}
	
}
$html .="
	
 </div>
	<div>
	<span>c.</span>

<label>Toll free Fax</label>&nbsp;";
for ($i=0; $i < 10; $i++) { 
	# code...
	if($i<count($toll_fax_exp)){

		$html .="<input class=blockwise value=\"".$toll_fax_exp[$i]."\">";
	}
	else{
		$html .= "
		<input  class=blockwise>";
	}
}

$html .="
</div>
</div>

<h3>TO BE FILLED BY THE INSURED/PATIENT</h3>
<div>
<span>a.</span>

	<label >Name of the Patient</label>&nbsp;";
	for ($i=0; $i < 33; $i++) { 
		# code...
		if($i<count($name_patient_exp)){

			$html .="<input class=blockwise value=\"".$name_patient_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
	</div>
<div>
<span>b.</span>
	<label>Gender</label>&nbsp;";
	
		if($gender == "Male"){

			$html .="<input type=checkbox checked=checked> Male";
			$html .= "
			<input type=checkbox>Female";
		}
		if($gender == "Female"){
			$html .="<input type=checkbox> Male";
			$html .= "
			<input type=checkbox checked=checked>Female";
		}
	
	$html .= "
	
	
<label></label>&nbsp;



<label></label>&nbsp;

</div>


<div>
	 <span>c.</span>
	
		
		<label>Age</label>&nbsp;";
		for ($i=0; $i < 4; $i++) { 
			# code...
			if($i<count($age_exp)){
	
				$html .="<input class=blockwise value=\"".$age_exp[$i]."\">";
			}
			else{
				$html .= "
				<input  class=blockwise>";
			}
		}
		$html .= "
		Years Months
</div>

<div>
<span>d.</span>

	<label>Date of Birth</label>&nbsp;";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($dob_exp)){

			$html .="<input class=blockwise value=\"".$dob_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
	
	</div>

<div>
<span>e.</span>

	<label>Contact Number</label>&nbsp;";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($contact_patient_exp)){

			$html .="<input class=blockwise value=\"".$contact_patient_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
</div>

<div>
<span>f.</span>

	<label>Contact number of attending relative</label>&nbsp;";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($contact_relative_exp)){

			$html .="<input class=blockwise value=\"".$contact_relative_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
</div>

<div>
<span>g.</span>

	<label>Insured Card ID number</label>&nbsp;";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($insured_number_exp)){

			$html .="<input class=blockwise value=\"".$insured_number_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
</div>

<div>
<span>h.</span>

	<label>Policy number / Name of corporate</label>&nbsp;";
	for ($i=0; $i < 28; $i++) { 
		# code...
		if($i<count($policy_number_exp)){

			$html .="<input class=blockwise value=\"".$policy_number_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
	
	
	
</div>

<div>
<span>i.</span>

	<label>Employee ID</label>&nbsp;";
	for ($i=0; $i < 28; $i++) { 
		# code...
		if($i<count($employeeid_exp)){

			$html .="<input class=blockwise value=\"".$employeeid_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
	
	
</div>

<div>
<span>j.</span>

	<label>Currently do you have any other Mediclaim/Health insurance</label>&nbsp;";
	if($mediclaim == "Yes"){

		$html .="<input type=checkbox checked=checked> Yes";
		$html .= "
		<input type=checkbox>No";
	}
	if($mediclaim == "No"){
		$html .="<input type=checkbox> Yes";
		$html .= "
		<input type=checkbox checked=checked>No";
	}

$html .= "


</div>

</div>
<div>
<div class=margin>
</div>
<span>k.</span>

	<label>Company Name:</label>&nbsp;
	<label>Give details</label>&nbsp;";
	for ($i=0; $i < 31; $i++) { 
		# code...
		if($i<count($company_name_exp)){

			$html .="<input class=blockwise value=\"".$company_name_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
</div>
<div>
<span>l.</span>

	<label>Do you have any family  physician</label>&nbsp;";
	if($physician == "Yes"){

		$html .="<input type=checkbox checked=checked> Yes";
		$html .= "
		<input type=checkbox>No";
	}
	if($physician == "No"){
		$html .="<input type=checkbox> Yes";
		$html .= "
		<input type=checkbox checked=checked>No";
	}

$html .= "

</div>
</div>

<div>
<span>m.</span>

	<label>Name of the family physician</label>&nbsp;";
	for ($i=0; $i < 28; $i++) { 
		# code...
		if($i<count($name_physician_exp)){

			$html .="<input class=blockwise value=\"".$name_physician_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
</div>
<div>
<span>n.</span>

	<label>Contact number if any :</label>&nbsp;";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($contact_physician_exp)){

			$html .="<input class=blockwise value=\"".$contact_physician_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
	
	
	</div>
	

<p>PLEASE COMPLETE DECLARATION ON THE REVERSE SIDE OF THIS FORM</p>


	<h2>TO BE FILLED BY THE TREATING DOCTOR/HOSPITAL</h2>
	
	<div>
		<span>a.</span>
		
		<label>Name of the treating doctor :</label>&nbsp;";
		for ($i=0; $i < 28; $i++) { 
			# code...
			if($i<count($name_doctor_exp)){
	
				$html .="<input class=blockwise value=\"".$name_doctor_exp[$i]."\">";
			}
			else{
				$html .= "
				<input  class=blockwise>";
			}
		}
		$html .= "
	
	</div> 
	<div>
		<span>b.</span>
		
		<label>Contact number:</label>&nbsp;";
		for ($i=0; $i < 10; $i++) { 
			# code...
			if($i<count($contact_doctor_exp)){
	
				$html .="<input class=blockwise value=\"".$contact_doctor_exp	[$i]."\">";
			}
			else{
				$html .= "
				<input  class=blockwise>";
			}
		}
		$html .= "
	
</div> 
<div>
	<span>c.</span>
	
	<label>Name of ILLNESS / Disease with presenting Complaints :</label>&nbsp;";
	for ($i=0; $i < 24; $i++) { 
		# code...
		if($i<count($nature_illness_exp)){

			$html .="<input class=blockwise value=\"".$nature_illness_exp	[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "

	
</div> 
<div>
	<span>d.</span>
	
	<label>Relevant clinical findings :</label>&nbsp;";
	for ($i=0; $i < 24; $i++) { 
		# code...
		if($i<count($relevant_exp)){

			$html .="<input class=blockwise value=\"".$relevant_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
</div>

<div>
	<span>e.</span>
	
	<label>Duration of the present ailment :</label>&nbsp; ";
	for ($i=0; $i < 3; $i++) { 
		# code...
		if($i<count($duration_exp)){

			$html .="<input class=blockwise value=\"".$duration_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
	
	
	<span>Days</span>
</div>
<div>
	<label>Date of first consultation :</label>&nbsp;";
	for ($i=0; $i < 6; $i++) { 
		# code...
		if($i<count($date_consultation_exp)){

			$html .="<input class=blockwise value=\"".$date_consultation_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	
	<label>Past history of present ailment if any :</label>&nbsp;";
	for ($i=0; $i < 16; $i++) { 
		# code...
		if($i<count($past_history_exp)){

			$html .="<input class=blockwise value=\"".$past_history_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	
</div>
<div>
	<span>f.</span>
	
	<label>Provisional diagnosis :</label>&nbsp;";
	for ($i=0; $i < 31; $i++) { 
		# code...
		if($i<count($diagnosis_exp)){

			$html .="<input class=blockwise value=\"".$diagnosis_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
</div>
<div>
	<span>g.</span>
	
	<label>ICD 10 Code :</label>&nbsp;";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($icd_code_exp)){

			$html .="<input class=blockwise value=\"".$icd_code_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	
</div>
<div>
	<span>h.</span>
	
	<label>Proposed line of treatment :</label>&nbsp;
	<label>Medical Management Surgical Management Intensive care Investigation Non allopathic treatment.</label>&nbsp;";
	for ($i=0; $i < 5; $i++) { 
		# code...
		if($i<count($line_treatment_exp)){

			$html .="<input class=blockwise value=\"".$line_treatment_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	
	
</div>
<div>
	<span>I.</span>
	
	<label>If Investigation &/or Medical Management provide :</label>&nbsp;";
	for ($i=0; $i < 24; $i++) { 
		# code...
		if($i<count($invest_medical_exp)){

			$html .="<input class=blockwise value=\"".$invest_medical_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	
	
</div>
<div>
	<span>j.</span>
	
	<label>Route of drug administartion :</label>&nbsp;";
	for ($i=0; $i < 30; $i++) { 
		# code...
		if($i<count($route_drug_exp)){

			$html .="<input class=blockwise value=\"".$route_drug_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	
</div>
<div>
	<span>k.</span>
	
	<label>If Surgical, name of surgery :</label>&nbsp;";
	for ($i=0; $i < 30; $i++) { 
		# code...
		if($i<count($name_surgery_exp)){

			$html .="<input class=blockwise value=\"".$name_surgery_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
</div>
<div>
	<span>l.</span>
	
	<label>ICD 10 PCS Code :</label>&nbsp;";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($icd_pcs_exp)){

			$html .="<input class=blockwise value=\"".$icd_pcs_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	</div>
<div>
	<span>m.</span>
	
	<label>If other treatments provide details :</label>&nbsp;";
	for ($i=0; $i < 30; $i++) { 
		# code...
		if($i<count($other_treatment_exp)){

			$html .="<input class=blockwise value=\"".$other_treatment_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	
</div>
<div class=margin></div>
<div>
	<span>n.</span>
	
	<label>How did injury occur :</label>&nbsp;";
	for ($i=0; $i < 30; $i++) { 
		# code...
		if($i<count($injury_occur_exp)){

			$html .="<input class=blockwise value=\"".$injury_occur_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
</div>
"; 

  


	require_once __DIR__ . '/vendor/autoload.php';

	$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8','format' => 'A4-L' ]);

	$mpdf->SetDisplayMode('fullwidth');
	$mpdf->WriteHTML( $html);

	$dir='C:/xampp/htdocs/Abhishek/formlayout/';     //directory to save the PDF file
	$filename  = "test.pdf";
	$mpdf->Output('pdf/'.$filename, 'I');

    // $filename= "home.pdf";         

	// $mpdf->Output();


	exit;


    ?>

</body>
</html>