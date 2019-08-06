<?php
if ($keranjang == !null):
	?>
	<div class="container">
		<header class="page-header">
			<h1 class="page-title">Keranjang</h1>
		</header>
		<div class="row">
			<div class="col-md-10">
				<!--			<h4>Stiker</h4>-->
				<!--			<table class="table table-shopping-cart">-->
				<!--				<thead>-->
				<!--				<tr>-->
				<!--					<th>Foto</th>-->
				<!--					<th>Panjang</th>-->
				<!--					<th>Lebar</th>-->
				<!--					<th>Bahan</th>-->
				<!--					<th>Jumlah</th>-->
				<!--					<th>Estimasi</th>-->
				<!--					<th>Total</th>-->
				<!--				</tr>-->
				<!--				</thead>-->
				<!--				<tbody>-->
				<!---->
				<!--				</tbody>-->
				<!--			</table>-->
				<!--			<div class="gap gap-small"></div>-->
				<h4>Spanduk</h4>
				<table class="table table-bordered table-shopping-cart">
					<thead>
					<tr>
						<th>Foto</th>
						<th>Panjang</th>
						<th>Lebar</th>
						<th>Bahan</th>
						<th>Jumlah</th>
						<th>Estimasi</th>
						<th>Total</th>
					</tr>
					</thead>
					<tbody>
					<?php
					foreach ($spanduk as $key => $value):
						?>
						<tr>
							<td><img src="<?= base_url('assets/images/spanduk/') . $value['spanduk_foto'] ?>" alt="foto"
									 style="width: 100%"></td>
							<td><?= $value['spanduk_panjang'] ?> cm</td>
							<td><?= $value['spanduk_lebar'] ?> cm</td>
							<td><?= $value['spanduk_bahan'] ?></td>
							<td><?= $value['spanduk_jumlah'] ?> </td>
							<td><?= $value['spanduk_estimasi'] ?> Hari</td>
							<td style="text-align: right"> Rp.<?= nominal($value['spanduk_total']) ?></td>
						</tr>
					<?php
					endforeach;
					?>
					</tbody>
				</table>
				<div class="gap gap-small"></div>
			</div>
			<div class="col-md-2">
				<h4>Total</h4>
				<h3>Rp. <?= nominal($keranjang['keranjang_total']) ?></h3>
				<a class="btn btn-primary" href="<?= base_url('bayar/' . $keranjang['keranjang_id']) ?>">Bayar</a>
			</div>
		</div>
	</div>
<?php
else:
	?>
	<div class="container">
		<div class="text-center"><i class="fa fa-cart-arrow-down empty-cart-icon"></i>
			<p class="lead">Keranjang Kamu Kosong</p><a class="btn btn-primary btn-lg" href="<?= base_url() ?>">Pesan
				Sekarang <i class="fa fa-long-arrow-right"></i></a>
		</div>
	</div>
<?php
endif;
?>
