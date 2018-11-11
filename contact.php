<?php
  include 'header.php'
?>

<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Contact Us</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Contact Us</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

      <?php $message=$_GET['message'];?>
<!--Contact-us-->
<section class="contact_us section-padding">
  <div class="container">
    <div  class="row">
      <div class="col-md-6">
        <h3>Get in touch using the form below</h3>
        <h4><?php
          echo $message;?></h4>
        <div class="contact_form gray-bg">
          <form action="mailer/index.php" method="post">
            <div class="form-group">
              <label class="control-label">Full Name <span>*</span></label>
              <input type="text" class="form-control white_bg" name="name" id="fullname">
            </div>
            <div class="form-group">
              <label class="control-label">Email Address <span>*</span></label>
              <input type="email" class="form-control white_bg" name="email" id="emailaddress">
            </div>
            <div class="form-group">
              <label class="control-label">Phone Number <span>*</span></label>
              <input type="text" class="form-control white_bg" name="phone_no" id="phonenumber">
            </div>
            <div class="form-group">
              <label class="control-label">Reason To Contact<span>*</span></label>
              <textarea class="form-control white_bg" name="message" rows="4"></textarea>
            </div>
            <div class="form-group">
              <button class="btn" type="submit">Send Message <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <h3>Contact Info</h3>
        <div class="contact_detail">
          <ul>
            <li>
              <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="contact_info_m"><strong>Al ruwi Al Tasneem LLc </strong>,<br>Building Bait Al Falaj Street Ruwi Area 1857, Muscat, Oman</div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="contact_info_m"><a href="tel:123456789">01234-56789</a>, <a href="tel:123456789">123456789</a></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="mailto:alruwialtasneem@outlook.com">alruwialtasneem@outlook.com</a></div>
            </li>
          </ul>
          <div class="map_wrap">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14625.920727838746!2d58.3729091!3d23.5871059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x42fd78c112aa86c!2sAl+Tasnim+Enterprises+LLC.!5e0!3m2!1sen!2sin!4v1541758810943" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>              
              
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Contact-us--> 
<?php 
  include 'footer.php'
?>