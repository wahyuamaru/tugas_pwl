<?php
require "../koneksi.php";
include "../template/mhs_nav.php";

require "../functions/function_mhs.php";
$matkul_view = matkul_view("SELECT * FROM tb_matkul");
?>

<div class="container">
    <div class="table-responsive">
        <h3>Daftar Mata Kuliah Universitas W.A.R</h3>
        <hr>

        <table class="table table-stripped table-hover datatabel">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>Jumlah SKS</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $i=1;
            foreach ($matkul_view as $row){
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["kode_matkul"];?></td>
                <td><?php echo $row["nama_matkul"];?></td>
                <td><?php echo $row["jmlsks_matkul"];?></td>
                <td><?php echo $row["semester_matkul"];?></td>
            </tr>
        <?php
            }
        ?>
        </tbody>
        </table>
    </div>
</div> <!--container-->

<?php
include "../template/footer.php";
?>