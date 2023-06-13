<?php
    include 'koneksi.php';
    require 'vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'ID');
    $sheet->setCellValue('B1', 'Nama');
    $sheet->setCellValue('C1', 'Email');
    $sheet->setCellValue('D1', 'Pesan');

    $klub = mysqli_query($koneksi, "SELECT * FROM tb_contact");
    $i = 2;
    $no = 1;
    while ($row = mysqli_fetch_array($klub)) {
        $sheet->setCellValue('A'.$i, $no++);
        $sheet->setCellValue('B'.$i, $row['nama']);
        $sheet->setCellValue('C'.$i, $row['email']);
        $sheet->setCellValue('D'.$i, $row['pesan']);
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
    $sheet->getStyle('A1:D'.$i)->applyFromArray($styleArray);
    $sheet->getStyle('A1:D'.$l)->applyFromArray($styleArray1);

    $write = new Xlsx($spreadsheet);
    $write->save('Report Data Pesan.xlsx');
     
	echo "<script>alert('Berhasil Report Data'); window.location.href = 'tabel_contact.php';</script>";
?>