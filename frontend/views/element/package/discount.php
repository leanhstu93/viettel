<?php
$data = [
    [
        'name' => 'V30K',
        'value' => '100p + 200MB',
        'price' => '30.000đ',
        'expires' => '30 ngày',
        'link' =>'',
        'hot' => 0,
    ],
    [
        'name' => 'V70K',
        'value' => '250p + 400MB',
        'price' => '70.000đ',
        'expires' => '30 ngày',
        'link' =>'',
        'hot' => 0,
    ],
    [
        'name' => 'HNI90',
        'value' => 'Gọi + 60GB',
        'price' => '90.000đ',
        'expires' => '30 ngày',
        'link' =>'',
        'hot' => 0,
    ],
    [
        'name' => 'V90K',
        'value' => '300p + 1GB',
        'price' => '90.000đ',
        'expires' => '30 ngày',
        'hot' => 0,
        'link' =>'',
    ],
    [
        'name' => 'B100K',
        'value' => '500p + 600MB',
        'price' => '100.000đ',
        'expires' => '30 ngày',
        'hot' => 0,
        'link' =>''
    ],
    [
        'name' => 'V120K',
        'value' => '400p + 1.5GB',
        'price' => '120.000đ',
        'expires' => '30 ngày',
        'hot' => 0,
        'link' =>''
    ],
    [
        'name' => 'B150K',
        'value' => '500p + 1.5GB',
        'price' => '150.000đ',
        'expires' => '30 ngày',
        'hot' => 0,
        'link' =>''
    ],
    [
        'name' => 'V150K',
        'value' => '500p + 2.5GB',
        'price' => '150.000đ',
        'expires' => '30 ngày',
        'hot' => 0,
        'link' =>''
    ],
    [
        'name' => 'V200K',
        'value' => 'Gọi + 2.5GB',
        'price' => '200.000đ',
        'expires' => '30 ngày',
        'hot' => 0,
        'link' =>''
    ],
    [
        'name' => 'ST90',
        'value' => 'Gọi + 60GB',
        'price' => '90.000đ',
        'expires' => '30 ngày',
        'hot' => 0,
        'link' =>''
    ],
    [
        'name' => 'V120',
        'value' => 'Gọi + 90GB',
        'price' => '120.000đ',
        'expires' => '30 ngày',
        'hot' => 0,
        'link' =>''
    ],
    [
        'name' => 'V90',
        'value' => 'Gọi + 60GB',
        'price' => '90.000đ',
        'expires' => '30 ngày',
        'hot' => 0,
        'link' =>''
    ],
];
foreach ($data as $item) {

?>
<div class="item">
    <div class="datap">
        <?php if ($item['hot']) { ?>
        <div class="new">
            <img class=" lazyloaded" src="/images/new.png" alt=""></div>
        <?php } ?>
        <ul>
            <li class="name">
                <a href="javascript:;">
                    <?php echo $item['name'] ?>
                </a>
            </li>
            <li class="number"><span class="big"><?php echo $item['value'] ?></span><span>DATA</span></li>
            <li class="price"><i class="fa fa-diamond"></i> Giá: <?php echo $item['price'] ?></li>
            <li class="day"><i class="fa fa-calendar"></i> Hạn: 30 ngày</li>
        </ul>
        <a onclick="smsbutton('9123','<?php echo $item['name'] ?> <?=  $this->params['company']->phone ?>')"
           class="btn-child btnRegisterPackage dangky signup"> Đăng Ký <i
                class="fas fa-paper-plane"></i></a> <a
            href="javascript:;"
            class="chitiet details">
            Chi tiết
            <i class="far fa-share-square"></i>
        </a></div>
</div>
<?php } ?>