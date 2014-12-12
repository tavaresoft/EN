F:\PHP\htdocs\etnoc_a\app/views/customers/index.blade.php




@foreach($products as $table)



<p>
		<td>{{link_to_route('products.show', $p->name, $p->id)}}
		<td>{{$p->description}}<tr>






	


@endforeach