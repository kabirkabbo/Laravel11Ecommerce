<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	  @include('home.css')


	   <style type="text/css">
    	
    	table
    	{
    		border: :2px solid skyblue;
    		text-align: center;
    		width: 800px;
    	}

    	td
    	{
    		
    		padding: 10px;
    		border: 1px solid skyblue;
        
    	}

    	th 
    	{
    		border: :2px solid skyblue;
    		background-color: black;
            color: white;
    		font-size: 18px;
    		font-weight: bold;
    		text-align: center;
    	}
    	.div_center
    	{
    		display: flex;
    		justify-content: center;
    		align-items: center;
    		margin: 60px;
    	}
    </style>
</head>
<body>

<div class="hero_area">
    <!-- header section strats -->
    @include('home.header')

    <div>
    	
    	<table class="div_center">
    		
    		<tr>
    			<th>Product Name</th>
    			<th>Price</th>
    			<th>Delivery Status</th>
    			<th>Image</th>
    		</tr>
            
            @foreach($order as $order)
    		<tr>
    			<td>{{$order->product->title}}</td>
    			<td>{{$order->product->price}}</td>
    			<td>{{$order->status}}</td>
    			<td>
    				<img width="150" height="90" src= "products/{{$order->product->image}}">
    			</td>
    		</tr>
    		@endforeach
    		
    	</table>
    </div>

    
</div>


     @include('home.footer')
</body>
</html>