<?php
$data = [
    [
        'name' => 'D70',
        'value' => '7GB',
        'price' => '70.000đ',
        'expires' => '30 ngày',
        'link' =>'',
        'hot' => 0,
    ],
    [
        'name' => 'D90',
        'value' => '10GB',
        'price' => '90.000đ',
        'expires' => '30 ngày',
        'link' =>'',
        'hot' => 0,
    ],
    [
        'name' => 'D30',
        'value' => '2.5GB',
        'price' => '30.000đ',
        'expires' => '30 ngày',
        'link' =>'',
        'hot' => 0,
    ],
    [
        'name' => 'D50',
        'value' => '3.5',
        'price' => '50.000đ',
        'expires' => '30 ngày',
        'hot' => 0,
        'link' =>'',
    ],
    [
        'name' => 'D120',
        'value' => '12GB',
        'price' => '120.000đ',
        'expires' => '30 ngày',
        'hot' => 0,
        'link' =>''
    ],
    [
        'name' => 'D200',
        'value' => '20GB',
        'price' => '200.000đ',
        'expires' => '30 ngày',
        'hot' => 0,
        'link' =>''
    ],
    [
        'name' => 'DC300',
        'value' => '24GB',
        'price' => '300.000đ',
        'expires' => '6 tháng',
        'hot' => 0,
        'link' =>''
    ],
    [
        'name' => 'D500',
        'value' => '48GB',
        'price' => '500.000đ',
        'expires' => '12 tháng',
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
            <li class="day"><i class="fa fa-calendar"></i> Hạn: <?php echo $item['expires'] ?></li>
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