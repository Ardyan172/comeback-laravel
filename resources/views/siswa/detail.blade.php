@extends('layouts.app')

@section('judulPelanggan', 'Detail ' . $detailSiswa->nama )

@section('konten')
<!-- konten -->
<div class="row mb-3">
	<div class="offset-md-3 col-md-6">
		<div class="card">
		  <div class="row g-0">
		    <div class="col-md-4">
		      <img src="{{ asset('fotoSiswa') }}/{{ $detailSiswa->foto }}" alt="foto {{ $detailSiswa->nama }}">
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">
		        <h5 class="card-title">Detail Siswa</h5>
		        <p class="card-text">No absen : {{ $detailSiswa->noAbsen }}</p>
		        <p class="card-text">Nama : {{ $detailSiswa->nama }}</p>
		        <p class="card-text">Kelas : {{ $detailSiswa->kelas }}</p>
		        <p class="card-text"><small class="text-muted">Terakhir di update 3 minutes yang lalu</small></p>
		      </div>
		      <div class="card-footer">
		      	<a href="{{ route('siswa') }}" class="btn btn-warning col-md-12">Kembali</a>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
</div>
@endsection