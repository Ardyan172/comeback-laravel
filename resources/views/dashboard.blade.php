@extends('layouts.app')

@section('judulPelanggan', 'Dashboard')

@section('konten')
<!-- konten -->
<div class="row mb-2">
	<div class="col-12">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="{{ asset('foto_admin') }}/aaron.jpg" class="d-block w-100" alt="aaron">
				</div>

				@foreach($dashboard as $data)
				<div class="carousel-item">		
					<img src="{{ asset('gambar_dashboard') }}/{{ $data->gambar }}" class="d-block w-100" alt="{{ $data->nama }}">	
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection