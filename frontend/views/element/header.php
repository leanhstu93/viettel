<?php

use frontend\models\Banner;
use yii\bootstrap\Modal;
?>
<div class="header clearfix">
    <div class="header_logo">
        <div class="w1000 relative">
            <div class="logo">
                <h1><a href="/" title="Kênh thông tin kinh tế - tài chính Việt Nam">
                        <img src="<?=  $this->params['company']->logo ?>"/>
                    </a></h1>
            </div>
            <?php echo $this->render("//element/menu"); ?>
            <?php echo $this->render("//element/menumobile"); ?>
        </div>
        <div class="line"></div>
    </div>
    <div class="header-banner">
        <?php
        $banner = Banner::getDataByCustomSetting('banner_header');
        ?>
        <img class="image-responsive" src="<?php echo $banner->images->image ?>">
    </div>
</div>


