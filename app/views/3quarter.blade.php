@extends('layouts.master')

@section('content')




<h1>3/4 SLEEVE</h1><br>



	 

Eternally Nocturnal Hockey Mask - $24.99<br>





<ul class="clearing-thumbs small-block-grid-2" data-clearing>
  <li><a href="http://www.eternallynocturnal.com/images/hockey_mask_1.jpg"><img style="max-height:300px;max-width:300px" data-caption="Eternally Nocturnal Hockey Mask" src="http://www.eternallynocturnal.com/images/hockey_mask_1.jpg"></a></li>
  <li><a href="http://www.eternallynocturnal.com/images/hockey_mask_2.jpg"><img style="max-height:300px;max-width:300px" data-caption="Eternally Nocturnal Hockey Mask" src="http://www.eternallynocturnal.com/images/hockey_mask_2.jpg"></a></li>
</ul>


<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="6WATDDRKGNFK4">
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

</div>
</form></div>
<br><br>


@stop