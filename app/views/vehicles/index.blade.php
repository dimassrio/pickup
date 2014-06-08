@extends('layout.layout-administrator')

@section('body')
	<div class="page-wrapper">
		<div class="row admin-content">
			<div class="large-12 columns">
				<div class="section">
					<div class="row">
						<div class="large-12 columns">
							<a href="{{url('administrator/vehicles/create')}}" class="button small right">Tambah Kendaraan</a>
						</div>
					</div>
					<div class="row">
						<div class="large-12 columns">
							<table width="100%">
								<thead>
									<tr>
										<th>NO</th>
										<th>Name</th>
										<th>Description</th>
										<th>Kategori</th>
										<th>Picture</th>
										<th>Passenger</th>
										<th>Price</th>
										<th>Owner</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($vehicles as $vehicle)
										<tr>
											<td>{{$no++}}</td>
											<td>{{$vehicle->maker->name.' '.$vehicle->name.' '.$vehicle->year}}</td>
											<td>{{$vehicle->description}}</td>
											<td>{{$vehicle->category->name}}</td>
											<td><img src="{{asset($vehicle->main_picture)}}" alt="" width="100"></td>
											<td>{{$vehicle->passenger}}</td>
											<td>{{$vehicle->price}}</td>
											<td>
												@if($vehicle->owner_type == 'user')
													{{$vehicle->owner->realname}}
												@else
													{{$vehicle->owner->name}}
												@endif
											</td>
											<td>
												<a href="{{url('administrator/vehicles'.'/'.$vehicle->id.'/edit')}}" class="button tiny">Edit</a>
												<a href="" class="alert tiny button">DELETE</a>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop