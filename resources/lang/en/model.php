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
		'is_new' => 'Là sản phẩm mới',
		'sale' => 'Khuyến mại',
		'price_sale' => 'Giá khuyến mại',
		'size' => 'Size',
		'color' => 'Màu',
		'count' => 'Số lượng',
	],
	'product_option' => [
		'id' => 'ID',
		'product_id' => 'Sản phẩm',
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
	'orders' => [
		'id' => 'ID',
		'status' => 'Trạng thái',
		'user_id' => 'Người dùng',
		'user_name' => 'Họ tên',
		'user_tel' => 'Số điện thoại',
		'user_email' => 'Email',
		'user_address' => 'Địa chỉ',
		'user_note' => 'Ghi chú',
		'total_price' => 'Tiền hóa đơn',
	],
	'order_detail' => [
		'id' => 'ID',
		'order_id' => 'Hóa đơn',
		'product_id' => 'Sản phẩm',
		'quantity' => 'Số lượng',
		'total_price_unit' => 'Tổng',
	],
];
