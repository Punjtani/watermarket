<?php

namespace App\Http\Controllers;

use App\Models\Order;
use GuzzleHttp\Client;
use App\Models\Customer;
use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $post_data=$request->all();
          $httpClient = new GuzzleClient();
        $url='http://mywatermarket.com:3000/api/admin/login';

        $response = $httpClient->request( 'POST', $url,[
        'body' => json_encode($post_data),
        'headers' => [
        'Content-Type'     => 'application/json',
    ]]);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $v=json_decode($body);
        $status=$v->success;

        if($v->success)
        {
            $status=$v->success;
            return view('project',['status' => $v->message]);
        }
        else
        {
                  $status=$v->success;
                //   return view('login',['status' => json_encode($body)]);
                  return view('login',['status' => $v->message]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $c=array_merge(['customer_id'=>1],$request->all());
         $v=Order::create($c);
          Order::all();
            return redirect()->back();
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
