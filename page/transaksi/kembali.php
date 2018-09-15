<?php

    $id     = $_GET['id'];
    $judul  = $_GET['judul'];

    $sql = $koneksi->query("UPDATE tb_transaksi set status='kembali' where id='$id'");

    $sql = $koneksi->query("UPDATE tb_buku set jumlah_buku= (jumlah_buku+1) where judul='$judul' ");

    ?>
        <script type="text/javascript">
            alert ("Proses kembalian buku berhasil");
            window.location.href="?page=transaksi";
        </script>
<?php

?>