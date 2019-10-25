ALTER TABLE orders ADD payment_method CHAR(1) NOT NULL DEFAULT '1' COMMENT '1: thanh toán khi nhận được hàng, 2: chuyển khoản' AFTER total_price;
