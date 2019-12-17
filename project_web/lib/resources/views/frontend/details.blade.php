@extends('frontend.master')
@section('title', 'Chi tiết sản phẩm')
@section('main')
<link rel="stylesheet" href="css/details.css">
<div id="wrap-inner">
	<div id="product-info">
		<div class="clearfix"></div>
		<h3 style="text-transform:none; color:#054a6a;font-size: 30px;font-family: 'Archivo Narrow', sans-serif;margin-top: 50px;">{{$item->prod_name}}</h3>
		<div class="row">
			<div id="{{$item->prod_id}}" class="col-xs-12 col-sm-12 col-md-3 text-center">
				<img width="200px" src="{{asset('lib/storage/app/avatar/'.$item->prod_img)}}">
			</div>
			<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
				<p>Giá: <span class="price" style="color:#1c3845">{{number_format($item->prod_price,0,',','.')}}</span></p>
				<p>Bảo hành: <span style="color:#1c3845;font-size: 19px; font-family: 'Cabin', sans-serif;">{{$item->prod_warranty }}</span></p> 
				<p>Phụ kiện: <span style="color:#1c3845;font-size: 19px; font-family: 'Cabin', sans-serif;">{{$item->prod_accessories}}</span></p>
				<p>Tình trạng: <span style="color:#1c3845;font-size: 19px; font-family: 'Cabin', sans-serif;">{{$item->prod_condition}}</span></p>
				<p>Khuyến mại: <span style="color:#1c3845;font-size: 19px; font-family: 'Cabin', sans-serif;">{{$item->prod_promotion}}</span></p>
				<p>Còn hàng: <span style="color:#1c3845;font-size: 19px; font-family: 'Cabin', sans-serif;">@if($item->prod_status==1) Còn hàng @else Hết hàng @endif</span></p>
				<p class="add-cart text-center" style="border-radius:20px; background-image: linear-gradient(-225deg, #22E1FF 0%, #1D8FE1 48%, #625EB1 100%);"><a href="{{asset('cart/add/'.$item->prod_id)}}">Thêm vào giỏ hàng</a></p>
			</div>
		</div>							
	</div>
	<div id="product-detail">
		<h3 style="text-transform:none; color:#054a6a;font-size: 30px;font-family: 'Archivo Narrow', sans-serif;margin-top: 50px;">Chi tiết sản phẩm</h3>
		<p class="text-justify">{!!$item->prod_description!!}</p>
	</div>
	<div id="comment">
		<h3 style="text-transform:none; color:#054a6a;font-size: 30px;font-family: 'Archivo Narrow', sans-serif; margin-top: 50px;">Bình luận</h3>
		<div class="col-md-9 comment">
			<form method="post">
				<div class="form-group">
					<label for="email">Email:</label>
					<input required type="email" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
					<label for="name">Tên:</label>
					<input required type="text" class="form-control" id="name" name="name">
				</div>
				<div class="form-group">
					<label for="cm">Bình luận:</label>
					<textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
				</div>
				<div class="form-group text-right">
					<button type="submit" class="btn btn-default" style="border-radius:10px; background-image: linear-gradient(-225deg, #22E1FF 0%, #1D8FE1 48%, #625EB1 100%);">Gửi</button>
				</div>
				{{csrf_field()}}
			</form>
		</div>
	</div>
	<div id="comment-list">
		@foreach($comments as $comment)
		<ul>
			<li class="com-title">
				{{$comment->com_name}}
				<br>
				<span>{{date('d/m/Y H:i',strtotime($comment->created_at))}}</span>	
			</li>
			<li class="com-details">
				{{$comment->com_content}}
			</li>
		</ul>
		@endforeach
	</div>
</div>	
@stop				
	