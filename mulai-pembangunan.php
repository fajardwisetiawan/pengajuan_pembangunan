<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
	 <meta charset="utf-8">
	 <script type="text/javascript" src="assets/vendor/sweetalert/sweetalert.min.js"></script>
 </head>
</html>
<?php
include('koneksi.php');
// include('session.php');

function antiinjection($data){
    $filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
    return $filter_sql;
}

$id = antiinjection($_GET['id_proposal']);
$tgl = date('Y-m-d');

  mysqli_query($connect, "UPDATE proposal_pengajuan SET
  `tanggal_mulai_pelaksanaan` = '$tgl',
  status2 = '2' WHERE id_proposal = '$id'");

    echo '<script language="javascript">swal("Berhasil memulai pembangunan!", "Pembangunan telah dimulai pekerjaannya", "success").then(() => { window.location="pembangunan-belum-dikerjakan"; });</script>';


?>
