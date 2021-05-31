@extends('layouts.app')

@section('judulPelanggan', 'Daftar Siswa')

@section('tombolTambah')
<div class="col-md-12">
		<!-- Button trigger modal -->
		<a href="" class="btn btn-outline-primary">Tambah Siswa<a>
</div>
@endsection

@section('konten')
<!-- konten -->
<div class="row mb-2">
	<div class="col-md-12">
		<table class="table table-bordered table-hover caption-top">
			<caption>Daftar Siswa</caption>
			<thead class="table-primary">
				<tr>
					<th scope="col">Nomor</th>
					<th scope="col">Absen</th>
					<th scope="col">Nama</th>
					<th scope="col">Kelas</th>
					<th scope="col">Foto</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>

			<tbody>
			<?php $nomor = 1; ?>
			@foreach($semuaSiswa as $siswa)
			<tr>
				<th scope="row">{{ $nomor++ }}</th>
				<td>{{ $siswa->noAbsen }}</td>
				<td>{{ $siswa->nama }}</td>
				<td>{{ $siswa->kelas }}</td>
				<td>
					<img src="{{ asset('fotoSiswa') }}/{{ $siswa->foto }}" alt="Foto Siswa" width="50">
				</td>
				<td>
					<a href="/siswa/detail/{{ $siswa->id }}" class="badge bg-primary rounded-pill">Detail</a>
				</td>
			</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection