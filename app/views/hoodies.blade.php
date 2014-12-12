@extends('layouts.master')

@section('content')

<h1>HOODIES</h1><br>

Bat Logo Zip Up - $29.99<br>

<ul class="clearing-thumbs medium-block-grid-1" data-clearing>
  <li><a href="http://www.eternallynocturnal.com/images/hoodie_1.jpg"><img style="max-height:500px;max-width:500px" data-caption="Bat Logo Zip Up" src="http://www.eternallynocturnal.com/images/hoodie_1.jpg"></a></li>
</ul>


<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="TT65B8LYJP38S">
<input type="hidden" name="on0" value="Sizes:"><div class="blackouttext">


<div class="row">
  <div class="small-9 columns">
		<select name="os0">
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