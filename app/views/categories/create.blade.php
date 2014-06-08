@extends('layout.layout-administrator')

@section('body')
	<div class="row admin-content">
		<div class="large-12 columns">
			<form action="{{url('administrator/categories')}}" method="post" enctype="multipart/form-data">
				<label for="name">Nama Kategori</label>
				<input type="text" name="name" id="name">
				<label for="description">Deskripsi Kategori</label>
				<textarea name="description" id="description" cols="30" rows="10"></textarea>
				<label for="picture">Gambar Kategori</label>
				<input type="file" name="picture" id="picture">
				<input type="submit" value="Submit" class="button right">
			</form>
		</div>
	</div>
@stop