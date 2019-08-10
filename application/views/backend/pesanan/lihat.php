<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h3 class="card-title">
				Detail Pesanan
			</h3>
			<div>
				<table>
					<tr>
						<td>Nama Pemesan</td>
						<td> :</td>
						<td>&nbsp;
							<?= $transaksi['pengguna_nama'] ?>
						</td>
					</tr>
					<tr>
						<td>Nomor HP</td>
						<td> :</td>
						<td>&nbsp;
							<?= $transaksi['pengguna_nomor_hp'] ?>
						</td>
					</tr>
					<tr>
						<td>Waktu Pemesanan</td>
						<td> :</td>
						<td>&nbsp;
							<?php
							$tanggal = explode(" ", $transaksi['faktur_date_created']);
							echo $tanggal[1] . ', ' . date_indo($tanggal[0]);
							?>
						</td>
					</tr>
				</table>
				<hr>
				<?php
				if ($spanduk == !null):
					?>
					<h5>Spanduk</h5>
				<table class="table">
					<thead>
					<tr>
						<th>No</th>
						<th>Ukuran (m)</th>
						<th>Jenis Bahan</th>
						<th>Jumlah</th>
						<th>Foto</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					foreach ($spanduk as $key => $value):
						?>
					<tr>
						<td><?=$no?></td>
						<td><?=$value['spanduk_panjang']?> x <?=$value['spanduk_lebar']?> </td>
						<td><?=$value['spanduk_bahan']?></td>
						<td><?=$value['spanduk_jumlah']?></td>
						<td>
							<a href="<?=base_url('admin/pesanan/foto/'.$value['spanduk_id'])?>" class="badge badge-primary"><i class="fa fa-eye"></i> Lihat</a>
						</td>
					</tr>
					<?php
					$no++;
					endforeach;
					?>
					</tbody>
				</table>
				<?php
				endif;
				?>
				<hr>
			</div>
		</div>
	</div>
</div>
