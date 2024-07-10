<div class="text-center pages-head">
    <span class="font-pages-head">ติดตามสถานะจองคิวติดต่อราชการ</span>
</div>
</div>

<div class="bg-pages">
    <div class="container-pages-news" style="position: relative; z-index: 10;">
        <div class="row">
            <div class="col-6 d-flex justify-content-end underline">
                <a href="<?php echo site_url('Pages/adding_queue'); ?>">
                    <div class="bg-btn-head-elderly-aw">
                        <span>ระบบจองคิวติดต่อราชการออนไลน์</span>
                    </div>
                </a>
            </div>
            <div class="col-6 d-flex justify-content-start underline">
                <a href="<?php echo site_url('Pages/follow_queue'); ?>">
                    <div class="bg-btn-head-elderly-aw-active">
                        <span>ตรวจสอบรายละเอียดการจองคิว</span>
                    </div>
                </a>
            </div>
        </div><br><br>
        <div class="pages-follow-queue underline">
            <form id="reCAPTCHA3" action="<?php echo site_url('Pages/follow_queue'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group">
                    <br>
                    <div class="col-sm-12 control-label font-label-e-service-follow-queue text-center">กรุณากรอกเลขจองคิวออนไลน์หรือเบอร์โทรศัพท์</div>
                    <div class="center-center mt-4">
                        <div class="col-sm-4 mb-4">
                            <input type="text" name="search_term" class="form-control font-label-e-service-complain input-radius" placeholder="กรอกเลขจองคิวออนไลน์หรือเบอร์โทรศัพท์" required>
                        </div>
                        <div class="col-sm-2 btn-queue">
                            <button data-action='submit' data-callback='onSubmit' data-sitekey="6LcfiLYpAAAAAI7_U3nkRRxKF7e8B_fwOGqi7g6x" type="submit" id="loginBtn" class="btn g-recaptcha">
                                <span class="font-label-e-service-queue">ค้นหา</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <?php if ($this->input->post('search_term')) : // Check if the form has been submitted 
        ?>
            <div class="pages-follow-queue-detail" id="pages-follow-queue-detail" style="display: block;">
                <?php if (!empty($queue_data)) : ?>
                    <?php foreach ($queue_data as $queue) : ?>
                        <div class="queue-header">
                            <span class="font-queue-head">คิวที่ : <?php echo $queue['queue_id']; ?> &nbsp;&nbsp;&nbsp;เรื่องที่ติดต่อ : <?php echo $queue['queue_topic']; ?></span>
                        </div>
                        <div class="queue-container">
                            <div class="queue-content">
                                <table class="styled-table" style="width: 100%; border-collapse: collapse;">
                                    <thead>
                                        <tr style="border-bottom: 1px solid #D9D9D9;">
                                            <th class="font-queue-content" style="width: 20%; text-align: left;">สถานะ</th>
                                            <th class="font-queue-content" style="width: 30%; text-align: left;">ชื่อ</th>
                                            <th class="font-queue-content" style="width: 30%; text-align: left;">วันที่และเวลาที่จอง</th>
                                            <th class="font-queue-content" style="width: 20%; text-align: left;">หมายเหตุ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $queue_details_filtered = array_filter($queue_details, function ($detail) use ($queue) {
                                            return $detail['queue_detail_case_id'] === $queue['queue_id'];
                                        });

                                        $isFirstRow = true;
                                        $totalRows = count($queue_details_filtered); // นับจำนวนรายการทั้งหมด
                                        $currentRow = 0; // ตัวแปรสำหรับเก็บลำดับรายการปัจจุบัน

                                        foreach ($queue_details_filtered as $detail) :
                                            $currentRow++; // เพิ่มลำดับรายการปัจจุบัน
                                            $isLastRow = ($currentRow === $totalRows); // ตรวจสอบว่ารายการนี้เป็นรายการสุดท้ายหรือไม่

                                            $date = new DateTime($detail['queue_detail_datesave']);
                                            $day_th = $date->format('d');
                                            $month_names_th = array(
                                                1 => 'มกราคม',
                                                2 => 'กุมภาพันธ์',
                                                3 => 'มีนาคม',
                                                4 => 'เมษายน',
                                                5 => 'พฤษภาคม',
                                                6 => 'มิถุนายน',
                                                7 => 'กรกฎาคม',
                                                8 => 'สิงหาคม',
                                                9 => 'กันยายน',
                                                10 => 'ตุลาคม',
                                                11 => 'พฤศจิกายน',
                                                12 => 'ธันวาคม',
                                            );
                                            $month_th = $month_names_th[$date->format('n')];
                                            $year_th = $date->format('Y') + 543;
                                            $formattedDate = "$day_th $month_th $year_th";

                                            $dot_image = 'dot.png';
                                            if ($detail['queue_detail_status'] === 'รอยืนยันการจอง') {
                                                $dot_image = 'dot_yellow.png';
                                            } elseif ($detail['queue_detail_status'] === 'คิวได้ถูกยกเลิก') {
                                                $dot_image = 'dot_red.png';
                                            }
                                        ?>
                                            <tr>
                                                <td>
                                                    <div class="status-container mt-4 <?php echo $isLastRow ? 'status-container-last' : ''; ?>">
                                                        <span class="status-dot font-queue-content2" style="color: 
                    <?php
                                            if ($detail['queue_detail_status'] === 'คิวได้รับการยืนยัน') {
                                                echo '#3CA15D;';
                                            } elseif ($detail['queue_detail_status'] === 'คิวได้ถูกยกเลิก') {
                                                echo '#FF0202;';
                                            } else {
                                                echo '#FFC700;';
                                            }
                    ?>">
                                                            <img src="<?php echo base_url("docs/$dot_image"); ?>" alt=""> <?php echo $detail['queue_detail_status']; ?>
                                                        </span>
                                                        <div class="status-date" style="color: #A0A0A0;">
                                                            <?php echo $formattedDate; ?>
                                                        </div>
                                                    </div>
                                                </td>
                                                <?php if ($isFirstRow) : ?>
                                                    <td class="font-queue-content2"><?php echo $queue['queue_by']; ?></td>
                                                    <td class="font-queue-content2">
                                                        <?php
                                                        if (!empty($queue['queue_date'])) {
                                                            $date = new DateTime($queue['queue_date']);
                                                            $day_th = $date->format('d');
                                                            $month_th = $month_names_th[$date->format('n')];
                                                            $year_th = $date->format('Y') + 543;
                                                            $formattedDate = "$day_th $month_th $year_th";
                                                            echo $formattedDate;
                                                        } else {
                                                            echo "N/A";
                                                        }
                                                        ?> น.
                                                    </td>
                                                    <?php $isFirstRow = false; ?>
                                                <?php else : ?>
                                                    <td class="font-queue-content2"></td>
                                                    <td class="font-queue-content2"></td>
                                                <?php endif; ?>
                                                <td class="font-queue-content2"><?php echo $detail['queue_detail_com']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <h1 class="red text-center">ไม่พบหมายเลขร้องเรียนที่ท่านเลือก !</h1>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<script>
    // เมื่อ reCAPTCHA ผ่านการตรวจสอบ
    // function enableLoginButton() {
    //     document.getElementById("loginBtn").removeAttribute("disabled");
    // }
</script>