<?php
    $ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 70, 'tugas' => 100];
    $ns2 = ['id' => 2, 'nim' => '01102', 'uts' => 80, 'uas' => 70, 'tugas' => 95];  
    $ns3 = ['id' => 3, 'nim' => '01103', 'uts' => 80, 'uas' => 70, 'tugas' => 90];  
    $ns4 = ['id' => 4, 'nim' => '01104', 'uts' => 80, 'uas' => 70, 'tugas' => 85];  
    $ns5 = ['id' => 5, 'nim' => '01105', 'uts' => 80, 'uas' => 70, 'tugas' => 80];  

    $ar_nilai = [$ns1, $ns2, $ns3, $ns4, $ns5];
?>    

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 01</title>
</head>
<style>
    table{
        border:"1";
        width:"100%"
    }
</style>
<body>
    <h3>Daftar Nilai</h3>
    <table>
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach($ar_nilai as $ns) {
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td>'.$ns['nim'].'</td>';
            echo '<td>'.$ns['uts'].'</td>';
            echo '<td>'.$ns['uas'].'</td>';
            echo '<td>'.$ns['tugas'].'</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;
            echo '<td>'.number_format($nilai_akhir,2,',',',').'</td>';
            echo '<tr/>';
            $nomor++;
        }
        ?>
    </tbody>
</table>
</body>
</html>