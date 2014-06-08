@extends('layout.layout-administrator')

@section('body')
	<div class="row admin-content">
		<div class="large-12 columns">
			{{Form::open(array('url'=>url('administrator/categories'.'/'.$category->id),'method'=>'put', 'enctype'=>'multipart/form-data'))}}
				<label for="name">Nama Kategori</label>
				<input type="text" name="name" id="name" placeholder="{{$category->name}}">
				<label for="description">Deskripsi Kategori</label>
				<textarea name="description" id="description" cols="30" rows="10">{{$category->description}}</textarea>
				<label for="picture-old">Gambar Kategori Sebelumnya</label>
				<img src="{{asset($category->picture)}}" alt="{{$category->name}}" width="500" id="picture-old">
				<label for="picture">Gambar Kategori</label>
				<input type="file" name="picture" id="picture">
				<input type="submit" value="Submit" class="button right">
			{{Form::close()}}
		</div>
	</div>
@stop