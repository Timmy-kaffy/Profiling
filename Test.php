<?php
include("header");
include("sidebar");
?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
    <!-- End Page Title -->
<div class="pt-3">
                    <div class="row mb-3">
                      <class="col-md-6">
                      <input class="form-check-input" type="radio" name="role" id="pilot" value="pilot" onclick="toggleDisplay('pilot')" >
                      <label class="form-check-label" for="pilot">
                        Pilot
                      </label>
                    </div>
                    <class="col-md-6">
                      <input class="form-check-input" type="radio" name="role" id="cabincrew" value="cabincrew" onclick="toggleDisplay('cabincrew')">
                      <label class="form-check-label" for="cabincrew">
                        Cabin Crew
                      </label>
                    </div>
                    </div>
                    
                  </div></div>
    <section class="section profile row">
    
        <div id="profilePage" style="display: none;">
          <div class="row">
            <div class=" col-xl-3">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <h5>Kevin Anderson</h5>
                        <h6>Web Designer</h6>
                        <!-- <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-9">

                <div class="card">
                    <div class="card-body ">
                        <div class="container mt-5">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#content1" role="tab" style="color:#000;">BioData</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#content2" role="tab" style="color:#000;">Next of Kin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab3" data-toggle="tab" href="#content3" role="tab" style="color:#000;">Employement</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab3" data-toggle="tab" href="#content4" role="tab" style="color:#000;">Professional Information</a>
                                </li>
                            </ul>

                            <!-- Tab panes --> 
                            <div class="tab-content">
                           
                                <div class="tab-pane fade show active" id="content1" role="tabpanel" >
                                    <form class="row g-3" id="profileForm" style="display: none;">
                                        <p></p>
                                        <div class="row mb-3">
                                        <div class="col-md-6">
                                          <label for="staffid" class="form-label">Staff Id</label>
                                          <input type="text" class="form-control" id="staffid" name="staffid">
                                        </div>
                    
                                        <div class="col-md-6">
                                          <label for="tittle" class="form-label">Tittle</label>
                                          <select class="form-select" aria-label="Default select example" id="tittle" name="tittle">
                                            <option></option>
                                            <option>Mr</option>
                                            <option>Mrs</option>
                                            <option>Miss</option>
                                          </select>
                                        </div></div>
                                        <p></p>
                                        <div class="row mb-3">
                                        <div class="col-md-6">
                                          <label for="sname" class="form-label">Surname</label>
                                          <input type="text" class="form-control" id="sname" name="sname">
                                        </div>
                                        <div class="col-md-6">
                                          <label for="fname" class="form-label">First Name</label>
                                          <input type="text" class="form-control" id="fname" name="fname">
                                        </div>
                                        </div>
                                        <div class="row mb-3">
                                        <div class="col-md-6">
                                          <label for="mname" class="form-label">Middle Name</label>
                                          <div class="input-group">
                                            <input type="text" class="form-control" id="mname" name="mname">
                                          </div>
                                        </div>
                    
                                        <div class="col-md-6">
                                          <label for="gender" class="form-label">Gender</label>
                                          <select class="form-select" aria-label="Default select example" id="gender" name="gender">
                                            <option value="Select">Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                          </select>
                                        </div>
                    </div>
                    <div class="row mb-3">
                                        <div class="col-md-6">
                                          <label for="dob" class="form-label">D.O.B</label>
                                          <input type="date" class="form-control" id="dob" name="dob">
                                        </div>
                    
                                        <div class="col-md-6">
                                          <label for="marital" class="form-label">Marital Status</label>
                                          <select class="form-select" aria-label="Default select example" id="marital" name="marital">
                                            <option value="Select">Select</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Widow">Widow</option>
                                            <option value="Widower">Widower</option>
                                          </select>
                                        </div>
                    </div>
                    <div class="row mb-3">
                                        <div class="col-md-6">
                                          <label for="phone" class="form-label">Phone Number</label>
                                          <input type="tel" class="form-control" id="phone" name="phone" >
                                        </div>
                                        <div class="col-md-6">
                                          <label for="email" class="form-label">Email</label>
                                          <input type="email" class="form-control" id="email" name="email" >
                                        </div>
                    </div>
                                        <div class="row mb-3">
                                          <label for="addr" class="col-sm-2 col-form-label">Address</label>
                                          <div class="col-sm-12">
                                            <textarea class="form-control" style="height: 100px" id="addr" name="addr"></textarea>
                                          </div>
                                        </div>
                    
                                        <div class="col-12">
                                          <label for="lang" class="form-label">Language Spoken</label>
                                          <input type="text" class="form-control" name="lang" id="lang" placeholder="English Language">
                                        </div>
                                        <div class="row mb-3">
                                        <div class="col-md-6">
                                          <label for="nationality" class="form-label">Nationality</label>
                                          <select class="form-select" aria-label="Default select example" id="nationality"
                                            name="nationality">
                                            <option value="">Select</option>
                                          </select>
                                        </div>
                    
                                        <div class="col-md-6">
                                          <label for="state" class="form-label">State</label>
                                          <select class="form-select" aria-label="Default select example" id="state" name="state">
                                            <option value="Select">Select</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                          </select>
                                        </div>
                    </div>
                                        <div class="row mb-3">
                                          <div class="col-sm-10">
                                            <button type="button" class="btn btn-primary" onclick="return createprofile()"
                                              style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px; display: block; margin: 0 auto; margin-top:20px"
                                              onmouseover="this.style.backgroundColor='#000000';"
                                              onmouseout="this.style.backgroundColor='#fc7f14';">NEXT
                                            </button>
                                            <!-- <div class="col-lg-12" id="loadprofile"></div> -->
                                          </div>
                                        </div>
                                      </form>
                                </div>
                                <div class="tab-pane fade" id="content2" role="tabpanel">
                                    <form id="nokForm" style="display: none;">
                                        <div class="row mb-3">
                                          <div class="col-md-6">
                                            <label for="noksname" class="form-label">Surname</label>
                                            <input type="text" class="form-control" id="noksname" name="noksname" required>
                                          </div>
                                          <div class="col-md-6">
                                            <label for="nokfname" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="nokfname" name="nokfname">
                                          </div>
                      
                                          <div class="col-md-6">
                                            <label for="nokgender" class="form-label">Gender</label>
                                            <select class="form-select" aria-label="Default select example" id="nokgender" name="nokgender">
                                              <option value="Select">Select</option>
                                              <option value="Male">Male</option>
                                              <option value="Female">Female</option>
                                            </select>
                                          </div>
                      
                                          <div class="col-md-6">
                                            <label for="noktext" class="form-label">Relationship</label>
                                            <input type="text" class="form-control" id="noktext" name="noktext">
                                          </div>
                      
                                          <div class="col-md-6">
                                            <label for="nokphone" class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" id="nokphone" name="nokphone">
                                          </div>
                      
                                          <div class="col-md-6">
                                            <label for="nokemail" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="nokemail" name="nokemail">
                                          </div>
                      
                                          <div class="row mb-3">
                                            <label for="nokaddr" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-12">
                                              <textarea class="form-control" style="height: 100px" id="nokaddr" name="nokaddr"></textarea>
                                            </div>
                                          </div>
                      
                                          <div class="col-md-12">
                                            <label for="nokrelationship" class="form-label">Relationship</label>
                                            <input type="text" class="form-control" id="nokrelationship" name="nokrelationship">
                                          </div>
                      
                                          <div class="col-md-6">
                                            <label for="noknationality" class="form-label">Nationality</label>
                                            <select class="form-select" aria-label="Default select example" id="noknationality"
                                              name="noknationality">
                                              <option value="Select">Select</option>
                                              <option value="A">A</option>
                                            </select>
                                          </div>
                      
                                          <div class="col-md-6">
                                            <label for="nokstate" class="form-label">State</label>
                                            <select class="form-select" aria-label="Default select example" id="nokstate" name="nokstate">
                                              <option value="">Select</option>
                                              <option value="B">B</option>
                                            </select>
                                          </div>
                      
                                          <div class="row mb-3">
                                            <div class="col-sm-10">
                                              <button type="button" class="btn btn-primary" onclick="return createnok()"
                                                style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px; display: block; margin: 0 auto; margin-top:20px"
                                                onmouseover="this.style.backgroundColor='#000000';"
                                                onmouseout="this.style.backgroundColor='#fc7f14';">NEXT
                                              </button>
                                            </div>
                                          </div>
                      
                                        </div>
                                      </form>
                                </div>
                                <div class="tab-pane fade" id="content3" role="tabpanel">
                                  <form id="employmentForm" style="display: none;">
                                  
                                    <div class="row mb-3"  id="callsign" style="display: none;">
                                      <label for="callsign" class="col-md-4 col-lg-3 col-form-label">Call Sign</label>
                                      <div >
                                        <input name="callsign" type="text" class="form-control" >
                                      </div>
                                    </div>
                  
                                    <div class="row mb-3" id="rank" style="display: none;">
                                      <label class="col-md-4 col-lg-3 col-form-label">Rank</label>
                                      <div >
                                        <select class="form-select" aria-label="Default select example"  name="rank">
                                          <option>select</option>
                                          <option value="1">Captain</option>
                                          <option value="2">First Officer</option>
                  
                                        </select>
                                      </div>
                                    </div>
                  
                                    <div class="row mb-3" id="base" style="display: none;">
                                      <label class="col-md-4 col-lg-3 col-form-label">Base</label>
                                      <div >
                                        <select class="form-select" aria-label="Default select example">
                                          <option selected>select</option>
                                          <option value="1">A</option>
                                          <option value="2">B</option>
                                          <option value="3">C</option>
                                        </select>
                                      </div>
                                    </div>
                  
                                    <div class="row mb-3" id="staffid2" style="display: none;">
  <label for="staffid" class="col-md-4 col-lg-3 col-form-label">Staff I.D</label>
  <div  >
    <input name="staffid" type="text" class="form-control">
  </div>
