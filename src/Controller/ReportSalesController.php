<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\FrozenDate;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ReportSalesController extends AppController
{
    public function index()
    {
        if ($this->request->is('post')) {
            $startDate = $this->request->getData('start_date');
            $endDate = $this->request->getData('end_date');
            $exportType = $this->request->getData('export_type'); 

            // Load sales model
            $this->loadModel('Sales');

            // Fetch sales
            $sales = $this->sales->find()
                ->where([
                    'sales.created >=' => FrozenDate::parseDate($startDate, 'yyyy-MM-dd'),
                    'sales.created <=' => FrozenDate::parseDate($endDate, 'yyyy-MM-dd')
                ])
                ->contain(['Customers', 'Motorcycles'])
                ->all();

            if ($exportType == 'html') {
                // Tampilkan data dalam bentuk HTML
                $this->set(compact('sales'));
                $this->render('html');
            } elseif ($exportType == 'excel') {
                // Export ke Excel
                return $this->generateExcel($sales);
            }
        }
    }

    protected function generateExcel($sales)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Motorcycle Name');
        $sheet->setCellValue('B1', 'Customer Name');
        $sheet->setCellValue('C1', 'Transaction Code');
        $sheet->setCellValue('D1', 'Price');
        $sheet->setCellValue('E1', 'Date');

        $row = 2;
        foreach ($sales as $sale) {
            $sheet->setCellValue("A{$row}", $sale->motorcycles->name);
            $sheet->setCellValue("B{$row}", $sale->customers->name);
            $sheet->setCellValue("C{$row}", $sale->transaction_code);
            $sheet->setCellValue("D{$row}", $sale->price);
            $sheet->setCellValue("E{$row}", $sale->created->format('Y-m-d'));
            $row++;
        }

        $writer = new Xlsx($spreadsheet);
        $fileName = 'sales_report.xlsx';
        $filePath = TMP . $fileName;

        $writer->save($filePath);

        return $this->response->withFile($filePath, ['download' => true, 'name' => $fileName]);
    }
}