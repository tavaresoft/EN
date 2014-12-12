<table>

{{ Form::open(array('action' => 'ProductsController@store', 'files' => true)) }}

<td width="150px">{{ Form::text('name', '', array('placeholder' => 'Name')) }}<td>{{ Form::select('type', array(
	'tee' => 'Tee',
	'tank' => 'Tank',
	'3quarter' => '3/4 Tee',
	'hoodie' => 'Hoodie',
	'accessory' => 'Accessory',

	 )) }}

<td>{{ Form::checkbox('sale', '1')}} {{ Form::label('sale', 'On Sale')}}
<td>{{ Form::checkbox('upcoming', '1')}} {{ Form::label('upcoming', 'Upcoming Item')}} 
<td>{{ Form::checkbox('preorder', '1')}} {{ Form::label('preorder', 'Pre-Order')}} 


	<tr>
<td></td><tr>
<td>{{Form::text('paypal', '', array('placeholder' => 'Paypal Button ID'))}}
</table>

<br><br>
<table>

<th>{{Form::label('sizes', 'Available Sizes:')}}</th><tr>


<td>X-Small
		<td>{{Form::text('xsmall', '', array('placeholder' => 'Quantity...(if available)'))}}
			<td>{{Form::text('xsmall_price', '', array('placeholder' => 'Price...'))}}
			<td>{{Form::text('xsmall_cost', '', array('placeholder' => 'Cost...'))}}<tr>


<td>Small
		<td>{{Form::text('small', '', array('placeholder' => 'Quantity...(if available)'))}}
			<td>{{Form::text('small_price', '', array('placeholder' => 'Price...'))}}
			<td>{{Form::text('small_cost', '', array('placeholder' => 'Cost...'))}}<tr>


<td>Medium
		<td>{{Form::text('medium', '', array('placeholder' => 'Quantity...(if available)'))}}
			<td>{{Form::text('medium_price', '', array('placeholder' => 'Price...'))}}
			<td>{{Form::text('medium_cost', '', array('placeholder' => 'Cost...'))}}<tr>


<td>Large
		<td>{{Form::text('large', '', array('placeholder' => 'Quantity...(if available)'))}}
			<td>{{Form::text('large_price', '', array('placeholder' => 'Price...'))}}
			<td>{{Form::text('large_cost', '', array('placeholder' => 'Cost...'))}}<tr>


<td>X-Large		
		<td>{{Form::text('xlarge', '', array('placeholder' => 'Quantity...(if available)'))}}
			<td>{{Form::text('xlarge_price', '', array('placeholder' => 'Price...'))}}
			<td>{{Form::text('xlarge_cost', '', array('placeholder' => 'Cost...'))}}<tr>


<td>XX-Large		
		<td>{{Form::text('xxlarge', '', array('placeholder' => 'Quantity...(if available)'))}}
			<td>{{Form::text('xxlarge_price', '', array('placeholder' => 'Price...'))}}
			<td>{{Form::text('xxlarge_cost', '', array('placeholder' => 'Cost...'))}}<tr>


<td>XXX-Large		
		<td>{{Form::text('xxxlarge', '', array('placeholder' => 'Quantity...(if available)'))}}
			<td>{{Form::text('xxxlarge_price', '', array('placeholder' => 'Price...'))}}
			<td>{{Form::text('xxxlarge_cost', '', array('placeholder' => 'Cost...'))}}<tr>
		
		
			
</table>

<br><br>
<table>
<td>{{Form::label('description', 'Description')}}<td>{{ Form::textarea('description') }}
</table>
<br><br>
<table>
	<td>{{Form::label('image_1', 'Main Image')}} <td>{{ Form::file('image_1')}}<tr>
	<td>{{Form::label('image_2', 'Image 2')}}<td> {{ Form::file('image_2')}}<tr>
	<td>{{Form::label('image_3', 'Image 3')}}<td> {{ Form::file('image_3')}}<tr>
</table>
<br><br>
{{Form::submit('Create Product')}}

{{Form::close()}}
