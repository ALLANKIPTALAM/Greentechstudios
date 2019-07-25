@extends('layouts.indexlayout')
@section('content')

<div id="#top"></div>
<section id="home">
  <div class="banner-container"> 
  	<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><img src="./images/sliding/banner-bg.jpg" alt="banner" /></div>
    <div class="item"><img src="./images/sliding/banner-bg2.jpg" alt="banner" /></div>
    <div class="item"><img src="./images/sliding/banner-bg3.jpg" alt="banner" /></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>
</div>
	
  </div>  
  
  <div class="container hero-text2">
  <h3>Services</h3>
  </div>
</section>
<section id="services" class="page-section colord">
  <div class="container">
    <div class="row"> 
									
      <!-- item -->
      <div class="col-md-3 text-center"><i class="circle"> <img src="images/2.png" alt="" /></i>
        <h3>Construction Consulting</h3>
        <p>Construction consulting.</p>
      </div>
      <!-- end: -->

      <!-- item -->
      <div class="col-md-3 text-center"> <i class="circle"><img src="images/5.png" alt="" /></i>
        <h3>New Projects</h3>
        <p>We do pre-construction planning of new projects.</p>
      </div>
      <!-- end: --> 
      
      <!-- item -->
      <div class="col-md-3 text-center"><i class="circle"> <img src="images/home.png" alt="" /></i>
        <h3>Architectural Design</h3>
        <p>We do architectural design of new projects.</p>
      </div>
      <!-- end: -->  
      
      <!-- item -->
      <div class="col-md-3 text-center"><i class="circle"> <img src="images/3.png" alt="" /></i>
        <h3>Design and Build</h3>
        <p>Design and build.</p>
      </div>
      <!-- end:--> 
    </div>
  </div>
  <!--/.container--> 
</section>
<section id="aboutUs">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2>About Us</h2>
    </div>
    <div class="row feature design">
      <div class="area1 columns right">
        <h3>Clean and Modern Design.</h3>
        <p><strong style="color: green;">Greentech Studios </strong> is one of the most influential architecture, interior design, engineering, and urban planning firm. We are a full service design firm whose work includes residences, commercial design, academic buildings, interior design and landscape design. We are renowned for our iconic buildings and our commitment to design excellence, innovation, and sustainability.<br>The firm is led by Nehemiah Koech who is supported by several associates</p>
        <p>At <strong style="color: green;">Greentech Studios </strong>,we believe that world-class design and building performance are intrinsically connected. Our humanistic approach to sustainable design acknowledges that performance is driven by people, place and program. By blurring the boundaries between inside and outside, our buildings connect people to nature, leading to healthy and productive environments where individuals are engaged in their sorroundings.  </p>
          <a href="#" class="btn btn-lg">Request Quote</a>
      </div>
      <div class="area2 columns feature-media left"> <img src="images/feature-img-1.png" alt="" width="100%"> </div>
    </div>
    <div class="row dataTxt">	
						<div class="col-md-6 col-sm-6">
							<h4>What We Do?</h4>
							<ul class="listArrow">
                <li>ARCHITECTURE </li>Regardless of scale, Greentech Studios approaches each project with strong technical knowledge and a passionate attention to detail. Our company establishes a personal investment in each design and carefully maintains quality craftsmanship precisely within any budget. 

              <li>INTERIOR DESIGN</li>We begin by listening to the client's needs and use that conversation for the framework of the interior design process. We provide renderings, animated walk-throughs, material boards, and even mock-ups to ensure the quality and selection meets everyone's expectations. We are credited with having a keen attention to detail and distinguished technical understanding for all elements involved in the design. </p>

              <li>SUSTAINABLE DESIGN</li>We are committed to offering the most efficient and productive solution to any design challenge. A perfect balance of active and passive sustainable strategies are not just a tool we keep in our shed. They are a moral principle deeply ingrained in the programmatic character of our business.</p>

              <li>PLANNING</li> Our experience in Master Planning, Urban Planning, and Facility Assessment is extensive, varying from Residential Compounds to large scale Healthcare Campus, City Planning, and Public Parks. We believe these studies and evaluations are essential to any project by providing, thorough documentation and studies, the clarity, efficiency, and framework needed to maximize the success of a project</p>
							
							<br>
              </ul>
						</div>
						
						<div class="col-md-6 col-sm-6">
							
							<h4>Why Choose Us?</h4>
                            <ul class="listArrow">
								<li>Communication – we consistently keep our clients informed; our responsiveness to your enquiries is second to none.</li>
								<li>We're agile and efficient - Being a smaller business allows us to be flexible in our approach and tailor design solutions to your specific project needs. We specialise in delivering project documentation with tight deadlines and being accessible with next to no notice.</li>
								<li>Quality - You will receive a well drafted, coordinated and complete set of drawings for your project. These drawings will exceed the requirements to obtain a building permit and meet your contractors’ needs to provide accurate pricing and execution.</li>
								<li>We're easy to work with - Personable long term relationships mean we can be an extension of our client's team with trusted reliable service. We pride ourselves on talking in laymen’s terms, being down to earth, and for our active listening to your needs.</li>
								<li>We're experienced - We have a team of experienced senior architects each with experience in the industry. We only employ staff who are dedicated to delivering exceptional architectural service. Clients work directly with Principals or experienced senior staff on all projects to ensure a quality personalised service. We are known to think ahead and foresee risks and costs before they have a chance of raising their heads!</li>
							</ul>
							<!-- Accordion starts -->
							</div>
						
					</div>
  </div>
