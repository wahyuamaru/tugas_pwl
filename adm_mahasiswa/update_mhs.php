<?php
include '../template/adm_nav.php';
require "../functions/function_mhsadm.php";

//ambil data url
$id = $_GET["id"];

//data mhs berdasarkan ID
$data_mahasiswa = query_view("SELECT * FROM tb_mahasiswa WHERE id_mhs = $id")[0];

//cek tombol submit ditekan/belum
if(isset($_POST["submit"])){
    
    //cek berhasil / tidak update data
    if(update($_POST) > 0 ) {
        echo "
            <script>
                alert('data BERHASIL diupdate');
                document.location.href = '../admin/adm_mahasiswa.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('data GAGAL diupdate');
                document.location.href = '../admin/adm_mahasiswa.php';
            </script>
        ";
    }
}
?>

<div class="container">
<div class="panel panel-default">
<div class="panel-heading">
<h1 align="center">Update Data Mahasiswa</h1>
</div>
<div class="panel-body">
    <form class="form-horizontal" action="" method="post">
    <div class="row">
        <div class="col-lg-6">
            <input type="hidden" name="id" value="<?php echo $data_mahasiswa["id_mhs"];?>">
            <div class="form-group">
                <label class="control-label col-sm-4" for="ktp_mhs">KTP :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="ktp_mhs" name="ktp_mhs" readonly value="<?php echo $data_mahasiswa["ktp_mhs"];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="nim_mhs">NIM :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nim_mhs" name="nim_mhs" readonly value="<?php echo $data_mahasiswa["nim_mhs"];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="nama_mhs">Nama Lengkap :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" required value="<?php echo $data_mahasiswa["nama_mhs"];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="agama_mhs">Agama :</label>
                <div class="col-sm-8"><select id="agama_mhs" name="agama_mhs" class="form-control select2" style="width: 100%;">
                    <option value="<?php echo $data_mahasiswa["agama_mhs"];?>" selected="selected"><?php echo $data_mahasiswa["agama_mhs"];?></option>
                    <option value="-">---</option>
                    <option value="Muslim">Muslim</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="tgllahir_mhs">Tanggal Lahir :</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tgllahir_mhs" name="tgllahir_mhs" required value="<?php echo $data_mahasiswa["tgllahir_mhs"];?>">
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="control-label col-sm-4" for="jk_mhs">Jenis Kelamin :</label>
                <div class="col-sm-8"><select id="jk_mhs" name="jk_mhs" class="form-control select2" style="width: 100%;">
                    <option value="<?php echo $data_mahasiswa["jk_mhs"];?>" selected="selected"><?php echo $data_mahasiswa["jk_mhs"];?></option>
                    <option value="Laki">Laki laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="alamat_mhs">Alamat :</label>
                <div class="col-sm-8">
                    <textarea id="alamat_mhs" name="alamat_mhs" class="form-control" required><?php echo $data_mahasiswa["alamat_mhs"];?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="email_mhs">Email :</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email_mhs" name="email_mhs" required value="<?php echo $data_mahasiswa["email_mhs"];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="notlp_mhs">No. Telepon :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="notlp_mhs" name="notlp_mhs" required value="<?php echo $data_mahasiswa["notlp_mhs"];?>">
                </div>
            </div>
        </div>
    </div>
    <hr>
    <button type="submit" name="submit" class="btn btn-primary">Update Data Mahasiswa</button>
    <a href="../admin/adm_mahasiswa.php" class="btn btn-danger">Batal</a>
    </form>
</div>
</div>
</div>


<?php
include '../template/footer.php';
?>