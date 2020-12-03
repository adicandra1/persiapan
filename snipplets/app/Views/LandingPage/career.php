
<!doctype html>
<html lang="en">
  <head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="stylesheet" href="<?= base_url('assets/landing/' . 'css/custom-bs.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/landing/' . 'css/jquery.fancybox.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/landing/' . 'css/bootstrap-select.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/landing/' . 'fonts/icomoon/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/landing/' . 'fonts/line-icons/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/landing/' . 'css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/landing/' . 'css/animate.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/landing/' . 'css/quill.snow.css')?>">
    

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landing/' . 'css/style.css') ?>">
  </head>
<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=email],  input[type=password] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  font-size:16px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
  font-size:20px;
}
button:hover {
    opacity: 0.5;
}

.registration {
  text-align: center;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
  font-size:20px;
}


/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 200px;
  height:200px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal {
  display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 
  padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
</style>

  <body id="top">

  <!-- <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> -->
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"> 
          <img src="<?= base_url('assets/landing/' . 'images/azmi/logo_white.svg')  ?>" alt="logo" style="width: 170px; height: 60px;">
          </div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="<?= base_url('landingpage/' . 'index')?>">Home</a></li>
              <li><a href="<?= base_url('landingpage/' . 'about')?>">About</a></li>
              <li><a href="<?= base_url('landingpage/' . 'services')?>">Services</a></li>
              <li class="has-children">
                <a href="#">Pages</a>
                <ul class="dropdown">
                  <li><a href="<?= base_url('landingpage/' . 'gallery')?>">Gallery</a></li>
                  <li><a href="<?= base_url('landingpage/' . 'news')?>">News</a></li>
                </ul>
              </li>
              <li class="has-children">
                <a href="#" class="nav-link active">Jobs</a>
                <ul class="dropdown">
                  <li><a href="<?= base_url('landingpage/' . 'career')?>" class="nav-link active">Career</a></li>
                  <li><a href="<?= base_url('landingpage/' . 'login')?>">User Profile</a></li>
                </ul>
              </li>
              <li><a href="<?= base_url('landingpage/' . 'contact')?>">Contact</a></li>

              <li class="d-lg-none"><a href="<?= base_url('landingpage/' . 'login')?>">Log In</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
            <a href="<?= base_url('landingpage/' . 'login')?>" class="btn btn-warning border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
  <section class="section-hero home-section overlay inner-page bg-image" style="background-image: url('<?=base_url('assets/landing/' . 'images/azmi/person.jpeg') ?>');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, quas fugit ex!</p>
            </div>
            <form method="post" class="search-jobs-form">
              <div class="row mb-10">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <input type="text" class="form-control form-control-lg" placeholder="Job title, Company...">
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Region">
                    <option>Anywhere</option>
                    <option>San Francisco</option>
                    <option>Palo Alto</option>
                    <option>New York</option>
                    <option>Manhattan</option>
                    <option>Ontario</option>
                    <option>Toronto</option>
                    <option>Kansas</option>
                    <option>Mountain View</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type">
                    <option>Part Time</option>
                    <option>Full Time</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <a href="#next" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
      </a>
    </section>

    
    <section class="site-section" id="next">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">50 Job Listed</h2>
          </div>
        </div>
        
        <ul class="job-listings mb-5">
          <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">

            <a href="#" onclick="document.getElementById('modal-wrapper').style.display='block'"></a>


            <div class="job-listing-logo">
              <img src="images/job_logo_1.jpg" alt="Image" class="img-fluid">
            </div>

            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
              <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                <h2>Product Designer</h2>
                <strong>Adidas</strong>
              </div>
              <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                <span class="icon-room"></span> New York, New York
              </div>
              <div class="job-listing-meta">
                <span class="badge badge-danger">Part Time</span>
              </div>
            </div>
            
          </li>
          <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
            <a href="#" onclick="document.getElementById('modal-wrapper').style.display='block'"></a>
            
            <div class="job-listing-logo">
              <img src="images/job_logo_2.jpg" alt="Image" class="img-fluid">
            </div>

            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
              <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                <h2>Digital Marketing Director</h2>
                <strong>Sprint</strong>
              </div>
              <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                <span class="icon-room"></span> Overland Park, Kansas 
              </div>
              <div class="job-listing-meta">
                <span class="badge badge-success">Full Time</span>
              </div>
            </div>
          </li>
          
        </ul>

        <div class="row pagination-wrap">
          <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
            <span>Showing 1-7 Of 43 Jobs</span>
          </div>
          <div class="col-md-6 text-center text-md-right">
            <div class="custom-pagination ml-auto">
              <a href="#" class="prev">Prev</a>
              <div class="d-inline-block">
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              </div>
              <a href="#" class="next">Next</a>
            </div>
          </div>
        </div>
      </div>

      <div id="modal-wrapper" class="modal">
          
          <form class="modal-content animate" action="/action_page.php">    
            <div class="imgcontainer">
              <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
              <!-- <img src="1.png" alt="Avatar" class="avatar"> -->
              <h1 style="text-align:center">Login</h1>
            </div>

            <div class="container">
              <input type="email" placeholder="Enter Email" name="uname">
              <input type="password" placeholder="Enter Password" name="psw">        
              <button type="submit">Login</button>

              <div class="registration">
              <a href="registration" >Registration?</a>
              </div>
            </div>
          </form>
      </div>





       


          




    </section>

    <!-- ============================================================================================================================================ -->

    <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('<?= base_url('assets/landing/' . 'images/azmi/hanggar2.jpeg'); ?>">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 class="text-white">Looking For A Job?</h2>
            <p class="mb-0 text-white lead">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
          </div>
          <div class="col-md-3 ml-auto">
            <a href="login.html" class="btn btn-warning btn-block btn-lg">Sign Up</a>
          </div>
        </div>
      </div>
    </section>





    
    
    <footer class="site-footer">

      <a href="#top" class="smoothscroll scroll-top">
        <span class="icon-keyboard_arrow_up"></span>
      </a>

      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Search Trending</h3>
            <ul class="list-unstyled">
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Graphic Design</a></li>
              <li><a href="#">Web Developers</a></li>
              <li><a href="#">Python</a></li>
              <li><a href="#">HTML5</a></li>
              <li><a href="#">CSS3</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Company</h3>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Resources</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Support</h3>
            <ul class="list-unstyled">
              <li><a href="#">Support</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Contact Us</h3>
            <div class="footer-social">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
          </div>
        </div>
      </div>
    </footer>




  
  </div>

 



    <!-- SCRIPTS -->
    <script src="<?= base_url('assets/landing/' . 'js/jquery.min.js')?>"></script>
    <script src="<?= base_url('assets/landing/' . 'js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?= base_url('assets/landing/' . 'js/isotope.pkgd.min.js')?>"></script>
    <script src="<?= base_url('assets/landing/' . 'js/stickyfill.min.js')?>"></script>
    <script src="<?= base_url('assets/landing/' . 'js/jquery.fancybox.min.js')?>"></script>
    <script src="<?= base_url('assets/landing/' . 'js/jquery.easing.1.3.js')?>"></script>
    
    <script src="<?= base_url('assets/landing/' . 'js/jquery.waypoints.min.js')?>"></script>
    <script src="<?= base_url('assets/landing/' . 'js/jquery.animateNumber.min.js')?>"></script>
    <script src="<?= base_url('assets/landing/' . 'js/owl.carousel.min.js')?>"></script>
    <script src="<?= base_url('assets/landing/' . 'js/quill.min.js')?>"></script>
    
    
    <script src="<?= base_url('assets/landing/' . 'js/bootstrap-select.min.js')?>"></script>
    
    <script src="<?= base_url('assets/landing/' . 'js/custom.js')?>"></script>


  <script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


</script>
   
   
     
  </body>
</html>