var ProductsController = {
	addCart: function(e) {
		var product = $(e).parent().parent().parent().parent();
		var id = product.attr('data-item');
		var url = product.attr('data-route');
		var _token = product.find('input[name="_token"]').val();

		$.ajax({
			url: url,
			method: 'POST',
			data: {
				id: id,
				product_code: product.find('.block2-name .block2-product-code').html(),
				product_name: product.find('.block2-name .block2-product-name').html(),
				price: product.find('.block2-price').html(),
				image: product.find('img').attr('src'),
				_token: _token
			}
		}).done(function(response) {
			// Failed
			if (!response.status) {
				return swal(response.message, "", "error");
			}

			// Get data
			var data = response.data;
			var html = response.html;
			var count = response.count;

			// Header cart
			$('.header-wrapicon2 span.header-icons-noti').html(count);
			$('#header_cart').html('');
			$('#header_cart').append(html);

			// Dialog success
			swal(data.product_name, "đã được thêm vào giỏ!", "success");
		}).fail(function() {
			swal("Đã xảy ra lỗi hệ thống!", "", "error");
		});
	}
};

function formatMoney(amount, decimalCount = 0, decimal = ",", thousands = ".") {
	try {
    decimalCount = Math.abs(decimalCount);
    decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

    const negativeSign = amount < 0 ? "-" : "";

    let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
    let j = (i.length > 3) ? i.length % 3 : 0;

    return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
	} catch (e) {
	console.log(e)
	}
}