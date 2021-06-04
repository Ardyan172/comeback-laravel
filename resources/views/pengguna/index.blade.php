@extends('layouts.app')

@section('judulPelanggan', 'Latihan inner join#1')

@section('konten')
<!-- konten -->
<div class="row mb-3">
	<div class="col-md-12">
		<table class="table table-bordered table-hover caption-top">
			<caption>Latihan inner join#1</caption>
			<thead class="table-primary">
				<tr>
					<th scope="col">Nomor</th>
					<th scope="col">Nama</th>
					<th scope="col">Kota</th>
				</tr>
			</thead>

			<tbody>
			<?php $nomor = 1; ?>
			@foreach($semuaPengguna as $pengguna)
			<tr>
				<th scope="row">{{ $nomor++ }}</th>
				<td>{{ $pengguna->nama }}</td>
				<td>{{ $pengguna->kota }}</td>
			</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection