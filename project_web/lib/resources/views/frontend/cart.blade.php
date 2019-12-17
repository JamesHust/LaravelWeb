@extends('frontend.master')
@section('title','Giở hàng')
@section('main')
<link rel="stylesheet" href="css/cart.css">
<script type="text/javascript">
	function updateCart(quantity,id){
		$.get(
			'{{asset('cart/update')}}',
			{quantity:quantity,id:id},
			function(){
				location.reload();
			}
			);
	}
</script>
<div id="wrap-inner">
	<div id="list-cart">
		<h3 style="text-decoration: none;color:#054a6a;">Giỏ hàng</h3>
		@if(Cart::count()>=1)
		<form>
			<table class="table table-bordered .table-responsive text-center">
				<tr class="active">
					<td width="11.111%">Ảnh mô tả</td>
					<td width="22.222%">Tên sản phẩm</td>
					<td width="22.222%">Số lượng</td>
					<td width="16.6665%">Đơn giá</td>
					<td width="16.6665%">Thành tiền</td>
					<td width="11.112%">Xóa</td>
				</tr>
				@foreach($items as $item)
				<tr>
					<td><img height="100px" class="img-responsive" src="{{asset('lib/storage/app/avatar/'.$item->attributes->img)}}"></td>
					<td>{{$item->name}}</td>
					<td>
						<div class="form-group">
							<input class="form-control" type="number" value="{{number_format($item->quantity)}}" onchange="updateCart(this.value,'{{$item->id}}')">
						</div>
					</td>
					<td><span class="price">{{number_format($item->price),0,',','.'}}</span></td>
					<td><span class="price">{{number_format($item->price*$item->quantity),0,',','.'}}</span></td>
					<td><a href="{{asset('cart/delete/'.$item->id)}}">Xóa</a></td>
				</tr>
				@endforeach
			</table>
			<div class="row" id="total-price">
				<div class="col-md-6 col-sm-12 col-xs-12">										
						Tổng thanh toán: <span class="total-price" style="font-size: 25px; color: #054a6a;">{{number_format($total,0,',','.')}} VNĐ</span>
																								
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<a href="{{asset('/')}}" class="my-btn btn" style="border-radius:10px; background-image: linear-gradient(-225deg, #22E1FF 0%, #1D8FE1 48%, #625EB1 100%);">Mua tiếp</a>
					<a href="{{asset('/')}}" class="my-btn btn" style="border-radius:10px; background-image: linear-gradient(-225deg, #22E1FF 0%, #1D8FE1 48%, #625EB1 100%);">Cập nhật</a>
					<a href="{{asset('cart/delete/all/')}}" class="my-btn btn" style="border-radius: 10px;">Xóa giỏ hàng</a>
				</div>
			</div>
		</form> 
		<div id="xac-nhan">
		<h3 style="text-decoration: none;color:#054a6a;">Xác nhận mua hàng</h3>
		<form method="post">
			<div class="form-group">
				<label for="email">Email address:</label>
				<input required type="email" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="name">Họ và tên:</label>
				<input required type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<label for="phone">Số điện thoại:</label>
				<input required type="number" class="form-control" id="phone" name="phone">
			</div>
			<div class="form-group">
				<label for="add">Địa chỉ:</label>
				<input required type="text" class="form-control" id="add" name="add">
			</div>
			<div class="form-group text-right">
				<button type="submit" class="btn btn-default" style="border-radius:10px; background-image: linear-gradient(-225deg, #22E1FF 0%, #1D8FE1 48%, #625EB1 100%);">Đặt hàng online</button>
			</div>
			{{csrf_field()}}
		</form>
		@else
		<h6 >Giỏ hàng rỗng!</h6>
		@endif
	</div>            	                	
	</div>

	
</div>
@stop
					
					