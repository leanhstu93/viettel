<?php
$data = [
    [
        'name' => 'MIMAXSV',
        'value' => '3GB',
        'price' => '50.000đ',
        'expires' => '30 ngày',
        'link' =>'',
        'hot' => 0,
    ],
    [
        'name' => 'UMAX300',
        'value' => '30GB',
        'price' => '300.000đ',
        'expires' => '30 ngày',
        'link' =>'',
        'hot' => 1,
    ],
    [
        'name' => 'MIMAX70',
        'value' => '3GB',
        'price' => '70.000đ',
        'expires' => '30 ngày',
        'link' =>'',
        'hot' => 1,
    ],
    [
        'name' => 'MIMAX90',
        'value' => '5GB',
        'price' => '90.000đ',
        'expires' => '30 ngày',
        'hot' => 1,
        'link' =>'',
    ],
    [
        'name' => 'MIMAX125',
        'value' => '8GB',
        'price' => '125.000đ',
        'expires' => '30 ngày',
        'hot' => 0,
        'link' =>''
    ],
    [
        'name' => 'MIMAX200',
        'value' => '15GB',
        'price' => '200.000đ',
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