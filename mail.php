<?php
include("header");
include("sidebar");
?>
 <main id="main" class="main">
    <h4>
        <b>Notifications</b>
    </h4>
 <div class="card"  style="height: 150px;">
 <div class="card-body">
    <p>
        <h6>Sender email</h6>
        <div class="col-md-14">
            <input type="email" class="form-control" id="email" name="email" >
          </div>
    </p>
</div>
</div>

<div class="card">
    <div class="card-body">

      <div class="accordion" id="accordion1" style="margin-top: 20px;">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Staffs notifications
            </button>
          </h2>

          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="card">
                    <div class="card-body" style="margin-top: 20px;">
                      <!-- List group With Checkboxes and radios -->
                      <ul class="list-group" style="border: none;">
                        <li class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                           Corporate Strategy Notification Mail
                        </li>
                        <li class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                          Pilot Notification Mail
                        </li>
                        <li class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                          Cabin-Crew Notification Mail
                        </li>
                        <li class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                          ICT Notification Mail
                        </li>
                        <li class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                          OCC Notification Mail
                        </li>
                      </ul><!-- End List Checkboxes and radios -->
        
                    </div>
                  </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Accordion Item #2
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Accordion Item #3
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
      </div>

    </main><!-- End #main -->
<?php
include("footer");
?>
<script src="assets\js\ac.js"></script>