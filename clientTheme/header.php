<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package GREEN LEAF
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133434831-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-133434831-1');
	</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?>">
	<meta name="description" content="GREEN LEAFは、薬剤師のおおそねみちるがプロデュースするオリジナルブレンドのハーブティーです。問診・カウンセリングをもとにお客様のお悩みに合わせたハーブティーを調合（ブレンド）します。日立市、つくば市で経営しているカフェではもちろんインターネットでも購入できます。日本メディカルハーブ協会（JAMHA）の認定講師として、認定メディカルハーブ資格講座も開催しております。著書『ハーブティー ブレンドBOOK 心と体の不調に効く』を集英社より出版しています。">
	<meta property="og:title" content="メディカルハープティー GREEN LEAF［グリーンリーフ］" />
	<meta property="og:site_name" content="メディカルハープティー GREEN LEAF［グリーンリーフ］" />
	<meta property="og:image" content="https://green-leaf.info/assets/ogp/ogp.jpg" />
	<meta property="og:description" content="GREEN LEAFは、薬剤師のおおそねみちるがプロデュースするオリジナルブレンドのハーブティーです。問診・カウンセリングをもとにお客様のお悩みに合わせたハーブティーを調合（ブレンド）します。日立市、つくば市で経営しているカフェではもちろんインターネットでも購入できます。日本メディカルハーブ協会（JAMHA）の認定講師として、認定メディカルハーブ資格講座も開催しております。著書『ハーブティー ブレンドBOOK 心と体の不調に効く』を集英社より出版しています。" />
	<meta property="og:type"  content="website" />
	<meta property="og:url" content="https://green-leaf.info" />
	<meta property="fb:app_id" content="141649306777262" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="shortcut icon" href="https://green-leaf.info/wp-content/uploads/2019/01/favicon.ico" type="image/x-icon">
	<link rel="icon" href="https://green-leaf.info/wp-content/uploads/2019/01/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand mx-0" href="https://green-leaf.info/"><img src="https://green-leaf.info/wp-content/uploads/2019/01/top_left_logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      </ul>
      <ul class="navbar-nav">
				<li class="nav-item d-inline d-lg-none text-center">
					<a class="nav-link text-bold color-green" href="https://green-leaf.info/">ホーム</a>
				</li>
				<li class="nav-item text-center">
					<a class="nav-link text-bold color-green" href="https://green-leaf.info/concept/">コンセプト</a>
				</li>
				<li class="nav-item d-inline d-lg-none text-center">
					<a class="nav-link text-bold color-green" href="https://green-leaf.info/tea/">ハーブかふぇROOT（つくば市）</a>
				</li>
				<li class="nav-item d-inline d-lg-none text-center">
					<a class="nav-link text-bold color-green" href="https://green-leaf.info/tea/">ハーブ専門店グリーンリーフ（日立市）</a>
				</li>
				<li class="nav-item d-none d-lg-inline">
					<div class="dropdown drop-hover">
						<a class="dropdown-toggle nav-link text-bold color-green" href="https://green-leaf.info/cafe/tsukuba/" data-toggle="dropdown">
							店舗案内
						</a>
						<ul class="dropdown-menu">
							<li>
								<a class="dropdown-item color-white" href="https://green-leaf.info/cafe/tsukuba/">つくば市</a>
							</li>
							<li>
								<a class="dropdown-item color-white" href="https://green-leaf.info/cafe/hitachi/">日立市</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item text-center">
					<a class="nav-link text-bold color-green" href="https://green-leaf.info/tea/">商品紹介</a>
				</li>
				<li class="nav-item text-center">
					<a class="nav-link text-bold color-green" href="https://green-leaf.info/event/">イベント</a>
				</li>
				<li class="nav-item d-inline d-lg-none text-center">
					<a class="nav-link text-bold color-green" href="https://green-leaf.info/course/">プログラム紹介</a>
				</li>
				<li class="nav-item d-none d-lg-inline">
					<div class="dropdown drop-hover">
						<a class="dropdown-toggle nav-link text-bold color-green" href="https://green-leaf.info/course/" data-toggle="dropdown">
							プログラム紹介
						</a>
						<ul class="dropdown-menu">
							<li>
								<a class="dropdown-item color-white" href="https://green-leaf.info/course/herbal-therapist/">ハーバルセラピストコース</a>
							</li>
							<li>
								<a class="dropdown-item color-white" href="https://green-leaf.info/course/">日本のハーブセラピストコース</a>
							</li>
							<li>
								<a class="dropdown-item color-white" href="https://green-leaf.info/course/">シニアハーバルセラピストコース</a>
							</li>
							<li>
								<a class="dropdown-item color-white" href="https://green-leaf.info/course/">ハーバルプラクティショナーコース</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item d-inline d-lg-none mt-3 text-sm text-center">
					<a class="nav-link text-bold color-green" href="https://green-leaf.info/contact/" style="display:inline">お問い合わせ</a>｜<a class="nav-link text-bold color-green" href="https://green-leaf.info/privacy-policy/" style="display:inline">プライバシーポリシー</a>
				</li>
				<li class="nav-item d-inline d-lg-none mt-3 text-center">
					<a href="https://ameblo.jp/michiru-herbgarden/" target="_blank"><img src="https://green-leaf.info/wp-content/uploads/2019/01/blog_banner_link.png" class="img-fluid"></a>
				</li>
				<li class="nav-item d-inline d-lg-none mt-3 text-center">
					<a href="https://green-leaf.shop-pro.jp/" target="_blank"><img src="https://green-leaf.info/wp-content/uploads/2019/01/onlineshop_banner.png" class="img-fluid"></a>
				</li>
				<li class="nav-item d-inline d-lg-none mt-3 text-center">
					<a href="https://green-leaf.info/counselling/" target="_blank"><img src="https://green-leaf.info/wp-content/uploads/2019/03/counceling-banner.png" class="img-fluid"></a>
				</li>
        <li class="nav-item d-none d-lg-inline">
          <a class="nav-link text-bold color-green" href="https://ameblo.jp/michiru-herbgarden/" target="_blank">ブログ<img src="https://green-leaf.info/wp-content/uploads/2019/03/blog-logo.png"></a>
        </li>
        <li class="nav-item d-none d-lg-inline">
          <a class="nav-link btn btn-green color-white" style="width: 180px !important; margin: 0 !important;" href="https://green-leaf.shop-pro.jp/" target="_blank">オンラインショップ<img src="https://green-leaf.info/wp-content/uploads/2019/03/shop-logo-white.png"></a>
        </li>
      </ul>
    </div>
  </nav>