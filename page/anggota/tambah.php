<script type="text/javascript">
    function validasi(form) {
        alert("Nim Tidak Boleh Kosong");
        form.nim.focus();
        return (false);
    }if (form.nama.value=="") {
        alert("Nama Tidak Boleh Kosong");
        form.nama.focus();
        return(false);
    }if (form.tempat_lahir.value=="") {
        alert("Tempat Lahir Tidak Boleh Kosong");
        form.tempat_lahir.focus();
        return(false);
    }if (form.tgl_lahir.value=="") {
        alert("Tanggal Lahir Tidak Boleh Kosong");
        form.tgl_lahir.focus();
        return(false);
    }if (form.jk.value=="") {
        alert("Jenis kelamin Tidak Boleh Kosong");
        form.jk.focus();
        return(false);
    }
    return (true);
    }
</script>

<div class="panel panel-primary">
    <div class="panel-heading">
        Tambah Anggota
    </div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            
        <form method="POST" onsubmit="return validasi(this)">
                <div class="form-group">
                    <label>Nim</label>
                    <input class="form-control" name="nim" />  
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="nama" />  
                </div>

                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" name="tempat_lahir" />  
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" name="tgl_lahir" type="date" />  
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label><br/>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="L" name="jk" <?php if ($jkL==L) {
                            echo "selected";
                        } ?> /> Laki laki
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="P" name="jk" <?php if ($jkL==P) {
                            echo "selected";
                        } ?>/> Perempuan
                    </label>
                </div>

                    <div class="form-group">
                    <label>Prodi</label>
                    <select class="form-control" name="prodi">
                        <option value="TI">Teknik Informatika</option>
                        <option value="SI">Sistem Informasi</option>
                    </select>
                </div>

                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

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

$simpan      = $_POST['simpan']; 

if ($simpan == 'Simpan') {

    $sql = $koneksi->query ("INSERT INTO tb_anggota (nim, nama, tempat_lahir, tgl_lahir, jk, prodi) 
    VALUES ('$nim', '$nama', '$tempat_lahir', '$tgl_lahir', '$jk', '$prodi')");

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
