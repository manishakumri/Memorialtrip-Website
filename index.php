<?php 
if(isset($_POST['enquiry_now']))
{
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$Destination=$_POST['Destination'];
$Journey_Date=$_POST['Journey_Date'];
$Number_of_Adults=$_POST['Number_of_Adults'];
$Comments=$_POST['Comments'];


$to = "info@memorialtrip.com";
$subject = "Enquiy by Memorial Trip";
$txt = "Dear Admin,\n\n".$Name." has enquired.\n
Enquiry Details :
Name : $Name
Email : $Email
Phone : $Phone
Destination : $Destination
Journey Date : $Journey_Date
Numberof Adults : $Number_of_Adults
Comments : $Comments
\n\nRegards,\n memorialtrip";
$headers="From: <noreply@memorialtrip.com>". "\r\n";
$res=mail($to,$subject,$txt,$headers);
if(isset($res))
{
$msg1="Your Query Has Been Send Successfully";
}
}
?>
<!DOCTYPE html>
<html lang="en" class="wide wow-animation smoothscroll">
  <head>
    <title>Memorial Trip India Tour Packages|Family holiday packages in india- Memorial Trip</title>
<meta name="description" content ="Find Cheap India Tour Package,India Tour Packages,Best Tour Packages,Best Domestic Family Holiday Packages in India with cheap price – Memorialtrip.com">  
 <meta name="keywords" content="Cheap India Tour Packages,Family holiday packages in India, Best Domestic Holiday Trips">



<!-- Event snippet for Enquiry conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-835117575/VFF3CLGiknYQh8SbjgM',
      'event_callback': callback
  });
  return false;
}
</script>


          
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">

<link rel="canonical" href="http://www.memorialtrip.com/index.php" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108862073-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108862073-1');
</script>

    <script type="text/javascript">
	function validate()
		{
if(	document.frm1.Name.value.length==0)
		{
		alert("Please Enter Name");
		document.frm1.Name.focus(true);
		return false;
		}
		var Name = /^[a-zA-Z].{2,30}?$/;
    if(!Name.test(document.frm1.Name.value))
     {
		alert("Please Enter Valid Name");
		document.frm1.Name.focus(true);
		return false;
	}
	if(document.frm1.Email.value.length==0)
	{
	alert("Please Enter Email");
		document.frm1.Email.focus(true);
		return false;
	}
	
	var Email = /^[a-z0-9.]+@[a-z]+.[a-z]{2,5}$/;
    if(!Email.test(document.frm1.Email.value))
     {
		alert("Please Enter Valid Email");
		document.frm1.Email.focus(true);
		return false;
		
	}


//var Subject = /^[a-zA-Z].{2,30}?$/;
//    if(!Subject.test(document.frm1.Subject.value))
//     {
//		alert("Please Enter Valid Subject");
//		document.frm1.Subject.focus(true);
//		return false;
//	}

	if(document.frm1.Phone.value.length==0)
	{
	alert("Please Enter Phone");
		document.frm1.Phone.focus(true);
		return false;
	}
	var Phone =/^[0-9]{10}$/;
    if(!Phone.test(document.frm1.Phone.value))
     {
		alert("Please Enter Valid Phone No.");
		document.frm1.Phone.focus(true);
		return false;
	}
	if(	document.frm1.Destination.value.length==0)
		{
		alert("Please Enter Destination");
		document.frm1.Destination.focus(true);
		return false;
		}
		var Destination = /^[a-zA-Z].{2,30}?$/;
    if(!Destination.test(document.frm1.Destination.value))
     {
		alert("Please Enter Valid Destination");
		document.frm1.Destination.focus(true);
		return false;
	}
	if(document.frm1.Journey_Date.value.length==0)
	{
	alert("Please Enter Journey_Date");
		document.frm1.Journey_Date.focus(true);
		return false;
	}
	
	var Journey_Date = /^[a-z0-9.]+@[a-z]+.[a-z]{2,5}$/;
    if(!Journey_Date.test(document.frm1.Journey_Date.value))
     {
		alert("Please Enter Valid Journey_Date");
		document.frm1.Journey_Date.focus(true);
		return false;
		
	}
	if(document.frm1.Number_of_Adults.value.length==0)
	{
	alert("Please Enter Number_of_Adults");
		document.frm1.Number_of_Adults.focus(true);
		return false;
	}
	var Number_of_Adults =/^[0-9]{10}$/;
    if(!Number_of_Adults.test(document.frm1.Number_of_Adults.value))
     {
		alert("Please Enter Valid Number_of_Adults");
		document.frm1.Number_of_Adults.focus(true);
		return false;
	}

	if(document.frm1.Comments.value.length==0)
	{
	alert("Please Enter Comments ");
		document.frm1.Comments.focus(true);
		return false;
	}
	var Comments = /^[a-zA-Z0-9-?.,*+@&\n ]+$/;
    if(!Comments.test(document.frm1.Comments.value))
     {
		alert("Please Enter Valid Comments ");
		document.frm1.Comments.focus(true);
		return false;
	}
	}
