<?php
    include('koneksi.php');
    require_once("vendor/dompdf/autoload.inc.php");
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    $query = mysqli_query($koneksi, "SELECT * FROM tb_jadwal");
    $html = '<center><h3>Daftar Jadwal Pertandingan BRI Liga 1</h3></center><hr/><br/>';
    $html .= '
    <table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>Pertandingan</th>
            <th>Hari</th>
            <th>Tanggal</th>
            <th>Kick Off</th>
            <th>Stadion</th>
        </tr>';
    $no = 1;
    while ($row = mysqli_fetch_array($query)) {
        $html .= 
        " <tr>
            <td>".$no."</td>
            <td>".$row['pertandingan']."</td>
            <td>".$row['hari']."</td>
            <td>".$row['tanggal']."</td>
            <td>".$row['jam']."</td>
            <td>".$row['stadion']."</td>
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
    $dompdf -> stream('Laporan Jadwal Pertandingan BRI Liga 1.pdf');

    echo "<script>alert('Berhasil Report Data'); window.location.href = 'tabel_jadwal.php';</script>";
?>