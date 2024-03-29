@extends('frontend.master')
@section('title', 'Trang chủ')
@section('main')

<div id="wrap-inner">
	<div class="products">
		<h3 style="text-transform:none; color:#054a6a;font-size: 30px;font-family: 'Archivo Narrow', sans-serif;margin-top: 60px; margin-bottom: 20px;">Sản phẩm nổi bật</h3>
		<div class="product-list row">
			@foreach($featured as $item)
			<div class="product-item col-md-3 col-sm-6 col-xs-12">
				<a href="#"><img src="{{asset("lib/storage/app/avatar/$item->prod_img")}}" class="img-thumbnail"></a>
				<p><a href="#">{{$item->prod_name}}</a></p>
				<p class="price">{{number_format($item->prod_price,0,',','.')}}</p>	  
				<div class="marsk">
					<a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">Xem chi tiết</a>
				</div>                                    
			</div>
			@endforeach
		</div>                	                	
	</div>

	<div class="products">
		<h3 style="text-transform:none; color:#054a6a;font-size: 30px;font-family: 'Archivo Narrow', sans-serif;margin-top: 60px;margin-bottom: 20px;">Sản phẩm mới</h3>
		<div class="product-list row">
			@foreach($news as $item)
			<div class="product-item col-md-3 col-sm-6 col-xs-12">
				<a href="#" height="150px" ><img  src="{{asset("lib/storage/app/avatar/$item->prod_img")}}" class="img-thumbnail"></a>
				<p><a href="#">{{$item->prod_name}}</a></p>
				<p class="price">{{number_format($item->prod_price,0,',','.')}}</p>	  
				<div class="marsk">
					<a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">Xem chi tiết</a>
				</div>                        	                        
			</div>
			@endforeach
		</div>    
	</div>
</div>
@stop
					
					