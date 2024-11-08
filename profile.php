<?php
include "header";
include "sidebar";
?>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Profile</h1>
  </div>

  <section class="section profile row">
    <div id="profilePage">
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <div class="container mt-5">
                <p></p>
  <form class="row g-3" id="biodata" style="display:block; margin:10px;">
    <h4 style="margin-bottom: 20px">BioData</h4>
  
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="staffid" class="form-label">Staff ID</label>
        <input type="text" class="form-control" id="staffid" name="staffid">
      </div>
      <div class="col-md-6">
        <label for="btitle" class="form-label">Title</label>
        <select class="form-select" id="btitle" name="btitle">
          <option selected disabled value>Select</option>
          <option value="Capt.">Capt.</option>
          <option value="Mr">Mr</option>
          <option value="Mrs">Mrs</option>
          <option value="Miss">Miss</option>
        </select>
      </div>
    </div>
  
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="bsurname" class="form-label">Surname</label>
        <input type="text" class="form-control" id="bsurname" name="bsurname">
      </div>
      <div class="col-md-6">
        <label for="bfirstname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="bfirstname" name="bfirstname">
      </div>
    </div>
  
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="bmiddlename" class="form-label">Middle Name</label>
        <input type="text" class="form-control" id="bmiddlename" name="bmiddlename">
      </div>
      <div class="col-md-6">
        <label for="bmaidenname" class="form-label">Maiden Name</label>
        <input type="text" class="form-control" id="bmaidenname" name="bmaidenname">
      </div>
    </div>
  
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="breligion" class="form-label">Religion</label>
        <select class="form-select" id="breligion" name="breligion">
          <option selected disabled value>Select</option>
          <option value="Christian">Christian</option>
          <option value="Muslim">Muslim</option>
          <option value="Others">Others</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="bemailaddress" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="bemailaddress" name="bemailaddress">
      </div>
    </div>
  
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="bphonenumber" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="bphonenumber" name="bphonenumber">
      </div>
      <div class="col-md-6">
        <label for="bdob" class="form-label">Date Of Birth</label>
        <input type="date" class="form-control" id="bdob" name="bdob">
      </div>
    </div>
  
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="bgender" class="form-label">Gender</label>
        <select class="form-select" id="bgender" name="bgender">
          <option selected disabled value>Select</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="bmstatus" class="form-label">Marital Status</label>
        <select class="form-select" id="bmstatus" name="bmstatus">
          <option selected disabled value>Select</option>
          <option value="Single">Single</option>
          <option value="Married">Married</option>
          <option value="Divorced">Divorced</option>
          <option value="Separated">Separated</option>
          <option value="Widowed">Widowed</option>
        </select>
      </div>
    </div>
  
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="blanguage" class="form-label">Language</label>
        <input type="text" class="form-control" id="blanguage" name="blanguage">
      </div>
      <div class="col-md-6">
        <label for="bnationality" class="form-label">Nationality</label>
        <select class="form-select" id="bnationality" name="bnationality" onchange="return loadstate()">
        </select>
      </div>
    </div>
  
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="bstateoforigin" class="form-label">State of Origin</label>
        <select class="form-select" id="bstateoforigin" name="bstateoforigin" onchange="return loadlga()">
        </select>
      </div>
      <div class="col-md-6">
        <label for="blga" class="form-label">LGA</label>
        <select class="form-select" id="blga" name="blga">
          
        </select>
      </div>
    </div>
  
    <div class="row mb-3">
      <label for="braddress" class="col-md-6 col-form-label">Residential Address</label>
      <div class="col-md-12">
        <textarea class="form-control" style="height: 100px" id="braddress" name="braddress"></textarea>
      </div>
    </div>
  
    <div class="row mb-3">
     
      <div class="col-md-6">
        <label for="bcountryofres" class="form-label">Country of Residence</label>
        <select class="form-select" id="bcountryofres" name="bcountryofres" onchange="return loadstate()">
          
        </select>
      </div>
      <div class="col-md-6">
        <label for="bstateofres" class="form-label">State of Residence</label>
        <select class="form-select" id="bstateofres" name="bstateofres">
        </select>
      </div>
    </div>
  
    <div class="row mb-3">
      <div class="col-md-4">
        <label for="bgovname" class="form-label">Gov. Recognized ID</label>
        <select class="form-select" id="bgovname" name="bgovname">
          <option selected disabled value="">Select</option>
          <option value="nin">National Identity Card (NIN)</option>
          <option value="pvc">Permanent Voter's Card (PVC)</option>
          <option value="License">Driver's License</option>
          <option value="License">Driver's License</option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="bgovidno" class="form-label">ID Number</label>
        <input type="text" class="form-control" id="bgovidno" name="bgovidno">
      </div>
      <div class="col-md-4">
        <label for="uploadgovid" class="form-label">Upload ID</label>
        <input class="form-control" type="file" id="uploadgovid" name="uploadgovid">
      </div>
    </div>
  
    <div class="row mb-3" style="margin-top: 70px;">
      <div class="col-sm-12 d-flex justify-content-between">
        <button type="button" class="btn btn-primary" onclick="savechange()" 
            style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
            onmouseover="this.style.backgroundColor='#000000';"
            onmouseout="this.style.backgroundColor='#fc7f14';">
            SAVE CHANGE n
        </button>
        <button type="button" class="btn btn-primary" onclick="return createbiodata()" 
            style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
            onmouseover="this.style.backgroundColor='#000000';"
            onmouseout="this.style.backgroundColor='#fc7f14';">
            NEXT
        </button>
      </div>
    </div>
  </form>
  
  <!-- Family Data -->
