<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
<!--[if lt IE 9]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="https://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
<script src="js/jquery.min.js"></script>
<script src="js/common.js"></script>
<meta name="description" content="ホテル・技評リゾート石垣島は、暮らすように泊まれるホテルです。" />
<title>アーカイブ一覧 | ホテル・技評リゾート石垣島</title>
</head>
<body class="contact">
    <header class="globalHeader">
        <div class="inner">
            <h1><a href="/"><img src="images/common/logo01.png" height="40" width="300" alt="ホテル・技評リゾート石垣島"></a></h1>
            <p class="description">石垣島でのんびりゆったりと泊まれるホテル</p>
            <form action="" method="get" class="searchform">
                <input type="text" value="" name="s" id="s" placeholder="サイト内検索">
                <input type="submit" id="searchSubmit" value="">
            </form>
        </div>
    </header><!-- /.globalHeader -->

    <nav class="globalNavi">
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="about.html">ホテル紹介</a></li>
            <li><a href="access.html">アクセス</a></li>
            <li><a href="contact.html">お問い合わせ</a></li>
        </ul>
    </nav><!-- /.globalNavi -->

    <div class="breadcrumbs">
        <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="" href="http://example.com" class="home">HOME</a></span> &gt;
        <span typeof="v:Breadcrumb"><span property="v:title">2015年2月</span></span>
    </div><!-- /.breadcrumbs -->

    <?php get_header(); ?>

    <div class="contentsWrap">
        <div class="mainContents">
            <h1 class="type-A"><?php wp_title(''); ?></h1>
            <section class="newsBlock block">

                <article class="news">
                    <div class="text">
                        <div class="entryInfo">
                            <div class="categories">
                                <ul>
                                    <li><a href="#">コラム</a></li>
                                </ul>
                            </div>
                            <time datetime="2015-02-14">2015.02.14(sat)</time>
                        </div>
                        <h1><a href="single.html">バレンタイン企画を行います</a></h1>
                        <p>
                            本日はバレンタインデーですね。当ホテルでもバレンタイン企画を行います。
                            ディナーをご予約されたお客さま限定で特別コースをご提供させて頂きます。
                        </p>
                        <p>[<a href="single.html">続きを読む</a>]</p>
                    </div>
                    <figure><a href="single.html"><img src="images/dummy/180x180-2.png" height="180" width="180" alt=""></a></figure>
                </article><!-- /.news -->

            </section><!-- /.newsBlock -->
        </div><!-- /.mainContents -->

        <aside class="subContents">
            <div class="wrapper">
                <?php get_sidebar('categories'); ?>
                <?php get_sidebar('archives'); ?>
            </div><!-- /.wrapper -->
        </aside><!-- /.subContents -->
    </div><!-- /.contentsWrap -->

  <?php get_footer(); ?>

    <footer class="globalFooter">
        <div class="pageTop">
            <p><a href="javascript:void(0);" id="js-pagetop"><img src="images/common/pagetop01.png" height="41" width="41" alt=""></a></p>
        </div>
        <div class="inner">
            <dl class="address">
                <dt>ホテル・技評リゾート石垣島</dt>
                <dd>〒123-4567 沖縄県石垣市0123</dd>
                <dd>TEL 0123(45)6789 / FAX 0123(45)6789</dd>
            </dl><!-- /.address -->
            <small>&copy; HOTEL GIHYO RESORT ISHIGAKI All Rights Reserved.</small>
        </div>
    </footer><!-- /.globalFooter -->
</body>
</html>
