<?php
function tampil_full_kelas_byid($id)
{
    $ci = &get_instance();
    $ci->load->database();
    $result = $ci->db->where('id', $id)->get('kelas');
    foreach ($result->result() as $c) {
        $stmt = $c->tingkat . ' ' . $c->jurusan;
        return $stmt;
    }
}
function tampil_full_mapel($id)
{
    $ci = &get_instance();
    $ci->load->database();
    $result = $ci->db->where('id', $id)->get('mapel');
    foreach ($result->result() as $c) {
        $stmt = $c->nama_mapel;
        return $stmt;
    }
}
function tampil_full_sekolah($id)
{
    $ci = &get_instance();
    $ci->load->database();
    $result = $ci->db->where('id_sekolah', $id)->get('sekolah');
    foreach ($result->result() as $c) {
        $stmt = $c->nama_sekolah;
        return $stmt;
    }
}