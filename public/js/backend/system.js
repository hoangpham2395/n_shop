var SystemController = {
	delete: function(e) {
		$('form#del_form').attr('action', $(e).attr('data-route'));
	},
	changeToSlug: function(e) {
	    var title, slug;
	 
	    //Lấy text từ thẻ input title 
	    title = $(e).val();
	 
	    //Đổi chữ hoa thành chữ thường
	    slug = title.toLowerCase();
	 
	    //Đổi ký tự có dấu thành không dấu
	    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
	    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
	    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
	    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
	    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
	    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
	    slug = slug.replace(/đ/gi, 'd');
	    //Xóa các ký tự đặt biệt
	    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
	    //Đổi khoảng trắng thành ký tự gạch ngang
	    slug = slug.replace(/ /gi, " - ");
	    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
	    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
	    slug = slug.replace(/\-\-\-\-\-/gi, '-');
	    slug = slug.replace(/\-\-\-\-/gi, '-');
	    slug = slug.replace(/\-\-\-/gi, '-');
	    slug = slug.replace(/\-\-/gi, '-');
	    //Xóa các ký tự gạch ngang ở đầu và cuối
	    slug = '@' + slug + '@';
	    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
	    //In slug ra textbox có id “slug”
	    $('#slug').val(slug);
	}
};

var ProductsController = {
	getTotalRow: function () {
        return $('.product_option_list').find('.product_option_info').length;
    },
    replacePrefix: function (selector, prefix, newName) {
        $(selector).find('input, select, div, tr, button, label').each(function () {
            var pattern = /_prefix_/gm;
            // change name
            var name = $(this).attr('name');
            if (name !== undefined && name.length > 0) {
                name = name.replace('[' + prefix + ']', '[' + newName + ']');
                $(this).attr('name', name);
            }
            // change class
            var className = $(this).attr('class');
            if (className !== undefined && className.length > 0) {
                className = className.replace(pattern, newName);
                $(this).attr('class', className);
            }
            // change id
            var idName = $(this).attr('id');
            if (idName !== undefined && idName.length > 0) {
                idName = idName.replace(pattern, newName);
                $(this).attr('id', idName);
            }
            // change data id
            var dataId = $(this).data('id');
            if (dataId !== undefined && dataId.length > 0) {
                dataId = dataId.replace(pattern, newName);
                $(this).attr('data-id', dataId);
            }
            // change data index
            var dataIndex = $(this).data('index');
            if (dataIndex !== undefined && dataIndex.length > 0) {
                dataIndex = dataIndex.replace(pattern, newName);
                $(this).attr('data-index', dataIndex);
            }

            // change for
            var _for = $(this).attr('for');
            if (_for !== undefined && _for.length > 0) {
                _for = _for.replace(pattern, newName);
                $(this).attr('for', _for);
            }

            // change name of input file
            name = $(this).attr('name');
            if (name !== undefined && name.length > 0 && name.startsWith('_file_name')) {
                name = name.replace(pattern, newName);
                $(this).attr('name', name);

                var value = $(this).attr('value');
                value = value.replace(pattern, newName);
                $(this).attr('value', value);
            }
        });
    },
    bindDeleteBtn: function () {
        var total = ProductsController.getTotalRow();
        if (total <= 1) {
            $('.product_option_list .product_option_info .btn-delete-option').not(':first').addClass('hide');
        } else {
            $('.product_option_list .product_option_info .btn-delete-option').not(':first').removeClass('hide');
        }
        setTimeout(function () {
            $('.product_option_list .product_option_info').each(function (e) {
                $(this).find('input,select,hidden').each(function (ex) {
                    var name = $(this).attr('name');
                    name = name.replace(/\[[0-9]*/, '[' + e);
                    $(this).attr('name', name);
                })
            })
        }, 500);
    },
	addOption: function(e) {
		var total = ProductsController.getTotalRow(),
            prefix = '_prefix_',
            newName = total,
            html = $('#product_option_template').html();

        // append new model
        $('.product_option_list').append($(html));

        // change data-id
        $('.product_option_list .product_option_info:last').attr('data-id', total);
        $('.product_option_list .product_option_info:last .product_option_info').attr('data-id', total);
        // change panel heading
        $('.product_option_list .product_option_info:last').find('.panel_heading').empty().text(total + 1);
        $('.product_option_template .product_option_info').find('.panel_heading').empty().text(prefix);
        // change tag name, id, class
        // ProductsController.replacePrefix('.product_option_list .new_model_shop_media:last', prefix, newName);
        ProductsController.bindDeleteBtn();
	},
	removeOption: function (e) {
        if (ProductsController.getTotalRow() <= 1) {
            return false;
        }
        // delete old data
        $(e).closest('.product_option_info').remove();
        
        $('.product_option_list').find('.product_option_info').each(function(index) {
        	$(this).find('.panel_heading').empty().text(index + 1);
        });
    }
};