@extends('layout.layout-administrator')

@section('body')
	<div class="page-wrapper">
		<div class="row">
			<div class="large-12 columns">
				<div class="section">
					{{Form::open(array('url'=>url('administrator/vehicles/'.$vehicle->id), 'method'=>'put','enctype'=>'multipart/form-data'))}}
						<label for="name" id="name">Nama Kendaraan</label>
						<input type="text" name="name" id="name" placeholder="{{$vehicle->name}}">
						<label for="description">Deskripsi</label>
						<textarea name="description" id="description" cols="30" rows="10">
							{{$vehicle->description}}
						</textarea>
						<div class="row">
							<div class="large-6 columns">
								<label for="passenger">Jumlah Penumpang</label>
								<input type="text" id="passenger" name="passenger" placeholder="{{$vehicle->passenger}}">
							</div>
							<div class="large-6 columns">
								<label for="price">Harga</label>
								<input type="text" id="price" name="price" placeholder="{{$vehicle->price}}">
							</div>
						</div>
						
						
						<label for="maker">Pembuat</label>
						<select name="maker" id="maker">
							{{SystemController::option_array(Maker::array_makers())}}
						</select>

						<div class="row">
							<div class="large-6 columns">
								<label for="year">Tahun</label>
								<select name="year" id="year">
									{{SystemController::option_array(SystemController::array_vehicle_year())}}
								</select>
							</div>
							<div class="large-6 columns">
								<label for="category">Kategori</label>
								<select name="category" id="category">
									{{SystemController::option_array(Category::array_categories())}}
								</select>
							</div>
						</div>
						<label for="picture-old">Gambar Kendaraan Lama</label>
						<img src="{{asset($vehicle->main_picture)}}" alt="" width="500px" id="picture-old" class="th">
						<label for="picture">Gambar Kendaraan Baru</label>
						<input type="file" name="picture" id="picture">
						<input type="submit" value="Submit" class="button small right">
					{{Form::close()}}
				</div>
			</div>
		</div>
	</div>
@stop