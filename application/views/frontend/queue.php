<div class="text-center pages-head">
    <span class="font-pages-head">จองคิวติดต่อราชการ</span>
</div>
</div>

<div class="bg-pages">
    <div class="container-pages-news" style="position: relative; z-index: 10;">
        <div class="row">
            <div class="col-6 d-flex justify-content-end underline">
                <a href="<?php echo site_url('Pages/adding_queue'); ?>">
                    <div class="bg-btn-head-elderly-aw-active">
                        <span>ระบบจองคิวติดต่อราชการออนไลน์</span>
                    </div>
                </a>
            </div>
            <div class="col-6 d-flex justify-content-start underline">
                <a href="<?php echo site_url('Pages/follow_queue'); ?>">
                    <div class="bg-btn-head-elderly-aw">
                        <span>ตรวจสอบรายละเอียดการจองคิว</span>
                    </div>
                </a>
            </div>
        </div>
        <div class=" underline"><br><br>
            <span class="font-elderly-aw-ods">จองคิวติดต่อราชการ</span><br><br>
            <form id="reCAPTCHA3" action=" <?php echo site_url('Pages/add_queue'); ?> " method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-sm-3 control-label font-e-service-complain">เรื่องที่ต้องการติดต่อ <span class="red-font">*</span></div>
                    <div class="col-sm-12 mt-2">
                        <input type="text" name="queue_topic" class="form-control font-label-e-service-complain" required placeholder="กรอกเรื่องที่ต้องการติดต่อ...">
                        <span class="red"><?= form_error('queue_topic'); ?></span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <div class="col-sm-12 control-label  font-e-service-complain">ชื่อ-นามสกุล <span class="red-font">*</span></div>
                            <div class="col-sm-12 mt-2">
                                <input type="text" name="queue_by" class="form-control font-label-e-service-complain" required placeholder="นางสาวน้ำใส ใจชื่นบาน">
                                <span class="red"><?= form_error('queue_by'); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="col-sm-12 control-label  font-e-service-complain">เบอร์โทรศัพท์ <span class="red-font">*</span></div>
                            <div class="col-sm-12 mt-2">
                                <input type="tel" name="queue_phone" class="form-control font-label-e-service-complain" required placeholder="กรอกเบอร์โทรศัพท์" pattern="\d{10}" title="กรุณากรอกเบอร์มือถือเป็นตัวเลข 10 ตัว">
                                <span class="red"><?= form_error('queue_phone'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <div class="col-sm-12 control-label  font-e-service-complain">หมายเลขประจำตัวประชาชน <span class="red-font">*</span></div>
                            <div class="col-sm-12 mt-2">
                                <input type="text" name="queue_number" class="form-control font-label-e-service-complain" placeholder="เลขบัตรประจำตัวประชาชน" pattern="\d{10}" title="กรุณากรอกเป็นตัวเลข" value="<?php echo set_value('elderly_aw_ods_number'); ?>">
                                <span class="red"><?= form_error('queue_number'); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="col-sm-12 control-label font-e-service-complain">วันที่และเวลา <span class="red-font">*</span></div>
                            <div class="col-sm-12 mt-2">
                                <input type="datetime-local" name="queue_date" class="form-control font-label-e-service-complain" placeholder="วันที่และเวลา" value="<?php echo set_value('elderly_aw_ods_number'); ?>">
                                <span class="red"><?= form_error('queue_date'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="form-label  font-e-service-complain">รายละเอียด <span class="red-font">*</span></label>
                    <div class="col-sm-12">
                        <textarea name="queue_detail" class="form-control font-label-e-service-complain" id="exampleFormControlTextarea1" rows="6" placeholder="กรอกรายละเอียดเพิ่มเติม..."></textarea>
                        <span class="red"><?= form_error('queue_detail'); ?></span>
                    </div>
                </div>
                <br>
        </div>
        <div class="row mt-4">
            <div class="col-9">
                <div class="d-flex justify-content-end">
                    <!-- <div class="g-recaptcha" data-sitekey="6LcKoPcnAAAAAKGgUMRtkBs6chDKzC8XOoVnaZg_" data-callback="enableLoginButton"></div> -->
                </div>
            </div>
            <div class="col-3">
                <div class="btn-queue  d-flex justify-content-center" style="margin-left: 210px;">
                    <button data-action='submit' data-callback='onSubmit' data-sitekey="6LcfiLYpAAAAAI7_U3nkRRxKF7e8B_fwOGqi7g6x" type="submit" id="loginBtn" class="btn g-recaptcha">
                        <span class="font-label-e-service-queue">จอง</span>
                    </button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>

<?php if ($this->session->flashdata('queue_id') && $this->session->flashdata('queue_by') && $this->session->flashdata('queue_date')) : ?>
    <div id="customModal" class="modal">
        <div class="modal-content shake-animation">
            <span class="close-button">&times;</span>
            <h2 class="modal-title">เลขคิว: <?php echo $this->session->flashdata('queue_id'); ?></h2>
            <h3>ชื่อ: <?php echo $this->session->flashdata('queue_by'); ?></h3>
            <h3>วันที่: <?php echo date('d/m/Y H:i', strtotime($this->session->flashdata('queue_date') . '+543 years')) ?> น.</h3>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById("customModal");
            var closeButton = document.getElementsByClassName("close-button")[0];

            modal.style.display = "block";

            closeButton.onclick = function() {
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        });
    </script>
<?php endif; ?>
