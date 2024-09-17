<!DOCTYPE html>
<html>

<head>
  @include('home.css')

  <style type="text/css">
    
    .div_deg
    {
       display: flex;
      justify-content: center;
      align-items: center;
      margin: 60px;
    }

    .order_deg
    {
      display: flex;
      justify-content: center;
      align-items: center;
    }

     table{
           border: 2px solid black;
           text-align: center;
         
       }

       
       th{

        border: 2px solid black;
        text-align: center;
        background-color:black ;
        padding: 15px;
        font-size: 20px;
        font-weight: bold;
        color: white;
       }

       td{

        color: black;
        padding :10px;
        border: 1px solid skyblue; 
       }
       .cart_value
       {
        text-align: center;
        margin-bottom: 70px;
        padding :18px;
        
       }

       .order_deg
       {
        padding-right: 100px;
        margin-top: -50px;
       }

       lable
       {
        display: inline-block;
        width: 150px;
       }

       .div_gap
       {
        padding: 20px;

       }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- slider section -->

   

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->
  

  

  <div class="div_deg">

   
    
    <table>
      
      <tr>
        <th>Product Title</th>
        <th>Price</th>
        <th>Image</th>      
      </tr>

      <?php

      $value = 0;

      ?>

      
      @foreach($cart as $cart)
     <tr>
        <td>{{$cart->product->title}}</td>
        <td>{{$cart->product->price}}</td>
        <td>   
          <img width="150" src= "/products/{{$cart->product->image}}">
        </td>
      </tr>

      <?php
      $value = $value + $cart->product->price;
      ?>

      @endforeach
       
    </table>
  </div>

  <div class="cart_value">
    <h3>Total Value of Cart is: ${{$value}}</h3>
  </div>
  <!-- contact section -->

   <div class="order_deg">

      <form action="{{url('confirm_order')}}" method="Post">

        @csrf

        <div class="div_gap">
          <label>Receiver Name</label>
          <input type="text" name="name" value="{{Auth::user()->name}}">
          
        </div>

        <div class="div_gap">
          <label>Receiver Address</label>
          <textarea name="address">{{Auth::user()->address}}</textarea>
        </div>

         <div class="div_gap">
          <label>Receiver Phone</label>
          <input type="text" name="phone" value="{{Auth::user()->phone}}">
        </div>

         <div class="div_gap">
          
          <input class="btn btn-primary" type="submit" value="Cash On Delivery">

          <a class="btn btn-success" href="{{url('stripe',$value)}}">Pay Using Card</a>
          
        </div>

      </form>

    </div>

    

  <!-- end contact section -->

     @include('home.footer')

  <!-- info section -->

  
</body>

</html>