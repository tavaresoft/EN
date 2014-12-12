@extends('layouts.master')


@section('content')


<h1>SALE ITEMS</h1><br>


Eternally Nocturnal Panties - 14.99<br>

<ul class="clearing-thumbs medium-block-grid-1" data-clearing>
  <li><a href="http://www.eternallynocturnal.com/images/underwear_1.jpg"><img style="max-height:500px;max-width:500px" data-caption="Eternally Nocturnal Panties" src="http://www.eternallynocturnal.com/images/underwear_1.jpg"></a></li>
</ul>
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="96GF35M3SYD94">
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



Slouch Beanie - $17.99<br>



<ul class="clearing-thumbs clearing-feature small-block-grid-2" data-clearing>

  <li>
  <a href="http://www.eternallynocturnal.com/images/beanie_1.jpg"><img style="max-height:500px;max-width:500px" height="50%" width="50%" data-caption="Slouch Beanie" src="http://www.eternallynocturnal.com/images/beanie_1.jpg"></a></li>
  <li class="clearing-featured-img">

    <a href="http://www.eternallynocturnal.com/images/beanie_2.jpg">
      <img style="max-height:500px;max-width:500px" data-caption="Slouch Beanie" src="http://www.eternallynocturnal.com/images/beanie_2.jpg"></a></li>


  <li><a href="http://www.eternallynocturnal.com/images/beanie_1.jpg"></a></li>

</ul>



<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="BN2QHMU92VZ4C">


<button class="btn-large btn-inverse" type="submit" value="Add to Cart" name="submit">
      One Size Only &nbsp<span class="icon-shopping-cart"></span>
      </button>
</form>
<BR><br>




<h1>COMING SOON!</h1>

Eternally Detroit Pre-order - $34.99<br>

<ul class="clearing-thumbs medium-block-grid-1" data-clearing>
  <li><a href="http://www.eternallynocturnal.com/images/etdet.jpg"><img style="max-height:500px;max-width:500px" data-caption="Eternally Nocturnal Panties" src="http://www.eternallynocturnal.com/images/etdet.jpg"></a></li>
</ul>

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="HAKJUSQFNHBXS">
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
</form>





Eternally Nocturnal Zombie Attack T-shirt<br>

<ul class="clearing-thumbs small-block-grid-1" data-clearing>
  <li><a href="http://www.eternallynocturnal.com/images/zombie_1.png"><img style="max-height:800px;max-width:700px" data-caption="Eternally Nocturnal Zombie Attack" src="http://www.eternallynocturnal.com/images/zombie_1.png"></a></li>
</ul>


@stop