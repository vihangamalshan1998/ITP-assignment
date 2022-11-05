<?php

include 'config.php';

if (isset($_POST['btnlogin'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = mysqli_query($conn,"SELECT * FROM user
    WHERE Email='$email' AND Password='$password'");
    
    if(mysqli_num_rows($sql)>0){
        
        $sqluser = mysqli_query($conn,"SELECT * FROM user WHERE Email='$email' AND Password='$password'");
        $userrecord = mysqli_fetch_array($sqluser);
        $uid = $userrecord['user_id'];

        $_SESSION['mysess']=mt_rand();
        $_SESSION['uid']=$uid;
        header('Location:udashboard.php?uid='.$_SESSION['uid']);
        } else {
            echo"<script>alert('Invalid Email or Password');</script>";
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
<body>
  <!--HEADER-->
  <?php include 'header.php'; ?>
  <!--HEADER-->
  <style>
    .hero-wrap {

  width: 100%;
  height: 850px;
  position: inherit;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: top center; }
  .hero-wrap .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    opacity: .4;
    background: #000000;
    height: 850px; }
  @media (max-width: 991.98px) {
    .hero-wrap {
      height: 1150px; }
      .hero-wrap .overlay {
        height: 1150px; } }
  .hero-wrap.hero-wrap-2 {
    height: 700px !important;
    position: relative; }
    .hero-wrap.hero-wrap-2 .overlay {
      width: 100%;
      opacity: .05;
      height: 700px; }
    .hero-wrap.hero-wrap-2 .slider-text {
      height: 700px !important; }

  </style>
  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg'); " data-stellar-background-ratio="0.5">
      <div class="svg-preloader position-relative bg-white overflow-hidden "></div>
      <div class="container position-relative z-index-2 space-top-2 space-bottom-3 space-top-md-4">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-md-7 ftco-animate d-flex align-items-end">
          <div class="mb-6">
              <h1 class="text-white font-weight-semi-bold mb-3">
                Now <br>
                it's
                <span class="text-indigo">
                  <strong class="u-text-animation u-text-animation--typing" style="color:#66a3ff; font-size:38px; "></strong>
                </span>
                <br>
                for you rent a car.
              </h1>
              <p style="color:#FFFFFF; font-size:20px; ">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts.</p>
            </div>
          </div>
          
          
          <div class="col-md-5 ftco-animate  text-center" style="background-color: #FFFFFF; border-radius: 5px; font-weight: bold; opacity: 0.9;">
          <div class="container"> 
          <form action="" method="post">

                  <h2>Make Your Trip</h2>

                  <div class=" form-group">
                  <label for="">PICK-UP LOCATION</label>
                  <input type="text" class="form-control" id="#" placeholder="City, Airport, Station, etc">
                  </div>
                  <div class="form-group">
                  <label for="">DESTINATION</label>
                  <input type="text" class="form-control" id="#" placeholder="City, Airport, Station, etc">
                  </div>

                  <div class="form-row">
                  <div class="form-group col-md-6">
                  <label for="">PICK-UP DATE</label>
                  <input type="date" class="form-control" id="#" placeholder="Date">
                  </div>
                  <div class="form-group col-md-6">
                  <label for="">PICK-UP TIME</label>
                  <input type="time" class="form-control" id="#" placeholder="Date">
                  </div>
                  </div>

                  <div class="form-row">
                      
                      <div class="form-group col-md-12">
                      <label for="">Rental Period</label>
                      <select class="form-control" name="NoDays" id="#">
                        <option value="1">1 Day</option>
                        <option value="2">2 Days</option>
                        <option value="3">3 Days</option>
                        <option value="4">4 Days</option>
                      </select>
                      </div>
                      </div>
                      <div class="form-row " >
                        <div class="form-group col-md-12">
                          <button class="btn btn-outline-primary fill-form form-control">Make a Reservation</button>
                      </div>
                    </div>

                </form>
                </div> 
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt mt-6">
    	<div class="container" style="font-weight: bold;;">
	    	<div class="row">
					<div class="col-md-12">
						<div class="search-wrap-1 ftco-animate mb-5">
							<form action="#" class="search-property-1">
		        		<div class="row">
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Select Model</label>
		        					<div class="form-field">
		          					<div class="select-wrap">
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="" id="" class="form-control">
		                      	<option value="">Select Model</option>
		                        <option value="">Model 1</option>
		                        <option value="">Model 2</option>
		                        <option value="">Model 3</option>
		                        <option value="">Model 4</option>
		                        <option value="">Model 5</option>
		                        <option value="">Model 6</option>
		                        <option value="">Model 7</option>
		                        <option value="">Model 8</option>
		                        <option value="">Model 9</option>
		                        <option value="">Model 10</option>
		                      </select>
		                    </div>
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Select Brand</label>
		        					<div class="form-field">
		          					<div class="select-wrap">
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="" id="" class="form-control">
		                      	<option value="">Select Brand</option>
		                        <option value="">Brand 1</option>
		                        <option value="">Brand 2</option>
		                        <option value="">Brand 3</option>
		                        <option value="">Brand 4</option>
		                        <option value="">Brand 5</option>
		                        <option value="">Brand 6</option>
		                        <option value="">Brand 7</option>
		                        <option value="">Brand 8</option>
		                        <option value="">Brand 9</option>
		                        <option value="">Brand 10</option>
		                      </select>
		                    </div>
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Year Model</label>
		        					<div class="form-field">
		          					<div class="select-wrap">
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="" id="" class="form-control">
		                      	<option value="">Year Model</option>
		                        <option value="">2019</option>
		                        <option value="">2018</option>
		                        <option value="">2017</option>
		                        <option value="">2016</option>
		                        <option value="">2015</option>
		                        <option value="">2014</option>
		                      </select>
		                    </div>
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Price Limit</label>
		        					<div class="form-field">
		          					<div class="select-wrap">
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="" id="" class="form-control">
		                      	<option value="">Rs.1000.00</option>
		                        <option value="">Rs.2000.00</option>
		                        <option value="">Rs.3000.00</option>
		                        <option value="">Rs.4000.00</option>
		                        <option value="">Rs.5000.00</option>
		                       
		                      </select>
		                    </div>
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-self-end">
		        				<div class="form-group">
		        					<div class="form-field">
				                <input type="submit" value="Search" class="form-control btn btn-primary">
				              </div>
			              </div>
		        			</div>
		        		</div>
		        	</form>
		        </div>
					</div>
	    	</div>
	    </div>
    </section>

    <section class="ftco-section services-section ftco-no-pt ftco-no-pb">
      <div class="container">
      	<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Our Services</span>
            <h2 class="mb-2" style="font-weight: bold;">Our Services</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-customer-support"></span></div>
                  <img src="images/images/download.png" alt="" style="height: 70px; width: 100px;">
	                <h3 class="heading mb-0 pl-3 mt-1">24/7 Car Support</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-route"></span></div>
                  <img src="images/images/download1.jpg" alt="" style="height: 70px; width: 70px;">
	                <h3 class="heading mb-0 pl-3 mt-1">Lots of location</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-online-booking"></span></div>
                  <img src="images/images/download (2).png" alt="" style="height: 90px; width: 90px;">
	                <h3 class="heading mb-0 pl-3 mt-2">Reservation</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-rent"></span></div>
                  <img src="images/images/download (3).png" alt="" style="height: 80px; width: 100px;">
	                <h3 class="heading mb-0 pl-3 mt-2">Rental Cars</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    <div class="container-fluid px-4">
      <div class="row justify-content-center">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          <span class="subheading">What we offer</span>
          <h2 class="mb-2" style="font-weight: bold;">Choose Your Car</h2>
        </div>
      </div>

     
         </div>

         <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="car-wrap ftco-animate">
                <div class="img d-flex align-items-end" style="background-image: url(images/images/car-1.jpg);">
                  <div class="price-wrap d-flex">
                    <span class="rate">Rs.1000.00</span>
                    <p class="from-day">
                      <span>From</span>
                      <span>/Day</span>
                    </p>
                  </div>
                </div>
                <div class="text p-4 text-center">
                  <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                  <span>Audi</span>
                  <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="car-wrap ftco-animate">
                <div class="img d-flex align-items-end" style="background-image: url(images/images/car-2.jpg;">
                  <div class="price-wrap d-flex">
                    <span class="rate">Rs.2000.00</span>
                    <p class="from-day">
                      <span>From</span>
                      <span>/Day</span>
                    </p>
                  </div>
                </div>
                <div class="text p-4 text-center">
                  <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                  <span>Ford</span>
                  <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="car-wrap ftco-animate">
                <div class="img d-flex align-items-end" style="background-image: url(images/images/car-3.jpg);">
                  <div class="price-wrap d-flex">
                    <span class="rate">Rs.1000.00</span>
                    <p class="from-day">
                      <span>From</span>
                      <span>/Day</span>
                    </p>
                  </div>
                </div>
                <div class="text p-4 text-center">
                  <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                  <span>Cheverolet</span>
                  <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="car-wrap ftco-animate">
                <div class="img d-flex align-items-end" style="background-image: url(images/images/car-4.jpg); ">
                  <div class="price-wrap d-flex">
                    <span class="rate">Rs.1000.00</span>
                    <p class="from-day">
                      <span>From</span>
                      <span>/Day</span>
                    </p>
                  </div>
                </div>
                <div class="text p-4 text-center">
                  <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                  <span>Mercedes</span>
                  <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
                </div>
              </div>
            </div>
  
            <div class="col-md-3">
              <div class="car-wrap ftco-animate">
                <div class="img d-flex align-items-end" style="background-image: url(images/images/car-5.jpg);">
                  <div class="price-wrap d-flex">
                    <span class="rate">Rs.1000.00</span>
                    <p class="from-day">
                      <span>From</span>
                      <span>/Day</span>
                    </p>
                  </div>
                </div>
                <div class="text p-4 text-center">
                  <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                  <span>Audi</span>
                  <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="car-wrap ftco-animate">
                <div class="img d-flex align-items-end" style="background-image: url(images/images/car-6.jpg);">
                  <div class="price-wrap d-flex">
                    <span class="rate">Rs.1000.00</span>
                    <p class="from-day">
                      <span>From</span>
                      <span>/Day</span>
                    </p>
                  </div>
                </div>
                <div class="text p-4 text-center">
                  <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                  <span>Ford</span>
                  <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="car-wrap ftco-animate">
                <div class="img d-flex align-items-end" style="background-image: url(images/images/car-7.jpg);">
                  <div class="price-wrap d-flex">
                    <span class="rate">Rs.1000.00</span>
                    <p class="from-day">
                      <span>From</span>
                      <span>/Day</span>
                    </p>
                  </div>
                </div>
                <div class="text p-4 text-center">
                  <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                  <span>Cheverolet</span>
                  <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="car-wrap ftco-animate">
                <div class="img d-flex align-items-end" style="background-image: url(images/images/car-8.jpg);">
                  <div class="price-wrap d-flex">
                    <span class="rate">Rs.1000.00</span>
                    <p class="from-day">
                      <span>From</span>
                      <span>/Day</span>
                    </p>
                  </div>
                </div>
                <div class="text p-4 text-center">
                  <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                  <span>Mercedes</span>
                  <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
</main>

<!-- ========== FOOTER ========== -->
  <?php include 'footer.php'; ?>
<!-- ========== END FOOTER ========== -->

<!-- ========== SECONDARY CONTENTS ========== -->
  <?php include 'account-sidebar.php'; ?>
<!-- ========== END SECONDARY CONTENTS ========== -->



  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

<?php include 'script_js.php';?>
</body>
</html>