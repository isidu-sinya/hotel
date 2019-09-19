<?php get_header(); ?>

    <div class="contentsWrap">
        <div class="mainContents">
          <?php
          if ( have_posts() ) :
              while ( have_posts() ) : the_post();
           ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
                <h1 class="type-A">新着情報</h1>
                <h2 class="title type-B"><span><?php the_title(); ?></span></h2>

                <div class="entryInfo">
                    <div class="categories">
                        <?php the_category(); ?>
                    </div>
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日(l)'); ?></time>
                </div><!-- /.entryInfo -->

                <section class="content">
                  <?php the_content(); ?>
                    <h1>今年も恒例のお花見企画を行います。</h1>
                    <img src="images/dummy/670x260.png" height="260" width="670" alt="">
                    <p>当ホテルの中庭にてお花見をしませんか？<br>毎年、多くのお客さまにご好評を頂いております。</p>
                    <h2>企画詳細</h2>
                    <p>日付：4月11日（土）</p>
                    <p>時間：13:00〜17:00</p>
                    <p>場所：当ホテル - 中庭にて</p>
                    <p>費用：1名様 3500円（12才以下は1500円）</p>
                    <h3>お料理について</h3>
                    <p>料理はバイキング形式で和洋折衷でご提供します。<br>お飲物もアルコールからジュースまで飲み放題でご提供します。</p>
                </section><!-- /.content -->

                <nav class="postNavi">
                    <span class="prev"><?php previous_post_link('%link'); ?></span>
                    <span class="next"><?php next_post_link('%link'); ?></span>
                </nav>
            </article><!-- /.entry -->
            <?php
          endwhile;
        endif;
            ?>
        </div><!-- /.mainContents -->

        <aside class="subContents">
            <div class="wrapper">
              <?php get_sidebar('categories'); ?>
              <?php get_sidebar('archives'); ?>
                <section class="recentCategories">
                    <h1 class="type-C">カテゴリー一覧</h1>
                    <ul class="categories">
                    <?php
                    $args = array(
                      'title_li' =>'',//見出しを削除
                      'show_count' => true,//投稿数を表示
                    );
                    wp_list_categories( $args );
                    ?>
                    </ul>
                </section><!-- /.recentCategories -->

                <section class="recentArchives">
                    <h1 class="type-C">月別アーカイブ</h1>
                    <ul class="archives">
                        <li><a href="date.html">2015年2月</a>(2)</li>
                        <li><a href="date.html">2015年1月</a>(1)</li>
                    </ul><!-- /.archives -->
                </section><!-- /.recentArchives -->
            </div><!-- /.wrapper -->
        </aside><!-- /.subContents -->
    </div><!-- /.contentsWrap -->
<?php get_footer(); ?>
