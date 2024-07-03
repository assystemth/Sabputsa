</div>

<div class="bg-link-other">
    <img class="wipwap dot-news-animation-1" src="<?php echo base_url('docs/anime-light-home1.png'); ?>">
    <img class="wipwap dot-news-animation-2" src="<?php echo base_url('docs/anime-light-home1.png'); ?>">
    <img class="wipwap dot-news-animation-3" src="<?php echo base_url('docs/anime-light-home1.png'); ?>">
    <img class="wipwap dot-news-animation-5" src="<?php echo base_url('docs/anime-light-home1.png'); ?>">
    <img class="wipwap dot-news-animation-6" src="<?php echo base_url('docs/anime-light-home2.png'); ?>">
    <img class="wipwap dot-news-animation-15" src="<?php echo base_url('docs/anime-light-home2.png'); ?>">
    <div class="crop">
        <div class="text-center" style="position: relative; z-index: 5; margin-left: -40px; padding-top: 95px;">
            <span class="font-link">องค์การบริหารส่วนตำบลซับพุทรา เลขที่ 111 หมู่ 3 ถนนโคกยาว-บัววัฒนา ตำบลซับพุทรา อำเภอชนแดน จังหวัดเพชรบูรณ์ 67150<br>
                โทรศัพท์ 056-713-895 </span>
        </div>
        <div class="sun-cartoon-animation-other text-center">
            <img class="wel-light-nav" src="<?php echo base_url('docs/sun-cartoon-animation.png'); ?>" width="144">
        </div>
        <img class="cloud-cartoon-animation-other cloud-cartoon-animation-1" src="<?php echo base_url('docs/animation-cloud-cartoon1.png'); ?>">
        <img class="cloud-cartoon-animation-other cloud-cartoon-animation-2" src="<?php echo base_url('docs/animation-cloud-cartoon2.png'); ?>">
        <img class="cloud-cartoon-animation-other cloud-cartoon-animation-3" src="<?php echo base_url('docs/animation-cloud-cartoon1.png'); ?>">
        <img class="cloud-cartoon-animation-other cloud-cartoon-animation-4" src="<?php echo base_url('docs/animation-cloud-cartoon1.png'); ?>">
        <img class="cloud-cartoon-animation-other cloud-cartoon-animation-5" src="<?php echo base_url('docs/animation-cloud-cartoon2.png'); ?>">

        <img class="egg-anime egg-other-1" src="<?php echo base_url('docs/egg.png'); ?>">
        <img class="egg-anime egg-other-2" src="<?php echo base_url('docs/egg.png'); ?>">
        <img class="egg-anime egg-other-3" src="<?php echo base_url('docs/egg.png'); ?>">
    </div>
</div>

<script>
    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function randomizeAnimationDuration() {
        var minSeconds = 2; // วินาทีต่ำสุดที่ต้องการ
        var maxSeconds = 7; // วินาทีสูงสุดที่ต้องการ
        var randomSeconds = getRandomInt(minSeconds, maxSeconds);
        return randomSeconds + 's';
    }

    function randomizePosition(element) {
        var maxWidth = 1920; // กำหนดขนาดความกว้างสูงสุด 1920px
        var maxHeight = 1000; // กำหนดขนาดความสูงสูงสุด 1000px

        var randomMarginLeft = getRandomInt(0, maxWidth - element.width);
        var randomMarginTop = getRandomInt(0, maxHeight - element.height);

        element.style.marginLeft = randomMarginLeft + 'px';
        element.style.marginTop = randomMarginTop + 'px';
    }

    var animations = document.querySelectorAll('.dot-news-animation-1, .dot-news-animation-2, .dot-news-animation-3, .dot-news-animation-4, .dot-news-animation-5, .dot-news-animation-6, .dot-news-animation-7, .dot-news-animation-8, .dot-news-animation-9, .dot-news-animation-10, .dot-news-animation-11, .dot-news-animation-12, .dot-news-animation-13, .dot-news-animation-14, .dot-news-animation-15');
    animations.forEach(function(animation) {
        animation.style.animationDuration = randomizeAnimationDuration();
        randomizePosition(animation);
    });
</script>

<footer class="footer">
    <div class="row">
        <div class="col-9">
            <div class="">
                <span class="font-footer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-c-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.146 4.992c.961 0 1.641.633 1.729 1.512h1.295v-.088c-.094-1.518-1.348-2.572-3.03-2.572-2.068 0-3.269 1.377-3.269 3.638v1.073c0 2.267 1.178 3.603 3.27 3.603 1.675 0 2.93-1.02 3.029-2.467v-.093H9.875c-.088.832-.75 1.418-1.729 1.418-1.224 0-1.927-.891-1.927-2.461v-1.06c0-1.583.715-2.503 1.927-2.503" />
                    </svg> สงวนลิขสิทธิ์ 2567 โดย <a href="https://www.assystem.co.th/" target="_blank" style="font-weight: 500; color: #fff !important; ">บริษัท เอเอส ซิสเต็ม จำกัด</a> . โทร <b style="font-weight: 600;">084-393-5580</b> . สถิติผู้เข้าชมตั้งแต่ 20 พฤษภาคม 2567
                </span>
            </div>
        </div>
        <div class="col-3 mt-1" style="margin-left: -120px;">
            <!-- Histats.com  (div with counter) -->
            <div id="histats_counter"></div>
            <!-- Histats.com  START  (aync)-->
            <script type="text/javascript">
                var _Hasync = _Hasync || [];
                _Hasync.push(['Histats.start', '1,4869470,4,1030,150,25,00001000']);
                _Hasync.push(['Histats.fasi', '1']);
                _Hasync.push(['Histats.track_hits', '']);
                (function() {
                    var hs = document.createElement('script');
                    hs.type = 'text/javascript';
                    hs.async = true;
                    hs.src = ('//s10.histats.com/js15_as.js');
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
                })();
            </script>
            <!-- Histats.com  END  -->
        </div>
    </div>
</footer>
</main>

</body>

</html>