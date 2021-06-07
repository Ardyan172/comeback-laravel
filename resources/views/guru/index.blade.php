@extends('layouts.app')

@section('judulPelanggan', 'Daftar Guru')

@section('tombolTambah')
<div class="col-md-6">
	<!-- Button trigger modal -->
	<a href="" class="btn btn-outline-primary">Tambah Guru<a>
</div>
@endsection

@section('konten')
<!-- konten -->
<div class="row mb-2">
	<div class="col-md-12">
		<table class="table table-bordered table-hover">
			<thead class="table-info">
				<tr>
					<th scope="col">Nomor</th>
					<th scope="col">Nama</th>
					<th scope="col">Kelas</th>
					<th scope="col">Mata Pelajaran</th>
					<th scope="col">Foto</th>
					<th scope="col">Fitur</th>
				</tr>
			</thead>

			<tbody>
			<?php $nomor = 1; ?>
			@foreach($semuaGuru as $guru)
			<tr>
				<th scope="row">{{ $nomor++ }}</th>
				<td>{{ $guru->nama }}</td>
				<td>{{ $guru->kelas }}</td>
				<td>{{ $guru->mapel }}</td>
				<td>
					<img src="{{ asset('foto_guru') }}/{{ $guru->foto }}" class="img-circle" width="150">
				</td>
				<td>
					<a href="" class="badge bg-primary rounded-pill">Detail</a>
					<a href="" class="badge bg-warning rounded-pill">Ubah</a>
					<a href="" class="badge bg-danger rounded-pill">Hapus</a>
				</td>
			</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection