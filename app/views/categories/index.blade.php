@extends('layout.layout-administrator')

@section('body')
	<div class="row admin-content">
		<div class="large-12 columns">
			<div class="section">
				<div class="row">
					<div class="large-4 large-offset-8 columns">
						<a href="{{url('categories/create')}}" class="button small right"><i class="fi-plus"></i> Buat Kategori</a>
					</div>
				</div>
				<table width="100%">
				<thead>
					<tr>
						<th>NO</th>
						<th>NAME</th>
						<th>PICTURE</th>
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($categories as $category)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$category->name}}</td>
							<td><img src="{{asset($category->picture)}}" alt="picture of {{$category->name}}" width="300"></td>
							<td><a href="{{url('administrator/categories/'.$category->id.'/edit')}}" class="button tiny">EDIT</a><a href="" class="alert button tiny">DELETE</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
	</div>
@stop