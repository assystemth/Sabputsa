<?php foreach ($qPublicize_ita as $rs) {
?>
    <div class="image-slide-stick-mid">

        <a href="https://itas.nacc.go.th/go/eit/6bq910" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo base_url('docs/img/' . $rs->publicize_ita_img); ?>">
        </a>
        <img src="docs/eit-slide-close.png" class="close-button-slide-mid" onclick="closeImageSlideMid()">
    </div>
<?php } ?>

<div id="messenger-icon">
    <a href="https://m.me/1509021309342485" target="_blank">
        <img src="<?php echo base_url('docs/messenger_facebook.png'); ?>" alt="Messenger Icon">
    </a>
    <span class="tooltip">Messenger</span>
</div>


<!-- <div class="welcome" ></div> -->

<!-- <div class="welcome-container">
    <div class="welcome" id="welcome"></div>
</div> -->

<nav class="wel-navbar" id="wel-navbar">
    <div class="row">
        <div class="col-4">
            <div class="text-wel-menubar">
                <!-- <span class="font-text-menubar-wel">องค์การบริหารส่วนตำบลบ้านกลาง</span> -->
            </div>
        </div>
        <div class="col-8">
            <div class="wel-navbar-list underline">
                <a href="#">
                    <div class="navbar-item">
                        <img src="<?php echo base_url('docs/menubar-home.png'); ?>" width="65" >
                        <span class="font-text-icon-wel">หน้าหลัก</span>
                    </div>
                </a>
                <a href="#activity">
                    <div class="navbar-item">
                        <img src="<?php echo base_url('docs/menubar-activity.png'); ?>"width="65" >
                        <span class="font-text-icon-wel">กิจกรรม</span>
                    </div>
                </a>
                <a href="#egp">
                    <div class="navbar-item">
                        <img src="<?php echo base_url('docs/menubar-egp.png'); ?>"width="65" >
                        <span class="font-text-icon-wel">ข่าว e-GP</span>
                    </div>
                </a>
                <a href="#oss">
                    <div class="navbar-item">
                        <img src="<?php echo base_url('docs/menubar-eservice.png'); ?>"width="65" >
                        <span class="font-text-icon-wel">e-Service</span>
                    </div>
                </a>
                <!-- <a href="https://www.facebook.com/people/%E0%B8%AD%E0%B8%9A%E0%B8%95-%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%81%E0%B8%A5%E0%B8%B2%E0%B8%87-%E0%B8%AD%E0%B8%B3%E0%B9%80%E0%B8%A0%E0%B8%AD%E0%B8%AB%E0%B8%A5%E0%B9%88%E0%B8%A1%E0%B8%AA%E0%B8%B1%E0%B8%81-%E0%B8%88%E0%B8%B1%E0%B8%87%E0%B8%AB%E0%B8%A7%E0%B8%B1%E0%B8%94%E0%B9%80%E0%B8%9E%E0%B8%8A%E0%B8%A3%E0%B8%9A%E0%B8%B9%E0%B8%A3%E0%B8%93%E0%B9%8C/pfbid0QrCQ8hnZV1Sgw1kosgKZX6y8aUHMWBA6EEs9k8mHvF7Wp4f8cbxbvhCkVHho3iRRl/" target="_blank">
                    <div class="navbar-item">
                        <img src="<?php echo base_url('docs/menubar-facebook.png'); ?>">
                        <span class="font-text-icon-wel">FACEBOOK</span>
                    </div> -->
                </a>
                <a href="https://webmail.ban-klang.go.th/" target="_blank">
                    <div class="navbar-item">
                        <img src="<?php echo base_url('docs/menubar-email.png'); ?>"width="65" >
                        <span class="font-text-icon-wel">E-Mail</span>
                    </div>
                </a>
                <!-- <a href="<?php echo site_url('Pages/contact'); ?>" target="_blank">
                    <div class="navbar-item">
                        <img src="<?php echo base_url('docs/menubar-contact.png'); ?>">
                        <span class="font-text-icon-wel">ติดต่อเรา</span>
                    </div>
                </a> -->
            </div>
        </div>
    </div>
</nav>
<button class="hide-button" id="hide-button"></button>
<button class="show-button" id="show-button" style="display: none;"></button>

<div class="welcome-container">
    <!-- <div class="welcome" id="welcome"></div> -->
    <div class="fade-container">
        <div class="fade-content active" id="div1">
            <div class="wel-g1-bg">
                <img class="wel-g1-cloud-animation wel-g1-cloud-animation-1" src="docs/wel-g1-cloud-animation-1.png">
                <img class="wel-g1-cloud-animation wel-g1-cloud-animation-2" src="docs/wel-g1-cloud-animation-2.png">
                <div style="position: relative; z-index: 2; margin-top: 30%; margin-left: 57%; ">
                    <img src="docs/wel-g1-bird.gif">
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="wel-image-container text-center" style="margin-left: -580px;">
                            <a href="<?php echo site_url('Pages/travel_detail/4'); ?>">
                                <img src="docs/wel-mark-travel1.png" alt="Map">
                            </a>
                            <span class="wel-font-travel">ภูเขาหินปะการัง</span><br>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="wel-image-container text-center" style="margin-left: 340px;">
                            <a href="<?php echo site_url('Pages/travel_detail/7'); ?>">
                                <img src="docs/wel-mark-travel2.png" alt="Map">
                            </a>
                            <span class="wel-font-travel">อ่างเก็บน้ำซับเจริญ</span><br>
                        </div>
                    </div>
                </div>

            </div>
            <div class="wel-g1-sky"></div>
        </div>

        <div class="fade-content" id="div2">
            <div class="wel-g2-bg1">
                <img class="wel-g2-cloud-animation wel-g2-cloud-animation-1" src="docs/wel-g2-cloud-animation-1.png">
                <img class="wel-g2-cloud-animation wel-g2-cloud-animation-2" src="docs/wel-g2-cloud-animation-2.png">
                <img class="wel-g2-cloud-animation wel-g2-cloud-animation-3" src="docs/wel-g2-cloud-animation-3.png">
                <img class="wel-g2-cloud-animation wel-g2-cloud-animation-4" src="docs/wel-g2-cloud-animation-4.png">
            </div>
            <div class="wel-g2-bg2">
                <div class="text-btm2 text-center">
                    <span class="font-wel-g2-visit-content" id="text-1">“ องค์การบริหารส่วนตำบลซับพุทรา ตำบลน่าอยู่ ชุมชนเข้มแข็ง<br>
                        ด้วยการบริหารจัดการที่ดี เน้นความร่วมมือจากทุกภาคส่วน<br>
                        ส่งเสริมการรวมกลุ่มเศรษฐกิจ ยกระดับคุณภาพชีวิตและการศึกษา<br>
                        มุ่งพัฒนาแหล่งท่องเที่ยวให้มีชื่อเสียง ”</span>
                </div>
                <div style="position: relative; z-index: 4; margin-top: 12%; margin-left: 58%; ">
                    <img src="docs/wel-g1-bird.gif">
                </div>
            </div>
        </div>

        <div class="fade-content" id="div3">
            <div class="wel-g3-bg1">
                <img class="wel-light-animation-1" src="<?php echo base_url('docs/wel-g3-light2.png'); ?>">
                <img class="wel-light-animation-2" src="<?php echo base_url('docs/wel-g3-light1.png'); ?>">
                <img class="wel-light-animation-3" src="<?php echo base_url('docs/wel-g3-light2.png'); ?>">
                <img class="wel-light-animation-4" src="<?php echo base_url('docs/wel-g3-light1.png'); ?>">
                <img class="wel-light-animation-5" src="<?php echo base_url('docs/wel-g3-light1.png'); ?>">
                <img class="wel-light-animation-6" src="<?php echo base_url('docs/wel-g3-light2.png'); ?>">
                <img class="wel-light-animation-7" src="<?php echo base_url('docs/wel-g3-light2.png'); ?>">
                <img class="wel-light-animation-8" src="<?php echo base_url('docs/wel-g3-light1.png'); ?>">
                <img class="wel-light-animation-9" src="<?php echo base_url('docs/wel-g3-light1.png'); ?>">
                <img class="wel-light-animation-10" src="<?php echo base_url('docs/wel-g3-light2.png'); ?>">

                <div class="text-btm2 text-center">
                    <span class="font-wel-g2-visit-content">“ องค์การบริหารส่วนตำบลซับพุทรา ตำบลน่าอยู่ ชุมชนเข้มแข็ง<br>
                        ด้วยการบริหารจัดการที่ดี เน้นความร่วมมือจากทุกภาคส่วน<br>
                        ส่งเสริมการรวมกลุ่มเศรษฐกิจ ยกระดับคุณภาพชีวิตและการศึกษา<br>
                        มุ่งพัฒนาแหล่งท่องเที่ยวให้มีชื่อเสียง ”</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="welcome-btm"> </div>
