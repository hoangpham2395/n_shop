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
		'facebook_name' => 'Brownstore.vn',
		'facebook_url' => 'https://www.facebook.com/brownstore.vn',
		'map' => 'https://www.google.com/maps/place/72%2F6+Tr%C6%B0%C6%A1ng+Qu%E1%BB%91c+Dung,+Ph%C6%B0%E1%BB%9Dng+10,+Ph%C3%BA+Nhu%E1%BA%ADn,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7956822,106.6702686,17z/data=!3m1!4b1!4m5!3m4!1s0x317529e91126ec49:0x3e6cf0a86fedd590!8m2!3d10.7956822!4d106.6724573?hl=vi',
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