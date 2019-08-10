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

	// Info
	'owner' => [
		'email' => 'brownstore.vn@gmail.com',
		'phone' => '090 354 33 16',
		'address' => '72/6 Trương Quốc Dung, P10, Quận Phú Nhuận, Thành phố Hồ Chí Minh',
		'facebook' => 'https://www.facebook.com/brownstore.vn',
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
		'ao' => asset('images/categories/quan_ao.png'),
		'quan' => asset('images/categories/quan_ao.png'),
		'dam-vay' => asset('images/categories/dam_vay.png'),
		'giay-dep' => asset('images/categories/dam_vay.png'),
		'tui' => asset('images/categories/dam_vay.png'),
		'phu-kien' => asset('images/categories/phu_kien.png'),
	],

	'type_category' => [
		1 => 'Danh mục cha',
		2 => 'Danh mục con',
	],
	'type_parent_category' => 1,
	'type_child_category' => 2,
];