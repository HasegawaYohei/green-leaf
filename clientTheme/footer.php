<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod('understrap_container_type');
?>



<footer class="wrapper">

  <div class="container-flud py-5 mt-5 bg-green" id="calendar">
    <div class="row">
      <div class="col-12 mx-auto section-box">
        <p class="text-center color-green section-title mb-4 mb-lg-">公開講座・イベントカレンダー</p>
        <div class="row">
          <div class="col-10 mx-auto">
            <div class="cal-wrapper">
              <div class="googlecal">
                <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=k4lq392h03nrcno3ci8dk38j0s%40group.calendar.google.com&amp;color=%2342104A&amp;ctz=Asia%2FTokyo" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
              </div>
            </div>
          </div>
        </div>
        <p class="text-center">
          <a class="btn btn-custom outline-green color-green mt-3">お申込&nbsp;<i class="fas fa-angle-right"></i></a>
        </p>
      </div>
    </div>
  </div>

  <div class="container-flud py-5 bg-white">
    <div class="row">
      <div class="d-none d-md-block col-md-3"></div>
      <div class="col-11 col-md-2 mx-auto mx-md-1 px-sm-0 text-center text-sm-right">
        <a href="https://ameblo.jp/michiru-herbgarden/" target="_blank"><img src="https://green-leaf.info/wp-content/uploads/2019/01/blog_banner_link.png" class="img-fluid"></a>
      </div>
      <div class="col-11 col-md-2 mt-3 mt-md-0 mx-auto mx-md-1 px-sm-0 text-center">
        <a href="https://ameblo.jp/michiru-herbgarden/" target="_blank"><img src="https://green-leaf.info/wp-content/uploads/2019/01/onlineshop_banner.png" class="img-fluid"></a>
      </div>
      <div class="col-11 col-md-2 mt-3 mt-md-0 px-sm-0 mx-auto mx-md-1 text-center text-sm-left mx-auto">
        <a href="https://green-leaf.shop-pro.jp/" target="_blank"><img src="https://green-leaf.info/wp-content/uploads/2019/03/counceling-banner.png" class="img-fluid"></a>
      </div>
    </div>
  </div>

  <div class="container-flud py-4 foot-bg" id="shop-info">
    <div class="row">
      <div class="col-12 mx-auto section-box">
        <div class="row section-row">
          <div class="col-10 col-md-5 col-lg-6 tile-white box-left">
            <div class="my-4">
              <p class="text-center text-bold mb-2">ハーブかふぇROOT</p>
              <p class="text-center text-sm">
                〒305-0015 茨城県つくば市二ノ宮4-1-26<br>
                TEL&amp;FAX  029-893-4694<br>
                OPEN ／月 10:00～13:00、<br>水・木・金・土・日 10:00～18:00<br>
                (LUNCH 11:00～15:00)<br>
                CLOSE／火<br>
                <a class="btn btn-custom outline-orange color-orange mt-3">access</a>
              </p>
            </div>
          </div>
          <div class="col-10 col-md-5 col-lg-6 tile-white box-right mt-5 mt-md-0">
            <div class="my-4">
              <p class="text-center text-bold mb-2">ハーブ専門店グリーンリーフ</p>
              <p class="text-center text-sm">
                〒319-1411 茨城県日立市川尻町4-28-31-102<br>
                TEL&amp;FAX  0294-59-3988<br>
                OPEN ／木・金 15:00～18:00、<br>土・日 12:00～18:00<br>
                CLOSE／月・火・水<br>
                <a class="btn btn-custom outline-orange color-orange mt-3">access</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-flud py-4 bg-white">
    <div class="row my-3">
      <div class="col-11 mx-auto text-center">
        <img src="https://green-leaf.info/wp-content/uploads/2019/03/footer-logo.png" class="img-fluid">
      </div>
    </div>
    <div class="row">
      <div class="col-11 col-sm-8 d-none d-sm-block section-box footer-link color-green mx-auto text-center">
        <a href="https://green-leaf.info/">ホーム</a>｜
        <a href="https://green-leaf.info/concept/">コンセプト</a>｜
        <a href="https://green-leaf.info/cace/tsukuba/">ハーブかふぇROOT</a>｜
        <a href="https://green-leaf.info/cace/hitachi/">ハーブ専門店グリーンリーフ</a>｜
        <a href="https://green-leaf.info/">イベント</a>｜
        <a href="https://green-leaf.info/tea/">商品紹介</a>｜
        <a href="https://green-leaf.info/course/">プログラム紹介</a>｜
        <a href="https://green-leaf.shop-pro.jp/" target="_blank">オンラインショップ</a><br>
        <a href="https://green-leaf.info/counceling/">ハーブティー外来・質問票フォーム</a>｜
        <a href="https://green-leaf.info/contact/">お問い合わせ</a>｜
        <a href="https://green-leaf.info/privacy-policy/">プライバシーポリシー</a>
      </div>
    </div>
  </div>
  <div class="container-flud pt-3 bg-footer-icons">
    <div class="row">
      <div class="col-12 bg-footer-icon-box text-center py-4">
        <p class="mb-3 text-bold">GREEN LEAF Official Accounts</p>
        <p style="letter-spacing: 8px;">
          <a href=""><i class="fab fa-instagram color-green"></i></span></a>
          <a href=""><i class="fab fa-twitter color-green"></i></span></a>
          <a href=""><i class="fab fa-facebook color-green"></i></span></a>
          <a href="https://ameblo.jp/michiru-herbgarden/" target="_blank"><img src="https://green-leaf.info/wp-content/uploads/2019/03/blog-logo.png"></a>
        </p>
      </div>
    </div>
  </div>

  <div class="container-flud py-3 bg-footer">
    <div class="row">
      <div class="col-12 text-center color-white">
          &copy; GREEN LEAF
      </div>
    </div>
  </div>

</footer>

<script>
function getScrolled() {
 return ( window.pageYOffset !== undefined ) ? window.pageYOffset : document.documentElement.scrollTop;
}

function scrollToTop() {
  const scrolled = getScrolled();
  window.scrollTo( 0, Math.floor( scrolled - 400 ) );
  if ( scrolled > 0 ) {
    window.setTimeout( scrollToTop, 30 );
  }
};

const topButton = document.getElementById('toTop');

topButton.onclick = function() {
  scrollToTop();
};
</script>

<?php wp_footer(); ?>

</body>

</html>
