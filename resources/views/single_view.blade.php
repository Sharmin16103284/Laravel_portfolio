<!-- single_view.blade.php -->

<div class="contact_desc" id="contact">
		        <div class="container">
		        	<h3 class="tittle">Contact Me</h3>
			         <div class="contact-form">
				  	   <form class="center_form" action="{{route('update')}}" method="post">

				  	   	@csrf

				  	   		<div>
						    	
						    	<span><input value="{{$single_view->id}}" name="id" style="display: none;" type="text" class="textbox"></span>
						    </div>
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input value="{{$single_view->userName}}" name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input value="{{$single_view->userEmail}}" name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>PHONE</label></span>
						    	<span><input value="{{$single_view->userPhone}}" name="userPhone" type="text" class="textbox"></span>
						    </div>
					    
					    <div>					    	
						    	<span><label>SUBJECT</label></span>
						    	<span><input type="text" value="{{$single_view->userMsg}}" name="userMsg"></span>
						    
						   <div>
						   		<input type="submit" value="Submit " />
						  </div>

						</div>
					    </form>
					    <div class="clearfix"></div>
				  </div>
				  </div>
			</div>