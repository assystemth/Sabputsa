<?php

use SebastianBergmann\Environment\Console;

class Queue_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // public function get_queues()
    // {
    //     $this->db->select('*');
    //     $this->db->from('tbl_queue');
    //     return $this->db->get()->result();
    // }
    public function get_queues($queue_status = null)
    {
        $this->db->select('*');
        $this->db->from('tbl_queue');
    
        // ตรวจสอบและเพิ่มเงื่อนไขสถานะคำร้องเรียน ถ้ามี
        if ($queue_status) {
            $this->db->where('queue_status', $queue_status);
        }
    
        // เรียงลำดับตาม queue_datesave จากใหม่ไปเก่า (DESC)
        $this->db->order_by('queue_datesave', 'DESC');
    
        // ดึงข้อมูลและส่งกลับ
        return $this->db->get()->result();
    }
    

    public function get_images_for_queue($queue_id)
    {
        $this->db->select('queue_img_img');
        $this->db->from('tbl_queue_img');
        $this->db->where('queue_img_ref_id', $queue_id);
        return $this->db->get()->result();
    }

    //show form edit
    public function read($queue_id)
    {
        $this->db->where('queue_id', $queue_id);
        $query = $this->db->get('tbl_queue');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function read_detail($queue_id)
    {
        $this->db->where('queue_detail_case_id', $queue_id);
        $this->db->order_by('queue_detail_id', 'asc');
        $query = $this->db->get('tbl_queue_detail');
        return $query->result();
    }

    public function updatequeueStatus($queueId, $queueStatus)
    {
        $data = array(
            'queue_status' => $queueStatus
        );

        $this->db->where('queue_id', $queueId);
        $result = $this->db->update('tbl_queue', $data);

        return $result;
    }

    public function dashboard_queue()
    {
        $this->db->select('*');
        $this->db->from('tbl_queue as c');
        $this->db->limit(3);
        $this->db->order_by('c.queue_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function intranet_queue()
    {
        $this->db->select('*');
        $this->db->from('tbl_queue as c');
        $this->db->limit(15);
        $this->db->order_by('c.queue_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function updatequeue($queue_detail_case_id, $queue_detail_status, $queue_detail_com)
    {
        // อัปเดต tbl_queue
        $this->db->set('queue_status', $queue_detail_status);
        $this->db->where('queue_id', $queue_detail_case_id);
        $this->db->update('tbl_queue');

        // เพิ่มข้อมูลใหม่ลงใน tbl_queue_detail
        $data = array(
            'queue_detail_case_id' => $queue_detail_case_id,
            'queue_detail_status' => $queue_detail_status,
            'queue_detail_by' => $this->session->userdata('m_fname'),
            'queue_detail_com' => $queue_detail_com
        );
        $this->db->insert('tbl_queue_detail', $data);

        // ดึงข้อมูลจาก tbl_queue หลังจากอัปเดต
        $queueData = $this->db->get_where('tbl_queue', array('queue_id' => $queue_detail_case_id))->row();

        if ($queueData) {
            $message = "เรื่องจองคิวติดต่อราชการ ใหม่ !" . "\n";
            $message .= "คิว: " . $queueData->queue_id . "\n";
            $message .= "สถานะ: " . $queueData->queue_status . "\n";
            $message .= "เรื่อง: " . $queueData->queue_topic . "\n";
            $message .= "รายละเอียด: " . $queueData->queue_detail . "\n";
            $message .= "ชื่อ-นามสุกล: " . $queueData->queue_by . "\n";
            $message .= "เบอร์โทรศัพท์ผู้แจ้ง: " . $queueData->queue_phone . "\n";
            $message .= "วันที่ส่งเรื่อง: " . $queueData->queue_date . "\n";
        }

        // ดึงข้อมูลจาก tbl_queue_detail หลังจากอัปเดต
        $this->db->order_by('queue_detail_id', 'DESC');
        $this->db->limit(1);
        $queueData2 = $this->db->get_where('tbl_queue_detail', array('queue_detail_case_id' => $queue_detail_case_id))->row();

        if ($queueData2) {
            $message .= "ชื่อผู้อัพเดตข้อมูล: " . $queueData2->queue_detail_by . "\n";
            $message .= "ข้อความจากการอัพเดต: " . $queueData2->queue_detail_com . "\n";
        }

        // print_r($queueData);
        // echo "<br>";
        // print_r($queueData2);
        // exit;

        // ส่งข้อมูลไปที่ LINE Notify
        $this->sendLineNotify($message);
    }

    private function sendLineNotify($message)
    {
        define('LINE_API', "https://notify-api.line.me/api/notify");
        $token = "DG8gxIGbFKR44QTFF23qEwazkBRl0k6iq5vfBiqzflG"; // ใส่ Token ที่คุณได้รับ

        $queryData = array('message' => $message);
        $queryData = http_build_query($queryData, '', '&');
        $headerOptions = array(
            'http' => array(
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n" .
                    "Authorization: Bearer " . $token . "\r\n" .
                    "Content-Length: " . strlen($queryData) . "\r\n",
                'content' => $queryData
            ),
        );

        $context = stream_context_create($headerOptions);
        $result = file_get_contents(LINE_API, FALSE, $context);
        $res = json_decode($result);
    }

    public function statusCancel($queue_detail_case_id, $queue_detail_status, $queue_detail_com)
    {
        // อัปเดต tbl_queue
        $this->db->set('queue_status', 'ยกเลิก');
        $this->db->where('queue_id', $queue_detail_case_id);
        $this->db->update('tbl_queue');

        // ดึงข้อมูลจาก tbl_queue หลังจากอัปเดต
        $queueData = $this->db->get_where('tbl_queue', array('queue_id' => $queue_detail_case_id))->row();

        if ($queueData) {
            $message = "เรื่องจองคิวติดต่อราชการ ใหม่ !" . "\n";
            $message .= "คิว: " . $queueData->queue_id . "\n";
            $message .= "สถานะ: " . $queueData->queue_status . "\n";
            $message .= "เรื่อง: " . $queueData->queue_topic . "\n";
            $message .= "รายละเอียด: " . $queueData->queue_detail . "\n";
            $message .= "ชื่อ-นามสุกล: " . $queueData->queue_by . "\n";
            $message .= "เบอร์โทรศัพท์ผู้แจ้ง: " . $queueData->queue_phone . "\n";
            // เพิ่มข้อมูลอื่น ๆ ตามที่คุณต้องการ
        }

        // ส่งข้อมูลไปที่ LINE Notify
        $this->sendLineNotify($message);

        // เพิ่มข้อมูลใหม่ลงใน tbl_queue_detail
        $data = array(
            'queue_detail_case_id' => $queue_detail_case_id,
            'queue_detail_status' => 'ยกเลิก',
            'queue_detail_com' => $queue_detail_com, // เพิ่มฟิลด์นี้
            'queue_detail_by' => $this->session->userdata('m_fname')
        );
        $this->db->insert('tbl_queue_detail', $data);
    }


    public function getLatestDetail($queue_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_queue_detail');
        $this->db->where('queue_detail_case_id', $queue_id);
        $this->db->order_by('queue_detail_id', 'DESC');
        $this->db->limit(1); // จำกัดให้เรียกข้อมูลอันล่าสุดเท่านั้น

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row();
        }

        return null;
    }

    // เว็บ kakoh เริ่มจากตรงนี้ *********************************************************************
    public function add_queue()
    {
        $queue_data = array(
            'queue_topic' => $this->input->post('queue_topic'),
            'queue_detail' => $this->input->post('queue_detail'),
            'queue_by' => $this->input->post('queue_by'),
            'queue_phone' => $this->input->post('queue_phone'),
            'queue_number' => $this->input->post('queue_number'),
            'queue_date' => $this->input->post('queue_date'),
        );

            $this->db->trans_complete();
            // If no image uploaded, just insert text data
            $this->db->insert('tbl_queue', $queue_data);
            $queue_id = $this->db->insert_id();

        // ดึงข้อมูลจาก tbl_queue หลังจากอัปเดต
        $queueData = $this->db->get_where('tbl_queue', array('queue_id' => $queue_id))->row();

        if ($queueData) {
            $message = "เรื่องจองคิวติดต่อราชการ ใหม่ !" . "\n";
            $message .= "คิว: " . $queueData->queue_id . "\n";
            $message .= "สถานะ: " . $queueData->queue_status . "\n";
            $message .= "เรื่อง: " . $queueData->queue_topic . "\n";
            $message .= "รายละเอียด: " . $queueData->queue_detail . "\n";
            $message .= "ชื่อ-นามสุกล: " . $queueData->queue_by . "\n";
            $message .= "เบอร์โทรศัพท์ผู้แจ้ง: " . $queueData->queue_phone . "\n";
            $message .= "วันที่ส่งเรื่อง: " . $queueData->queue_date . "\n";
            // เพิ่มข้อมูลอื่น ๆ ตามที่คุณต้องการ
        }

        // // Send notification
        // if (!empty($upload_data['full_path'])) {
        //     $this->sendLineNotifyImg($message, $upload_data['full_path']);
        // } else {
            $this->sendLineNotify($message);
        // }

        $this->space_model->update_server_current();
        $this->session->set_flashdata('save_success', TRUE);

        return $queue_id;
    }

    // private function sendLineNotifyImg($message, $imagePath = null)
    // {
    //     $headers = [
    //         'Authorization: Bearer ' . $this->lineNotifyAccessToken,
    //     ];

    //     $data = [
    //         'message' => $message,
    //     ];

    //     if ($imagePath) {
    //         $data['imageFile'] = curl_file_create($imagePath, 'image/png', 'imageFile');
    //     }

    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL, $this->lineNotifyApiUrl);
    //     curl_setopt($ch, CURLOPT_POST, 1);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //     $response = curl_exec($ch);
    //     curl_close($ch);

    //     // Handle the response as needed
    //     echo "Line Notify API Response: $response";
    // }
    private $lineNotifyApiUrl = 'https://notify-api.line.me/api/notify';
    private $lineNotifyAccessToken = 'DG8gxIGbFKR44QTFF23qEwazkBRl0k6iq5vfBiqzflG'; // Replace with your Line Notify access token
    public function add_queue_detail($queue_id)
    {
        $data = array(
            'queue_detail_case_id' => $queue_id,
            'queue_detail_by' => $this->input->post('queue_by'),
            // Add other fields as needed
        );

        $query = $this->db->insert('tbl_queue_detail', $data);

        $this->space_model->update_server_current();

        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            echo "<script>";
            echo "alert('เกิดข้อผิดพลาดในการเพิ่มข้อมูลใหม่ !');";
            echo "</script>";
        }
    }

    public function count_queue_year()
    {
        $this->db->select('COUNT(queue_id) AS total_queue_year');
        $this->db->from('tbl_queue');
        $this->db->where('YEAR(queue_datesave)', date('Y'));
        $query = $this->db->get();
        return $query->row()->total_queue_year;
    }
    public function count_queue_success()
    {
        $this->db->select('COUNT(queue_id) AS total_queue_success');
        $this->db->from('tbl_queue');
        $this->db->where('tbl_queue.queue_status', 'คิวได้รับการยืนยัน');
        $query = $this->db->get();
        return $query->row()->total_queue_success;
    }
    public function count_queue_operation()
    {
        $this->db->select('COUNT(queue_id) AS total_queue_operation');
        $this->db->from('tbl_queue');
        $this->db->where('tbl_queue.queue_status', 'รอดำเนินการ');
        $query = $this->db->get();
        return $query->row()->total_queue_operation;
    }
    public function count_queue_accept()
    {
        $this->db->select('COUNT(queue_id) AS total_queue_accept');
        $this->db->from('tbl_queue');
        $this->db->where('tbl_queue.queue_status', 'รับเรื่องแล้ว');
        $query = $this->db->get();
        return $query->row()->total_queue_accept;
    }
    public function count_queue_doing()
    {
        $this->db->select('COUNT(queue_id) AS total_queue_doing');
        $this->db->from('tbl_queue');
        $this->db->where('tbl_queue.queue_status', 'กำลังดำเนินการ');
        $query = $this->db->get();
        return $query->row()->total_queue_doing;
    }

    public function count_queue_wait()
    {
        $this->db->select('COUNT(queue_id) AS total_queue_wait');
        $this->db->from('tbl_queue');
        $this->db->where('tbl_queue.queue_status', 'รอยืนยันการจอง');
        $query = $this->db->get();
        return $query->row()->total_queue_wait;
    }

    public function count_queue_cancel()
    {
        $this->db->select('COUNT(queue_id) AS total_queue_cancel');
        $this->db->from('tbl_queue');
        $this->db->where('tbl_queue.queue_status', 'ยกเลิก');
        $query = $this->db->get();
        return $query->row()->total_queue_cancel;
    }

    public function get_queue_topic($queue_id)
    {
        $this->db->select('queue_topic');
        $this->db->from('tbl_queue');
        $this->db->where('queue_id', $queue_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row()->queue_topic;
        }
        return null;
    }
}
