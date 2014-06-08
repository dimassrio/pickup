@extends('layout.layout-administrator')

@section('body')
	<div class="row admin-content">
		<div class="large-12 columns">
			<div class="section">
				<div class="row">
					<div class="large-12 columns"><a href="{{url('administrator/users/create')}}" class="button small right"><i class="fi-plus"></i> Buat User</a></div>
				</div>
				<table width="100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Tanggal Lahir</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
							<tr>
								<td>{{$no++}}</td>
								<td>{{$user->realname}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->birthdate}}</td>
								<td>
									<a href="{{url('administrator/users'.'/'.$user->id.'/edit')}}" class="button tiny">Edit</a>
									<a href="" class="alert button tiny">Delete</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop