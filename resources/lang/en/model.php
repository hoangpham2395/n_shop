<?php

return [
	'admin' => [
		'id' => 'ID',
		'name' => 'Tên',
		'email' => 'Email',
		'password' => 'Mật khẩu',
		'role_type' => 'Quyền',
		'confirm_password' => 'Xác nhận mật khẩu',
	],
	'categories' => [
		'id' => 'ID',
		'category_parent' => 'Danh mục cha',
		'category_name' => 'Tên danh mục',
		'category_slug' => 'Slug danh mục',
		'category_type' => 'Kiểu danh mục',
	],
	'products' => [
		'id' => 'ID',
		'product_code' => 'Mã sản phẩm', 
		'category_id' => 'Danh mục',
		'product_name' => 'Tên sản phẩm', 
		'product_slug' => 'Slug sản phẩm', 
		'made_in' => 'Xuất xứ', 
		'material' => 'Chất liệu', 
		'price' => 'Giá', 
		'image' => 'Ảnh',
		'content' => 'Nội dung', 
		'sale' => 'Khuyến mại', 
		'price_sale' => 'Giá khuyến mại',
		'size' => 'Size',
		'color' => 'Màu',
		'count' => 'Số lượng',
	],
	'contact' => [
		'name' => 'Họ tên của bạn',
		'email' => 'Email',
		'tel' => 'Số điện thoại',
		'content' => 'Nội dung',
	],
];