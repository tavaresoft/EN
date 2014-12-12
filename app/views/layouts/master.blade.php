<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stay Awake to Create</title>
   <link href="http://www.eternallynocturnal.com/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
   <link rel="stylesheet" href="http://www.eternallynocturnal.com/foundation/css/foundation.css">
   <link rel="stylesheet" href="http://www.eternallynocturnal.com/foundation/css/normalize.css">

 <script src="http://www.eternallynocturnal.com/foundation/js/vendor/modernizr.js"></script>


  <style>




    body {
      margin:0;
      width: 100%;
      font-family:'Lato', sans-serif;
            background-image: url("http://www.eternallynocturnal.com/images/witeskull.png");
      background-repeat: repeat;
      background-size: 10%;
      text-align:center;
      background-color: #800000; 
      color: #ffffff;
    }

    .mainbody{
      width: 80%;
      border-radius:30px;

      margin-left: 10%;
      background-color: #000000;
      color: #ffffff;
    }

    .blackouttext{
      color:#000000;
    }

    .whiteoutext{
      color:#ffffff;
    }


    a, a:visited {
      text-decoration:none;
    }

    h1 {
      font-size: 32px;
      margin: 16px 0 0 0;
      color:#ffffff;
    }
  </style>

</head>



<body>



<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
<div class="right tab-bar-section"></div>
      </section>
<section class="middle tab-bar-section">
        <h1 class="title">Eternally Nocturnal Store</h1>
      </section>

    </nav>

    <aside class="left-off-canvas-menu">
      <ul class="off-canvas-list">

        <li><img src="http://www.eternallynocturnal.com/images/witeskull.png"></li>

<?php $categories = ClothingCategory::select('category_name')->distinct()->get();?>

        @foreach($categories as $cats)

            <?php $itemtype = ClothingCategory::where('category_name', $cats->category_name)->pluck('item_type');?>

        <li>{{link_to_route('type_sort', $cats->category_name, array('type' => $itemtype))}}</a></li>
        @endforeach
          <li><a href="http://www.eternallynocturnal.com/webstore/public/list/products/sale">Sales & Upcoming Items</a></li>

          <li><form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_s-xclick">

<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input class="btn btn-inverse" type="submit" value="View Cart" name="submit">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form></li>
      </ul>
    </aside>



    <section class="main-section">



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56104944-1', 'auto');
  ga('send', 'pageview');

</script>

<div class="mainbody" height="100%">
@yield('content')
</div>


    </section>

  <a class="exit-off-canvas"></a>

  </div>
</div>




   <script src="http://www.eternallynocturnal.com/bootstrap/js/bootstrap.min.js"></script>

  <script src="http://www.eternallynocturnal.com/foundation/js/vendor/jquery.js"></script>
  <script src="http://www.eternallynocturnal.com/foundation/js/foundation.min.js"></script>

  <script>
    $(document).foundation();
  </script>


</body>
</html>
