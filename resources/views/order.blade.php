@extends('layouts.app')
@section('content')
<div class="container card">
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
        <form action="{{route('orders.store')}}" method="post">
            @csrf
            <input type="text" name="order_name"><br>
            <input type="submit" value="Order Now">
         </form>
    </div>
    <table>
        <thead>
            <tr>
                <td>Order name</td>
                <td>Status</td>
            </tr>

        </thead>
        <tr>
            @foreach($orders as $order)
            <tr>
                <td>{{$order->order_name}}</td>

                  <td>{{$order->active}}</td>
                   <td>
                       <form action='{{route('new',$order->id)}}' method='post'>
                          @csrf
                         <button class="btn btn-success" type="submit"> Approve</button>
                       </form>
                   </td>
            </tr>
            @endforeach
        </tr>
    <br><br>
        <tr>
            <td> <h1>Riders Showing</h1></td>
            @foreach($orders2 as $order)
            <tr>
                <td>{{$order->order_name}}</td>

                  <td>{{$order->active}}</td>
                  <td>
                    <form action='{{route('new1',$order->id)}}' method='post'>
                       @csrf
                      <button class="btn btn-success" type="submit"> DisApprove</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tr>

    </table>
    @php
    function distance($lat1, $lon1, $lat2, $lon2, $unit) {
        if (($lat1 == $lat2) && ($lon1 == $lon2)) {
          return 0;
        }
        else {
          $theta = $lon1 - $lon2;
          $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
          $dist = acos($dist);
          $dist = rad2deg($dist);
          $miles = $dist * 60 * 1.1515;
          $unit = strtoupper($unit);

          if ($unit == "K") {
            return ($miles * 1.609344);
          } else if ($unit == "N") {
            return ($miles * 0.8684);
          } else {
            return $miles;
          }
        }
      }

      echo distance(32.9697, -96.80322, 29.46786, -98.53506, "M") . " Miles<br>";
      echo distance(32.9697, -96.80322, 29.46786, -98.53506, "K") . " Kilometers<br>";
      echo distance(32.9697, -96.80322, 29.46786, -98.53506, "N") . " Nautical Miles<br>";

@endphp;
</div>

@endsection
