<?php

/**
 * Method conversion from csv to xlsx file
 *
 * @param string $csv_file If the file is not in the root of this script, introduce the full path (example: C:\path_to_the_file\file.csv)
 * @param string $xlsx_file If you just put the file name + extension, then the file will be created in the root of this script.
 *
 * @return void
 */

function conversion_csv_to_xlsx( $csv_file, $xlsx_file) {
	require 'vendor/autoload.php';
	$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Csv');
	$objPHPExcel = $reader->load($csv_file); //Load the csv file
	$objWriter = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($objPHPExcel, 'Xlsx');
	$objWriter->save($xlsx_file); //Save the xlsx file
	return;
}
