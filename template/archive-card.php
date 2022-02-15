<!-- ワード入力監視 -->
<?php if (isset($_GET['s']) && empty($_GET['s'])) : ?>
    <div class="p-archive-body c-text__m">
        <h2 class="p-archive-body__title">キーワードを入力してください</h2>
        <p class="p-archive-body__text">テキストが入ります。</p>
    </div>
    <!-- 投稿があれば -->
<?php elseif (have_posts()) : ?>
    <?php if (is_search()) : ?>
        <div class="p-archive-body c-text__m">
            <h2 class="p-archive-body__title"><?php echo $wp_query->found_posts; ?>件の検索結果</h2>
        </div>
    <?php endif; ?>
    <?php if (is_archive()) : ?>
        <div class="p-archive-body c-text__m">
            <h2 class="p-archive-body__title"><?php single_cat_title(); ?></h2>
        </div>
    <?php endif; ?>
    <?php
    while (have_posts()) : // その投稿を繰り返し処理
        the_post(); ?>
        <div class="p-archive-card__wrapper">
            <figure class="p-card">
                <?php if (has_post_thumbnail()) {
                    /* サムネイル（アイキャッチ画像）がある時 */
                    the_post_thumbnail();
                } else {
                    /* 設定されていない時 */
                    echo "<img alt=\"No Image\" />";
                } ?>
                <figcaption class="p-card__caption c-text__m">
                    <div class="p-caption c-text__m">
                        <h2 class="p-caption__title c-font-bold"><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                    </div>
                    <form action="<?php the_permalink(); ?>">
                        <button class="p-card__caption__button" type="submit">詳しく見る</button>
                    </form>
                </figcaption>
            </figure>
        </div>
    <?php endwhile; ?>
    <!-- 処理が終わったらページネーションを読み込む -->
    <div class="c-text__m">
        <?php
        wp_pagenavi();    //pagenaviの呼び出し
        ?>
    </div>
<?php else : ?>
    <div class="p-archive-body c-text__m">
        <h2 class="p-archive-body__title">お探しの商品はみつかりませんでした。</h2>
        <p class="p-archive-body__text">テキストが入ります。</p>
    </div>
<?php endif; ?>