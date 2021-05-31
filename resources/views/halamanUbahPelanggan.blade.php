@extends('layouts.app')

@section('judulPelanggan', 'Formulir Ubah Data Pelanggan')

@section('konten')
<div class="row mb-3">
	<div class="col-12">
		<form class="needs-validation" novalidate action="/ubahPelanggan/{{ $detailPelanggan->id }}" method="post">
			@csrf

			<input type="hidden" name="id" value="{{ $detailPelanggan->id }}">

			<div class="mb-3">
				<label for="nama" class="form-label">Nama</label>
				<input type="text" class="@error('nama') is-invalid @enderror form-control" id="nama" name="nama" autocomplete="off" value="{{ $detailPelanggan->nama }}">
				<!-- validasi -->
				@error('nama')
				<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="barang" class="form-label">Barang</label>
				<input type="text" class="@error('barang') is-invalid @enderror form-control" id="barang" name="barang" autocomplete="off" value="{{ $detailPelanggan->barang }}">
				<!-- validasi -->
				@error('barang')
				<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="harga" class="form-label">Harga</label>
				<input type="number" class="@error('harga') is-invalid @enderror form-control" id="harga" name="harga" autocomplete="off" value="{{ $detailPelanggan->harga }}">

				@error('harga')
				<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>

			<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
		</form>
	</div>
</div>
@endsection