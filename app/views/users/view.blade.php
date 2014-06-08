@extends('layout.layout-master')

@section('body')
	@include('include.sub-navigation')
	<div class="page-wrapper section">
		<div class="row">
			<div class="large-12 columns">
				<div class="page-title">
					<h3>{{$pagetitle1}}<strong>{{$pagetitle2}}</strong></h3>
				</div>
				<ul class="navi horizontal clearfix">
						<li><a href=""><i class="fi-torso"></i> Account Details</a></li>
						<li><a href=""><i class="fi-check"></i> My Booking</a></li>
						<li><a href=""><i class="fi-bookmark"></i> Bookmarked</a></li>
						<li><a href=""><i class="fi-mail"></i> Message</a></li>
						<li><a href=""><i class="fi-star"></i> Point Reward</a></li>
						<li><a href=""><i class="fi-wrench"></i> Account Settings</a></li>
				</ul>
			</diOOKED</div>
		<div class="row">
			<div class="large-9 columns">
				<h4 class="sub-title">
					{{$subtitle}}
				</h4>
			</div>
			<div class="large-3 columns">
				<a href="" class="button alert small">CHECKOUT</a>
			</div>
		</div>
		<div class="row section">
			<div class="large-4 column">
				<img src="{{asset('assets/images/mobil_1.png')}}" alt="">
			</div>
			<div class="large-8 columns">
				<div class="row">
					<div class="large-12 columns">
						<h4>NISSAN GRAND LIVINA</h4>
					</div>
				</div>
				<div class="row">
					<div class="large-6 columns">
						<p>by Dhiyanh</p>
						<span class="label-tags">SUV</span>
						<div class="row">
							<div class="large-6 columns">
								<ul>
									<li>Gasoline Fuel</li>
									<li>Automatic Transmission</li>
									<li>8 Passenger</li>
									<li>Air Conditioner</li>
								</ul>
							</div>
							<div class="large-6 columns">
								<ul>
									<li>Mid Luggage</li>
									<li>GPS</li>
									<li>Airbag</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="large-6 columns">
						<div class="row">
							<span class="label label-price">
							IDR. 760.000/day
							</span>
						</div>
						<div class="row section">
							<span class="success label label-booked"><i class="fi-check"></i> BOOKED</span>
						</div>
						<div class="row section">
							<a href=""><img src="{{asset('assets/images/detail.png')}}" alt=""> Car Detail</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row section">
			<div class="large-4 column">
				<img src="{{asset('assets/images/mobil_4.png')}}" alt="">
			</div>
			<div class="large-8 columns">
				<div class="row">
					<div class="large-12 columns">
						<h4>TOYOTA FORTUNER</h4>
					</div>
				</div>
				<div class="row">
					<div class="large-6 columns">
						<p>by Dhiyanh</p>
						<span class="label-tags">SUV</span>
						<div class="row">
							<div class="large-6 columns">
								<ul>
									<li>Gasoline Fuel</li>
									<li>Automatic Transmission</li>
									<li>8 Passenger</li>
									<li>Air Conditioner</li>
								</ul>
							</div>
							<div class="large-6 columns">
								<ul>
									<li>Mid Luggage</li>
									<li>GPS</li>
									<li>Airbag</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="large-6 columns">
						<div class="row">
							<span class="label label-price">
							IDR. 760.000/day
							</span>
						</div>
						<div class="row section">
							<span class="success label label-booked"><i class="fi-check"></i> BOOKED</span>
						</div>
						<div class="row section">
							<a href=""><img src="{{asset('assets/images/detail.png')}}" alt=""> Car Detail</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row section">
			<div class="large-4 columns">
				<img src="{{asset('assets/images/package.png')}}" alt="">
			</div>
			<div class="large-8 columns">
				<div class="row">
					<div class="large-12 columns">
						<h4>BANDUNG CITY TOUR</h4>
					</div>
				</div>
				<div class="row">
					<div class="large-8 columns">
						<p>by Dhiyanh</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, officiis, sapiente delectus aliquid rerum minus consectetur natus quaerat dolor eligendi. Magnam, eum illum iste vel cupiditate ducimus tempora quia ut.</p>
						<img src="{{asset('assets/images/mobil_2.png')}}" alt="" width="150px">
					</div>
					<div class="large-4 columns">
						<div cOOKED"row">
							< sectionspan class="label label-price">
								IDR. 3.500.000/day
							</span>
						</div>
						<div class="row section">
							<span class="label success label-booked">
								<i class="fi-check"></i> BOOKED
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop