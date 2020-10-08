<?php
use \frontend\models\News;
?>
<section id="service">
    <div class="w1000">
        <div class="title-section">
            DỊCH VỤ VIETTEL
        </div>
        <div class="wrapper-items">
            <div class="item">
                <div class="center title-service w100">
                    <a href="/dang-ky-goi-cuoc-mimax90-viettel-chi-voi-90-000d-nhan-5gb-data-toc-do-cao-3g-4g">
                        GÓI MIMAX90 VIETTEL
                    </a>
                </div>
                <p class="w100 center">(Nhận 5GB data 4G/ 90.000đ /Miễn phí cước phát sinh)</p>
            </div>
            <div class="item">
                <div class="center title-service w100">
                    <a href="/cach-dang-ky-mimax-viettel-tron-goi-70-000d-nhan-3gb-data">GÓI MIMAX VIETTEL</a>
                </div>
                <p class="w100 center">(Nhận 3GB/ 70.000đ/ Miễn phí cước phát sinh)</p>
            </div>
            <div class="item">
                <div class="center title-service w100">
                    <a href="/thong-tin-bang-gia-cac-goi-cuoc-4g-viettel-gia-re-moi-nhat-2020">CÁC GÓI CƯỚC 4G VIETTEL</a>
                </div>
                <p class="w100 center">(Bảng giá gói cước 4G Viettel mới nhất 2020)</p>
            </div>
        </div>
    </div>
</section>

<section id="package-month">
    <div class="w1000">
        <div class="title-section">
            GÓI THÁNG
        </div>
        <div class="desc-section">
            ( TRỌN GÓI CHỈ TỪ 50.000Đ - SỬ DỤNG TRÊN MẠNG 3G/4G )
        </div>
        <div class="icon_bar_wrap"><span class="icon_bar"><i class="fas fa-mobile-alt"></i></span></div>
        <div class="wrapper-items">
            <?php

            use frontend\models\Banner;

            echo $this->render("//element/package/month");
            ?>

<!--    -->
        </div>
    </div>
</section>

<section id="package-dcom">
    <div class="w1000">
        <div class="title-section">
            GÓI DCOM
        </div>

        <div class="icon_bar_wrap"><span class="icon_bar"><i class="fas fa-mobile-alt"></i></span></div>
        <div class="wrapper-items">
            <?php
            echo $this->render("//element/package/dcom");
            ?>
        </div>
    </div>
</section>

<section id="package-sale">
    <div class="w1000">
        <div class="title-section">
            GÓI KHUYẾN MÃI
        </div>

        <div class="icon_bar_wrap"><span class="icon_bar"><i class="fas fa-mobile-alt"></i></span></div>
        <div class="wrapper-items">
            <?php
            echo $this->render("//element/package/discount");
            ?>
        </div>
    </div>
</section>

<section id="news-home">
    <div class="w1000">
        <div class="wrapper-items">
            <div class="item">
                <?php
                $newsLeft = News::getDataByCustomSetting('home_news_middle1');
                ?>
                <div class="wrap_title">
                    <h3 class="block-title"><span><?php echo $newsLeft->category->name ?></span></h3>
<!--                    <div class="xemthem">-->
<!--                        <a href="javascript:;">Xem thêm-->
<!--                            <i class="uk-icon-angle-double-right"></i>-->
<!--                        </a>-->
<!--                    </div>-->
                </div>
                <div class="news-box">
                    <?php
                    $item = array_shift($newsLeft->data);
                    ?>
                    <div class="bai_dau_tien">
                        <div class="news-left"><a
                                    href="<?php echo $item->getUrl() ?>"
                                    class="anh_bai_viet">
                                <img width="96" height="96"
                                     src="<?php echo $item->image ?>"
                                     class="attachment-thumbnail size-thumbnail wp-post-image lazyloaded"
                                     alt="<?php echo $item->name ?>"
                                     title="<?php echo $item->name ?>"> </a>
                        </div>
                        <div class="news-right"><a
                                    href="<?php echo $item->getUrl() ?>"
                                    class="tieu_de"><?php echo $item->name ?></a>
                            <p><?php echo $item->getDescriptionCut(150) ?></p></div>
                    </div>
                    <?php
                    foreach ($newsLeft->data as $item) {
                    ?>
                    <li class="cac_bai_con_lai"><a
                                href="<?php echo $item->getUrl() ?>"><?php echo $item->name  ?></a></li>
                    <?php } ?>
                </div>
            </div>
            <div class="item">
                <?php
                $newsLeft = News::getDataByCustomSetting('home_news_middle2');
                ?>
                <div class="wrap_title">
                    <h3 class="block-title"><span><?php echo $newsLeft->category->name ?></span></h3>
                    <!--                    <div class="xemthem">-->
                    <!--                        <a href="javascript:;">Xem thêm-->
                    <!--                            <i class="uk-icon-angle-double-right"></i>-->
                    <!--                        </a>-->
                    <!--                    </div>-->
                </div>
                <div class="news-box">
                    <?php
                    $item = array_shift($newsLeft->data);
                    ?>
                    <div class="bai_dau_tien">
                        <div class="news-left"><a
                                    href="<?php echo $item->getUrl() ?>"
                                    class="anh_bai_viet">
                                <img width="96" height="96"
                                     src="<?php echo $item->image ?>"
                                     class="attachment-thumbnail size-thumbnail wp-post-image lazyloaded"
                                     alt="<?php echo $item->name ?>"
                                     title="<?php echo $item->name ?>"> </a>
                        </div>
                        <div class="news-right"><a
                                    href="<?php echo $item->getUrl() ?>"
                                    class="tieu_de"><?php echo $item->name ?></a>
                            <p><?php echo $item->getDescriptionCut(150) ?></p></div>
                    </div>
                    <?php
                    foreach ($newsLeft->data as $item) {
                        ?>
                        <li class="cac_bai_con_lai"><a
                                    href="<?php echo $item->getUrl() ?>"><?php echo $item->name  ?></a></li>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
