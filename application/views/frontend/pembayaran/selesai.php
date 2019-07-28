<div class="gap"></div>
<div class="container">
	<div class="payment-success-icon fa fa-check-circle-o"></div>
	<div class="payment-success-title-area">
		<h1 class="payment-success-title"><?= $this->session->userdata('session_username');?>, Terima Kasih Telah Memesan</h1>
		<p class="lead">Silahkan transfer ke rekening <b><?=$bank?></b> sebesar <b>Rp. <?=nominal($pesanan['keranjang_total'])?></b> sebelum 1x24 jam.
			<br>Konfirmasi pembayaran <a href="#">DISINI</a>.
		</p>
	</div>
	<div class="gap gap-small"></div>
	<div class="row row-col-gap">
		<div class="col-md-4">
			<h3 class="widget-title">Order Summary</h3>
			<div class="box">
				<table class="table">
					<thead>
					<tr>
						<th>Product</th>
						<th>QTY</th>
						<th>Price</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>Gucci Patent Leather Open Toe Platform</td>
						<td>1</td>
						<td>$499</td>
					</tr>
					<tr>
						<td>Nikon D5200 24.1 MP Digital SLR Camera</td>
						<td>1</td>
						<td>$350</td>
					</tr>
					<tr>
						<td>Apple 11.6" MacBook Air Notebook</td>
						<td>1</td>
						<td>$1100</td>
					</tr>
					<tr>
						<td>Fossil Women's Original Boyfriend</td>
						<td>1</td>
						<td>$250</td>
					</tr>
					<tr>
						<td>Subtotal</td>
						<td></td>
						<td>$2199</td>
					</tr>
					<tr>
						<td>Shipping</td>
						<td></td>
						<td>$0</td>
					</tr>
					<tr>
						<td>Total</td>
						<td></td>
						<td>$2199</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-4">
			<h3 class="widget-title">Billing/Shipping Details</h3>
			<div class="box">
				<table class="table">
					<thead>
					<tr>
						<th>Shipping Details</th>
						<th>Billing Details</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>DHL Shipping</td>
						<td></td>
					</tr>
					<tr>
						<td>United States</td>
						<td>United States</td>
					</tr>
					<tr>
						<td>1630 Columbia Road Northwest</td>
						<td>1630 Columbia Road Northwest</td>
					</tr>
					<tr>
						<td>(202) 476-5580</td>
						<td>(202) 476-5580</td>
					</tr>
					<tr>
						<td>Milly Adams</td>
						<td>Milly Adams</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-4">
			<h3 class="widget-title">Share Purchase</h3>
			<div class="box">
				<ul class="payment-success-product-list">
					<li>
						<img src="<?=base_url()?>assets/frontend/img/cart/1.jpg" alt="Image Alternative text" title="Image Title" />
					</li>
					<li>
						<img src="<?=base_url()?>assets/frontend/img/cart/2.jpg" alt="Image Alternative text" title="Image Title" />
					</li>
					<li>
						<img src="<?=base_url()?>assets/frontend/img/cart/3.jpg" alt="Image Alternative text" title="Image Title" />
					</li>
					<li>
						<img src="<?=base_url()?>assets/frontend/img/cart/4.jpg" alt="Image Alternative text" title="Image Title" />
					</li>
				</ul>
				<p class="lead">Share your purchase to get a discount on the next one!</p>
				<ul class="payment-success-share-list">
					<li>
						<a class="fa fa-facebook" href="#"></a>
					</li>
					<li>
						<a class="fa fa-twitter" href="#"></a>
					</li>
					<li>
						<a class="fa fa-google-plus" href="#"></a>
					</li>
					<li>
						<a class="fa fa-pinterest" href="#"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="gap gap-small"></div>
</div>
