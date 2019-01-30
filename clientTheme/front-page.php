<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand mx-0" href=""><img src="http://green-leaf.info/wp-content/uploads/2019/01/top_left_logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="https://ameblo.jp/michiru-herbgarden/" target="_blank"><img src="http://green-leaf.info/wp-content/uploads/2019/01/blog_link.png"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://green-leaf.shop-pro.jp/" target="_blank"><img src="http://green-leaf.info/wp-content/uploads/2019/01/online_shopping_link.png"></a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="to-top" id="toTop"><span><i class="fas fa-angle-right"></i></span></div>

  <div class="container-flud top-bg" id="top">
    <div class="row">
      <img src="http://green-leaf.info/wp-content/uploads/2019/01/key_visual_logo.png" class="key-visual">
    </div>
  </div>
  <div class="block"></div>

  <div class="container-flud py-3 py-md-5 bg-white">
    <div class="row">
      <div class="col-10 mx-auto section-box">
        <div class="row">
          <div class="col-12 col-md-7 blog-box order-sm-2 mt-4 mt-sm-0 mb-4">
            <p class="blog-title text-center text-sm-left mb-3">おおそねみちるブログ MICHIRUハーブの庭</p>
            <?php the_content(); ?>
            <div class="blog-list">
              <p>
                <span class="color-green">2019/01/20</span>
                <a href="https://ameblo.jp/michiru-herbgarden/entry-12434307929.html" class="color-orange ml-4" target="_blank">ライでびゅー</a>
              </p>
              <p>
                <span class="color-green">2019/01/18</span>
                <a href="https://ameblo.jp/michiru-herbgarden/entry-12433808077.html" class="color-orange ml-4" target="_blank">生徒さんのお店 オープン１ヶ月</a>
              </p>
              <p>
                <span class="color-green">2019/01/18</span>
                <a href="https://ameblo.jp/michiru-herbgarden/entry-12433805272.html" class="color-orange ml-4" target="_blank">芋</a>
              </p>
              <p>
                <span class="color-green">2019/01/17</span>
                <a href="https://ameblo.jp/michiru-herbgarden/entry-12433658760.html" class="color-orange ml-4" target="_blank">いま役立つのはチンクチャー</a>
              </p>
              <p>
                <span class="color-green">2019/01/17</span>
                <a href="https://ameblo.jp/michiru-herbgarden/entry-12433653538.html" class="color-orange ml-4" target="_blank">春近し!!</a>
              </p>
            </div>
            <img src="http://green-leaf.info/wp-content/uploads/2019/01/Group-1703.png" class="flower01">
          </div>
          <div class="col-10 mx-auto col-md-5 order-sm-1 mb-4"><img src="http://green-leaf.info/wp-content/uploads/2019/01/osone_michiru.png" class="img-fluid"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-flud py-5 bg-green">
    <div class="row">
      <div class="col-12 mx-auto section-box">
        <p class="text-center color-green section-title mb-4 mb-lg-5">SHOP INFO</p>
        <div class="row section-row">
          <div class="col-12 col-md-6 box-left img-box text-center">
            <img src="http://green-leaf.info/wp-content/uploads/2019/01/herb_cafe_root.png" class="img-fluid">
            <p class="text-center img-description mt-3 font-15">
              <span class="text-bold">ハーブかふぇROOT</span><br/>
              <span>つくば市二の宮</span><br/>
              <a href="#shop-info" class="btn btn-custom outline-green color-green">more&nbsp;<i class="fas fa-angle-right"></i></a>
            </p>
          </div>
          <div class="col-12 col-md-6 box-right img-box text-center mt-5 mt-md-0">
            <img src="http://green-leaf.info/wp-content/uploads/2019/01/jars.png" class="img-fluid">
            <p class="text-center img-description mt-3 font-15">
              <span class="text-bold">ハーブ専門店グリーンリーフ</span><br/>
              <span>日立市川尻町</span><br/>
              <a href="#shop-info" class="btn btn-custom outline-green color-green">more&nbsp;<i class="fas fa-angle-right"></i></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-flud py-5 bg-white">
    <div class="row">
      <div class="col-12 mx-auto section-box">
        <img src="http://green-leaf.info/wp-content/uploads/2019/01/Group-1707.png" class="flower02">
        <img src="http://green-leaf.info/wp-content/uploads/2019/01/Group-1710.png" class="flower03">
        <p class="text-center color-orange section-title mb-4 mb-lg-5">EVENT / SEMINAR</p>
        <div class="row">
          <div class="col-9 col-md-5 text-left text-sm-right ml-auto mr-auto mr-sm-0">
            <img src="http://green-leaf.info/wp-content/uploads/2019/01/herb_mix.png" class="img-fluid">
          </div>
          <div class="col-9 mx-auto mx-lg-0 col-md-5 col-lg-6 event-box ml-sm-0">
            <p class="box-title mt-4 mt-sm-0">しっとり特製美容クリーム作り</p>
            <p class="mt-2">日時:&nbsp;2019年 1月 4日</p>
            <p class="mt-2">場所:&nbsp;ハーブかふぇROOT (つくば市二の宮)</p>
            <p class="mt-2">費用:&nbsp;3,240円</p>
            <p class="text-center text-sm-left"><a href="#calendar" class="btn btn-custom outline-orange color-orange">more&nbsp;<i class="fas fa-angle-right"></i></a></p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-9 col-md-5 text-left text-sm-right ml-auto mr-auto mr-sm-0">
            <img src="http://green-leaf.info/wp-content/uploads/2019/01/gemmo_therapy.png" class="img-fluid">
          </div>
          <div class="col-9 mx-auto mx-lg-0 col-md-5 col-lg-6 event-box ml-sm-0">
            <p class="box-title mt-4 mt-sm-0">ジェモセラピー 解毒をしよう</p>
            <p class="mt-2">日時:&nbsp;2019年 1月 4日</p>
            <p class="mt-2">場所:&nbsp;ハーブかふぇROOT (つくば市二の宮)</p>
            <p class="mt-2">費用:&nbsp;3,240円</p>
            <p class="text-center text-sm-left"><a href="#calendar" class="btn btn-custom outline-orange color-orange">more&nbsp;<i class="fas fa-angle-right"></i></a></p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-9 col-md-5 text-left text-sm-right ml-auto mr-auto mr-sm-0">
            <img src="http://green-leaf.info/wp-content/uploads/2019/01/refilling.png" class="img-fluid">
          </div>
          <div class="col-9 mx-auto mx-lg-0 col-md-5 col-lg-6 event-box ml-sm-0">
            <p class="box-title mt-4 mt-sm-0">勾玉カラーセラピー</p>
            <p class="mt-2">日時:&nbsp;2019年 1月 4日</p>
            <p class="mt-2">場所:&nbsp;ハーブかふぇROOT (つくば市二の宮)</p>
            <p class="mt-2">費用:&nbsp;3,240円</p>
            <p class="text-center text-sm-left"><a href="#calendar" class="btn btn-custom outline-orange color-orange">more&nbsp;<i class="fas fa-angle-right"></i></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-flud bg-white py-3 py-md-5 mt-7 mt-lg-0">
    <div class="row">
      <div class="col-12 mx-auto section-box">
        <p class="text-center color-orange section-title no-margin">GREEN LEAF 講座</p>
        <p class="text-center text-sm color-orange mb-4 mb-lg-5">JAMHA認定メディカルハーブ資格講座</p>
        <div class="row section-row">
          <div class="col-10 col-md-5 col-lg-6 course-box box-left">
            <p class="box-title pt-lg-3 pl-lg-3">メディカルハーブコーディネーター養成講座</p>
            <table class="table table-borderless mt-3 ml-lg-3">
              <tbody>
                <tr>
                  <td>時間</td>
                  <td>12時間 x 6回</td>
                </tr>
                <tr>
                  <td>対象者</td>
                  <td>初心者、メディカルハーブが何か知りたい方</td>
                </tr>
                <tr>
                  <td>受講料</td>
                  <td>27,480円 (税込)、教材費: 6,480円 (税込)</td>
                </tr>
                <tr>
                  <td>検定</td>
                  <td>3月・9月 (年2回)</td>
                </tr>
              </tbody>
            </table>
            <p class="text-center"><a href="#calendar" class="btn btn-custom outline-orange color-orange mb-lg-4">more&nbsp;<i class="fas fa-angle-right"></i></a></p>
          </div>
          <div class="col-10 col-md-5 col-lg-6 course-box box-right mt-4 mt-md-0">
            <p class="box-title pt-lg-3 pl-lg-3">ハーバルセラピスト養成講座</p>
            <table class="table table-borderless mt-3 ml-lg-3">
              <tbody>
                <tr>
                  <td>時間</td>
                  <td>36時間 (9回)</td>
                </tr>
                <tr>
                  <td>対象者</td>
                  <td>初級から中級</td>
                </tr>
                <tr>
                  <td>受講料</td>
                  <td>129,600円 (税込)<br/>テキスト：3,088円、実習費：2,313円 </td>
                </tr>
                <tr>
                  <td>検定</td>
                  <td>5月・11月 (年2回)</td>
                </tr>
              </tbody>
            </table>
            <p class="text-center"><a href="#calendar" class="btn btn-custom outline-orange color-orange mb-lg-4">more&nbsp;<i class="fas fa-angle-right"></i></a></p>
          </div>
        </div>
        <div class="row section-row mt-4 mt-lg-5">
          <div class="col-10 col-md-5 col-lg-6 course-box box-left">
            <p class="box-title pt-lg-3 pl-lg-3">シニアハーバルセラピスト養成講座</p>
            <table class="table table-borderless mt-3 ml-lg-3">
              <tbody>
                <tr>
                  <td>時間</td>
                  <td>36時間 (9回)</td>
                </tr>
                <tr>
                  <td>対象者</td>
                  <td>中級以上 (<span class="text-bold">植物療法</span>について)</td>
                </tr>
                <tr>
                  <td>受講料</td>
                  <td>155,520円 (税込)、テキスト：4,536円 (税込)</td>
                </tr>
                <tr>
                  <td>検定</td>
                  <td>5月・11月</td>
                </tr>
              </tbody>
            </table>
            <p class="text-center"><a href="#calendar" class="btn btn-custom outline-orange color-orange mb-lg-4">more&nbsp;<i class="fas fa-angle-right"></i></a></p>
          </div>
          <div class="col-10 col-md-5 col-lg-6 course-box box-right mt-4 mt-md-0">
            <p class="box-title pt-lg-3 pl-lg-3">ハーバルプラクティショナー養成講座</p>
            <table class="table table-borderless mt-3 ml-lg-3">
              <tbody>
                <tr>
                  <td>時間</td>
                  <td>36時間 (9回)</td>
                </tr>
                <tr>
                  <td>対象者</td>
                  <td>中級以上 (<span class="text-bold">植物化学</span>について)</td>
                </tr>
                <tr>
                  <td>受講料</td>
                  <td>155,520円 (税込)、テキスト：4,860円 (税込)</td>
                </tr>
                <tr>
                  <td>検定</td>
                  <td>5月・11月</td>
                </tr>
              </tbody>
            </table>
            <p class="text-center"><a href="#calendar" class="btn btn-custom outline-orange color-orange mb-lg-4">more&nbsp;<i class="fas fa-angle-right"></i></a></p>
          </div>
        </div>
        <div class="row section-row mt-4 mt-lg-5">
          <div class="col-10 col-md-5 col-lg-6 course-box box-left">
            <p class="box-title pt-lg-3 pl-lg-3">シニアハーバルセラピスト養成講座</p>
            <p class="text-bold pl-lg-3 my-2">植物のエネルギーや活力を使って病気を予防する植物療法。</p>
            <table class="table table-borderless mt-3 ml-lg-3">
              <tbody>
                <tr>
                  <td>時間</td>
                  <td>ホームセラピスト2時間30分<br/>ジェモセラピスト4時間×4回</td>
                </tr>
                <tr>
                  <td>対象者</td>
                  <td>健康に関わる方　看護師、介護士、<br/>栄養士、薬剤師、保母、教師など。<br/>家族の健康の気になる方</td>
                </tr>
                <tr>
                  <td>受講料</td>
                  <td>体験会 3000円～<br/>ホームセラピスト資格講座：27000円(税込)<br/>ジェモセラピスト資格講座：429840円(税込)</td>
                </tr>
              </tbody>
            </table>
            <p class="text-center"><a href="#calendar" class="btn btn-custom outline-orange color-orange mb-lg-4">more&nbsp;<i class="fas fa-angle-right"></i></a></p>
          </div>
          <div class="col-10 col-md-5 col-lg-6 course-box box-right mt-4 mt-md-0">
            <p class="box-title pt-lg-3 pl-lg-3">ハーバルプラクティショナー養成講座</p>
            <table class="table table-borderless mt-3 ml-lg-3">
              <tbody>
                <tr>
                  <td>時間</td>
                  <td>36時間 (9回)</td>
                </tr>
                <tr>
                  <td>対象者</td>
                  <td>中級以上 (<span class="text-bold">植物化学</span>について)</td>
                </tr>
                <tr>
                  <td>受講料</td>
                  <td>155,520円 (税込)、テキスト：4,860円 (税込)</td>
                </tr>
                <tr>
                  <td>検定</td>
                  <td>5月・11月</td>
                </tr>
              </tbody>
            </table>
            <p class="text-center"><a href="#calendar" class="btn btn-custom outline-orange color-orange mb-lg-4">more&nbsp;<i class="fas fa-angle-right"></i></a></p>
          </div>
        </div>
      </div>
      <div class="col-12 text-center mt-4 mb-2 mb-lg-0">
        <img src="http://green-leaf.info/wp-content/uploads/2019/01/Group-1714.png">
      </div>
    </div>
  </div>

  <div class="container-flud py-5 bg-green" id="calendar">
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
      <div class="col-10 offset-1 offset-md-3 col-md-3 text-center text-sm-right">
        <a href="https://ameblo.jp/michiru-herbgarden/" target="_blank"><img src="http://green-leaf.info/wp-content/uploads/2019/01/blog_banner_link.png" class="img-fluid"></a>
      </div>
      <div class="col-10 offset-1 offset-md-0 col-md-3 mt-3 mt-md-0 text-center text-sm-left">
        <a href="https://green-leaf.shop-pro.jp/" target="_blank"><img src="http://green-leaf.info/wp-content/uploads/2019/01/onlineshop_banner.png" class="img-fluid"></a>
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
                TEL&FAX  029-893-4694<br>
                OPEN ／月 10:00～13:00、<br/>水・木・金・土・日 10:00～18:00<br>
                (LUNCH 11:00～15:00)<br/>
                CLOSE／火<br/>
                <a class="btn btn-custom outline-orange color-orange mt-3">access</a>
              </p>
            </div>
          </div>
          <div class="col-10 col-md-5 col-lg-6 tile-white box-right mt-5 mt-md-0">
            <div class="my-4">
              <p class="text-center text-bold mb-2">ハーブ専門店グリーンリーフ</p>
              <p class="text-center text-sm">
                〒319-1411 茨城県日立市川尻町4-28-31-102<br>
                TEL&FAX  0294-59-3988<br>
                OPEN ／木・金 15:00～18:00、<br/>土・日 12:00～18:00<br>
                CLOSE／月・火・水<br/>
                <a class="btn btn-custom outline-orange color-orange mt-3">access</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
function getScrolled() {
 return ( window.pageYOffset !== undefined ) ? window.pageYOffset : document.documentElement.scrollTop;
}

function scrollToTop() {
  const scrolled = getScrolled();
  console.dir(scrolled);
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

<?php get_footer(); ?>
