@extends('layouts.app')

@section('judulPelanggan', 'Tambah Admin')

@section('konten')
<!-- konten -->
<div class="row mb-2">
	<div class="col-12">
		<form action="{{ route('tambahAdmin') }}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="mb-3">
				<label for="nama" class="form-label">Nama</label>
				<input type="text" name="nama" class="@error('nama') is-invalid @enderror form-control" value="{{ old('nama') }}" id="nama">
				@error('nama')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="jabatan" class="form-label">Jabatan</label>
				<input type="text" name="jabatan" class="@error('jabatan') is-invalid @enderror form-control" value="{{ old('jabatan') }}" id="jabatan">
				@error('jabatan')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="fotoAdmin" class="form-label">Masukkan Foto</label>
				<input name="fotoAdmin" class="@error('fotoAdmin') is-invalid @enderror form-control"  value="{{ old('fotoAdmin') }}" type="file" id="fotoAdmin">
				@error('fotoAdmin')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
			</div>

			<button type="submit" class="btn btn-outline-primary">Kirimkan</button>
			<a href="{{ route('admin') }}" class="btn btn-outline-danger">Kembali</a>
		</form>
	</div>
</div>
@endsection