</section> 
<section id="work" class="page-section page">
  <div class="container text-center">
    <div class="heading">
      <h2>Projects</h2>
      <p>Some of the projects we have done so far.</p>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="portfolio">
          <ul class="filters list-inline">
            <li> <a class="active" data-filter="*" href="#">All</a> </li>
            <li> <a data-filter=".photography" href="#">Architecture</a> </li>
            <li> <a data-filter=".branding" href="#">Interior</a> </li>
            <li> <a data-filter=".web" href="#">Exterior</a> </li>
            <li> <a data-filter=".landscaping" href="#">Landscaping</a> </li>
          </ul>
          <ul class="items list-unstyled clearfix animated fadeInRight showing" data-animation="fadeInRight" style="position: relative; height: 438px;">
          	
       
			  
			  
			 
			  
			@foreach($Architecture_images as $Architecture_image)  
            <li class="item photography" style="position: absolute; left: 292px; top: 0px;"> 
			<figure class="effect-bubba">
						<img src="{{ $Architecture_image->location }}" alt="image" width="800" height="600" />
						<figcaption>
							<h2>{{ $Architecture_image->caption }}</h2> 
							<a href="{{ $Architecture_image->location }}" class="fancybox">View more</a> 
						</figcaption>			
					</figure> 
			  </li>
			  @endforeach
			 @foreach($Interior_images as $Interior_image)  
            <li class="item branding" style="position: absolute; left: 585px; top: 0px;"> 
			<figure class="effect-bubba">
						<img src="{{ $Interior_image->location }}" alt="image"/>
						<figcaption>
							<h2>{{ $Interior_image->caption }}</h2> 
							<a href="{{ $Interior_image->location }}" class="fancybox">View more</a> 
						</figcaption>			
					</figure>  
			  </li>
			  @endforeach
           
			  @foreach($Exterior_images as $Exterior_images)
            <li class="item web" style="position: absolute; left: 292px; top: 219px;"> 
			<figure class="effect-bubba">
						<img src="{{ $Exterior_images->location }}" alt="image"/>
						<figcaption>
							<h2>{{ $Exterior_images->caption }}</h2> 
							<a href="{{ $Exterior_images->location }}" class="fancybox">View more</a> 
						</figcaption>			
					</figure> 
			  </li>
			  @endforeach

			  @foreach($Landscaping_images as $Landscaping_images)
            <li class="item landscaping" style="position: absolute; left: 292px; top: 219px;"> 
			<figure class="effect-bubba">
						<img src="{{ $Landscaping_images->location }}" alt="image"/>
						<figcaption>
							<h2>{{ $Landscaping_images->caption }}</h2> 
							<a href="{{ $Landscaping_images->location }}" class="fancybox">View more</a> 
						</figcaption>			
					</figure> 
			  </li>
			  @endforeach
           

           
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="plans" class="page-section">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2>Features</h2>
    </div>
    <div class="row flat">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <ul class="plan plan1">
          <li class="plan-name">Architecture </li>
          <li class="plan-price"> <img src="images/work/architecture.jpg" alt=""> </li>
          <li> <strong>The architectural staff approaches building performance with an intuitive sensibility, employing advanced software tools to test and challenge this intuition. We use a wide variety of analytical tools at various stages of the design process to understand a building's energy use, thermal comfort, materials impact, natural ventilation, daylight management and a host of other performance considerations.</strong> </li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <ul class="plan plan2">
          <li class="plan-name">Interior </li>
          <li class="plan-price"> <img src="images/work/interior.jpg" alt=""> </li>
          <li> <strong>The architectural staff approaches building performance with an intuitive sensibility, employing advanced software tools to test and challenge this intuition. We use a wide variety of analytical tools at various stages of the design process to understand a building's energy use, thermal comfort, materials impact, natural ventilation, daylight management and a host of other performance considerations. </strong></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <ul class="plan plan3">
          <li class="plan-name">Landscaping </li>
          <li class="plan-price"> <img src="images/work/landscaping.jpg" alt=""> </li>
          <li> <strong>The architectural staff approaches building performance with an intuitive sensibility, employing advanced software tools to test and challenge this intuition. We use a wide variety of analytical tools at various stages of the design process to understand a building's energy use, thermal comfort, materials impact, natural ventilation, daylight management and a host of other performance considerations. </strong></li>
        </ul>
      </div>

    </div>
  </div>
