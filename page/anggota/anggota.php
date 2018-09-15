<?php

ob_start();

?>

<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-info">
            <div class="panel-heading" style="">
            DATA ANGGOTA
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Program Studi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                $no = 1;
                                $sql = $koneksi->query ("select * from tb_anggota");

                                while ($data = $sql->fetch_assoc()) {
                                    
                                    $jk = ($data['jk']==L)?"Laki-laki":"Perempuan"; 
                                    $prodi = ($data['prodi']==TI)?"Teknik Informatika":"Sistem Informasi"; 
                            ?>

                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['nim'];?></td>
                                <td><?php echo $data['nama'];?></td>
                                <td><?php echo $data['tempat_lahir'];?></td>
                                <td><?php echo $data['tgl_lahir'];?></td>
                                <td><?php echo $jk; ?></td>
                                <td><?php echo $prodi; ?></td>
                                <td>
                                    <a href="?page=anggota&aksi=ubah&id=<?php echo $data['nim'];?>" class="btn btn-info">Ubah</a>    
                                    <a onclick="return confirm('Anda yakin akan Menghapus Data ini...???')" href="?page=anggota&aksi=hapus&id=<?php echo $data['nim'];?>" class="btn btn-danger">Hapus</a>        
                                </td>
                            </tr>

                            <?php } ?>

                        <tbody>
                        </table>
                    </div>

                    <a href="?page=anggota&aksi=tambah" class="btn btn-success" style="margin-top: 8px;">
                    <i class="fa fa-plus-circle"></i> Tambah Anggota</a>
                    
                    <a href="./laporan/laporan_anggota_excel.php" target="blank" class="btn btn-default" style="margin-top: 8px">
                    <i class="fa fa-print"></i> ExportToExcel </a>

                    <a href="./laporan/laporan_anggota_pdf.php" target="blank" class="btn btn-default" style="margin-top: 8px">
                    <i class="fa fa-print"></i> ExportToPdf </a>

                </div>
            </div>
        </div>
</div>