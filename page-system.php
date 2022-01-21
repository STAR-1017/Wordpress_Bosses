<?php get_header("service"); ?>
    <section id="mainimg" class="next service">
        <div class="inner">
            <h1 class="catch">SERVICE<span>Webシステム開発</span></h1>
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
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><strong itemprop="name">Webシステム開発</strong>
                <meta itemprop="position" content="3">
            </li>
        </ul>
        <section id="service-detail" class="container">
            <section class="support">
                <div class="inner">
                    <div class="heading-lv03">強み</div>
                    <ul class="icon-txt-list">
                        <li>
                            <p class="icon"> <img src="<?php echo get_template_directory_uri(); ?>/assets/service_img/SPEED.jpg" alt="" height="120" width="120" class="">
                            </p>
                            <p class="title">SPEED<span>スピード</span></p>
                            <div class="txt">
                                納期最短3日〜豊富な経験を生かしたクイックな開発が可能です。</div>
                        </li>
                        <li>
                            <p class="icon"> <img src="<?php echo get_template_directory_uri(); ?>/assets/service_img/QUALITY.jpg" alt="" height="120" width="120" class="">
                            </p>
                            <p class="title">QUALITY<span>技術力</span></p>
                            <div class="txt">
                                ブロックチェーンなど最先端の技術を利用した開発も可能です。開発可能言語も多様です。</div>
                        </li>
                        <li>
                            <p class="icon"> <img src="<?php echo get_template_directory_uri(); ?>/assets/service_img/PRICE.jpg" alt="" height="120" width="120" class="">
                            </p>
                            <p class="title">PRICE<span>価格</span></p>
                            <div class="txt">
                                他社と比べてリーズナブルな価格で開発可能です。</div>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="features">
                <h2 class="heading-lv01">FEATURES<span>Webシステム開発の特徴</span></h2>
                <div class="features-list">
                    <div class="features-box">
                        <div class="item-img">
                            <div class="bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/service_img/system_1.jpg)"></div>
                        </div>
                        <div class="item-txt">
                            <div class="txt-inner">
                                <h3 class="heading-lv04">スクラッチ開発</h3>
                                <p>Wordpressなどパッケージ化されたCMSでは要件では満たせない場合はスクラッチ開発で対応させていただきます。 貴社のイメージ通りものをご提供させていただきます。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="features-box">
                        <div class="item-img">
                            <div class="bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/service_img/system_2.jpg)"></div>
                        </div>
                        <div class="item-txt">
                            <div class="txt-inner">
                                <h3 class="heading-lv04">業務管理システム開発</h3>
                                <p>「顧客管理システム」「営業管理システム」「販売管理システム」「配送管理システム」「價権回収システム」「在庫管理システム」など様々な業界に対応した業務管理システムの開発が可能です。</p>
                            </div>
                        </div>
                    </div>
                    <div class="features-box">
                        <div class="item-img">
                            <div class="bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/service_img/system_3.jpg)"></div>
                        </div>
                        <div class="item-txt">
                            <div class="txt-inner">
                                <h3 class="heading-lv04">ブロックチェーン</h3>
                                <p>ブロックチェーン技術を活用した「暗号資産取引所」「NFTプラットフォーム」などの開発が可能です。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php get_footer("service"); ?>