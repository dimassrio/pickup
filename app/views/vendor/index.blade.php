@extends('layout.layout-administrator')

@section('body')
	<div class="page-wrapper">
			<div class="row admin-content">
				<h4>Costumer Growth in Last 6 Month</h4>
				<div id="graph"></div>
			<h4>Recent Deals & Packages</h4>
			<table width="100%">
				<thead>
					<tr>
						<th>Costumer Name</th>
						<th>Request Date</th>
						<th>Start Date</th>
						<th>Package Name</th>
						<th>Car Type</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Budhi Setyawan</td>
						<td>12 - 11 - 2013</td>
						<td>12 - 11 - 2013</td>
						<td>Bandung City Tour</td>
						<td>Family Car</td>
						<td>Reserved</td>
					</tr>
					<tr>
						<td>Dhiya Nur Hidayat</td>
						<td>08 - 11 - 2013</td>
						<td>08 - 11 - 2013</td>
						<td>Jakarta Package A</td>
						<td>Sport Car</td>
						<td>Reserved</td>
					</tr>
					<tr>
						<td>Agus Catur</td>
						<td>02 - 11 - 2013</td>
						<td>02 - 11 - 2013</td>
						<td>Bandung City Tour</td>
						<td>Family Car</td>
						<td>Paid</td>
					</tr>
				</tbody>
			</table>
			<h4>Recent Booking</h4>
			<table width="100%">
				<thead>
					<tr>
						<th>Costumer Name</th>
						<th>Request Date</th>
						<th>Start Date</th>
						<th>Package Name</th>
						<th>Car Type</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Budhi Setyawan</td>
						<td>12 - 11 - 2013</td>
						<td>12 - 11 - 2013</td>
						<td>Bandung City Tour</td>
						<td>Family Car</td>
						<td>Reserved</td>
					</tr>
					<tr>
						<td>Dhiya Nur Hidayat</td>
						<td>08 - 11 - 2013</td>
						<td>08 - 11 - 2013</td>
						<td>Jakarta Package A</td>
						<td>Sport Car</td>
						<td>Reserved</td>
					</tr>
					<tr>
						<td>Agus Catur</td>
						<td>02 - 11 - 2013</td>
						<td>02 - 11 - 2013</td>
						<td>Bandung City Tour</td>
						<td>Family Car</td>
						<td>Paid</td>
					</tr>
				</tbody>
			</table>
			</div>
	</div>
@stop
@section('css')
	<style>
		.axis path,
		.axis line {
		  fill: none;
		  stroke: #000;
		  shape-rendering: crispEdges;
		}

		.x.axis path {
		}

		.line {
		  fill: none;
		  stroke: steelblue;
		  stroke-width: 1.5px;
		}
	</style>
@stop
@section('js')
<script src="{{asset('assets/vendor/d3/d3.min.js')}}"></script>
<script type="text/javascript">
	var margin = {top: 20, right: 20, bottom: 100, left: 50},
		width = 750 - margin.left - margin.right,
		height = 550 - margin.top - margin.bottom;

	var parseDate = d3.time.format("%b-%y").parse;

	var x = d3.time.scale()
		.range([0, width]);

	var y = d3.scale.linear()
		.range([height, 0]);

	var xAxis = d3.svg.axis()
		.scale(x)
		.orient("bottom");

	var yAxis = d3.svg.axis()
		.scale(y)
		.orient("left");

	var line = d3.svg.line()
		.x(function(d) { return x(d.date); })
		.y(function(d) { return y(d.close); });

	var svg = d3.select("#graph").append("svg")
		.attr("width", width + margin.left + margin.right)
		.attr("height", height + margin.top + margin.bottom)
	  .append("g")
		.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

	d3.tsv("{{asset('assets/uploads/vendor-data/data.tsv')}}", function(error, data) {
	  data.forEach(function(d) {
		d.date = parseDate(d.date);
		d.close = +d.close;
	  });

	  x.domain(d3.extent(data, function(d) { return d.date; }));
	  y.domain(d3.extent(data, function(d) { return d.close; }));

	  svg.append("g")
		  .attr("class", "x axis")
		  .attr("transform", "translate(0," + height + ")")
		  .call(xAxis)
		  .append("text").attr("y", 50).attr("x", width/2).style("text-anchor", "end").text("Month");

	  svg.append("g")
		  .attr("class", "y axis")
		  .call(yAxis)
		.append("text")
		  .attr("transform", "rotate(-90)")
		  .attr("y", 6)
		  .attr("dy", ".71em")
		  .style("text-anchor", "end")
		  .text("People");

	  svg.append("path")
		  .datum(data)
		  .attr("class", "line")
		  .attr("d", line);
	});
</script>
@stop