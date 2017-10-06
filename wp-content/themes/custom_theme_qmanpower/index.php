    <?php get_header(); ?>

      <div ng-Controller="indexCtrl" flex="100" layout="column">
        <md-toolbar hide-xs hide-sm class="md-small-tall md-whiteframe-1dp" class="header" style="background-color:#2DAEE7;position: fixed;z-index: 999;display:block" layout="row">
          <div flex hide-xs hide-sm style="float:left">
          <img flex-offset="5" src="<?php echo get_template_directory_uri();?>/assets/logo.jpg" style="vertical-align:middle"/>
          </div>
          <div flex hide-xs hide-sm style="float:right">
              <ul class="navbar">
                <li><a style="cursor:pointer;" ng-click="goto('Home')">Home</a></li>
                <li><a style="cursor:pointer;" ng-click="goto('About')">About</a></li>
                <li><a style="cursor:pointer;" ng-click="goto('Services')">Services</a></li>
                <li><a style="cursor:pointer;" ng-click="goto('Associates')">Associates</a></li>
                <li><a style="cursor:pointer;" ng-click="gotocontact()">Contact</a></li>
              </ul>
          </div>
        </md-toolbar>

        <md-toolbar hide-md hide-gt-md class="md-small-tall md-whiteframe-1dp" class="header" style="background-color:#2DAEE7;position: fixed;z-index: 999;" layout="column">
            <div flex>
            <center>
                <img src="<?php echo get_template_directory_uri();?>/assets/logo.jpg"/>
            </center>
            <md-divider></md-divider>
            </div>
            <div class="mini-navbar" flex layout="row" layout-padding style="background-color: #A4516B;">
                <div flex style="cursor:pointer;" ng-click="goto('Home')"><center><span>Home</span></center></div>
                <div flex style="cursor:pointer;" ng-click="goto('About')"><center><span>About</span></center></div>
                <div flex style="cursor:pointer;" ng-click="goto('Services')"><center><span>Services</span></center></div>
                <div flex style="cursor:pointer;" ng-click="goto('Associates')"><center><span>Associates</span></center></div>
                <div flex style="cursor:pointer;" ng-click="gotocontact()"><center><span>Contact</span></center></div>
            </div>
        </md-toolbar>
        <!-- Home -->
        <div id="Home" ng-show="currState == 'Home'" flex>
            <br/><br/><br/>
            <div hide-md hide-gt-md><br/><br/><br/></div>
        	<ul style="list-style-type: none; margin: 0; padding: 0">
        	<?php dynamic_sidebar( 'widgetmasterslider' ); ?>
        	</ul>
        </div>

        <div ng-show="currState == 'Home'" layout-padding flex>    
            <center>
            <h2>Our Business Philosophy</h2>
            </center>
            <p style="margin-left: 5%; margin-right: 5%">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat gravida erat quis pretium. Fusce id egestas neque. Cras pretium pretium magna quis sollicitudin. Aliquam tempor justo nisi, lacinia dictum diam scelerisque scelerisque. Pellentesque fermentum risus ac pellentesque dapibus. Morbi tortor metus, bibendum sed congue sit amet, laoreet quis lorem. Pellentesque lacinia felis id lectus fringilla pharetra. Suspendisse eget ultricies orci, a mattis purus. Sed vulputate elementum vulputate. Mauris vel euismod dui, eu tempor lectus. Morbi augue metus, aliquet ac ligula eu, congue dapibus odio. Cras luctus velit vel nibh placerat, et ultricies ipsum gravida. In hac habitasse platea dictumst. Nunc velit quam, molestie sed gravida quis, cursus at dui. Vestibulum purus turpis, mattis sit amet orci sit amet, laoreet efficitur augue. Pellentesque sodales nunc eu est volutpat, id sodales purus posuere.
            </p>
        </div>

        <!-- About -->
        <div id="About" ng-show="currState == 'About'" flex layout-padding class="md-whiteframe-1dp">
        <br/><br/><br/>
        <div hide-md hide-gt-md><br/><br/><br/></div>
        <center>
        <h2>About</h2>
        </center>
        <p style="margin-left: 5%; margin-right: 5%">
        	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat gravida erat quis pretium. Fusce id egestas neque. Cras pretium pretium magna quis sollicitudin. Aliquam tempor justo nisi, lacinia dictum diam scelerisque scelerisque. Pellentesque fermentum risus ac pellentesque dapibus. Morbi tortor metus, bibendum sed congue sit amet, laoreet quis lorem. Pellentesque lacinia felis id lectus fringilla pharetra. Suspendisse eget ultricies orci, a mattis purus. Sed vulputate elementum vulputate. Mauris vel euismod dui, eu tempor lectus. Morbi augue metus, aliquet ac ligula eu, congue dapibus odio. Cras luctus velit vel nibh placerat, et ultricies ipsum gravida. In hac habitasse platea dictumst. Nunc velit quam, molestie sed gravida quis, cursus at dui. Vestibulum purus turpis, mattis sit amet orci sit amet, laoreet efficitur augue. Pellentesque sodales nunc eu est volutpat, id sodales purus posuere.
            <br/><br/>
			Nulla quis libero pretium, dictum justo sed, sodales diam. Morbi dui nulla, tempor ut blandit sed, tristique et quam. Mauris varius eget sapien at ullamcorper. Mauris a risus hendrerit, elementum quam id, feugiat metus. Duis in ligula nec lorem vulputate accumsan sit amet sit amet nisi. Vestibulum pharetra aliquam velit at molestie. Proin dictum magna sapien, non tempor quam malesuada non.
            <br/><br/>
			Mauris ut est ante. Vivamus ut massa faucibus arcu ultricies tincidunt et in nunc. Aenean nec tellus nec erat finibus dapibus. Quisque mattis pellentesque dolor, nec accumsan ipsum dignissim ac. Curabitur nulla arcu, luctus ac faucibus quis, pharetra quis nulla. Duis venenatis libero id aliquet dignissim. Nulla fermentum hendrerit dolor, quis lacinia nibh posuere malesuada. Duis id venenatis risus. Pellentesque vehicula scelerisque magna. Pellentesque vulputate orci ut mi viverra ornare. Pellentesque dictum congue purus a congue. Cras mollis eget erat et consectetur. Ut tristique, nibh non rutrum pellentesque, diam arcu sodales ante, id rhoncus libero sapien a mauris. Cras condimentum lorem urna, ut elementum orci scelerisque nec. Suspendisse posuere ex sem, sed gravida diam pellentesque eu.
        </p>
        </div>

        <!-- Services -->
        <div id="Services" ng-show="currState == 'Services'" flex layout-padding class="md-whiteframe-1dp">
            <br/><br/><br/>
            <div hide-md hide-gt-md><br/><br/><br/></div>
	        <center>
	        <h2>Services</h2>
	        </center>
	        <div flex layout="row">
	        	<div flex layout-padding>
	        		<p>
	        			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat gravida erat quis pretium. Fusce id egestas neque. Cras pretium pretium magna quis sollicitudin. 
	        		</p>
	        	</div>
	        	<div flex layout-padding class="md-whiteframe-1dp" style="background-color: #2DAEE7; color: #ffffff">
	        		<p>
	        			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat gravida erat quis pretium. Fusce id egestas neque. Cras pretium pretium magna quis sollicitudin. 
	        		</p>
	        	</div>
	        	<div flex layout-padding>
	        		<p>
	        			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat gravida erat quis pretium. Fusce id egestas neque. Cras pretium pretium magna quis sollicitudin. 
	        		</p>
	        	</div>
	        </div>
            <br/>
            <md-divider></md-divider>
            <center>
                <h2>Our Clients</h2>

                <div class="autoplay">
                  <div ng-repeat="img in images">
                      <img src="{{img.src}}" class="img-responsive" height="50"/>
                  </div>
                </div>

                <script type="text/javascript">
                    $(document).ready(function(){
                        $('.autoplay').slick({
                            dots: true,
                            infinite: true,
                            speed: 700,
                            autoplay:true,
                            autoplaySpeed: 2000,
                            arrows:true,
                            slidesToShow: 5,
                            slidesToScroll: 1
                         });
                    });
                </script>
            </center>
        </div>

        <!-- Associates -->
        <div id="Associates" ng-show="currState == 'Associates'" flex layout-padding class="md-whiteframe-1dp">
            <br/><br/><br/>
            <div hide-md hide-gt-md><br/><br/><br/></div>
        	<center>
        		<h2>Our Associates</h2>
        	</center>
        	<br/>
        	<center>
        		<ul style="list-style-type: none; margin: 0; padding: 0">
        		<?php dynamic_sidebar( 'widgetclientslocation' ); ?>
        		</ul>
        	</center>
        	<div flex layout="row">
        		<div flex layout-padding>
        			<center>
        				<b>M.SHAHEEN TRAVELS</b>
        				<p>
        					Mouban Market Terminal Road, Sylhet - Bangladesh<br/>
        					Tel No: +880821815215, Fax No: +88082172210
        				</p>
        			</center>
        		</div>
        		<div flex layout-padding>
        			<center>
        				<b>SHAHEEN TRAVELS</b>
        				<p>
        					Gov't Approved Recruitment Agency<br/>
        					License No. 214<br/>
        					Mathizeel, Dhaka - Bangladesh<br/>
        					Mobile No.: +8801725827627<br/>
        					E-mail: shahin5402@yahoo.com
        				</p>
        			</center>
        		</div>
        	</div>
        </div>

      </div>

    </md-content>
    <?php get_footer(); ?>