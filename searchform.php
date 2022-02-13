<form class="p-search-form" action="<?php echo home_url('/') ?>" method="get">
    <label class="p-search-form__keyword">
        <input class="c-keyword" type="search" name="s" id="s" value="<?php the_search_query(); ?>">
        <img class="c-icon" src="<?php echo get_theme_file_uri();?>/img/common/header_icon_search.svg" alt="検索アイコン">
    </label>
    <button class="c-button p-search-form__button" type="submit" name="submit" value="検索">検索</button>
    <!-- カテゴリーで絞り込み -->
    <?php wp_dropdown_categories('hide_empty=1&show_option_all=カテゴリー:全て&include=1,2,3'); ?>
</form>