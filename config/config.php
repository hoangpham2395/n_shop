<?php

return [
	'role_type' => [
		1 => 'Super admin',
		2 => 'Admin',
	],
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
		'ao' => asset('images/categories/ao.png'),
		'quan' => asset('images/categories/quan.png'),
		'dam-vay' => asset('images/categories/dam_vay.png'),
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
];