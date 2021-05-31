@extends('layouts.app')

@section('judulPelanggan', 'Daftar Admin')

@section('tombolTambah')
<div class="col-6">
	<!-- Button trigger modal -->
	<a href="{{ route('halamanTambah') }}" class="btn btn-outline-primary">Tambah Admin<a>
</div>
@endsection

@section('konten')
<!-- konten -->
<div class="row mb-2">
	<div class="col-12">
		<table class="table table-bordered table-hover">
			<thead class="table-info">
				<tr>
					<th scope="col">Nomor</th>
					<th scope="col">Nama</th>
					<th scope="col">Jabatan</th>
					<th scope="col">Foto</th>
					<th scope="col">Action</th>
				</tr>
			</thead>

			<tbody class="table-primary">
			<?php $nomor = 1; ?>
			@foreach($semuaAdmin as $admin)
			<tr>
				<th scope="row">{{ $nomor++ }}</th>
				<td>{{ $admin->nama }}</td>
				<td>{{ $admin->jabatan }}</td>
				<td>
					<img src="{{ asset('foto_admin') }}/{{ $admin->foto }}" alt="Foto Admin" width="50">
				</td>
				<td>
					<a href="/admin/halamanDetail/{{ $admin->id }}" class="badge bg-primary rounded-pill">Detail</a>
					<a href="/admin/halamanUbahAdmin/{{ $admin->id }}" class="badge bg-warning rounded-pill">Ubah</a>
					<a href="/admin/hapusAdmin/{{ $admin->id }}" class="badge bg-danger rounded-pill">Hapus</a>
				</td>
			</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection