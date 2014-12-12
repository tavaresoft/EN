@extends('layouts.master')

@section('content')

<h1>{{Str::upper($product->type)}}S</h1><br>

{{$product->name}} - ${{$product->priceCheck('small')}}<br>

<ul class="clearing-thumbs medium-block-grid-1" data-clearing>
@foreach($product->getPictures() as $pic)
  <li><a href="//localhost/etnoc_a/public/images/{{$pic->image_1}}"><img data-caption="{{$product->name}}" src="//localhost/etnoc_a/public/images/{{$pic->image_1}}"></a></li>
@endforeach
</ul>


<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="{{$product->paypal}}">
<input type="hidden" name="on0" value="Sizes:"><div class="blackouttext">


<div class="row">
	<div class="small-2 columns">&nbsp</div>
  <div class="small-6 columns">
		<select name="os0" style="max-width:370px">
			<option value="Small">Small</option>
			<option value="Medium">Medium</option>
			<option value="Large">Large</option>			
		</select>
  </div>

  <div class="small-1 columns">

			<input type="hidden" name="currency_code" value="USD">
			<button class="btn-large btn-inverse" type="submit" value="Add to Cart" name="submit">
			<span class="icon-shopping-cart"></span>
			</button>

	</div>



  <div class="small-2 columns"></div>


</form></div></div>
<br><br>

@stop