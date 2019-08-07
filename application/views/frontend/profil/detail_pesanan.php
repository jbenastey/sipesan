<div class="gap"></div>
<div class="container">
	<div class="row row-col-gap" data-gutter="60">
		<div class="col-md-3">
			<h3 class="widget-title"><?= $this->session->userdata('session_username');?></h3>
			<div class="box">
				<a href="<?=base_url('profil')?>" class="btn btn-default btn-block" style="text-align: left"><i class="fa fa-user-circle"></i> Profil</a>
				<a href="#" class="btn btn-primary btn-block" style="text-align: left"><i class="fa fa-list"></i> Data Pemesanan</a>
				<a href="<?=base_url('logout')?>" onclick="return confirm('Logout? ')"  class="btn btn-default btn-block" style="text-align: left"><i class="fa fa-sign-out"></i> Logout</a>
			</div>
		</div>
		<div class="col-md-9">
			<h3 class="widget-title"><i class="fa fa-list"></i> Detail Pemesanan</h3>
			<div class="box">
				<table>
					<tr>
						<td>Nomor Faktur </td>
						<td> : </td>
						<td>&nbsp;&nbsp;<?=$pesanan['faktur_id']?></td>
					</tr>
					<tr>
						<td>Status Pemesanan &nbsp;</td>
						<td> : </td>
						<td>&nbsp;
							<?php if ($pesanan['faktur_status'] == 'belum'):?>
								<label class="label label-warning">Belum dikonfirmasi</label>
								<a href="<?=base_url('konfirmasi/'.$pesanan['faktur_id'])?>" class="label label-primary">Konfirmasi Pembayaran</a>
							<?php elseif ($pesanan['faktur_status'] == 'sudah'):?>
								<label class="label label-primary">Selesai</label>
							<?php elseif ($pesanan['faktur_status'] == 'tunggu'):?>
								<label class="label label-primary">Menunggu</label>
							<?php endif;?>
						</td>
					</tr>
					<tr>
						<td>Nama Pemesan </td>
						<td> : </td>
						<td>&nbsp;
							<?= $this->session->userdata('session_nama')?>
						</td>
					</tr>
					<tr>
						<td>Nomor HP </td>
						<td> : </td>
						<td>&nbsp;
							<?= $this->session->userdata('session_nomor_hp')?>
						</td>
					</tr>
					<tr>
						<td>Waktu Pemesanan </td>
						<td> : </td>
						<td>&nbsp;
							<?php
							$tanggal = explode(" ",$pesanan['faktur_date_created']);
							echo $tanggal[1].', '.date_indo($tanggal[0]);
							?>
						</td>
					</tr>
				</table>
				<hr>
				<table width="100%" >
					<tr>
						<td><b>Status Pembayaran &nbsp; :</b>
							<?php if ($pesanan['faktur_status'] == 'belum'):?>
								<label class="label label-warning">Belum Lunas</label>
							<?php elseif ($pesanan['faktur_status'] == 'sudah'):?>
								<label class="label label-success">Lunas</label>
							<?php elseif ($pesanan['faktur_status'] == 'tunggu'):?>
								<label class="label label-success">Lunas</label>
							<?php endif;?>
						</td>
						<td style="float: right"><b>Total Pembayaran : Rp. <?=nominal($pesanan['keranjang_total'])?></b></td>
					</tr>
				</table>
				<hr>
				<table class="table">
					<thead>
					<tr>
						<th>Jenis</th>
						<th>Jumlah</th>
						<th>Harga</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<?php
						if ($spanduk == !null):
							?>
							<td>Spanduk</td>
							<td><?=count($spanduk)?></td>
							<td>
								<?php
								$harga = 0;
								foreach ($spanduk as $key=>$value) {
									$harga = $harga + $value['spanduk_total'];
								}
								echo 'Rp. '.nominal($harga)
								?>
							</td>
						<?php
						endif;
						?>
					</tr>
					<tr>
						<?php
						if ($stiker == !null):
							?>
							<td>Stiker</td>
							<td><?=count($stiker)?></td>
							<td>
								<?php
								$harga = 0;
								foreach ($stiker as $key=>$value) {
									$harga = $harga + $value['stiker_total'];
								}
								echo 'Rp. '.nominal($harga)
								?>
							</td>
						<?php
						endif;
						?>
					</tr>
					</tbody>
					<tfoot>
					<tr>
						<td colspan="2">Total</td>
						<td>Rp. <?= nominal($pesanan['keranjang_total']) ?></td>
					</tr>
					</tfoot>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