</section>
<section id="team" class="page-section">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2>Team</h2>
    </div>
    <!-- Team Member's Details -->
    <div class="team-content">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <div class="member-img"> 
              <!-- Image  --> 
              <img class="img-responsive" src="images/profile.jpg" alt=""> </div>
            <!-- Member Details -->
            <div class="team-title">
			<h4>Koech Sabila</h4>
            <!-- Designation --> 
            <span class="pos">CEO</span>
			</div>
            <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <div class="member-img"> 
              <!-- Image  --> 
              <img class="img-responsive" src="images/profile.jpg" alt=""> </div>
            <!-- Member Details -->
            <h4>John Doe</h4>
            <!-- Designation --> 
            <span class="pos">Art Director</span>
            <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <div class="member-img"> 
              <!-- Image  --> 
              <img class="img-responsive" src="images/profile.jpg" alt=""> </div>
            <!-- Member Details -->
            <h4>Nehemiah</h4>
            <!-- Designation --> 
            <span class="pos">Manager</span>
            <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <div class="member-img"> 
              <!-- Image  --> 
              <img class="img-responsive" src="images/profile.jpg" alt=""> </div>
            <!-- Member Details -->
            <h4>Joan Ray</h4>
            <!-- Designation --> 
            <span class="pos">Creative</span>
            <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/.container--> 
</section>











<h1>Testimonials</h1>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
      
<!-- Bottom Carousel Indicators -->
<ol class="carousel-indicators">
  <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
  <li data-target="#quote-carousel" data-slide-to="1"></li>
  <li data-target="#quote-carousel" data-slide-to="2"></li>
</ol>
        
<!-- Carousel Slides / Quotes -->
<div class="carousel-inner">

<!-- Quote 1 -->
<div class="item active">
  <div class="row">
    <div class="col-sm-12">
      <img class="avatar" src="images/caleb.jpg" alt="Avatar">
      <p>&ldquo;Thank you for my beautiful house. You achieved far more than I expected with the internal design concept. I wanted to drop you a note to say thank you for designing such a spectacular and perfect house. I keep looking at it from the garden and marvelling at how amazing it looks. And inside every room works as it should and the space you have created is just perfect. Good job.&rdquo;</p>
      <strong>Caleb Mwanga</strong>
    </div>
  </div>
</div>