</script>
  </head>
  <body>
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-header slider-menu-position">
      <div class="top-line">
      	<div class="shell">
        	<div class="range">
            	<div class="cell-sm-6 cell-md-6 cell-lg-6">
                	<span class="top-line-txt"><i class="fa fa-whatsapp"></i> +91-9999412582</span>
                    <span class="top-line-txt"><a href="mailto:info@memorialtrip.com"><i class="fa fa-envelope"></i> info@memorialtrip.com</a></span>
                </div>
                <div class="cell-sm-6 cell-md-6 cell-lg-6">
                	<ul class="top-social-icon">
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
      </div>
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="1px" data-lg-stick-up-offset="1px" class="rd-navbar rd-navbar-transparent rd-navbar-dark-stuck" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand veil reveal-md-block"><a href="#" class="brand-name"><img width="207" height="31" src="images/logo-light-148x30.png" alt=""></a></div>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand veil-md reveal-tablet-md-inline-block"><a href="#" class="brand-name"><img width="207" height="31" src="images/logo-dark-148x30.png" alt=""></a></div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="about-us.htm">About Us</a></li>
                  <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="#">Tour Packages</a>
                    <ul class="rd-navbar-dropdown">
						<li><a href="kerala-tour-packages.htm">Kerala Tour Packages</a></li>
                        <li><a href="himachal-tour-package.htm">Himachal Tour Packages</a></li>
                        <li><a href="special-tour-packages.htm">Special Tour Packages</a></li>
                        <li><a href="tamilandutour-package.htm">Tamilnadu Tour Packages</a></li>
                        <li><a href="rajesthan-tour-package.htm">Rajasthan Tour Packages</a></li>
                        <li><a href="kasmir-tour-package.htm">Kashmir Tour Packages</a></li>
                  	</ul>
                  	<span class="rd-navbar-submenu-toggle"></span>
                  </li>
				  <li><a href="dear-and-offers.htm">Deals & Offers</a></li>
				  <li><a href="https://www.payumoney.com/paybypayumoney/#/A291601E3B4B1B2584C76C3484383450">Payment</a></li>
                  <li><a href="index.php#enguery-now1">Enquiry Now</a></li>
                  <li><a href="contact-us.htm">Contact US</a></li>
                  
                </ul>
              </div>
            </div>
          </nav>
        </div>
        <!-- Swiper-->
        <div data-height="" data-min-height="400px" data-simulate-touch="false" data-slide-effect="fade" class="swiper-container swiper-slider">
          <div class="swiper-wrapper">
            <div data-slide-bg="images/background-01-1920x900.jpg" class="swiper-slide"></div>
            <div data-slide-bg="images/background-02-1920x900.jpg" class="swiper-slide"></div>
            <div data-slide-bg="images/background-03-1920x900.jpg" class="swiper-slide"></div>
          </div>
          <div class="swiper-caption-absolute">
            <div class="shell">
              <div class="range range-xs-center">
                <div class="cell-lg-10">
                  <div>
                    <h1 class="text-white">Enjoy Your Dream Vacation</h1>
                  </div>
                  <div class="offset-top-8">
                    <p class="h6 text-white">Travel to the any corner of the world, without going around in circles.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Swiper Pagination-->
          <div class="swiper-pagination"></div>
          <!-- Swiper Navigation-->
          <div class="swiper-button-prev"><span class="icon icon-xxs icon-circle icon-filled-white mdi mdi-chevron-left text-gray"></span></div>
          <div class="swiper-button-next"><span class="icon icon-xxs icon-circle icon-filled-white mdi mdi-chevron-right text-gray"></span></div>
        </div>
      </header>
      <!-- Page Content-->
      <main class="page-content">
        <!-- Best Offers-->
        <section class="section-80 section-md-top-70 bg-wild-wand">
          <div class="shell">

 <h2>Welcome to the World of Memorial Trip </h2> <br>

Welcome into the world of Memorial Trip, Where every journey is a trip, every moment is a memory and happiness is a part of every day. We proffer heartfelt experience of your holiday with adept professionals strives of Memorial Trip which offers you the best suited tour packages for all your travel needs and requirements. The uninterrupted range of holiday packages is also offered in customization with your specifications to make sure your travel dreams are fulfilled.<br><br>

Get best holiday packages at cheapest price, domestic as well as international packages at attractive rates. You can make a request for tours like: Kerala holiday package, Family holiday packages in india, Kerala tour & holiday trip packages,  Kashmir tour packages, Kerala honeymoon package, Himachal tour packages from Delhi, Budget Kerala package, Honeymoon packages for Kashimir, Book  Shimla Manali honeymoon packages, Cheap Kashmir packages & holidays, Cheap India tour packages,  Ooty kodaikanal packages, Best honeymoon packages, Rajasthan packages, Golden triangle packages, Weekend packages, Group packages, Group travel etc. <br><br>

