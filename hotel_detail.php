    <?php
            include_once("/connect/connection.php");
            $sql1= mysqli_query($connect, "select * from client ");
            $c=mysqli_fetch_assoc($sql1);
            $id = $_GET['id'] ;
            $sql2 = mysqli_query($connect, "select * from room where `hotelID` =".$id );
            $r = mysqli_fetch_assoc($sql2);
            $sql3 = mysqli_query($connect, "select * from hotel where `hotelID` =".$id );
            $h = mysqli_fetch_assoc($sql3);

            $sql4 = mysqli_query($connect, "select * from review where `hotelID` =".$id );
            $count = mysqli_num_rows($sql4);
    ?>

 <!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="hotel, bed and breakfast, accommodations, travel, motel">
    <meta name="description" content="FC Recom - Hotel and Bed&amp;Breakfast">
    <meta name="author" content="Ansonika">
   <title>DZ BOOKINg - <?php echo $h['name_hotel'] ?></title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="css/base.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="css/DateTimePicker.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
    
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!--[if lte IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->
    
    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->
    
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- End Preload -->
    
     <!-- Header ================================================== -->
    <header>
    <div class="container">
        <div class="row">
            <div class="col--md-3 col-sm-3 col-xs-3">
                <a href="indexP.php" id="logo">
                <img src="img/logoN.png" width="190" height="23" alt="" data-retina="true">
                </a>
            </div>
            <nav class="col--md-9 col-sm-9 col-xs-9">
            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
            
            <div class="main-menu">
                <div id="header_menu">
                     <img src="img/logo_m.png" width="141" height="40" alt="" data-retina="true">
                </div>
                <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                 <ul>
                    <li class="submenu">
                    <a href="javascript:void(0);" class="show-submenu">Home<i class="icon-down-open-mini"></i></a>
                    <ul>
                        <li><a href="index.html">Home Booking</a></li>
                        <li><a href="index_5.html">Home Booking date 2</a></li>
                        <li><a href="index_4.html">Home Carousel</a></li>
                        <li><a href="index_2.html">Home Layer Slider</a></li>
                        <li><a href="index_6.html">Home Video bg</a></li>
                        <li><a href="index_3.html">Home Text Rotator</a></li>
                    </ul>
                    </li>
                    <li><a href="room_list.html">Rooms</a></li>
                    <li class="submenu">
                    <a href="javascript:void(0);" class="show-submenu">Pages<i class="icon-down-open-mini"></i></a>
                    <ul>
                        <li><a href="header_2/index.html">Header transparent</a></li>
                        <li><a href="room_detail.html">Room detail</a></li>
                        <li><a href="room_detail_2.html">Room detail date 2</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="coming_soon/index.html">Site launch/Coming soon</a></li>
                        <li><a href="shortcodes.html">Shortcodes</a></li>
                        <li><a href="icon_pack_1.html">Icon pack 1</a></li>
                         <li><a href="icon_pack_2.html">Icon pack 2</a></li>
                        <li><a href="icon_pack_3.html">Icon pack 3</a></li>
                    </ul>
                    </li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li class="submenu" id="profil">
                    <a href="javascript:void(0);" class="show-submenu"><?php echo $c['username']; ?> <img src="<?php echo $c['img']; ?>"></a>
                    <ul>
                        <li><a href="my/lite/index.php">My Profile</a> </li>
                        <li><a href="php/logout.php">Log Out</a></li>
                    </ul>  
                    </li>  
                </ul>
            </div><!-- End main-menu -->
            
            </nav>
        </div><!-- End row -->
    </div><!-- End container -->
    </header>
    <!-- End Header =============================================== -->
    
    <!-- Set up your HTML -->
<div class="carousel_in">
      <div><img src="<?php echo $h['imgg']; ?>" alt=""><div class="caption"><h3>Fantastic bed room</h3></div></div>
      <div><img src="<?php echo $h['imgg2']; ?>" alt=""><div class="caption"><h3>Equiped bathroom</h3></div></div>
      <div><img src="<?php echo $h['imgg3']; ?>" alt=""><div class="caption"><h3>Equiped bathroom</h3></div></div>
      <div><img src="img/room_detail_4.jpg" alt=""><div class="caption"><h3>Nice outdoor</h3></div></div>
      <div><img src="img/room_detail_5.jpg" alt=""><div class="caption"><h3>Swimming pool</h3></div></div>
    </div>
    
    
    <h1 class="main_title_in"><?php echo $h['name_hotel'] ?></h1>
    <div class="container add_bottom_60">
        
        <div class="row">
        	<div class="col-md-8" id="room_detail_desc">
            <div id="single_room_feat">
                <ul>
                	<li><i class="icon_set_1_icon-7"></i>Wifi</li>
                    <li><i class="icon_set_2_icon-116"></i>Plasma TV</li>
                    <li><i class="icon_set_2_icon-104"></i>King size bed</li>
                    <li><i class="icon_set_2_icon-111"></i>Bathtub</li>
                    <li><i class="icon_set_2_icon-106"></i>Safe box</li>
                </ul>
            </div>
           
         <div class="row">
                <div class="col-md-3">
                    <h3>Description</h3>
                </div>
                <div class="col-md-9">
                    <p>
                        <?php echo $h['description_hotel'] ?>
                    </p>
                    <h4>Room facilities</h4>
                    
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                    	 <ul class="list_ok">
                                <li>Coffee machine</li>
                                <li>Wifi</li>
                                <li>Microwave</li>
                                <li>Oven</li>
                            </ul>
                    </div>
                    <div class="col-md-4 col-sm-4">
                    	 <ul class="list_ok">
                                <li>Fridge</li>
                                <li>Hairdryer</li>
                                <li>Towels</li>
                                <li>Toiletries</li>
                            </ul>
                    </div>
                    <div class="col-md-4 col-sm-4">
                    	 <ul class="list_ok">
                                <li>DVD player</li>
                                <li>Air-conditioning</li>
                                <li>Tv</li>
                                <li>Freezer</li>
                            </ul>
                    </div>
                    </div><!-- End row  -->
                    <h4>Room Prices</h4>
                     <!-- start pricing table -->
                        <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>Low (from 23/03 to 31/05)</td>
                            <td><?php echo$h["price_adults"]?>$</td>
                        </tr>
                        <tr>
                            <td>Middle (from 23/03 to 31/05)</td>
                            <td><?php echo$h["price_adults"]?>$</td>
                        </tr>
                        <tr>
                            <td>High (from 23/03 to 31/05)</td>
                            <td><?php echo$h["price_adults"]?>$</td>
                        </tr>
                        </tbody>
                        </table>
                </div><!-- End col-md-9  -->
            </div><!-- End row  -->

          	<hr>
            
            <div class="row">
                <div class="col-md-3">
                    <h3>Reviews</h3>
                    <a href="#" class="btn_1 add_bottom_15" data-toggle="modal" data-target="#myReview">Leave a review</a>
                </div> 
                <div class="col-md-9">
                	<div id="score_detail"><span><?php echo round($h['rate'], 1) ?></span>
                        <?php
                            $t = $h['rate'] ;
                            if ( $t < 2 ) { echo "Low" ; }
                            if ( $t >= 2 && $t < 4 ) { echo "Sufficient" ;}
                            if ( $t >= 4 && $t < 6 ) { echo "Good" ; }
                            if ( $t >= 6 && $t < 8 ) { echo "Excellent" ; }
                            if ( $t >= 8  ) { echo "Super" ; } 
                         ?> <small>(Based on <?php
                                if($count == 0 ){ echo "24"; }
                                else{ echo $count; } 
                          ?> reviews)</small></div><!-- End general_rating -->
                    <div class="row" id="rating_summary">
                    	<div class="col-md-6">
                        	<ul>
                            	<li>Position
                                    <div class="rating">
                                            <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i>
                                    </div>
                                </li>
                                <li>Comfort
                                <div class="rating">
                                            <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                        	<ul>
                            	<li>Price
                                <div class="rating">
                                            <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i>
                                    </div>
                                </li>
                                <li>Quality
                                <div class="rating">
                                            <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- End row -->
                    
                    <hr>
                    <div class="review_strip_single">
                        <img src="img/avatar1.jpg" alt="" class="img-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                             "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="rating">
                            <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i>
                        </div>
                    </div><!-- End review strip -->
                    
                    <div class="review_strip_single">
                        <img src="img/avatar2.jpg" alt="" class="img-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                             "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="rating">
                            <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i>
                        </div>
                    </div><!-- End review strip -->
                    
                    <div class="review_strip_single last">
                        <img src="img/avatar3.jpg" alt="" class="img-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                             "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="rating">
                            <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i>
                        </div>
                    </div><!-- End review strip -->
                    
                </div>
            </div>  
            <hr>
            <div class="row">
            <div class="col-md-3">
                    <h3>Policies</h3>
                </div>
                <div class="col-md-9">
                <ul id="policies">
                    <li><i class="icon_set_1_icon-83"></i><h5>Check-in and check-out.</h5>
                    <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. Unum etiam cum te, an elit assueverit vix, falli aliquam complectitur ex ius.</p>
                    </li>
                    <li><i class="icon_set_1_icon-54"></i><h5>Cancellation</h5>
                    <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. Unum etiam cum te, an elit assueverit vix, falli aliquam complectitur ex ius.</p>
                    </li>
                    <li><i class="icon_set_1_icon-47"></i><h5>Smoking</h5>
                    <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. Unum etiam cum te, an elit assueverit vix, falli aliquam complectitur ex ius.</p>
                    </li>
                    <li><i class="icon_set_1_icon-35"></i><h5>Payments</h5>
                    <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. Unum etiam cum te, an elit assueverit vix, falli aliquam complectitur ex ius.</p>
                    </li>
                    <li><i class="icon_set_1_icon-13"></i><h5>Disable</h5>
                    <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. Unum etiam cum te, an elit assueverit vix, falli aliquam complectitur ex ius.</p>
                    </li>                    
                    </ul>
                </div>
                </div>
            </div><!-- End col -->
            
              <div class="col-md-4" id="sidebar">
            <div class="theiaStickySidebar">
            	<div class="box_style_1">
                    <div id="message-booking"></div>
                    <form method="get" action="check_avail_home.php"  autocomplete="off" >
                    <input name="room_type" id="room_type" type="hidden" value="Double room">	
                    	<div class="row">
                        	<div class="col-md-6 col-sm-6">
                            	<div class="form-group">
                                	<label>Arrival date</label>
                            	   	<input class="startDate1 form-control datepick" type="text" data-field="date" data-startend="start" data-startendelem=".endDate1" readonly placeholder="Arrival" id="check_in" name="check_in">
                                   <span class="input-icon"><i class="icon-calendar-7"></i></span>
                                   </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            	<div class="form-group">
                                	<label>Departure date</label>
                            	   <input class="endDate1 form-control datepick" type="text" data-field="date" data-startend="end" data-startendelem=".startDate1" readonly placeholder="Departure" id="check_out" name="check_out">
                                   <span class="input-icon"><i class="icon-calendar-7"></i></span>
                               </div>
                            </div>
                        </div><!-- End row -->
                        <div class="row">
                        	<div class="col-md-6 col-sm-6 col-xs-6">
                            	<div class="form-group">
                                <label>Adults</label>
                            	   <div class="qty-buttons">
                                        <input type="button" value="-" class="qtyminus" name="adults">
                                        <input type="text" name="adults" id="adults" value="" class="qty form-control" placeholder="0">
                                        <input type="button" value="+" class="qtyplus" name="adults">
                                    </div>
                                   </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                            	<div class="form-group">
                                <label>Children</label>
                            	    <div class="qty-buttons">
                                        <input type="button" value="-" class="qtyminus" name="children">
                                        <input type="text" name="children" id="children"  value="" class="qty form-control" placeholder="0">
                                        <input type="button" value="+" class="qtyplus" name="children">
                                    </div>
                               </div>
                            </div>
                        </div><!-- End row -->

           				<div class="row">
                        	
                              <div class="col-md-12 col-sm-6">
                                   <div class="form-group">
                                	<label>Search</label>
                            	 		<input type="text" class="form-control" name="search_booking" id="name_booking" placeholder="<?php echo $h['location_hotel'] ?>">
                                   </div>
                                   </div>
                                   <div class="col-md-12 col-sm-6"id="result"></div>
                                   <div class="col-md-12 col-sm-12">
                                   <div class="form-group">
                                   <input type="submit" value="Search" class="btn_full" id="submit-booking">
                                   </div>
                                   </div>
                             </div>
                        </form>
                        <hr>
                        <a href="#0" class="btn_outline"> or Contact us</a>
                        <a href="tel://00213773347971" id="phone_2"><i class="icon_set_1_icon-91"></i>+213 773 34 79 71</a>
                     
                </div><!-- End box_style -->
            </div><!-- End theiaStickySidebar -->
            </div><!-- End col -->
            
        </div><!-- End row -->
                
            </div><!-- End container -->
            <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    <script>
  $(document).ready(function(){

   load_data();

   function load_data(query)
   {
    $.ajax({
     url:"res.php",
     method:"POST",
     data:{query:query},
     success:function(data)
     {
      $('#result').html(data);
     }
    });
   }
   $('#name_booking').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
     load_data(search);
    }
    else
    {
     load_data();
    }
   });
  });