<div class="welcome-btm2"> </div>
<div class="welcome-btm-ontop" style="padding-top: 165px;">
    <div class="text-center" style="position: absolute; margin-top: -110px; margin-left: 33%; ">
        <span class="font-welcome-btm-other1">องค์การบริหารส่วนตำบลซับพุทรา</span>
        <!-- <span class="font-welcome-btm-other2">องค์การบริหารส่วนตำบลบ้านกลาง</span> -->
    </div>
    <div class="d-flex justify-content-center">
        <div class="welcome-btm-text-run">
            <div class="row">
                <div class="col-2">
                    <span class="font-left-text-run">ประกาศ</span>
                </div>
                <div class="col-10">
                    <div class="tab-container">
                        <?php
                        $news = $this->HotNews_model->hotnews_frontend();

                        echo '<div class="text-run-update">';
                        foreach ($news as $item) {
                            echo '<p>' . $item->hotNews_text . '</p>';
                        }
                        echo '</div>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="image-slide-stick-mid">
    <a href="https://itas.nacc.go.th/go/eit/u4gpi2" target="_blank" rel="noopener noreferrer">
        <img src="docs/eit-slide-mid.png">
    </a>
    <img src="docs/eit-slide-close.png" class="close-button-slide-mid" onclick="closeImageSlideMid()">
</div> -->