<!-- Quote 2 -->
<div class="item">
  <div class="row">
    <div class="col-sm-12">
      <img class="avatar" src="images/profile.jpg" alt="Avatar">
      <p>&ldquo;They are outstanding at what they do and follow through on all assignments. They are always open to the staff and community input and developing the plans. Most importantly, the work is accurate and timely. Our lead architect knows the key ingredients of successful facility planning and what it takes to work with clients to get results. As a member of the design team, he consistently inspires creativity, teamwork and open communication. I highly recommend this firm to potential clients as we continue to use their services.&rdquo;</p>
      <strong>Sabila Koech</strong>
    </div>
  </div>
</div>

<!-- Quote 3 -->
<div class="item">
  <div class="row">
    <div class="col-sm-12">
      <img class="avatar" src="images/simatwa.jpg" alt="Avatar">
      <p>&ldquo;They listen. They react. They accommodate. Early on in the design process we became aware that our wish list was larger than our budget. FGM developed a multi-optioned phase in plan that provided a road map for future expansion. They were remarkable in their ability to meet various challenges while staying within our budget.&rdquo;</p>
      <strong>Coolest Twitter Duo</strong>
    </div>
  </div>
</div>
  
</div>
        

      </div>                          
    </div>
  </div>
</div>







<section id="sampleVideo">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2>Sample Video</h2>
    </div>
    <div class="row feature design">
      <div class="area1 columns right">
        <h3>Clean and Modern Design.</h3>
        <p> The University of Chicago sample video
        Reception, lounge, cafe, conference room, facility lounge, research, classroom, lecture hall and offices</p>
      </div>
      <div class="area2 columns feature-media left">
      	<video style="height: 100%; width: 100%" id="multiCodec"
                                           poster="media/newdelhi.png" controls="controls" preload="none">
                                        <!-- id could be any according to you -->
                                        <!-- MP4 source must come first for iOS -->
                                        <source type="video/mp4" src="./media/University of Chicago - New Delhi Branch.mp4"/>
                                        <!-- WebM for Firefox 4 and Opera -->
                                        <source type="video/webm" src="media/big_buck_bunny.webm"/>
                                        <!-- OGG for Firefox 3 -->
                                        <source type="video/ogg" src="media/big_buck_bunny.ogv"/>
                                        <!-- Fallback flash player for no-HTML5 browsers with JavaScript turned off -->
                                        <object type="application/x-shockwave-flash" data="media/flashmediaelement.swf"
                                                style="width: 100%; height: 100%;">
                                            <param name="movie" value="media/flashmediaelement.swf"/>
                                            <param name="flashvars"
                                                   value="controls=true&amp;poster=media/newdelhi.png&amp;file=media/University of Chicago - New Delhi Branch.mp4"/>
                                            <!-- Image fall back for non-HTML5 browser with JavaScript turned off and no Flash player installed -->
                                            <img src="media/newdelhi.png" alt="Media"
                                                 title="No video playback capabilities"
                                                 style="width: 100%; height: 100%;">
                                        </object>
                                    </video>
   </div>
    </div>
  </div>
</section> 

<section id="contactUs" class="contact-parlex">
  <div class="parlex-back">
    <div class="container">
      <div class="row">
        <div class="heading text-center"> 
          <!-- Heading -->
          <h2>Contact Us</h2>
        </div>
      </div>
      <div class="row mrgn30">

      	<form id="contactfrm" role="form" action="{{ URL::to('index/message')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
          <div class="col-sm-12">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)">
                @if ($errors->has('name'))
                    <span class="help-block">
                        <span style="color: red;">{{ $errors->first('name') }}</span>
                    </span>
                @endif
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address" data-rule="email" >
                @if ($errors->has('email'))
                    <span class="help-block">
                        <span style="color: red;">{{ $errors->first('email') }}</span>
                    </span>
                @endif
            </div>
            <div class="form-group">
              <label for="comments">Message</label>
              <textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)" data-rule="required" ></textarea>
                @if ($errors->has('comment'))
                    <span class="help-block">
                        <span style="color: red;">{{ $errors->first('comment') }}</span>
                    </span>
                @endif

              <button name="postComment" type="submit" class="btn btn-primary" id="submit">Submit</button>
            </div>
            <div class="result"></div>
          </div>
        </form>
      </div>
    </div>
    <!--/.container--> 
  </div>
</section>

	
	@endsection()