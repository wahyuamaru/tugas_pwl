<?php
require "koneksi.php";

function query_view($query_view) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query_view);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id_mhs){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tb_mahasiswa WHERE id_mhs = $id_mhs");

    return mysqli_affected_rows($koneksi);
}

function update($data_mhs) {
    global $koneksi;
    //ambil elemen data
    $id_mahasiswa = $data_mhs["id"];
    $ktp = htmlspecialchars($data_mhs["ktp_mhs"]);
    $nim = htmlspecialchars($data_mhs["nim_mhs"]);
    $nama = htmlspecialchars($data_mhs["nama_mhs"]);
    $agama = htmlspecialchars($data_mhs["agama_mhs"]);
    $tgllahir = htmlspecialchars($data_mhs["tgllahir_mhs"]);
    $jk = htmlspecialchars($data_mhs["jk_mhs"]);
    $alamat = htmlspecialchars($data_mhs["alamat_mhs"]);
    $email = htmlspecialchars($data_mhs["email_mhs"]);
    $notlp = htmlspecialchars($data_mhs["notlp_mhs"]);

    //query
    $query = "UPDATE tb_mahasiswa SET
                ktp_mhs = '$ktp',
                nim_mhs = '$nim',
                nama_mhs = '$nama',
                agama_mhs = '$agama',
                tgllahir_mhs = '$tgllahir',
                jk_mhs = '$jk',
                alamat_mhs = '$alamat',
                email_mhs = '$email',
                notlp_mhs = '$notlp'
            WHERE id_mhs = $id_mahasiswa
            ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

?>