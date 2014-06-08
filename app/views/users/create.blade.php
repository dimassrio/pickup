@extends('layout.layout-master')

@section('body')
	<div class="page-wrapper">
		<div class="row section">
			<div class="page-title">
				<h2>{{$pagetitle1}}<strong>{{$pagetitle2}}</strong></h2>
			</div>
		</div>
		<div class="row">
			<div class="large-8 columns large-offset-2 columns">
					<form action="{{url('registration')}}" method="post">
						<div class="row">
							<div class="large-3 columns">
								<label for="realname" class="right">Nama Asli</label>
							</div>
							<div class="large-9 columns">
								<input type="text" id="realname" name="realname">
							</div>
						</div>
						<div class="row">
							<div class="large-3 columns">
								<label for="email" class="right">Email</label>
							</div>
							<div class="large-9 columns">
								<input type="text" id="email" name="email">
							</div>
						</div>
						<div class="row">
							<div class="large-3 columns">
								<label for="password" class="right">Password</label>
							</div>
							<div class="large-9 columns">
								<input type="password" id="password" name="password">
							</div>
						</div>
						<div class="row">
							<div class="large-3 columns">
								<label for="passconf" class="right">Konfirmasi Password</label>
							</div>
							<div class="large-9 columns">
								<input type="password" id="passconf" name="passconf">
							</div>
						</div>
						<div class="row">
							<div class="large-3 columns">
								<label for="birthdate" id="birthdate">Tanggal Lahir</label>
							</div>
							<div class="large-9 columns">
								<input type="text" id="birthdate" name="birthdate">
							</div>
						</div>
						<div class="row section">
							<div class="large-9 large-offset-3 columns">
								<small>
									Dengan melakukan klik pada tombol "Daftar Sekarang", Saya setuju dengan Kebijakan Privasi dan Syarat & Ketentuan dari Pickup.
								</small>
							</div>
						</div>
						<div class="row">
							<div class="large-9 large-offset-3 columns">
								<input type="submit" class="button expand" value="Daftar Sekarang">
							</div>
						</div>
					</form>
			</div>
		</div>
	</div>
@stop