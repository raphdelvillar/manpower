<?php wp_footer(); ?>

<md-toolbar id="contact" class="md-small-tall" style="background-color: #EEEEEE;color: black;">
		<md-divider></md-divider>
		<center>
			<h2>Contact Us</h2>
		</center>
		<div layout="row" layout-xs="column" layout-sm="column">
		<div flex-xs="100" flex-sm="100" flex-md="50" flex="50" layout-padding layout="column" style="flex-basis: auto;">
                <div class="md-whiteframe-1dp" style="background-color:#000000; color:#ffffff">
                	<center><h3>Business Query</h3></center>
                </div>
                <div class="md-whiteframe-1dp" flex id="contact-form" style="background-color:#ffffff">
                	<ul style="list-style-type: none; margin: 0; padding: 0">
          				<?php dynamic_sidebar( 'widgetscontactform' ); ?>
					</ul>
                </div>
        </div>
		<div flex-xs="100" flex-sm="100" flex-md="50" flex="50" layout-padding layout="column" style="flex-basis: auto;">
                <div class="md-whiteframe-1dp" style="background-color:#000000; color:#ffffff">
                    <center><h3>Location Map</h3></center>
                </div>
                <div class="md-whiteframe-1dp" flex id="contact-map" style="background-color:#ffffff">
                	<br/>
                	<center>
                	<ul style="list-style-type: none; margin: 0; padding: 0">
	          			<?php dynamic_sidebar('widgetscontactusmap'); ?>
					</ul>
					</center>
					<md-list>
			        <md-divider></md-divider>
			        <md-list-item> 
			            <img src="<?php echo get_template_directory_uri();?>/assets/social-media-icons/messages.png"
		                height="32">
			            <div flex-offset="5" class="md-list-item-text">
			                <h6>
			                Building No. 13, Next to Mcdonald's Fastfood, Abdul Rahman Bin Jassim Street, <br/>Near Wakrah Health Center Rounabout, Wakrah City, Doha - Qatar
			                </h6> 
			            </div>
			        </md-list-item>
			        <md-divider></md-divider>
			        <md-list-item>
			            <img src="<?php echo get_template_directory_uri();?>/assets/social-media-icons/phone (1).png"
		                height="32">
			            <div flex-offset="5" class="md-list-item-text">
			                <h6>+974 44763411</h6> 
			            </div>
			        </md-list-item>
			        <md-divider></md-divider>
			        <md-list-item>
			            <img src="<?php echo get_template_directory_uri();?>/assets/social-media-icons/email.png"
		                height="32">
			            <div flex-offset="5" class="md-list-item-text">
			                <h6>qualitymanpowerservices@gmail.com</h6>
			            </div>
			        </md-list-item>
			    	</md-list>
                </div>
        </div>
        </div>
        <md-divider></md-divider>
        <center style="background-color:#000000; color:#ffffff">
        	<br/>
        	<div flex="30" flex-xs="100" flex-sm="75" layout-padding layout="row">
		        <div flex>
		            <a href="https://www.facebook.com/quality.manpower.75">
		                <img src="<?php echo get_template_directory_uri();?>/assets/social-media-icons/fb.png" 
		                class="img-responsive">
		            </a>
		        </div>
		        <div flex>
		            <a href="https://twitter.com/qualitymanpower">
		                <img src="<?php echo get_template_directory_uri();?>/assets/social-media-icons/tw.png" 
		                class="img-responsive">
		            </a>
		        </div>
		        <div flex>
		            <a href="https://www.instagram.com/qualitymanpowerservices">
		                <img src="<?php echo get_template_directory_uri();?>/assets/social-media-icons/ig.png" 
		                class="img-responsive">
		            </a>
		        </div>
		        <div flex>
		            <a href="#">
		                <img src="<?php echo get_template_directory_uri();?>/assets/social-media-icons/yt.png" 
		                class="img-responsive">
		            </a>
		        </div>
		        <div flex>
		            <a href="whatsapp://send?text=Hello!&phone=+97444763411&abid=+97444763411">
		                <img src="<?php echo get_template_directory_uri();?>/assets/social-media-icons/whatsapp2.png"
		                class="img-responsive">
		            </a>
		        </div>
		        <!--
		        <div flex>
		            <a href="#">
		                <img src="<?php //echo get_template_directory_uri();?>/assets/social-media-icons/gp.png" class="img-responsive">
		            </a>
		        </div>
		        -->
		        <div flex>
		            <a href="#">
		                <img src="<?php echo get_template_directory_uri();?>/assets/social-media-icons/tumblr.png" 
		                class="img-responsive">
		            </a>
		        </div>  
		    </div>
        	<div flex><h6>Copyright &#169; 2017, Quality Manpower. All rights reserved</h6></div>
        </center>
</md-toolbar>
<!-- Custom Scripts -->
<script src="<?php echo get_template_directory_uri();?>/custom/init.js"></script>
<script src="<?php echo get_template_directory_uri();?>/custom/index.js"></script>
<!-- About -->
<script src="<?php echo get_template_directory_uri();?>/import/textrotate.js"></script>

</body>
</html>