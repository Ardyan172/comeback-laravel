@extends('layouts.app')

@section('judulPelanggan', 'Daftar Pelanggan')

@section('tombolTambah')
<div class="col-6">
	<!-- Button trigger modal -->
	<a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah Pelanggan<a>
</div>
@endsection

@section('konten')
<!-- content -->
<!-- konten -->
<div class="row mb-2">
	<div class="col-12">
		<table class="table table-bordered table-hover">
			<thead class="table-info">
				<tr>
					<th scope="col">Nomor</th>
					<th scope="col">Nama</th>
					<th scope="col">Barang</th>
					<th scope="col">Harga</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>

			<tbody class="table-primary">
			<?php $nomor = 1; ?>
			@foreach($semuaData as $data)
			<tr>
				<th scope="row">{{ $nomor++ }}</th>
				<td>{{ $data->nama }}</td>
				<td>{{ $data->barang }}</td>
				<td>{{ $data->harga }}</td>
				<td>
					<a href="/pelanggan/hapusPelanggan/{{ $data->id }}" class="badge bg-danger rounded-pill">Hapus</a>	<a href="/halamanUbah/{{ $data->id }}" class="badge bg-warning rounded-pill">Ubah</a>
				</td>
			</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>


<!-- Modal Tambah -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="modalTambah" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalTambah">Pelanggan Baru</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
			</div>
			<div class="modal-body">
				<form action="{{ route('pelangganBaru') }}" method="POST">
					@csrf
					<div class="mb-3">
						<label for="nama" class="form-label">Nama</label>
						<input type="text" name="nama" class="form-control" id="nama" autocomplete="off">
					</div>

					<div class="mb-3">
						<label for="barang" class="form-label">Barang</label>
						<input type="text" name="barang" class="form-control" id="barang" autocomplete="off">
					</div>
					
					<div class="mb-3">
						<label for="harga" class="form-label">Harga</label>
						<input type="number" name="harga" class="form-control" id="harga" autocomplete="off">
					</div>

					<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection