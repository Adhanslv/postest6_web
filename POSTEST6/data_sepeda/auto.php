<?php
include '..\koneksi.php';

    // Mengambail nilai maximum dari id as = ALiAS maxKode;
    // Membuat id automatis;
    // ID DATA;
	$tampil = "SELECT max(id_data) as maxKode FROM tb_data";
	$query = $dbh->query($tampil);
	foreach($query as $data){
		$kode = $data['maxKode'];
		$noUrut = (int) substr($kode, 3,3);
		@$noUrut++;
		$char = "DT";
		$idData = $char . sprintf("%03s", $noUrut);
	}


    // NS POLYGON;
	$tampil = "SELECT max(ns_polygon) as maxKode FROM tb_data";
	$query = $dbh->query($tampil);
	foreach($query as $data){
		$kode = $data['maxKode'];
		$noUrut = (int) substr($kode, 3,3);
		@$noUrut++;
		$char = "NS";
		$nsPolygon = $char . sprintf("%03s", $noUrut);
	}

    // NS CERVELO;
	$tampil = "SELECT max(ns_cervelo) as maxKode FROM tb_data";
	$query = $dbh->query($tampil);
	foreach($query as $data){
		$kode = $data['maxKode'];
		$noUrut = (int) substr($kode, 3,3);
		@$noUrut++;
		$char = "CEL";
		$nsCervelo = $char . sprintf("%03s", $noUrut);
	}

    // NS CERVELO;
	$tampil = "SELECT max(ns_fixie) as maxKode FROM tb_data";
	$query = $dbh->query($tampil);
	foreach($query as $data){
		$kode = $data['maxKode'];
		$noUrut = (int) substr($kode, 3,3);
		@$noUrut++;
		$char = "FIX";
		$nsFixie = $char . sprintf("%03s", $noUrut);
	}

?>