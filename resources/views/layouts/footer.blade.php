<?php

use Illuminate\Support\Facades\DB; 

$services = DB::table('services')->get(); 
?>

<!-- footer starts-->
	<div class="footer">
		<div class="container">
			<div class="foot_service col-xs-6 col-md-4">
				<ul>
					<li>Cities</li><br><br>
					<li>Gorakhpur</li>
				</ul>
			</div>
			<div class="col-xs-6 col-md-4">
				<ul>
					<li>Services</li><br><br>
					@foreach($services as $service)
					<li><a href="/service/{{$service->title}}">{{ $service->title }}</a></li><br>
					@endforeach
				</ul>
			</div>
			<div class="col-xs-6 col-md-4">
				<ul>
					<li>Follow Us</li><br><br>
					<li>
					<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> 
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> 
					<a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>

					</li>
				</ul>
			</div>
		</div>
		
	</div>
<!-- footer ends -->