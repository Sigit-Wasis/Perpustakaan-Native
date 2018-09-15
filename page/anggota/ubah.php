<?php

    $nim    = $_GET['id'];
    $sql    = $koneksi->query("select * from tb_anggota where nim = '$nim'");
    $tampil = $sql->fetch_assoc();
    $jkL    = $tampil['jk'];
    $prodi  = $tampil['prodi'];

?>


<div class="panel panel-default">
    <div class="panel-heading">
        Ubah Anggota
    </div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            
        <form method="POST" >
                <div class="form-group">
                    <label>Nim</label>
                    <input class="form-control" name="nim" value="<?php echo $tampil['nim']?>" readonly />  
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="nama" value="<?php echo $tampil['nama']?>" />  
                </div>

                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" name="tempat_lahir" value="<?php echo $tampil['tempat_lahir']?>" />  
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" name="tgl_lahir" type="date" value="<?php echo $tampil['tgl_lahir']?>" />  
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label><br/>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="L" name="jk" <?php echo ($jkL==L)?"checked":"";?> /> Laki laki
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="P" name="jk" <?php echo ($jkL==P)?"checked":"";?> /> Perempuan
                    </label>
                </div>

                    <div class="form-group">
                    <label>Prodi</label>
                    <select class="form-control" name="prodi">
                        <option value="TI" <?php if ($prodi==TI) {
                            echo "selected";
                        } ?>>Teknik Informatika</option>
                        <option value="SI" <?php if ($prodi==SI) {
                            echo "selected";
                        } ?>>Sistem Informasi</option>
                    </select>
                </div>

                <input type="submit" name="ubah" value="Ubah" class="btn btn-primary">

            </div>
        </form>
    </div>
</div>
</div>
</div>
<?php

$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$tempat_lahir   = $_POST['tempat_lahir'];
$tgl_lahir      = $_POST['tgl_lahir'];
$jk             = $_POST['jk'];
$prodi          = $_POST['prodi'];

$ubah      = $_POST['ubah']; 

if ($ubah == 'Ubah') {

    $sql = $koneksi->query ("update tb_anggota set nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jk='$jk', 
    prodi='$prodi' where nim='$nim' ");

    if ($sql) {
        ?>
            <script type="text/javascript">

                alert ("Data Berhasil Disimpan");
                window.location.href="?page=anggota";

            </script>
        <?php
    }
}

?>
