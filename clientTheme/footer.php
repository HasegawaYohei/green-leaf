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

<?php get_sidebar('footerfull'); ?>

<div class="wrapper" id="wrapper-footer">

  <div class="<?php echo esc_attr($container); ?>">

    <div class="row">

      <div class="company-info col-3">
        <div class="footer-company-name">株式会社茗溪コンサルタンツ</div>
        <div class="footer-telephone-number">TEL:03-5521-5925</div>
        <div class="footer-available-hour">TEL:03-5521-5925</div>
        <div class="footer-address">〒100-0014<br>東京都千代田区永田町2丁目14-2<br>（山王グランドビル）</div>
      </div>

      <div class="col-9 d-flex flex-column">

        <div class="row footer-menu">
          <div class="col-2">
            私達について
            <ul>
              <li>会社概要</li>
              <li>企業理念</li>
              <li>代表挨拶</li>
            </ul>

          </div>
          <div class="col-2">事業紹介
            <ul>
              <li>企業管財</li>
              <li>地域振興</li>
              <li>研究開発</li>
            </ul>
          </div>
          <div class="col-2">採用について
            <ul>
              <li>新卒採用</li>
              <li>中途採用</li>

            </ul>

          </div>
          <div class="col-2">代表ブログ</div>
          <div class="col-2">問い合わせ</div>
        </div>

        <div class="row site-info justify-content-end mt-auto">

          ©MEIKEI CONSULTANTS All Rights Reserved
        </div>


      </div><!--col end -->

    </div><!-- row end -->

  </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

