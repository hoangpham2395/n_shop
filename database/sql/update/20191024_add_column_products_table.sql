ALTER TABLE products ADD is_selling CHAR(1) NOT NULL DEFAULT '0' COMMENT '0: no, 1: yes' AFTER is_new;
