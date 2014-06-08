@extends('layout.layout-master')

@section('body')
	<div class="row section">
		<div class="large-4 columns">
			<div id="search-index-main">
				<h4>FIND A CAR TO RENT</h4>
				<form action="">
					<input type="text" placeholder="TYPE YOUR DESTINATION">
					<input type="text" placeholder="PICK UP DATE">
					<input type="text" placeholder="DROP OFF DATE">
					<select name="" id="">
						<option value="0">SELECT CAR TYPE</option>
						<option value="1">SUV</option>
						<option value="2">SPORT</option>
						<option value="2">LUXURY</option>
					</select>
					<input type="submit" class="button expand" value="SUBMIT">
				</form>
			</div>
		</div>
		<div class="large-8 columns">
			<div id="slider-index-main">
					<ul class="example-orbit" data-orbit data-options="animation:slide;slide_number:false;bullets:false">
						<li>
							<img src="{{asset('assets/images/slider_images_1.jpg')}}" alt="slide 1" />
						</li>
						<li class="active">
							<img src="{{asset('assets/images/slider_images_2.jpg')}}" alt="slide 2" />
						</li>
					</ul>
			</div>
		</div>
	</div>
	
	<div class="section car-section">
			<div class="row">
			<div class="large-12 columns">
				<div class="page-title">
					<h3>POPULAR<strong>CARS</strong></h3>	
				</div>
			</div>
		</div>
		<div class="row">
			<div class="large-3 columns">
				<h5>HONDA CRV 2013</h5>
				<img src="{{asset('assets/images/mobil_1.png')}}" alt="">
				<div class="label price-blue-label">
					Rp.270.000/day
				</div>
			</div>
			<div class="large-3 columns">
				<h5>HONDA CRV 2013</h5>
				<img src="{{asset('assets/images/mobil_1.png')}}" alt="">
				<div class="label price-blue-label">
					Rp.270.000/day
				</div>
			</div>
			<div class="large-3 columns">
				<h5>HONDA CRV 2013</h5>
				<img src="{{asset('assets/images/mobil_1.png')}}" alt="">
				<div class="label price-blue-label">
					Rp.270.000/day
				</div>
			</div>
			<div class="large-3 columns">
				<h5>HONDA CRV 2013</h5>
				<img src="{{asset('assets/images/mobil_1.png')}}" alt="">
				<div class="label price-blue-label">
					Rp.270.000/day
				</div>
			</div>
		</div>
		</div>

	<div class="page-wrapper">
		<div class="section offer-section">
			<div class="row">
				<div class="large-12 columns">
					<div class="page-title">
						<h3>OUR <strong>OFFERS</strong></h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-3 columns"><h5>TOYOTA AVANZA</h5><img src="{{asset('assets/images/mobil_2.png')}}" alt="">
				<div class="label price-blue-label">
					Rp.250.000/day
				</div></div>
				<div class="large-3 columns"><h5>TOYOTA AVANZA</h5><img src="{{asset('assets/images/mobil_2.png')}}" alt="">
				<div class="label price-blue-label">
					Rp.250.000/day
				</div></div>
				<div class="large-3 columns"><h5>TOYOTA AVANZA</h5><img src="{{asset('assets/images/mobil_2.png')}}" alt="">
				<div class="label price-blue-label">
					Rp.250.000/day
				</div></div>
				<div class="large-3 columns"><h5>TOYOTA AVANZA</h5><img src="{{asset('assets/images/mobil_2.png')}}" alt="">
				<div class="label price-blue-label">
					Rp.250.000/day
				</div></div>
			</div>
		</div>
	</div>
@stop