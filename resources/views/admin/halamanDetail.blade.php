@extends('layouts.app')

@section('judulPelanggan', 'Detail Admin')

@section('konten')
<!-- konten -->
<div class="row mb-2">
	<div class="col-12">
		<div class="accordion" id="accordionExample">
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingOne">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#detailAdmin" aria-expanded="true" aria-controls="detailAdmin">
						Detail {{ $detailAdmin->nama }}
					</button>
				</h2>
				<div id="detailAdmin" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<strong>{{ $detailAdmin->jabatan }}</strong>
					</div>
					<div class="accordion-body">
						<img src="{{ asset('foto_admin') }}/{{ $detailAdmin->foto }}" alt="Foto Admin" class="img-circle" width="150">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection