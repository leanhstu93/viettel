<?php
use frontend\models\ConfigPage;


return [
    'adminEmail' => 'admin@example.com',
    'menubarAdmin' => [
        'mn_manager_home' => [
            'name' => 'Trang chủ',
            'link' => 'index/index',
            'icon' => '<i class="site-menu-icon wb-layout" aria-hidden="true"></i>',
        ],
        'mn_manager_product' => [
            'name' => 'Quản lý sản phẩm',
            'link' => '',
            'icon' => '<i class="site-menu-icon wb-layout" aria-hidden="true"></i>',
            'submenu' => [
                'submenu_1' => [
                    'name' => 'Thiết lập sản phẩm',
                    'link' => 'product/config'
                ],
                'submenu_2' => [
                    'name' => 'Danh sách sản phẩm',
                    'link' => 'product/index'
                ],
                'submenu_3' => [
                    'name' => 'Danh sách danh mục',
                    'link' => 'product-category/index'
                ],
            ]
        ],
        'mn_manager_single-page' => [
            'name' => 'Quản lý trang đơn',
            'link' => '',
            'icon' => '<i class="site-menu-icon wb-layout" aria-hidden="true"></i>',
            'submenu' => [
                'submenu_1' => [
                    'name' => 'Danh sách trang đơn',
                    'link' => 'single-page/index'
                ],
            ]
        ],
        'mn_manager_news' => [
            'name' => 'Quản lý tin tức',
            'link' => '',
            'icon' => '<i class="site-menu-icon wb-layout" aria-hidden="true"></i>',
            'submenu' => [
                'submenu_1' => [
                    'name' => 'Thiết lập tin tức',
                    'link' => 'news/config'
                ],
                'submenu_2' => [
                    'name' => 'Danh sách tin tức',
                    'link' => 'news/index'
                ],
                'submenu_3' => [
                    'name' => 'Danh sách danh mục',
                    'link' => 'news-category/index'
                ]
            ]
        ],

        'mn_manager_banner' => [
            'name' => 'Quản lý banner',
            'link' => '',
            'icon' => '<i class="site-menu-icon wb-layout" aria-hidden="true"></i>',
            'submenu' => [
                'submenu_1' => [
                    'name' => 'Danh sách',
                    'link' => 'banner/index'
                ],
                'submenu_2' => [
                    'name' => 'Danh sách danh mục',
                    'link' => 'banner-category/index'
                ],
            ]
        ],

        'mn_manager_video' => [
            'name' => 'Quản lý video',
            'link' => '',
            'icon' => '<i class="site-menu-icon wb-layout" aria-hidden="true"></i>',
            'submenu' => [
                'submenu_1' => [
                    'name' => 'Thiết lập video',
                    'link' => 'video/config'
                ],
                'submenu_2' => [
                    'name' => 'Danh sách',
                    'link' => 'video/index'
                ],
            ]
        ],
        'mn_manager_custom' => [
            'name' => 'Quản lý giao diện',
            'link' => '',
            'icon' => '<i class="site-menu-icon wb-layout" aria-hidden="true"></i>',
            'submenu' => [
                'submenu_1' => [
                    'name' => 'Tùy chỉnh giao diện',
                    'link' => 'custom/update'
                ],
                'submenu_2' => [
                    'name' => 'Thiết lập menu',
                    'link' => 'menu/update'
                ],
            ]
        ],
        'mn_manager_company' => [
            'name' => 'Quản lý website',
            'link' => '',
            'icon' => '<i class="site-menu-icon wb-layout" aria-hidden="true"></i>',
            'submenu' => [
                'submenu_1' => [
                    'name' => 'Thiết lập website',
                    'link' => 'company/update'
                ],
            ]
        ],
//        'mn_manager_language' => [
//            'name' => 'Quản lý ngôn ngữ',
//            'link' => 'Index',
//            'icon' => '<i class="site-menu-icon wb-layout" aria-hidden="true"></i>',
//            'submenu' => [
//                'submenu_1' => [
//                    'name' => 'Tùy chĩnh ngôn ngữ',
//                    'link' => 'custom/custom-language'
//                ],
//            ]
//        ],
        'mn_manager_language' => [
            'name' => 'Quản lý ngôn ngữ',
            'link' => 'javascript:void(0)',
            'icon' => '<i class="site-menu-icon wb-layout" aria-hidden="true"></i>',
            'submenu' => [
                'submenu_1' => [
                    'name' => 'Tùy chĩnh ngôn ngữ',
                    'link' => 'custom/custom-language'
                ],
            ]
        ],
        'mn_manager_logs' => [
            'name' => 'Quản lý logs',
            'link' => '',
            'icon' => '<i class="site-menu-icon wb-layout" aria-hidden="true"></i>',
            'submenu' => [
                'submenu_1' => [
                    'name' => 'Danh sách',
                    'link' => 'logs/index'
                ],
            ]
        ]
    ],
    # tuy chinh giao dien
    'settingTemplate' => [
        'CUSTOM_IMAGE' => [
            'banner_header' =>[
                'name' => 'Banner header',
                'data' => 1,
                'type' => 'one',
                'note' => '',
                'limit' => 1
            ],
            'one_banner_home_bottom' =>[
                'name' => 'Banner cuối trang chủ',
                'data' => 2,
                'type' => 'one',
                'note' => '',
                'limit' => 1
            ],
            'banner_adv_sidebar_1' => [
                'name' => 'Banner sidebar 1',
                'data' => 3,
                'type' => 'one',
                'note' => '',
                'limit' => 1
            ],
            'banner_adv_sidebar_2' => [
                'name' => 'Banner sidebar 2',
                'data' => 4,
                'type' => 'one',
                'note' => '',
                'limit' => 1
            ],
            'banner_adv_sidebar_3' => [
                'name' => 'Banner sidebar 3',
                'data' => 5,
                'type' => 'one',
                'note' => '',
                'limit' => 1
            ]

        ],
//        'CUSTOM_SINGLE_PAGE' => [
//            'one_footer' =>[
//                'name' => 'Trang đơn footer',
//                'data' => 1,
//                'note' => '',
//                'limit' => 1
//            ],
//            'tree_middle_home' =>[
//                'name' => '3 trang đơn giữa trang chủ',
//                'data' => 2,
//                'note' => '',
//                'limit' => 3
//            ],
//            'footer_list_col_link_1' =>[
//                'name' => 'Danh sách trang đơn footer cột liên kết 1',
//                'data' => 3,
//                'note' => '',
//                'limit' => 5
//            ],
//            'footer_list_col_link_2' =>[
//                'name' => 'Danh sách trang đơn footer cột liên kết 2',
//                'data' => 4,
//                'note' => '',
//                'limit' => 5
//            ],
//            'one_page_about' =>[
//                'name' => 'Trang giới thiệu',
//                'data' => 1,
//                'note' => '',
//                'limit' => 1
//            ],
//        ],
        'CUSTOM_NEWS_CATEGORY' => [
            'home_news_middle1' =>[
                'name' => 'Danh sách tin tức nằm giữa trang chủ 1',
                'data' => 1,
                'note' => '',
                'limit' => 6
            ],
            'home_news_middle2' =>[
                'name' => 'Danh sách tin tức nằm giữa trang chủ 2',
                'data' => 2,
                'note' => '',
                'limit' => 6
            ],
        ],
    ],

    #menu
    'menuDefault' => [
        [
            'name' => 'Trang chủ',
            'id' => 'mn_home',
            'module' => 'home',
            'link' => 'ourhome',
            'type' => ConfigPage::TYPE_HOME,
        ],
        [
            'name' => 'Sản phẩm',
            'id' => 'mn_product',
            'module' => 'product',
            'link' => '/product/config',
            'type' => ConfigPage::TYPE_PRODUCT
        ],
        [
            'name' => 'Tin tức',
            'id' => 'mn_news',
            'module' => 'news',
            'link' => 'news/config',
            'type' => ConfigPage::TYPE_NEWS
        ],
        [
            'name' => 'Liên hệ',
            'id' => 'mn_contact',
            'module' => 'contact',
            'link' => 'javascrip:;',
            'type' => ConfigPage::TYPE_CONTACT
        ],
        [
            'name' => 'Thư viện hình ảnh',
            'id' => 'mn_gallery-image',
            'module' => 'gallery-image',
            'link' => 'gallery-image/config',
            'type' => ConfigPage::TYPE_GALLERY_IMAGE
        ],
    ],

    # setting language
    'settingLanguage' => [
        'home' => 'Trang chủ',
        'same_category' => 'Cùng chuyên mục',
        'read_a_lot' => 'Đọc nhiều',
        'video_relates' => 'Video liên quan',
        'mutex' => 'mutex'
    ],
    'listLanguage' => [
        'vi' => [
            'default' => true,
            'icon' => 'images/vn.svg',
            'name' => 'VN',
        ],
//        'en' => [
//            'default' => false,
//            'icon' => 'images/uk.svg',
//            'name' => 'EN'
//        ]
    ],

];
