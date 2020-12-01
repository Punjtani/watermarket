<?php

namespace App\Http\Controllers;

use App\Models\Order;
use GuzzleHttp\Client;
use App\Models\Customer;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Support\Facades\Session;
use Tymon\JWTAuth\Exceptions\JWTException;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        session()->forget('status2');

        return redirect('/');
    }
    public function index(Request $request)
    {
        $post_data=$request->all();
          $httpClient = new GuzzleClient();
        // $url='https://mywatermarket.com:3001/api/admin/login';
        $url='http://80.209.226.8:3000/api/admin/login';
        $response = $httpClient->request( 'POST', $url,[
        'body' => json_encode($post_data),
        'headers' => [
        'Content-Type'     => 'application/json',
    ]]);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $v=json_decode($body);
        // dd($v->token);
        $status=$v->success;

        if($v->success)
        {
            $status=$v->success;
            session(['status2'=> $status]);
            return redirect('/home')->with(['status' => $v->message]);
        }
        else
        {
                  $status=$v->success;
                //   return view('login',['status' => json_encode($body)]);
                  return view('login',['status' => $v->message]);
        }
    }
    public function represent($id){
        //  $post_data=$id;
        $httpClient = new GuzzleClient();
        $url='http://80.209.226.8:3000/api/admin/getDistributor';
        $response = $httpClient->request( 'POST', $url,[
            'form_params' => [
                'id' =>$id
            ],

        ]);
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $vs=json_decode($body);

            $v= $vs->distributor ;
            return  view('third',compact('v'));
    }
    public function data() {
        $httpClient = new GuzzleClient();
        $url='http://80.209.226.8:3000/api/admin/getUsers';
        $response = $httpClient->request( 'Get', $url,[
        'headers' => [
        'Content-Type'     => 'application/json',
    ]]);
    $body = $response->getBody()->getContents();
       $v=json_decode($body);
       $users=$v->users;
       return view('project',compact('users'));
    }
    public function image($id){
        //  $post_data=$id;
        $httpClient = new GuzzleClient();
        $url='http://80.209.226.8:3000/api/admin/getDistributor';
        // $url='http://80.209.226.8:3000/api/admin/getRepresentative';
        $response = $httpClient->request( 'POST', $url,[
            'form_params' => [
                'id' =>$id
            ],
        ]);
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $vp=json_decode($body);
            $v=$vp->brands;
            //  dd($v->brands[0]->distributor_id);
            // $v= $vs->distributor ;

            return  view('second',compact('v'));
    }
    // public function getUser(Request $request)
    // {
    //     JWTAuth::invalidate($request->token);
    //     $this->validate($request, [
    //         'token' => 'required'
    //     ]);

    //     $user = JWTAuth::authenticate($request->token);

    //     return response()->json(['user' => $user]);
    // }
    // public function logout(Request $request)
    // {
    //     $this->validate($request, [
    //         'token' => 'required'
    //     ]);

    //     try {
    //         JWTAuth::invalidate($request->token);

    //         return response()->json([
    //             'success' => true,
    //             'message' => 'User logged out successfully'
    //         ]);
    //     } catch (JWTException $exception) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Sorry, the user cannot be logged out'
    //         ], Response::HTTP_INTERNAL_SERVER_ERROR);
    //     }
    // }

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
