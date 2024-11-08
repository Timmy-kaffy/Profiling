<?php
include("header");
include("sidebar");
?>
<main id="main" class="main">

<section class="section">
  <div class="row">
  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Station Details</h5>

              <!-- General Form Elements -->
              <form>
                <div class="row mb-3">
                  <label for="stationname" class="col-sm-2 col-form-label">Station</label>
                  <div class="col-sm-10">
                    <input type="text" id="stationname" name="stationname" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="stationcode" class="col-sm-2 col-form-label">Station Code</label>
                  <div class="col-sm-10">
                    <input type="text" id="stationcode" name="stationcode"class="form-control">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="button" class="btn btn-primary" onclick="return createstation()"
                    style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px;display: block;margin: 0 auto; margin-top:20px"
                    onmouseover="this.style.backgroundColor='#000000';"
                    onmouseout="this.style.backgroundColor='#fc7f14';">ADD
                    </button>
                  </div>
                </div>

                <div class="col-lg-12" id="loadstation">
                  </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
  </div>
</section>

</main><!-- End #main -->
<?php
include("footer");
?>
<script src="assets\js\ac.js"></script>
