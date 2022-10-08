import React from 'react'
import { Link } from 'react-router-dom';
import $ from "jquery";

const Birla1 = (props) => {
  const {value} = props;
  return (
<>
    <div  id={value} className="data container" >
    <div className="center_section mt-5   formalign " style= {{width:"62%"}} id="form1">
        <div className="row d-flex adjust col"> 


    <div className="form-group">
        <h5>DETAILS OF THE THIRD PARTY ADMINISTRATOR</h5><p>(To be filled in block letters)</p>
        <div className="col d-flex flex-row aligninput  form-group">
            
            <span className="alphabet">a.</span> <label htmlFor="">Name of TPA/Insurance Company : </label> <input type="text" className="form-control class autosave"  name="name_company" id="name_company"  />
        </div>
        <div className="col-md-6 aligninput form-group">
            <span className="alphabet">b.</span>
            <label htmlFor="">Toll free phone number</label>
    <input type="text" className="form-control class autosave"  name="toll_number" id="toll_number"  />
</div>
<div className="col-md-6 aligninput form-group">
        <span className="alphabet">c.</span>

    <label htmlFor="">Toll free Fax</label>
    <input type="text" className="form-control class autosave"   name="toll_fax" id="toll_fax" />
    </div>
    

</div>

<h5>TO BE FILLED BY THE INSURED/PATIENT</h5>
<div className="col-md-6 aligninput">
    <span className="alphabet">a.</span>
    
    <label htmlFor="">Name of the Patient</label>
    <input type="text" className="form-control class autosave"  name="name_patient"  id="name_patient"/>
</div>
<div className="col-md-6 aligninput">
    <span className="alphabet">b.</span>
    <label htmlFor="">Gender</label>
    
    <div className="form-check checkwidth">
        <input  type="radio" className="form-check-input autosave gender"   id="gender" name="gender" value="Male" defaultChecked />Male
        <label className="form-check-label" htmlFor="radio1"></label>
    </div>
    <div className="form-check">
<input type="radio" className="form-check-input autosave gender" id="gender" name="gender" value="Female" />Female
<label className="form-check-label" htmlFor="radio2" ></label>
</div>



<div className="col-md-6 aligninput">
<span className="alphabet">c.</span>
<div className="age aligninput">

<label htmlFor="">Age</label>
        <input type="text" className="form-control autosave" id="age" name="age" /> 
        &nbsp;<label>Years
    </label>
    </div>

</div>

<div className="col-md-6 aligninput">
    <span className="alphabet">d.</span>
    
    <label htmlFor="">Date of Birth</label>
    <input type="text"  className="form-control autosave" id="dob"  name="dob" />
</div>

<div className="col-md-6 aligninput">
    <span className="alphabet">e.</span>
    
    <label htmlFor="">Contact Number</label>
    <input type="text" maxLength="10" className="form-control autosave" id="contact_patient" name="contact_patient" />
</div>

<div className="col-md-6 aligninput">
<span className="alphabet">f.</span>

<label htmlFor="">Contact number of attending relative</label>
<input type="text" maxLength="10" className="form-control autosave" id="contact_relative" name="contact_relative" />
</div>

<div className="col-md-6 aligninput">
    <span className="alphabet">g.</span>
    
    <label htmlFor="">Insured Card ID number</label>
    <input type="text" className="form-control autosave" id="insured_number" name="insured_number" />
</div>

<div className="col-md-6 aligninput">
    <span className="alphabet">h.</span>
    
    <label htmlFor="">Policy number / Name of corporate</label>
    <input type="text" className="form-control autosave" id="policy_number" name="policy_number" />
</div>

<div className="col-md-6 aligninput">
<span className="alphabet">i.</span>

<label htmlFor="">Employee ID</label>
<input type="text" className="form-control autosave" id="employeeid" name="employeeid" />
</div>

<div className="col-md-6 aligninput">
<span className="alphabet">j.</span>

<label htmlFor="">Currently do you have any other Mediclaim/Health insurance</label>
<div className="form-check checkwidth">
    <input  type="radio" className="form-check-input autosave mediclaim"   id="mediclaim" name="mediclaim" value="Yes" defaultChecked />Yes
    <label className="form-check-label" htmlFor="radio1"></label>
</div>
<div className="form-check">
<input type="radio" className="form-check-input autosave mediclaim" id="mediclaim" name="mediclaim" value="No" />No
<label className="form-check-label" htmlFor="radio2" ></label>
</div>

</div>
<div className="col-md-6 aligninput">
<span className="alphabet">k.</span>

    <label htmlFor="">Company Name:</label>
    <label htmlFor="">Give details</label>
    <input type="text" className="form-control autosave" id="company_name" name="company_name" />
</div>
<div className="col-md-6 aligninput">
    <span className="alphabet">l.</span>
    
    <label htmlFor="">Do you have any family  physician</label>
    <div className="form-check checkwidth">
        <input  type="radio" className="form-check-input autosave physician"   id="physician" name="physician" value="Yes" defaultChecked />Yes
        <label className="form-check-label" htmlFor="radio1"></label>
    </div>
    <div className="form-check">
        <input type="radio" className="form-check-input autosave physician" id="physician" name="physician" value="No"/>No
        <label className="form-check-label" htmlFor="radio2" ></label>
    </div>
</div>

<div className="col-md-6 aligninput">
    <span className="alphabet">m.</span>
    
    <label htmlFor="">Name of the family physician</label>
    <input type="text" className="form-control autosave" id="name_physician" name="name_physician" />
</div>
<div className="col-md-6 aligninput">
<span className="alphabet">n.</span>

<label htmlFor="">Contact number if any :</label>
<input type="text" maxLength="10" className="form-control autosave" id="contact_physician" name="contact_physician" />
    </div>
    
    
    <p>PLEASE COMPLETE DECLARATION ON THE REVERSE SIDE OF THIS FORM</p>
    
    
    <h5>TO BE FILLED BY THE TREATING DOCTOR/HOSPITAL</h5>
    
    <div className="col-md-6 aligninput">
        <span className="alphabet">a.</span>
        
        <label htmlFor="">Name of the treating doctor :</label>
        
        <input type="text" className="form-control autosave" id="name_doctor" name="name_doctor"/>
    </div> 
    <div className="col-md-6 aligninput">
        <span className="alphabet">b.</span>
        
        <label htmlFor="">Contact number:</label>
        <input type="text" maxLength="10" title="Please enter valid phone number" className="form-control autosave" id="contact_doctor" name="contact_doctor"/>
    </div> 
    <div className="col-md-6 aligninput">
        <span className="alphabet">c.</span>
        
        <label htmlFor="">Name of ILLNESS / Disease with presenting Complaints :</label>
        <input type="text" className="form-control autosave" id="nature_illness" name="nature_illness" />
    </div> 
    <div className="col-md-6 aligninput">
        <span className="alphabet">d.</span>
        
        <label htmlFor="">Relevant clinical findings :</label>
        <input type="text" className="form-control autosave" id="relevant" name="relevant" />
    </div>
    
    <div className="col-md-6 aligninput">
        <span className="alphabet">e.</span>
    
        <label htmlFor="">Duration of the present ailment :</label> 
        <input type="text" className="form-control class d-flex flex-row-reverse" id="duration"  name="duration"  />
    <span>Days</span>
</div>

    <label htmlFor="">Date of first consultation :</label>
    <input type="text" className="form-control autosave input_size" style={{width:"40%"}} id="date_consultation" name="date_consultation"  />
    
    <label htmlFor="">Past history of present ailment if any :</label>
    <input type="text" className="form-control autosave input_size"   style={{width:"40%"}} id="past_history" name="past_history"/>

    
    <div className="col-md-6 aligninput">
        <span className="alphabet">f.</span>
        
        <label htmlFor="">Provisional diagnosis :</label>
    <input type="text" className="form-control autosave" id="diagnosis" name="diagnosis"/>
</div>
<div className="col-md-6 aligninput">
    <span className="alphabet">g.</span>
    
    <label htmlFor="">ICD 10 Code :</label>
    <input type="text" maxLength="10" className="form-control autosave" id="icd_code" name="icd_code" />
</div>
<div className="col-md-6  aligninput">
    <span className="alphabet">h.</span>
    
    <label htmlFor="" style={{marginRight:"12px"}}>Proposed line of treatment :</label>
</div>
<label htmlFor="" style="margin:auto ; margin-right:10px;">Medical Management Surgical Management Intensive care Investigation Non allopathic treatment.</label>
<input type="text" className="form-control autosave input_size "   style={{width:"50%"}} id="line_treatment" name="line_treatment" />
<div className="col-md-6 aligninput" >
    <span className="alphabet">I.</span>
    
    <label htmlFor="">If Investigation &/or Medical Management provide :</label>
    <input type="text" className="form-control autosave" id="invest_medical" name="invest_medical" />
</div>
<div className="col-md-6 aligninput">
    <span className="alphabet">j.</span>
    
    <label htmlFor="">Route of drug administration :</label>
    <input type="text" className="form-control autosave" id="route_drug" name="route_drug" />
</div>
<div className="col-md-6 aligninput">
    <span className="alphabet">k.</span>
    
    <label htmlFor="">If Surgical, name of surgery :</label>
    <input type="text" className="form-control autosave" id="name_surgery" name="name_surgery" /> 
</div>
<div className="col-md-6 aligninput">
    <span className="alphabet">l.</span>
    
    <label htmlFor="">ICD 10 PCS Code :</label>
    <input type="text" maxLength="10" className="form-control autosave" id="icd_pcs" name="icd_pcs" />
</div>
<div className="col-md-6 aligninput">
    <span className="alphabet">m.</span>
    
    <label htmlFor="">If other treatments provide details :</label>
    <input type="text" className="form-control autosave" id="other_treatment" name="other_treatment" />
</div>
<div className="col-md-6 aligninput">
    <span className="alphabet">n.</span>
    
    <label htmlFor="">How did injury occur :</label>
    <input type="text" className="form-control autosave" id="injury_occur" name="injury_occur" />
</div>


<div className="form-group">  
    <input type="hidden" name="post_id" id="post_id" />  
    <div id="autoSave"></div>  
    </div>  
  
</div>
    


<div className="right_section">

<h4 style={{textAlign : "center"}}>Pdf Preview</h4>
<iframe src="birla_pdf.php" width="100%" height="600" id="refreshpdf" title="pdf preview"/>
  
    
</div>

<div className="bottom_section">
    
    <button class = "btn btn-success"><Link href="home.php" className= "auto" style={{textDecoration:"none" , color : "white"}} target="_blank">Download pdf</Link></button>
</div>
</div>
</div>
</div>
</>
  );
}

export default Birla1;