Our transparent business nature and fair dealing provide full customer satisfaction. Each of the offered holiday packages is 100% trustworthy and credible and thus we ensure your satisfaction at every step.
            <div> <br>
              <h3>Best Tour Packages</h3>
            </div>
            <div class="offset-top-10">
              <p>Check out our top-rated tours</p>
            </div>
            <div class="range range-xs-center offset-top-45">
              <div class="cell-sm-5 cell-md-4">
                <!-- Box Offer-->
                <div data-wow-delay=".2s" class="box-offer wow fadeInLeft">
                  <div class="box-offer-img-wrap"><a href="kerala-tour-packages.htm"><img src="images/box-offer-01-370x310.jpg" width="370" height="310" alt="" class="img-responsive center-block"></a></div>
                  <div class="box-offer-caption text-left">
                    <div class="pull-left">
                      <div class="box-offer-title text-ubold"><a href="kerala-tour-packages.htm" class="text-gray-base">Exciting Kerala </a></div>
                    </div>
                    <div class="pull-right">
                      <div class="box-offer-price text-gray-base">Rs. 6999/-*</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="offset-top-8 offset-xs-top-0">
                      <!-- List Inline-->
                      <ul class="list-inline list-inline-13 list-inline-marked text-silver-chalice text-small">
                        <li>(Munnar & Alleppey)</li>
                        <li>4 Days</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cell-sm-5 cell-md-4 offset-top-30 offset-sm-top-0">
                <!-- Box Offer-->
                <div data-wow-delay=".2s" class="box-offer wow bounceIn">
                  <div class="box-offer-img-wrap"><a href="special-tour-packages.htm"><img src="images/box-offer-02-370x310.jpg" width="370" height="310" alt="" class="img-responsive center-block"></a></div>
                  <div class="box-offer-caption text-left">
                    <div class="pull-left">
                      <div class="box-offer-title text-ubold"><a href="special-tour-packages.htm" class="text-gray-base">Special Tour packages</a></div>
                    </div>
                    <div class="pull-right">
                      <div class="box-offer-price text-gray-base">Rs. 5999/-*</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="offset-top-8 offset-xs-top-0">
                      <!-- List Inline-->
                      <ul class="list-inline list-inline-13 list-inline-marked text-silver-chalice text-small">
                        <li>&nbsp;</li>
                        <li>4 Days</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cell-sm-5 cell-md-4 offset-top-30 offset-md-top-0">
                <!-- Box Offer-->
                <div data-wow-delay=".2s" class="box-offer wow fadeInRight">
                  <div class="box-offer-img-wrap"><a href="kerala-tour-packages.htm"><img src="images/box-offer-03-370x310.jpg" width="370" height="310" alt="" class="img-responsive center-block"></a></div>
                  <div class="box-offer-caption text-left">
                    <div class="pull-left">
                      <div class="box-offer-title text-ubold"><a href="kerala-tour-packages.htm" class="text-gray-base">Romantic Kerala</a></div>
                    </div>
                    <div class="pull-right">
                      <div class="box-offer-price text-gray-base">Rs. 11499/-*</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="offset-top-8 offset-xs-top-0">
                      <!-- List Inline-->
                      <ul class="list-inline list-inline-13 list-inline-marked text-silver-chalice text-small">
                        <li>Munnar, Thekkaddy, Houseboat</li>
                        <li>5 Days</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cell-sm-5 cell-md-4 offset-top-30">
                <!-- Box Offer-->
                <div data-wow-delay=".2s" class="box-offer wow fadeInLeft">
                  <div class="box-offer-img-wrap"><a href="rajesthan-tour-package.htm"><img src="images/box-offer-04-370x310.jpg" width="370" height="310" alt="" class="img-responsive center-block"></a></div>
                  <div class="box-offer-caption text-left">
                    <div class="pull-left">
                      <div class="box-offer-title text-ubold"><a href="rajesthan-tour-package.htm" class="text-gray-base">Evergreen Rajasthan</a></div>
                    </div>
                    <div class="pull-right">
                      <div class="box-offer-price text-gray-base">Rs. 11999/-*</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="offset-top-8 offset-xs-top-0">
                      <!-- List Inline-->
                      <ul class="list-inline list-inline-13 list-inline-marked text-silver-chalice text-small">
                        <li>Jaipur,Jodhpur, & Jaisalmer</li>
                        <li>6 Days</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cell-sm-5 cell-md-4 offset-top-30">
                <!-- Box Offer-->
                <div data-wow-delay=".2s" class="box-offer wow bounceIn">
                  <div class="box-offer-img-wrap"><a href="tamilandutour-package.htm"><img src="images/box-offer-05-370x310.jpg" width="370" height="310" alt="" class="img-responsive center-block"></a></div>
                  <div class="box-offer-caption text-left">
                    <div class="pull-left">
                      <div class="box-offer-title text-ubold"><a href="tamilandutour-package.htm" class="text-gray-base">Hilly Ooty & Kodaikanal</a></div>
                    </div>
                    <div class="pull-right">
                      <div class="box-offer-price text-gray-base">Rs. 9499/-*</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="offset-top-8 offset-xs-top-0">
                      <!-- List Inline-->
                      <ul class="list-inline list-inline-13 list-inline-marked text-silver-chalice text-small">
                        <li>Coonoor,Ooty & Kodaikanal</li>
                        <li>5 Days</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cell-sm-5 cell-md-4 offset-top-30">
                <!-- Box Offer-->
                <div data-wow-delay=".2s" class="box-offer wow fadeInRight">
                  <div class="box-offer-img-wrap"><a href="himachal-tour-package.htm"><img src="images/box-offer-06-370x310.jpg" width="370" height="310" alt="" class="img-responsive center-block"></a></div>
                  <div class="box-offer-caption text-left">
                    <div class="pull-left">
                      <div class="box-offer-title text-ubold"><a href="himachal-tour-package.htm" class="text-gray-base">Himachal Volvo Package</a></div>
                    </div>
                    <div class="pull-right">
                      <div class="box-offer-price text-gray-base">Rs. 10999/-*</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="offset-top-8 offset-xs-top-0">
                      <!-- List Inline-->
                      <ul class="list-inline list-inline-13 list-inline-marked text-silver-chalice text-small">
                        <li>Shimla, Kullu & Manali</li>
                        <li>6 Days</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="offset-top-50"><a href="kerala-tour-packages.htm" class="btn btn-primary">View ALL TOURs</a></div>
          </div>
        </section>
        <!-- Why memorialtrip-->

        <!-- What Customers Say-->
        <section data-wow-delay=".2s" class="section-70 section-md-bottom-80 wow fadeIn">
          <div class="shell">
            <div>
              <h3>What Customers Say</h3>
            </div>
            <div class="offset-top-10">
              <p>Our clients’ testimonials are the best proof of our high level of service</p>
            </div>
            <div class="range range-xs-center offset-top-40">
              <div class="cell-md-10 cell-lg-12">
                <!-- Owl Carousel-->
                <div data-items="1" data-sm-items="2" data-lg-items="3" data-stage-padding="5" data-loop="false" data-margin="30" data-mouse-drag="false" data-dots="true" data-nav="true" class="owl-carousel owl-dots-primary">
                  <div class="owl-item">
                    <!-- Team Member-->
                    <div class="team-member">
                      <div class="team-member-img-wrap"><img src="images/user-01-100x100.jpg" width="100" height="100" alt="" class="img-circle img-responsive center-block"></div>
                      <div class="team-member-body">
                        <div class="offset-top-20">
                          <div class="team-member-title text-small text-ubold text-uppercase text-spacing-200 text-gray-base">Mr. Srinivas Rajan </div>
                        </div>
                        <div class="offset-top-20">
                          <p class="text-small text-italic text-silver-chalice">"Our travel agent is simply the best!  She planned a trip that exceeded our expectations.  Through there planning, we experienced the cosmopolitan aspects of Himachal, the natural beauty of Himachal, These guys make my journey memorable."</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item">
                    <!-- Team Member-->
                    <div class="team-member">
                      <div class="team-member-img-wrap"><img src="images/user-02-100x100.jpg" width="100" height="100" alt="" class="img-circle img-responsive center-block"></div>
                      <div class="team-member-body">
                        <div class="offset-top-20">
                          <div class="team-member-title text-small text-ubold text-uppercase text-spacing-200 text-gray-base">Aggarwal Family</div>
                        </div>
                        <div class="offset-top-20">
                          <p class="text-small text-italic text-silver-chalice">"We have just returned from the trip of a lifetime! Thanks to this  Memorial Trip company and our agent Vikash, our custom-designed 13 day tour of Kerala was perfect. We easily followed the instructions in our travel packet, our tickets and vouchers were organized and accepted everywhere, driver was on time everything was planned Thank you Memorialtrip Team."</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item">
                    <!-- Team Member-->
                    <div class="team-member">
                      <div class="team-member-img-wrap"><img src="images/user-03-100x100.jpg" width="100" height="100" alt="" class="img-circle img-responsive center-block"></div>
                      <div class="team-member-body">
                        <div class="offset-top-20">
                          <div class="team-member-title text-small text-ubold text-uppercase text-spacing-200 text-gray-base">Mr.& Mrs.Soni ( Honeymon Couple)</div>
                        </div>
                        <div class="offset-top-20">
                          <p class="text-small text-italic text-silver-chalice">"It is an absolute privilege to write a review for this travel agent and his company (Memorial Trip). Because of him, we had a trip of a lifetime in magical Ooty and Kodaikanal !  We could not have asked for a better experience and are so happy we chose this company to organize this trip for us."</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item">
                    <!-- Team Member-->
                    <div class="team-member">
                      <div class="team-member-img-wrap"><img src="images/user-01-100x100.jpg" width="100" height="100" alt="" class="img-circle img-responsive center-block"></div>
                      <div class="team-member-body">
                        <div class="offset-top-20">
                          <div class="team-member-title text-small text-ubold text-uppercase text-spacing-200 text-gray-base">Mr. Srinivas Rajan </div>
                        </div>
                        <div class="offset-top-20">
                          <p class="text-small text-italic text-silver-chalice">"Our travel agent is simply the best!  She planned a trip that exceeded our expectations.  Through there planning, we experienced the cosmopolitan aspects of Himachal, the natural beauty of Himachal, These guys make my journey memorable."</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="offset-top-40"><a href="#" class="btn btn-primary">View More</a></div>
          </div>
        </section>
        <!-- Find Travel Perfection With the Professionalism of Experts-->
        <section data-wow-delay=".2s" class="context-dark wow fadeIn">
          <!-- RD Parallax-->
          <div data-on="false" data-md-on="true" class="rd-parallax">
            <div data-speed="0.05" data-type="media" data-url="images/background-06-1920x900.jpg" class="rd-parallax-layer"></div>
            <div data-speed="0" data-type="html" data-md-fade="false" class="rd-parallax-layer">
              <div class="bg-overlay-inverse-md-darker">
                <div class="shell section-80 section-lg-top-100 section-lg-bottom-100">
                <div>
              		<h3>DEALS & OFFERS</h3>
            	</div>
                <div class="offset-top-0">
              <p>REASONS TO TRUST US</p>
            </div>
                <div class="range range-xs-center">
              <div class="cell-sm-6 cell-md-4">
                <!-- Box-->
                <div class="box bg-white HeiBox">
                	<img src="images/1.jpg" alt="" class="img-responsive center-block">
                  <div class="offset-top-15">
                    <p class="text-small text-silver-chalice">Shimla Kullu Manali Car Tour<br>
