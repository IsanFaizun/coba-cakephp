<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\FrozenDate;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ReportPurchasesController extends AppController
{
    public function index()
    {
        if ($this->request->is('post')) {
            $startDate = $this->request->getData('start_date');
            $endDate = $this->request->getData('end_date');
            $exportType = $this->request->getData('export_type'); 

            // Load Purchases model
            $this->loadModel('Purchases');

            // Fetch purchases
            $purchases = $this->Purchases->find()
                ->where([
                    'Purchases.created >=' => FrozenDate::parseDate($startDate, 'yyyy-MM-dd'),
                    'Purchases.created <=' => FrozenDate::parseDate($endDate, 'yyyy-MM-dd')
                ])
                ->contain(['Suppliers', 'Motorcycles'])
                ->all();

            if ($exportType == 'html') {
                // Tampilkan data dalam bentuk HTML
                $this->set(compact('purchases'));
                $this->render('html');
            } elseif ($exportType == 'excel') {
                // Export ke Excel
                return $this->generateExcel($purchases);
            }
        }
    }

    protected function generateExcel($purchases)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Motorcycle Name');
        $sheet->setCellValue('B1', 'Supplier Name');
        $sheet->setCellValue('C1', 'Transaction Code');
        $sheet->setCellValue('D1', 'Price');
        $sheet->setCellValue('E1', 'Date');

        $row = 2;
        foreach ($purchases as $purchase) {
            $sheet->setCellValue("A{$row}", $purchase->motorcycles->name);
            $sheet->setCellValue("B{$row}", $purchase->suppliers->name);
            $sheet->setCellValue("C{$row}", $purchase->transaction_code);
            $sheet->setCellValue("D{$row}", $purchase->price);
            $sheet->setCellValue("E{$row}", $purchase->created->format('Y-m-d'));
            $row++;
        }

        $writer = new Xlsx($spreadsheet);
        $fileName = 'purchases_report.xlsx';
        $filePath = TMP . $fileName;

        $writer->save($filePath);

        return $this->response->withFile($filePath, ['download' => true, 'name' => $fileName]);
    }
}