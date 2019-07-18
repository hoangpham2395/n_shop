<div id="del_confirm" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">{{transa('delete')}}</h4>
			</div>
			<div class="modal-body">
				<p>{{getMessage('delete_confirm')}}</p>
			</div>
			<div class="modal-footer">
				{!! Form::open(['method' => 'DELETE', 'id' => 'del_form']) !!}
				<button type="submit" class="btn btn-danger">{{transa('confirm')}}</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">{{transa('cancel')}}</button>
				{!! Form::close() !!}
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->