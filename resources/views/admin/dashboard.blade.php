@extends('layouts.main')
@section('title','Dashboard');
@section('content')
<div class="row w-100 m-auto">
	<div class="col-xl-6 px-2">
		<div class="card shadow-sm rounded-sm mb-4 border-0" style="height: 250px; overflow: auto;">
			<div class="card-header">
				<h6 class="text-primary mb-0">Riwayat aktifitas</h6>
			</div>
			<div class="card-body px-4">

				<div class="row w-100 m-auto">
					<div class="d-flex" style="align-items: center;">
						<div class="rounded-circle bg-primary mr-3" style="width: 10px; height: 10px;"></div>
							</div>
						<div class="text-secondary">
							pengguna baru, <span class="text-warning">amel@gmail.com</span> Telah mendaftar
						</div>
					</div>

					<div class="mb-2"></div>

					<div class="row w-100 m-auto">
						<div class="d-flex" style="align-items: center;">
							<div class="rounded-circle bg-success mr-3" style="width: 10px; height: 10px;"></div>
						</div>
						<div class="text-secondary">
							Transaksi selesai, <span class="text-warning">TY000001</span> Transaksi berhasil
						</div>
					</div>
									
					<div class="mb-2"></div>
									
				</div>
			</div>
		</div>
	</div>
					
	<div class="row w-100 m-auto">
		<div class="col-md-6 col-lg-4 col-xl-3 px-0 p-2">
			<div class="card bg-warning text-white">
				<div class="card-body">
					<div class="">
						<h6 class="card-title mb-0" style="color: rgb(250, 240, 100);">
							Jumlah pengguna
						</h6>
					<h5 class="mb-0 mt-2">{{ $user }} Pengguna</h5>
				</div>
			</div>
			<div class="card-footer border-top-0">
				<a href="" class="text-white">
					<small>Lihat pengguna</small>
				</a>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-xl-3 px-0 p-2">
		<div class="card bg-success text-white">
			<div class="card-body">
				<div>
					<h6 class="card-title mb-0" style="color: rgb(40, 220, 100);">
						Jumlah pegawai
					</h6>
					<h5 class="mb-0 mt-2">1 Pegawai</h5>
				</div>
			</div>
			<div class="card-footer border-top-0">
				<a href="" class="text-white">
					<small>Lihat pegawai</small>
				</a>
			</div>
		</div>
	</div>
						

	<div class="col-md-6 col-lg-4 col-xl-3 px-0 p-2">
		<div class="card bg-primary text-white">
			<div class="card-body">
				<div>
					<h6 class="card-title mb-0" style="color: rgb(0, 223, 255);">
						Jumlah produk
					</h6>
					<h5 class="mb-0 mt-2">{{ $product }} Produk</h5>
				</div>
			</div>
			<div class="card-footer border-top-0">
				<a href="" class="text-white">
					<small>Lihat produk</small>
				</a>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-xl-3 px-0 p-2">
		<div class="card bg-danger text-white">
			<div class="card-body">
				<div>
					<h6 class="card-title mb-0" style="color: rgb(290, 83, 129);">
						Saldo
					</h6>
				<h5 class="mb-0 mt-2">Rp1000,000</h5>
			</div>
		</div>
		<div class="card-footer border-top-0">
			<a href="" class="text-white">
				<small>Lihat riwayat</small>
			</a>
		</div>
	</div>
</div>
</div>
@endsection