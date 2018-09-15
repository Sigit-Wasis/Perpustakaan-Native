<div class="panel panel-info">
    <div class="panel-heading">
        Tambah Buku
    </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                <form method="POST" action="?page=buku&aksi=tambah">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="judul" />  
                                        </div>

                                        <div class="form-group">
                                            <label>pengarang</label>
                                            <input class="form-control" name="pengarang" />  
                                        </div>

                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" name="penerbit" />  
                                        </div>

                                         <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" name="tahun">
                                                <?php

                                                    $tahun = date ("Y");

                                                    for ($i = $tahun-29; $i <= $tahun; $i++) { 
                                                        echo '
                                                            <option value="'.$i.'">'.$i.'</option>
                                                        ';
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input class="form-control" name="isbn" />  
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input class="form-control" name="jumlah" type="number" />  
                                        </div>

                                         <div class="form-group">
                                            <label>Lokasi</label>
                                            <select class="form-control" name="lokasi">
                                                <option value="rak1">Rak 1</option>
                                                <option value="rak2">Rak 2</option>
                                                <option value="rak3">Rak 3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input class="form-control" name="tanggal" type="date" />  
                                        </div>

                                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
 
                                    </div>
                                </form>
                            </div>
</div>
</div>
</div>
<?php

$judul       = $_POST['judul'];
$pengarang   = $_POST['pengarang'];
$penerbit    = $_POST['penerbit'];
$tahun       = $_POST['tahun'];
$isbn        = $_POST['isbn'];
$jumlah      = $_POST['jumlah'];
$lokasi      = $_POST['lokasi'];
$tanggal     = $_POST['tanggal'];

$simpan      = $_POST['simpan']; 

if ($simpan == 'Simpan') {

    $sql = $koneksi->query ("INSERT INTO tb_buku (judul, pengarang, penerbit, tahun_terbit, isbn, jumlah_buku, lokasi, tgl_input) 
    VALUES ('$judul', '$pengarang', '$penerbit', '$tahun', '$isbn', '$jumlah', '$lokasi', '$tanggal')");

    if ($sql) {
        ?>
            <script type="text/javascript">

                alert ("Data Berhasil Disimpan");
                window.location.href="?page=buku";

            </script>
        <?php
    }
}

?>
