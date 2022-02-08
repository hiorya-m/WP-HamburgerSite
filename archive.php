<?php get_header(); ?>
<!-- メインメニュー -->
        <main class=" l-main">
            <article class="p-articre">
                <!-- ページトップ -->
                <div class="p-archive-top">
                    <img class="p-archive-top__image" src="<?php echo get_theme_file_uri();?>/img/archive/pagetop.png">
                    <div class="p-archive-top__heading">
                        <h2 class="p-archive-top__heading__title c-title">Menu:</h2>
                        <p class="p-archive-top__heading__lead c-text__m">チーズバーガー</p>
                    </div>
                </div>
                <!-- テキスト -->
                <div class="p-archive-body c-text__m">
                    <h2 class="p-archive-body__title">小見出しが入ります</h2>
                    <p class="p-archive-body__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                </div>
                <!-- カード -->
                <div class="p-archive-card">
                    <div class="p-archive-card__wrapper">
                        <figure class="p-card">
                            <img src="./img/archive/menu-img01.png">
                            <figcaption class="p-card__caption c-text__m">
                                <div class="p-caption c-text__m">
                                    <h2 class="p-caption__title c-font-bold">チーズバーガー</h2>
                                    <h3 class="p-caption__title--small c-font-bold">小見出しが入ります</h3>
                                    <p class="p-caption__text">テキストが入ります。テキストが入ります。テキストが入ります。
                                        テキストが入ります。テキストが入ります。テキストが入ります。
                                    </p>
                                </div>
                                <form action="single.html">
                                    <button class="p-card__caption__button" type="submit">詳しく見る</button>
                                </form>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="p-archive-card__wrapper">
                        <figure class="p-card">
                            <img src="./img/archive/menu-img01.png">
                            <figcaption class="p-card__caption c-text__m">
                                <div class="p-caption c-text__m">
                                    <h2 class="p-caption__title c-font-bold">ダブルチーズバーガー</h2>
                                    <h3 class="p-caption__title--small c-font-bold">小見出しが入ります</h3>
                                    <p class="p-caption__text">テキストが入ります。テキストが入ります。テキストが入ります。
                                        テキストが入ります。テキストが入ります。テキストが入ります。
                                    </p>
                                </div>
                                <form action="single.html">
                                    <button class="p-card__caption__button" type="submit">詳しく見る</button>
                                </form>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="p-archive-card__wrapper">
                        <figure class="p-card">
                            <img src="./img/archive/menu-img01.png">
                            <figcaption class="p-card__caption c-text__m">
                                <div class="p-caption c-text__m">
                                    <h2 class="p-caption__title c-font-bold">スペシャルチーズバーガー</h2>
                                    <h3 class="p-caption__title--small c-font-bold">小見出しが入ります</h3>
                                    <p class="p-caption__text">テキストが入ります。テキストが入ります。テキストが入ります。
                                        テキストが入ります。テキストが入ります。テキストが入ります。
                                    </p>
                                </div>
                                <form action="single.html">
                                    <button class="p-card__caption__button" type="submit">詳しく見る</button>
                                </form>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- ページネーション -->
                <div class="p-pagination--sp p-pagination c-text__m">
                    <span class="p-pagination__previous"><a>前へ</a></span>
                    <span class="p-pagination__next"><a>次へ</a></span>
                </div>
                <div class="p-pagination--tab">
                    <ul class="p-pagination">
                        <p class="c-title">page 1/10</p>
                        <span class="p-pagination__previous"><a></a></span>
                        <li><a>1</a></li>
                        <li><a>2</a></li>
                        <li><a>3</a></li>
                        <li><a>4</a></li>
                        <li><a>5</a></li>
                        <li><a>6</a></li>
                        <li><a>7</a></li>
                        <li><a>8</a></li>
                        <li><a>9</a></li>
                        <span class="p-pagination__next"><a></a></span>
                    </ul>
                </div>
            </article>
            <!-- メインここまで -->
        </main>
        <!-- サイドバー -->
        <?php get_sidebar(); ?>
        <!-- フッター -->
<?php get_footer(); ?>