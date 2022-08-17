<h3> Pendaftaran Kerja Praktek </h3>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Tempat_KP</th>
        <th>Alamat_KP</th>
        <th>Tanggal_mulai</th>
        <th>Tanggal_selesai</th>
        <th>Proposal</th>
        <th>Anggota_Kelompok_Id</th>
        <th>Dosen_Id</th>
        <th>Perusahaan_Id</th>
    </tr>

    <?php

    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi, "select * from pendaftaran");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo"
        <tr>

            <td>$Id</td>
            <td>$tampil[Tempat_KP]</td>
            <td>$tampil[Alamat_KP]</td>
            <td>$tampil[Tanggal_mulai]</td>
            <td>$tampil[Tanggal_selesai]</td>
            <td>$tampil[Proposal]</td>
            <td>$tampil[Anggota_Kelompok_Id]</td>
            <td>$tampil[Dosen_Id]</td>
            <td>$tampil[Perusahaan_Id]</td>
        </tr>";

        $no=113;
        
    }

    ?>
</table>