<form id="familydata" style="display: none;">
  <h4 style="margin-bottom: 20px">Family Data</h4>
  <div class="row mb-3">
      <div class="col-md-6">
          <label for="fname" class="form-label">Name</label>
          <input type="text" class="form-control" id="fname" name="fname">
      </div>
      <div class="col-md-6">
          <label for="frelationship" class="form-label">Relationship</label>
          <select class="form-select" id="frelationship" name="frelationship">
              <option selected disabled value="">Select</option>
              <option value="Husband">Husband</option>
              <option value="Wife">Wife</option>
              <option value="Son">Son</option>
              <option value="Daughter">Daughter</option>
          </select>
      </div>
  </div>
  <div class="row mb-3">
      <div class="col-md-6">
          <label for="fdob" class="form-label">Date Of Birth</label>
          <input type="date" class="form-control" id="fdob" name="fdob">
      </div>
      <div class="col-md-6">
          <label for="foccupation" class="form-label">Occupation</label>
          <input type="text" class="form-control" id="foccupation" name="foccupation">
      </div>
  </div>
  <div class="row mb-3">
      <div class="col-md-12">
          <label for="fphonenumber" class="form-label">Phone Number</label>
          <input type="tel" class="form-control" id="fphonenumber" name="fphonenumber">
      </div>
  </div>
  <div class="row mb-3" style="margin-top: 70px;">
      <div class="col-sm-12 d-flex justify-content-between">
          <button type="button" class="btn btn-primary" onclick="savechange()" 
              style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
              onmouseover="this.style.backgroundColor='#000000';"
              onmouseout="this.style.backgroundColor='#fc7f14';">
              SAVE CHANGE
          </button>
          <button type="button" class="btn btn-primary" onclick="return createfamilydata ()" 
              style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
              onmouseover="this.style.backgroundColor='#000000';"
              onmouseout="this.style.backgroundColor='#fc7f14';">
              NEXT
          </button>
      </div>
  </div>
  <div id="familytable">
      <table></table>
  </div>
</form>

<!-- Next of Kin -->
<form id="nokdata" style="display: none;">
  <h4 style="margin-bottom: 20px">Next Of Kin</h4>
  <div class="row mb-3">
      <div class="col-md-6">
          <label for="nname" class="form-label">Name</label>
          <input type="text" class="form-control" id="nname" name="nname">
      </div>
      <div class="col-md-6">
          <label for="nrelationship" class="form-label">Relationship</label>
          <select class="form-select" id="nrelationship" name="nrelationship">
              <option selected disabled value="">Select</option>
              <option value="Husband">Husband</option>
              <option value="Wife">Wife</option>
              <option value="Son">Son</option>
              <option value="Daughter">Daughter</option>
          </select>
      </div>
  </div>
  <div class="row mb-3">
      <label for="nraddress" class="col-md-6 col-form-label">Residential Address</label>
      <div class="col-md-12">
          <textarea class="form-control" style="height: 100px" id="nraddress" name="nraddress"></textarea>
      </div>
  </div>
  <div class="row mb-3">
      <div class="col-md-12">
          <label for="nphonenumber" class="form-label">Phone Number</label>
          <input type="tel" class="form-control" id="nphonenumber" name="nphonenumber">
      </div>
  </div>
  <div class="row mb-3" style="margin-top: 70px;">
      <div class="col-sm-12 d-flex justify-content-between">
          <button type="button" class="btn btn-primary" onclick="savechange()" 
              style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
              onmouseover="this.style.backgroundColor='#000000';"
              onmouseout="this.style.backgroundColor='#fc7f14';">
              SAVE CHANGE
          </button>
          <button type="button" class="btn btn-primary" onclick="return createnok()" 
              style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
              onmouseover="this.style.backgroundColor='#000000';"
              onmouseout="this.style.backgroundColor='#fc7f14';">
              NEXT
          </button>
      </div>
  </div>