05 Nights/ 06 Days<br>
Delhi-Shimla-Kullu-Manali
</p>
                  </div>
                  <div class="offset-top-30"><a href="index.php#enguery-now1" class="btn btn-xs btn-xs-variant-2 btn-width-95 btn-primary">book now</a></div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-20 offset-sm-top-0">
                <!-- Box-->
                <div class="box bg-white HeiBox">
                  <img src="images/2.jpg" alt="" class="img-responsive center-block">
                  <div class="offset-top-15">
                    <p class="text-small text-silver-chalice">

Kerala Tour Package<br>
04 Nights/05 Days<br>
Munnar- Thekkady-Alleppey</p>
                  </div>
                  <div class="offset-top-30"><a href="index.php#enguery-now1" class="btn btn-xs btn-xs-variant-2 btn-width-95 btn-primary">book now</a></div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-20 offset-md-top-0">
                <!-- Box-->
                <div class="box bg-white HeiBox">
                  <img src="images/3.jpg" alt="" class="img-responsive center-block">
                  <div class="offset-top-15">
                    <p class="text-small text-silver-chalice">Ooty & Kodaikanal Package<br>
04 Nights/05 Days<br>
Ooty-Coonoor-Kodaikanal
</p>
                  </div>
                  <div class="offset-top-30"><a href="index.php#enguery-now1" class="btn btn-xs btn-xs-variant-2 btn-width-95 btn-primary">book now</a></div>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Our Skills-->
        <section class="section-80" style="padding-bottom:0;" id="enguery-now1">
          <div class="shell">
          	<div class="box box-insets-off bg-white reveal-lg-block" >
              <div class="range range-xs-center range-md-justify text-sm-left">
                <div class="cell-sm-12 cell-sm-push-1">
                                  <div class="box-inner" style="padding-bottom:50px; padding-top:50px;">
                    <div class="range range-xs-center">
                      <div class="cell-sm-12">
                        <h5 class="text-ubold" > <?php if(isset($msg1)) { echo $msg1; } else { echo "Enquiry Form"; } ?></h5>
                        <div class="offset-top-25">
                          <!-- RD Mailform-->
                          <div id="divtag">
                          <form  action="" id="contacts-form1"  method="post" name="frm1">
                            <div class="form-group form-group-xs">
                              <label for="Name" class="form-label rd-input-label">Name</label>
                              <input type="text" name="Name" id="Name" class="form-control text-regular form-control-last-child validate[required] inputbg" required>
                            </div>
                            <div class="form-group form-group-xs">
                              <label for="Email" class="form-label rd-input-label">Email</label>
                              <input type="email" name="Email" id="Email" class="form-control text-regular  form-control-last-child validate[required, custom[email]] inputbg" required>
                            </div>
                            <div class="form-group form-group-xs">
                              <label for="Phone" class="form-label rd-input-label">Mobile</label>
                              <input type="text" name="Phone" id="Phone" class="form-control text-regular  form-control-last-child validate[required] inputbg" required>
                            </div>		
							<div class="form-group form-group-xs">
                              <label for="Destination" class="form-label rd-input-label">Destination</label>
                              <input type="text" name="Destination" id="Destination" class="form-control text-regular  form-control-last-child validate[required] inputbg" required>
                            </div>		
							<div class="form-group form-group-xs">
                              <label for="Journey_Date" class="form-label rd-input-label">Journey_Date</label>
                              <input type="text" name="Journey_Date" id="Journey_Date" class="form-control text-regular  form-control-last-child validate[required] inputbg" required>
                            </div>
							<div class="form-group form-group-xs">
                              <label for="Number_of_Adults" class="form-label rd-input-label">Number_of_Adults</label>
                              <input type="text" name="Number_of_Adults" id="Number_of_Adults" class="form-control text-regular  form-control-last-child validate[required] inputbg" required>
                            </div>
                            <div class="form-group form-group-xs">
                              <label for="Comments" class="form-label rd-input-label">Comments</label>
                              <textarea name="Comments" id="Comments" style="height:120px;" class="form-control text-regular  form-control-last-child validate[required] textbg" required></textarea>
                            </div>
                            <div class="offset-top-20 text-center text-sm-left">
                              <button type="submit" class="btn btn-width-110 btn-primary" name="enquiry_now">ENQUIRY NOW</button>
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  
         </div></div>
          </div>
        </section>  
        <section class="section-80 section-md-bottom-70">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-xs-10 cell-sm-8 cell-md-12">
                <div class="range range-xs-center range-xs-middle">
                  <div data-wow-delay=".6s" class="cell-xs-6 cell-md-3 wow bounceIn">
                    <!-- CountTo-->
                    <svg x="0px" y="0px" width="48px" height="60px" viewbox="0 0 32 40">
                      <polygon fill="#FF9800" points="16,33 11,27 11,21 21,21 21,27 "></polygon>
                      <g>
                        <path fill="#FFA726" d="M25,14.15V16c0,0.337-0.021,0.668-0.057,0.994C24.963,16.995,24.981,17,25,17c1.105,0,2-0.895,2-2                    c0-0.739-0.405-1.377-1-1.723V13.3L25,14.15z"></path>
                        <path fill="#FFA726" d="M7,14.15L6,13.3v-0.023C5.405,13.623,5,14.261,5,15c0,1.105,0.895,2,2,2c0.019,0,0.037-0.005,0.057-0.006                    C7.021,16.668,7,16.337,7,16V14.15z"></path>
                        <path fill="#FFB74D" d="M25,14.15L24,15v-5l-4-4L8,10v5l-1-0.85V16c0,0.337,0.021,0.668,0.057,0.994C7.546,21.519,11.337,25,16,25                    s8.454-3.481,8.943-8.006C24.979,16.668,25,16.337,25,16V14.15z M12,16c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1                    S12.552,16,12,16z M20,16c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S20.552,16,20,16z"></path>
                        <path fill="#FF5722" d="M6,11v2.277V13.3l1,0.85L8,15v-5l12-4l4,4v5l1-0.85l1-0.85v-0.023V11c0-4-1-8-6-9l-1-2h-3C9.9,0,6,4.9,6,11                    z"></path>
                        <circle fill="#784719" cx="20" cy="15" r="1"></circle>
                        <circle fill="#784719" cx="12" cy="15" r="1"></circle>
                        <path fill="#CFD8DC" d="M14,30l2-2l-5-1c0,0-11,2-11,13h14l1-9L14,30z"></path>
                        <path fill="#CFD8DC" d="M21,27l-5,1l2,2l-1,1l1,9h14C32,29,21,27,21,27z"></path>
                        <polygon fill="#3F51B5" points="18,30 16,28 14,30 15,31 14,40 18,40 17,31 	"></polygon>
                      </g>
                    </svg>
                    <div class="offset-top-15 offset-md-top-20">
                      <div data-from="0" data-to="624" class="counter h3 text-ubold text-gray-base"></div>
                    </div>
                    <div class="offset-top-4">
                      <p class="text-italic">Happy Clients</p>
                    </div>
                  </div>
                  <div data-wow-delay=".2s" class="cell-xs-6 cell-md-3 offset-top-60 offset-xs-top-0 wow bounceIn">
                    <!-- CountTo-->
                    <svg x="0px" y="0px" width="72px" height="54px" viewbox="0 0 48 35.7">
                      <polygon fill="#673AB7" points="0,35.7 33,35.7 16.5,11.7 "></polygon>
                      <polygon fill="#9575CD" points="19.2,35.7 48,35.7 33.6,17.7 "></polygon>
                      <path fill="#40C4FF" d="M42.9,0C43.6,1.1,44,2.3,44,3.7c0,3.9-3.1,7-7,7c-0.7,0-1.3-0.1-1.9-0.3c1.2,2,3.4,3.3,5.9,3.3                  c3.9,0,7-3.1,7-7C48,3.5,45.9,0.8,42.9,0z"></path>
                    </svg>
                    <div class="offset-top-15 offset-md-top-20">
                      <div data-from="0" data-to="112" class="counter h3 text-ubold text-gray-base"></div>
                    </div>
                    <div class="offset-top-4">
                      <p class="text-italic">Amazing Tours</p>
                    </div>
                  </div>
                  <div data-wow-delay=".4s" class="cell-xs-6 cell-md-3 offset-top-60 offset-md-top-0 wow bounceIn">
                    <!-- CountTo-->
                    <svg x="0px" y="0px" width="60px" height="56px" viewbox="0 0 40 37">
                      <g>
                        <path fill="none" d="M23,2h-6c-0.6,0-1,0.4-1,1v1h8V3C24,2.4,23.6,2,23,2z"></path>
                        <path fill="#263238" d="M5,37h2c0.6,0,1-0.4,1-1H4C4,36.6,4.4,37,5,37z"></path>
                        <path fill="#263238" d="M33,37h2c0.6,0,1-0.4,1-1h-4C32,36.6,32.4,37,33,37z"></path>
                        <path fill="#37474F" d="M16,3c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v1h2V3c0-1.7-1.3-3-3-3h-6c-1.7,0-3,1.3-3,3v1h2V3z"></path>
                        <path fill="#78909C" d="M36,4H26h-2h-8h-2H4C1.8,4,0,5.8,0,8v24c0,2.2,1.8,4,4,4h4h24h4c2.2,0,4-1.8,4-4V8C40,5.8,38.2,4,36,4z"></path>
                      </g>
                    </svg>
                    <div class="offset-top-15 offset-md-top-20">
                      <div data-from="0" data-to="594" class="counter h3 text-ubold text-gray-base"></div>
                    </div>
                    <div class="offset-top-4">
                      <p class="text-italic">Partners</p>
                    </div>
                  </div>
                  <div data-wow-delay=".8s" class="cell-xs-6 cell-md-3 offset-top-60 offset-md-top-0 wow bounceIn">
                    <!-- CountTo-->
                    <svg x="0px" y="0px" width="60px" height="56px" viewbox="0 0 40 37">
                      <g>
                        <polygon fill="#558B2F" points="24.2,24.2 23.189,21 22.795,21 21.7,24.2 	"></polygon>
                        <path fill="#558B2F" d="M36,14h-3v3c0,2.2-1.8,4-4,4h-3.953l2.553,6.9h-2.2l-0.6-2.1h-3.6l-0.7,2.1h-2.2l2.553-6.9H7v8                    c0,2.2,1.8,4,4,4h25l4,4V18C40,15.8,38.2,14,36,14z"></path>
                        <polygon fill="#1B5E20" points="24.2,24.2 21.7,24.2 22.795,21 20.853,21 18.3,27.9 20.5,27.9 21.2,25.8 24.8,25.8 25.4,27.9                     27.6,27.9 25.047,21 23.189,21 	"></polygon>
                        <path fill="#8BC34A" d="M15.4,12.6c0.2,0.3,0.4,0.5,0.7,0.6c0.3,0.1,0.6,0.2,0.9,0.2c0.7,0,1.3-0.3,1.6-0.8                    c0.4-0.6,0.6-1.4,0.6-2.5V9.7c0-1.1-0.2-1.9-0.6-2.4c-0.4-0.6-0.9-0.8-1.6-0.8s-1.3,0.3-1.6,0.8c-0.4,0.6-0.6,1.4-0.6,2.4v0.5                    c0,0.5,0.1,1,0.2,1.4C15.1,12,15.2,12.4,15.4,12.6z"></path>
                        <path fill="#8BC34A" d="M22.795,21h0.395h1.858H29c2.2,0,4-1.8,4-4v-3V4c0-2.2-1.8-4-4-4H4C1.8,0,0,1.8,0,4v21l4-4h3h13.853H22.795                    z M17.8,15.2c-0.2,0-0.5,0.1-0.8,0.1c-0.6,0-1.2-0.1-1.8-0.3c-0.5-0.2-1-0.6-1.4-1c-0.4-0.4-0.7-1-0.9-1.6                    c-0.2-0.6-0.3-1.3-0.3-2.1V9.9c0-0.8,0.1-1.5,0.3-2.1c0.2-0.6,0.5-1.2,0.9-1.6c0.4-0.4,0.8-0.8,1.4-1C15.7,5,16.3,4.9,17,4.9                    c0.6,0,1.2,0.1,1.8,0.3c0.5,0.2,1,0.6,1.4,1c0.4,0.4,0.7,1,0.9,1.6c0.2,0.6,0.3,1.3,0.3,2.1v0.3c0,1-0.2,1.8-0.5,2.5                    c-0.3,0.7-0.7,1.3-1.3,1.7l1.7,1.3L20,16.9L17.8,15.2z"></path>
                        <path fill="#FFFFFF" d="M19.6,14.4c0.6-0.4,1-1,1.3-1.7c0.3-0.7,0.5-1.5,0.5-2.5V9.9c0-0.8-0.1-1.5-0.3-2.1                    c-0.2-0.6-0.5-1.2-0.9-1.6c-0.4-0.4-0.9-0.8-1.4-1C18.2,5,17.6,4.9,17,4.9c-0.7,0-1.3,0.1-1.8,0.3c-0.6,0.2-1,0.6-1.4,1                    c-0.4,0.4-0.7,1-0.9,1.6c-0.2,0.6-0.3,1.3-0.3,2.1v0.4c0,0.8,0.1,1.5,0.3,2.1c0.2,0.6,0.5,1.2,0.9,1.6c0.4,0.4,0.9,0.8,1.4,1                    c0.6,0.2,1.2,0.3,1.8,0.3c0.3,0,0.6-0.1,0.8-0.1l2.2,1.7l1.3-1.2L19.6,14.4z M14.8,9.7c0-1,0.2-1.8,0.6-2.4                    c0.3-0.5,0.9-0.8,1.6-0.8s1.2,0.2,1.6,0.8c0.4,0.5,0.6,1.3,0.6,2.4v0.4c0,1.1-0.2,1.9-0.6,2.5c-0.3,0.5-0.9,0.8-1.6,0.8                    c-0.3,0-0.6-0.1-0.9-0.2c-0.3-0.1-0.5-0.3-0.7-0.6c-0.2-0.2-0.3-0.6-0.4-1c-0.1-0.4-0.2-0.9-0.2-1.4V9.7z"></path>
                      </g>
                    </svg>
                    <div class="offset-top-15">
                      <div data-from="0" data-to="9" class="counter h3 text-ubold text-gray-base"></div>
                    </div>
                    <div class="offset-top-4">
                      <p class="text-italic">Questions Answered</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Fastest Way to Compare and Book over 450 Cheap Flights-->
        <section class="context-dark wow fadeIn">
          <!-- RD Parallax-->
          <div data-on="false" data-md-on="true" class="rd-parallax">
            <div data-speed="0.15" data-type="media" data-url="images/background-07-1920x900.jpg" class="rd-parallax-layer"></div>
            <div data-speed="0" data-type="html" data-md-fade="false" class="rd-parallax-layer">
              <div class="bg-overlay-inverse-md-darker">
                <div class="shell section-80 section-lg-top-100 section-lg-bottom-100">
                <div>
              		<h3>WHY CHOOSE US?</h3>
            	</div>
                <div class="offset-top-0">
              <p>REASONS TO TRUST US</p>
            </div>
                <div class="range range-xs-center">
              <div class="cell-sm-6 cell-md-4">
                <!-- Box-->
                <div class="box bg-white HeiBox">
                  <h5 class="text-ubold" style="color:#000;">Lowest Price</h5>
                  <div class="offset-top-15">
                    <p class="text-small text-silver-chalice">We have tie ups with most of the local and international suppliers to provide you thebest deal possible.</p>
                  </div>
                  <div class="offset-top-30"><a href="#" class="btn btn-xs btn-xs-variant-2 btn-width-95 btn-primary">Know More</a></div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-20 offset-sm-top-0">
                <!-- Box-->
                <div class="box bg-white inset-lg-left-30 inset-lg-right-30 HeiBox">
                  <h5 class="text-ubold" style="color:#000;">24x7 Support</h5>
                  <div class="offset-top-15">
                    <p class="text-small text-silver-chalice">Our customer care support provides you 24x7 support in the most friendly environment.</p>
                  </div>
                  <div class="offset-top-30"><a href="#" class="btn btn-xs btn-xs-variant-2 btn-width-95 btn-primary">Know More</a></div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-20 offset-md-top-0">
                <!-- Box-->
                <div class="box bg-white HeiBox">
                  <h5 class="text-ubold" style="color:#000;">100% Customer Satisfaction</h5>
                  <div class="offset-top-15">
                    <p class="text-small text-silver-chalice">Our services are solely based at customer satisfaction. We deliver uniques services as we promise.</p>
                  </div>
                  <div class="offset-top-30"><a href="#" class="btn btn-xs btn-xs-variant-2 btn-width-95 btn-primary">Know More</a></div>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!-- Modal-->
     
      <!-- Page Footer-->
      <footer class="page-footer section-top-80 section-bottom-34 section-lg-bottom-15 text-sm-left">
        <div class="shell">
          <div class="range range-xs-center">
            <div class="cell-sm-8 cell-md-12">
              <div class="range range-xs-center">
                <div class="cell-sm-6 cell-md-3 cell-lg-4 cell-md-push-1"><a href="#"><img width="207" height="31" src="images/logo-dark-148x30.png" alt=""></a>
                  <div class="offset-top-20 inset-lg-right-80">
                    <p class="text-small">We have been offering travel services of the highest quality, combining our energy and enthusiasm.</p>
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-3 cell-lg-2 cell-md-push-4">
                  <p class="text-big text-gray-base">Follow Us</p>
                  <div class="offset-top-20">
                    <!-- List Inline-->
                    <ul class="list-inline">
                      <li class="text-center"><a href="#" class="icon icon-square icon-filled-gallery fa fa-facebook-f text-gray"></a></li>
                      <li class="text-center"><a href="#" class="icon icon-square icon-filled-gallery fa fa-twitter text-gray"></a></li>
                      <li class="text-center"><a href="#" class="icon icon-square icon-filled-gallery fa fa-youtube text-gray"></a></li>
                      <li class="text-center"><a href="#" class="icon icon-square icon-filled-gallery fa fa-linkedin text-gray"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="cell-xs-8 cell-sm-12 cell-md-6 offset-top-40 offset-md-top-0 cell-md-push-2">
                  <p class="text-big text-gray-base">Our Contacts</p>
                  <div class="offset-top-8 offset-sm-top-20">
                    <!-- Contact Info-->
                    <address class="contact-info text-left">
                      <div class="range range-xs-center">
                        <div class="cell-sm-6">
                          <div>
                            <p class="reveal-block text-small"><a class="text-gray"><span class="unit unit-horizontal unit-spacing-xs"><span class="unit-left"><img src="images/icon-01-16x21.png" width="16" height="21" alt="" class="img-responsive center-block offset-top-4"></span><span class="unit-body"><span>Plot No. 67, 3rd Floor 
