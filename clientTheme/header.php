<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
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
	<meta property="og:image" content="http://green-leaf.info/assets/ogp/ogp.jpg" />
	<meta property="og:description" content="GREEN LEAFは、薬剤師のおおそねみちるがプロデュースするオリジナルブレンドのハーブティーです。問診・カウンセリングをもとにお客様のお悩みに合わせたハーブティーを調合（ブレンド）します。日立市、つくば市で経営しているカフェではもちろんインターネットでも購入できます。日本メディカルハーブ協会（JAMHA）の認定講師として、認定メディカルハーブ資格講座も開催しております。著書『ハーブティー ブレンドBOOK 心と体の不調に効く』を集英社より出版しています。" />
	<meta property="og:type"  content="website" />
	<meta property="og:url" content="http://green-leaf.info" />
	<meta property="fb:app_id" content="141649306777262" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="shortcut icon" href="http://green-leaf.info/wp-content/uploads/2019/01/favicon.ico" type="image/x-icon">
	<link rel="icon" href="http://green-leaf.info/wp-content/uploads/2019/01/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>