</form>

<!-- Beneficiary -->
<form id="beneficiarydata" style="display: none;">
  <h4 style="margin-bottom: 20px">Beneficiary</h4>
  <div class="row mb-3">
      <div class="col-md-6">
          <label for="benname" class="form-label">Name</label>
          <input type="text" class="form-control" id="benname" name="benname">
      </div>
      <div class="col-md-6">
          <label for="benrelationship" class="form-label">Relationship</label>
          <select class="form-select" id="benrelationship" name="benrelationship">
              <option selected disabled value="">Select</option>
              <option value="Husband">Husband</option>
              <option value="Wife">Wife</option>
              <option value="Son">Son</option>
              <option value="Daughter">Daughter</option>
          </select>
      </div>
  </div>
  <div class="row mb-3">
      <label for="benaddress" class="col-md-6 col-form-label">Residential Address</label>
      <div class="col-md-12">
          <textarea class="form-control" style="height: 100px" id="benaddress" name="benaddress"></textarea>
      </div>
  </div>
  <div class="row mb-3">
      <div class="col-md-12">
          <label for="benphonenumber" class="form-label">Phone Number</label>
          <input type="tel" class="form-control" id="benphonenumber" name="benphonenumber">
      </div>
  </div>
  <div class="row mb-3" style="margin-top: 70px;">
      <div class="col-sm-12 d-flex justify-content-between">
          <button type="button" class="btn btn-primary" onclick="savechange()" 
              style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
              onmouseover="this.style.backgroundColor='#000000';"
              onmouseout="this.style.backgroundColor='#fc7f14';">
              SAVE CHANGE
          </button>
          <button type="button" class="btn btn-primary" onclick="return createbeneficiary()" 
              style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
              onmouseover="this.style.backgroundColor='#000000';"
              onmouseout="this.style.backgroundColor='#fc7f14';">
              NEXT
          </button>
      </div>
  </div>
</form>

<!-- Pension Details -->
<form id="pensiondata" style="display: none;">
  <h4 style="margin-bottom: 20px">Pension Details</h4>
  <div class="row mb-3">
      <div class="col-md-12">
          <label for="porganisation" class="form-label">Organisation</label>
          <select class="form-select" id="porganisation" name="porganisation">
              <option selected disabled value="">Select</option>
              <option value="H">H</option>
          </select>
      </div>
  </div>
  <div class="row mb-3">
      <div class="col-md-12">
          <label for="pid" class="form-label">Pension ID</label>
          <input type="text" class="form-control" id="pid" name="pid">
      </div>
  </div>
  <h4>Tax Details</h4>
  <div class="row mb-3">
      <div class="col-md-12">
          <label for="tid" class="form-label">Tax ID</label>
          <input type="text" class="form-control" id="tid" name="tid">
      </div>
  </div>
  <div class="row mb-3" style="margin-top: 70px;">
      <div class="col-sm-12 d-flex justify-content-between">
          <button type="button" class="btn btn-primary" onclick="savechange()" 
              style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
              onmouseover="this.style.backgroundColor='#000000';"
              onmouseout="this.style.backgroundColor='#fc7f14';">
              SAVE CHANGE
          </button>
          <button type="button" class="btn btn-primary" onclick="return createpension()" 
              style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
              onmouseover="this.style.backgroundColor='#000000';"
              onmouseout="this.style.backgroundColor='#fc7f14';">
              NEXT
          </button>
      </div>
  </div>
</form>

