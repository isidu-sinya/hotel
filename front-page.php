<?php get_header(); ?>
    <div class="contentsWrap">
        <div class="mainContents">

            <div class="aboutBlock block">
                <div class="banners">
                    <ul>
                        <li><a href="about.html"><img src="<?php echo get_template_directory_uri(); ?>/images/home/bnr_about.png" height="97" width="320" alt="ホテル紹介"></a></li>
                        <li><a href="access.html"><img src="<?php echo get_template_directory_uri(); ?>/images/home/bnr_access.png" height="97" width="320" alt="アクセス"></a></li>
                    </ul>
                </div>
            </div><!-- /.aboutBlock -->

            <section class="newsBlock block">
                <h1 class="type-B"><span>新着情報</span></h1>
                <?php get_template_part('loop', 'main'); ?>

                <?php
                if ( have_posts() ) :
                   while ( have_posts() ) : the_post();
                 ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
                    <div class="text">
                        <div class="entryInfo">
                            <div class="categories">
                              <ul>
                                 <li><a href="#">お知らせ</a></li>
                              </ul>
                            </div>
                            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日(l)'); ?></time>
                        </div>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <p>
                            今年も恒例のお花見企画を行います。4月11日（土）に当ホテルの中庭にて、お花見をしませんか？
                            毎年、多くのお客さまにご好評を頂いております。
                        </p>
                        <p>[<a href="<?php echo get_template_directory_uri(); ?>/single.html">続きを読む</a>]</p>
                    </div>
                    <figure>
                    <?php if ( has_post_thumbnail() ): ?>
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                    <?php else: ?>
                      <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage_180x180.png"height="180"width="180"alt=""></a>
                    <?php endif; ?>
                    </figure>
                </article><!-- /.news -->
                <?php
                 endwhile;
                 endif;
                ?>


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
                    <figure><a href="single.html"><img src="<?php echo get_template_directory_uri(); ?>/images/dummy/180x180-2.png" height="180" width="180" alt=""></a></figure>



                    <div class="text">
                        <div class="entryInfo">
                            <div class="categories">
                                <?php the_category(); ?>
                            </div>
                            <time datetime="2015-01-02">2015.01.02(fri)</time>
                        </div>
                        <h1><a href="single.html">今年も宜しくお願いいたします</a></h1>
                        <p>
                            新年明けましておめでとうございます。今年もホテル・技評リゾート石垣島を何卒よろしくお願いいたします。
                            スタッフ一同、心よりお待ちしております。
                        </p>
                        <p>[<a href="single.html">続きを読む</a>]</p>
                    </div>
                    <figure><a href="single.html"><img src="<?php echo get_template_directory_uri(); ?>/images/dummy/180x180-1.png" height="180" width="180" alt=""></a></figure>


            </section><!-- /.newsBlock -->

        </div><!-- /.mainContents -->

       <aside class="subContents">
       <?php get_sidebar(); ?>
       </aside><!-- /.subContents -->
    </div><!-- /.contentsWrap -->

<?php get_footer(); ?>
