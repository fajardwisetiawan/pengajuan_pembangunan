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

  mysqli_query($connect, "UPDATE proposal_pengajuan SET
  status2 = '0' WHERE id_proposal = '$id'");

    echo '<script language="javascript">swal("Hapus berhasil!", "Pembangunan ini telah dihapus", "success").then(() => { window.location="pembangunan-selesai-pengerjaan"; });</script>';


?>