<div class="bg-banner">
    <img class="wipwap dot-news-animation-2" src="docs/animation-star-3.png" width="15" height="15">
    <img class="wipwap dot-news-animation-5" src="docs/animation-star-1.png" width="35" height="35">
    <img class="wipwap dot-news-animation-6" src="docs/animation-star-1.png" width="50" height="50">
    <img class="wipwap dot-news-animation-9" src="docs/animation-star-3.png" width="15" height="15">
    <img class="wipwap dot-news-animation-10" src="docs/animation-star-1.png" width="50" height="50">
    <img class="wipwap dot-news-animation-11" src="docs/animation-star-3.png" width="15" height="15">
    <img class="wipwap dot-news-animation-14" src="docs/animation-star-2.png" width="20" height="20">
    <div class="crop">
        <div class="row" style="padding-top: 30px; padding-bottom: 30px; ">
            <div class="col-9" style="padding-left: 100px;">
                <div class="row">
                    <div class="col">
                        <img src="docs/weather_icon.png" alt="">
                    </div>
                    <div class="col-11 font-text-run" style="margin-top: 5px;">
                        <?php foreach ($qWeather as  $weather) { ?>
                            <marquee direction="left">
                                <?= $weather->title; ?><?= $weather->description; ?>
                            </marquee>
                        <?php } ?>


                        <!-- <marquee id="weather-marquee" direction="left">
                            กรุณารอสักครู่กำลังโหลดข้อมูลสภาพอากาศ
                        </marquee> -->

                        <!-- <marquee direction="left">
                            <?php
                            if (!empty($weather_data) && isset($weather_data['channel']['item']['title'])) {
                                echo $weather_data['channel']['item']['title'];
                            } else {
                                echo "กรุณารอสักครู่กำลังโหลดข้อมูลสภาพอากาศ";
                            }
                            ?>
                            <?php
                            if (!empty($weather_data)) {

                                // ข้อความที่ต้องการจะลบ tag <br> ออก
                                $description = $weather_data['channel']['item']['description'];

                                // ใช้ str_replace() เพื่อแทนที่ tag <br> ด้วยช่องว่าง
                                $description_without_br = str_replace('<br/>', ' ', $description);
                                // หรือใช้สตริงว่างเพื่อลบออก
                                // $description_without_br = str_replace('<br/>', '', $description);

                                // แสดงข้อความที่ได้หลังจากลบ tag <br> ออกแล้ว
                                echo $description_without_br;
                            } else {
                                echo "";
                            }
                            ?>
                        </marquee> -->

                        <!-- <?php if (!empty($weather_data)) : ?>
                            <h2>รายงานสภาพอากาศ</h2>
                            <h3><?php echo $weather_data['channel']['title']; ?></h3>
                            <p><?php echo $weather_data['channel']['description']; ?></p>
                            <p><?php echo $weather_data['channel']['item']['title']; ?></p>
                            <div><?php echo $weather_data['channel']['item']['description']; ?></div>
                        <?php else : ?>
                            <p>ไม่สามารถโหลดข้อมูลสภาพอากาศได้ในขณะนี้</p>
                        <?php endif; ?> -->
                    </div>
                </div>
            </div>
            <div class="col-3" style="width: 350px; margin-top: -8px; margin-left: -20px;">
                <div class="gcse-search"></div>
            </div>
        </div>
        <div class="row ">
            <div class="col-6 content-banner">
                <div class="bg-top-executives">
                    <div class="top-executives">
                        <span>ผู้บริหาร</span>
                    </div>
                    <div id="carouselExampleAutoplayingv2" class="carousel slide" data-bs-ride="carousel" style="z-index: 10; margin-left: 5px">
                        <div class="carousel-inner">
                            <?php foreach ($qBackground_personnel as $index => $rs) { ?>
                                <div class="carousel-item <?= ($index === 0) ? "active" : ""; ?>" data-bs-interval="5000">
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="docs/img/<?= $rs->background_personnel_img; ?>" class="d-block w-60 background-ps" style="width: 204px; height: 266px; margin-left: 20px; margin-top: 25px">
                                        </div>
                                        <div class="col-7 text-center " style="margin-top: 90px; margin-left: -30px;">
                                            <span class="font-link-name"><?= $rs->background_personnel_name; ?></span><br>
                                            <span class="font-link-rank"><?= $rs->background_personnel_rank; ?></span><br>
                                            <span class="font-link-phone">สายด่วน โทร <?= $rs->background_personnel_phone; ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <!-- <div class="carousel-indicators" style="bottom: -130px; height: 1px; width: 1px; margin-left: 390px;">
                            <?php foreach ($qBackground_personnel as $index => $rs) {
                                $active = ($index === 0) ? "active" : "";
                            ?>
                                <button type="button" data-bs-target="#carouselExampleAutoplayingv2" data-bs-slide-to="<?= $index; ?>" class="<?= $active; ?>" aria-current="true" aria-label="Slide <?= ($index + 1); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.48 1.48 0 0 1 0-2.098z" />
                                    </svg>
                                </button>
                            <?php } ?>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-6 underline">
                        <a href="<?php echo site_url('Pages/ita_all'); ?>">
                            <div class="banner-button-green">
                                <div class="row">
                                    <div class="col-3 six-menu-left">
                                        <span class="font-banner-button-green">ITA</span>
                                    </div>
                                    <div class="col-9 six-menu-right" style="margin-top: -12px !important;">
                                        <span class="font-banner-button-green">การประเมินคุณธรรม<br>และความโปร่งใส</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="https://itas.nacc.go.th/go/iit/6bq910" target="_blank">
                            <div class="banner-button-green">
                                <div class="row">
                                    <div class="col-3 six-menu-left">
                                        <span class="font-banner-button-green">IIT</span>
                                    </div>
                                    <div class="col-9 six-menu-right">
                                        <span class="font-banner-button-green">แบบวัดการรับรู้ภายใน</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="https://itas.nacc.go.th/go/eit/6bq910" target="_blank">
                            <div class="banner-button-green">
                                <div class="row">
                                    <div class="col-3 six-menu-left">
                                        <span class="font-banner-button-green">EIT</span>
                                    </div>
                                    <div class="col-9 six-menu-right">
                                        <span class="font-banner-button-green">แบบวัดการรับรู้ภายนอก</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 underline">
                        <a href="<?php echo site_url('Pages/msg_pres'); ?>">
                            <div class="banner-button-green">
                                <div class="row">
                                    <div class="col-3 six-menu-left">
                                        <span class="font-banner-button-green">MES</span>
                                    </div>
                                    <div class="col-9 six-menu-right">
                                        <span class="font-banner-button-green">สารจากนายก</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo site_url('Pages/questions'); ?>">
                            <div class="banner-button-green">
                                <div class="row">
                                    <div class="col-3 six-menu-left">
                                        <span class="font-banner-button-green">FAQ</span>
                                    </div>
                                    <div class="col-9 six-menu-right">
                                        <span class="font-banner-button-green">คำถามที่พบบ่อย</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo site_url('Pages/contact'); ?>">
                            <div class="banner-button-green">
                                <div class="row">
                                    <div class="col-3 six-menu-left">
                                        <span class="font-banner-button-green">CON</span>
                                    </div>
                                    <div class="col-9 six-menu-right">
                                        <span class="font-banner-button-green">ติดต่อสอบถาม</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-7" style="position: relative; padding-left: 80px; ">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="z-index: 10;">
                    <div class="carousel-inner">
                        <?php foreach ($qBanner as $index => $img_banner) { ?>
                            <div class="carousel-item <?= ($index === 0) ? "active" : ""; ?>" data-bs-interval="5000">
                                <a href="<?= $img_banner->banner_link; ?>" target="_blank">
                                    <img src="docs/img/<?= $img_banner->banner_img; ?>" class="d-block w-100" style="width: 775px !important; border-radius: 25px 25px; ">
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="carousel-indicators" style="bottom: -40px; height: 1px; width: 1px; margin-left: 390px;">
                        <?php foreach ($qBanner as $index => $img_banner) {
                            $active = ($index === 0) ? "active" : "";
                        ?>
                            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="<?= $index; ?>" class="<?= $active; ?>" aria-current="true" aria-label="Slide <?= ($index + 1); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.48 1.48 0 0 1 0-2.098z" />
                                </svg>
                            </button>
                        <?php } ?>
                    </div>
                </div>
                <!-- สวัสดีจ้า อนิเมะชั่น -->
                <!-- <div class="banner-cartoon underline">
                    <a href="#oss">
                        <div class='console-container'><span id='text'></span>
                            <div class='console-underscore' id='console'>&#95;</div>
                        </div>
                    </a>
                </div> -->
            </div>
            <div class="col-5 mt-5">
                <div class="bg-top-calender">
                    <div class="top-calender">
                        ปฎิทินกิจกรรม
                    </div>
                    <div class="row">
                        <div class="col-6" style="z-index: 10; cursor: pointer;">
                            <div class="calendar">
                                <div class="calendar-header">
                                    <a id="prevMonth">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" style="color: #D2B99A;" viewBox="0 0 19 27" fill="none">
                                            <path d="M18.3888 23.2622L18.3888 2.7622C18.3888 0.452202 15.7088 -0.837824 13.9088 0.612177L1.02878 10.9522C-0.351221 12.0622 -0.341202 14.1622 1.0488 15.2622L13.9288 25.4322C15.7388 26.8622 18.3888 25.5722 18.3888 23.2722V23.2622Z" fill="white" />
                                        </svg>
                                    </a>
                                    <h3 id="monthYear"></h3>
                                    <a id="nextMonth">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" style="color: #D2B99A;" viewBox="0 0 19 27" fill="none">
                                            <path d="M0 2.80127V23.3013C0 25.6113 2.68001 26.9013 4.48001 25.4513L17.36 15.1113C18.74 14.0013 18.73 11.9013 17.34 10.8013L4.45999 0.631292C2.64999 -0.798708 0 0.491295 0 2.7913V2.80127Z" fill="white" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="weekdays">
                                    <div class="weekday" style="color: red">Sun</div>
                                    <div class="weekday" style="color: #76787A">Mon</div>
                                    <div class="weekday" style="color: #76787A">Tue</div>
                                    <div class="weekday" style="color: #76787A">Wed</div>
                                    <div class="weekday" style="color: #76787A">Thu</div>
                                    <div class="weekday" style="color: #76787A">Fri</div>
                                    <div class="weekday" style="color: #76787A">Sat</div>
                                </div>
                                <div class="days" id="days"></div>
                            </div>
                        </div>
                        <div class="col-6" style="margin-left: -35px; margin-top: 70px; padding: 0px 0px 0px 40px;">
                            <div class="calender-detail-head">
                                <span class="font-calender">รายละเอียดกิจกรรม</span>
                            </div>
                            <div class="calender-detail-content mt-3">
                                <div id="qCalender">
                                    <!-- ข้อมูลกิจกรรมจะแสดงที่นี่เมื่อคลิกวันที่ -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-activity" id="activity">
    <div class="container-star-news-animation">
        <img class="star-news-animation-1" src="docs/animation-star-1.png">
        <img class="star-news-animation-2" src="docs/animation-star-2.png">
        <img class="star-news-animation-3" src="docs/animation-star-3.png">
        <img class="star-news-animation-4" src="docs/animation-star-3.png">
        <img class="star-news-animation-6" src="docs/animation-star-1.png">
        <img class="star-news-animation-7" src="docs/animation-star-2.png">
        <img class="star-news-animation-13" src="docs/animation-star-3.png">
        <img class="star-news-animation-14" src="docs/animation-star-2.png">
        <img class="star-news-animation-15" src="docs/animation-star-3.png">
    </div>
    <div class="crop">
        <div class="d-flex justify-content-center" style="padding-top: 10px;">
            <div class="head-activity" >
                <span class="font-header-home">ข่าวสาร / กิจกรรม</span>
            </div>
        </div>
        <div class="row d-flex justify-content-center" style="position: relative; z-index: 5 !important;">
            <?php foreach ($qActivity as $activity) { ?>
                <div class="card-activity col-2 mx-4" style="margin-top: 40px;">
                    <?php if (!empty($activity->activity_img)) : ?>
                        <a href="<?= site_url('pages/activity_detail/' . $activity->activity_id); ?>">
                            <img src="<?php echo base_url('docs/img/' . $activity->activity_img); ?>" width="245px" height="182px" style="border-radius: 24px 24px 0 0;">
                        </a>
                    <?php else : ?>
                        <a href="<?= site_url('pages/activity_detail/' . $activity->activity_id); ?>">
                            <img src="<?php echo base_url('docs/logo.png'); ?>">
                        </a>
                    <?php endif; ?>
                    <br>
                    <div class="box-activity">
                        <div class="text-activity underline">
                            <a href="<?= site_url('pages/activity_detail/' . $activity->activity_id); ?>">
                                <div class="activity-item">
                                    <span class="font-pages-heads-img two-line-ellipsis-activity"><?= $activity->activity_name; ?></span>
                                    <?php
                                    // วันที่ของข่าว
                                    $activity_date = new DateTime($activity->activity_date);

                                    // วันที่ปัจจุบัน
                                    $current_date = new DateTime();

                                    // คำนวณหาความต่างของวัน
                                    $interval = $current_date->diff($activity_date);
                                    $days_difference = $interval->days;

                                    // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                    if ($days_difference <= 30) {
                                        // แสดงรูปภาพ
                                        echo '<img src="' . base_url('docs/activity-new.gif') . '"class="activity-new-img">';
                                    }
                                    ?>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7 mt-3">
                            <svg style="color: #693708;" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-calendar-minus-fill" viewBox="0 0 16 16">
                                <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM6 10h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1 0-1z" />
                            </svg>
                            <span class="span-time-home ">
                                <?php
                                // ในการใช้งาน setThaiMonth
                                $date = new DateTime($activity->activity_date);
                                $day_th = $date->format('d');
                                $month_th = setThaiMonth($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                echo $formattedDate;
                                ?>
                            </span>
                        </div>
                        <div class="col-5">
                            <div class="font-12 underline d-flex justify-content-end mt-4">
                                <a href="<?= site_url('pages/activity_detail/' . $activity->activity_id); ?>"><svg xmlns="http://www.w3.org/2000/svg" style="color: black; margin-top: -5px;" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                    </svg>&nbsp;เปิดดู : <span><?= $activity->activity_view; ?></span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            <?php } ?>
        </div>
        <div class="d-flex justify-content-center underline" style="margin-top: 80px;">
            <a href="<?php echo site_url('pages/activity'); ?>">
                <div class="button-activity-all">
                    <span class="font-all-home" style="margin-left: 40px;">ดูทั้งหมด</span>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="bg-public-news">
     
    <div class="crop">
        <div class="d-flex justify-content-center" style="padding-top: 3%;">
            <div class="head-activity">
                <span class="font-header-home">งานประชาสัมพันธ์</span>
            </div>
        </div>
        <div id="myDIV" class="underline" style="margin-top: 20px;">
            <div class="tab-container2">
                <div class="tab-link-two" onclick="openTabTwo('tabtwo1')">
                    <div class="public-button active-public">
                        <span class="font-public-button">ข่าวประชาสัมพันธ์</span>
                    </div>
                </div>
                <div class="tab-link-two" onclick="openTabTwo('tabtwo2')">
                    <!-- <img src="docs/public_button.png" alt="Tab 2"> -->
                    <div class="public-button">
                        <span class="font-public-button">ข้อบัญญัติ</span>
                    </div>
                </div>
                <div class="tab-link-two">
                    <!-- <img src="docs/public_button.png" alt="Tab 3"> -->
                    <div class="public-button">
                        <span class="font-public-button">คำสั่ง</span>
                    </div>
                </div>
                <div class="tab-link-two" onclick="openTabTwo('tabtwo4')">
                    <!-- <img src="docs/public_button.png" alt="Tab 4"> -->
                    <div class="public-button">
                        <span class="font-public-button">ประกาศ</span>
                    </div>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <div id="tabtwo1" class="tab-content-two">
                    <?php foreach ($qNews as $news) { ?>
                        <div class="content-news-detail">
                            <a href="<?php echo site_url('Pages/news_detail/' . $news->news_id); ?>">
                                <div class="row">
                                    <div class="col-10">
                                        <span class="text-news"><img src="docs/icon-news.png">&nbsp;&nbsp;<?= strip_tags($news->news_name); ?></span>
                                    </div>
                                    <div class="col-2">
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="d-flex justify-content-start">
                                                    <span class="text-news-time" style="padding-left: 30px;">
                                                        <?php
                                                        // ในการใช้งาน setThaiMonth
                                                        $date = new DateTime($news->news_date);
                                                        $day_th = $date->format('d');
                                                        $month_th = setThaiMonth($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                        $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                        $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                        echo $formattedDate;
                                                        ?>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="col-2" style="margin-top: -27px;">
                                                <?php
                                                // วันที่ของข่าว
                                                $news_date = new DateTime($news->news_date);

                                                // วันที่ปัจจุบัน
                                                $current_date = new DateTime();

                                                // คำนวณหาความต่างของวัน
                                                $interval = $current_date->diff($news_date);
                                                $days_difference = $interval->days;

                                                // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                                if ($days_difference > 30) {
                                                    // ไม่แสดงรูปภาพ
                                                } else {
                                                    // แสดงรูปภาพ
                                                    echo '<img src="docs/news-new.gif" width="40" height="16">';
                                                }
                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="d-flex justify-content-center underline" style="margin-top: 80px;">
                        <a href="<?php echo site_url('pages/news'); ?>">
                            <div class="button-new-all" style="margin-top: -50px;">
                                <span class="font-all-home" style="margin-left: 40px;">ดูทั้งหมด</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="tabtwo2" class="tab-content-two">
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/canon_bgps'); ?>">
                            <span class="text-news"><img src="docs/icon-news.png">&nbsp;&nbsp;ข้อบัญญัติงบประมาณ</span>
                        </a>
                    </div>
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/canon_chh'); ?>">
                            <span class="text-news"><img src="docs/icon-news.png">&nbsp;&nbsp;ข้อบัญญัติการควบคุมกิจการที่เป็นอันตรายต่อสุขภาพ</span>
                        </a>
                    </div>
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/canon_ritw'); ?>">
                            <span class="text-news"><img src="docs/icon-news.png">&nbsp;&nbsp;ข้อบัญญัติการติดตั้งระบบบำบัดน้ำเสียในอาคาร</span>
                        </a>
                    </div>
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/canon_market'); ?>">
                            <span class="text-news"><img src="docs/icon-news.png">&nbsp;&nbsp;ข้อบัญญัติตลาด</span>
                        </a>
                    </div>
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/canon_rmwp'); ?>">
                            <span class="text-news"><img src="docs/icon-news.png">&nbsp;&nbsp;ข้อบัญญัติการจัดการสิ่งปฏิกูลและมูลฝอย</span>
                        </a>
                    </div>
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/canon_rcsp'); ?>">
                            <span class="text-news"><img src="docs/icon-news.png">&nbsp;&nbsp;ข้อบัญญัติหลักเกณฑ์การคัดมูลฝอย</span>
                        </a>
                    </div>
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/canon_rcp'); ?>">
                            <span class="text-news"><img src="docs/icon-news.png">&nbsp;&nbsp;ข้อบัญญัติการควบคุมการเลี้ยงหรือปล่อยสุนัขและแมว</span>
                        </a>
                    </div>
                </div>
                <div id="tabtwo3" class="tab-content-two">
                    <?php foreach ($qOrder as $gw) { ?>
                        <div class="content-news-detail">
                            <a href="<?php echo site_url('Pages/order_detail/' . $gw->order_id); ?>">
                                <div class="row">
                                    <div class="col-10">
                                        <span class="text-news"><img src="docs/icon-news.png">&nbsp;&nbsp;<?= strip_tags($gw->order_name); ?></span>
                                    </div>
                                    <div class="col-2">
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="d-flex justify-content-start ">
                                                    <span class="text-news-time">
                                                        <?php
                                                        // ในการใช้งาน setThaiMonth
                                                        $date = new DateTime($gw->order_date);
                                                        $day_th = $date->format('d');
                                                        $month_th = setThaiMonth($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                        $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                        $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                        echo $formattedDate;
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-2" style="margin-top: -27px;">
                                                <?php
                                                // วันที่ของข่าว
                                                $order_date = new DateTime($gw->order_date);

                                                // วันที่ปัจจุบัน
                                                $current_date = new DateTime();

                                                // คำนวณหาความต่างของวัน
                                                $interval = $current_date->diff($order_date);
                                                $days_difference = $interval->days;

                                                // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                                if ($days_difference > 30) {
                                                    // ไม่แสดงรูปภาพ
                                                } else {
                                                    // แสดงรูปภาพ
                                                    echo '<img src="docs/news-new.gif" width="40" height="16">';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="d-flex justify-content-center underline" style="margin-top: 80px;">
                        <a href="<?php echo site_url('pages/order'); ?>">
                            <div class="button-new-all" style="margin-top: -50px;">
                                <span class="font-all-home" style="margin-left: 40px;">ดูทั้งหมด</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div id="tabtwo4" class="tab-content-two">
                    <?php foreach ($qAnnounce as $gw) { ?>
                        <div class="content-news2-detail">
                            <a href="<?php echo site_url('Pages/announce_detail/' . $gw->announce_id); ?>">
                                <div class="row">
                                    <div class="col-10">
                                        <span class="text-news"><img src="docs/icon-news.png">&nbsp;&nbsp;<?= strip_tags($gw->announce_name); ?></span>
                                    </div>
                                    <div class="col-2">
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="d-flex justify-content-start">
                                                    <span class="text-news-time">
                                                        <?php
                                                        // ในการใช้งาน setThaiMonth
                                                        $date = new DateTime($gw->announce_date);
                                                        $day_th = $date->format('d');
                                                        $month_th = setThaiMonth($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                        $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                        $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                        echo $formattedDate;
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-2" style="margin-top: -27px;">
                                                <?php
                                                // วันที่ของข่าว
                                                $announce_date = new DateTime($gw->announce_date);

                                                // วันที่ปัจจุบัน
                                                $current_date = new DateTime();

                                                // คำนวณหาความต่างของวัน
                                                $interval = $current_date->diff($announce_date);
                                                $days_difference = $interval->days;

                                                // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                                if ($days_difference > 30) {
                                                    // ไม่แสดงรูปภาพ
                                                } else {
                                                    // แสดงรูปภาพ
                                                    echo '<img src="docs/news-new.gif" width="40" height="16">';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="d-flex justify-content-center underline" style="margin-top: 80px;">
                        <a href="<?php echo site_url('pages/announce'); ?>">
                            <div class="button-new-all" style="margin-top: -50px;">
                                <span class="font-all-home" style="margin-left: 40px;">ดูทั้งหมด</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-public-news2" id="egp">
    <img class="wipwap dot-news-animation-1" src="docs/anime-light-home1.png">
    <img class="wipwap dot-news-animation-2" src="docs/anime-light-home1.png">
    <img class="wipwap dot-news-animation-3" src="docs/anime-light-home1.png">
    <img class="wipwap dot-news-animation-5" src="docs/anime-light-home1.png">
    <img class="wipwap dot-news-animation-6" src="docs/anime-light-home2.png">
    <img class="wipwap dot-news-animation-15" src="docs/anime-light-home2.png">

    <div class="baimai-container">
    <img class="baimai-animation baimai-animation1" src="docs/baimai-animation1.png" alt="Ball 1">
    <img class="baimai-animation baimai-animation2" src="docs/baimai-animation2.png" alt="Ball 2">
    <img class="baimai-animation baimai-animation3" src="docs/baimai-animation3.png" alt="Ball 3">
    <img class="baimai-animation baimai-animation4" src="docs/baimai-animation4.png" alt="Ball 4">
    <img class="baimai-animation baimai-animation5" src="docs/baimai-animation5.png" alt="Ball 5">
    <img class="baimai-animation baimai-animation6" src="docs/baimai-animation6.png" alt="Ball 6">
    <img class="baimai-animation baimai-animation7" src="docs/baimai-animation7.png" alt="Ball 7">
</div>

    <div class="crop">
        <div class="d-flex justify-content-center" style="padding-top: 3%; ">
            <div class="head-activity">
                <span class="font-header-home">งานจัดซื้อจัดจ้าง</span>
            </div>
        </div>
        <div id="myDIV2" class="underline" style="margin-top: 20px;">
            <div class="tab-container2 d-flex justify-content-center">
                <div class="tab-link" onclick="openTab('tab1')">
                    <!-- <img src="docs/news_button.png" alt="Tab 1"> -->
                    <div class="new-button active-new">
                        <span class="font-new-button">ข่าวจัดซื้อจัดจ้าง</span>
                    </div>
                </div>
                <div class="tab-link" onclick="openTab('tab2')">
                    <!-- <img src="docs/news_button.png" alt="Tab 2"> -->
                    <div class="new-button">
                        <span class="font-new-button">จัดซื้อจัดจ้าง e-GP</span>
                    </div>
                </div>
                <div class="tab-link" onclick="openTab('tab3')">
                    <!-- <img src="docs/news_button.png" alt="Tab 3"> -->
                    <div class="new-button">
                        <span class="font-new-button">รายงานใช้จ่ายงบประมาณ</span>
                    </div>
                </div>
                <div class="tab-link" onclick="openTab('tab4')">
                    <!-- <img src="docs/news_button.png" alt="Tab 4"> -->
                    <div class="new-button">
                        <span class="font-new-button">รายงานผลการดำเนินงาน</span>
                    </div>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <div id="tab1" class="tab-content">
                    <?php foreach ($qProcurement as $pcm) { ?>
                        <div class="content-news2-detail">
                            <a href="<?php echo site_url('Pages/procurement_detail/' . $pcm->procurement_id); ?>">
                                <div class="row">
                                    <div class="col-10">
                                        <span class="text-news"><img src="docs/icon-news.png">&nbsp;&nbsp;<?= strip_tags($pcm->procurement_name); ?></span>
                                    </div>
                                    <div class="col-2">
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="d-flex justify-content-start">
                                                    <span class="text-news-time">
                                                        <?php
                                                        // ในการใช้งาน setThaiMonth
                                                        $date = new DateTime($pcm->procurement_date);
                                                        $day_th = $date->format('d');
                                                        $month_th = setThaiMonth($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                        $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                        $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                        echo $formattedDate;
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-2" style="margin-top: -27px;">
                                                <?php
                                                // วันที่ของข่าว
                                                $procurement_date = new DateTime($pcm->procurement_date);

                                                // วันที่ปัจจุบัน
                                                $current_date = new DateTime();

                                                // คำนวณหาความต่างของวัน
                                                $interval = $current_date->diff($procurement_date);
                                                $days_difference = $interval->days;

                                                // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                                if ($days_difference > 30) {
                                                    // ไม่แสดงรูปภาพ
                                                } else {
                                                    // แสดงรูปภาพ
                                                    echo '<img src="docs/news-new.gif" width="40" height="16">';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="d-flex justify-content-center underline" style="margin-top: 80px;">
                        <a href="<?php echo site_url('pages/procurement'); ?>">
                            <div class="button-new2-all" style="margin-top: -50px;">
                                <span class="font-all-home" style="margin-left: 40px;">ดูทั้งหมด</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="tab2" class="tab-content">
                    <?php foreach ($qEgp as $egp) { ?>
                        <div class="content-news2-detail">
                            <a href="https://process3.gprocurement.go.th/egp2procmainWeb/jsp/procsearch.sch?servlet=gojsp&proc_id=ShowHTMLFile&processFlows=Procure&projectId=<?= $egp->project_id; ?>&templateType=W2&temp_Announ=A&temp_itemNo=0&seqNo=1" target="_blank">
                                <div class="row">
                                    <div class="col-10">
                                        <span class="text-news"><img src="docs/e-gp.png" width="40px" style="margin-top: -5px;">&nbsp;&nbsp;<?= strip_tags($egp->project_name); ?></span>
                                    </div>
                                    <div class="col-2">
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="d-flex justify-content-start">
                                                    <span class="text-news-time">
                                                        <?php
                                                        // สมมติว่าค่าที่ได้รับมาจากตัวแปร $rs['doc_date'] อยู่ในรูปแบบ "10 ม.ค. 67"
                                                        $dateStr = $egp->transaction_date;

                                                        // แปลงเดือนจากชื่อไทยย่อเป็นชื่อเต็ม
                                                        $thaiMonths = [
                                                            'ม.ค.' => 'มกราคม',
                                                            'ก.พ.' => 'กุมภาพันธ์',
                                                            'มี.ค.' => 'มีนาคม',
                                                            'เม.ย.' => 'เมษายน',
                                                            'พ.ค.' => 'พฤษภาคม',
                                                            'มิ.ย.' => 'มิถุนายน',
                                                            'ก.ค.' => 'กรกฎาคม',
                                                            'ส.ค.' => 'สิงหาคม',
                                                            'ก.ย.' => 'กันยายน',
                                                            'ต.ค.' => 'ตุลาคม',
                                                            'พ.ย.' => 'พฤศจิกายน',
                                                            'ธ.ค.' => 'ธันวาคม',
                                                        ];

                                                        // แปลงเดือนใน $dateStr โดยใช้การแทนที่จาก array $thaiMonths
                                                        foreach ($thaiMonths as $shortMonth => $fullMonth) {
                                                            if (strpos($dateStr, $shortMonth) !== false) {
                                                                $dateStr = str_replace($shortMonth, $fullMonth, $dateStr);
                                                                break; // ออกจาก loop เมื่อเจอการแทนที่แล้ว
                                                            }
                                                        }

                                                        // แปลงปีคริสต์ศักราช (สองหลัก) เป็นปีพุทธศักราช (สี่หลัก)
                                                        preg_match('/\d{2}$/', $dateStr, $matches);
                                                        if ($matches) {
                                                            $year = $matches[0]; // ดึงตัวเลขสองหลักท้ายสุด ซึ่งคือปีในรูปแบบ 67
                                                            $fullYear = (int)$year < 50 ? '25' . $year : '25' . $year; // เพิ่ม '25' ข้างหน้าปี
                                                            $dateStr = str_replace($year, $fullYear, $dateStr); // แทนที่ปีด้วยปีที่เพิ่ม '25' ข้างหน้า
                                                        }

                                                        // แสดงผลลัพธ์
                                                        echo $dateStr; // ตัวอย่างเช่น "10 มกราคม 2567"
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-2" style="margin-top: -27px;">
                                                <?php
                                                // วันที่ของข่าว
                                                $contract_contract_date = new DateTime($egp->contract_contract_date);

                                                // วันที่ปัจจุบัน
                                                $current_date = new DateTime();

                                                // คำนวณหาความต่างของวัน
                                                $interval = $current_date->diff($contract_contract_date);
                                                $days_difference = $interval->days;

                                                // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                                if ($days_difference > 30) {
                                                    // ไม่แสดงรูปภาพ
                                                } else {
                                                    // แสดงรูปภาพ
                                                    echo '<img src="docs/news-new.gif" width="40" height="16">';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="d-flex justify-content-center underline" style="margin-top: 80px;">
                        <a href="<?php echo site_url('pages/egp'); ?>">
                            <div class=" " style="margin-top: -50px;">
                                <span class="font-all-home" style="margin-left: 25px;">ดูทั้งหมด</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="tab3" class="tab-content">
                    <?php foreach ($qP_reb as $anou) { ?>
                        <div class="content-news2-detail">
                            <a href="<?php echo site_url('Pages/p_reb_detail/' . $anou->p_reb_id); ?>">
                                <div class="row">
                                    <div class="col-10">
                                        <span class="text-news"><img src="docs/icon-news.png">&nbsp;&nbsp;<?= strip_tags($anou->p_reb_name); ?></span>
                                    </div>
                                    <div class="col-2">
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="d-flex justify-content-start">
                                                    <span class="text-news-time">
                                                        <?php
                                                        // ในการใช้งาน setThaiMonth
                                                        $date = new DateTime($anou->p_reb_date);
                                                        $day_th = $date->format('d');
                                                        $month_th = setThaiMonth($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                        $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                        $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                        echo $formattedDate;
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-2" style="margin-top: -27px;">
                                                <?php
                                                // วันที่ของข่าว
                                                $p_reb_date = new DateTime($anou->p_reb_date);

                                                // วันที่ปัจจุบัน
                                                $current_date = new DateTime();

                                                // คำนวณหาความต่างของวัน
                                                $interval = $current_date->diff($p_reb_date);
                                                $days_difference = $interval->days;

                                                // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                                if ($days_difference > 30) {
                                                    // ไม่แสดงรูปภาพ
                                                } else {
                                                    // แสดงรูปภาพ
                                                    echo '<img src="docs/news-new.gif" width="40" height="16">';
                                                }
                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="d-flex justify-content-center underline" style="margin-top: 80px;">
                        <a href="<?php echo site_url('pages/p_reb'); ?>">
                            <div class="button-new2-all" style="margin-top: -50px;">
                                <span class="font-all-home" style="margin-left: 40px;">ดูทั้งหมด</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="tab4" class="tab-content">
                    <?php foreach ($qP_rpo as $anou) { ?>
                        <div class="content-news2-detail">
                            <a href="<?php echo site_url('Pages/p_rpo_detail/' . $anou->p_rpo_id); ?>">
                                <div class="row">
                                    <div class="col-10">
                                        <span class="text-news"><img src="docs/icon-news.png">&nbsp;&nbsp;<?= strip_tags($anou->p_rpo_name); ?></span>
                                    </div>
                                    <div class="col-2">
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="d-flex justify-content-start">
                                                    <span class="text-news-time">
                                                        <?php
                                                        // ในการใช้งาน setThaiMonth
                                                        $date = new DateTime($anou->p_rpo_date);
                                                        $day_th = $date->format('d');
                                                        $month_th = setThaiMonth($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                        $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                        $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                        echo $formattedDate;
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-2" style="margin-top: -27px;">
                                                <?php
                                                // วันที่ของข่าว
                                                $p_rpo_date = new DateTime($anou->p_rpo_date);

                                                // วันที่ปัจจุบัน
                                                $current_date = new DateTime();

                                                // คำนวณหาความต่างของวัน
                                                $interval = $current_date->diff($p_rpo_date);
                                                $days_difference = $interval->days;

                                                // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                                if ($days_difference > 30) {
                                                    // ไม่แสดงรูปภาพ
                                                } else {
                                                    // แสดงรูปภาพ
                                                    echo '<img src="docs/news-new.gif" width="40" height="16">';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="d-flex justify-content-center underline" style="margin-top: 80px;">
                        <a href="<?php echo site_url('pages/p_rpo'); ?>">
                            <div class="button-new2-all" style="margin-top: -50px;">
                                <span class="font-all-home" style="margin-left: 40px;">ดูทั้งหมด</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-news-dla-prov">
    <img class="wipwap dot-news-animation-5" src="docs/anime-light-home2.png">
    <img class="wipwap dot-news-animation-6" src="docs/anime-light-home2.png">
    <div class="d-flex justify-content-center">
        <div class="head-activity">
            <span class="font-header-home">ข่าวสาร สถ.</span>
        </div>
    </div>
    <div class="bg-dla-prov-content">
        <div style="padding-top: 5px; padding-left: 90px;">
            <span class="font-dla-header">สถ.จ. เพชรบูรณ์</span>
        </div>
        <div class="news-dla-prov">
            <!-- <?php foreach ($prov_local_doc as $rs) : ?>
                <div class="row mt-2 underline" style="padding-left: 60px;">
                    <div class="col-2">
                        <span class="font-dla-1 line-ellipsis-dla1"><img src="docs/icon-news2.png">&nbsp;&nbsp; <?php echo $rs['doc_no']; ?> </span>
                    </div>
                    <div class="col-6">
                        <a href="<?php echo $rs['url1']; ?>" target="_blank" rel="noopener noreferrer">
                            <span class="font-dla-2 line-ellipsis-dla-prov2"><?php echo $rs['topic']; ?></span>
                        </a>
                    </div>
                    <div class="col-1 text-center">
                        <?php
                        // แสดงส่วนของ "ด่วนที่สุด" หรือ "ทั่วไป" ตามที่ต้องการ
                        if (strpos($rs['topic'], '[ด่วนที่สุด]') !== false) {
                            echo '<span class="font-dla-2 most_urgent">ด่วนที่สุด</span>';
                        } elseif (strpos($rs['topic'], '[ด่วนมาก]') !== false) {
                            echo '<span class="font-dla-2 very_urgent">ด่วนมาก</span>';
                        } elseif (strpos($rs['topic'], '[ทั่วไป]') !== false) {
                            echo '<span class="font-dla-2 green-color">ทั่วไป</span>';
                        }
                        ?>
                    </div>
                    <div class="col-1">
                        <?php
                        // สมมติว่าค่าที่ได้รับมาจากตัวแปร $rs['doc_date'] อยู่ในรูปแบบ "10 มิถุนายน 2567"
                        $dateStr = $rs['doc_date'];

                        // แปลงเดือนจากชื่อภาษาไทยเป็นเลขเดือน
                        $thaiMonths = [
                            'มกราคม' => '01',
                            'กุมภาพันธ์' => '02',
                            'มีนาคม' => '03',
                            'เมษายน' => '04',
                            'พฤษภาคม' => '05',
                            'มิถุนายน' => '06',
                            'กรกฎาคม' => '07',
                            'สิงหาคม' => '08',
                            'กันยายน' => '09',
                            'ตุลาคม' => '10',
                            'พฤศจิกายน' => '11',
                            'ธันวาคม' => '12',
                        ];

                        // แยกวันที่ เดือน และ ปี ออกจากสตริง
                        $parts = explode(' ', $dateStr);
                        if (count($parts) !== 3) {
                            echo "รูปแบบวันที่ไม่ถูกต้อง";
                            return; // ออกจากการทำงานของโค้ดถ้ารูปแบบไม่ถูกต้อง
                        }
                        $day = $parts[0];
                        $monthThai = $parts[1];
                        $yearThai = $parts[2];

                        // ตรวจสอบว่าเดือนภาษาไทยมีอยู่ในอาเรย์ของเดือนหรือไม่
                        if (!isset($thaiMonths[$monthThai])) {
                            echo "เดือนที่ระบุไม่ถูกต้อง";
                            return; // ออกจากการทำงานของโค้ดถ้าเดือนไม่ถูกต้อง
                        }
                        $month = $thaiMonths[$monthThai];

                        // แปลงปีจาก พ.ศ. เป็น ค.ศ.
                        $year = $yearThai - 543;

                        // สร้างรูปแบบวันที่ใหม่ในรูปแบบสากล (YYYY-MM-DD)
                        $formattedDate = "$year-$month-$day";

                        // สร้าง DateTime object จากวันที่ที่ถูกแปลงแล้ว
                        $date = DateTime::createFromFormat('Y-m-d', $formattedDate);

                        // ตรวจสอบว่าการแปลงวันที่สำเร็จ
                        if ($date !== false) {
                            // วันที่ปัจจุบัน
                            $currentDate = new DateTime();

                            // คำนวณความต่างระหว่างวันที่
                            $interval = $currentDate->diff($date);

                            // ตรวจสอบว่าความต่างของวันไม่เกิน 7 วัน
                            if ($interval->days <= 7) {
                                // ตรวจสอบว่า $date มีค่าตั้งแต่แรกหรือไม่
                                if (isset($date)) {
                                    // ถ้าห่างไม่เกิน 7 วัน (ทั้งก่อนและหลังวันที่ปัจจุบัน)
                                    echo '<div class="bt-new-dla"><span class="text-new-dla">new</span></div>';
                                }
                            }
                        } else {
                            echo "การแปลงวันที่ไม่สำเร็จ";
                        }
                        ?>
                    </div>
                    <div class="col-2">
                        <span class="font-all-dla" style="padding-left: 20px;">
                            <?php echo $rs['doc_date']; ?>

                        </span>
                    </div>
                </div>
            <?php endforeach; ?> -->
        </div>
        <div class="d-flex justify-content-center underline" style="margin-top: 70px;">
            <a href="<?php echo site_url('pages/prov_local_doc'); ?>">
                <div class="btn-all-dla-prov" style="margin-top: -50px;">
                    <span class="font-all-dla">ดูทั้งหมด</span>
                </div>
            </a>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="margin-left: 45%;">
        <span class="font-notify-home">หมายเหตุ อ้างอิงแหล่งที่มาจาก กรมส่งเสริมการปกครองส่วนท้องถิ่น  <a href="https://www.dla.go.th/" target="_blank">(https://www.dla.go.th/)</a></span>
    </div>
</div>

<div class="bg-news-dla">
    <img class="wipwap dot-news-animation-5" src="docs/anime-light-home1.png">
    <img class="wipwap dot-news-animation-1" src="docs/anime-light-home1.png">
    <img class="wipwap dot-news-animation-6" src="docs/anime-light-home2.png">

    <div class="bg-dla-content">
        <div style="padding-top: 10px; padding-left: 50px;">
            <span class="font-dla-header">หนังสือ สถ.</span>
        </div>
        <div class="news-dla-prov mt-4">
            <?php if (!empty($rssData)) : ?>
                <?php foreach (array_slice($rssData, 0, 15) as $index => $document) : ?>
                    <div class="row mt-2 underline" style="padding-left: 60px;">
                        <div class="col-2">
                            <span class="font-dla-1 line-ellipsis-dla1"><img src="docs/icon-news2.png">&nbsp;&nbsp; <?php echo $document['doc_number']; ?> </span>
                        </div>
                        <div class="col-7">
                            <span class="font-dla-2 line-ellipsis-dla2"><?php echo $document['topic']; ?></span>
                        </div>
                        <div class="col-1">
                            <?php
                            // สมมติว่าค่าที่ได้รับมาจากตัวแปร $document['date'] อยู่ในรูปแบบ "10/06/2567"
                            $dateStr = $document['date'];

                            // แยกวันที่ เดือน และปีออกจากกัน
                            list($day, $month, $year) = explode('/', $dateStr);

                            // แปลงปีจาก พ.ศ. เป็น ค.ศ.
                            $year = $year - 543;

                            // สร้างรูปแบบวันที่ใหม่ในรูปแบบสากล (YYYY-MM-DD)
                            $formattedDate = "$year-$month-$day";

                            // สร้าง DateTime object จากวันที่ที่ถูกแปลงแล้ว
                            $date = DateTime::createFromFormat('Y-m-d', $formattedDate);

                            // ตรวจสอบว่าการแปลงวันที่สำเร็จและคำนวณความต่างของวัน
                            if ($date !== false) {
                                // วันที่ปัจจุบัน
                                $currentDate = new DateTime();

                                // คำนวณความต่างระหว่างวันที่
                                $interval = $currentDate->diff($date);

                                // ตรวจสอบว่าความต่างของวันไม่เกิน 7 วัน
                                if ($interval->days <= 7) {
                                    // ถ้าห่างไม่เกิน 7 วัน (ทั้งก่อนและหลังวันที่ปัจจุบัน)
                                    echo '<div class="bt-new-dla"><span class="text-new-dla">new</span></div>';
                                }
                            }
                            ?>
                        </div>
                        <div class="col-2">
                            <?php
                            // $document['date'] คือตัวแปรที่เก็บวันที่

                            // แปลงวันที่เป็น object DateTime ด้วยรูปแบบที่ถูกต้อง
                            $date = DateTime::createFromFormat('d/m/Y', $document['date']);

                            // ดึงวันที่
                            $thaiDay = $date->format('d');

                            // ดึงเดือนเป็นตัวย่อไทย
                            $thaiMonths = [
                                'January' => 'มกราคม',
                                'February' => 'กุมภาพันธ์',
                                'March' => 'มีนาคม',
                                'April' => 'เมษายน',
                                'May' => 'พฤษภาคม',
                                'June' => 'มิถุนายน',
                                'July' => 'กรกฎาคม',
                                'August' => 'สิงหาคม',
                                'September' => 'กันยายน',
                                'October' => 'ตุลาคม',
                                'November' => 'พฤศจิกายน',
                                'December' => 'ธันวาคม',
                            ];
                            $thaiMonth = $thaiMonths[$date->format('F')];

                            // ดึงเฉพาะปี
                            $year = $date->format('Y');

                            // แสดงผลลัพธ์
                            ?>
                            <span class="font-all-dla" style="padding-left: 20px;">
                                <?php echo $thaiDay; ?>
                                <?php echo $thaiMonth; ?>
                                <?php echo $year; ?>
                            </span>
                            <?php ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="d-flex justify-content-center underline" style="margin-top: 70px;">
            <a href="https://www.dla.go.th/servlet/DocumentServlet" target="_blank">
                <div class="btn-all-dla" style="margin-top: -50px;">
                    <span class="font-all-dla">ดูทั้งหมด</span>
                </div>
            </a>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="margin-left: 45%;">
        <span class="font-notify-home">หมายเหตุ อ้างอิงแหล่งที่มาจาก กรมส่งเสริมการปกครองส่วนท้องถิ่น <a href=" https://www.dla.go.th/" target="_blank"> (https://www.dla.go.th/)</a></span>
    </div>
</div>


<div class="bg-travel">
    <div class="sun-cartoon-animation text-center">
        <img class="wel-light-nav" src="docs/sun-cartoon-animation.png">
    </div>
    <img class="cloud-cartoon-animation cloud-cartoon-animation-1" src="docs/animation-cloud-cartoon1.png">
    <img class="cloud-cartoon-animation cloud-cartoon-animation-2" src="docs/animation-cloud-cartoon2.png">
    <img class="cloud-cartoon-animation cloud-cartoon-animation-3" src="docs/animation-cloud-cartoon1.png">
    <img class="cloud-cartoon-animation cloud-cartoon-animation-4" src="docs/animation-cloud-cartoon1.png">
    <img class="cloud-cartoon-animation cloud-cartoon-animation-5" src="docs/animation-cloud-cartoon2.png">
    <div class="crop">
        <div class="d-flex justify-content-center" style="padding-top: 1%; ">
            <div class="head-travel">
                <span class="font-header-travel">สถานที่ท่องเที่ยว</span>
            </div>
        </div>
        <div class="travel-content" style="padding-top: 1%; ">
            <div class="image-container text-center" style="margin-left: 35.8px; margin-top: -20px;">
                <span class="font-travel">แหล่งเรียนรู้ในชุมชนตำบลซับพทรา</span><br>
                <div class="mt-5">
                    <a href="<?php echo site_url('Pages/travel_detail/1'); ?>">
                        <img class="img-travel" src="docs/travel-mark1.png">
                    </a>
                    <img class="img-travel-180" src="docs/bg-anime-travel.png" style="margin-left: -174px; margin-top: -22px; ">
                </div>
            </div>
            <div class="image-container text-center" style=" margin-left: 750px;">
                <span class="font-travel">อ่างเก็บน้ำซับเจริญ</span><br>
                <div class="mt-5">
                    <a href="<?php echo site_url('Pages/travel_detail/2'); ?>">
                        <img class="img-travel" src="docs/travel-mark2.png" alt="Map">
                    </a>
                    <img class="img-travel-180" src="docs/bg-anime-travel.png" style="margin-left: -174px; margin-top: -22px; ">
                </div>
            </div>
            <div class="image-container text-center" style="margin-left: 1020px; margin-top: -50px;">
                <span class="font-travel">วัดซับป่าคาย</span><br>
                <div class="mt-5">
                    <a href="<?php echo site_url('Pages/travel_detail/3'); ?>">
                        <img class="img-travel" src="docs/travel-mark3.png" alt="Map">
                    </a>
                    <img class="img-travel-180" src="docs/bg-anime-travel.png" style="margin-left: -174px; margin-top: -22px; ">
                </div>
            </div>
            <div class="image-container text-center" style="margin-left: 1276px; margin-top: -105px;">
                <span class="font-travel">ภูเขาหินปะการัง</span><br>
                <div class="mt-5">
                    <a href="<?php echo site_url('Pages/travel_detail/4'); ?>">
                        <img class="img-travel" src="docs/travel-mark4.png" alt="Map">
                    </a>
                    <img class="img-travel-180" src="docs/bg-anime-travel.png" style="margin-left: -174px; margin-top: -22px; ">
                </div>
            </div>
            <div class="image-container text-center" style="margin-left: 262px; margin-top: 585px;">
                <a href="<?php echo site_url('Pages/travel_detail/5'); ?>">
                    <img class="img-travel" src="docs/travel-mark5.png" alt="Map">
                </a>
                <img class="img-travel-180" src="docs/bg-anime-travel.png" style="margin-left: -174px; margin-top: -22px; ">
                <div class="mt-5">
                    <span class="font-travel">วัดขามแดงเจริญธรรม</span><br>
                </div>
            </div>
            <div class="image-container text-center" style="margin-left: 750px; margin-top: 580px;">
                <a href="<?php echo site_url('Pages/travel_detail/6'); ?>">
                    <img class="img-travel" src="docs/travel-mark6.png" alt="Map">
                </a>
                <img class="img-travel-180" src="docs/bg-anime-travel.png" style="margin-left: -174px; margin-top: -22px; ">
                <div class="mt-5">
                    <span class="font-travel">วัดเขาถ้ำศรีทรงธรรม</span><br>
                </div>
            </div>
            <div class="image-container text-center" style="margin-left: 1345px; margin-top: 585px;">
                <a href="<?php echo site_url('Pages/travel_detail/7'); ?>">
                    <img class="img-travel" src="docs/travel-mark7.png" alt="Map">
                </a>
                <img class="img-travel-180" src="docs/bg-anime-travel.png" style="margin-left: -174px; margin-top: -22px; ">
                <div class="mt-5">
                    <span class="font-travel">น้ำตกซับเจริญ</span><br>
                </div>
            </div>
        </div>
    </div>
</div>






<div class="bg-service" id="oss">
    <div class="d-flex justify-content-center" style="padding-top: 3%; ">
        <div class="head-eservice">
            <span class="font-header-travel">One Stop e-Service</span>
        </div>
    </div>
    <div class="text-center text-run-btm-eservice">
        <div class="row">
            <div class="col-1" style="margin-top: -5px;">&nbsp;&nbsp;&nbsp;<img src="<?php echo base_url("docs/icon-notify-bell.png"); ?>" width="43" height="43"></div>
            <div class="col-11">
                <marquee>
                    <span class="font-heder-service">บริการ สะดวก รวดเร็ว เมื่อแจ้งเรื่องผ่าน e-Service โดยมี Line Notify แจ้งเรื่องไปถึงผู้ดูเเลโดยตรง </span>
                </marquee>
            </div>
        </div>

    </div>

    <div class="row mt-5 underline" style="width:  1560px; margin-left: 10%;">
        <div class="col">
            <a href="<?php echo site_url('Pages/adding_complain'); ?>">
                <div class="button-e-service">
                    <span class="font-button-e-service">แจ้งเรื่อง ร้องเรียน</span>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="<?php echo site_url('Pages/adding_corruption'); ?>">
                <div class="button-e-service">
                    <span class="font-button-e-service">แจ้งเรื่องทุจริต</span>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="<?php echo site_url('Pages/adding_suggestions'); ?>">
                <div class="button-e-service">
                    <span class="font-button-e-service">รับฟังความคิดเห็น</span>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="<?php echo site_url('Pages/kid_aw_ods'); ?>">
                <div class="button-e-service">
                    <span class="font-button-e-service">เด็กแรกเกิด</span>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="<?php echo site_url('Pages/elderly_aw_ods'); ?>">
                <div class="button-e-service">
                    <span class="font-button-e-service">ผู้สูงอายุ/ผู้พิการ</span>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="<?php echo site_url('Pages/adding_esv_ods'); ?>">
                <div class="button-e-service">
                    <span class="font-button-e-service">ยื่นเอกสารออนไลน์</span>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="<?php echo site_url('Pages/e_service'); ?>">
                <div class="button-e-service">
                    <span class="font-button-e-service">แบบฟอร์ม</span>
                </div>
            </a>
        </div>
    </div>



    <div class="service-content underline" style="padding-top: 2%;">
        <div class="crop1440">
            <div class="row">
                <div class="col-6">
                    <div class="bg-qa-list">
                        <div class="d-flex justify-content-center mb-2">
                            <span class="font-q-a-home-head">กระดานสนทนา กระทู้ถาม-ตอบ</span>
                        </div>
                        <?php foreach ($qQ_a as $rs) { ?>
                            <div class="bg-content-qa-list">
                                <a href="<?php echo site_url('Pages/q_a_chat/' . $rs->q_a_id); ?>">
                                    <div class="row">
                                        <div class="col-9 one-line-ellipsis" style="padding-top: 10px;">
                                            <span class="font-q-a-home-form">
                                                <?= $rs->q_a_msg; ?>
                                            </span>
                                        </div>
                                        <div class="col-3 one-line-ellipsis" style="padding-top: 10px;">
                                            <span class="font-q-a-home-by">ผู้ตั้งกระทู้ :
                                                <?= $rs->q_a_by; ?>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                        <div class="d-flex justify-content-end" style="padding-top: 25px; margin-right: 70px;">
                            <div class="mx-4">
                                <a href="<?php echo site_url('pages/addding_q_a'); ?>">
                                    <div class="btn-qa-add">
                                        <span class="font-btn-qa">เพิ่มกระทู้</span>
                                    </div>
                                </a>
                            </div>
                            <a href="<?php echo site_url('pages/q_a'); ?>">
                                <div class="btn-qa-add">
                                    <span class="font-btn-qa">ดูทั้งหมด</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="bg-like">
                        <div class="d-flex justify-content-center" style="padding-top: 15px;">
                            <span class="font-like ">แบบสอบถามความพึงพอใจ</span>
                        </div>
                        <div class="content-like">
                            <div class="row">
                                <div class="col-6">
                                    <form action="<?php echo site_url('home/addLike'); ?>" id="reCAPTCHA3" method="post">
                                        <div class="form-check">
                                            <input class="form-check-input border-like" type="radio" value="ดีมาก" id="flexCheckDefault1" name="like_name" onclick="toggleCheckbox('flexCheckDefault1')" />
                                            <label class="form-check-label font-like-label" for="ดีมาก">&nbsp;&nbsp;&nbsp;&nbsp;ดีมาก</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input border-like" type="radio" value="ดี" id="flexCheckDefault2" name="like_name" onclick="toggleCheckbox('flexCheckDefault2')" />
                                            <label class="form-check-label font-like-label" for="ดี">&nbsp;&nbsp;&nbsp;&nbsp;ดี</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input border-like" type="radio" value="ปานกลาง" id="flexCheckDefault3" name="like_name" onclick="toggleCheckbox('flexCheckDefault3')" />
                                            <label class="form-check-label font-like-label" for="ปานกลาง">&nbsp;&nbsp;&nbsp;&nbsp;ปานกลาง</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input border-like" type="radio" value="พอใช้" id="flexCheckDefault4" name="like_name" onclick="toggleCheckbox('flexCheckDefault4')" />
                                            <label class="form-check-label font-like-label" for="พอใช้">&nbsp;&nbsp;&nbsp;&nbsp;พอใช้</label>
                                        </div>
                                        <!-- <button style="display: none;" type="button" class="btn"><img src="docs/s.btn-sent.png"></button> -->
                                        <div id="submitSection">
                                            <!-- <div class="g-recaptcha" data-sitekey="6LcKoPcnAAAAAKGgUMRtkBs6chDKzC8XOoVnaZg_" data-callback="enableSubmit"></div> -->
                                            <div class="form-group mt-4">
                                                <div class="btn-qa-add">
                                                    <button data-action='submit' data-callback='onSubmit' data-sitekey="6LcfiLYpAAAAAI7_U3nkRRxKF7e8B_fwOGqi7g6x" type="submit" class="bt btn g-recaptcha"><span class="font-like-new">ส่ง</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-5" style="margin-left: -30px; margin-top: 10px;">
                                    <div class="content-like-detail" style="display: none;">
                                        <div style="display: flex; align-items: center;">
                                            <div class="progress-sm mr-6" style="flex: 1; height: 20px;">
                                                <div class="progress-bar" role="progressbar" style="width: <?= $percentExcellent; ?>%;" aria-valuenow="<?= $percentExcellent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span style="font-size: 16px; margin-top: -15px;"><?= number_format($percentExcellent, 2); ?>%</span>
                                        </div>
                                        <div class="" style="display: flex; align-items: center; margin-top: 10px;">
                                            <div class="progress-sm mr-6" style="flex: 1; height: 20px;">
                                                <div class="progress-bar" role="progressbar" style="width: <?= $percentGood; ?>%;" aria-valuenow="<?= $percentGood; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span style="font-size: 16px; margin-top: -10px;"><?= number_format($percentGood, 2); ?>%</span>
                                        </div>
                                        <div class="" style="display: flex; align-items: center; margin-top: 10px;">
                                            <div class="progress-sm mr-6" style="flex: 1; height: 20px;">
                                                <div class="progress-bar" role="progressbar" style="width: <?= $percentAverage; ?>%;" aria-valuenow="<?= $percentAverage; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span style="font-size: 16px; margin-top: -10px;"><?= number_format($percentAverage, 2); ?>%</span>
                                        </div>
                                        <div class="" style="display: flex; align-items: center; margin-top: 13px;">
                                            <div class="progress-sm mr-6" style="flex: 1; height: 20px;">
                                                <div class="progress-bar" role="progressbar" style="width: <?= $percentOkay; ?>%;" aria-valuenow="<?= $percentOkay; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span style="font-size: 16px; margin-top: -10px;"><?= number_format($percentOkay, 2); ?>%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="font-like-new btn-qa-add" style="margin-top: -45px; margin-left: 165px;">
                                    <a class="btn" onclick="showContentLikeDetail()"><span class="font-like-new">ดูคะแนน</span></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="https://www.nacc.go.th/NACCPPWFC?" target="_blank">
                            <img src="docs/anti-corruption.png">
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="bg-facebook">
                        <div class="fb-page" data-href="https://www.facebook.com/people/%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B9%8C%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9A%E0%B8%A3%E0%B8%B4%E0%B8%AB%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B9%88%E0%B8%A7%E0%B8%99%E0%B8%95%E0%B8%B3%E0%B8%9A%E0%B8%A5%E0%B8%8B%E0%B8%B1%E0%B8%9A%E0%B8%9E%E0%B8%B8%E0%B8%97%E0%B8%A3%E0%B8%B2/100064917631107/" data-tabs="timeline" data-width="241" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-link">
    <div class="crop">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href="https://www.phetchabun.go.th/main/index.php" target="_blank"><img src="docs/b.link1.png"></a></div>
                <div class="swiper-slide"><a href="https://www.phetchabunpao.go.th/index.php" target="_blank"><img src="docs/b.link2.png"></a></div>
                <div class="swiper-slide"><a href="http://www.phetchabunhealth.go.th/webph2021/" target="_blank"><img src="docs/b.link3.png"></a></div>
                <div class="swiper-slide"><a href="https://www.cgd.go.th/cs/internet/internet/%E0%B8%AB%E0%B8%99%E0%B9%89%E0%B8%B2%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%812.html?page_locale=th_TH" target="_blank"><img src="docs/link4.png"></a></div>
                <div class="swiper-slide"><a href="https://moi.go.th/moi/" target="_blank"><img src="docs/b.link5.png"></a></div>
                <div class="swiper-slide"><a href="https://www.doe.go.th/" target="_blank"><img src="docs/b.link6.png"></a></div>
                <div class="swiper-slide"><a href="https://www.nhso.go.th/" target="_blank"><img src="docs/b.link7.png"></a></div>
                <div class="swiper-slide"><a href="https://www.phetchabun.go.th/complaint/Hotline.php" target="_blank"><img src="docs/b.link8.png"></a></div>
                <div class="swiper-slide"><a href="https://www.admincourt.go.th/admincourt/site/09illustration.html" target="_blank"><img src="docs/b.link9.png"></a></div>
                <div class="swiper-slide"><a href="https://www.dla.go.th/index.jsp" target="_blank"><img src="docs/b.link10.png"></a></div>
                <div class="swiper-slide"><a href="https://info.go.th/" target="_blank"><img src="docs/b.link11.png"></a></div>
                <div class="swiper-slide"><a href="https://moi.go.th/moi/about-us/%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B8%A1%E0%B8%B9%E0%B8%A5%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%9B%E0%B9%80%E0%B8%81%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A7%E0%B8%81%E0%B8%B1%E0%B8%9A%E0%B8%81/%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%94%E0%B9%84%E0%B8%97%E0%B8%A2%E0%B8%8A%E0%B8%A7%E0%B8%99%E0%B8%A3%E0%B8%B9%E0%B9%89/" target="_blank"><img src="docs/link12.png"></a></div>
                <div class="swiper-slide"><a href="n" target="_blank"><img src="docs/b.link13.png"></a></div>
                <div class="swiper-slide"><a href="https://www.oic.go.th/web2017/km/index.html" target="_blank"><img src="docs/b.link14.png"></a></div>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
            <!-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->
            <div class="custom-button-prev" style="z-index: 100;">
                <img src="docs/pre-home.png" alt="Prev">
            </div>
            <div class="custom-button-next">
                <img src="docs/next-home.png" alt="Next">
            </div>

        </div>
        <div class="text-center" style="position: relative; z-index: 5; margin-top: -203px; margin-left: -40px">
            <span class="font-link">องค์การบริหารส่วนตำบลซับพุทรา เลขที่ 111 หมู่ 3 ถนนโคกยาว-บัววัฒนา ตำบลซับพุทรา อำเภอชนแดน จังหวัดเพชรบูรณ์ 67150<br>
                โทรศัพท์ 056-713-895 </span>
        </div>
        <div class="sun-cartoon-animation2 text-center">
            <img class="wel-light-nav" src="docs/sun-cartoon-animation.png" width="144" >
        </div>
        <img class="cloud-cartoon-animation cloud-cartoon-animation-1" src="docs/animation-cloud-cartoon1.png">
        <img class="cloud-cartoon-animation cloud-cartoon-animation-2" src="docs/animation-cloud-cartoon2.png">
        <img class="cloud-cartoon-animation cloud-cartoon-animation-3" src="docs/animation-cloud-cartoon1.png">
        <img class="cloud-cartoon-animation cloud-cartoon-animation-4" src="docs/animation-cloud-cartoon1.png">
        <img class="cloud-cartoon-animation cloud-cartoon-animation-5" src="docs/animation-cloud-cartoon2.png">
      
        <img class="egg-anime egg-1" src="<?php echo base_url('docs/egg.png'); ?>">
        <img class="egg-anime egg-2" src="<?php echo base_url('docs/egg.png'); ?>">
        <img class="egg-anime egg-3" src="<?php echo base_url('docs/egg.png'); ?>">
        <img class="egg-anime egg-4" src="<?php echo base_url('docs/egg.png'); ?>">
        <!-- <div class="link-footer">
            <span class="font-footer2 underline">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-c-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.146 4.992c.961 0 1.641.633 1.729 1.512h1.295v-.088c-.094-1.518-1.348-2.572-3.03-2.572-2.068 0-3.269 1.377-3.269 3.638v1.073c0 2.267 1.178 3.603 3.27 3.603 1.675 0 2.93-1.02 3.029-2.467v-.093H9.875c-.088.832-.75 1.418-1.729 1.418-1.224 0-1.927-.891-1.927-2.461v-1.06c0-1.583.715-2.503 1.927-2.503" />
                </svg> สงวนลิขสิทธิ์ 2567 โดย <a href="https://www.assystem.co.th/" target="_blank" style="font-weight: 1000;">บริษัท เอเอส ซิสเต็ม จำกัด</a> โทร <b style="font-weight: 1000;">084-393-5580</b> </span>
        </div> -->
    </div>
</div>