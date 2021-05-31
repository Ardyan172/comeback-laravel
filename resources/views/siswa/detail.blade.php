@extends('layouts.app')

@section('judulPelanggan', 'Detail ' . $detailSiswa->nama )

@section('konten')
<!-- konten -->
<div class="row mb-2 text-center">
	<div class="offset-md-3 col-md-6">
		<div class="card">
			<img src="{{ asset('fotoSiswa') }}/{{ $detailSiswa->foto }}" class="card-img-top" alt="foto {{ $detailSiswa->nama }} ">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">No absen : {{ $detailSiswa->noAbsen }}</li>
				<li class="list-group-item">Nama : {{ $detailSiswa->nama }}</li>
				<li class="list-group-item">Kelas : {{ $detailSiswa->kelas }}</li>
			</ul>
			<div class="card-body">
				<a href="{{ route('siswa') }}" class="btn btn-danger col-md-12">Kembali</a>
			</div>
		</div>
	</div>
</div>
@endsection