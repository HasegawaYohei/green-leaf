<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper" id="full-width-page-wrapper">

  <main>

    <section id="work_domain" class="content">
      <h2>事業紹介</h2>
    </section>

    <section id="about" class="content">
      <h2>ABOUT</h2>

      <div class="card-deck mx-3 mb-3">
        <div class="card">
          <img class="card-img-top" src="<?php bloginfo('template_directory') ?>/img/index.svg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
<!--            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional-->
<!--              content. This content is a little bit longer.</p>-->
<!--            <p class="card-text">-->
<!--              <small class="text-muted">Last updated 3 mins ago</small>-->
<!--            </p>-->
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php bloginfo('template_directory') ?>/img/index.svg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php bloginfo('template_directory') ?>/img/index.svg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>

      <div class="card-deck mx-3">
        <div class="card">
          <img class="card-img-top" src="<?php bloginfo('template_directory') ?>/img/index.svg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php bloginfo('template_directory') ?>/img/index.svg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php bloginfo('template_directory') ?>/img/index.svg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>


    </section>

    <section id="news" class="content">
      <h2>NEWS</h2>
      <div class='d-flex mx-3'>
        <div class="col-2 p-2">2018-03-26</div>
        <div class="col-2 p-2">ニュース</div>
        <div class="col-7 p-2">Web pageをリニューアルしました</div>
        <div class="col-1 pr-0 py-2 news_readmore_icon">icon</div>
      </div>
      <div class='d-flex mx-3'>
        <div class="col-2 p-2">2018-03-26</div>
        <div class="col-2 p-2">ニュース</div>
        <div class="col-7 p-2">Webiddd pageをnannfdsafdjaslfaリニューアルしました</div>
        <div class="col-1 pr-0 py-2 news_readmore_icon">icon</div>
      </div>
      <div class='d-flex mx-3'>
        <div class="col-2 p-2">2018-03-26</div>
        <div class="col-2 p-2">ニュース</div>
        <div class="col-7 p-2">Web pageをlonglonglonglonglonglonglonglonglonglonglongリニューアルしました</div>
        <div class="col-1 pr-0 py-2 news_readmore_icon">icon</div>
      </div>
    </section>
  </main>


  <div class="<?php echo esc_attr($container); ?>" id="content">


  </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
