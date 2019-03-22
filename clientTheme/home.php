<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package GREEN LEAF
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<!--todo: Layout content inside card.-->
<!--todo: Create the header-->
<div class="wrapper" id="full-width-page-wrapper">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php bloginfo( 'template_directory' ) ?>/img/slide1.svg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php bloginfo( 'template_directory' ) ?>/img/slide2.svg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php bloginfo( 'template_directory' ) ?>/img/slide3.svg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <main>

    <section id="work_domain" class="content">
      <h2>事業紹介</h2>
      <div class="justify-center">

        <div class="card">
          <div class="row">
            <div class="col-sm-6 about-card-left">
              <img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=200x100&w=200&h=150" class="w-100">
            </div>
            <div class="col-sm-6 about-card-right d-flex justify-content-center align-self-center">
              <div class="card-block p-3">
                <h4 class="card-title about-card-title">Lorem ipsum dolor sit amet</h4>
                <p class="card-text about-card-text">ConsecteturUt enisi ut aliquip ex nsequat. </p>
                <div class="text-center">
                  <a href="#" class="btn btn-primary about-card-button">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="row">
            <div class="col-sm-6 about-card-right order-sm-2">
              <img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=200x100&w=200&h=150" class="w-100">
            </div>
            <div class="col-sm-6 about-card-left order-sm-1 d-flex justify-content-center align-self-center">
                <div class="card-block p-3">
                  <h4 class="card-title about-card-title">Lorem ipsum dolor sit amet</h4>
                  <p class="card-text about-card-text">ConsecteturUt enisi ut aliquip ex nsequat. </p>
                  <div class="text-center">
                  <a href="#" class="btn btn-primary about-card-button">Read More</a>
                </div>
                </div>
            </div>

          </div>
        </div>

        <div class="card">
          <div class="row">
            <div class="col-sm-6 about-card-left">
              <img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=200x100&w=200&h=150" class="w-100">

            </div>
            <div class="col-sm-6 about-card-right d-flex justify-content-center align-self-center">
              <div class="card-block p-3">
                <h4 class="card-title about-card-title">Lorem ipsum dolor sit amet</h4>
                <p class="card-text about-card-text">ConsecteturUt enisi ut aliquip ex nsequat. </p>
                <div class="text-center">
                  <a href="#" class="btn btn-primary about-card-button">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


    </section>

    <section id="about" class="content">
      <h2>ABOUT</h2>

      <div class="card-deck mb-3">
        <div class="card">
          <img class="card-img-top" src="<?php bloginfo( 'template_directory' ) ?>/img/index.svg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php bloginfo( 'template_directory' ) ?>/img/index.svg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php bloginfo( 'template_directory' ) ?>/img/index.svg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>

      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="<?php bloginfo( 'template_directory' ) ?>/img/index.svg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php bloginfo( 'template_directory' ) ?>/img/index.svg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php bloginfo( 'template_directory' ) ?>/img/index.svg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>


    </section>

    <section id="news" class="content">
      <h2>NEWS</h2>
      <div class='d-flex justify-content-around'>
        <div class="col-2 p-2 pl-0">2018-03-26</div>
        <div class="col-2 p-2">ニュース</div>
        <div class="col-7 p-2">Web pageをリニューアルしました</div>
        <div class="col-1 pr-0 py-2 news_readmore_icon">icon</div>
      </div>
      <div class='d-flex'>
        <div class="col-2 p-2 pl-0">2018-03-26</div>
        <div class="col-2 p-2">ニュース</div>
        <div class="col-7 p-2">Webiddd pageをnannfdsafdjaslfaリニューアルしました</div>
        <div class="col-1 pr-0 py-2 news_readmore_icon">icon</div>
      </div>
      <div class='d-flex'>
        <div class="col-2 p-2 pl-0">2018-03-26</div>
        <div class="col-2 p-2">ニュース</div>
        <div class="col-7 p-2">Web preeeeeeeeeeee long article</div>
        <div class="col-1 pr-0 py-2 news_readmore_icon">icon</div>
      </div>
    </section>
  </main>

  <!--  <div class="--><?php //echo esc_attr( $container ); ?><!--" id="content">-->
  <!--  </div><!-- Container end -->


</div><!-- Wrapper end -->

<?php get_footer(); ?>