</script> 

    
    <div id="dtBox"></div><!-- End datepicker -->
    
     <footer >
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <img src="img/logooo.png" width="141" height="40" alt="" id="logo_footer" data-retina="true">
                    <ul id="contact_details_footer">
                        <li>Road 1008, Bordj bou arreridj<br>Algeria 34000</li>
                        <li><a href="tel://00213773347971">+213 773 34 79 71</a> / <a href="#0"><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></li>
                    </ul>  
                </div>
                <div class="col-md-2 col-sm-4">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Rooms</a></li>
                        <li><a href="#">Activities</a></li>
                        <li><a href="#">Contact us</a></li>
                         <li><a href="#">Gallery</a></li>
                    </ul>
                </div>                
                <div class="col-md-3 col-sm-4">
                    <h3>Change language</h3>
                   <ul>
                        <li><a href="#">English</a></li>
                        <li><a href="#">French</a></li>
                        <li><a href="#">Spanish</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-4"  id="newsletter">
                    <h3>Newsletter</h3>
                    <p>Join our newsletter to keep be informed about offers and news.</p>
                    <div id="message-newsletter_2"></div>
                        <form method="post" action="assets/newsletter.php" name="newsletter_2" id="newsletter_2">
                        <div class="form-group">
                            <input name="email_newsletter_2" id="email_newsletter_2"  type="email" value=""  placeholder="Your mail" class="form-control">
                          </div>
                            <input type="submit" value="Subscribe" class="btn_1 white" id="submit-newsletter_2">
                        </form>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                        </ul>
                          <p>Copyright © 2018 <a target="_blank" title="DZBOOKING" href="http://DZBOOKING.com/">DZ BOOKINg</a>  |  All Right Reserved</p>

                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Modal Review -->
