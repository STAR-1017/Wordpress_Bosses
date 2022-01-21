<?php get_header("service"); ?>
    <section id="mainimg" class="next service">
        <div class="inner">
            <h1 class="catch">SERVICE<span>コンサルティング</span></h1>
        </div>
    </section>
    <main class="next">
        <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemscope="" itemtype="http://schema.org/Thing" itemprop="item" href="#/"><img itemprop="name" src="<?php echo get_template_directory_uri(); ?>/assets/service_img/icon-home.svg" alt="HOME">
                    <meta itemprop="position" content="1">
                </a>
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemscope="" itemtype="http://schema.org/Thing" itemprop="item" href="#/service/"><span itemprop="name">SERVICE</span></a>
                <meta itemprop="position" content="2">
            </li>
            <!--  -->
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><strong itemprop="name">コンサルティング</strong>
                <meta itemprop="position" content="3">
            </li>
        </ul>
        <section id="service-detail" class="container">
            <section class="features">
                <h2 class="heading-lv01">FEATURES<span>コンサルティング</span></h2>
                <div class="features-list">
                    <div class="features-box">
                        <div class="item-img">
                            <div class="bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/service_img/consulting_1.jpg)"></div>
                        </div>
                        <div class="item-txt">
                            <div class="txt-inner">
                                <h3 class="heading-lv04">営業支援•営業組織立上げ支援</h3>
                                <p>現状把握•課題設定から営業全体戦略立案を行います。それに基づいた管理体制、組織体制の構築、人材育成までサポートさせていただきます。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="features-box">
                        <div class="item-img">
                            <div class="bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/service_img/consulting_2.jpg)"></div>
                        </div>
                        <div class="item-txt">
                            <div class="txt-inner">
                                <h3 class="heading-lv04">新規事業開発支援</h3>
                                <p>新規事業のアイデア作成やビジネスモデル構築を行います。年間スケジュール作成や施策構築、制度設計、細かな点まで解像度高く設計支援いたします。</p>
                            </div>
                        </div>
                    </div>
                    <div class="features-box">
                        <div class="item-img">
                            <div class="bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/service_img/consulting_3.jpg)"></div>
                        </div>
                        <div class="item-txt">
                            <div class="txt-inner">
                                <div class="txt-inner">
                                    <h3 class="heading-lv04">WEBコンサルティング</h3>
                                    <p>Web広告、SEO対策、Webサイト・LP制作、動画制作など一気通貫で支援をすることが可能です。</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <?php get_footer("service"); ?>