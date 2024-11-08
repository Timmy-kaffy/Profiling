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
              <h5 class="card-title">Aviation Charges</h5>

              <div class="row mb-3">
                  <label for="name" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" id="name" name="name"class="form-control">
                  </div>
                </div>


                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Aircraft Type</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>select</option>
                      <option value="1"></option>
                      <option value="2"></option>
                      <option value="3"></option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Station</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>select</option>
                      <option value="1">los</option>
                      <option value="2">abv</option>
                      <option value="3"></option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="amount" class="col-sm-2 col-form-label">Amount Typed</label>
                  <div class="col-sm-10">
                    <input type="int" id="amount" name="amount" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="value" class="col-sm-2 col-form-label">value</label>
                  <div class="col-sm-10">
                    <input type="text" id="value" name="value"class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" 
                    style="background-color: #fc7f14; border: #fc7f14; padding: 10px 30px;display: block;margin: 0 auto; margin-top:20px">ADD
                    </button>
                  </div>
                </div>

                <div class="col-lg-12" id="loadaviationcharges">
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