Near Fun & Food Village, Kapashera,
New Delhi – 110037</span></span></span></a></p>
                          </div>
                          <div class="offset-top-20">
                            <p class="reveal-inline-block text-small"><a class="text-gray"><span class="unit unit-middle unit-horizontal unit-spacing-xs"><span class="unit-left"><img src="images/icon-02-19x19.png" width="19" height="19" alt="" class="img-responsive center-block"></span><span class="unit-body"><span>+91-9999412582<br>
							</span></span></span></a></p>
                          </div>
                        </div>
                        <div class="cell-sm-6 offset-top-15 offset-sm-top-0">
                          
                          <div class="">
                            <div>
                              <p class="reveal-inline-block text-small"><a href="mailto:info@memorialtrip.com" class="text-gray"><span class="unit unit-middle unit-horizontal unit-spacing-xs"><span class="unit-left"><img src="images/icon-04-20x13.png" width="20" height="13" alt="" class="img-responsive center-block"></span><span class="unit-body"><span><span class="__cf_email__" data-cfemail="a3cacdc5cce3c7c6cecccfcacdc88dccd1c4">info@memorialtrip.com</span></span></span></span></a></p>
                            </div>
                          </div>
                          <div class="">
                            <div>
                              <p class="reveal-inline-block text-small"><a href="mailto:info@memorialtrip.com" class="text-gray"><span class="unit unit-middle unit-horizontal unit-spacing-xs"><span class="unit-left"><img src="images/icon-04-20x13.png" width="20" height="13" alt="" class="img-responsive center-block"></span><span class="unit-body"><span><span class="__cf_email__" data-cfemail="a3cacdc5cce3c7c6cecccfcacdc88dccd1c4">memorialtrip@gmail.com</span></span></span></span></a></p>
                            </div>
                          </div>
                          <div class="offset-top-20">
                            <p class="reveal-inline-block text-small"><a href="#" class="text-gray"><span class="unit unit-middle unit-horizontal unit-spacing-xs"><span class="unit-left"><img src="images/icon-05-19x19.png" width="19" height="19" alt="" class="img-responsive center-block"></span><span class="unit-body"><span>memorialtrip.com</span></span></span></a></p>
                          </div>
                        </div>
                      </div>
                    </address>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="offset-top-110">
            <div class="hr bg-gallery"></div>
          </div>
          <div class="range range-xs-center range-sm-justify offset-top-8">
            <div class="cell-sm-6 cell-md-5 text-sm-left">
              <p class="text-extra-small">&#169; 2016 Memorial Trip | All Rights Reserved | Powered by <a href="http://memorialtrip.com/" target="_blank">Memorial Trip | All Rights Reserved |</p>
            </div>
            <div class="cell-sm-6 cell-md-5 text-sm-right offset-top-0">
              <!-- List Inline-->
              <ul class="list-inline list-inline-8">
                <li>
                  <p class="text-extra-small"><a href="index.php" class="text-gray">Home</a></p>
                </li>
                <li>
                  <p class="text-extra-small"><a href="terms-and-conditions.htm" class="text-gray">T&C </a></p>
                </li>
                <li>
                  <p class="text-extra-small"><a href="contact-us.htm" class="text-gray">Contact Us</a></p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
      <!-- {%FOOTER_LINK}-->
    </div>
    <!-- Java script-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59d85a4f4854b82732ff423b/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>