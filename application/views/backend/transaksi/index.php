<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">
				Data Pelanggan
			</h4>
			<div class="table-responsive">
				<table id="order-listing" class="table table-bordered">
					<thead>
					<tr>
						<th style="width: 1%;">No</th>
						<th>Nomor Faktur</th>
						<th>Nama Pemesan</th>
						<th>Tanggal Pemesanan</th>
						<th>Total</th>
						<th style="text-align: center"><i class="icon-settings"></i></th>
					</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					foreach ($transaksi as $key=>$value):
					?>
					<tr>
						<td><?=$no?></td>
						<td><?=$value['faktur_id']?></td>
						<td><?=$value['keranjang_pengguna_id']?></td>
						<td><?=$value['faktur_date_created']?></td>
						<td><?=$value['keranjang_total']?></td>
						<td>lihat</td>
					</tr>
					<?php
					$no++;
					endforeach;
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
