<?php
include_once('koneksi.php');
if (isset($_GET['id'])) {
    $npm = $_GET['id'];
    $sql = "SELECT * FROM mahasiswa WHERE id = '$npm'";
    $query = mysqli_query($db, $sql);
    $data = mysqli_fetch_assoc($query);
} else {
    echo "ID mahasiswa tidak ditemukan.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="library/assets/styles.css" rel="stylesheet" media="screen">
    <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <title>EDIT FORM</title>
</head>

<body>
    <div class="container">
        <form action="proses.php" method="POST">
            <fieldset>
                <legend>FORM EDIT MAHASISWA</legend>
                <div class="control-group">
                    <label for="npm">NAMA</label>
                    <div class="controls">
                        <input type="text" name="input1" value="<?php echo $data['nama_mhs']; ?>">
                    </div>
                </div>
                <div class="control-group">
                    <label for="npm">PRODI</label>
                    <div class="controls">
                        <input type="text" name="input2" value="<?php echo $data['prodi_mhs']; ?>">
                    </div>
                </div>
                <div class="control-group">
                 <label for="npm">JENIS KELAMIN</label>
                  <label for="npm">Laki-laki</label>
                  <input type="radio" id="laki-laki" name="input3" value="Laki-laki">
                     <br>
                 <label for="npm">Perempuan</label>
                  <input type="radio" id="perempuan" name="input3" value="Perempuan">
                    <div class="controls">
                        <label for="laki-laki">Tidak Di ketahui</label>
                         <input type="radio" name="input3"
                          value="">
                   </div>

                <div class="form_action">
                    <button type="submit" class="btn btn-success" name="proses">Kirim</button>
                    <button action="form3.php"type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>