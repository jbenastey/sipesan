<div class="col-12">
<?php
if ($this->session->flashdata('alert') == 'login_sukses'):
	?>
	<div class="alert alert-success alert-dismissible animated fadeInDown"
		 style="position: absolute; width: 100%; z-index: 2" id="feedback"
		 role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		Berhasil Login
	</div>
<?php
elseif ($this->session->flashdata('alert') == 'sudah_login'):
	?>
	<div class="alert alert-warning alert-dismissible animated fadeInDown"
		 style="position: absolute; width: 100%; z-index: 2" id="feedback"
		 role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		Sudah Login
	</div>
<?php
endif;
?>

	<div class="row">
		<div class="col-md-6 col-lg-3 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<div class="d-flex align-items-center justify-content-md-center">
						<a href="<?=base_url('admin')?>"><i class="mdi mdi-account-multiple icon-lg text-primary"></i></a>
						<div class="ml-3">
							<p class="mb-0">Jumlah Pelanggan</p>
							<h6><?=count($pelanggan)?></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<div class="d-flex align-items-center justify-content-md-center">
						<a href="<?=base_url('admin')?>"><i class="mdi mdi-cart icon-lg text-danger"></i></a>
						<div class="ml-3">
							<p class="mb-0">Transaksi Belum Bayar</p>
							<h6><?php
								$total = 0;
								foreach ($transaksi as $value){
									if ($value['faktur_status'] == 'belum'){
										$total++;
									}
								}
								echo $total;
								?></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<div class="d-flex align-items-center justify-content-md-center">
						<a href="<?=base_url('admin')?>"><i class="mdi mdi-cart icon-lg text-warning"></i></a>
						<div class="ml-3">
							<p class="mb-0">Transaksi Menunggu</p>
							<h6>
								<?php
								$total = 0;
								foreach ($transaksi as $value){
									if ($value['faktur_status'] == 'tunggu'){
										$total++;
									}
								}
								echo $total;
								?>
							</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<div class="d-flex align-items-center justify-content-md-center">
						<a href="<?=base_url('admin')?>"><i class="mdi mdi-cart icon-lg text-success"></i></a>
						<div class="ml-3">
							<p class="mb-0">Transaksi Selesai</p>
							<h6>
								<?php
								$total = 0;
								foreach ($transaksi as $value){
									if ($value['faktur_status'] == 'sudah'){
										$total++;
									}
								}
								echo $total;
								?>
							</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
