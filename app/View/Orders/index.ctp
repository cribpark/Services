

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
                        	<div id="back"><a href="http://www.cribpark.com.ng"><<< Back to Shop</a></div>
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
            </div>
        </div>
    	

        
       
        <!-- FOOTER -->
        <div id="outerfooter">
        	<div class="container">
        	<div id="footercontainer" class="twelve columns">
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