</div>

                  
                                    <div class="row mb-3" id="employmentdate" style="display: none;">
                                      <label for="employmentdate" id="date" class="col-md-4 col-lg-3 col-form-label">Employement Date</label>
                                      <div >
                                        <input type="date" class="form-control" name="employmentdate">
                                      </div>
                                    </div>
                                    <br>
                                    <h4><b>Experience</b></h4>
                                    <div  id="exac" style="display: none;">
                                      <label class="col-md-4 col-lg-3 col-form-label">A/C type</label>
                                      <div >
                                        <select class="form-select" aria-label="Default select example"  name="exac">
                                          <option selected>select</option>
                                          <option value="1">A</option>
                                          <option value="2">B</option>
                                          <option value="3">C</option>
                                        </select>
                                      </div>
                                    </div>
                  
                                    <div class="row mb-3" id="position" style="display: none;">
                                      <label class="col-md-4 col-lg-3 col-form-label">Position</label>
                                      <div >
                                        <select class="form-select" aria-label="Default select example" name="position">
                                          <option selected>select</option>
                                          <option value="1">A</option>
                                          <option value="2">B</option>
                                          <option value="3">C</option>
                                        </select>
                                      </div>
                                    </div>
                  
                                    <div class="row mb-3" id="hrsflown" style="display: none;">
                                      <label for="hrsflown" class="col-md-4 col-lg-3 col-form-label">Hours Flown</label>
                                      <div >
                                        <select class="form-select" aria-label="Default select example" name="hrsflown">
                                          <option selected>select</option>
                                          <option value="1">A</option>
                                          <option value="2">B</option>
                                          <option value="3">C</option>
                                        </select>
                                      </div>
                                    </div>
                  
                                    <div class="row mb-3">
                                      <div class="col-sm-10">
                                        <button type="button" class="btn btn-primary" onclick="return employment()"
                                          style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px; display: block; margin: 0 auto; margin-top:20px"
                                          onmouseover="this.style.backgroundColor='#000000';"
                                          onmouseout="this.style.backgroundColor='#fc7f14';">NEXT
                                        </button>
                                      </div>
                                    </div>
                                  </form><!-- End employement Form -->
                                </div>
                                <div class="tab-pane fade" id="content4" role="tabpanel">
                                  <form id="professionalForm" style="display: none;">
                                    <div class="row mb-3">
                                      
                                      <div class="col-md-6">
                                        <label for="crewlicensetype" class="form-label">License Type</label>
                                        <input type="text" class="form-control" id="crewlicensetype" name="crewlicensetype">
                                      </div>
                  
                                      <div class="col-md-6">
                                        <label for="crewlicensenumber" class="form-label">License Number</label>
                                        <input type="text" class="form-control" id="crewlicensenumber" name="crewlicensenumber">
                                      </div>
                  
                  
                                      <div class="row mb-3">
                                        <div class="col-md-6">
                                          <label for="issuedate" class="form-label">Date of Issue</label>
                                          <input type="date" class="form-control" id="issuedate" name="issuedate">
                                        </div>
                                        </div> 
                  
                                        <div class="col-md-6">
                                          <label for="expirydate" class="form-label">Expiry Date</label>
                                          <input type="date" class="form-control" id="expirydate" name="expirydate">
                                        </div>
                                     
                  
                                      <div class="row mb-3">
                                        <label for="fileupload" class="col-md-4 col-lg-3 col-form-label">File Upload</label>
                                        <div class="col-md-8 col-lg-9">
                                          <input class="form-control" type="file" id="fileupload" name="fileupload">
                                        </div>
                                      </div>
                  
                                      <div class="row mb-3">
                                        <div class="col-sm-10">
                                          <button type="button" class="btn btn-primary" onclick="return professional()"
                                            style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px; display: block; margin: 0 auto; margin-top:20px"
                                            onmouseover="this.style.backgroundColor='#000000';"
                                            onmouseout="this.style.backgroundColor='#fc7f14';">NEXT
                                          </button>
                                        </div>
                                      </div>
                                      
                                        </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
