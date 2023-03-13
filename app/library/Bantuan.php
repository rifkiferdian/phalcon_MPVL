<?php 

class Bantuan {

	public function dateBahasaIndo($date, $short_bln = '') {
		
		if (substr($date, 0, 10) == '0000-00-00') {
			return false;
		}
		$bulan = array(
			'01' => 'Januari',
			'02' => 'Februari',
			'03' => 'Maret',
			'04' => 'April',
			'05' => 'Mei',
			'06' => 'Juni',
			'07' => 'Juli',
			'08' => 'Agustus',
			'09' => 'September',
			'10' => 'Oktober',
			'11' => 'November',
			'12' => 'Desember',
		);

		$pecah = explode('-', $date);
		$bln = $pecah[1];
		$thn = $pecah[0];
		if (strlen($date) > 10) {
			$tgl_arr = explode(" ", $pecah[2]);
			$tgl = $tgl_arr[0];
			$detik = substr($date, -8, 5);
		} else {
			$tgl = $pecah[2];
			$detik = '';
		}
		if ($short_bln == 1) {
			return $tgl . ' ' . substr($bulan[$bln], 0, 3) . ' ' . $thn . ' ' . $detik;
		}elseif($short_bln == 2) {
			return $tgl . ' ' . $bulan[$bln] . ' ' . $thn;
		}else {
			return $tgl . '-' . $bulan[$bln] . '-' . $thn;
		}
	}


	public function angka_ke_romawi($angka)
	{
		$romawi[1] = 'I';
		$romawi[2] = 'II';
		$romawi[3] = 'III';
		$romawi[4] = 'IV';
		$romawi[5] = 'V';
		$romawi[6] = 'VI';
		$romawi[7] = 'VII';
		$romawi[8] = 'VIII';
		$romawi[9] = 'IX';
		$romawi[10] = 'X';
		$romawi[11] = 'XI';
		$romawi[12] = 'XII';
		$romawi[13] = 'XIII';

		return $romawi[$angka];
	}

}



 ?>