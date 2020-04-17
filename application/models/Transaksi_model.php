<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{
    public function getTransaksi(){
        $query = "SELECT * FROM transaksi ORDER BY tanggal DESC";
        return $this->db->query($query)->result_array();
    }
    public function getTransaksiMasuk(){
        $query = "SELECT * FROM transaksi WHERE `arah` IN ('Income') ORDER BY tanggal DESC";
        return $this->db->query($query)->result_array();
    }
    public function getTransaksiKeluar(){
        $query = "SELECT * FROM transaksi WHERE `arah` IN ('Spending') ORDER BY tanggal DESC";
        return $this->db->query($query)->result_array();
    }
}