</main>
<?php
 include ("footer");
?>
<script>

function toggleDisplay(selectedOption) {
  // Get the form elements by their IDs
  const callsign = document.getElementById('callsign');
  const rank = document.getElementById('rank');
  const base = document.getElementById('base');
  const staffid = document.getElementById('staffid2');
  const employmentdate = document.getElementById('employmentdate');
  const exac = document.getElementById('exac');
  const position = document.getElementById('position');
  const hrsflown = document.getElementById('hrsflown');
  const biodataForm = document.getElementById('profileForm');
  const nokForm = document.getElementById('nokForm');
  const employmentForm = document.getElementById('employmentForm');
  const professionalForm = document.getElementById('professionalForm');
  const profilePage = document.getElementById('profilePage');

  

  // For both options, these fields should always be displayed
  callsign.style.display = 'block';
  base.style.display = 'block';
  staffid.style.display = 'block';
  employmentdate.style.display = 'block';
  exac.style.display = 'block';
  hrsflown.style.display = 'block';
  biodataForm.style.display = 'block';
  employmentForm.style.display = 'block';
  professionalForm.style.display = 'block';
  nokForm.style.display = 'block';
  profilePage.style.display = 'block'

  // Toggle specific fields based on the selected option
  if (selectedOption === 'pilot') {
    rank.style.display = 'block';
    position.style.display = 'block';
  } else if (selectedOption === 'cabincrew') {
    rank.style.display = 'none';
    position.style.display = 'none';
  }
}
</script>




