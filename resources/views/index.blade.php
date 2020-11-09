@extends('layout')


@section('content')

			<!--banner-->	
		<div class="container">	
		      <!-- script-for-menu -->	  	 
				  <div class="banner-info">	
						 <div class="logo">
							  <a href="index.html"><h1>Sharmin Sultana </h1></a>
						  </div>
						<p> I'm a passionate Laravel Developer from Dhaka, Bangladesh.<lable> I am a hard-working professional with 1+ years of Experience and a proven knowledge of Laravel web development and web designing related works.</lable></p>
						<div class="scroll-down">
						 <h4>SCROLL DOWN</h4>
						<a class="downarrow scroll" href="#about"><span></span></a>
						</div>
				  </div>
			</div>
		</div>
	<!--about-->
	<div class="about" id="about">
	   <div class="container">
	   <h3 class="tittle">About Me</h3>
	      <div class="col-md-5 ab-grid pic">
		  <img src="{{asset('images/ab.jpg')}}" alt=" " title="ab" style="height: 34.4rem">
		  </div>
		  <div class="col-md-7 ab-grid text">
		    <h4>I am Sharmin Sultana.</h4>
			<p>Looking for opportunities to build my carrier that would help me in achieving greater practical excellence in software industry, exceptional with hardworking nature along with good communication skill to explore the requirements and come up with innovative solution.</p>
			<p><b>I know html5, CSS3, Bootstrap5, JavaScript, Jquery, PHP, MySql, Laravel</b> </p>
			<p>Problem solving<br>
				Logical thinking<br>
				Teamwork<br>
				Interpersonal Communication</p>
			<p><b>Field of Interest:</b> OOP, problem-solving, responsive Web Design</p>
			 
		  </div>
		  <div class="clearfix"> </div>
	   </div>
    </div>	   
	<!--//about-->
	<!--experience-starts-->
	<div class="experience" id="experience">
		<div class="container">
				<h3 class="tittle four">Education & Experience</h3>
				<div class="experience-main">
					<span class="devide-line"></span>
					<div class="experience-left">
						<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
						<h4>BACHELORE IN COMPUTER SCIENCE ENGINEERING</h4>
						<h5>INTERNATIONAL UNIVERSITY OF BUSINESS AGRICULTURE AND TECHNOLOGY [ 2016 - 2020 ]</h5>
						<p>CGPA: 3.63 (on scale of 4.00)</p>
					</div>
					<div class="experience-left-snd">
						<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
					</div>
					<div class="experience-right-snd">
						<h4>Web Developer</h4>
						<h5>Data Exposer (February 2019 – December 2019)</h5>
						<p><b>Key Responsibility:</b> Developed several websites for clients. PSD to html conversion. Designed multiple websites using unique design concept.</p>
					</div>
					<div class="experience-left-trd">
						<span class="glyphicon glyphicon-gift" aria-hidden="true"></span>
						<h4>Web Design and Development- PHP(Laravel)</h4>
						<h5>Trainning course by ICT Division; under Skills for Employment Investment Program (SEIP) Project</h5>
						<p>Venue: BASIS Institute of Technology & Management (BITM)  
						May, 2019 – August, 2019
						</p>
					</div>
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
	<!--experience-end-->

<!--my-skill-->
  <div class="my-skills text-center" id="skill">
	<div class="container">
		<h3 class="tittle">My Skills</h3>
		<div class="skill-grids">
					<div class="col-md-2 skills-grid text-center">
						<div class="circle" id="circles-3"></div>
						<p>Laravel</p>
					</div>
					<div class="col-md-2 skills-grid text-center">
						<div class="circle" id="circles-5"></div>
						<p>PHP</p>
					</div>
					<div class="col-md-2 skills-grid text-center">
						<div class="circle" id="circles-6"></div>
						<p>Html 5 / CSS 3</p>
					</div>	

					<div class="col-md-2 skills-grid text-center">
						<div class="circle" id="circles-4"></div>
						<p>Bootstrap</p>
					</div>
					
					<div class="col-md-2 skills-grid text-center">
						<div class="circle" id="circles-1"></div>
						<p>javascript / json</p>
					</div>
					<div class="col-md-2 skills-grid text-center">
						<div class="circle" id="circles-2"></div>
						<p>Illustrator</p>
					</div>
					
					
					
					
					<div class="clearfix"> </div>
				 <script type="text/javascript" src="{{asset('js/circles.js')}}"></script>
					         <script>
								var colors = [
										['#f6608a', '#ffffff'], ['#f6608a', '#ffffff'], ['#f6608a', '#ffffff'], ['#f6608a', '#ffffff'], ['#f6608a', '#ffffff'], ['#f6608a', '#ffffff']
									];
								for (var i = 1; i <= 7; i++) {
									var child = document.getElementById('circles-' + i),
										percentage = 30 + (i * 10);
										
									Circles.create({
										id:         child.id,
										percentage: percentage,
										radius:     80,
										width:      10,
										number:   	percentage / 1,
										text:       '%',
										colors:     colors[i - 1]
									});
								}
						
				</script>
		</div>
	</div>	
