<div class="text-center pages-head">
    <span class="font-pages-head">รายการจัดซื้อจัดจ้างหรือจัดหาพัสดุ</span>
</div>
</div>

<div class="bg-pages">
    <div class="container-pages-detail">
        <div class="font-pages-content-head"><?= $rsData->p_rpobuybuy_name; ?></div>
        <div class="pages-content break-word mt-2">
            <span class="font-pages-content-detail"><?= $rsData->p_rpobuy_detail; ?></span>
            <br>
            <?php 
                if($rsData->p_rpobuy_link != "") {
                    echo '<span class="font-pages-content-detail">ลิ้งค์เพิ่มเติม:</span>&nbsp;<a class="font-26" href="' . $rsData->p_rpobuy_link . '" target="_blank">' . $rsData->p_rpobuy_link . '</a>';
                }
            ?>
            <br>
            <?php if (!empty($rsDoc)) { ?>
                <span class="font-pages-content-detail">ไฟล์เอกสารเพิ่มเติม:</span>
                <?php foreach ($rsDoc as $doc) {
                    // ดึงข้อมูลของไฟล์
                    $fileInfo = pathinfo($doc->p_rpobuy_file_doc);

                    // ตรวจสอบลงท้ายของไฟล์
                    $fileExtension = strtolower($fileInfo['extension']);

                    // กำหนดรูปภาพตามลงท้ายของไฟล์
                    $iconImage = "";
                    if ($fileExtension === 'pdf') {
                        $iconImage = "docs/icon-file-pdf.png";
                    } elseif ($fileExtension === 'doc' || $fileExtension === 'docx') {
                        $iconImage = "docs/icon-file-doc.png";
                    } elseif ($fileExtension === 'xls' || $fileExtension === 'xlsx') {
                        $iconImage = "docs/icon-file-xls.png";
                    } elseif ($fileExtension === 'pptx' || $fileExtension === 'ppt') {
                        $iconImage = "docs/icon-file-ppt.png";
                    }
                ?>
                 <br><img src="<?php echo base_url($iconImage); ?>" style="padding: 0 30px;">
                    <a class="font-doc" href="<?= base_url('docs/file/' . $doc->p_rpobuy_file_doc); ?>" target="_blank"><?= $doc->p_rpobuy_file_doc; ?></a> , &nbsp;
                <?php } ?>
            <?php } ?>
        </div>

        <?php foreach ($rsImg as $img) { ?>
            <div class="text-center">
                <img class="rounded-all" src="<?php echo base_url('docs/img/' . $img->p_rpobuybuy_img_img); ?>" width="1035" height="100%">
            </div>
            <br>
        <?php } ?>

        <?php foreach ($rsPdf as $file) { ?>
            <div class="row">
                <div class="col-6 mt-2">
                    <div class="d-flex justify-content-start">
                        <span class="font-page-detail-view-news">ดาวโหลดแล้ว <?= $file->p_rpobuybuy_pdf_download; ?> ครั้ง</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-end">
                        <a onclick="downloadFile(event, <?= $file->p_rpobuybuy_pdf_id; ?>)" href="<?= base_url('docs/file/' . $file->p_rpobuybuy_pdf_pdf); ?>" download>
                            <img src="<?php echo base_url("docs/btn-download.png"); ?>" class="btn-download">
                        </a>
                        <script>
                            function downloadFile(event, p_rpobuybuy_pdf_id) {
                                // ทำการส่งคำร้องขอ AJAX ไปยัง URL ที่บันทึกการดาวน์โหลดพร้อมกับ ID
                                var xhr = new XMLHttpRequest();
                                xhr.open('GET', '<?= base_url('Pages/increment_download_p_rpobuybuy/'); ?>' + p_rpobuybuy_pdf_id, true);
                                xhr.send();

                                // ทำการเปิดไฟล์ PDF ในหน้าต่างใหม่
                                window.open(event.currentTarget.href, '_blank');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="blog-text mt-3 mb-5">
                <object data="<?= base_url('docs/file/' . $file->p_rpobuybuy_pdf_pdf); ?>" type="application/pdf" width="100%" height="1500px"></object>
            </div>
        <?php } ?>
        <div class="d-flex justify-content-start">
            <span class="font-page-detail-view-news">จำนวนผู้เข้าชม <?= $rsData->p_rpobuybuy_view; ?> ครั้ง</span>
        </div>
    </div>
</div>