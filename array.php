<?php
$matakuliah = [
    ["kode" => "MK02", "nama" => "Desain Web", "dosen" => "Haeril Gunadi"],
    ["kode" => "MK03", "nama" => "PHP Programming", "dosen" => "Aryadi"],
    ["kode" => "MK04", "nama" => "Frontend Developer", "dosen" => "Yazid"],
]
?>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode MK</th>
            <th>Nama Matakuliah</th>
            <th>Dosen</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($matakuliah as $row) {
            echo '<tr>
                    <td>' . $nomor . '</td>
                    <td>' . $row['kode'] . '</td>
                    <td>' . $row['nama'] . '</td>
                    <td>' . $row['dosen'] . '</td>
                  </tr>';
            $nomor++; // nomor tambahkan 1
        }
        ?>
    </tbody>
</table>