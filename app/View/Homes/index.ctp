

<div id="bodychild">
	<div id="outercontainer">
    
        <!-- HEADER -->
        <div id="outerheader">
            <div id="outertheheader">
                
                <header id="top">
                    <div class="container">
                        <div class="twelve columns">
                            <div id="logo"  class="three columns alpha"><a href="#"><?php echo $this->Html->image('logo.gif', array('alt'=>'logo'))?></a></div>
                            <!--
                            <section id="navigation">
                                <nav id="nav-wrap">
                                    <ul id="topnav" class="sf-menu">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About</a>
                                            <ul>
                                                <li><a href="element.html">Elements</a></li>
                                                <li><a href="single.html">Blog Details</a></li>
                                                <li><a href="support.html">Support</a></li>
                                                <li><a href="#">Dropdown</a>
                                                    <ul>
                                                        <li><a href="#">Only</a></li>
                                                        <li><a href="#">Example of</a></li>
                                                        <li><a href="#">The Dropdown</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li class="current"><a href="contact.html">Contact</a></li>
                                    </ul><!-- topnav -->
                                    <!--
                                </nav><!-- nav -->	
                                <!--
                                <div class="clear"></div>
                            </section>
                            -->
                        </div>
                    </div>
                    <div class="clear"></div>
                </header>
                
                <div id="pagetitlecontainer">
                    <div class="container">
                    	<div class="twelve columns">
                        	<!--<div id="back"><a href="http://www.cribpark.com.ng"><<< Back to Shop</a></div> -->
                            <ul id="topnav" class="sf-menu">

                              <li><a href='http://www.cribpark.com.ng'>Back to Shop</a></li>
                              <li><a href="#howisworks">How it works</a></li>
                              <li><a href="#testimonial">Testimonial</a></li>
                              <li><a href="#features">Partners</a></li>
                              <li><a href="pricing.html">FAQs</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>    
        </div>
        <!-- END HEADER -->
         <?php //$this->Html->script('order', array('block' => 'scriptBottom')); ?>

        
        <!-- MAIN CONTENT -->
        <div id="outermain">
        	<div class="container">
        	<section id="maincontent" class="twelve columns">
				<section id="content" class="positionleft eight columns alpha"> 
                	

                <div id="slidercontainer">
            	   <section id="slider">
                	
                         <div id="slideritems" class="flexslider">
                            <ul class="slides">
                                <li>                           	
                                    <?php echo $this->Html->image('banner1.jpg', array('alt'=>'logo', 'width'=>'587', 'height'=>'319'))?>
                                </li>
                                <li>
                            	   <?php echo $this->Html->image('banner2.jpg', array('alt'=>'logo', 'width'=>'587', 'height'=>'319'))?>
                                </li>
                                <li>
                            	   <?php echo $this->Html->image('banner3.jpg', array('alt'=>'logo', 'width'=>'587', 'height'=>'319'))?>
                                </li>
                            </ul>
                         </div>
                    
                    </section>
                 </div>

                <div class="separator shadow small"></div>
                                         
                        <div class="clear"></div>
                <div class="padcontent">


                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253682.53894798047!2d3.3975005!3d6.5482201499999935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8b2ae68280c1%3A0xdc9e87a367c3d9cb!2sLagos%2C+Nigeria!5e0!3m2!1sen!2srw!4v1422879974866" width="98%" height="305" style="margin:0 0 32px 0" class="imgborder"></iframe>
                 </div>

                </section><!-- end content -->



                <aside id="sidebar" class="positionright four columns omega">

                
                <h3 style="color:rgb(187, 8, 8)">Kindly fill the form below</h3>
                        <div id="">

                        	
                        	<?php echo $this->Form->create('Order', array('action'=>'index')); ?>
                        	<?php 
                        	$services = array('Plumbing'=>'Plumbing', 'Carpentry'=>'Carpentry', 'Electrician'=>'Electrician', 'Painting'=>'Painting', 'Home Moving'=>'Home Moving', 'Home Cleaning'=>'Home Cleaning', 'Gardening/Horticultural Services'=>'Gardening/Horticultural Services', 'Bricklaying/Mansory Work'=>'Bricklaying/Mansory Work', 'Sewage/Septic Tank Emptying'=>'Sewage/Septic Tank Emptying', 'Refridgerator/Air Conditioner Repairs/Maintenance'=>'Refridgerator/Air Conditioner Repairs/Maintenance','Renovation'=>'Renovation', 'Interior Designs'=>'Interior Designs', 'Architect'=>'Architect', 'Structural Engineers'=>'Structural Engineers');
                        	$location = array('Ikeja'=>'Ikeja', 'MaryLand'=>'MaryLand', 'Yaba'=>'Yaba', 'Surulere'=>'Surulere', 'Magodo'=>'Magodo', 'Victoria Island'=>'Victoria Island', 'Ikoyi'=>'Ikoyi', 'Lekki'=>'Lekki', 'Festac'=>'Festac', 'Palmgroove'=>'Palmgroove', 'Yaba'=>'Yaba', 'Iyana Ipaja'=>'Iyana Ipaja', 'Jibowu'=>'Jibowu');
                        	


                        	echo $this->Form->input('type of service', array('type'=>'select', 'options'=>$services, 'id'=>'type of service')); ?>
                        	<?php echo $this->Form->input('location', array('type'=>'select', 'options'=>$location, 'id'=>'location' )); ?>
                        	                                                                              
                            <?php echo $this->Form->input('name', array('placeholder'=>'Full Name', 'id'=>'name')); 
                            
                            echo $this->Form->input('phone no', array('placeholder'=>'Phone number', 'id'=>'phone no'));
                            echo $this->Form->input('email', array('type'=>'text', 'placeholder'=>'Email', 'id' => 'email'));
                            echo $this->Form->input('address', array('type'=>'textarea', 'maxlength'=>'200', 'id'=>'address'));
                            echo $this->Form->input('description', array('type'=>'textarea', 'maxlength'=>'200', 'id'=>'description'));
                            ?>
                            <br>
                        	<?php echo $this->Form->input('schedule',  array('type'=>'datetime-local', 'class'=>'schedule', 'id'=>'schedule')); ?>
                        	<br>
                           
                       

                            <?php   //echo $this->$facebook->share();?>
                            <?php echo $this->Js->submit('Send', array(
                            	'before'=>$this->Js->get('#sending')->effect('fadeIn'), 
                            	'success'=>$this->Js->get('#sending')->effect('fadeOut'),
                            	'update'=>'#success'));
                            ?>
                            <?php //echo $this->Form->end(); ?>

                            <div id='sending' style="display: none; background-color:light red; padding:4px;">Sending ...</div>
                            <div class="clear"></div>
                            <div id='success'></div>
                        </div><!-- end contactform -->
                
                </aside><!-- end sidebar -->
                <div class="clear"></div><!-- clear float --> 
            </section>
                
                    <div class="package-list">
                            <ul>
                                <li class="four columns alpha">
                                    <div class="paddsmall">
                                    <div id='howisworks'></div>
                                        <!--<h2>Bronze Package</h2>-->
                                        <div class="package-box">
                                            <?php echo $this->Html->image('how it works 1.jpg', array('alt'=>'step one'))?>
                                        </div>
                                    </div>
                                </li>
                                <li class="four columns">
                                    <div class="paddsmall">
                                        <!--<h2>Silver Package</h2>-->
                                        <div class="package-box">
                                            <?php echo $this->Html->image('how it works 2.jpg', array('alt'=>'step two'))?>                                         
                                        </div>
                                    </div>
                                </li>
                                <li class="four columns omega">
                                    <div class="paddsmall">
                                        <!--<h2>Gold Package</h2>-->
                                        <div class="package-box">
                                            <?php echo $this->Html->image('how it works 3.jpg', array('alt'=>'step three'))?>                                        
                                           
                                        </div>
                                    </div>
                                </li>

                                 <li class="four columns omega">
                                    <div class="paddsmall">
                                        <!--<h2>Gold Package</h2>-->
                                        <div class="package-box">
                                            <?php echo $this->Html->image('how it works 4.jpg', array('alt'=>'step four'))?>                                         
                                            
                                        </div>
                                    </div>
                                </li>
                               <div style="margin: 0 auto; padding-left:80px;"> <?php echo $this->Html->image('how it works bottom bar.jpg', array('alt'=>'buy'))?></div>
                            </ul>
                        <div class="clear"></div><!-- clear float --> 
                    </div>
                


                        <div class="testimonial">
                            <div id="testimonial">
                                    <p>
                                        <i> “Even Mariam testifies that Cribpark is Awesome, though she's leaving for Paris soon” - Mariam Muganga</i>
                                    </p>
                            </div>
                        </div>

                    <div class="package-list">
                            <ul>
                                <li class="three columns alpha">
                                    <div class="paddsmall">
                                    <div id="features"></div>
                                        <!--<h2>Buy</h2> -->
                                        <div class="funtionality-box">
                                        <a href="http://www.cribpark.com.ng"><?php echo $this->Html->image('buy.jpg', array('alt'=>'buy'))?></a>
                                            
                                        </div>
                                    </div>
                                </li>
                                <li class="three columns">
                                    <div class="paddsmall">
                                        <!--<h2>Design</h2>-->
                                        <div class="funtionality-box">
                                            <a href="http://www.cribpark.com.ng"><?php echo $this->Html->image('building.jpg', array('alt'=>'buy'))?></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="three columns omega">
                                    <div class="paddsmall">
                                       <!-- <h2>Construct</h2>-->
                                        <div class="funtionality-box">
                                            <a href="http://www.cribpark.com.ng"><?php echo $this->Html->image('design.jpg', array('alt'=>'buy'))?></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        <div class="clear"></div><!-- clear float --> 
                </div>
            </div>

        </div>
    	

        <style type="text/css">

        #logoParade{width: 728px; height: 75px; position: relative;}

        #logoParade div.scrollableArea a{display: block; float: left; padding-left: 10px;}

        </style>
        <script type="text/javascript">
            $(document).ready(function() {
            $("#logoParade").smoothDivScroll({ 
            autoScrollingMode: "always", 
            autoScrollingDirection: "endlessLoopRight", 
            autoScrollingStep: 1, 
            autoScrollingInterval: 25 
    });

    // Logo parade event handlers
    $("#logoParade").bind("mouseover", function() {
        $(this).smoothDivScroll("stopAutoScrolling");
    }).bind("mouseout", function() {
        $(this).smoothDivScroll("startAutoScrolling");
    });

});


        </script>

        
       
        <!-- FOOTER -->
        <div id="outerfooter">
        	<div class="container">
        	<div id="footercontainer" class="twelve columns">
            <br>
                        6th floor, <br>
                        294, Hebert Macaulay Way, <br>
                        Yaba, Lagos.<br>
                        Email: info@cribpark.com <br>
                        Telephone: +2348092542086 
            	<footer id="footer">Copyright &copy;<?php echo date('Y'); ?>. All Rights Reserved. Cribpark Systems Limimted</a></footer>
                <div id="toTop">^ Back to Top</div>
            </div>
            </div>
        </div>
        <!-- END FOOTER -->
        
	</div><!-- end outercontainer -->
</div><!-- end bodychild -->


<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