<!-- employment data -->
 <form id="employmentdata" style="display: none;">
  <h4 style="margin-bottom: 20px">Employment Details</h4>
  <div class="row mb-3">
    <div class="col-md-12">
      <label for="emname" class="form-label">Name</label>
        <input type="text" class="form-control" id="emname" name="emname">
    </div>
  </div>

  <div class="row mb-3">
    <label for="emaddress" class="col-md-6 col-form-label">Address</label>
    <div class="col-md-12">
      <textarea class="form-control" style="height: 100px" id="emaddress" name="emaddress"></textarea>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-6">
      <label for="emfdate" class="form-label">From</label>
      <input type="date" class="form-control" id="emfdate" name="emfdate">
  </div>
  <div class="col-md-6">
    <label for="emtdate" class="form-label">To</label>
    <input type="date" class="form-control" id="emtdate" name="emtdate">
</div>
   </div>

   <div class="row mb-3">
    <div class="col-md-12">
    <label for="emdesignation" class="form-label">Designation</label>
      <select class="form-select" id="emdesignation" name="emdesignation">
        <option selected disabled value="">Select</option>
        <option value="A">A</option>
      </select>
    </div>
   </div>

   <div class="row mb-3" style="margin-top: 70px;">
    <div class="col-sm-12 d-flex justify-content-between">
        <button type="button" class="btn btn-primary" onclick="savechange()" 
            style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
            onmouseover="this.style.backgroundColor='#000000';"
            onmouseout="this.style.backgroundColor='#fc7f14';">
            SAVE CHANGE
        </button>
        <button type="button" class="btn btn-primary" onclick="return createmp()" 
            style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
            onmouseover="this.style.backgroundColor='#000000';"
            onmouseout="this.style.backgroundColor='#fc7f14';">
            NEXT
        </button>
    </div>
</div>
 </form>


<!---Educational Details-->
 <form id="educationdetail" style="display: none;">
  <h4 style="margin-bottom: 20px">Educational Information</h4>
  <div class="row mb-3">
    <div class="col-md-12">
      <label for="edtype" class="form-label">Education Type</label>
      <select class="form-select" id="edtype" name="edtype">
        <option selected disabled value="">Select</option>
        <option value="A">A</option>
      </select>
   </div>
  </div>

   <div class="row mb-3">
      <div class="col-md-12">
        <label for="edinstitution" class="form-label">Name of institution</label>
        <input type="text" class="form-control" id="edinstitution" name="edinstitution">
  </div>
</div>

  <div class="row mb-3">
    <div class="col-md-6">
      <label for="edfdate" class="form-label">From</label>
      <input type="date" class="form-control" id="edfdate" name="edfdate">
  </div>
  <div class="col-md-6">
    <label for="edtdate" class="form-label">To</label>
    <input type="date" class="form-control" id="edtdate" name="edtdate">
</div>
   </div>

   <div class="row mb-3">
    <div class="col-md-6">
    <label for="eddegree" class="form-label">Degree Type</label>
      <select class="form-select" id="eddegree" name="eddegree">
        <option selected disabled value="">Select</option>
        <option value="A">A</option>
      </select>
    </div>
    <div class="col-md-6">
      <label for="edgrade" class="form-label">Grade</label>
      <input type="text" class="form-control" id="edgrade" name="edgrade">
    </div>
   </div>

   <div class="row mb-3"  style="margin-top: 70px;">
    <div class="col-sm-12 d-flex justify-content-between">
        <button type="button" class="btn btn-primary" onclick="savechange()" 
            style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
            onmouseover="this.style.backgroundColor='#000000';"
            onmouseout="this.style.backgroundColor='#fc7f14';">
            SAVE CHANGE
        </button>
        <button type="button" class="btn btn-primary" onclick="return createducation()" 
            style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
            onmouseover="this.style.backgroundColor='#000000';"
            onmouseout="this.style.backgroundColor='#fc7f14';">
            NEXT
        </button>
    </div>
</div>
 </form>

 <!-- certificate -->
 <form id="certificatondetail" style="display: none;">
  <h4 style="margin-bottom: 20px;">Certification</h4>
  <div class="row mb-3">
    <div class="col-md-12">
      <label for="cerinstitution" class="form-label">Name of institution</label>
      <input type="text" class="form-control" id="cerinstitution" name="cerinstitution">
</div>
</div>

<div class="row mb-3">
  <div class="col-md-12">
    <label for="cercourse" class="form-label">Course</label>
    <input type="text" class="form-control" id="cercourse" name="cercourse">
</div>
</div>

<div class="row mb-3">
  <div class="col-md-6">
    <label for="cerdate" class="form-label">Date issued</label>
    <input type="date" class="form-control" id="cerdate" name="cerdate">
