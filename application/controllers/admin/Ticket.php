<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as ReaderXlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Ticket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load necessary models, libraries, etc.
        $this->load->model('admin/Ticket_model', 'ticket');
        $this->load->helper('url');
    }

    public function index()
    {
        // show data ticket 
        $data = [
            'title' => 'Ticket',
            'subtitle' => 'Ticket',
            'subtitle2' => 'Data Ticket',
            'ticket' => $this->ticket->getTicket(),
            'teknisi' => $this->ticket->getTeknisi(),
        ];
        $this->load->view('user/admin/ticket', $data);
    }
    // getDataTicket
    public function getDataTicket($id_ticket)
    {
        $ticket = $this->ticket->getDataTicket($id_ticket);
        echo json_encode($ticket);
    }

    // receive ticket echo response success
    public function receiveTicket()
    {
        $id_ticket = $this->input->post('id_ticket');
        $data = [
            'status' => '1',
            'handle_by' => $this->session->userdata('id_users'),
            'receive_at' => date('Y-m-d H:i:s'),
        ];
        $this->ticket->receiveTicket($id_ticket, $data);
        echo json_encode(['status' => 'success']);
    }

    // decline ticket echo response success
    public function declineTicket()
    {
        $id_ticket = $this->input->post('id_ticket');
        $data = [
            'status' => '3',
            'handle_by' => $this->session->userdata('id_users'),
            'decline_at' => date('Y-m-d H:i:s'),
        ];
        $this->ticket->declineTicket($id_ticket, $data);
        echo json_encode(['status' => 'success']);
    }

    // finish ticket response success 
    public function finishTicket()
    {
        $id_ticket = $this->input->post('id_ticket');
        $data = [
            'status' => '2',
            'finish_at' => date('Y-m-d H:i:s'),
        ];
        $this->ticket->finishTicket($id_ticket, $data);
        echo json_encode(['status' => 'success']);
    }

    //  assignTicket
    public function assignTicket()
    {
        $id_ticket = $this->input->post('id_ticket');
        $data = [
            'handle_by' => $this->input->post('assign_to'),
            'assign_at' => date('Y-m-d H:i:s'),
        ];
        $this->ticket->assignTicket($id_ticket, $data);
        echo json_encode(['status' => 'success']);
    }

    // export data to excel 
    public function exportTicket()
    {


        $ticket = $this->ticket->getTicketExport();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Category');
        $sheet->setCellValue('C1', 'Title');
        $sheet->setCellValue('D1', 'Description');
        $sheet->setCellValue('E1', 'Created At');
        $sheet->setCellValue('F1', 'Created By');
        $sheet->setCellValue('G1', 'Technician');
        $sheet->setCellValue('H1', 'Assign At');
        $sheet->setCellValue('I1', 'Receive At');
        $sheet->setCellValue('J1', 'Finish At');



        function dateToSerial($date)
        {
            $baseDate = new DateTime('1900-01-01');
            $inputDate = new DateTime($date);

            // Hitung selisih hari
            $interval = $baseDate->diff($inputDate);
            $serialDate = $interval->days + 1; // +1 karena 1 Jan 1900 dihitung sebagai hari ke-1
            return $serialDate;
        }

        $no = 2;
        foreach ($ticket->result() as $ticket1) {
            $sheet->setCellValue('A' . $no, $no - 1);
            $sheet->setCellValue('B' . $no, $ticket1->name_category);
            $sheet->setCellValue('C' . $no, $ticket1->title);
            $sheet->setCellValue('D' . $no, $ticket1->description);
            if ($ticket1->created_at == NULL) {
                $sheet->setCellValue('E' . $no, NULL);
            } else{
                $sheet->setCellValue('E' . $no, dateToSerial(date('Y-m-d', strtotime($ticket1->created_at))));
            }
           
            $sheet->setCellValue('F' . $no, $ticket1->karyawan);
            $sheet->setCellValue('G' . $no, $ticket1->teknisi);
            if ($ticket1->assign_at == NULL) {
                $sheet->setCellValue('H' . $no, NULL);
            } else {
                $sheet->setCellValue('H' . $no, dateToSerial(date('Y-m-d', strtotime($ticket1->assign_at))));
            }
           
            if ($ticket1->receive_at == NULL) {
                $sheet->setCellValue('I' . $no, NULL);
            } else {
                $sheet->setCellValue('I' . $no, dateToSerial(date('Y-m-d', strtotime($ticket1->receive_at))));
            }
           
            if ($ticket1->finish_at == NULL) {
                $sheet->setCellValue('J' . $no, NULL);
            }else{
                $sheet->setCellValue('J' . $no, dateToSerial(date('Y-m-d', strtotime($ticket1->finish_at))));
            }
           
            $no++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = 'Ticket - ' . date('d-m-Y') . '.xlsx';
        // langsung download 


        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');


        $writer->save('php://output');
    }
}
