var ImageSlideController = {
    submit: function () {
        if (ImageSlideController.getTotalRow() > ImageSlideController.getTotalRowHasImage()) {
            return SystemController.showErrorMessage('Phải upload hết ảnh!');
        }
        $('form#form_image_slide').submit();
    },

    getTotalRow: function () {
        return $('.image_slide_list .image_slide_item').length;
    },

    getTotalRowHasImage: function () {
        return $('.image_slide_list .image_slide_item img.has_image').length;
    },

    uploadImage: function(input) {
        var idImg = $(input).attr('data-class-id');
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(idImg).attr('src', e.target.result).addClass('has_image');
            };
            reader.readAsDataURL(input.files[0]);
        }
    },

    addImage: function (input) {
        var total = ImageSlideController.getTotalRow(),
            prefix = '_prefix_',
            html = $('#image_slide_template').html();

        // append new
        $('.image_slide_list').append(html);

        // change data-id
        ImageSlideController.indexingImage('.image_slide_list .image_slide_item:last', prefix, total);
    },

    removeImage: function (input) {
        var total = ImageSlideController.getTotalRow();
        if (total <= 1) {
            return false;
        }

        // get id of image deleted
        var id = $(input).closest('.image_slide_item').attr('data-id');
        if (id) {
            // push delete id to form
            var deleteIds = $('#delete_ids').val();
            deleteIds = deleteIds ? deleteIds.split(',') : [];
            deleteIds.push(id);
            deleteIds = deleteIds.join(',');
            $('#delete_ids').val(deleteIds);
        }

        // delete row
        $(input).closest('.image_slide_new').remove();
        $(input).closest('.image_slide_item').remove();

        // reset index image
        var i = 0;

        $('.image_slide_list').find('.image_slide_item').each(function () {
            var prefix = $(this).attr('data-item');
            ImageSlideController.indexingImage(this, prefix, i);
            i = i + 1;
        });
    },

    indexingImage: function (className, prefix, number) {
        $(className).find('.image_slide_heading').html(parseInt(number) + 1);
        $(className).attr('data-item', number);

        var idImage = $(className).find('.image_slide_img').attr('id');
        idImage = idImage.replace(prefix, number);
        $(className).find('.image_slide_img').attr('id', idImage);

        var btnUploadImage = $(className).find('.btn_upload_image'),
            idBtnUploadImage = btnUploadImage.attr('id'),
            nameBtnUploadImage = btnUploadImage.attr('name'),
            classIdBtnUploadImage = btnUploadImage.attr('data-class-id');
        idBtnUploadImage = idBtnUploadImage.replace(prefix, number);
        btnUploadImage.attr('id', idBtnUploadImage);
        nameBtnUploadImage = nameBtnUploadImage.replace(prefix, number);
        btnUploadImage.attr('name', nameBtnUploadImage);
        classIdBtnUploadImage = classIdBtnUploadImage.replace(prefix, number);
        btnUploadImage.attr('data-class-id', classIdBtnUploadImage);

        var label = $(className).find('.label_upload_image').attr('for');
        label = label.replace(prefix, number);
        $(className).find('.label_upload_image').attr('for', label);

        var nameSort = $(className).find('.image_slide_sort').attr('name');
        nameSort = nameSort.replace(prefix, number);
        $(className).find('.image_slide_sort').attr('name', nameSort);
    }
};
