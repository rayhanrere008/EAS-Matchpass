<?php
    include('koneksi.php');
    require_once("vendor/dompdf/autoload.inc.php");
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    $query = mysqli_query($koneksi, "SELECT * FROM tb_klub");
    $html = '<center><h3>Daftar Klub Pertandingan BRI Liga 1</h3></center><hr/><br/>';
    $html .= '
    <table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Manager</th>
            <th>Julukan</th>
            <th>Suporter</th>
        </tr>';
    $no = 1;
    while ($row = mysqli_fetch_array($query)) {
        $html .= 
        " <tr>
            <td>".$no."</td>
            <td>".$row['nama']."</td>
            <td>".$row['deksripsi']."</td>
            <td>".$row['manajer']."</td>
            <td>".$row['julukan']."</td>
            <td>".$row['suporter']."</td>
        </tr>";
        $no++;
    }
    $html .= "</html>";
    $dompdf -> loadHtml($html);
    // Setting ukuran dan orientasi kertas
    $dompdf -> setPaper('A4', 'potrait');
    // Rendering dari HTML ke PDF
    $dompdf -> render();
    // Melakukan output file Pdf
    $dompdf -> stream('Laporan Klub BRI Liga 1.pdf');

    echo "<script>alert('Berhasil Report Data'); window.location.href = 'tabel_klub.php';</script>";
?>