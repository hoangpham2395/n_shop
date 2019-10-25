<?php

return [
	'role_type' => [
		1 => 'Super admin',
		2 => 'Admin',
	],
	'yes' => 'Có',
	'no' => 'Không',
	'select_default' => '--- Chọn giá trị thích hợp ---',
	'paginate' => [
		'backend' => [
			'default' => 20,
			'admin' => 10,
		],
		'frontend' => [
			'default' => 12,
		],
	],
	'url_no_image' => asset('images/common/no_image.png'),
	'money_unit' => '₫',

	// Info
	'owner' => [
		'phone' => env('OWNER_PHONE_NUMBER'),
		'email' => env('OWNER_EMAIL'),
		'address' => env('OWNER_ADDRESS'),
		'facebook_name' => env('OWNER_FACEBOOK_NAME'),
		'facebook_url' => env('OWNER_FACEBOOK_URL'),
		'facebook_messenger' => env('OWNER_FACEBOOK_MESSENGER'),
		'map' => env('OWNER_MAP_URL'),
	],

	// Category
	'categories_default' => [
		'ao' => 'Áo',
		'quan' => 'Quần',
		'dam-vay' => 'Đầm váy',
		'giay-dep' => 'Giày dép',
		'tui' => 'Túi',
		'phu-kien' => 'Phụ kiện',
	],
	'categories_id_default' => [1, 2, 3, 4, 5, 6],
	'categories_image_default' => [
		'ao' => asset('images/categories/ao.jpg'),
		'quan' => asset('images/categories/quan.png'),
		'dam-vay' => asset('images/categories/vay.jpg'),
		'giay-dep' => asset('images/categories/giay_dep.jpg'),
		'tui' => asset('images/categories/tui.jpg'),
		'phu-kien' => asset('images/categories/phu_kien.png'),
	],

	'type_category' => [
		1 => 'Danh mục cha',
		2 => 'Danh mục con',
	],
	'type_parent_category' => 1,
	'type_child_category' => 2,

	'product_sort' => [
		1 => 'Từ A - Z',
		2 => 'Từ Z - A',
		3 => 'Giá tăng dần',
		4 => 'Giá giảm dần',
	],
    'order_status' => [
        'guest_booked' => 1,
        'confirmed' => 2,
        'shipping' => 3,
        'success' => 4,
        'return' => 5,
        'cancel' => 6,
    ],
    'order_status_text' => [
        1 => 'Khách mới đặt',
        2 => 'Đã xác nhận',
        3 => 'Đang giao hàng',
        4 => 'Thành công',
        5 => 'Bị trả về',
        6 => 'Hủy',
    ],
    'order_status_color' => [
        1 => '#dc3545',
        2 => '#0062cc',
        3 => '#d39e00',
        4 => '#1e7e34',
        5 => '#545b62',
        6 => '#1d2124',
    ],
    'frontend_type_login' => [
        1 => 'Số điện thoại',
        2 => 'Email'
    ],
    'users_status' => [
        1 => 'Active',
        2 => 'Block',
    ],
    'payment_method' => [
        1 => 'Thanh toán khi nhận hàng',
        2 => 'Chuyển khoản',
    ],
];
