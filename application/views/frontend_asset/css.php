<style>
  /* โค้ดเดิมก่อนปรับให้ลองรับกับโทรศัพท์ */
  /* body {
    font-family: 'Krub';
    padding: 0px;
    margin: 0px;
    width: 100%;
    height: auto;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  main {
    margin: 0px auto 0px auto;
    padding: 0px;
    width: 1280px;
  }

  @media screen and (max-width: 1280px) {
    main {
      overflow-x: auto;
    }
  } */

  body {
    padding: 0;
    margin: 0;
    height: 1800px;
    font-family: "Noto Sans Thai Looped", sans-serif;
  }

  main {
    margin: 0 auto;
    transform-origin: top left;
    width: 1920px;
    height: 1800px;
  }

  .crop {
    margin: 0 auto;
    padding: 0;
    width: 1680px;
    height: auto;
  }

  .crop1440 {
    margin: 0 auto;
    padding: 0;
    width: 1440px;
    height: auto;
  }

  /* สำหรับโทรศัพท์ */
  @media (max-width: 279) {
    main {
      transform: scale(0.1);
    }
  }

  /* สำหรับโทรศัพท์ */
  @media (min-width: 280px) and (max-width: 319px) {
    main {
      transform: scale(0.146);
    }
  }

  /* สำหรับโทรศัพท์ */
  @media (min-width: 320px) and (max-width: 359px) {
    main {
      transform: scale(0.167);
    }
  }

  /* สำหรับโทรศัพท์ */
  @media (min-width: 360px) and (max-width: 374px) {
    main {
      transform: scale(0.19);
    }
  }

  /* สำหรับโทรศัพท์ */
  @media (min-width: 375px) and (max-width: 379px) {
    main {
      transform: scale(0.195);
    }
  }

  /* สำหรับโทรศัพท์ */
  @media (min-width: 380px) and (max-width: 411px) {
    main {
      transform: scale(0.205);
    }
  }

  /* สำหรับโทรศัพท์ */
  @media (min-width: 412px) and (max-width: 419px) {
    main {
      transform: scale(0.215);
    }
  }

  /* สำหรับโทรศัพท์ */
  @media (min-width: 420px) and (max-width: 480px) {
    main {
      transform: scale(0.225);
    }
  }

  /* สำหรับ iPad และ Tablet */
  @media (min-width: 481px) and (max-width: 539px) {
    main {
      transform: scale(0.4);
    }
  }

  /* สำหรับ iPad และ Tablet */
  @media (min-width: 540px) and (max-width: 546px) {
    main {
      transform: scale(0.282);
    }
  }

  @media (min-width: 547px) and (max-width: 640px) {
    main {
      transform: scale(0.29);
    }
  }

  @media (min-width: 641px) and (max-width: 711px) {
    main {
      transform: scale(0.33);
    }
  }

  /* สำหรับ iPad และ Tablet */
  @media (min-width: 712px) and (max-width: 767px) {
    main {
      transform: scale(0.371);
    }
  }

  /* สำหรับจอ 7.9 นิ้ว */
  @media (min-width: 768px) and (max-width: 818px) {
    main {
      transform: scale(0.4);
    }
  }

  /* สำหรับจอ 9.7 นิ้ว */
  @media (min-width: 819px) and (max-width: 911px) {
    main {
      transform: scale(0.425);
    }
  }

  @media (min-width: 912px) and (max-width: 1023px) {
    main {
      transform: scale(0.475);
    }
  }

  /* สำหรับจอ 10 นิ้ว */
  @media (min-width: 1024px) and (max-width: 1076px) {
    main {
      transform: scale(0.53);
    }
  }

  @media (min-width: 1077px) and (max-width: 1119px) {
    main {
      transform: scale(0.558);
    }
  }

  @media (min-width: 1120px) and (max-width: 1149px) {
    main {
      transform: scale(0.58);
    }
  }

  @media (min-width: 1150px) and (max-width: 1179px) {
    main {
      transform: scale(0.60);
    }
  }

  @media (min-width: 1180px) and (max-width: 1199px) {
    main {
      transform: scale(0.62);
    }
  }

  /* สำหรับจอ 10.2 นิ้ว */
  @media (min-width: 1200px) and (max-width: 1229px) {
    main {
      transform: scale(0.625);
    }
  }

  @media (min-width: 1230px) and (max-width: 1259px) {
    main {
      transform: scale(0.64);
    }
  }

  @media (min-width: 1260px) and (max-width: 1279px) {
    main {
      transform: scale(0.66);
    }
  }

  @media (min-width: 1280px) and (max-width: 1309px) {
    main {
      transform: scale(0.67);
    }
  }

  @media (min-width: 1310px) and (max-width: 1339px) {
    main {
      transform: scale(0.69);
    }
  }

  @media (min-width: 1340px) and (max-width: 1369px) {
    main {
      transform: scale(0.70);
    }
  }

  /* สำหรับจอ 10.5 นิ้ว */
  @media (min-width: 1370px) and (max-width: 1399px) {
    main {
      transform: scale(0.71);
    }
  }

  @media (min-width: 1400px) and (max-width: 1419px) {
    main {
      transform: scale(0.73);
    }
  }

  /* สำหรับจอ 11 นิ้ว */
  @media (min-width: 1420px) and (max-width: 1459px) {
    main {
      transform: scale(0.74);
    }
  }

  @media (min-width: 1460px) and (max-width: 1499px) {
    main {
      transform: scale(0.76);
    }
  }

  /* ส่วนนี้ลงไปปรับทีละ 19 เพิ่มสเกลที่ละ 0.015 px */
  @media (min-width: 1500px) and (max-width: 1519px) {
    main {
      transform: scale(0.785);
    }
  }

  @media (min-width: 1520px) and (max-width: 1539px) {
    main {
      transform: scale(0.795);
    }
  }

  @media (min-width: 1540px) and (max-width: 1559px) {
    main {
      transform: scale(0.805);
    }
  }

  @media (min-width: 1560px) and (max-width: 1579px) {
    main {
      transform: scale(0.815);
    }
  }

  @media (min-width: 1580px) and (max-width: 1599px) {
    main {
      transform: scale(0.825);
    }
  }

  @media (min-width: 1600px) and (max-width: 1619px) {
    main {
      transform: scale(0.835);
    }
  }

  @media (min-width: 1620px) and (max-width: 1639px) {
    main {
      transform: scale(0.845);
    }
  }

  @media (min-width: 1640px) and (max-width: 1659px) {
    main {
      transform: scale(0.855);
    }
  }

  @media (min-width: 1660px) and (max-width: 1679px) {
    main {
      transform: scale(0.865);
    }
  }

  @media (min-width: 1680px) and (max-width: 1699px) {
    main {
      transform: scale(0.875);
    }
  }

  @media (min-width: 1700px) and (max-width: 1719px) {
    main {
      transform: scale(0.885);
    }
  }

  @media (min-width: 1720px) and (max-width: 1739px) {
    main {
      transform: scale(0.895);
    }
  }

  @media (min-width: 1740px) and (max-width: 1759px) {
    main {
      transform: scale(0.905);
    }
  }

  @media (min-width: 1760px) and (max-width: 1779px) {
    main {
      transform: scale(0.915);
    }
  }

  @media (min-width: 17ค0px) and (max-width: 1799px) {
    main {
      transform: scale(0.925);
    }
  }

  @media (min-width: 1800px) and (max-width: 1819px) {
    main {
      transform: scale(0.935);
    }
  }

  @media (min-width: 1820px) and (max-width: 1839px) {
    main {
      transform: scale(0.945);
    }
  }

  @media (min-width: 1840px) and (max-width: 1859px) {
    main {
      transform: scale(0.955);
    }
  }

  @media (min-width: 1860px) and (max-width: 1879px) {
    main {
      transform: scale(0.965);
    }
  }

  @media (min-width: 1880px) and (max-width: 1899px) {
    main {
      transform: scale(0.975);
    }
  }

  @media (min-width: 1900px) and (max-width: 1919px) {
    main {
      transform: scale(0.985);
    }
  }

  @media (min-width: 1920) {
    main {
      transform: scale(1);
    }
  }

  /* color-all color สีทั้งหมด ****************************************************** */
  .white {
    color: #fff;
  }

  .gray {
    color: gray;
  }

  .red {
    color: red;
  }

  .green {
    color: green;
  }

  .color-q-a {
    color: #005930;
    leading-trim: both;
    text-edge: cap;
    font-feature-settings: 'clig' off, 'liga' off;
    font-size: 20.098px;
    font-style: normal;
    font-weight: 500;
    line-height: 13.398px;
    /* 66.667% */
  }

  /* ******************************************************************************* */

  .nav-text-color-2 {
    background-image: linear-gradient(to top, #F9B502, #FADB8d, #FDCE34);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
  }

  /* background: linear-gradient(to bottom,
        #0F1A2F 0%,
        #2F3C69 25%,
        #AEB9CD 50%,
        #2F3C69 75%,
        #1A2541 100%
      ); */

  /* .navbar2 {
    background-image: url('<?php echo base_url("docs/s.navbar-stick2.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    height: 164px;
    width: 706px;
    margin-left: 23%;
  } */

  /* .full-screen-img {
    background-image: url('<?php echo base_url("docs/chang.jpg"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    height: 1080px;
    width: 1920px;
    margin-top: -10%;
  } */

  /* .welcome {
    background-image: url('<?php echo base_url("docs/s.welcome-slide-1.jpg"); ?>');
    width: 1920px;
    height: 767px;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    position: absolute;
  } */

  .welcome-container {
    position: absolute;
    width: 1920px;
    height: 767px;
    overflow: hidden;
    /* เพื่อให้การเคลื่อนไหวไม่เกินขอบเขต */
    /* border: 1px solid black; */
    /* เส้นขอบสำหรับการแสดงผล */
    z-index: 2;
  }

  .welcome {
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    position: absolute;
    animation: zoomOut 9s forwards;
  }

  @keyframes zoomOut {
    0% {
      transform: scale(1.2);
      opacity: 1;
    }

    100% {
      transform: scale(1);
      opacity: 1;
    }
  }

  .welcome-btm {
    background-image: url('<?php echo base_url("docs/welcome-btm.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: 1;
    width: 1920px;
    height: 299px;
    position: absolute;
    margin-top: 700px;
  }

  .welcome-btm2 {
    background-image: url('<?php echo base_url("docs/welcome-btm.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: 1;
    width: 1920px;
    height: 299px;
    position: absolute;
    margin-top: 700px;
    animation: moveLeftRight 3s infinite alternate;
  }

  .wel-animation-water {
    position: absolute;
    animation: moveLeftRight 5s infinite alternate;
    z-index: 1;
  }

  @keyframes moveLeftRight {
    0% {
      left: -100px;
      /* จุดเริ่มต้นที่ด้านซ้ายสุด */
    }

    100% {
      left: 0;
      /* จุดสิ้นสุดที่ด้านขวาสุด ปรับค่า 100px ตามต้องการเพื่อระยะห่าง */
    }
  }


  .welcome-btm-ontop {
    background-image: url('<?php echo base_url("docs/welcome-btm-ontop2.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: 2;
    width: 1920px;
    height: 299px;
    position: relative;
    margin-top: 700px;
  }

  .font-welcome-btm {
    color: #724118;
    text-align: center;
    font-size: 48px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    text-shadow: 0px 3px 2px rgba(114, 65, 24, 0.74);
  }

  .welcome-btm-text-run {
    background-image: url('<?php echo base_url("docs/welcome-btm-text-run.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: 2;
    width: 1609px;
    height: 61px;
    position: relative;
    margin-top: 50px;
  }

  .font-left-text-run {
    color: #FFF;
    text-align: center;
    font-size: 32px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    padding-left: 80px;
  }


  .tab-container {
    /* background-image: url('<?php echo base_url("docs/s.run-text1.png"); ?>'); */
    /* background: #fff; */
    /* background-repeat: no-repeat; */
    /* background-size: 100%; */
    height: 61px;
    width: 1340px;
    /* top: -100px; */
    position: relative;
    overflow: hidden;
    margin-left: -4px;
    z-index: 1;
    margin-top: 5px;
  }

  .text-run-update {
    position: absolute;
    bottom: 0;
    right: 0;
    display: flex;
    flex-direction: row;
    gap: 5%;
    text-align: right;
    direction: rtl;
    white-space: nowrap;
    /* ป้องกันข้อความขึ้นบรรทัดใหม่ */
    z-index: 1;
    animation: textRunUpdate 35s linear infinite;
    color: #2D2D2D;
    font-family: "Noto Looped Thai UI";
    font-size: 32px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
  }

  @keyframes textRunUpdate {
    0% {
      transform: translateX(100%);
    }

    100% {
      transform: translateX(-100%);
    }
  }

  .vision {
    background-image: url('<?php echo base_url("docs/s.bg-vision4.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    height: 1000px;
    width: 1680px;
    z-index: 1;
  }

  .carousel {
    margin-left: 55px;
    top: 43px;
  }

  .carousel-item img {
    width: 775px;
    /* กำหนดความกว้างเป็น 500px */
    height: 436px;
    /* จัดกลางรูปภาพใน Carousel */

  }

  .content-banner {
    /* margin-right: 120px; */
    padding-left: 145px;
    z-index: 1;
    position: relative;
    /* top: 20px; */
  }

  .banner-cartoon {
    margin-right: 120px;
    margin-left: 15%;
    z-index: 1;
    margin-top: 115px;
    background-image: url('<?php echo base_url("docs/banner2_ Cartoon.png"); ?>');
    width: 582px;
    height: 297px;
  }

  .font-banner-cartoon {
    color: #210B00;
    text-align: center;
    font-size: 24px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
  }

  .banner-calendar {
    /* margin-right: 120px; */
    /* margin-left: 5%; */
    z-index: 1;
    /* top: 20px; */
    margin-top: 65px;
    /* background-image: url('<?php echo base_url("docs/banner_manage.png"); ?>'); */
    width: 100%;
    height: 436px;
    background-repeat: no-repeat;
  }

  .banner-button-green {
    z-index: 1;
    margin-left: 7%;
    /* margin-top: 80px; */
    background-image: url('<?php echo base_url("docs/banner-button.png"); ?>');
    background-repeat: no-repeat;
    width: 345px;
    height: 77px;
    transition: background-image 0.6s ease;
    margin-top: 35px;
  }

  .banner-button-green:hover {
    z-index: 1;
    margin-left: 7%;
    /* margin-top: 65px; */
    background-image: url('<?php echo base_url("docs/banner-button-hover.png"); ?>');
    background-repeat: no-repeat;
    width: 345px;
    height: 77px;
    transition: background-image 0.6s ease;
  }

  .six-menu-left {
    padding-top: 25px;
    padding-left: 46px;
  }

  .six-menu-right {
    padding-top: 21px;
    text-align: center;
  }

  .font-banner-button-green {
    color: #315584;
    text-align: center;
    font-family: "Noto Looped Thai UI";
    font-size: 22px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
  }

  .button-e-service {
    background-image: url('<?php echo base_url("docs/btn-eservice.png"); ?>');
    background-repeat: no-repeat;
    width: 186px;
    height: 61px;
    position: relative;
    transition: background-image 0.6s ease;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .button-e-service:hover {
    background-image: url('<?php echo base_url("docs/btn-eservice-hover.png"); ?>');
    background-repeat: no-repeat;
    width: 186px;
    height: 61px;
    position: relative;
    transition: background-image 0.6s ease;
  }

  .font-button-e-service {
    color: #3A3939;
    text-align: center;
    font-family: "Noto Looped Thai UI";
    font-size: 20px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
  }

  .button-e-service2 {
    z-index: 4;
    /* margin-left: 7%; */
    /* margin-top: 80px; */
    background-image: url('<?php echo base_url("docs/b_service2v2.png"); ?>');
    background-repeat: no-repeat;
    width: 358px;
    height: 91px;
    position: relative;
    transition: background-image 0.3s ease;
  }

  .button-e-service2:hover {
    z-index: 4;
    /* margin-left: 7%; */
    /* margin-top: 65px; */
    background-image: url('<?php echo base_url("docs/b_service2v2_hover.png"); ?>');
    background-repeat: no-repeat;
    width: 358px;
    height: 91px;
    position: relative;
    transition: background-image 0.3s ease;
  }

  .button-e-service3 {
    z-index: 4;
    /* margin-left: 7%; */
    /* margin-top: 80px; */
    background-image: url('<?php echo base_url("docs/b_service3v2.png"); ?>');
    background-repeat: no-repeat;
    width: 358px;
    height: 91px;
    position: relative;
    transition: background-image 0.6s ease;
  }

  .button-e-service3:hover {
    z-index: 4;
    /* margin-left: 7%; */
    /* margin-top: 65px; */
    background-image: url('<?php echo base_url("docs/b_service3v2_hover.png"); ?>');
    background-repeat: no-repeat;
    width: 358px;
    height: 91px;
    position: relative;
    transition: background-image 0.6s ease;
  }

  .button-e-service4 {
    z-index: 4;
    /* margin-left: 7%; */
    /* margin-top: 80px; */
    background-image: url('<?php echo base_url("docs/b_service4v2.png"); ?>');
    background-repeat: no-repeat;
    width: 358px;
    height: 91px;
    transition: background-image 0.6s ease;
  }

  .button-e-service4:hover {
    z-index: 4;
    /* margin-left: 7%; */
    /* margin-top: 65px; */
    background-image: url('<?php echo base_url("docs/b_service4v2_hover.png"); ?>');
    background-repeat: no-repeat;
    width: 358px;
    height: 91px;
    transition: background-image 0.6s ease;
  }

  .button-e-service5 {
    z-index: 4;
    /* margin-left: 7%; */
    /* margin-top: 80px; */
    background-image: url('<?php echo base_url("docs/b_service5v2.png"); ?>');
    background-repeat: no-repeat;
    width: 358px;
    height: 91px;
    transition: background-image 0.6s ease;
  }

  .button-e-service5:hover {
    z-index: 4;
    /* margin-left: 7%; */
    /* margin-top: 65px; */
    background-image: url('<?php echo base_url("docs/b_service5v2_hover.png"); ?>');
    background-repeat: no-repeat;
    width: 358px;
    height: 91px;
    transition: background-image 0.6s ease;
  }

  .button-e-service6 {
    z-index: 4;
    /* margin-left: 7%; */
    /* margin-top: 80px; */
    background-image: url('<?php echo base_url("docs/b_service6v2.png"); ?>');
    background-repeat: no-repeat;
    width: 358px;
    height: 91px;
    transition: background-image 0.6s ease;
  }

  .button-e-service6:hover {
    z-index: 4;
    /* margin-left: 7%; */
    /* margin-top: 65px; */
    background-image: url('<?php echo base_url("docs/b_service6v2_hover.png"); ?>');
    background-repeat: no-repeat;
    width: 358px;
    height: 91px;
    transition: background-image 0.6s ease;
  }

  .button-e-service7 {
    z-index: 4;
    /* margin-left: 7%; */
    /* margin-top: 80px; */
    background-image: url('<?php echo base_url("docs/b_service7.png"); ?>');
    background-repeat: no-repeat;
    width: 358px;
    height: 91px;
    transition: background-image 0.6s ease;
  }

  .button-e-service7:hover {
    z-index: 4;
    /* margin-left: 7%; */
    /* margin-top: 65px; */
    background-image: url('<?php echo base_url("docs/b_service7_hover.png"); ?>');
    background-repeat: no-repeat;
    width: 358px;
    height: 91px;
    transition: background-image 0.6s ease;
  }


  .public-button {
    background-image: url('<?php echo base_url("docs/public-button.png"); ?>');
    width: 335px;
    height: 77px;
    transition: background-image 0.6s ease;
    display: flex;
    align-items: center;
    justify-content: center;

  }

  .active-public,
  .public-button:hover {
    background-image: url('<?php echo base_url("docs/public-button-hover.png"); ?>');
    width: 335px;
    height: 77px;
    transition: background-image 0.6s ease;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .new-button {
    background-image: url('<?php echo base_url("docs/news-button.png"); ?>');
    width: 370px;
    height: 77px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-image 0.6s ease;
  }

  .active-new,
  .new-button:hover {
    background-image: url('<?php echo base_url("docs/news-button-hover.png"); ?>');
    width: 370px;
    height: 77px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-image 0.6s ease;
  }

  .font-public-button {
    color: #693708;
    text-align: center;
    font-family: "Noto Looped Thai UI";
    font-size: 30px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
  }

  .font-new-button {
    color: #693708;
    text-align: center;
    font-family: "Noto Looped Thai UI";
    font-size: 30px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    margin-left: 10px;
  }


  .button-activity-all {
    color: #FFF;
    z-index: 1;
    /* margin-top: 80px; */
    background-image: url('<?php echo base_url("docs/b.public_see_all.png"); ?>');
    background-repeat: no-repeat;
    width: 184px;
    height: 55px;
    padding-top: 8px;
    transition: background-image 0.6s ease;
    padding-left: 3%;
  }

  .button-activity-all:hover {
    color: #082c3c;
    z-index: 1;
    /* margin-top: 65px; */
    background-image: url('<?php echo base_url("docs/b.public_see_all_Over.png"); ?>');
    background-repeat: no-repeat;
    width: 184px;
    height: 55px;
    padding-top: 8px;
    transition: background-image 0.6s ease;
  }

  .button-new-all {
    color: #fff;
    z-index: 1;
    /* margin-top: 80px; */
    background-image: url('<?php echo base_url("docs/btn-public-all.png"); ?>');
    background-repeat: no-repeat;
    width: 184px;
    height: 55px;
    padding-top: 8px;
    transition: background-image 0.6s ease;
  }

  .button-new-all:hover {
    color: #fff;
    z-index: 1;
    /* margin-top: 65px; */
    background-image: url('<?php echo base_url("docs/btn-public-all-hover.png"); ?>');
    background-repeat: no-repeat;
    width: 184px;
    height: 55px;
    padding-top: 8px;
    transition: background-image 0.6s ease;
  }

  .button-new2-all {
    color: #FFF;
    z-index: 1;
    /* margin-top: 80px; */
    background-image: url('<?php echo base_url("docs/btn-public-all.png"); ?>');
    background-repeat: no-repeat;
    width: 184px;
    height: 55px;
    padding-top: 8px;
    transition: background-image 0.6s ease;
  }

  .button-new2-all:hover {
    color: #fff;
    z-index: 1;
    /* margin-top: 65px; */
    background-image: url('<?php echo base_url("docs/btn-public-all-hover.png"); ?>');
    background-repeat: no-repeat;
    width: 184px;
    height: 55px;
    padding-top: 8px;
    transition: background-image 0.6s ease;
  }

  .frame-main {
    position: absolute;
    z-index: 2;
  }

  .bg-activity {
    background-image: url('<?php echo base_url("docs/bg-activity.png"); ?>');
    background-repeat: no-repeat;
    background-size: cover;
    height: 1000px;
    width: 1920px;
    margin: auto;
  }

  .head-activity {
    background-image: url('<?php echo base_url("docs/head-activity.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    height: 111px;
    width: 519px;
    z-index: 3;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-top: 30px;
  }

  .head-travel {
    background-image: url('<?php echo base_url("docs/head-travel.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    height: 164px;
    width: 387px;
    z-index: 3;
    display: flex;
    justify-content: center;
    padding-top: 28px;
  }

  .head-eservice {
    background-image: url('<?php echo base_url("docs/head-eservice.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    height: 164px;
    width: 387px;
    z-index: 1;
    display: flex;
    justify-content: center;
    padding-top: 28px;
  }

  .card-activity {
    border-radius: 24px;
    background-color: #FDF5E1;
    height: 316px;
    width: 248px;
    border: 1px solid #EABA48;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
  }

  .card-activity:hover {
    border-radius: 24px;
    background-color: #ffff;
    height: 316px;
    width: 248px;
    border: 1px solid #EABA48;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
  }


  .card-activity {
    border-radius: 24px;
    background-color: #FDF5E1;
    height: 316px;
    width: 248px;
    border: 1px solid #EABA48;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
  }

  .card-activity img {
    /* width: 245px;
    height: 182px;
    border-radius: 24px 24px 0 0; */
    margin-left: -11px;
  }

  .text-activity {
    color: #523003;

    font-size: 18.263px;
    font-style: normal;
    font-weight: 300;
    line-height: 26.07px;
    /* 142.75% */
    padding-top: 5px;
    /* 3 บรรทัด */
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
  }

  .box-activity {
    height: 76px;
  }

  .dropdown-container {
    position: relative;
    display: inline-block;
    width: 1280px;
    margin-left: -18px;
    margin-top: -5px;
  }

  .dropdown-content {
    background-image: url('<?php echo base_url("docs/s.bg-nav-content-3.jpg"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    display: none;
    position: absolute;
    width: 1920px;
    height: 584px;
    z-index: 2;
    margin-top: 60px;
    /* margin-left: 3px; */
  }

  .dropdown-content ul {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    /* แบ่งออกเป็น 3 columns ที่มีขนาดเท่ากัน */

  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .no-bullets {
    list-style: none;
    padding: 0;
    margin: 0;
  }


  .content-activity {
    margin-left: 11.5%;
    margin-top: 11%;
    margin-right: 3%;

  }

  /* 
  .card-activity {
    border-radius: 25px;
  } */

  .mar-left-17 {
    margin-left: 17%;
  }

  .mar-left-12 {
    margin-left: 12%;
  }

  .mar-left-10 {
    margin-left: 10%;
  }

  .mar-left-9 {
    margin-left: 9%;
  }

  .mar-left-8 {
    margin-left: 8%;
  }

  .mar-left-7 {
    margin-left: 7%;
  }

  .mar-left-6 {
    margin-left: 6%;
  }

  .mar-left-5 {
    margin-left: 5%;
  }

  .mar-left-4 {
    margin-left: 4%;
  }

  .mar-left-3 {
    margin-left: 3%;
  }

  .mar-top-19 {
    margin-top: 19%;
  }

  .mar-top-17 {
    margin-top: 17%;
  }

  .mar-top-130 {
    margin-top: 130px;
  }

  .underline {
    text-decoration: none;
  }

  .underline a {
    text-decoration: none;
  }

  .font-text-run {
    color: #fff;
    font-family: "Noto Looped Thai UI";
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
  }

  .bg-news2 {
    background-image: url('<?php echo base_url("docs/bg-new.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    background-position: center center;
    height: 1000px;
    width: 1680px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .font-header-activity {
    color: #2C013B;
    text-align: center;
    /* font-family: "Noto Looped Thai UI"; */
    font-size: 36px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    /* text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.8); */
    -webkit-text-stroke: 1px #fff;


  }

  .font-header-home {
    color: #2C013B;
    text-align: center;
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: #FFF;
    font-family: "Noto Looped Thai UI";
    font-size: 36px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
  }

  .font-header-travel {
    color: #2C013B;
    text-align: center;
    -webkit-text-stroke-width: 2;
    -webkit-text-stroke-color: #FFF;
    font-family: "Noto Looped Thai UI";
    font-size: 36px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
  }

  .font-all-home {
    font-family: "Noto Looped Thai UI";
    font-size: 26px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
  }

  .content-news-bg {
    height: 730px;
    width: 1166px;
    border-radius: 23.878px;
    background: rgba(255, 255, 255, 0.40);
    box-shadow: 0px 0px 7.023px 0px rgba(63, 62, 47, 0.25);
    padding: 1% 4%;
    margin-left: 59px;
    margin-top: 20px;
  }

  .content-news-bg-two {
    height: 730px;
    width: 1166px;
    border-radius: 23.878px;
    background: rgba(255, 255, 255, 0.40);
    box-shadow: 0px 0px 7.023px 0px rgba(63, 62, 47, 0.25);
    padding: 1% 4%;
    margin-left: 59px;
    margin-top: 20px;
  }

  .tab-container2 {
    display: flex;
    margin-left: 20px;
    z-index: 5 !important;
    position: relative;
  }

  .tab-container2 .tab-link-two {
    margin: 0 35px;
    /* ปรับขนาดนี้เพื่อเพิ่มหรือลดช่องว่าง */
  }

  .tab-container2 .tab-link {
    margin: 0 20px;
    /* ปรับขนาดนี้เพื่อเพิ่มหรือลดช่องว่าง */
  }

  .tab-link {
    cursor: pointer;
    padding: 15px 0px;
    /* border: 1px solid #ccc; */
    margin-left: -30px;
  }

  .tab-link-two {
    cursor: pointer;
    padding: 15px 0px;
    /* border: 1px solid #ccc; */
    margin-left: -30px;
  }

  .tab-content {
    display: none;
    padding: 20px;
    margin-top: -10px;
    /* border: 1px solid #ccc; */
    /* width: 1505px; */
    /* margin-left: 1%; */
  }

  .tab-content-two {
    display: none;
    padding: 20px;
    margin-top: -10px;
    /* border: 1px solid #ccc; */
    /* width: 1505px; */
    /* margin-left: 1%; */
  }

  .content-news-detail {
    width: 1540px;
    height: 54px;
    padding: 20px 45px;
    border-radius: 34px;
    border: 0.5px solid #ECB23F;
    background: rgba(255, 242, 190, 0.50);
    margin-top: 15px;
    z-index: 2;
    position: relative;
  }

  .content-news-detail:hover {
    width: 1540px;
    height: 54px;
    padding: 20px 45px;
    border-radius: 34px;
    border: 0.5px solid #ECB23F;
    background: rgba(255, 255, 230, 0.50);
    backdrop-filter: blur(3px);
    margin-top: 15px;
  }

  .content-news2-detail {
    width: 1540px;
    height: 54px;
    padding: 20px 45px;
    border-radius: 34px;
    border: 0.702px solid var(--02, #ECB23F);
    background: rgba(255, 242, 190, 0.50);
    margin-top: 15px;
    z-index: 2;
    position: relative;
  }

  .content-news2-detail:hover {
    width: 1540px;
    height: 54px;
    padding: 20px 45px;
    border-radius: 34px;
    border: 0.5px solid #ECB23F;
    background: rgba(255, 255, 230, 0.50);
    backdrop-filter: blur(3px);
    margin-top: 15px;
  }

  .text-news {
    max-height: 2em;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    color: #000;

    font-size: 22px;
    font-style: normal;
    font-weight: 400;
    line-height: 35.114px;
    margin-top: -12px;
    /* 138.889% */
  }

  .text-news-time {
    color: #000;

    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: 35.114px;
    margin-top: -12px;
    /* 138.889% */
  }

  /* .bg-otop {
    background-image: url('<?php echo base_url("docs/s.bg-otop2.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    background-position: center center;
    width: 1280px;
    height: 711px;
    margin: 0;
    padding: 0;
  } */

  .otop-content {
    padding-top: 130px;
    max-width: 1360px;
    margin-left: 220px;
  }


  .image-with-shadow-otop {
    border-radius: 0% 25% 0% 25%;
    width: 200px;
    height: 120px;
    margin-top: -40px;

  }

  /* เพิ่มคลาสสำหรับพื้นหลัง */
  .otop-background-1 {
    background-image: url('<?php echo base_url("docs/bg-otop-name-1.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 266px;
    height: 230px;
    z-index: 1;
  }

  .otop-background-2 {
    background-image: url('<?php echo base_url("docs/bg-otop-name-2.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 266px;
    height: 230px;
    z-index: 1;

  }

  .otop-background-3 {
    background-image: url('<?php echo base_url("docs/bg-otop-name-3.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 266px;
    height: 230px;
    z-index: 1;

  }

  .otop-background-4 {
    background-image: url('<?php echo base_url("docs/bg-otop-name-4.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 266px;
    height: 230px;
    z-index: 1;

  }

  .font-name-otop {
    color: #fff;
    text-align: center;
    text-shadow: 1.334px 1.334px 1.334px rgba(0, 0, 0, 0.25);
    font-size: 22px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    z-index: 5;
  }

  .otop-bg-yellow {
    background-image: url('<?php echo base_url("docs/otop_bg_icon_yellow.png"); ?>');
    width: 266px;
    height: 230px;
  }

  .zoom-otop:hover img {
    transform: scale(1.2);
    /* 1.1 คือขนาดที่คุณต้องการขยาย */
    transition: transform 0.3s ease;
    /* เพิ่มการเปลี่ยนแปลงด้วยการใช้ transition */
  }

  /* .bg-travel {
    background-image: url('<?php echo base_url("docs/bg-travel.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 1680px;
    height: 1000px;
    display: flex;
    align-items: center;
    justify-content: center;
  } */

  .travel-content {}


  .image-container {
    z-index: 1;
    position: absolute;
  }

  .bg-anime-travel {
    background-image: url('<?php echo base_url("docs/bg-anime-travel.png"); ?>');
    background-repeat: no-repeat;
    width: 163px;
  }

  .img-travel {
    position: relative;
    z-index: 2;
  }

  .img-travel-180 {
    position: absolute;
    z-index: 1;
  }

  /* New styles for rotation effect */
  @keyframes rotate {
    from {
      transform: rotate(0deg);
    }

    to {
      transform: rotate(360deg);
    }
  }

  /* Rotate the second image when hovering over the first image's parent <a> tag */
  a:hover+.img-travel-180 {
    animation: rotate 3s linear infinite;
  }

  .font-travel {
    color: #000;
    text-align: center;
    -webkit-text-stroke-width: 0.3px;
    -webkit-text-stroke-color: #FFF;
    font-family: "Noto Looped Thai UI";
    font-size: 20px;
    font-style: normal;
    font-weight: 900;
    line-height: normal;
  }

  .slick-prev,
  .slick-next {
    position: absolute;
    top: 42%;
    transform: translateY(-50%);
    z-index: 1;
    cursor: pointer;
  }

  .slick-prev {
    left: -140px;
  }

  .slick-prev:hover {
    left: -140px;
    background-image: url('<?php echo base_url("docs/s.pre-home-hover.png"); ?>');
    width: 55px;
    height: 76px;
  }

  .slick-next {
    right: -50px;
  }

  .slick-next:hover {
    right: -50px;
    background-image: url('<?php echo base_url("docs/s.next-home-hover.png"); ?>');
    width: 55px;
    height: 76px;
  }

  .slick-carousel {
    margin: 20px 0;
  }

  /* .slick-carousel img {
    margin-right: 50px;
  } */

  .text-travel {
    color: #FFE072;
    -webkit-text-stroke: 1px black;

    font-size: 36.024px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    margin-left: -20px;
  }

  .image-with-background {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .image-with-shadow-travel {
    border-radius: 50%;
    width: 239px;
    height: 239px;
  }

  /* เพิ่มคลาสสำหรับพื้นหลัง */
  .travel-background-1 {
    background-image: url('<?php echo base_url("docs/bg-travel-name-1.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 261px;
    height: 261px;
  }

  .travel-background-2 {
    background-image: url('<?php echo base_url("docs/bg-travel-name-2.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 261px;
    height: 261px;
  }

  .travel-background-3 {
    background-image: url('<?php echo base_url("docs/bg-travel-name-3.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 261px;
    height: 261px;
  }

  .travel-background-4 {
    background-image: url('<?php echo base_url("docs/bg-travel-name-4.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 261px;
    height: 261px;
  }

  .font-name-travel {
    color: #FFF;
    text-align: center;
    text-shadow: 1.334px 1.334px 1.334px rgba(0, 0, 0, 0.25);
    font-size: 24px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
  }

  /* สไตล์สำหรับพื้นหลังของชื่อสถานที่ท่องเที่ยว */
  .travel-name-1 {
    background-image: url('<?php echo base_url("docs/icon-travel-name-1.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 252px;
    height: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
    /* background-color: #f0f0f0;
    padding: 5px 10px;
    border-radius: 5px; */
  }

  .travel-name-2 {
    background-image: url('<?php echo base_url("docs/icon-travel-name-2.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 252px;
    height: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .travel-name-3 {
    background-image: url('<?php echo base_url("docs/icon-travel-name-3.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 252px;
    height: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .travel-name-4 {
    background-image: url('<?php echo base_url("docs/icon-travel-name-4.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 252px;
    height: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .up-down {
    width: auto;
    /* max-width: 100%; */
    position: relative;
    animation-name: up-down;
    animation-duration: 4s;
    animation-iteration-count: infinite;
    /* ทำให้ animation เล่นตลอดไป */
    padding-top: 13%;
  }

  .bg-page-bottom {
    background-image: url('<?php echo base_url("docs/s.bg-page-btm2.jpg"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 1280px;
    height: 2450px;
    z-index: 1;
  }

  .font-e-service-32 {
    color: #693708;
    text-align: center;
    text-shadow: 0px 2.668px 6.671px rgba(0, 0, 0, 0.25);

    font-size: 32px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
  }

  .font-e-service-25 {
    color: #693708;
    text-align: center;
    text-shadow: 0px 2.668px 2.668px rgba(0, 0, 0, 0.25);

    font-size: 25.35px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
  }

  .bg-eservice {
    background-image: url('<?php echo base_url("docs/bg-eservice2.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    background-position: center center;
    height: 552px;
    width: 820px;
    margin-bottom: 20%;
  }

  .card-view {
    color: #000;
    font-family: Inter;
    font-size: 12px;
    font-style: normal;
    font-weight: 300;
    line-height: 23.393px;
    /* 194.942% */
  }

  .bg-q-a {
    width: 708px;
    height: 576px;
    flex-shrink: 0;
    border-radius: 20.394px;
    background: #FFFBF1;
    box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.25);
    margin-top: 35px;
  }

  .font-q-a-home-head {
    background: linear-gradient(0deg, #00DD94 -15.14%, #009FE2 89.55%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-align: center;
    font-family: "Noto Looped Thai UI";
    font-size: 28px;
    font-style: normal;
    font-weight: 500;
    line-height: 46.41px;
  }

  .head-q-a {
    padding: 10px;
    padding-top: 15px;
  }

  .font-q-a-home-form {
    color: #023535;
    font-feature-settings: 'clig' off, 'liga' off;
    font-family: "Noto Looped Thai";
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: 0px;
  }

  .font-q-a-home-by {
    color: #000;
    text-align: right;
    font-feature-settings: 'clig' off, 'liga' off;
    font-family: "Noto Looped Thai";
    font-size: 18px;
    font-style: normal;
    font-weight: 300;
    line-height: 0px;
    /* 0% */
  }

  .content-q-a {
    padding: 15px;
    margin-top: -25px;
  }

  .input-home-q-a {
    border-radius: 14px;
    border: 1px solid #693708;
    color: var(--, #6D758F);
    leading-trim: both;
    text-edge: cap;
    font-feature-settings: 'clig' off, 'liga' off;

    font-size: 14px;
    font-style: normal;
    font-weight: 300;
    line-height: 7.975px;
    /* 78.491% */
  }

  .green-border {
    border: 1px solid green;
    border-radius: 4px;
    padding: 5px;
  }

  /* swipper link icon ************************************************** */
  .swiper {
    /* background-image: url('<?php echo base_url("docs/s.bg-link.png"); ?>'); */
    /* background-size: 100%; */
    background-position: center;
    /* background-repeat: no-repeat; */
    width: 1680px;
    height: auto;
    padding-top: 40px;
    padding-bottom: 280px;
    padding-left: 90px;
    padding-right: 0;
    /* margin-top: -200px; */
    z-index: 5;
  }

  .custom-button-prev {
    position: absolute;
    left: -1px;
    top: 20%;
    transform: translateY(-50%);
    cursor: pointer;
    z-index: 5;
  }

  .custom-button-next {
    position: absolute;
    right: -1px;
    top: 20%;
    transform: translateY(-50%);
    cursor: pointer;
    z-index: 100;
  }

  .custom-button-prev:hover img {
    content: url('docs/pre-home-hover.png');
    /* เปลี่ยนเป็นรูปภาพใหม่เมื่อ hover */
  }

  .custom-button-next:hover img {
    content: url('docs/next-home-hover.png');
    /* เปลี่ยนเป็นรูปภาพใหม่เมื่อ hover */
  }

  /* เปลี่ยนสีของ "swiper-pagination" เมื่อเป็นสถานะ "active" เป็นสีเหลือง */
  /* .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: yellow;
  } */
  /* 
  .swiper-button-prev,
  .swiper-button-next {
    color: #FADB8D;
  } */

  /* ********************************************************************************** */
  /* เส้นสี เส้นยาว border-line ******************************************************** */
  .border-yellow {
    border: 4px solid yellow;
    border-radius: 15px;
    padding: 5px;
  }

  .border-gray {
    border: 1px solid #D3D3D3;
    border-radius: 15px;
    margin-top: 10px;
    margin-bottom: 10px;
  }

  .border-flcp {
    width: 669.399px;
    height: 0.67px;
    background: rgba(0, 0, 0, 0.25);
    margin-top: 10px;
    margin-bottom: 10px;
    margin-left: -45px;
  }

  .border-gray-332 {
    margin-top: 25px;
    margin-bottom: 25px;
    width: 100%;
    height: 0.672px;
    background: #693708;
  }

  .border-q-a {
    width: 100%;
    height: 0.67px;
    background: #000;
  }

  /* ********************************************************************************** */


  .footer {
    background-image: url('<?php echo base_url("docs/bg-footer.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    min-height: 75px;
    width: 1920px;
    position: absolute;
    z-index: 1;
    padding-top: 25px;
    padding-left: 350px;
  }

  .credit {
    /* ให้ข้อความที่อยู่ข้างใน div นี้ไปอยู่ชิดล่างกลาง */
    position: absolute;
    bottom: 0;
    left: 35%;
    transform: translateX(-25%);
    text-align: center;
    font-size: 24px;
    width: 1000px;
  }

  .font-footer {
    color: #fff;
    text-align: center;

    font-size: 20px;
    font-style: normal;
    line-height: 33.366px;
    /* 178.571% */
  }


  .map-home {
    border: 6px solid white;
    border-radius: 15px;
  }

  .map-contact {
    border-radius: 22.86px;
    background: rgba(255, 255, 255, 0.50);
    box-shadow: 0px 0px 6.724px 0px rgba(0, 0, 0, 0.25);
    width: 917.108px;
    height: 638.748px;
    padding: 21.516px;
    gap: 6.724px;
    flex-shrink: 0;
  }

  .bg-pages-all-web {
    background-image: url('<?php echo base_url("docs/s.bg-other.jpg"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 1920px;
    height: 2000px;
    position: relative;
    margin-top: 230px;
  }

  .bg-pages {
    /* background-image: url('<?php echo base_url("docs/s.bg-other.jpg"); ?>');
    background-repeat: no-repeat;
    background-size: 100%; */
    background-color: #fff;
    width: 1920px;
    height: auto;
    position: relative;
    margin-top: -150px;
  }

  .bg-pages-in {
    background-color: white;
    margin-top: 40px;
    margin-bottom: 5%;
    border-radius: 22.86px;
    /* background: rgba(253, 245, 225, 0.80); */
    /* box-shadow: 0px 0px 6.724px 0px rgba(0, 0, 0, 0.25); */
    height: auto;
    width: 1920px;
  }

  .bg-pages-news {
    background-image: url('<?php echo base_url("docs/s.bg-other.jpg"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 1280px;
    height: 1750px;
    position: relative;
    margin-top: 230px;
  }

  .bg-pages-e-service {
    background-image: url('<?php echo base_url("docs/s.bg-other.jpg"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 1280px;
    height: 1800px;
    position: relative;
    margin-top: 230px;
  }




  .bg-pages-in-e-service {
    height: 1362px;
    width: 1069px;
    padding-top: 15px;
    padding-left: 80px;
  }

  .bg-pages-in-activity {
    background-color: white;
    margin-top: 40px;
    margin-bottom: 5%;
    padding-left: 4%;
    padding-right: 2%;
    border-radius: 22.86px;
    background: rgba(253, 245, 225, 0.80);
    box-shadow: 0px 0px 6.724px 0px rgba(0, 0, 0, 0.25);
    height: 1362px;
    width: 1123px;
    padding-top: 45px;
  }

  .bg-pages-in-gi {
    background-color: white;
    margin-top: 40px;
    margin-bottom: 5%;
    padding-left: 5%;
    padding-right: 5%;
    border-radius: 22.86px;
    background: rgba(253, 245, 225, 0.80);
    box-shadow: 0px 0px 6.724px 0px rgba(0, 0, 0, 0.25);
    height: 1362px;
    width: 1069px;
    padding-top: 50px;
  }

  .bg-pages-web {
    background-image: url('<?php echo base_url("docs/bg-page2.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    background-position: center center;
    width: 1920px;
    height: 3373;
    /* เพิ่มบรรทัดนี้ */
    margin-top: 5%;
  }

  .bg-pages-in-web {
    background-color: white;
    margin-top: 40px;
    margin-bottom: 5%;
    padding-left: 5%;
    padding-right: 2%;
    border-radius: 22.86px;
    background: rgba(253, 245, 225, 0.80);
    box-shadow: 0px 0px 6.724px 0px rgba(0, 0, 0, 0.25);
    height: 1470px;
    width: 1069px;
    padding-top: 25px;
  }

  .bg-pages-in-e-service-add {
    background-color: white;
    margin-top: 40px;
    margin-bottom: 5%;
    border-radius: 22.86px;
    background: rgba(253, 245, 225, 0.80);
    box-shadow: 0px 0px 6.724px 0px rgba(0, 0, 0, 0.25);
    height: 1500px;
    width: 1069px;
    padding-top: 10px;
    padding-left: 80px;
  }

  .bg-pages-in-e-service-q-a-top {
    height: auto;
    width: 1069px;
    padding-top: 15px;
    padding-left: 80px;
  }

  .bg-pages-in-e-service-flcp {
    height: 1362px;
    width: 1069px;
    padding-top: 15px;
    padding-left: 190px;
  }

  .bg-pages-ita {
    background-color: white;
    margin-top: 40px;
    margin-bottom: 5%;
    border-radius: 22.86px;
    box-shadow: 0px 0px 6.724px 0px rgba(0, 0, 0, 0.25);
    height: 1362px;
    width: 1069px;
  }

  .path1-1 {
    background-image: url('<?php echo base_url("docs/s.path1-1.png"); ?>');
    background-size: 100%;
    background-repeat: no-repeat;
    width: 147px;
    height: 40px;
    z-index: 3;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .path2-1 {
    background-image: url('<?php echo base_url("docs/s.path2-1.png"); ?>');
    background-size: 100%;
    background-repeat: no-repeat;
    width: 176px;
    height: 40px;
    z-index: 2;
    margin-left: -27px;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .path1-2 {
    background-image: url('<?php echo base_url("docs/s.path1-2.png"); ?>');
    background-size: 100%;
    background-repeat: no-repeat;
    width: 154px;
    height: 40px;
    z-index: 3;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .path2-2 {
    background-image: url('<?php echo base_url("docs/s.path2-2.png"); ?>');
    background-size: 100%;
    background-repeat: no-repeat;
    width: 194px;
    height: 40px;
    z-index: 2;
    margin-left: -27px;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .path1-3 {
    background-image: url('<?php echo base_url("docs/s.path1-3.png"); ?>');
    background-size: 100%;
    background-repeat: no-repeat;
    width: 164px;
    height: 40px;
    z-index: 3;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .path2-3 {
    background-image: url('<?php echo base_url("docs/s.path2-3.png"); ?>');
    background-size: 100%;
    background-repeat: no-repeat;
    width: 214px;
    height: 40px;
    z-index: 2;
    margin-left: -27px;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .path2-4 {
    background-image: url('<?php echo base_url("docs/s.path2-4.png"); ?>');
    background-size: 100%;
    background-repeat: no-repeat;
    width: 230px;
    height: 40px;
    z-index: 2;
    margin-left: -27px;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .font-path-1 {
    color: #FFF;
    text-align: center;
    text-shadow: 0.534px 0.534px 0.534px rgba(0, 0, 0, 0.25);

    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    margin-left: -15px;
  }

  .font-path-2 {
    color: #693708;
    text-align: center;
    text-shadow: 0.534px 0.534px 0.534px rgba(0, 0, 0, 0.25);

    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    margin-left: -10px;
  }

  .page-center {
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    /* เพิ่ม flex-direction เป็น column */
  }

  .page-center-gi {
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    /* เพิ่ม flex-direction เป็น column */
  }

  .head-pages {
    background-image: url('<?php echo base_url("docs/s.head-pages1.png"); ?>');
    background-size: 100%;
    width: 403px;
    height: 85px;
    margin-top: 35px;
    margin-bottom: 50px;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .head-pages-two {
    background-image: url('<?php echo base_url("docs/s.head-pages2.png"); ?>');
    background-size: 100%;
    width: 555px;
    height: 85px;
    margin-top: 35px;
    margin-bottom: 50px;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .head-pages-three {
    background-image: url('<?php echo base_url("docs/s.head-pages3.png"); ?>');
    background-size: 100%;
    width: 699px;
    height: 85px;
    margin-top: 35px;
    margin-bottom: 50px;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  /* .head-pages {
    background-image: url('<?php echo base_url("docs/s.head-pages.png"); ?>');
    background-size: 100%;
    width: 402px;
    height: 63px;
    margin-top: 35px;
    margin-bottom: 50px;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
  } */

  .font-pages-head-long {
    color: #FFF;
    leading-trim: both;
    text-edge: cap;
    text-shadow: 0px 2.115px 2.115px rgba(0, 0, 0, 0.25);
    font-size: 26px;
    font-style: normal;
    font-weight: 600;
    line-height: 26.443px;
    /* 88.143% */
  }

  .font-pages-content-head {
    color: #000;
    leading-trim: both;
    text-edge: cap;
    font-size: 32px;
    font-style: normal;
    font-weight: 600;
    line-height: 40px;
    position: relative;
    z-index: 10;
  }

  .font-pages-content-detail {
    color: #000;
    leading-trim: both;
    text-edge: cap;
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: 33.421px;
  }

  .font-laws-head {
    color: #000;
    font-size: 22px;
    font-style: normal;
    font-weight: 500;
    line-height: 33.624px;
    /* 152.838% */
  }

  .font-laws-content {
    color: #000;
    font-size: 20px;
    font-style: normal;
    font-weight: 300;
    line-height: 33.624px;
  }

  .search {
    margin-top: 10%;
    margin-right: 5%;
  }

  .page-content-otop {
    margin: 5%;
    /* background: gray; */
  }

  .span-head {
    font-size: 20px;
    font-weight: 500;
  }

  /* fontsize-all font-all fontsize ขนาดตัวหนังสือ ******************************************************* */
  .red-font {
    color: #F00;
    font-feature-settings: 'clig' off, 'liga' off;
    font-size: 22px;
    font-style: normal;
    font-weight: 400;
    line-height: 14.238px;
  }

  .font-e-service-head {
    color: #000;
    text-align: center;
    leading-trim: both;
    text-edge: cap;
    font-feature-settings: 'clig' off, 'liga' off;
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: 34px;
  }

  .font-e-service-danger {
    color: #F33;
    leading-trim: both;
    text-edge: cap;
    font-feature-settings: 'clig' off, 'liga' off;
    font-size: 19px;
    font-style: normal;
    font-weight: 400;
    line-height: 24px;
    /* 120% */
  }

  .font-e-service-top {
    color: #000;
    text-align: center;
    leading-trim: both;
    text-edge: cap;
    font-feature-settings: 'clig' off, 'liga' off;
    font-size: 20px;
    font-style: normal;
    font-weight: 300;
    line-height: 34px;
    /* 170% */
  }

  .font-e-service-content {
    color: #000;
    leading-trim: both;
    text-edge: cap;
    font-size: 22px;
    font-style: normal;
    font-weight: 400;
    line-height: 25px;
    /* 113.636% */
  }

  .font-e-service-how {
    color: #FFF;
    leading-trim: both;
    text-edge: cap;
    font-feature-settings: 'clig' off, 'liga' off;

    font-size: 24px;
    font-style: normal;
    font-weight: 600;
    line-height: 26.796px;
    /* 111.648% */
  }

  .font-head-topic {
    color: #693708;
    leading-trim: both;
    text-edge: cap;

    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: 25px;
    /* 104.167% */
    padding-left: 20px;

  }

  .font-ita-head {
    color: #000;
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    /* padding-left: 30px; */
  }

  .font-ita-content {
    color: #000;

    font-size: 22px;
    font-style: normal;
    font-weight: 300;
    line-height: normal;
    padding-left: 50px;
  }

  .font-q-a-list {
    color: #000;
    leading-trim: both;
    text-edge: cap;
    font-feature-settings: 'clig' off, 'liga' off;

    font-size: 21.438px;
    font-style: normal;
    font-weight: 500;
    /* 68.75% */
    padding-top: -30px;
  }

  .font-q-a-chat-color {
    color: #005930;
    leading-trim: both;
    text-edge: cap;
    font-feature-settings: 'clig' off, 'liga' off;

    font-size: 20.098px;
    font-style: normal;
    font-weight: 500;
    line-height: 13.398px;
    /* 66.667% */
  }

  .font-q-a-chat-black {
    color: #000;
    leading-trim: both;
    text-edge: cap;
    font-feature-settings: 'clig' off, 'liga' off;

    font-size: 21.438px;
    font-style: normal;
    font-weight: 300;
    line-height: 24.787px;
    /* 115.625% */
  }

  .font-contact-1 {
    color: #000;
    font-feature-settings: 'clig' off, 'liga' off;

    font-size: 26.895px;
    font-style: normal;
    font-weight: 300;
    line-height: 13.447px;
    /* 50% */
  }

  .font-contact-2 {
    color: #000;
    text-align: center;
    font-feature-settings: 'clig' off, 'liga' off;

    font-size: 24.205px;
    font-style: normal;
    font-weight: 300;
    line-height: 13.447px;
    /* 55.556% */
  }

  .font-contact-map {
    color: #000;
    leading-trim: both;
    text-edge: cap;

    font-size: 26.895px;
    font-style: normal;
    font-weight: 600;
    line-height: 26.541px;
    /* 98.684% */
  }

  .font-pages-heads-img {
    color: #523003;

    font-size: 16px;
    font-style: normal;
    font-weight: 500;
    line-height: 24.863px;
    /* 155.394% */
  }

  .font-pages-details-img {
    color: #6C757D;

    font-size: 15.5px;
    font-style: normal;
    font-weight: 300;
    line-height: 17.076px;
  }

  .font-page-detail-head {
    color: #000;
    leading-trim: both;
    text-edge: cap;
    font-feature-settings: 'clig' off, 'liga' off;
    font-size: 32px;
    font-style: normal;
    font-weight: 600;
    line-height: 40px;
    /* 111.648% */
  }

  .font-page-detail-time-img {
    color: #693708;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: 187.5%;
    /* 37.5px */
  }

  .font-page-detail-content-img {
    color: #000;
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: 33.618px;
    /* 152.811% */
  }

  .font-page-detail-view-img {
    color: #693708;

    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 33.495px;
    /* 167.473% */
  }

  .font-page-detail-view-news {
    color: #693708;
    text-align: right;
    leading-trim: both;
    text-edge: cap;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: 33.421px;
    /* 166.667% */
  }

  .font-pages-content {
    color: #000;

    font-size: 24px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    margin-left: -15px;
  }

  .font-otop-head {
    color: #000;
    font-size: 32px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
  }

  .font-otop-content {
    color: #000000;
    text-align: left;
    text-shadow: 1.334px 1.334px 1.334px rgba(0, 0, 0, 0.25);
    font-family: "Noto Looped Thai UI";
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
  }

  .font-p-name {
    color: #693708;
    text-align: center;
    leading-trim: both;
    text-edge: cap;
    font-feature-settings: 'clig' off, 'liga' off;
    font-size: 26.796px;
    font-style: normal;
    font-weight: 600;
    line-height: 31.756px;
    /* 118.512% */
  }

  .font-p-detail {
    color: #000;
    leading-trim: both;
    text-edge: cap;
    font-feature-settings: 'clig' off, 'liga' off;

    font-size: 24.116px;
    font-style: normal;
    font-weight: 500;
    line-height: 37.049px;
    /* 153.627% */
  }

  .font-head-all-web {
    color: #FFC23B;
    text-align: center;

    font-size: 22px;
    font-style: normal;
    font-weight: 500;
    line-height: 8px;
    /* 36.364% */
  }

  .font-content-all-web {
    color: #000;
    text-align: center;

    font-size: 20px;
    font-style: normal;
    font-weight: 300;
    line-height: 8px;
    /* 40% */
  }

  .font-e-service-complain {
    color: #000;
    font-feature-settings: 'clig' off, 'liga' off;

    font-size: 21.442px;
    font-style: normal;
    font-weight: 500;
    line-height: 14.238px;
    /* 66.4% */
  }

  .font-e-service-elderly_aw {
    color: #000;
    font-feature-settings: 'clig' off, 'liga' off;
    font-size: 32px;
    font-style: normal;
    font-weight: 500;
  }

  .font-label-e-service-complain {
    color: var(--text, var(--, #6D758F));
    leading-trim: both;
    text-edge: cap;
    font-feature-settings: 'clig' off, 'liga' off;

    font-size: 18.762px;
    font-style: normal;
    font-weight: 300;
    margin-top: -5px;
    /* line-height: 14.238px; */
    /* 75.886% */
  }

  .font-label-elderly_aw {
    border-radius: 8px;
    border: 3px solid var(--thai, #F7EBB7);
    background: #FFF;
    leading-trim: both;
    text-edge: cap;
    font-feature-settings: 'clig' off, 'liga' off;
    font-size: 18.762px;
    font-style: normal;
    font-weight: 300;
    /* 75.886% */
  }

  .font-thx-curruption {
    padding-top: 25px;
    color: #000;
    leading-trim: both;
    text-edge: cap;
    font-feature-settings: 'clig' off, 'liga' off;

    font-size: 17px;
    font-style: normal;
    font-weight: 500;
    line-height: 13.401px;
  }

  .font-flcp-sd {
    color: var(--, #6D758F);

    font-size: 21.442px;
    font-style: normal;
    font-weight: 300;
    line-height: normal;
  }

  .font-color-flcp {

    font-size: 21.442px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
  }

  .font-time-flcp {
    color: #000;

    font-size: 21.442px;
    font-style: normal;
    font-weight: 300;
    line-height: normal;
  }

  .font-12 {
    color: #693708;
    text-align: center;
    leading-trim: both;
    text-edge: cap;
    font-feature-settings: 'clig' off, 'liga' off;
    font-family: Inter;
    font-size: 12.643px;
    font-style: normal;
    font-weight: 500;
    line-height: 12.265px;
    /* 97.004% */
  }

  .font-18 {
    font-size: 18;
  }

  .font-20 {
    font-size: 20px;
  }

  .font-24 {
    font-size: 24px;
  }

  .font-24b {
    font-size: 24px;
    font-weight: bold;
  }

  .font-24 {
    font-size: 24px;
  }

  .font-26 {
    font-size: 20px;
  }

  .font-26b {
    font-size: 26px;
    font-weight: bold;
  }

  .font-28 {
    font-size: 28px;
  }

  .font-28b {
    font-size: 28px;
    font-weight: bold;
  }

  .font-30 {
    font-size: 30px;
  }

  .font-30b {
    font-size: 30px;
    font-weight: bold;
  }

  .font-32 {
    font-size: 32px;
  }

  .font-32b {
    font-size: 32px;
    font-weight: bold;
  }

  .font-34b {
    font-size: 34px;
    font-weight: bold;
  }

  .font-36 {
    font-size: 36px;
  }

  .font-36b {
    font-size: 36px;
  }

  /* **************************************************************************** */
  hr {
    border-top: 2px solid gray;
    /* เปลี่ยนสีเส้นเหนียวตามที่คุณต้องการ */
  }

  .span-time-pages-img {
    color: #693708;

    font-size: 13px;
    font-style: normal;
    font-weight: 400;
    line-height: 21.267px;
    /* 163.592% */
    margin-top: -40px;
  }

  .span-time-pages-img-detail {
    color: #693708;
    text-align: center;
    leading-trim: both;
    text-edge: cap;
    font-feature-settings: 'clig' off, 'liga' off;

    font-size: 15px;
    font-style: normal;
    font-weight: 500;
    line-height: 11.697px;
    /* 77.979% */
    margin-top: -40px;

  }

  .span-time-pages-news {
    color: #693708;

    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    margin-top: 5px;
    margin-left: 15px;
  }

  .span-time2 {
    margin-left: 8px;
    font-size: 14px;
    color: gray;
  }

  .span-time-q-a {
    color: #693708;

    font-size: 16.078px;
    font-style: normal;
    font-weight: 400;
    line-height: 187.5%;
    /* 30.146px */
  }

  .span-time-home {
    color: #693708;
    font-family: Inter;
    font-size: 12px;
    font-style: normal;
    font-weight: 500;
    line-height: 22.299px;
    /* 222.222% */
  }

  /* ลิมิตการแสดงผล limit-font *************************************************** */
  .three-line-ellipsis {
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    /* จำนวนบรรทัดที่ต้องการให้แสดง */
    -webkit-box-orient: vertical;
    white-space: normal;
    line-height: 1.3;
    max-height: 2.55em;
  }

  .two-line-ellipsis {
    /* margin-bottom: 10px; */
    max-height: 2.55em;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    line-height: 1.3;
  }

  .one-line-ellipsis {
    /* margin-bottom: 10px; */
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
  }

  .activity-item {
    display: flex;
    align-items: center;
  }

  .two-line-ellipsis-activity {
    flex: 1;
    max-height: 2.55em;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    line-height: 1.3;
  }

  .activity-new-img {
    margin-top: 20px;
    margin-left: 10px;
  }

  /* **************************************************************************** */

  .col-8 {
    word-wrap: break-word;
  }

  .break-word {
    word-wrap: break-word;
  }

  .page-border-otop {
    border-radius: 16.077px;
    border: 0.335px solid var(--line, #EABA48);
    background: #FDF5E1;
    box-shadow: 0px 0px 6.699px 0px rgba(0, 0, 0, 0.25);
    padding-left: 50px;
    padding-top: 30px;
    padding-bottom: 30px;
  }

  /* ปุ่ม next page pagination ******************************************** */

  .pagination {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .pagination li {
    margin: 0 5px;
    font-size: 21px;
    font-weight: bold;
  }

  .pagination .page-item.active .page-link {
    background-color: #50B1E5;
    /* สีเขียว */
    border-color: #50B1E5;
    color: #fff;
  }

  .pagination-item {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 45px;
    height: 45px;
    overflow: hidden;
    /* border-radius: 50%; */
    /* background-image: url('<?php echo base_url("docs/s.pages-next-pre.png"); ?>');
    background-size: 100% 100%; */
    /* แก้เป็น 100% 100% */
    background-repeat: no-repeat;
    /* เพิ่มบรรทัดนี้ */
    background-position: center;
    padding-left: 1px;
  }

  .pagination .page-link {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #000;
    /* border-radius: 50%; */
    background-size: cover;
  }


  .pagination .page-link:hover {
    color: #F1F3F7;
    background-color: #006CA6;
  }

  /* เปลี่ยนรูปภาพเมื่อ hover */
  .pages-first:hover {
    content: url('<?php echo base_url("docs/s.pages-first-hover.png"); ?>');
  }

  .pages-pre:hover {
    content: url('<?php echo base_url("docs/s.pages-pre-hover.png"); ?>');
  }

  .pages-last:hover {
    content: url('<?php echo base_url("docs/s.pages-last-hover.png"); ?>');
  }

  .pages-next:hover {
    content: url('<?php echo base_url("docs/s.pages-next-hover.png"); ?>');
  }

  .pagination-jump-to-page {
    margin-left: -8px;
  }

  .pages-go:hover {
    content: url('<?php echo base_url("docs/b.pages-go-hover.png"); ?>');
  }


  .page-border-travel {
    background-color: #EEFFE9;
    border: 1px solid #A0CE6D;
    border-radius: 15px;
    margin-bottom: 30px;
    width: 248px;
    height: 316px;
    flex-shrink: 0;
    position: relative;
    z-index: 5;

  }

  .page-border-travel:hover {
    background-color: #FFFFFF;
    border: 1px solid #A0CE6D;
    border-radius: 15px;
    margin-bottom: 30px;
    width: 248px;
    height: 316px;
    flex-shrink: 0;
    position: relative;
    z-index: 5;

  }

  .page-border-activity {
    background-color: #EEFFE9;
    border: 1px solid #A0CE6D;
    border-radius: 15px;
    margin-bottom: 30px;
    width: 248px;
    height: 316px;
    flex-shrink: 0;
    z-index: 5;
    position: relative;
  }

  .page-border-activity:hover {
    background-color: #FFFFFF;
    border: 1px solid #A0CE6D;
    border-radius: 15px;
    margin-bottom: 30px;
    width: 248px;
    height: 316px;
    flex-shrink: 0;
    z-index: 5;
    position: relative;
  }

  /* รูปภาพโค้ง border-radius-img ******************************************************8* */
  .rounded-top-left-right {
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }

  .border-radius34 {
    width: 209.09px;
    height: 201.71px;
    flex-shrink: 0;
    border-radius: 9.413px;
    background: url(<path-to-image>), lightgray -92.394px -1.345px / 171.655% 103.333% no-repeat;
    box-shadow: 0px 2.689px 2.689px 0px rgba(0, 0, 0, 0.10);
  }

  .border-radius34 {
    border-radius: 34px;
    width: 100%;
    height: 100%;
  }

  .border-radius-travel {
    border-radius: 34px;
    margin-left: -15px;
  }

  /* ************************************************************************* */

  .margin-top-delete {
    margin-top: 20px;
  }

  .margin-top-delete-topic {
    margin-top: -10px;
  }

  .margin-top-delete-q-a {
    margin-right: 90px;
    margin-top: -10px;

  }

  .margin-top-delete-travel {
    margin-top: -5px;

  }

  .pages-select-pdf {
    border-radius: 100px;
    border: 0.67px solid var(--02, #1D5F0E);
    background: #FFFCF4;
    padding: 15px;
    margin-bottom: 15px;
    width: 1460px;
    height: auto;
    flex-shrink: 0;
    position: relative;
    z-index: 10;
  }

  .pages-select-pdf:hover {
    border-radius: 100px;
    border: 0.67px solid var(--02, #1D5F0E);
    background: #FFF5DB;
    padding: 15px;
    margin-bottom: 15px;
    width: 1460px;
    flex-shrink: 0;
    position: relative;
    z-index: 10;
  }

  .pages-select-e-gp {
    border-radius: 16.042px;
    border: 0.668px solid var(--02, #ECB23F);
    background: #FDF5E1;
    padding: 15px;
    margin-bottom: 15px;
    flex-shrink: 0;

  }

  .pages-select-q_a {
    border-radius: 100px;
    border: 0.67px solid var(--02, #ECB23F);
    background: #FFFCF4;
    padding: 15px;
    margin-bottom: 15px;
    width: 1460px;
    height: auto;
    flex-shrink: 0;
    position: relative;
    z-index: 10;
  }

  .pages-select-q_a:hover {
    border-radius: 100px;
    border: 0.67px solid var(--02, #ECB23F);
    background: #FFF5DB;
    padding: 15px;
    margin-bottom: 15px;
    width: 1460px;
    height: auto;
    flex-shrink: 0;
    position: relative;
    z-index: 10;
  }

  .pages-select-q_a-add {
    margin-top: 40px;
    margin-bottom: 5%;
    padding-left: 5%;
    padding-right: 5%;
    border-radius: 17.085px;
    background: rgba(253, 245, 225, 0.80);
    box-shadow: 0px 0px 6.701px 0px rgba(0, 0, 0, 0.25);
    height: 600px;
    width: 914px;
  }

  .pages-select-q-a-chat {
    margin-top: 40px;
    margin-bottom: 5%;
    padding-left: 5%;
    padding-right: 5%;
    border-radius: 17.085px;
    background: rgba(253, 245, 225, 0.80);
    box-shadow: 0px 0px 6.701px 0px rgba(0, 0, 0, 0.25);
    height: 400px;
    width: 1460px;
  }

  .pages-form-es-complain {
    margin-top: 40px;
    margin-bottom: 5%;
    padding-left: 5%;
    padding-right: 5%;
    border-radius: 17.085px;
    background: rgba(253, 245, 225, 0.80);
    box-shadow: 0px 0px 6.701px 0px rgba(0, 0, 0, 0.25);
    height: 600px;
    width: 1460px;
  }

  .pages-form-es-complain-q-a {
    margin-top: 40px;
    margin-bottom: 5%;
    padding-left: 5%;
    padding-right: 5%;
    border-radius: 17.085px;
    background: rgba(253, 245, 225, 0.80);
    box-shadow: 0px 0px 6.701px 0px rgba(0, 0, 0, 0.25);
    height: 350px;
    width: 914px;
  }

  .pages-form-es-corruption {
    margin-top: 40px;
    margin-bottom: 5%;
    padding-left: 5%;
    padding-right: 5%;
    border-radius: 17.085px;
    background: rgba(253, 245, 225, 0.80);
    box-shadow: 0px 0px 6.701px 0px rgba(0, 0, 0, 0.25);
    height: 515px;
    width: 914px;
  }

  .pages-follow-complain {
    margin-top: 40px;
    margin-bottom: 5%;
    padding-left: 5%;
    padding-right: 5%;
    border-radius: 17.085px;
    background: rgba(253, 245, 225, 0.80);
    box-shadow: 0px 0px 6.701px 0px rgba(0, 0, 0, 0.25);
    height: 250px;
    width: 1460px;
  }

  .pages-follow-complain-detail {
    margin-top: 40px;
    margin-bottom: 5%;
    padding-left: 5%;
    padding-right: 5%;
    border-radius: 17.085px;
    background: rgba(253, 245, 225, 0.80);
    box-shadow: 0px 0px 6.701px 0px rgba(0, 0, 0, 0.25);
    height: auto;
    width: 1460px;
  }

  .pages-follow-elderly-aw-detail {
    margin-top: 40px;
    margin-bottom: 5%;
    border-radius: 17.085px;
    background: rgba(253, 245, 225, 0.80);
    box-shadow: 0px 0px 6.701px 0px rgba(0, 0, 0, 0.25);
    height: auto;
    width: 1460px;
  }

  .pages-select-e-service {
    border: 1px solid #6D758F;
    border-radius: 15px;
    padding: 20px;
    margin-bottom: 30px;
  }

  .pages-form-es-complain {
    margin-top: 40px;
    margin-bottom: 5%;
    padding-left: 5%;
    padding-right: 5%;
    border-radius: 17.085px;
    background: rgba(253, 245, 225, 0.80);
    box-shadow: 0px 0px 6.701px 0px rgba(0, 0, 0, 0.25);
    height: 600px;
    width: 914px;
  }

  .detail-q-a {
    display: flex;
    width: 1460px;
    height: auto;
    padding: 21.438px;
    flex-direction: column;
    align-items: flex-start;
    gap: 13.398px;
    flex-shrink: 0;
    border-radius: 22.777px;
    background: rgba(253, 245, 225, 0.80);
    box-shadow: 0px 0px 6.699px 0px rgba(0, 0, 0, 0.25);
    position: relative;
    z-index: 10;
  }

  /* scroll bar เลื่อนซ้ายขวา เลื่อนบนล่าง ****************************************************** */
  .scrollable-container {
    margin-top: 30px;
    max-height: 700px;
    overflow-y: scroll;
    overflow-x: hidden;
    margin-bottom: 40px;
  }


  .scrollable-container-news {
    max-height: 1250px;
    overflow-y: scroll;
    overflow-x: hidden;
    margin-bottom: 40px;
  }

  .scrollable-container-e-service {
    max-height: 1250px;
    overflow-y: scroll;
    overflow-x: hidden;
    margin-bottom: 40px;
    padding-left: 2%;
  }

  .scrollable-container-500 {
    max-height: 500px;
    overflow-y: scroll;
    overflow-x: hidden;
    margin-bottom: 40px;
  }

  .scrollable-container-otop {
    max-height: 450px;
    overflow-y: scroll;
    overflow-x: hidden;
    margin-bottom: 40px;
    margin-top: 10px;
  }

  /* ปรับแต่งการเลื่อน */
  .scrollable-container-otop::-webkit-scrollbar {
    width: 10px;
    /* ความกว้างของแถบเลื่อน */
  }

  .scrollable-container-otop::-webkit-scrollbar-thumb {
    background-color: #888;
    /* สีของแถบเลื่อน */
    border-radius: 5px;
    /* ทำให้แถบเลื่อนโค้งมน */
    border: 2px solid #f9f9f9;
    /* ขอบรอบ ๆ แถบเลื่อน */
  }

  .scrollable-container-otop::-webkit-scrollbar-thumb:hover {
    background-color: #555;
    /* สีของแถบเลื่อนเมื่อวางเมาส์ */
  }

  .scrollable-container-otop::-webkit-scrollbar-track {
    background-color: #f1f1f1;
    /* สีของพื้นหลังแถบเลื่อน */
    border-radius: 5px;
    /* ทำให้พื้นหลังแถบเลื่อนโค้งมน */
  }

  /* เพิ่มการเลื่อนที่เนียน */
  .scrollable-container-otop {
    scroll-behavior: smooth;
    /* การเลื่อนที่ราบรื่น */
  }


  .scrollable-container-eGP {
    max-height: 1500px;
    overflow-y: scroll;
    overflow-x: hidden;
    margin-bottom: 40px;
    margin-top: 20px;
  }

  .scrollable-container-gi {
    max-height: 850px;
    overflow-y: scroll;
    overflow-x: hidden;
    margin-bottom: 40px;
    margin-top: 10px;
  }

  .scrollable-container-p {
    max-height: 1200px;
    overflow-y: scroll;
    overflow-x: hidden;
    margin-bottom: 40px;
    margin-top: 10px;
  }

  /* กำหนดสไตล์ scroll bar สำหรับ WebKit (Chrome, Safari) */
  /* ::-webkit-scrollbar {
    height: 5px;
    width: 5px;
  }

  ::-webkit-scrollbar-track {
    border-radius: 33.559px;
    background: #FFF;
    box-shadow: 0px 2.685px 2.685px 0px rgba(0, 0, 0, 0.25);
  }

  ::-webkit-scrollbar-thumb {
    border-radius: 33.559px;
    background: #523003;
    box-shadow: 0px 2.685px 2.685px 0px rgba(0, 0, 0, 0.25);
  }

  ::-webkit-scrollbar-thumb:hover {
    background: #888;
  } */

  /* scroll bar เลื่อนซ้ายขวา เลื่อนบนล่าง ****************************************************** */



  .content-e-service {
    margin-top: 50px;
  }

  /* ให้ทุุกอย่างที่อยู่ใน bg background มันอยู่ตรงกลาง ******************************************** */
  .bg-personnel-s {
    background-image: url('<?php echo base_url("docs/s.bg-personnel.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 215px;
    height: 256px;
    display: grid;
    place-items: center;
    position: relative;
    z-index: 10;
  }

  .rounded-image-s {
    width: 188px;
    height: 228px;
  }

  /* รูปบุคลากรแบบวงกลม personnel */
  /* .bg-personnel-m {
    background-image: url('<?php echo base_url("docs/bg-personnel-s.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 298px;
    height: 298px;
    display: grid;
    place-items: center;
  }

  .rounded-image-m {
    width: 250px;
    height: 270px;
    clip-path: ellipse(55% 50% at 50% 50%);
  } */

  .center-center {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .show {
    z-index: 999;
    display: none;
  }

  .show .overlay {
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, .66);
    position: fixed;
    top: 0;
    left: 0;
    z-index: 10;
  }

  .show .img-show {
    width: 1000px;
    height: 700px;
    background: #FFF;
    position: absolute;
    /* เปลี่ยนเป็น position: absolute; */
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    overflow: hidden;
    z-index: 999;

  }

  @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
    .show .img-show {
      width: 1000px;
      height: 700px;
      left: 50%;
      transform: translate(-50%, -50%);
      margin-top: 40%;
    }
  }

  .img-show img {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
  }

  select.custom-select {
    color: #693708;

    font-size: 20.102px;
    font-style: normal;
    font-weight: 500;
    line-height: 42.294px;
    background-image: url('<?php echo base_url("docs/icon-down.png"); ?>');
  }

  select.custom-select option {
    color: black;
  }

  .input-radius {
    border-radius: 20px;
    background: #fff;
    text-align: center;
    height: 47px;
  }

  .test {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .flex-nowrap {
    display: flex;
    flex-wrap: nowrap;
  }

  .container-pages {
    padding-left: 230px;
    padding-right: 230px;
    z-index: 10;
    position: relative;
  }

  .container-pages-news {
    padding-left: 230px;
    padding-right: 230px;
    z-index: 10;
    position: relative;
  }

  .container-pages-detail {
    padding-left: 230px;
    padding-right: 230px;
    z-index: 10;
    position: relative;
  }

  .border-radius24 {
    border-radius: 100px;
    background: url(<path-to-image>), lightgray -1.724px 0px / 101.139% 100% no-repeat;
    box-shadow: 1.337px 1.337px 2.005px 0px rgba(0, 0, 0, 0.25);
    width: 50.131px;
    height: 50.439px;
    flex-shrink: 0;
  }

  .style-col-img {
    margin: auto;
  }

  .font-gi-head {
    color: #000;
    text-align: center;
    text-shadow: 0.536px 0.536px 0.536px rgba(0, 0, 0, 0.25);
    font-size: 32px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
  }

  .font-gi-content {
    color: #000;
    font-size: 24px;
    font-style: normal;
    font-weight: 300;
    line-height: 33px;
  }

  .font-gi-target {
    color: #000;

    font-size: 22px;
    font-style: normal;
    font-weight: 400;
    line-height: 40.349px;
    /* 183.406% */
  }

  .pad-left-35 {
    padding-left: 35px;
  }

  .mar-fb {
    padding-top: 55px;
    margin-left: 70px;
    border-radius: 8px;
  }

  .mar-es-intra {
    padding-top: 55px;
  }

  .mar-ita {
    padding-top: 10px;
  }

  .mar-right-10 {
    margin-right: 10px;
  }

  #SubmitLike {
    border: none;
    padding: 0;
    background: none;
    cursor: pointer;
  }

  #confirmButton {
    border: none;
    padding: 0;
    background: none;
    cursor: pointer;
  }

  #loginBtn {
    border: none;
    padding: 0;
    background: none;
    cursor: pointer;
  }

  .btn-ita-open {
    color: #693708;
    background: #FCBF6A;
    font-size: 20px;
    font-weight: 500;

    border-radius: 25px;
    width: 91px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0px 2px 0px 2px rgba(0, 0, 0, 0.15);
  }

  .btn-ita-open:hover {
    color: #693708;
    background: #FCBF6A;
    font-size: 20px;
    font-weight: 500;

  }

  .bg-ita-color {
    border-top: 1px solid #ECB23F;
    border-bottom: 1px solid #ECB23F;
    background: #FFF4D0;
    padding-bottom: 20px;
  }

  .page-travel-content {
    height: 140px;
  }

  .pagination-next-prev {
    padding-right: 50px;
  }

  .font-head-travel {
    color: #000;
    leading-trim: both;
    text-edge: cap;
    font-feature-settings: 'clig' off, 'liga' off;
    font-family: Inter;
    font-size: 32px;
    font-style: normal;
    font-weight: 600;
    line-height: 40px;

  }

  .laws_ral_content {
    padding-left: 20px;
  }

  .dot-laws::before {
    content: '\2022';
    /* รหัสของ bullet point */
    color: black;
    /* สีของ bullet point */
    display: inline-block;
    width: 1em;
    /* ขนาดของ bullet point */
    margin-right: 0.5em;
    /* ระยะห่างระหว่าง bullet point กับข้อความ */
  }

  .pl-30 {
    padding-left: 30px;
  }

  .bg-how-e-service {
    /* background-image: url('<?php echo base_url("docs/bg-how-e-service.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%; */
    background-color: #005930;
    width: 100%;
    height: 70px;
    display: flex;
    /* หรือใช้ display: grid; */
    align-items: center;
    /* หรือใช้ justify-content: center; ถ้าใช้ display: grid; */
    padding-left: 40px;
  }


  .bg-head-e-service {
    border-radius: 50px;
    background: #FFFCF1;
    box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.25);
    width: 418px;
    height: 70px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    margin-top: 30px;
    padding-left: 30px;

  }

  .bg-content-e-service {
    border-radius: 34px;
    background: #FFFCF1;
    width: 100%;
    height: auto;
    flex-shrink: 0;
    box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.25);
    margin-top: 20px;
    padding: 15px 50px;
  }

  .pl-13p {
    padding-left: 13%;
  }

  .pl-20 {
    padding-left: 20px;

  }

  .image-slide-stick-mid {
    position: fixed;
    top: 35%;
    left: 0;
    bottom: 0;
    overflow-y: auto;
    z-index: 9999;
    width: 410px;

  }

  .close-button-slide-mid {
    position: absolute;
    top: 0;
    right: 0;
    border: none;
    cursor: pointer;
  }

  /* .popup-ita {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
    width: 864px;
    height: 354px;
    flex-shrink: 0;
    border-radius: 30px;
    border: 2px solid #F5900A;
    background: #FEFCF7;
    z-index: 5;
  }

  .popup-ita-content {
    text-align: center;
  }

  .popup-ita-content button {
    color: #693708;
    background: #FCBF6A;
    font-size: 20px;
    font-weight: 500;
    
    border-radius: 25px;
    width: 91px;
    height: 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    box-shadow: 0px 2px 0px 2px rgba(0, 0, 0, 0.15);
    margin-top: 20%;
  } */

  .font-ita-content-detail {
    color: #000;

    font-size: 20px;
    font-style: normal;
    padding-left: 150px;
  }

  .font-doc {
    font-size: 20px;
    text-shadow: 1px 1px #ccc;
    /* padding-left: 20px; */
    margin-left: -20px;
  }

  .bg-banner {
    background-image: url('<?php echo base_url("docs/bg-banner2.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    height: 1000px;
    width: 1920px;
    z-index: 1;
  }

  .bg-public-news {
    background-image: url('<?php echo base_url("docs/bg-public-news1v1.png"); ?>');
    background-repeat: no-repeat;
    background-size: cover;
    height: 1000px;
    width: 1920px;
    margin: auto;
  }

  .dot-news-animation-1 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 370px; */
    /* margin-left: 20px; */
    z-index: 1;
  }

  .dot-news-animation-2 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 720px; */
    /* margin-left: 68px; */
    z-index: 1;
  }

  .dot-news-animation-3 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 40px; */
    /* margin-left: 115px; */
    z-index: 1;
  }

  .dot-news-animation-4 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 120px; */
    /* margin-left: 300px; */
    z-index: 1;
  }

  .dot-news-animation-5 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 732px; */
    /* margin-left: 720px; */
    z-index: 1;
  }

  .dot-news-animation-6 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 423px; */
    /* margin-left: 1030px; */
    z-index: 1;
  }

  .dot-news-animation-7 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 305px; */
    /* margin-left: 1120px; */
    z-index: 1;
  }

  .dot-news-animation-8 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 717px; */
    /* margin-left: 1180px; */
    z-index: 1;
  }

  .dot-news-animation-9 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 745px; */
    /* margin-left: 1500px; */
  }

  .dot-news-animation-10 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 730px; */
    /* margin-left: 1740px; */
    z-index: 1;
  }

  .dot-news-animation-11 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 370px; */
    /* margin-left: 1810px; */
    z-index: 1;
  }

  .dot-news-animation-12 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 60px; */
    /* margin-left: 1880px; */
    z-index: 1;
  }

  .dot-news-animation-13 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 605px; */
    /* margin-left: 1870px; */
    z-index: 1;
  }

  .dot-news-animation-14 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 605px; */
    /* margin-left: 1870px; */
    z-index: 1;
  }

  .dot-news-animation-15 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 605px; */
    /* margin-left: 1870px; */
    z-index: 1;
  }

  /* แสงวิบวับ fade in fade out  */
  @-webkit-keyframes blink-2 {
    0% {
      opacity: 1;
    }

    50% {
      opacity: 0;
      /* ให้หายไปทั้งหมด */
    }

    100% {
      opacity: 1;
    }
  }

  .bg-public-news2 {
    background-image: url('<?php echo base_url("docs/bg-public-new2.png"); ?>');
    background-repeat: no-repeat;
    background-size: cover;
    height: 1000px;
    width: 1920px;
    margin: auto;
    z-index: 1;
  }

  .bg-news-dla-prov {
    background-image: url('<?php echo base_url("docs/bg-news-dla-prov.png"); ?>');
    background-repeat: no-repeat;
    background-size: cover;
    height: 1000px;
    width: 1920px;
    margin: auto;
    z-index: 1;
  }

  .bg-news-dla {
    background-image: url('<?php echo base_url("docs/bg-news-dla.png"); ?>');
    background-repeat: no-repeat;
    background-size: cover;
    height: 1000px;
    width: 1920px;
    margin: auto;
    z-index: 1;
  }

  .bg-dla-prov-content {
    background-image: url('<?php echo base_url("docs/bg-dla-prov-content.png"); ?>');
    background-repeat: no-repeat;
    background-size: cover;
    width: 1431px;
    height: 841px;
    margin: auto;
    z-index: 2;
    position: relative;
  }

  .bg-dla-content {
    background-image: url('<?php echo base_url("docs/bg-dla-content.png"); ?>');
    background-repeat: no-repeat;
    background-size: cover;
    width: 1431px;
    height: 841px;
    margin: auto;
    z-index: 2;
    position: relative;
  }

  .font-dla-header {
    color: #2B2B2B;
    text-align: center;
    font-family: "Noto Looped Thai UI";
    font-size: 30px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
  }

  .font-dla-1 {
    color: #215F1A;
    font-family: "Noto Looped Thai UI";
    font-size: 22px;
    font-style: normal;
    font-weight: 600;
    line-height: 35.114px;
    /* 146.308% */
  }

  .font-dla-2 {
    color: #000;
    font-family: "Noto Looped Thai UI";
    font-size: 22px;
    font-style: normal;
    font-weight: 400;
    line-height: 35.114px;
  }

  .font-dla-2:hover {
    color: red;
    font-family: "Noto Looped Thai UI";
    font-size: 22px;
    font-style: normal;
    font-weight: 400;
    line-height: 35.114px;
  }

  .bt-new-dla {
    border-radius: 2px;
    background: var(--Red-Line, linear-gradient(0deg, #B3140E -8.23%, #D9281E 32.92%, #DF3026 39.41%, #EA3C35 52.41%, #EE413A 64.32%, #FD5B47 100.05%));
    width: 44px;
    height: 16.343px;
    display: flex;
    align-items: center;
    /* จัดข้อความในแนวตั้ง */
    justify-content: center;
    /* จัดข้อความในแนวนอน */
    padding-left: 7px;
    margin-top: 10px;
  }

  .text-new-dla {
    color: #FFF;
    font-family: "Noto Looped Thai";
    font-size: 14px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    width: 32.686px;
    height: 23.886px;
    flex-shrink: 0;
    padding-top: 3px;
  }

  .bt-new-dla-other {
    border-radius: 2px;
    background: var(--Red-Line, linear-gradient(0deg, #B3140E -8.23%, #D9281E 32.92%, #DF3026 39.41%, #EA3C35 52.41%, #EE413A 64.32%, #FD5B47 100.05%));
    width: 50px;
    height: 20px;
  }

  .btn-all-dla-prov {
    background-image: url('<?php echo base_url("docs/btn-all-dla-prov.png"); ?>');
    width: 184px;
    height: 55px;
    display: flex;
    align-items: center;
    /* จัดข้อความในแนวตั้ง */
    justify-content: center;
    /* จัดข้อความในแนวนอน */
    position: relative;
    z-index: 10;
    pointer-events: auto;
    transition: background-image 0.6s ease;
  }

  .btn-all-dla-prov:hover {
    background-image: url('<?php echo base_url("docs/btn-all-dla-prov-hover.png"); ?>');
    width: 184px;
    height: 55px;
    position: relative;
    z-index: 10;
    pointer-events: auto;
    transition: background-image 0.6s ease;
  }

  .btn-all-dla {
    background-image: url('<?php echo base_url("docs/btn-all-dla.png"); ?>');
    width: 184px;
    height: 55px;
    display: flex;
    align-items: center;
    /* จัดข้อความในแนวตั้ง */
    justify-content: center;
    /* จัดข้อความในแนวนอน */
    position: relative;
    z-index: 10;
    pointer-events: auto;
    transition: background-image 0.6s ease;
  }

  .btn-all-dla:hover {
    background-image: url('<?php echo base_url("docs/btn-all-dla-hover.png"); ?>');
    width: 184px;
    height: 55px;
    position: relative;
    z-index: 10;
    pointer-events: auto;
    transition: background-image 0.6s ease;
  }

  .font-all-dla {
    color: #000;
    text-shadow: #000;
    font-family: "Noto Looped Thai UI";
    font-size: 24px;
    font-style: normal;
    font-weight: 300;
    line-height: normal;
    /* margin-top: 5px; */
    /* ปรับค่าตามต้องการ */
  }


  .container-star-news-animation {
    position: absolute;
    width: 1920px;
    height: 300px;
    overflow: hidden;
    z-index: 2 !important;
  }

  .star-news-animation-1 {
    position: absolute;
    visibility: hidden;
    /* left: 100px; */
    /* animation: fadeInOut 4s infinite; */
  }

  .star-news-animation-2 {
    position: absolute;
    visibility: hidden;

    /* left: 250px; */
    /* animation: fadeInOut 4s infinite; */
  }

  .star-news-animation-3 {
    position: absolute;
    visibility: hidden;

    /* left: 465px; */
    /* animation: fadeInOut 4s infinite; */
  }

  .star-news-animation-4 {
    position: absolute;
    visibility: hidden;

    /* left: 510px; */
    /* animation: fadeInOut 4s infinite; */
  }

  .star-news-animation-5 {
    position: absolute;
    visibility: hidden;

    /* left: 655px; */
    /* animation: fadeInOut 4s infinite; */
  }

  .star-news-animation-6 {
    position: absolute;
    visibility: hidden;

    /* left: 740px; */
    /* animation: fadeInOut 4s infinite; */
  }

  .star-news-animation-7 {
    position: absolute;
    visibility: hidden;

    /* left: 715px; */
    /* animation: fadeInOut 4s infinite; */
  }

  .star-news-animation-8 {
    position: absolute;
    visibility: hidden;

    /* left: 860px; */
    /* animation: fadeInOut 4s infinite; */
  }

  .star-news-animation-9 {
    position: absolute;
    visibility: hidden;

    /* left: 1255px; */
    /* animation: fadeInOut 4s infinite; */
  }

  .star-news-animation-10 {
    position: absolute;
    visibility: hidden;

    /* left: 1285px; */
    /* animation: fadeInOut 4s infinite; */
  }

  .star-news-animation-11 {
    position: absolute;
    visibility: hidden;

    /* left: 1330px; */
    /* animation: fadeInOut 4s infinite; */
  }

  .star-news-animation-12 {
    position: absolute;
    visibility: hidden;

    /* left: 100px; */
    /* animation: fadeInOut 4s infinite; */
  }

  .star-news-animation-13 {
    position: absolute;
    visibility: hidden;

    /* left: 100px; */
    /* animation: fadeInOut 4s infinite; */
  }

  .star-news-animation-14 {
    position: absolute;
    visibility: hidden;

    /* left: 100px; */
    /* animation: fadeInOut 4s infinite; */
  }

  .star-news-animation-15 {
    position: absolute;
    visibility: hidden;


    /* left: 100px; */
    /* animation: fadeInOut 4s infinite; */
  }

  /* ดาวตก animation  */
  @keyframes fadeInOut {

    0% {
      top: -10px;
      opacity: 1;
      visibility: visible;
    }


    100% {
      top: 300px;
      /* ตำแหน่งที่ออกไป */
      opacity: 0;
    }
  }

  .bg-travel {
    background-image: url('<?php echo base_url("docs/bg-travel2.png"); ?>');
    background-repeat: no-repeat;
    background-size: cover;
    height: 1000px;
    width: 1920px;
    margin: auto;
  }

  .bg-service {
    background-image: url('<?php echo base_url("docs/bg-e-service.png"); ?>');
    background-repeat: no-repeat;
    background-size: cover;
    height: 1000px;
    width: 1920px;
    margin: auto;
    /* นี้จะทำให้ element อยู่ตรงกลางตามแนวนอน */
    /* margin-top: 200px; */

  }

  .bg-link {
    background-image: url('<?php echo base_url("docs/bg-link.png"); ?>');
    background-repeat: no-repeat;
    background-size: cover;
    height: 925px;
    width: 1920px;
    margin: auto;

  }

  @keyframes fadeinleftoutright {
    0% {
      left: -100px;
      opacity: 0;
      visibility: hidden;
    }

    5% {
      left: 5%;
      opacity: 0;
      visibility: visible;
    }

    50% {
      left: 50%;
      opacity: 1;
    }

    90% {
      left: 90%;
      opacity: 0;
    }

    100% {
      left: 100%;
      opacity: 0;
      visibility: hidden;
    }
  }

  .cloud-animation {
    position: absolute;
    white-space: nowrap;
    animation: fadeinleftoutright 30s linear infinite;
    z-index: 1;
    visibility: hidden;
    /* ซ่อนภาพก่อนเริ่มแอนิเมชั่น */
  }

  .cloud-animation-1 {
    margin-top: -20px;
  }

  .cloud-animation-2 {
    margin-top: 30px;
    animation-delay: 2.5s;
  }

  .cloud-animation-3 {
    margin-top: 95px;
    animation-delay: 6s;
  }

  .cloud-animation-4 {
    margin-top: -50px;
    animation-delay: 7.9s;
  }

  .cloud-animation-5 {
    margin-top: 100px;
    animation-delay: 11.6s;
  }

  .cloud-animation-6 {
    margin-top: 80px;
    animation-delay: 15s;
  }

  .service-cartoon {
    background-image: url('<?php echo base_url("docs/e-service-cartoon.png"); ?>');
    width: 539px;
    height: 179px;
  }

  .otop-box {
    background-image: url('<?php echo base_url("docs/otop_travel_box.png"); ?>');
    width: 334px;
    height: 74px;
  }

  .font-header-service {
    color: #F27868;
    text-align: center;
    font-family: "Noto Looped Thai UI";
    font-size: 36px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
  }

  .service-box {
    z-index: 1;
    /* margin-left: 7%; */
    /* margin-top: 80px; */
    background-image: url('<?php echo base_url("docs/b.bt-eservice2.png"); ?>');
    background-repeat: no-repeat;
    width: 100%;
    height: 116px;
    margin-top: 5%;
  }

  .font-service {
    color: #FFF;
    -webkit-text-stroke-width: 0.4259740114212036;
    -webkit-text-stroke-color: #000;
    font-family: Inter;
    font-size: 22px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
  }

  .font-service:hover {
    color: #fff;
    -webkit-text-stroke-width: 0.4259740114212036;
    -webkit-text-stroke-color: #000;
    font-family: Inter;
    font-size: 23px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
  }

  .font-service {
    display: block;
    /* ทำให้แน่ใจว่า span เป็น block เพื่อให้ margin-top มีผล */
    margin-top: 1px;
    /* ปรับขนาดตามที่ต้องการ */
  }

  .bg-facebook {
    z-index: 1;
    background-image: url('<?php echo base_url("docs/bg-facebook.png"); ?>');
    background-repeat: no-repeat;
    width: 282px;
    height: 566px;
    padding-left: 21px;
    padding-top: 85px;
  }

  .bg-view {
    z-index: 1;
    margin-left: 15%;
    /* margin-top: 80px; */
    background-image: url('<?php echo base_url("docs/bg-view.png"); ?>');
    background-repeat: no-repeat;
    width: 360px;
    height: 317px;
    margin-top: 5%;
  }

  .bg-like {
    z-index: 1;
    background-image: url('<?php echo base_url("docs/bg-like.png"); ?>');
    background-repeat: no-repeat;
    width: 354px;
    height: 270px;
  }

  .bg-prov {
    z-index: 1;
    background-image: url('<?php echo base_url("docs/b.Anti_Corruption.png"); ?>');
    background-repeat: no-repeat;
    width: 610px;
    height: 320px;
  }

  .bg-qa-list {
    z-index: 1;
    background-image: url('<?php echo base_url("docs/bg-qa.png"); ?>');
    background-repeat: no-repeat;
    width: 737px;
    height: 707px;
    margin: auto;
    padding-top: 25px;
  }

  .bg-content-qa-list {
    padding: 0 16.529px;
    align-items: center;
    gap: 38.018px;
    align-self: stretch;
    border-radius: 82.647px;
    border: 1px solid #025A59;
    background: #FFF;
    width: 646px;
    height: 50px;
    position: relative;
    transition: background 0.3s ease, border-color 0.3s ease;
    margin-top: 8px;
    margin-left: 30px;
  }

  .bg-content-qa-list:hover {
    background: #F5F5F5;
    /* เปลี่ยนสีพื้นหลังเมื่อ hover */
    /* background: rgba(255, 255, 230, 0.50); */
    border-color: #025A59;
    /* เปลี่ยนสีขอบเมื่อ hover */
  }

  .btn-qa-add {
    background-image: url('<?php echo base_url("docs/btn-qa-add.png"); ?>');
    width: 136px;
    height: 46px;
    transition: background-image 0.6s ease;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
    position: relative;
  }

  .btn-qa-add:hover {
    background-image: url('<?php echo base_url("docs/btn-qa-add-hover.png"); ?>');
    width: 136px;
    height: 46px;
    transition: background-image 0.6s ease;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .btn-like {
    background-image: url('<?php echo base_url("docs/b.bt-like.png"); ?>');
    width: 106px;
    height: 41px;
    position: relative;
    /* เพิ่มตำแหน่งเพื่อให้ z-index มีผล */
    z-index: 10;
    /* ค่าที่สูงกว่าค่า z-index ขององค์ประกอบอื่น */
    transition: background-image 0.6s ease;
  }

  .btn-like:hover {
    background-image: url('<?php echo base_url("docs/b.bt-like-hover.png"); ?>');
    width: 106px;
    height: 41px;
    transition: background-image 0.6s ease;
  }

  .bt-like .bt {
    width: 106px;
    /* ปรับขนาดความกว้างตามที่คุณต้องการ */
    height: 41px;
    /* ปรับขนาดความสูงตามที่คุณต้องการ */
    display: flex;
    justify-content: center;
    align-items: center;
    /* จัดกึ่งกลางแนวตั้ง */
  }

  .bt-like .bt span {
    padding-left: 0;
    /* รีเซ็ต padding-left เพื่อให้ข้อความอยู่กลาง */
  }

  .font-btn-qa {
    color: #3A3939;
    font-family: "Noto Looped Thai";
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
  }

  .font-view {
    color: #FFF;
    text-align: center;
    text-shadow: 0px 0px 10px rgba(159, 218, 255, 0.30);

    font-size: 16px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
  }

  .content-view {
    margin-top: -20px;
  }

  .head-view {
    padding: 10px;
    padding-top: 80px;
  }

  .font-like {
    background: linear-gradient(0deg, #00DD94 -15.14%, #009FE2 89.55%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-family: "Noto Looped Thai";
    font-size: 20px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
  }

  .head-like {
    padding: 10px;
    padding-top: 80px;
  }

  .content-like {
    padding-top: 20px;
    padding-left: 30px;
  }

  .border-like {
    width: 26px;
    height: 25px;
    border-radius: 34px;
    border: 1.2px solid #FF8500;
  }

  .form-check {
    display: flex;
    align-items: center;
    margin-bottom: 1px;
    /* เพิ่มพื้นที่ระหว่างแต่ละรายการ */
  }

  .form-check-input {
    margin-right: 10px;
    /* เพิ่มพื้นที่ระหว่าง input และ label */
  }

  .form-check-label {
    margin: 0;
    /* ลบ margin เพื่อให้ label ตรงกับ input */
  }

  .font-like-label {
    color: #000;
    text-shadow: 0px 1.2px 2.399px rgba(0, 0, 0, 0.25);
    font-family: "Noto Looped Thai";
    font-size: 20px;
    font-style: normal;
    font-weight: 300;
    line-height: 29.991px;
    /* 149.955% */
  }

  .form-check-input:checked {
    background-color: #FF8500;
    border-color: #FFF;
  }

  .progress-bar {
    width: 234px;
    height: 10px;
    flex-shrink: 0;
    border-radius: 34px;
    background: var(--Line-Y, linear-gradient(358deg, #FFDB51 -6.6%, #FF9300 105.68%));
    box-shadow: 0px 1.2px 1.2px 0px rgba(0, 0, 0, 0.10);
    /* margin-left: -150px; */
  }

  .font-link {
    color: #000;
    text-align: center;
    font-family: "Noto Looped Thai UI";
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
  }

  .font-footer2 {
    color: #693708;
    font-size: 24px;
    font-style: normal;
    font-weight: 300;
    line-height: 33.366px;
    /* 139.024% */
  }

  .font-footer3 {
    color: #693708;

    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: 33.366px;
  }

  .link-footer {
    margin-top: 665px;
    margin-left: 180px;
  }

  .font-nav {
    color: #00494F;
    font-size: 22px;
  }

  .font-nav:hover {
    color: #fff;
    font-size: 22px;
  }

  .font-banner-link {
    color: #FFF;
    text-align: center;
    /* font-family: "Noto Looped Thai UI"; */
    font-size: 24px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    position: relative;
  }

  .font-link-name {
    color: #523003;
    /* text-align: center; */
    /* font-family: "Noto Looped Thai UI"; */
    font-size: 28px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
  }

  .font-link-rank {
    color: #523003;
    /* font-family: "Noto Looped Thai UI"; */
    font-size: 24px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
  }

  .font-link-phone {
    color: #523003;
    font-family: "Noto Looped Thai UI";
    font-size: 24px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
  }

  .background-ps {
    border-radius: 20.969px;
    box-shadow: 0px 2.467px 2.467px 0px rgba(0, 0, 0, 0.25);
  }


  .font-banner-link a {
    position: relative;
    z-index: 10;
    /* Ensure links are on top */
  }

  .calendar {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 269px;
    margin: 0 auto;
    font-family: Arial, sans-serif;
    justify-content: flex-start;
    margin-top: 50px;
    margin-left: 15px !important;

  }

  .calendar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 270px;
    box-sizing: border-box;
    background-image: url('<?php echo base_url("docs/calendar-header.png"); ?>');
    background-repeat: no-repeat;
    padding-top: -25px;
    padding-left: 10px;
    padding-right: 10px;
    margin-top: 30px;
  }

  .weekdays,
  .days {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
  }

  .day,
  .weekday {
    width: 14.28%;
    text-align: center;
    padding: 10px 0;
    box-sizing: border-box;
  }

  .day {
    /* border: 1px solid #ddd; */
    color: black;
    /* สีดำสำหรับตัวเลข */
    width: 14%;
    text-align: center;
    padding: 5px 0;
    /* ลดระยะห่างของวัน */
    box-sizing: border-box;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }


  .event-dot {
    width: 6px;
    height: 6px;
    background-color: red;
    /* สีของจุด */
    border-radius: 50%;
    margin-top: 4px;
  }


  /* .day:hover {
    background-color: #FFD700;
    border-radius: 50% 50%;

  } */

  .weekday {
    /* background-color: #f0f0f0; */
    font-weight: bold;
  }

  .prev-month,
  .next-month {
    color: #ccc;
    /* สีเทาสำหรับวันของเดือนก่อนหน้าและถัดไป */
  }

  .current-day {
    /* background-color: #ffeb3b; */
    border: 1px solid #535353;
    border-radius: 50% 50%;
  }

  .day:nth-child(7n+1) {
    color: red;
  }

  .day:not(:nth-child(7n+1)) {
    color: #76787A;
  }

  .calender-detail-head {
    border: 1px solid #D9AA58;
    border-radius: 15px 15px;
    width: 268px;
    height: 42.89px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
    padding-left: 25px;
  }


  .font-calender {
    color: #643211;
    text-align: center;
    font-family: "Noto Looped Thai UI";
    font-size: 24px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
  }

  .calender-detail-content {
    border: 1px solid rgba(0, 0, 0, 0.30);
    border-radius: 15px 15px;
    width: 268px;
    height: 230px;
    padding-top: 15px;
    padding-left: 10px;
  }

  .font-calender2 {
    color: #515151;
    font-family: "Noto Looped Thai UI";
    font-size: 16px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
  }

  .detail-text {
    display: block;
    margin-left: 1em;
    /* เพิ่มระยะห่างจากเครื่องหมาย &#183; */
    word-break: break-word;
    /* หรือใช้ word-wrap: break-word; */
  }

  .selected-day {
    background-color: #FFD700;
    /* สีพื้นหลัง */
    color: #000;
    /* สีข้อความ */
    border-radius: 50%;
    /* ทำให้ขอบโค้งมน */
  }

  .carousel-indicators button {
    background-color: #007bff;
    /* Change to your desired color */
    border-radius: 50%;
    width: 12px;
    height: 12px;
  }

  .carousel-indicators .active {
    background-color: #CD66C5;
    /* Change to your desired color for the active indicator */
  }

  .carousel-indicators {
    /* background-color: #000; */
    /* Change to your desired color for the active indicator */
  }

  .font-like-new {
    color: #3A3939;
    text-align: center;
    font-family: "Noto Looped Thai";
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
  }

  .welcome-other {
    /* background-image: url('<?php echo base_url("docs/s.welcome-other.png"); ?>'); */
    background-repeat: no-repeat;
    background-size: 100% 1000px;
    /* ขนาดเต็ม 1920px x 600px */
    width: 1920px;
    height: 700px;
    /* แสดงความสูงที่คุณต้องการ */
    overflow: hidden;
    position: absolute;
    background-position: top;
    /* เริ่มจากด้านบน */
  }



  .welcome-btm-other {
    background-image: url('<?php echo base_url("docs/welcome-btm-other2.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: 3;
    width: 1920px;
    height: 384px;
    position: relative;
    margin-top: 572px;
  }

  @keyframes gradient-move-font {
    0% {
      background-position: 100% 0%;
    }

    100% {
      background-position: 0% 0%;
    }
  }

  .font-welcome-btm-other1 {
    color: #3D3D16;
    text-align: center;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    -webkit-text-stroke-width: 1;
    -webkit-text-stroke-color: var(--, #FFF);
    font-family: "Noto Looped Thai UI";
    font-size: 48px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    /* animation: gradient-move-font 20s linear infinite; */
  }

  .font-welcome-btm-other2 {
    font-size: 36px;
    font-style: normal;
    font-weight: 800;
    line-height: normal;
    z-index: 1;
    position: relative;
    animation: gradient-move-font 20s linear infinite;
    text-shadow: 2px 2px 4px gray;
    margin-left: -549px;
  }



  .font-pages-head {
    color: #FFF;
    text-align: center;
    font-size: 36px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
  }

  .font-other-head {
    color: #000;

    font-size: 32px;
    font-style: normal;
    font-weight: bold;
  }

  .font-other-content {
    color: #000;

    font-size: 24px;
    font-style: normal;
  }

  .bg-link-other {
    background-image: url('<?php echo base_url("docs/bg-link-other.png"); ?>');
    background-repeat: no-repeat;
    background-size: cover;
    height: 925px;
    width: 1920px;
    margin: auto;
  }

  #scroll-to-top {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 80px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-image: url('<?php echo base_url("docs/b.scroll-to-top.png"); ?>');
    background-repeat: no-repeat;
    width: 76px;
    height: 76px;
    cursor: pointer;
    padding: 15px;
    border-radius: 4px;
    transition: background-image 0.6s ease;
  }

  #scroll-to-top:hover {
    background-image: url('<?php echo base_url("docs/b.welcome-other-hover.png"); ?>');
    background-repeat: no-repeat;
    width: 76px;
    height: 76px;
    transition: background-image 0.6s ease;
  }

  #scroll-to-top-other {
    display: none;
    position: fixed;
    bottom: 80px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-image: url('<?php echo base_url("docs/b.scroll-to-top.png"); ?>');
    background-repeat: no-repeat;
    width: 76px;
    height: 76px;
    cursor: pointer;
    padding: 15px;
    border-radius: 4px;
    transition: background-image 0.6s ease;
  }

  #scroll-to-top-other:hover {
    background-image: url('<?php echo base_url("docs/b.welcome-other-hover.png"); ?>');
    background-repeat: no-repeat;
    width: 76px;
    height: 76px;
    transition: background-image 0.6s ease;
  }

  #scroll-to-back {
    display: none;
    position: fixed;
    bottom: 80px;
    right: 120px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-image: url('<?php echo base_url("docs/b.scroll-to-back.png"); ?>');
    background-repeat: no-repeat;
    width: 76px;
    height: 76px;
    cursor: pointer;
    padding: 15px;
    border-radius: 4px;
    transition: background-image 0.6s ease;
  }

  #scroll-to-back:hover {
    background-image: url('<?php echo base_url("docs/b.scroll-to-back-hover.png"); ?>');
    background-repeat: no-repeat;
    width: 76px;
    height: 76px;
    transition: background-image 0.6s ease;
  }

  .btn-download {
    position: relative;
    z-index: 10;
  }

  .btn-download:hover {
    content: url('<?php echo base_url("docs/btn-download-hover.png"); ?>');
    position: relative;
    z-index: 10;
  }

  .mt-gi {
    margin-top: 150px;
  }

  .carousel-indicators {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1px;
    /* ลดระยะห่างระหว่างไอคอน */
    bottom: -40px;
    margin-left: 380px;
  }

  .carousel-indicators button {
    background: none;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    margin: 0;
  }

  .carousel-indicators button .bi-diamond-fill {
    color: #D9D9D9;
    /* สีของไอคอนเพชร สามารถเปลี่ยนได้ตามต้องการ */
  }

  .carousel-indicators button.active .bi-diamond-fill {
    color: #ff00ff;
    /* สีของไอคอนเพชรเมื่อ active สามารถเปลี่ยนได้ตามต้องการ */
  }


  /* ไฟลอยขึ้นบน animation */
  @keyframes fadeInOutDownUp {
    0% {
      top: 400px;
      opacity: 2;
      visibility: visible;
    }

    100% {
      top: -100px;
      opacity: 0;
    }
  }



  .dot-updown-animation-1,
  .dot-updown-animation-2,
  .dot-updown-animation-3,
  .dot-updown-animation-4,
  .dot-updown-animation-5,
  .dot-updown-animation-6,
  .dot-updown-animation-7,
  .dot-updown-animation-8,
  .dot-updown-animation-9,
  .dot-updown-animation-10 {
    position: absolute;
    z-index: 4;
    visibility: hidden;
  }

  .console-container {
    font-size: 24px;
    text-align: center;
    height: 171px;
    width: 360px;
    display: block;
    position: relative;
    color: white;
    top: 55px;
    bottom: 0;
    left: 90px;
    right: 0;
    margin: auto;
    font-style: normal;
    font-weight: 400;
  }

  .console-underscore {
    display: inline-block;
    position: relative;
    top: -0.14em;
    left: 10px;
  }

  .hidden {
    visibility: hidden;
  }

  .bg-doc-off-head {
    border-radius: 34px 34px 0px 0px;
    border: 1px solid var(--main, #47B5FF);
    background: var(--main, #47B5FF);
    width: 1400px;
    height: 70px;
    flex-shrink: 0;
    margin-left: 10px;
  }

  .bg-doc-off-content {
    width: 1400px;
    height: auto;
    background: var(--sky, rgba(109, 207, 246, 0.30));
    padding-bottom: 15px;
  }

  .bg-doc-off-content-white {
    width: 1400px;
    height: auto;
    background-color: #fff;
    padding-bottom: 15px;
  }

  .box-time {
    width: 75.805px;
    height: 70.148px;
    flex-shrink: 0;
    border-radius: 14.316px;
    background: #FFDBEE;
    padding-top: 10px;
  }

  .font-pr-media-day {
    color: #002D53;
    text-align: center;
    font-family: Inter;
    font-size: 25.769px;
    font-style: normal;
    font-weight: 600;
    line-height: 100%;
    /* 25.769px */
  }

  .font-pr-media-mon {
    color: #002D53;
    text-align: center;
    font-family: Inter;
    font-size: 14.316px;
    font-style: normal;
    font-weight: 600;
    line-height: 100%;
    /* 14.316px */
  }

  .font-pr-media-head {
    color: #000;
    font-family: Kanit;
    font-size: 18px;
    font-style: normal;
    font-weight: 300;
    line-height: normal;
  }

  .font-head-doc-off {
    color: #FFF;
    font-family: Kanit;
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
  }

  .font-pr-media-detail {
    color: #000;
    font-family: Kanit;
    font-size: 22px;
    font-style: normal;
    font-weight: 300;
    line-height: normal;
  }

  .most_urgent {
    color: red;
    font-weight: 400;
  }

  .very_urgent {
    color: orangered;
    font-weight: 400;
  }

  .green-color {
    color: green;
    font-weight: 400;
  }

  .line-ellipsis-dla1 {
    width: 250px;
    /* ปรับขนาดตามต้องการ */
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
  }

  .line-ellipsis-dla2 {
    width: 800px;
    /* ปรับขนาดตามต้องการ */
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
  }

  .news-dla-prov {
    padding-top: 30px;
    z-index: 4;
    position: relative;
  }

  .line-ellipsis-dla-prov2 {
    width: 670px;
    /* ปรับขนาดตามต้องการ */
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
  }

  .sun-cartoon-animation {
    z-index: 2;
    position: absolute;
    margin-left: 31%;
    margin-top: 35px;
  }

  .sun-cartoon-animation2 {
    z-index: 2;
    position: absolute;
    margin-left: 25%;
    margin-top: 60px;
  }

  .sun-cartoon-animation-other {
    z-index: 2;
    position: absolute;
    margin-left: 25%;
    margin-top: 150px;
  }

  .cloud-cartoon-animation-other {
    position: absolute;
    white-space: nowrap;
    animation: fadeinleftoutright 50s linear infinite;
    z-index: 1;
    visibility: hidden;
    padding-top: 160px;
  }

  .cloud-cartoon-animation {
    position: absolute;
    white-space: nowrap;
    animation: fadeinleftoutright 50s linear infinite;
    z-index: 1;
    visibility: hidden;
    /* ซ่อนภาพก่อนเริ่มแอนิเมชั่น */
  }

  .cloud-cartoon-animation-1 {
    margin-top: 120px;
  }

  .cloud-cartoon-animation-2 {
    margin-top: 50px;
    animation-delay: 5s;

  }

  .cloud-cartoon-animation-3 {
    margin-top: 140px;
    animation-delay: 10s;

  }

  .cloud-cartoon-animation-4 {
    margin-top: 60px;
    animation-delay: 15s;

  }

  .cloud-cartoon-animation-5 {
    margin-top: 160px;
    animation-delay: 15.2s;
  }

  .pages-head {
    padding-top: 40px;
  }

  .underline-hover {
    text-decoration: underline;
    color: inherit;
  }

  .underline-hover:hover {
    color: blue;
  }

  .fade-container {
    position: relative;
    height: 500px;
    /* ปรับความสูงตามที่ต้องการ */
    width: 100%;
    /* ปรับความกว้างตามที่ต้องการ */
  }

  .fade-content {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0.6;
    /* เริ่มต้นที่ความโปร่งใส */
    transition: opacity 1s linear;
    /* ใช้ transition เพื่อทำให้การเปลี่ยนแปลงความโปร่งใสเนียนขึ้น */
    z-index: 0;
    /* ซ่อน div ที่ไม่ได้แสดงอยู่ */
    display: none;
    /* ซ่อน div ที่ไม่ได้ active */
  }

  .fade-content.active {
    opacity: 1;
    /* ความโปร่งใสเต็มที่เมื่อ div มีคลาส active */
    z-index: 1;
    /* ทำให้ div ที่ active อยู่เหนือ div อื่นๆ */
    display: block;
    /* แสดง div ที่กำลังใช้งาน */
  }

  .wel-g1-bg {
    background-image: url('<?php echo base_url("docs/bg-welcome-g1v2.png"); ?>');
    position: absolute;
    width: 1920px;
    height: 767px;
    z-index: 2;
  }

  .wel-g1-sky {
    background-image: url('<?php echo base_url("docs/wel-g-sky.png"); ?>');
    position: absolute;
    background-repeat: no-repeat;
    background-size: 100% 1100px;
    width: 1920px;
    height: 170px;
    overflow: hidden;
    background-position: top;
    animation: move-up-sky-bg 30s linear infinite;
  }

  @keyframes move-up-sky-bg {
    0% {
      background-position: top;
    }

    100% {
      background-position: bottom;
    }
  }

  .wel-g1-cloud-animation {
    position: absolute;
    white-space: nowrap;
    animation: fadeinleftoutright-g1 30s linear infinite;
    z-index: 1;
    visibility: hidden;
    /* ซ่อนภาพก่อนเริ่มแอนิเมชัน */
  }

  .wel-g1-cloud-animation-1 {
    margin-top: 27%;
  }

  .wel-g1-cloud-animation-2 {
    margin-top: 27%;
    animation-delay: 12s;
  }

  @keyframes fadeinleftoutright-g1 {
    0% {
      left: -600px;
      opacity: 0;
      visibility: hidden;
    }

    5% {
      left: 5%;
      opacity: 0;
      visibility: visible;
    }

    6% {
      left: 6%;
      opacity: 0.5;
    }

    50% {
      left: 50%;
      opacity: 1;
    }

    90% {
      left: 90%;
      opacity: 0;
    }

    100% {
      left: 100%;
      opacity: 0;
      visibility: hidden;
    }
  }

  .wel-image-container {
    display: flex;
    flex-direction: column;
    /* จัดวางองค์ประกอบในแนวตั้ง */
    align-items: center;
    /* จัดกึ่งกลางองค์ประกอบในแนวนอน */
    margin-left: 80px;
    /* ค่าที่คุณตั้งไว้ */
    margin-top: -40px;
    /* ค่าที่คุณตั้งไว้ */
  }

  .wel-image-container img {
    animation: welmoveUpDown 3s infinite;
    /* เรียกใช้อนิเมชั่น */
  }

  .wel-image-container img:hover {
    animation-play-state: paused;
    /* หยุดอนิเมชั่นเมื่อเมาส์ชี้ */
  }

  @keyframes welmoveUpDown {

    0%,
    100% {
      transform: translateY(0);
      /* ตำแหน่งเริ่มต้นและสุดท้าย */
    }

    50% {
      transform: translateY(-20px);
      /* ตำแหน่งเมื่อขยับขึ้น */
    }
  }


  .wel-font-travel {
    color: #000;
    text-align: center;
    -webkit-text-stroke-width: 0.5;
    -webkit-text-stroke-color: var(--, #FFF);
    font-family: "Noto Looped Thai UI";
    font-size: 14px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
  }


  @keyframes CenterOutRightWel {
    0% {
      left: 35%;
      opacity: 1;
    }

    100% {
      left: 100%;
      opacity: 0;
    }
  }

  .wel-g1-animation-1 {
    position: absolute;
    white-space: nowrap;
    animation: CenterOutRightWel 17s linear;
    animation-delay: 1s;
    left: 35%;
    top: 5%;
  }

  /* ตั้งค่าการหายไปให้กับ div หลัก */
  .wel-g1-animation-1 {
    animation-fill-mode: forwards;
    /* เก็บสถานะสุดท้ายของ animation */
  }

  /* ใช้ pseudo-element ::after เพื่อทำให้ div หลักหายไปหลังแอนิเมชันจบ */
  .wel-g1-animation-1::after {
    content: '';
    animation: disappear 0s 17s forwards;
    /* ซ่อน div หลังจากแอนิเมชันหลักจบลง */
  }

  @keyframes RightOutRightWel {
    0% {
      left: 60%;
      opacity: 1;
    }

    100% {
      left: 100%;
      opacity: 0;
    }
  }

  .wel-g1-animation-2 {
    position: absolute;
    white-space: nowrap;
    animation: RightOutRightWel 12s linear;
    animation-delay: 1s;
    left: 60%;
    top: 3%;
  }

  /* Keyframes ใหม่เพื่อทำให้ div หายไป */
  @keyframes disappear {
    to {
      visibility: hidden;
      /* ซ่อน div */
    }
  }

  /* ตั้งค่าการหายไปให้กับ div หลัก */
  .wel-g1-animation-2 {
    animation-fill-mode: forwards;
    /* เก็บสถานะสุดท้ายของ animation */
  }

  /* ใช้ pseudo-element ::after เพื่อทำให้ div หลักหายไปหลังแอนิเมชันจบ */
  .wel-g1-animation-2::after {
    content: '';
    animation: disappear 0s 12s forwards;
    /* ซ่อน div หลังจากแอนิเมชันหลักจบลง */
  }

  @keyframes CenterOutleftWel {
    0% {
      left: 15%;
      opacity: 1;
    }

    100% {
      left: 0;
      opacity: 0;
    }
  }

  .wel-g1-animation-3 {
    position: absolute;
    white-space: nowrap;
    animation: CenterOutleftWel 5s linear;
    animation-delay: 1s;
    left: 15%;
    top: 3%;
  }

  /* ตั้งค่าการหายไปให้กับ div หลัก */
  .wel-g1-animation-3 {
    animation-fill-mode: forwards;
    /* เก็บสถานะสุดท้ายของ animation */
  }

  /* ใช้ pseudo-element ::after เพื่อทำให้ div หลักหายไปหลังแอนิเมชันจบ */
  .wel-g1-animation-3::after {
    content: '';
    animation: disappear 0s 5s forwards;
    /* ซ่อน div หลังจากแอนิเมชันหลักจบลง */
  }

  .wel-g2-bg1 {
    background-image: url('<?php echo base_url("docs/wel-g2-bg1.png"); ?>');
    position: absolute;
    width: 1920px;
    height: 555px;
    top: 0;
    z-index: 2;
  }

  .wel-g2-cloud-animation {
    position: absolute;
    white-space: nowrap;
    animation: fadeinleftoutright-g1 50s linear infinite;
    z-index: 1;
    visibility: hidden;
    /* ซ่อนภาพก่อนเริ่มแอนิเมชัน */
  }


  .wel-g2-cloud-animation-1 {
    margin-top: 254px;
  }

  .wel-g2-cloud-animation-2 {
    margin-top: 36px;
    animation-delay: 8s;
  }

  .wel-g2-cloud-animation-3 {
    margin-top: 220px;
    animation-delay: 15s;

  }

  .wel-g2-cloud-animation-4 {
    margin-top: 36px;
    animation-delay: 22s;
  }

  .wel-g2-bg2 {
    background-image: url('<?php echo base_url("docs/wel-g2-bg5.png"); ?>');
    position: absolute;
    width: 1920px;
    height: 804px;
    z-index: 3;
  }


  .wel-g2-visit {
    width: 849px;
    height: 341px;
    background: rgba(255, 255, 230, 0.50);
    backdrop-filter: blur(3px);
    border-radius: 15px;
    margin-left: 27%;
    margin-top: 6.5%;
    padding-top: 30px;
    /* เพิ่มการตั้งค่าแอนิเมชัน */
    animation: fadeInWel 5s ease-out;
    /* 2s = 2 วินาที, ปรับความยาวตามต้องการ */
    opacity: 0;
    /* เริ่มต้นด้วยความโปร่งใส 0 */
    /* transform: translateY(20px); */
    /* เริ่มจากตำแหน่งที่ต่ำกว่าเล็กน้อย */
    animation-fill-mode: forwards;
    /* คงสถานะสุดท้ายของแอนิเมชัน */
    animation-delay: 12s;
  }

  @keyframes fadeInWel {
    0% {
      opacity: 0;
      /* transform: translateY(20px); */
      /* เริ่มจากตำแหน่งที่ต่ำกว่าเล็กน้อย */
    }

    100% {
      opacity: 1;
      /* transform: translateY(0); */
      /* ตำแหน่งปกติ */
    }
  }

  .font-wel-g2-visit-head {
    background-image: url('<?php echo base_url("docs/wel-g2-box.png"); ?>');
    background-repeat: no-repeat;
    color: #724118;
    text-align: center;
    font-size: 45px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    width: 510px;
    height: 90px;
    padding-top: 10px;
    animation: fadeInWel 5s ease-out forwards;
    /* animation-delay: 13s; */
    opacity: 0;

  }

  .font-wel-g2-visit-content {
    color: #194413;
    text-align: center;
    -webkit-text-stroke-width: 1;
    -webkit-text-stroke-color: #FFF;
    font-family: Thasadith;
    font-size: 35px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
  }

  .font-wel-g2-visit-content2 {
    color: #FFF;
    text-align: center;
    font-family: Sriracha;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    animation: fadeInWel 5s ease-out forwards;
    opacity: 0;
  }

  .sriracha-regular {
    font-family: "Sriracha", cursive;
    font-weight: 400;
    font-style: normal;
  }

  /* .cloud-header1 { */
  /* z-index: 1; */
  /* margin-top: -390px; */
  /* position: relative; */
  /* margin-left: -20px; */
  /* animation: floatAndFade1 15s linear infinite; */
  /* background-color: #000; */
  /* position: relative; */
  /* } */

  .cloud-header2 {
    z-index: 3;
    margin-top: 180px;
    position: relative;
    margin-left: 80px;
    animation: floatAndFade2 25s linear infinite;
  }

  @keyframes floatAndFade2 {
    0% {
      opacity: 1;
      transform: translateX(0);
    }

    90% {
      opacity: 0;
      transform: translateX(600px);
      /* ปรับระยะทางได้ตามต้องการ */
    }

    100% {
      opacity: 0;
      transform: translateX(600px);
      /* ปรับระยะทางได้ตามต้องการ */
    }
  }

  .font-wel-g2-visit-content span,
  .font-wel-g2-visit-content2 span {
    opacity: 0;
    animation: fadeIn 0.5s forwards;
  }

  @keyframes fadeIn {
    to {
      opacity: 1;
    }
  }

  .cloud-header1 {
    opacity: 0;
    position: relative;
    animation: none;
    margin-top: -390px;
    position: relative;
    /* margin-left: -20px; */
    animation: floatAndFade1 30s linear infinite;
  }

  @keyframes floatAndFade1 {
    0% {
      opacity: 1;
      left: -400px;
    }

    90% {
      opacity: 0;
    }

    100% {
      opacity: 0;
      left: 600px;
      /* ปรับระยะทางได้ตามต้องการ */
    }
  }

  .font-heder-service {
    color: #000;
    text-align: center;
    font-family: "Noto Looped Thai UI";
    font-size: 22px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
  }

  .text-btm {
    padding-top: 210px;
    margin-left: -1100px;
    z-index: 2;
  }

  /* .text-btm .text-center span {
    display: inline-block;
    opacity: 0;
    transform: translateX(-10px);
    Adjust the movement
    animation: fadeInLeft 0.5s forwards;
  } */

  @keyframes fadeInLeft {
    0% {
      opacity: 0;
      transform: translateX(-10px);
      /* Start position */
    }

    100% {
      opacity: 1;
      transform: translateX(0);
      /* End position */
    }
  }

  .text-btm2 {
    position: relative;
    padding-top: 130px;
    /* padding-left: 1150px; */
    z-index: 3;
  }

  /* .text-btm2 .text-center span {
    display: inline-block;
    opacity: 0;
    transform: translateX(-20px);
    animation: fadeInLeft 0.5s forwards;
    letter-spacing: 2px; */
  /* เพิ่มระยะห่างระหว่างตัวอักษร */
  /* line-height: 1.5px; */
  /* เพิ่มระยะห่างระหว่างบรรทัด */
  /* } */

  @keyframes fadeInLeft {
    0% {
      opacity: 0;
      transform: translateX(-20px);
    }

    100% {
      opacity: 1;
      transform: translateX(0);
    }
  }

  .bg-light-header {
    /* background-color: #000; */
    z-index: 2;
    position: absolute;
    margin-left: 170px;
    overflow: hidden;
    /* ป้องกันภาพหลุดออกจากขอบ */
  }

  .wel-g2-light {
    position: relative;
    animation: moveRight 15s infinite ease-in-out;
    /* ใช้ easing function เพื่อให้การเคลื่อนไหวเนียนขึ้น */
  }

  @keyframes moveRight {
    0% {
      left: 0;
    }

    50% {
      left: 100px;
      /* ปรับค่าตามที่ต้องการ */
    }

    100% {
      left: 0;
    }
  }


  .wel-g2-animation-3 {
    position: absolute;
    /* หรือ relative ขึ้นอยู่กับตำแหน่งที่ต้องการ */
    animation: moveLeftRight 5s infinite alternate;
  }

  /* Keyframes สำหรับการขยับซ้ายและขวา */
  @keyframes moveLeftRight {
    0% {
      left: -100px;
      /* จุดเริ่มต้นที่ด้านซ้ายสุด */
    }

    100% {
      left: 0;
      /* จุดสิ้นสุดที่ด้านขวาสุด ปรับค่า 100px ตามต้องการเพื่อระยะห่าง */
    }
  }

  .bg-cloud-header {
    position: relative;
    width: 100%;
    height: 200px;
    margin-top: 20px;
    /* ตั้งค่าความสูงของ header ตามที่ต้องการ */
    overflow: hidden;
    /* ป้องกันเมฆไม่ให้หลุดออกจากขอบ */
    /* background: #87CEEB; */
    /* ใส่สีพื้นหลังท้องฟ้า */
  }

  .wel-g2-cloud {
    position: absolute;
    bottom: 20px;
    /* ตั้งค่าความสูงของเมฆจากด้านล่าง */
    left: -200px;
    /* ตั้งค่าเริ่มต้นที่ตำแหน่งซ้ายสุด */
    animation: moveCloud 80s linear infinite;
    /* ตั้งค่าเวลาและรูปแบบการเคลื่อนไหว */
  }

  @keyframes moveCloud {
    0% {
      left: -200px;
      /* จุดเริ่มต้นของเมฆ */
    }

    100% {
      left: 100%;
      /* จุดสิ้นสุดของเมฆ */
    }
  }

  .bg-water-header {
    position: absolute;
    overflow: hidden;
    width: 1920px;
  }

  .wel-g2-water {
    margin-top: 180px;
    margin-left: 150px;
    position: relative;
    opacity: 1;
    animation: waterfade 10s ease-in-out infinite;
    /* animation-delay: 0s; */
    /* background-color: #000; */
  }

  @keyframes waterfade {
    0% {
      transform: scale(1);
      opacity: 1;
    }

    50% {
      transform: scale(1.2);
      opacity: 1;
    }

    100% {
      transform: scale(1);
      opacity: 1;
    }
  }

  .bg-nav-sky-other {
    background-image: url('<?php echo base_url("docs/bg-nav-sky-other.png"); ?>');
    position: absolute;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    /* ขนาดเต็ม 1920px x 600px */
    width: 1920px;
    height: 555px;
    /* แสดงความสูงที่คุณต้องการ */
    overflow: hidden;
    position: absolute;
    background-position: top;
    /* เริ่มจากด้านบน */
  }

  .bg-nav-home-other {
    background-image: url('<?php echo base_url("docs/bg-nav-home-other.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    position: relative;
    z-index: 3;
    width: 1920px;
    height: 700px;
    animation: zoomOut 9s forwards;
  }

  .wel-g2-animation-cloud-1 {
    position: absolute;
    z-index: 1;
    top: 25px;
    animation: wel-g2-anima-cloud 40s linear infinite;
    animation-delay: 12s;
    visibility: hidden;
  }

  .wel-g2-animation-cloud-2 {
    position: absolute;
    z-index: 1;
    top: 15px;
    animation: wel-g2-anima-cloud 35s linear infinite;
    animation-delay: 8s;
    visibility: hidden;
  }

  .wel-g2-animation-cloud-3 {
    position: absolute;
    z-index: 1;
    top: 15px;
    animation: wel-g2-anima-cloud 35s linear infinite;
    animation-delay: 5s;
    visibility: hidden;
  }

  .wel-g2-animation-cloud-4 {
    position: absolute;
    z-index: 1;
    top: 230px;
    animation: wel-g2-anima-cloud 35s linear infinite;
    visibility: hidden;
  }

  @keyframes wel-g2-anima-cloud {
    0% {
      opacity: 0;
      left: 0;
      visibility: visible;

    }

    25% {
      opacity: 1;
      /* จุดเริ่มต้นของเมฆ */
    }

    75% {
      opacity: 1;
      /* จุดเริ่มต้นของเมฆ */
    }

    100% {
      left: 100%;
      opacity: 1;
      /* จุดสิ้นสุดของเมฆ */
    }
  }

  .light-nav-haeder {
    /* background-color: #000; */
    margin-top: -100px;
    padding-left: 190px;
    z-index: 5;
    position: absolute;
  }

  .wel-light-nav {
    animation: rotate-animation360 50s infinite linear;
  }

  @keyframes rotate-animation360 {
    0% {
      transform: rotate(0deg);
    }

    50% {
      transform: rotate(180deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }


  .border-odata {
    /* display: flex; */
    width: 1460px;
    padding: 16px;
    justify-content: space-between;
    align-items: center;
    border-radius: 16px;
    border: 1px solid #1D5F0E;
    box-shadow: 1px 2px 4px 0px rgba(172, 219, 133, 0.25);
    margin-top: 10px;
  }

  .bg-btn-head-elderly-aw {
    background-image: url('<?php echo base_url("docs/head-elderly-aw.png"); ?>');
    background-repeat: no-repeat;
    width: 580px;
    height: 58px;
    position: relative;
    z-index: 4;
    font-size: 30px;
    color: #000;
    /* padding-left: 45px; */
    text-align: center;
    padding-top: 5px;
  }

  .bg-btn-head-elderly-aw:hover {
    background-image: url('<?php echo base_url("docs/head-elderly-aw-active-hover.png"); ?>');
    background-repeat: no-repeat;
    width: 580px;
    height: 58px;
    position: relative;
    z-index: 4;
  }

  .bg-btn-head-elderly-aw-active {
    background-image: url('<?php echo base_url("docs/head-elderly-aw-active.png"); ?>');
    background-repeat: no-repeat;
    width: 580px;
    height: 58px;
    position: relative;
    z-index: 4;
    font-size: 30px;
    color: #000;
    /* padding-left: 45px; */
    text-align: center;
    padding-top: 5px;
  }

  .font-elderly-aw-ods {
    color: #000;
    font-family: "Noto Looped Thai";
    font-size: 32px;
    font-style: normal;
    font-weight: 500;
    line-height: 30px;
  }

  .box-form-elderly-aw-ods-download {
    border-radius: 16px;
    background: #FFFFE1;
    padding: 24px;
    gap: 16px;
    margin-top: 30px;
    margin-bottom: 40px;
  }

  .font-form-elderly-aw-ods-download {
    color: #000;
    font-family: "Noto Looped Thai";
    font-size: 24px;
    font-style: normal;
    font-weight: 400;
    line-height: 33.421px;
    /* 139.254% */
  }

  .space-between {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .btn-download-el-aw {
    background-image: url('<?php echo base_url("docs/btn-download-el-aw.png"); ?>');
    background-repeat: no-repeat;
    width: 171px;
    height: 50px;
    color: #FFF;
    font-feature-settings: 'clig' off, 'liga' off;
    font-family: "Noto Looped Thai";
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    padding: 10px 20px;
  }

  .btn-download-el-aw:hover {
    background-image: url('<?php echo base_url("docs/btn-download-el-aw-hover.png"); ?>');
    background-repeat: no-repeat;
    width: 171px;
    height: 50px;
  }

  .font-note-elderly-aw {
    color: #FF4343;
    leading-trim: both;
    text-edge: cap;
    font-feature-settings: 'clig' off, 'liga' off;
    font-family: "Noto Looped Thai UI";
    font-size: 24px;
    font-style: normal;
    font-weight: 400;
    line-height: 32px;
    /* 133.333% */
  }

  .wel-g3-bg1 {
    background-image: url('<?php echo base_url("docs/wel-g3-bg1.png"); ?>');
    position: absolute;
    width: 1920px;
    height: 804px;
    z-index: 3;
  }

  .wel-light-animation-1,
  .wel-light-animation-2,
  .wel-light-animation-3,
  .wel-light-animation-4,
  .wel-light-animation-5,
  .wel-light-animation-6,
  .wel-light-animation-7,
  .wel-light-animation-8,
  .wel-light-animation-9,
  .wel-light-animation-10 {
    position: absolute;
    visibility: hidden;
  }

  /* ดาวตก animation  */
  @keyframes fadeTopInDownOut {

    0% {
      top: -100px;
      opacity: 1;
      visibility: visible;
    }


    100% {
      top: 620px;
      /* ตำแหน่งที่ออกไป */
      opacity: 0;
    }
  }


  .local-sun-big {
    margin-top: -350px;
    padding-left: 650px;
    z-index: 2;
    position: absolute;
  }

  .local-sun-left {
    margin-top: 50px;
    padding-left: 40px;
    z-index: 1;
    position: absolute;
  }

  .local-sun-left img {
    transform-origin: right center;
    /* ตั้งจุดเริ่มต้นของการยืดหดให้อยู่ทางขวา */
    animation: stretchShrink 5s infinite;
    /* ใช้แอนิเมชันยืดหดซ้ำไปซ้ำมา */
  }

  @keyframes stretchShrink {

    0%,
    100% {
      transform: scaleX(1);
      /* ขนาดปกติ */
    }

    50% {
      transform: scaleX(1.2);
      /* ยืดขนาดออกมาทางซ้ายมากขึ้น */
    }

    75% {
      transform: scaleX(0.9);
      /* หดขนาดลงเล็กน้อย */
    }
  }

  @keyframes fadeInAndGrowLeft {
    0% {
      opacity: 0;
      transform: scale(0.5) translateX(600px);
      /* เริ่มต้นที่ขนาดครึ่งหนึ่งและอยู่ใกล้กันทางขวา */
    }

    100% {
      opacity: 1;
      transform: scale(1) translateX(0);
      /* ขยายกลับมาที่ขนาดเดิมและตำแหน่งเดิม */
    }
  }

  @keyframes fadeInAndGrowRight {
    0% {
      opacity: 0;
      transform: scale(0.5) translateX(300px);
      /* เริ่มต้นที่ขนาดครึ่งหนึ่งและอยู่ใกล้กันทางซ้าย */
    }

    100% {
      opacity: 1;
      transform: scale(1) translateX(0);
      /* ขยายกลับมาที่ขนาดเดิมและตำแหน่งเดิม */
    }
  }

  .local-pol-left {
    animation: fadeInAndGrowLeft 5s ease-in-out forwards;
    /* 5s คือความช้าของการ fade in */
    padding-left: 790px;
    padding-top: 140px;
    z-index: 3;
    position: absolute;
  }

  .local-pol-right {
    animation: fadeInAndGrowRight 5s ease-in-out forwards;
    /* 5s คือความช้าของการ fade in */
    padding-left: 1400px;
    padding-top: 120px;
    z-index: 3;
    position: absolute;
  }

  .dot-g3-light-animation-1 {
    position: absolute;
    padding-top: 200px;
    padding-left: 50px;
  }

  .container-wel-g3-animation {
    position: absolute;
    width: 1920px;
    height: 500px;
    overflow: hidden;
    z-index: 3 !important;
  }

  @keyframes fall {
    0% {
      top: -300px;
      opacity: 1;
      /* เริ่มต้นอยู่นอกจอ */
    }

    100% {
      top: 500px;
      opacity: 0;
      /* ตกลงมาเต็มความสูงของ container */
    }
  }

  @keyframes blink-wel-g3 {
    0% {
      opacity: 0;
    }

    10% {
      opacity: 1;
    }

    50% {
      opacity: 0;
    }

    60% {
      opacity: 1;
    }

    80% {
      opacity: 0;
    }

    100% {
      opacity: 0;
    }
  }

  .container-wel-g3-animation img {
    animation: fall 10s linear infinite;
  }

  .wel-navbar {
    position: fixed;
    top: 40%;
    left: 0;
    transform: translateY(-50%);
    padding: 10px;
    border-radius: 0 10px 10px 0;
    transition: left 0.5s ease-in-out, opacity 0.5s ease-in-out;
    opacity: 1;
    /* เริ่มต้นด้วยการแสดง */
    background-image: url('<?php echo base_url("docs/bg-menu-bar1.png"); ?>');
    width: 91px;
    height: 461px;
    z-index: 9999;
    /* เพิ่ม z-index เพื่อให้มั่นใจว่าอยู่ข้างบนสุด */
  }

  .wel-navbar.hide {
    left: -235px;
  }

  .text-wel-menubar {
    position: absolute;
    /* ใช้ fixed เพื่อให้ไม่ขยับ */
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    transform: rotate(90deg);
    /* หมุนข้อความ 90 องศา */
    transform-origin: right center;
    /* ตำแหน่งจุดหมุน */
    margin-left: 30px;
    margin-top: -240px;
  }

  .font-text-menubar-wel {
    color: #FFF;
    text-align: center;
    /* font-family: "Noto Looped Thai UI"; */
    font-size: 32px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    white-space: nowrap;
    /* ป้องกันไม่ให้ข้อความแตกบรรทัด */
  }

  .hide-button {
    position: fixed;
    top: 68%;
    left: 10px;
    transform: translateY(-50%);
    padding: 0;
    width: 28px;
    /* กำหนดขนาดของปุ่ม */
    height: 28px;
    cursor: pointer;
    border: none;
    background: none;
    /* เอาพื้นหลังออก */
    background-image: url('<?php echo base_url("docs/hidenavbar1.png"); ?>');
    /* เปลี่ยนเป็น URL รูปภาพของคุณ */
    background-size: cover;
    background-position: center;
    z-index: 10000;
    transition: background-image 0.6s ease;
    margin-left: 15px;
  }

  .hide-button:hover {
    background-image: url('<?php echo base_url("docs/hidenavbar1_over.png"); ?>');
  }

  .show-button {
    position: fixed;
    top: 68%;
    left: 10px;
    transform: translateY(-50%);
    padding: 0px;
    width: 28px;
    /* กำหนดขนาดของปุ่ม */
    height: 28px;
    cursor: pointer;
    border: none;
    background: none;
    /* เอาพื้นหลังออก */
    background-image: url('<?php echo base_url("docs/shownavbar1.png"); ?>');
    /* เปลี่ยนเป็น URL รูปภาพของคุณ */
    background-size: cover;
    background-position: center;
    z-index: 10000;
    transition: background-image 0.6s ease;
    margin-left: 15px;
  }

  .show-button:hover {
    background-image: url('<?php echo base_url("docs/shownavbar1_over.png"); ?>');
  }

  .wel-navbar-list {
    margin-top: 50px;
    margin-left: 5px;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: absolute;

  }

  .navbar-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 4px 0;
    transition: transform 0.5s ease, font-size 0.5s ease;
  }

  .navbar-item:hover {
    transform: scale(1.10);
    /* ปรับขนาดการขยาย */
  }

  .navbar-item img {
    transition: transform 0.5s ease;
  }

  .navbar-item:hover img {
    transform: scale(1.10);
    /* ปรับขนาดการขยาย */
  }

  .navbar-item:hover .font-text-icon-wel {
    color: #214A1B;
    /* เปลี่ยนสีของข้อความเมื่อเมาส์ชี้ที่รูป */
  }

  .font-text-icon-wel {
    color: #FFF;
    text-align: center;
    font-family: "Noto Looped Thai";
    font-size: 12px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    transition: transform 0.3s ease, font-size 0.3s ease;
    padding-top: 10px;
  }

  .modal {
    display: none;
    position: fixed;
    z-index: 10000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background-color: rgba(0, 0, 0, 0.7);
    animation: fadeIn 0.5s;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .modal-content {
    background: #ffffff;
    color: #333333;
    border-radius: 10px;
    margin: 10% auto;
    padding: 30px;
    border: 1px solid #dddddd;
    width: 50%;
    max-width: 600px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    position: relative;
    animation: slideIn 0.5s, shake 0.5s ease-in-out 0.5s 1;
    text-align: center;
  }

  .close-button {
    color: #aaaaaa;
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 28px;
    font-weight: bold;
    transition: color 0.3s;
  }

  .close-button:hover,
  .close-button:focus {
    color: #333333;
    text-decoration: none;
    cursor: pointer;
  }

  .modal-title {
    font-size: 28px;
    margin: 0;
    padding-bottom: 20px;
    border-bottom: 2px solid #dddddd;
  }

  .modal-message {
    font-size: 26px;
    margin-top: 20px;
    color: #000;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  @keyframes slideIn {
    from {
      transform: translateY(-50px);
      opacity: 0;
    }

    to {
      transform: translateY(0);
      opacity: 1;
    }
  }

  @keyframes shake {

    0%,
    100% {
      transform: translateX(0);
    }

    10%,
    30%,
    50%,
    70%,
    90% {
      transform: translateX(-10px);
    }

    20%,
    40%,
    60%,
    80% {
      transform: translateX(10px);
    }
  }

  /** swiper otop ******************************************************* */
  .mySwiperOtop {
    width: 100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    overflow: hidden;
    list-style: none;
    padding: 0px;
    z-index: 1;
    display: block;
  }

  swiper-container {
    width: 100%;
    height: auto;
  }

  swiper-slide {
    text-align: center;
    font-size: 18px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  swiper-slide img {
    display: block;
    width: 120px;
    height: 100px;
    object-fit: cover;
  }

  swiper-container {
    width: 100%;
    height: 300px;
    margin: 20px auto;
  }

  /** ************************************************************************ */

  .messenger-container {
    position: fixed;
    bottom: 150px;
    left: 10px;
    z-index: 999;
    display: flex;
    align-items: center;
  }

  .bg-messenger {
    background-image: url('<?php echo base_url("docs/messenger.png"); ?>');
    width: 100px;
    height: 101px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: transform 0.3s ease, background-image 0.6s ease;
  }

  .bg-messenger:hover {
    background-image: url('<?php echo base_url("docs/messenger_hover.png"); ?>');
  }

  .font-messenger {
    color: #3454A5;
    text-align: center;
    font-family: "Noto Looped Thai";
    font-size: 26px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    padding-top: 150px;
  }

  .close-button-slide-messenger {
    position: absolute;
    top: -20px;
    right: -20px;
    border: none;
    cursor: pointer;
    width: 28px;
    height: 28px;
    background-image: url('docs/close_messenger.png');
    background-size: cover;
    background-position: center;
    transition: background-image 0.3s ease;
    z-index: 1000;
    /* เพิ่ม z-index */
  }

  .close-button-slide-messenger:hover {
    background-image: url('docs/close_messenger_hover.png');
  }


  #messenger-icon {
    position: fixed;
    bottom: 70px;
    left: 10px;
    width: 50px;
    height: 50px;
    background-color: #0078FF;
    border-radius: 50%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: transform 0.3s ease;
    z-index: 999;
    /* position: relative; */
    /* เพิ่มเพื่อให้ tooltip ติดกับ icon */
  }

  #messenger-icon:hover {
    transform: scale(1.1);
  }

  #messenger-icon img {
    width: 30px;
    height: 30px;
  }

  .tooltip {
    visibility: hidden;
    width: auto;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px;
    position: absolute;
    z-index: 1;
    top: 50%;
    left: 110%;
    transform: translateY(-50%);
    opacity: 0;
    transition: opacity 0.3s;
  }

  #messenger-icon:hover .tooltip {
    visibility: visible;
    opacity: 1;
  }

  .bg-top-executives {
    background-image: url('<?php echo base_url("docs/bg-top-executives.png"); ?>');
    width: 688px;
    height: 359px;
  }

  .top-executives {
    color: #1C455F;
    text-align: center;
    font-family: "Noto Looped Thai UI";
    font-size: 24px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    position: absolute;
    margin-left: 36%;
    margin-top: 12px;
  }

  .bg-top-calender {
    background-image: url('<?php echo base_url("docs/bg-top-calender.png"); ?>');
    width: 602px;
    height: 396px;
    background-repeat: no-repeat;
  }

  .top-calender {
    color: #1C455F;
    text-align: center;
    font-family: "Noto Looped Thai UI";
    font-size: 24px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    position: absolute;
    margin-left: 12%;
    margin-top: 12px;
  }

  .text-run-btm-eservice {
    width: 1038px;
    height: 49px;
    margin: 0 auto;
    border-radius: 50px;
    background: #FFF;
    padding-top: 10px;
    margin-top: 10px;
  }

  .font-notify-home {
    color: #8D8D8D;
    text-align: right;
    font-family: "Noto Looped Thai UI";
    font-size: 14px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
  }

  .baimai-container {
    position: absolute;
    width: 1920px;
    height: 2300px;
    overflow: hidden;
    z-index: 1;
  }

  .baimai-animation {
    position: absolute;
    z-index: 1;
    visibility: hidden;
  }

  @keyframes movebaimai {
    0% {
      opacity: 1;
      top: -10%;
      /* เริ่มต้นที่นอกจอด้านบน */
      visibility: visible;
    }

    100% {
      top: 100%;
      /* เคลื่อนออกจากจอด้านล่าง */
      opacity: 0;
    }
  }

  .wel-text-other-all {
    position: relative;
    height: 220px;
  }

  .wel-text-other1 {
    position: absolute;
    left: 33%;
    transform: translateX(-33%);
  }

  .wel-text-other2 {
    position: absolute;
    left: 62%;
    transform: translateX(-62%);
    margin-top: -10px;
  }

  .wel-text-other1 {
    animation: topToCenter 9s forwards;
  }

  @keyframes topToCenter {
    0% {
      opacity: 1;
      top: -10%;
      /* Start outside the top of the container */
    }

    50% {
      top: 50%;
      /* Move to the center */
      opacity: 1;
    }

    100% {
      top: 50%;
      /* Stay in the center */
      opacity: 1;
    }
  }

  .wel-text-other2 {
    animation: bottomToCenter 9s forwards;
  }

  @keyframes bottomToCenter {
    0% {
      opacity: 1;
      top: 110%;
      /* Start outside the bottom of the container */
    }

    50% {
      top: 50%;
      /* Move to the center */
      opacity: 1;
    }

    100% {
      top: 50%;
      /* Stay in the center */
      opacity: 1;
    }
  }

  .egg-1 {
    position: absolute;
    z-index: 1;
    margin-top: 28.7%;
    margin-left: 0.7%;
    animation: sway-left 7s ease-in-out infinite;
    /* Add the sway animation */


  }

  .egg-2 {
    position: absolute;
    z-index: 1;
    margin-top: 29.5%;
    margin-left: 21.9%;
    animation: sway-left 7s ease-in-out infinite;
    /* Add the sway animation */

  }

  .egg-3 {
    position: absolute;
    z-index: 1;
    margin-top: 29.5%;
    margin-left: 63%;
    animation: sway-right 7s ease-in-out infinite;
    /* Add the sway animation */


  }

  .egg-4 {
    position: absolute;
    z-index: 1;
    margin-top: 28.2%;
    margin-left: 80%;
    animation: sway-right 7s ease-in-out infinite;
    /* Add the sway animation */


  }

  .egg-other-1 {
    position: absolute;
    z-index: 1;
    margin-top: 32.5%;
    margin-left: 0.7%;
    animation: sway-left 7s ease-in-out infinite;
    /* Add the sway animation */

  }

  .egg-other-2 {
    position: absolute;
    z-index: 1;
    margin-top: 33.3%;
    margin-left: 21.9%;
    animation-delay: 3s;
    animation: sway-right 7s ease-in-out infinite;
    /* Add the sway animation */

  }

  .egg-other-3 {
    position: absolute;
    z-index: 1;
    margin-top: 33.3%;
    margin-left: 63%;
    animation: sway-left 7s ease-in-out infinite;
    /* Add the sway animation */

  }

  /* Keyframes for swaying */
  @keyframes sway-left {
    0% {
      transform: translateX(0);
      /* Start at original position */
    }

    25% {
      transform: translateX(-10px);
      /* Move 10px to the left */
    }

    75% {
      transform: translateX(10px);
      /* Move 10px to the right */
    }

    100% {
      transform: translateX(0);
      /* Move back to original position */
    }
  }

  @keyframes sway-right {
    0% {
      transform: translateX(0);
      /* Start at original position */
    }

    25% {
      transform: translateX(10px);
      /* Move 10px to the left */
    }

    75% {
      transform: translateX(-10px);
      /* Move 10px to the right */
    }

    100% {
      transform: translateX(0);
      /* Move back to original position */
    }
  }

  .btn-queue {
    background-image: url('<?php echo base_url("docs/btn-queue.png"); ?>');
    width: 140px;
    height: 50px;
    position: relative;
    /* เพิ่ม position relative เพื่อใช้กับ position absolute ภายใน */
    transition: background-image 0.6s ease;
  }

  .btn-queue:hover {
    background-image: url('<?php echo base_url("docs/btn-queue-hover.png"); ?>');
    width: 140px;
    height: 50px;
    transition: background-image 0.6s ease;
  }

  .btn-queue .btn {
    width: 100%;
    height: 100%;
    background: transparent;
    /* ทำให้ปุ่มโปร่งใส */
    border: none;
    /* เอาเส้นขอบออก */
    position: absolute;
    /* ทำให้ปุ่มครอบคลุมทั้งพื้นที่ของ .btn-queue */
    top: 0;
    left: 0;
  }

  .font-label-e-service-queue {
    color: #FFF;
    font-size: 24px;
    font-weight: 500;
  }

  .queue-container {
    border: 1px solid #ddd;
    border-radius: 0px 0px 20px 20px;
    width: 1460px;
    margin: auto;
    height: auto;
  }

  .queue-container-in {
    background: #fff;
    padding: 20px;
    border-radius: 0px 0px 0px 0px;
    border: 1px solid #D9D9D9;
    height: 80px;
  }

  .queue-header {
    display: flex;
    padding: 30px;
    align-items: flex-start;
    gap: 8px;
    align-self: stretch;
    border-radius: 20px 20px 0px 0px;
    border: 1px solid #D9D9D9;
    background: #B6E1A1;
    margin-top: 50px;
    box-sizing: border-box;
    /* Ensure padding is included in element's width and height */
  }

  .queue-content {
    background: #fff;
    padding: 20px;
    border-radius: 0 0 20px 20px;
    /* overflow-y: auto; */
    /* เพิ่มการเลื่อนถ้ามีเนื้อหาเกิน */
  }

  .status-dot {
    position: relative;
    display: inline-block;
    padding-left: 20px;
  }

  .status-dot::after {
    content: "";
    position: absolute;
    top: 30px;
    left: 30px;
    width: 2px;
    height: 80px;
    background-color: #D9D9D9;
  }

  .status-container {
    position: relative;
  }

  .status-container::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 0;
    width: 2px;
    height: 100%;
    background-color: #D9D9D9;
  }

  .status-container:first-child::after {
    display: none;
  }

  .status-container-last .status-dot::after {
    display: none;
    /* ซ่อนเส้นสำหรับรายการสุดท้าย */
  }

  .status-container-last::after {
    display: none;
    /* ซ่อนเส้นสำหรับรายการสุดท้าย */
  }

  .font-queue-content {
    color: #9C9C9C;
    font-family: "Noto Looped Thai UI";
    font-size: 26px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
  }

  .font-queue-content2 {
    color: #000;
    font-family: "Noto Looped Thai UI";
    font-size: 24px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
  }

  .status-date {
    margin-top: 4px;
    margin-left: 45px;
    /* Adjust this value to move the date further to the right */
  }


  .font-label-e-service-follow-queue {
    color: #000;
    font-size: 28px;
    font-weight: 500;
  }

  .font-queue-head {
    color: #432F17;
    font-family: "Noto Looped Thai UI";
    font-size: 28px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
  }
</style>