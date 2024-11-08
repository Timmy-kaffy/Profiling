<?php
include("header");
?>
<main id="main" class="main full-width-page" style=" margin-left: 0; width: 100%; margin-top: 120px;">
   <div style="width: 100%; height: 600px;">

    <div id ="left" style = "height: 100px; width: 40%; float: left;">
        <img src="https://st.depositphotos.com/44867792/60624/i/450/depositphotos_606241264-stock-photo-abstract-color-splash-background-modern.jpg"
        style= "height: 300px; width: 100%; border-radius: 5px; ">
    </div>

    <div id ="right" style="float: right; width: 55%;">
      <div style="height: 50px; text-align: center;">
        <h5>COs Am HAppY</h5>
        <p> &#128513; &#128513; &#128513;</p>
      </div>
      <br>
      <div class="card" id="rightcard" style="height: 200px;">
        <div class="card-body">
          <select class="form-select" aria-label="Default select example" id="" name="" style="margin-top: 40px;">
            <option value="Select">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
          <button type="button" class="btn btn-primary" onclick="return create()"
          style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px; display: block; margin: 0 auto; margin-top:20px; width:  100%;"
          onmouseover="this.style.backgroundColor='#000000';"
          onmouseout="this.style.backgroundColor='#fc7f14';">NEXT
        </button>
       <h6> flyaero.com</h6>
              </div>
            </div>
            <h6 style="text-align: center;">OR</h6>

            <button type="button" class="btn btn-primary" onclick="return cre()" 
              style="background-color: #ffffff; border: 1px solid #df9c61; padding: 10px 30px; display: block; margin: 0 auto; margin-top:20px; width:  100%; height: 50px;">
            </button>
        <h6 style="text-align: center; margin-top: 10px; font-size: 12px; line-height: 1.5;">
          Register as a Jumia Global seller and sell your products across Africa.<br>
           Know more about Jumia Global at - https://www.jumia-global.com/
        </h6>

      <h5 style="text-align: center; font-weight: bold; margin-top: 10px;">
        Already have an account? <span id="signup" style=" font-weight: 100; font-size: large; color: #fc7f14;">Sign Up</span>
      </div>

   </div>  
</main>
<?php
include ("footer");
?>
