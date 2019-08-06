$(document).ready(function () {
	var root = window.location.origin + '/sipesan/';

});

function showTotal() {
	var panjang = $('#panjang').val();
	var lebar = $('#lebar').val();
	var bahan = $('#bahan').val();
	var jumlah = $('#jumlah').val();
	var luas = parseInt(panjang) * parseInt(lebar);
	var total = 0;
	var html = '';
	if (bahan === 'Biasa'){
		total = luas * jumlah * 20000;
		html = '' +
			'<h3> Rp. '+formatRupiah(total.toString())+'</h3>';
		$('#total').html(html);
	} else if (bahan === 'Menengah'){
		total = luas * jumlah * 30000;
		html = '' +
			'<h3> Rp. '+formatRupiah(total.toString())+'</h3>';
		$('#total').html(html);
	} else if (bahan === 'Bagus'){
		total = luas * jumlah * 35000;
		html = '' +
			'<h3> Rp. '+formatRupiah(total.toString())+'</h3>';
		$('#total').html(html);
	}
}

// ------------------------------------------------------------------------------------------
// Fungsi-fungsi
// ------------------------------------------------------------------------------------------

function formatRupiah(angka, prefix){
	var number_string = angka.replace(/[^,\d]/g, '').toString(),
		split   		= number_string.split(','),
		sisa     		= split[0].length % 3,
		rupiah     		= split[0].substr(0, sisa),
		ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

	// tambahkan titik jika yang di input sudah menjadi angka ribuan
	if(ribuan){
		separator = sisa ? '.' : '';
		rupiah += separator + ribuan.join('.');
	}

	rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
	return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}