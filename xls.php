<?php
require_once'connect.php';
    require_once('php_excel/Classes/PHPExcel.php');
    require_once('php_excel/Classes/PHPExcel/Writer/Excel2007.php');

    // Запрос на выборку сведений о пользователях
    $result = mysqli_query($mysql,"SELECT rasp.date_ex, rasp.aud,
	groupa.faculty_group as faculty_group,
	groupa.name_group as name_group
	FROM rasp
	LEFT JOIN groupa ON rasp.id_group=groupa.id_group"
    );

    $xls = new PHPExcel();

    // Устанавливаем индекс активного листа
    $xls->setActiveSheetIndex(0);
    // Получаем активный лист
    $sheet = $xls->getActiveSheet();
    // Подписываем лист
    $sheet->setTitle('Расписание экзаменов');

    // Вставляем текст в ячейку A1
    $sheet->setCellValue("A1", 'Расписание экзаменов');
    $sheet->getStyle('A1')->getFill()->setFillType(
        PHPExcel_Style_Fill::FILL_SOLID);
    $sheet->getStyle('A1')->getFill()->getStartColor()->setRGB('EEEEEE');

    // Объединяем ячейки
    $sheet->mergeCells('A1:E1');

    // Выравнивание текста
    $sheet->getStyle('A1')->getAlignment()->setHorizontal(
        PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

    $header = array("П/П","Дата экзамена","Аудитория","Факультет","Группа");

    $a = 0;

    foreach ($header as $h){
        $sheet->setCellValueByColumnAndRow(
            $a,
            2,
            $h
        );

        // Применяем выравнивание
        $sheet->getColumnDimensionByColumn($a)->setAutoSize(true);

        $a++;
    }

    if ($result){
        $r = 3;

        // Для каждой строки из запроса
        while ($row = $result->fetch_row()){
            $a = 0;

            $sheet->setCellValueByColumnAndRow(
                $a,
                $r,
                $r-2
            );

            $a++;

            foreach ($row as $cell){
                $sheet->setCellValueByColumnAndRow(
                    $a,
                    $r,
                    $cell
                );
                

                $a++;
            }

            $r++;
        }
    }
    header ( "Content-type: application/vnd.ms-excel" );
    header("Content-Disposition: attachment;filename=Raspisanie.xls");
    header("Content-Transfer-Encoding: binary ");

    $objWriter = new PHPExcel_Writer_Excel5($xls);
    $objWriter->save('php://output');
?>
