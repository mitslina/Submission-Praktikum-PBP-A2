<?php
// Nama : Mitslina
// Nim  : 24060121130068
// lab  : A2

require_once('./lib/db_login.php');

/* TODO 6 : mengambil data kabupaten dari tabel 'tb_kabs' dengan parameter kode_prov*/
$kode_prov = $_GET['kode_prov'];

$query = "SELECT * FROM tb_kabs WHERE kode_prov = '".$kode_prov."'";
$result = $db->query($query);

if (!$result) {
    die("Could not query the database: <br>" . $db->error);
}else {
    echo '<option selected disabled value = "">Pilih Kabupaten</option>';
    while($row = $result->fetch_object()){
        echo '<option value = "'.$row->kode_kab.'">'.$row->nama_kab.'</option>';
    }
}

$result->free();
$db->close();
?>
