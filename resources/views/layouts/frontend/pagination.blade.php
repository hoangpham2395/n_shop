<div class="pagination flex-m flex-w p-t-26">
	{{ $products->appends(Request::except('page'))->render() }}
</div>