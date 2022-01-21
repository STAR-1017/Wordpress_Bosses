<?php get_header("service"); ?>
    <section id="mainimg" class="next service">
        <div class="inner">
            <h1 class="catch">SERVICE<span>自社サービス</span></h1>
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
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><strong itemprop="name">自社サービス</strong>
                <meta itemprop="position" content="3">
            </li>
        </ul>
        <section id="service-detail" class="container">
            <section class="features">
                <h2 class="heading-lv01">FEATURES<span>自社サービス</span></h2>
                <div class="features-list">
                    <div class="features-box">
                        <div class="item-img">
                            <div class="bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/service_img/comapny_1.jpg)"></div>
                        </div>
                        <div class="item-txt">
                            <div class="txt-inner">
                                <h3 class="heading-lv04">クラウドファンディング</h3>
                                <p>学生向けのクラウドファンディングサイト「Long-Legs」の運営
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="features-box">
                        <div class="item-img">
                            <div class="bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/service_img/company_2.jpg)"></div>
                        </div>
                        <div class="item-txt">
                            <div class="txt-inner">
                                <h3 class="heading-lv04">NFTプラットフォーム</h3>
                                <p>ブロックチェーンを使用したNFTプラットフォームの運営(Coming soon)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <?php get_footer("service"); ?>