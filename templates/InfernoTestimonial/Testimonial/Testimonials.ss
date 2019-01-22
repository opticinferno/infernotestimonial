
<div id="testimonials">

<div class="container">
<h2>TESTIMONIALS</h2>

	

 <!-- .carousel-control{width:0 !important;
					margin-left:-15px;}-->
 

<div class="testimonials-slider">
	<div class="owl-carousel owl-testimonial owl-theme">
		<% if $DisplayImages == 1 %>
			<% if $ImagePosition == 0 %>
				
			<% loop Testimonials %>
			
		
			<div>
     
      <div class="col-md-3">
		  <% if $ProfileImage %>$ProfileImage
			  <% else %>
		  <img src="themes/bootstrap/images/default_user.png"> 
	     <% end_if %>
	</div>
				  
		<div class="col-md-9"><p class="quote">$Info</p></div>
		
			
			</div>
			
			
		<% end_loop %>
		<% else %>
			<% loop Testimonials %>
			
		
			<div>
     
				<div class="col-md-9"><p class="quote">$Info</p></div><div class="col-md-3"><% if $ProfileImage %>$ProfileImage<% else %><img src="themes/bootstrap/images/default_user.png"> <% end_if %></div>
		
			
			</div>
			
			
		<% end_loop %>
			<% end_if %>
		<% else %>
		<% loop Testimonials %>
			
		
			<div>
     
      <p class="quote">$Info <br><small>- $Person</small></p>
		
			
			</div>
			
			
		<% end_loop %>
			
		<% end_if %>
			</div>
	</div>
	
</div>
</div>
<script>
	$('.owl-testimonial').owlCarousel({
    //center:true,
		//margin:10,
        items:$Columns,
        loop:true,
		dotsEach:true,
		dots:true,
		//stagePadding:30,
		smartSpeed:550,
		dotsContainer: '#carousel-custom-dots-1',
		nav:true,
		navText : ['<span class="glyphicon glyphicon-chevron-left"> </span>','<span class="glyphicon glyphicon-chevron-right"> </span>'],
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: 'URLHash',
		singleItem:true
		
});
				</script>
<style>
	.owl-prev{color:#$ArrowColor !important;
				border-color:#$ArrowColor !important;}
	.owl-next{color:#$ArrowColor !important;
			border-color:#$ArrowColor !important;}
</style>

