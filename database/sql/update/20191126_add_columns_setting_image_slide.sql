ALTER TABLE setting_image_slide ADD title VARCHAR (64) NULL COMMENT 'Tiêu đề' AFTER image;
ALTER TABLE setting_image_slide ADD detail VARCHAR(255) NULL COMMENT 'Chi tiết' AFTER title;
ALTER TABLE setting_image_slide ADD url VARCHAR(255) NULL COMMENT 'Đường dẫn' AFTER detail;
