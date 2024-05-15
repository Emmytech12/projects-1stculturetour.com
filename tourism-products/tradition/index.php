<?php include '../../config/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include '../../meta.php'?>
<title> Tradition | <?php echo $thename?></title>
<meta name="keywords" content="<?php echo $thename?>, Tourism, culture, travel, heritage, history, attractions, destinations, landmarks, cultural events, museums, art, architecture, local traditions" />
<meta name="description" content="Explore the rich tapestry of culture and heritage with our tourism website. Discover captivating destinations, delve into local traditions, and immerse yourself in the history, art, and architecture of diverse cultures. Plan your next adventure with us."/>

<meta property="og:title" content="<?php echo $thename?> | Tourism, culture, travel, heritage, history, attractions, destinations, landmarks, cultural events, museums, art, architecture, local traditions" />
<meta property="og:image" content="<?php echo $website_url?>/all-images/plugin-pix/connect-global-logistics.jpg"/>
<meta property="og:description" content="Explore the rich tapestry of culture and heritage with our tourism website. Discover captivating destinations, delve into local traditions, and immerse yourself in the history, art, and architecture of diverse cultures. Plan your next adventure with us."/>

<meta name="twitter:title" content="<?php echo $thename?> | Tourism, culture, travel, heritage, history, attractions, destinations, landmarks, cultural events, museums, art, architecture, local traditions"/> 
<meta name="twitter:card" content="<?php echo $thename?>"/> 
<meta name="twitter:image"  content="<?php echo $website_url?>/all-images/plugin-pix/connect-global-logistics.jpg"/> 
</head>
<body>
<?php include '../../header.php'?>

<div class="other-pages-title" data-aos="fade-down" data-aos-duration="1200">
	<div class="inner-div">
        <div class="content" data-aos="zoom-in" data-aos-duration="1200">
            <div class="top-title-div">
                <div class="div-in">
					<ul>
						<a href="<?php echo $website_url?>"><li>Home <i class="bi-caret-right-fill"></i></li></a>
						<a href="<?php echo $website_url?>/tourism-products" title="Tourism Products"><li> Tourism Products <i class="bi-caret-right-fill"></i></li></a>
						<a href="<?php echo $website_url?>/tourism-products/tradition" title="Tradition"><li id="tourism_products_url"> Tradition </li></a>
					</ul>
                </div>			
            </div>

			<h1 class="border"><span id="tourism_products_name"></span></h1>	
			<p id="tourism_products_summary"></p>
            <a href="<?php echo $website_url ?>/#" title="Bookings">
			<button class="btn" title="Bookings">BOOKINGS</i></button></a>
        </div>
        <div class="image-back-div">
            <div class="left-img natural-tourism-left-img">
                <img src="<?php echo $website_url?>/all-images/body-pix/tradition1.jpg" alt="about-us-image"/>
            </div>

            <div class="top-img natural-tourism-top-img">
                <img src="<?php echo $website_url?>/all-images/body-pix/tradition2.jpg" alt="about-us-image"/>
            </div>

            <div class="bottom-img natural-tourism-bottom-img">
                <img src="<?php echo $website_url?>/all-images/body-pix/tradition3.jpg" alt="about-us-image"/>
            </div>
        </div>		
    </div>
	<script> _get_each_tourist_products('each_tradition');</script>
</div> 


<section class="other-pages-content-div">
	<section class="body-div harsh-bg display-none">
		<div class="body-div-in">
            <div class="details-back-div"> 
				<div class="details-div" id="pane_tradition"> 
                    <div class="tradition-back-div pg-tradition-back-div">
						<div class="left-tradition-div">
							<img src="<?php echo $website_url?>/all-images/body-pix/service.jpeg" alt="service" />
							
							<div class="overlay-div">
								<h2>TRADITIONS</h2>
							</div>
                		</div>

						<div class="right-tradition-div">
                    		<div class="right-tradition-back-div">
								<div class="cg-carousel">
									<div class="cg-carousel__container" id="js-carousel_2">                
										<div class="cg-carousel__track js-carousel__track" id="fetch_main_tradition">
											<script>_get_main_tradition();</script>   
										</div>
									</div>
								</div>	
								<button class="right-btn" title="Next" id="js-carousel__prev_2"><i class="bi-chevron-double-right"></i></button>
                    			<button class="right-btn left-btn" title="Previous" id="js-carousel__next_2"><i class="bi-chevron-double-left"></i></button>
							</div>						
						</div>
                    </div>
<script>
	window['carousel_options_2']= ({
        items:1,
            margin: 30,
            loop:true,
            dots: true,
            autoplayHoverPause: true,
            smartSpeed:650,         
            autoplay:true,      
            breakpoints: {
                700: {
		slidesPerView: 1,
		},
        1000: {
		slidesPerView: 2,
		},
		1300: {
		slidesPerView: 2,
		}
	
        }
    });
</script>  
                </div>
			</div> 
		</div>
	</section>

	<section class="body-div">
		<div class="body-div-in">
			<div class="gen-content-back-detail">
				<div class="left-div">
					<div class="content-back-div">
						<div class="fetch" id="fetch_all_tradition">
							<script> _get_bottom_tradition_page();</script>                  
						</div>	
					</div>
				</div>
				
				<div class="right-div sticky-div">
					<div class="inner-div">
						<h4>POPULAR TOURISM PRODUCTS</h4>

							<div class="fetch" id="fetch_related_tourism_products">
								<script>_get_related_tourism_products();</script>                  
							</div>

						<a href="<?php echo $website_url ?>/tourism-products/" title="Tourism Products">
                        <button class="btn" title="Tourism Products">VIEW ALL TOURISM PRODUCTS </button></a>
					</div>
				</div>
				<br clear="all"/>

				<div class="cat-list-back-div">
					<div class="inner-div">
						<h4>CATEGORIES </h4>
						<a href="<?php echo $website_url ?>/tourism-products/tourist-attractions/" title="Tourist Attractions">
						<li>Tourist Attractions <span class="count" id="total_active_tourism_attraction_count">0</span></li></a>
						<a href="<?php echo $website_url ?>/tourism-products/entertainment/" title="Entertainment">
						<li>Entertainment <span class="count" id="total_active_entertainment_count">0</span></li></a>
						<a href="<?php echo $website_url ?>/tourism-products/sport/" title="Sport">
						<li>Sport <span class="count" id="total_active_sport_count">0</span></li></a>
						<a href="<?php echo $website_url ?>/tourism-products/culture/" title="Culture">
						<li>Culture <span class="count" id="total_active_culture_count">0</span></li></a>
						<a href="<?php echo $website_url ?>/tourism-products/tradition/" title="Tradition">
						<li>Tradition <span class="count" id="total_active_tradition_count">0</span></li></a>
						<a href="<?php echo $website_url ?>/tourism-products/natural-tourism-products/" title="Natural Tourism Products">
						<li>Natural Tourism Products <span class="count" id="total_active_natural_tourism_product_count"></span></li></a>
						<a href="<?php echo $website_url ?>/tourism-products/tourist-destination/" title="Tourist Destinations">
						<li>Tourist Destinations <span class="count" id="total_active_tourism_destination_count">0</span></li></a>
						<a href="<?php echo $website_url ?>/tourism-products/event/" title="Event">
						<li>Event <span class="count" id="total_active_event_count">0</span></li></a>
					</div>
					<script>_get_tourism_products_count();</script>
				</div>
			</div>
		</div>
    </section>
</section>
<br clear="all"/>

<section class="footer">
	<?php include '../../footer.php'?>
</section>

<?php include '../../bottom-scripts.php'?>

</body>
</html>


