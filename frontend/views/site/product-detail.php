<?php
/**
 * @var $categories
 * @var $pages
 * @var $bread
 * @var $dataRL
 */
?>

<div class="page-content w100">
    <div class="w1000">

        <?php echo $this->render("//element/breadcrumb", ['name' => $data->name, 'data' => $bread]); ?>
        <div class="title-page">
            <?php echo $data->name ?>
        </div>

        <p class="post-meta">
            <span class="post-meta-author">
                <i class="fa fa-user"></i>
                <a href="javascript:;" title="">Admin </a>
            </span>
            <span class="tie-date"><i class="fa fa-clock-o"></i>19/09/2019</span>
            <span class="post-cats">
                <i class="fa fa-folder"></i>
                <a href="https://3gviettel.vn/mobile-internet" rel="category tag">Mobile Internet</a>
            </span>
        </p>

        <div class="wrapper-content-post entry w100">
            <?= $data->content ?>
        </div>

        <div class="w100 block-package-sale">
            <?php echo $this->render("//element/package/sale"); ?>
        </div>
    </div>
</div>
