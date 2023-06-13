<?php
    include 'koneksi.php';
    require 'vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'ID');
    $sheet->setCellValue('B1', 'Pertandingan');
    $sheet->setCellValue('C1', 'Hari');
    $sheet->setCellValue('D1', 'Tanggal');
    $sheet->setCellValue('E1', 'Kick Off');
    $sheet->setCellValue('F1', 'Stadion');

    $klub = mysqli_query($koneksi, "SELECT * FROM tb_jadwal");
    $i = 2;
    $no = 1;
    while ($row = mysqli_fetch_array($klub)) {
        $sheet->setCellValue('A'.$i, $no++);
        $sheet->setCellValue('B'.$i, $row['pertandingan']);
        $sheet->setCellValue('C'.$i, $row['hari']);
        $sheet->setCellValue('D'.$i, $row['tanggal']);
        $sheet->setCellValue('E'.$i, $row['jam']);
        $sheet->setCellValue('F'.$i, $row['stadion']);
        $i++;
    }

    $styleArray = [
        'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            ],
        ],
    ];
    $styleArray1 = array(
        'font'  => array(
            'bold'  => true,
            'color' => array('rgb' => '#000000'),
            'size'  => 11,
            'name'  => 'Calibri'
        ));
    $i = $i - 1;
    $l = 1;
    $sheet->getStyle('A1:F'.$i)->applyFromArray($styleArray);
    $sheet->getStyle('A1:F'.$l)->applyFromArray($styleArray1);

    $write = new Xlsx($spreadsheet);
    $write->save('Report Data Jadwal Pertandingan.xlsx');
     
	echo "<script>alert('Berhasil Report Data'); window.location.href = 'tabel_jadwal.php';</script>";
?>