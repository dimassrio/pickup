@extends('layout.layout-master')

@section('body')
	<div class="page-wrapper">
		<div class="row section">
			<div class="page-title">
				<h2>{{$pagetitle1}} <strong>{{$pagetitle2}}</strong></h2>
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns large-offset-3 columns">
				<form action="{{url('login')}}" method="post">
					<label for="username">Username</label>
					<input type="text" name="username">
					<label for="password">Password</label>
					<input type="password" name="password">
					<input type="submit" class="button right" value="Login">
				</form>
				<hr>
				<p>Or if you are not a member, how about a <a href="{{url('registration')}}">sign up?</a></p>
			</div>
		</div>
	</div>
@stop