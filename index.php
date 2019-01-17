<?php
    // config.php contains database connection information, tools.php provides utility functions
	require "config.php";
	require "tools.php";
	
?>

<!DOCTYPE html>
<html lang="en">
    <!-- Starter template from https://getbootstrap.com/docs/4.1/getting-started/introduction/#starter-template used -->
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Feel Good Drinks Company specializes in delicious and healthy fruit drinks and juices that are good for you and the environment">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Feel Good Drinks Co.</title>
    </head>
    
    <body>
        
        <header>
<!-- Header image at the top of the page with the title and tag line -->
            <div class="section secTop">
                <div class="box">
                    <img class="img-fluid" src="images/header_with_logo.jpg" alt="Feel Good Drinks Company. Drink Good. Feel Good.">
                    <!--<img src="images/final_logo_blue.png" alt="Feel Good Drinks Company Logo">-->
                </div>
            </div>

<!-- Navigation bar, is fixed but scrolls up past the header image -->            
            <div class="subMenu" >
                <div class="bar">
                    <a href="#secTop" class="subNavigation" title="home">Home</a>
                    <a href="#sec1" class="subNavigation" title="about">About</a> 
                    <a href="#sec2" class="subNavigation" title="how it&#39;s made">How it's Made</a>
                    <a href="#sec3" class="subNavigation" title="our products">Our Products</a>
                    <a href="#sec4" class="subNavigation" title="initiatives">Initiatives</a>
                    <a href="shop.php?category=All">Shop</a>
                </div>
            </div>
            <!-- Guidence in scrolling to sections from 
                 SMINT. 2017. Sticky Menu Including Navigation Thingy. Accessed January 10,   
                    http://www.outyear.co.uk/smint/ -->
        </header>            
                    
                    
        <main>         
         
<!-- Interative images with zoom effect for 3 main brand points: 100% natural ingredients, no added sugars, 1 of your 5 a day --> 
            <div class="container" id="brandPoints">
                <div class="row">
                <!-- 100% natural ingredients -->    
                    <div class="col-4">
                        <img src="images/100_percent_natural_ingredients.jpg" class="img-fluid " alt="100 Percent Natural Ingredients">
                        <div class="mask flex-center">
                            <p class="white-text">100% Natural Ingredients</p>
                        </div>
                    </div>    

                <!-- No added sugars -->    
                    <div class="col-4">
                        <img src="images/no_added_sugars_oranges.jpg" class="img-fluid " alt="No Added Sugars">
                        <div class="mask flex-center">
                            <p class="white-text">No Added Sugars</p>
                        </div>
                    </div>

                <!-- 1 of your 5 a day -->    
                    <div class="col-4">
                        <img src="images/five_a_day.jpg" class="img-fluid " alt="1 of Your 5 a Day">
                        <div class="mask flex-center">
                            <p class="white-text">1 of Your 5 a Day</p>
                        </div>
                    </div>  
                    
                </div><!--end row-->
            </div><!--end container-->   

                
                
<!-- About section -->
            <div class="section sec1">
                <div class="container">
                    <div class="row">
                        <div class="col-4-sm">
                            <h1>ABOUT</h1>
                            <br><br>
                            <p>Feel Good Drinks Co is a brand all about making people feel good. The great taste of 100% natural Feel Good drinks comes in a choice of 
                            refreshingly still or a little bit bubbly, depending on how the fancy takes you. We only use 100% natural ingredients and never, ever add 
                            sugar, sweeteners or artificial additives to out drinks, so all you’ll be drinking is pure fruit and crisp, clear water – because when you 
                            drink good, you feel good!<br>Feel Good was started in 2001 in Altrincham, London; by 3 friends who saw a need for healthy drinks that tasted 
                            great. From these humble beginnings, we are now sold in over 20,000 outlets in 14 different countries. For a smaller, privately owned company,
                            we have big hearts, with a Feelgoodness Days volunteering scheme for our team, along with our weekly Feel Good Fridays and our Feel Good Fund, 
                            raising lots of money for good causes.<br> And did you know? All of our Feel Good packaging is 100% recyclable, now that’s something to Feel Good about!
                            </p>
                            <!-- small images under about section 
                                set as pop ups
                            -->
                            <div class="smallContainer">
                                <img src="images/about_us_photo_first.jpg" class="img-fluid" alt="Our Fun Atmosphere">
                                <img src="images/about_us_london_second.jpg" class="img-fluid" alt="Our London Home Base">
                                <img src="images/about_us_office_third.jpg" class="img-fluid" alt="Our Office">
                            </div>
                            <div class="back"><a href="#secTop" class="intLink">Back to Top</a></div>
                        </div><!--column end-->
                        <div class="col-8">
                            <!-- larger image besides 'About' text -->
                            <img src="images/about_us_linked_arms.jpg" class="img-fluid" alt="Our Team"> 
                        </div><!--column end-->    
                    </div><!--row-->    
                </div><!--container-->    
            </div><!--section-->
            
