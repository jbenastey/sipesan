<div class="col-12">
	<div class="card">
		<div class="card-body">
			<?php
			if ($spanduk != null):
			?>
			<h3 class="card-title">
				Foto Spanduk
			</h3>
			<img src="<?=base_url('assets/images/spanduk/'.$spanduk['spanduk_foto'])?>" style="width: 100%" alt="">
			<?php
			endif;
			?>
			<?php
			if ($stiker != null):
			?>
			<h3 class="card-title">
				Foto Stiker
			</h3>
			<img src="<?=base_url('assets/images/stiker/'.$stiker['stiker_foto'])?>" style="width: 100%" alt="">
			<?php
			endif;
			?>
			<?php
			if ($kartu != null):
			?>
			<h3 class="card-title">
				Foto Kartu Nama
			</h3>
			<img src="<?=base_url('assets/images/kartu/'.$kartu['kartu_foto'])?>" style="width: 100%" alt="">
			<?php
			endif;
			?>
			<?php
			if ($brosur != null):
			?>
			<h3 class="card-title">
				Foto Brosur
			</h3>
			<img src="<?=base_url('assets/images/brosur/'.$brosur['brosur_foto'])?>" style="width: 100%" alt="">
			<?php
			endif;
			?>
		</div>
	</div>
</div>
