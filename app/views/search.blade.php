@extends('layout.layout-master')

@section('body')
	<div id="search-search-main">
		<div id="search-search-content" class="row">
			<div class="large-6 large-offset-6 columns">
				<form action="">
					<input type="text" placeholder="TYPE TO SEARCH HERE">
				</form>
			</div>	
		</div>
	</div>
	<div id="search-option-main">
	<dl class="accordion" data-accordion>
		<dd>
			<a href="#search-option-content" class="text-center"><i class="fi-magnifying-glass"></i> REFINE SEARCH</a>
			<div id="search-option-content" class="content">
				<div class="row">
					<div class="large-3 columns">
					<h5>PRICE</h5>
					<label for="">Price Range:</label>
					<input type="text" id="price-slider-input">
					<div id="price-slider"></div>
					<h5>FUEL</h5>
					<input type="checkbox"> <label for="">GASOLINE</label>
					<input type="checkbox"> <label for="">DIESEL</label>
				</div>
				<div class="large-3 columns">
					<h5>PASSENGERS</h5>
					<label for="">Minimum number of seat:</label>
					<input type="text" id="passenger-slider-input">
					<div id="passenger-slider"></div>
					<h5>TRANSMISSION</h5>
					<input type="checkbox"> <label for="">AUTOMATIC</label><br>
					<input type="checkbox"> <label for="">MANUAL</label>
				</div>
				<div class="large-3 columns">
					<h5>FEATURE</h5>
					<input type="checkbox">
					<label for="">AC</label>
					<br>
					<input type="checkbox">
					<label for="">AIRBAG</label>
					<br>
					<input type="checkbox">
					<label for="">GPS</label>
					<br>
					<input type="checkbox">
					<label for="">UPPER LUGGAGE</label>
					<br>
					<input type="checkbox">
					<label for="">SMALL LUGGAGE</label>
					<br>
					<input type="checkbox">
					<label for="">BIG LUGGAGE</label>
					<br>
				</div>
				<div class="large-3 columns">
					<h5>CAR CLASSES</h5>
					<input type="checkbox">
					<label for="">SUV</label>
					<br>
					<input type="checkbox">
					<label for="">MINIBUS</label>
					<br>
					<input type="checkbox">
					<label for="">SEDAN</label>
					<br>
					<input type="checkbox">
					<label for="">LUXURY</label>
					<br>
					<input type="checkbox">
					<label for="">TRUCK</label>
					<br>
					<input type="checkbox">
					<label for="">SPORT</label>
					<br>
				</div>
				</div>
				<div class="row">
					<input type="submit" class="button alert small right" value="SUBMIT">
				</div>
			</div>
		</dd>
	</dl>
	</div>
	<div class="page-wrapper">
		<div class="section">
			<div class="row">
				<div class="large-12 columns">
					<ul class="breadcrumbs">
						<li><a href="#">HOME</a></li>
						<li><a href="#">SEARCH RESULT</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<div class="page-title">
						<h2>RESULT <strong>SEARCH</strong></h2>
					</div>
				</div>
			</div>
			@for($i=0;$i<4;$i++)
				<div class="row section">
				<div class="large-4 columns">
					<img src="{{asset('assets/images/mobil_1.png')}}" alt="">
				</div>
					<div class="large-4 columns">
					<h5>HONDA NEW CRV 2013</h5>
					
						<span class="label">SUV</span>
						<span class="label">FAMILY</span>
						<span class="label">LUXURIOUS</span>
					
					<div class="clearfix">
					<ul class="list-no-head">
						<li><img src="" alt="">Air Conditioner</li>
						<li><img src="" alt="">Medium Luggage</li>
						<li><img src="" alt="">7 Passenger</li>
						<li><img src="" alt="">GPS</li>
						<li><img src="" alt="">M/T</li>
						<li><img src="" alt="">Airbag</li>
						<li><img src="" alt="">Gasoline</li>
					</ul>
					</div>
				</div>
				<div class="large-4 columns">
					<div class="row section">
						<div class="label label-price">Rp.{{number_format(250000)}},-/HARI</div>	
					</div>
					<a href="" class="small button alert"><i class="size-18 fi-shopping-cart"></i> RENT THIS CAR</a>
					<a href="" class="small button"><i class="size-18 fi-eye"></i> DETAIL</a>
				</div>
				</div>
			@endfor
		</div>
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

@section('js')
	<script type="text/javascript">
		$(document).ready(function(){
			$( "#price-slider" ).slider({
			range: true,
			min: 0,
			max: 1000000,
			values: [ 200000, 500000 ],
			slide: function( event, ui ) {
				$( "#price-slider-input" ).val( "Rp." + ui.values[ 0 ] + " - Rp." + ui.values[ 1 ] );
			}
		});
		$( "#price-slider-input" ).val( "Rp." + $( "#price-slider" ).slider( "values", 0 ) + " - Rp." + $( "#price-slider" ).slider( "values", 1 ) );

		 $( "#passenger-slider" ).slider({
		 	range: "max",
			min: 2,
			max: 20,
			value: 7,
			slide: function( event, ui ) {
				$( "#passenger-slider-input" ).val( ui.value );
			}
		});
		$( "#passenger-slider-input" ).val( $( "#passenger-slider" ).slider( "value" ) );
		})
	</script>
@stop