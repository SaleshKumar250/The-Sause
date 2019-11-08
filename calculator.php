<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Sause</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/css/main.css">

  <script src="asset/js/jquery.min.js"></script>
  <script src="asset/js/popper.min.js"></script>
</head>
<body>

  <div id="wrapper">
    <header class="main-header">
      <div class="header-bx bg-image d-flex flex-column justify-content-center" style="background-image: url(asset/img/banner.jpg);">
        <div class="container z-index1">
          <div class="row">
            <div class="col-md-8">
              <div class="banner-caption">
                <div class="banner-title">
                  <h1 class="m-0">The Sauce</h1>
                  <p>Hopitality requirement</p>
                </div>
                <h2>YOUR 'BAD EGG' COST REPORT</h2>
              </div><!-- banner-caption -->
            </div>
          </div><!-- row -->
        </div><!-- container -->
      </div><!-- header-bx -->
    </header><!-- main-header -->

    <main>
      <section class="common-sec main-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <section class="common-sec waste-anymore-sec calculate-image-dv bg-image d-flex flex-column justify-content-center" style="background-image: url(asset/img/Sauces-banner.jpg);">
                <div class="container z-index1">
                  <div class="banner-caption">
                    <h2>CALCULATE THE HIDDEN COSTS OF A BAD HIRE.</h2>
                  </div><!-- banner-caption -->
                </div><!-- container -->
              </section>
            </div><!-- col -->

            <div class="col-lg-6">
              <div class="entry-txt mb-5">
                <h3>HOW MUCH CAN ONE ‘BAD EGG’ COST YOUR BUSINESS? YOU’LL SEE THE REAL COST IS A TRUCKLOAD MORE THAN THE WAGES YOU’VE ALREADY FLUSHED DOWN THE LOO.</h3>
                <p>Enter the details of your last bad hire to reveal the hidden costs to your business.</p>

                <form id="calculate-form" action="" method="post">
                  <div class="calculate-form-dv form-bx">
                    <div class="form-group">
                      <h3 class="text-red text-uppercase">Salary of bad hire:</h3>
                      <input type="text" class="form-control" id="">
                    </div>

                    <div class="form-group">
                      <h3 class="text-red text-uppercase">Time bad hire was in role for...</h3>
                      <select class="form-control" name="" id="">
                        <option value="">Select</option>
                        <?php for($i=1; $i<=12; $i++){ ?>
                          <option value="<?php echo $i; ?> Month"><?php echo $i; ?> Month</option>
                        <?php } ?>
                      </select>
                    </div>

                    <div class="submit">
                      <button class="common-btn" type="submit">Calculate</button>
                    </div>
                  </div>
                </form><!-- calculate-form -->

              </div><!-- entry-txt -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- container -->
      </section><!-- common-sec -->
    </main>
    <footer class="main-footer">
      <div class="container"></div><!-- container -->
    </footer><!-- main-footer -->
  </div><!-- wrapper -->

  <!-- scripts -->
  <script src="asset/js/bootstrap.min.js"></script>
  <script src="asset/js/custom.js"></script>

</body>
</html>
