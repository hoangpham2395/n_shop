<div id="order_change_status" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Thay đổi trạng thái đơn hàng</h4>
            </div>
            <div class="modal-body">
                {!! Form::select('status', getConfig('order_status_text'), '', ['id' => 'order_new_status', 'class' => 'form-control']) !!}
                <span id="order_status_error" class="red"></span>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">{{transa('confirm')}}</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">{{transa('cancel')}}</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $('#order_status').on('click', function () {
            // Reset message error in modal
            $('#order_status_error').html('');
            // Show modal
            $('#order_change_status').modal('show');
            var id = $(this).attr('data-id');
            // Set value of status in modal
            $('#order_change_status select').val($(this).attr('data-status'));
            // Submit
            $('#order_change_status button[type=submit]').on('click', function () {
                $.ajax({
                    url: '{{route('backend.orders.change_status')}}',
                    method: 'POST',
                    data: {
                        id: id,
                        status: $('#order_change_status select').val(),
                        _token: '{{csrf_token()}}'
                    }
                }).done(function (response) {
                    // Failed
                    if (!response.status) {
                        $('#order_status_error').html(response.message);
                    } else {
                        // Success
                        $('#order_status').html(response.data.text_status);
                        // Reset status
                        $('#order_status').attr('data-status', response.data.status);
                        $('#order_change_status').modal('hide');
                    }
                }).fail(function () {
                    $('#order_status_error').html('{{getMessage('system_error')}}');
                });
            });
        });
    </script>
@endpush
