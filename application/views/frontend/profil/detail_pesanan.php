<div class="gap"></div>
<div class="container">
	<div class="row row-col-gap" data-gutter="60">
		<div class="col-md-3">
			<h3 class="widget-title"><?= $this->session->userdata('session_username');?></h3>
			<div class="box">
				<a href="<?=base_url('profil')?>" class="btn btn-default btn-block" style="text-align: left"><i class="fa fa-user-circle"></i> Profil</a>
				<a href="#" class="btn btn-primary btn-block" style="text-align: left"><i class="fa fa-list"></i> Data Pemesanan</a>
				<a href="#" class="btn btn-default btn-block" style="text-align: left"><i class="fa fa-sign-out"></i> Logout</a>
			</div>
		</div>
		<div class="col-md-9">
			<h3 class="widget-title">Detail Pemesanan</h3>
			<div class="box">
			</div>
		</div>
	</div>
</div>