<!-- How it's made section containing a photo slider -->
            <div class="section sec2">
                <div class="box">
                     <div id="container">
                         <div id="slideshow" class="cycle-slideshow" 
                         data-cycle-fx="fade" 
                         data-cycle-manual-fx="scrollHorz" 
                         data-cycle-pager-fx = "fade" 
                         data-cycle-manual-speed="400"
                         data-cycle-prev="#prev"  	
                         data-cycle-next="#next"
                         data-cycle-speed="700"  
                         data-cycle-timeout="2500" 
                         > 
                            <img src="images/gallery/how_we_make_it.jpg" class="intro_img" alt="Heart made with apples: How we make it"/>
                            <img src="images/gallery/grown_with_love.jpg" class="intro_img" alt="Berries in a girl's hand: Grown with love"/>
                            <img src="images/gallery/bottled_with_care.jpg" class="intro_img" alt="Rows of bottles: Bottled with care"/>
                            <img src="images/gallery/generations_farmers.jpg" class="intro_img" alt="Child picking a strawberry: From generations of farmers"/>
                            <img src="images/gallery/sustainable_farming.jpg" class="intro_img" alt="Sustainable harvester: With Sustainable farming"/>
                        </div>
                         <!-- Coding for additional pager if required
                         data-cycle-pager = "#pager" 
                         data-cycle-pager-template="<a href='#'><img src='{{src}}' width=150 height=100></a>"
                        <div id="pager"></div>
                        <div id="prev_c"><img id="prev" src="images/prev.svg" alt="prev"/></div>
                        <div id="next_c"><img id="next" src="images/next.svg" alt="next"/></div>-->
                    </div>
                </div>
             </div>
        <!-- Assistance with coding from
             Technotut. 2017. Image Slide Using HTML5 & Jquery. Accessed Jan 16, 
                https://www.youtube.com/watch?v=g2bT2jhJATs&t=287s -->

                

<!--Carosel Wheel for products -->    
            <div class="section sec3">
                <div class="caroselWheel">   
                    <h2>OUR PRODUCTS</h2>
                    <p><a href="#secTop" class="intLink"><b>Back to Top</b></a></p>
                    <p>Check out our current range of deliciously nutriciously tasty drinks.</p>
                    <!-- carosel product place holder -->
                    <img src="images/product_range.jpg">
                </div>    
            </div>


<!-- sparkling and still links. Should include zoom/opacity animation on hover -->
            <div class="productContainer">
                <img src="images/sparkling.jpg" alt="Sparkling Drink Options">
                <img src="images/still.jpg" alt="Still Drink Options">
            </div>
                      

<!-- Initiatives section -->
            <div class="section sec4">
                <div class="box">
                        <h3>FEELS GOOD. DOES GOOD.</h3>
                        <p>Insert here</p>  
                    </div>   
            </div>    
<!-- Instagram Section -->
                         
<!-- Available at Section -->                         



        </main>
        <!-- Call echo_footer from tools.php to show footer -->
        <?php
            // Call echo_footer from tools.php to show footer
            echo_footer();
        ?>
        

   
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
        <!-- Javascript Pathways -->        
        <script src="js/jquery-3.1.1.min%20(1).js" type="text/javascript" ></script>
        <script	src="js/jquery.smint.js" type="text/javascript" ></script>
        <script src="js/jquery.cycle2.min%20(1).js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script> 
        
        <!-- Internal Javascript -->        
    <script type="text/javascript">
	
//function to scroll to each section
        //SMINT. 2019. Sticky Menu Including Navigation Thingy. Accessed January 17,   
            //http://www.outyear.co.uk/smint/
        

        $ (document).ready( function() {
            $('.subMenu').smint({
                'scrollSpeed' : 1000
            });
        });
        
//function for photo slide
        //Technotut. 2017. Image Slide Using HTML5 & Jquery. Accessed Jan 17, 
            //https://www.youtube.com/watch?v=g2bT2jhJATs&t=287s
        
       function height() {
	   var h = window.innerHeight;
	   var a = document.getElementById('container');
	   a.style.height = h+"px";
	   }
	
        window.addEventListener('load',height);
        window.addEventListener('resize',height);
        
       
//hover to shake
        //Fiddle. 2017. Shake Animation for Jquery. Accessed Jan 20,     
            //http://jsfiddle.net/nakawake/NZ8sE/14/

        $('.knack img').hover(function(){
    if(!$(this).hasClass('animated')){
        $(this).addClass('animated');
        $(this).stop().effect('shake', {distance:3}, 400);
        }
        }, function(){
            $(this).removeClass('animated');
        });
        
        
//popup window FOR ABOUT SECTION SMALL IMAGES
        //TO DO
        //Seb Kay. 2015. Creating a Fading Popup Modal with jQuery. Accessed Jan 21, 2017. 
             //http://inspirationalpixels.com/tutorials/custom-popup-modal

       $(function() {
        //----- OPEN
        $('[data-popup-open]').on('click', function(e)  {
            var targeted_popup_class = jQuery(this).attr('data-popup-open');
            $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

            e.preventDefault();
        });

        //----- CLOSE
        $('[data-popup-close]').on('click', function(e)  {
            var targeted_popup_class = jQuery(this).attr('data-popup-close');
            $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

            e.preventDefault();
        });
       });
        
//hover text on IMAGE HOVERS
        //TO DO
        //Jafarian, Ali. 2012. jQuery image hover captions. Accessed February 20, 2017.
            //http://alijafarian.com/jquery-image-hover-captions/
                                
      
	$('.standard').hover(
		function(){
			$(this).find('.caption').show();
		},
		function(){
			$(this).find('.caption').hide();
		}
	);
        
    </script>
        
    </body>
</html>

<?php
	// Release $result
	//mysqli_free_result($result);
	
	// Close connection to database
	mysqli_close($connection);
?>