<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myReviewLabel" style="font-weight:500;">Write your review</h4>
			</div>
			<div class="modal-body">
				<div id="message-review">
				</div>
				<form method="post" action="review.php" name="review" id="review">
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Position</label>
								<select class="form-control" name="position_review" id="position_review">
									<option value="0">Please review</option>
									<option value="1">Low</option>
									<option value="2">Sufficient</option>
									<option value="3">Good</option>
									<option value="4">Excellent</option>
									<option value="5">Super</option>
									
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Comfort</label>
								<select class="form-control" name="comfort_review" id="comfort_review">
									<option value="0">Please review</option>
									<option value="1">Low</option>
									<option value="2">Sufficient</option>
									<option value="3">Good</option>
									<option value="4">Excellent</option>
									<option value="5">Super</option>
									
								</select>
							</div>
						</div>
					</div>
					<!-- End row -->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Price</label>
								<select class="form-control" name="price_review" id="price_review">
									<option value="0">Please review</option>
									<option value="1">Low</option>
									<option value="2">Sufficient</option>
									<option value="3">Good</option>
									<option value="4">Excellent</option>
									<option value="5">Super</option>
									
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Quality</label>
								<select class="form-control" name="quality_review" id="quality_review">
									<option value="0">Please review</option>
									<option value="1">Low</option>
									<option value="2">Sufficient</option>
									<option value="3">Good</option>
									<option value="4">Excellent</option>
									<option value="5">Super</option>
									
								</select>
							</div>
						</div>
					</div>
					<!-- End row -->
					<div class="form-group">
						<textarea name="review_text" id="review_text" class="form-control" style="height:100px" placeholder="Write your review"></textarea>
					</div>
					<div class="form-group">
						<input type="text" name="verify_review" id="verify_review" class="form-control" value="<?php echo $id  ?>">
					</div>
					<input type="submit" value="Submit" class="btn_1" id="submit-review">
				</form>
			</div>
		</div>
	</div>
</div><!-- End Modal Review -->

<!-- COMMON SCRIPTS -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="assets/validate.js"></script>
<script src="js/functions.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script>
  $('.carousel_in').owlCarousel({
    center: true,
    items:1,
    loop:true,
	 autoplay:true,
	 navText: [ '', '' ],
	addClassActive: true,
    margin:5,
    responsive:{
        600:{
            items:1
        },
		 1000:{
            items:2,
			nav:true,
        }
    }
});
</script>
<script src="js/theia-sticky-sidebar.js"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
      additionalMarginTop: 80
    });
</script>
<script type="text/javascript" src="js/DateTimePicker.js"></script>
<script type="text/javascript" src="js/DateTimePicker.js"></script>
<script type="text/javascript">$("#dtBox").DateTimePicker();</script>
</body>
</html>