</div>
<!--//my-skill-->
<!-- projects -->
		<div class="projects" id="project">
			<div class="container">
				<div class="project-grids">
					<div class="cycle">
						<span> </span>
					</div>
					<div class="project-grid total-project">
						<p>3</p>
						<h4>Projects</h4>
						<span> <i class="glyphicon glyphicon-edit"> </i></span>
					</div>
					<div class="project-grid clientsgrid">
						<div>
						<p>0</p>
						<h4>Clients</h4>
						</div>
						<span> <i class="glyphicon glyphicon-user"> </i></span>
					</div>
					<div class="project-grid people-grid">
						<div>
						<p>null</p>
						<h4>Satisfaction</h4>
						</div>
						<span> <i class="glyphicon glyphicon-thumbs-up"> </i></span>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- projects -->
		<!--portfolio-->
		<script src="{{asset('js/jquery.chocolat.js')}}"></script>
			<link rel="stylesheet" href="{{asset('css/chocolat.css')}}" type="text/css" media="screen" charset="utf-8">
			<!--light-box-files -->
			<script type="text/javascript" charset="utf-8">
			$(function() {
				$('.gallery a').Chocolat();
			});
			</script>

	<div class="gallery" id="port">
		<div class="container">
			<h3 class="tittle port">Portfolio</h3>
		   <div class="gallery-bottom">
					<div class="col-md-4 bottom-gallery">
						<a href="{{asset('images/g1.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img class="img-responsive" src="{{asset('images/g1.jpg')}}" />
						<div class="b-wrapper">
						  <h3 class="b-animate b-from-left    b-delay03 "> </h3>
						</div>
	                    </a>
					</div>
					<div class="col-md-4 bottom-gallery">
						<a href="{{asset('images/g2.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img class="img-responsive" src="{{asset('images/g2.jpg')}}" />
						<div class="b-wrapper">
						  <h3 class="b-animate b-from-left    b-delay03 "> </h3>
						</div>
	                      </a>
					</div>
					<div class="col-md-4 bottom-gallery">
						<a href="{{asset('images/g3.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img class="img-responsive" src="{{asset('images/g3.jpg')}}" />
						<div class="b-wrapper">
						  <h3 class="b-animate b-from-left    b-delay03 "> </h3>
						</div>
	                      </a>
					</div>
					<div class="col-md-4 bottom-gallery">
						<a href="{{asset('images/g4.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img class="img-responsive" src="{{asset('images/g4.jpg')}}" />
						<div class="b-wrapper">
						  <h3 class="b-animate b-from-left    b-delay03 "> </h3>
						</div>
	                      </a>
					</div>
					<div class="col-md-4 bottom-gallery">
						<a href="{{asset('images/g5.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img class="img-responsive" src="{{asset('images/g5.jpg')}}" />
						<div class="b-wrapper">
						  <h3 class="b-animate b-from-left    b-delay03 "> </h3>
						</div>
	                      </a>
					</div>
					<div class="col-md-4 bottom-gallery">
						<a href="{{asset('images/g6.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img class="img-responsive" src="{{asset('images/g6.jpg')}}" />
						<div class="b-wrapper">
						  <h3 class="b-animate b-from-left    b-delay03 "> </h3>
						</div>
	                      </a>
					</div>
					<div class="clearfix"> </div>
			</div>
			
		</div>
	</div>
		<script src="{{asset('js/jquery.chocolat.js')}}"></script>
		<link rel="stylesheet" href="{{asset('css/chocolat.css')}}" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<!-- Javascript calls -->
		<script type="text/javascript" charset="utf-8">
				$(function() {
					$('#port a').Chocolat({overlayColor:'#000',leftImg:'images/leftw.gif',rightImg:'images/rightw.gif',closeImg:'images/closew.gif'});
				});
		</script>

<!--//portfolio-->

 <!--start-contact-->
	 <div class="contact_desc" id="contact">
		        <div class="container">
		        	<h3 class="tittle">Contact Me</h3>
			         <div class="contact-form">
				  	   <form class="center_form" action="{{route('insert')}}" method="post">

				  	   	@csrf
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>PHONE</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
					    
					    <div>					    	
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    
						   <div>
						   		<input type="submit" value="Submit " />
						  </div>

						</div>
					    </form>
					    <div class="clearfix"></div>
				  </div>
				  </div>
			</div>

		   <div class="contact" id="contact">
		         <div class="col-md-6 contact-top">
				     	<div class="point"> <i class="glyphicon glyphicon-map-marker"></i></div>
					  <h3 class="tittle two">Find Me</h3>
				      <h4>For Any questions, Please feel free to Contact me.</h4>
					     <div class="contact-ad">
								<p>Address: Dhaka, Bangladesh<p>
								<p>Phone: 01790733803<p>
								<p>E-mail: sharmin.16103284@gmail.com</p>

					     </div>
			      </div>
				 
					<div class="clearfix"> </div>
	       </div>
	<!--//contact-->

@endsection