</div>
<div class="col-md-6">
  <label for="cerexpiry" class="form-label">Expiry Date (if applicable)</label>
  <input type="date" class="form-control" id="cerexpiry" name="cerexpiry">
</div>
 </div>

 <div class="row mb-3">
  <div class="col-md-12">
    <label for="cerupload" class="form-label">Upload Certificate</label>
    <input class="form-control" type="file" id="cerupload" name="cerupload">
  </div>
</div>

 <div class="row mb-3" style="margin-top: 70px;">
  <div class="col-sm-12 d-flex justify-content-between">
      <button type="button" class="btn btn-primary" onclick="savechange()" 
          style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
          onmouseover="this.style.backgroundColor='#000000';"
          onmouseout="this.style.backgroundColor='#fc7f14';">
          SAVE CHANGE
      </button>
      <button type="button" class="btn btn-primary" onclick="return createcertificate()" 
          style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
          onmouseover="this.style.backgroundColor='#000000';"
          onmouseout="this.style.backgroundColor='#fc7f14';">
          NEXT
      </button>
  </div>
</div>
 </form>

  <!-- Training -->
  <form id="trainingdetail" style="display: none;">
    <h4 style="margin-bottom: 20px;">Training</h4>
    <div class="row mb-3">
      <div class="col-md-12">
        <label for="traname" class="form-label">Name of institution</label>
        <input type="text" class="form-control" id="traname" name="traname">
  </div>
  </div>
  
  <div class="row mb-3">
    <div class="col-md-12">
      <label for="tracourse" class="form-label">Course</label>
      <input type="text" class="form-control" id="tracourse" name="tracourse">
  </div>
  </div>
  
  <div class="row mb-3">
    <div class="col-md-6">
      <label for="tradate" class="form-label">Date</label>
      <input type="date" class="form-control" id="tradate" name="tradate">
  </div>
    <div class="col-md-6">
      <label for="traupload" class="form-label">Upload Certificate</label>
      <input class="form-control" type="file" id="traupload" name="traupload">
    </div>
  </div>
  
   <div class="row mb-3" style="margin-top: 70px;">
    <div class="col-sm-12 d-flex justify-content-between">
        <button type="button" class="btn btn-primary" onclick="savechange()" 
            style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
            onmouseover="this.style.backgroundColor='#000000';"
            onmouseout="this.style.backgroundColor='#fc7f14';">
            SAVE CHANGE
        </button>
        <button type="button" class="btn btn-primary" onclick="return createtraining()" 
            style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
            onmouseover="this.style.backgroundColor='#000000';"
            onmouseout="this.style.backgroundColor='#fc7f14';">
            NEXT
        </button>
    </div>
</div>
   </form>

<!--crew-->
   <form id="crewdetail" style="display: none;">
    <h4 style="margin-bottom: 20px;">For Crew Only</h4>
    <div class="row mb-3">
      <div class="col-md-12">
        <label for="cactype" class="form-label">A/C Type</label>
        <select class="form-select" id="cactype" name="cactype">
          <option selected disabled value>Select</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-12">
        <label for="cposition" class="form-label">Position</label>
        <select class="form-select" id="cposition" name="cposition">
          <option selected disabled value>select</option>
          <option value="pic">PIC</option>
          <option value="fo">FO</option>
        </select>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-12">
        <label for="chrs" class="form-label">Hours as at Date</label>
        <input type="text" class="form-control" id="chrs" name="chrs">
    </div>
    </div>

    <div class="row mb-3" style="margin-top: 70px;">
      <div class="col-sm-12 d-flex justify-content-between">
          <button type="button" class="btn btn-primary" onclick="savechange()" 
              style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
              onmouseover="this.style.backgroundColor='#000000';"
              onmouseout="this.style.backgroundColor='#fc7f14';">
              SAVE CHANGE
          </button>
          <button type="submit" class="btn btn-primary" onclick="return create()" 
              style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px"
              onmouseover="this.style.backgroundColor='#000000';"
              onmouseout="this.style.backgroundColor='#fc7f14';">
              Submit
          </button>
      </div>
  </div>
  </form>

        </div>
      </div>
    </div>
  </div>
</div> <!-- End Card -->
    </div>
  </div> <!-- End row -->
  </section>
  </div> <!-- End pagetitle -->
  </main> <!-- End main -->
<?php
include "footer";
?>
