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
        $httpClient = new GuzzleClient();
        $url='http://80.209.226.8:3000/api/admin/getUsers';
        $response = $httpClient->request( 'Get', $url,[
        'headers' => [
        'Content-Type'     => 'application/json',
    ]]);
    $body = $response->getBody()->getContents();
       $us=json_decode($body);
         $users=$us->users;
         $status=$users[$id]->user_status;
            $dist=$users[$id]->distributor;
            $dist1=$users[$id]->representative;
        //  $post_data=$id;
       if($dist&&$dist1)
       {
        $url='http://80.209.226.8:3000/api/admin/getDistributor';
        $response = $httpClient->request( 'POST', $url,[
            'form_params' => [
                'id' =>$dist
            ],
        ]);
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $ts=json_decode($body);
              $vs=$ts->distributor;

         ////////////////////////representative////////////////////////////////
         $url='http://80.209.226.8:3000/api/admin/getRepresentative';
        $response1 = $httpClient->request( 'POST', $url,[
            'form_params' => [
                'id' =>$dist1
            ],
        ]);
            $statusCode1 = $response1->getStatusCode();
            $body1 = $response1->getBody()->getContents();
            $vs=json_decode($body1);
                 $vs1=$vs->representative;
          return  view('third',compact('vs','vs1','status'));
        }
        else if($dist)
        {
            $url='http://80.209.226.8:3000/api/admin/getDistributor';
        $response = $httpClient->request( 'POST', $url,[
            'form_params' => [
                'id' =>$dist
            ],
        ]);
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $ts=json_decode($body);
              $vs=$ts->distributor;
            return view('third',compact('vs','status'));
        }
         else if($dist1)
         {
            $url='http://80.209.226.8:3000/api/admin/getRepresentative';
            $response1 = $httpClient->request( 'POST', $url,[
                'form_params' => [
                    'id' =>$dist1
                ],
            ]);
                $statusCode1 = $response1->getStatusCode();
                $body1 = $response1->getBody()->getContents();
                $vs=json_decode($body1);
                 $vs1=$vs->representative;
                return view('third',compact('vs1','status'));
         }
         else
         {
            return view('third',compact('status'));
         }


        //     //  dd($vs1);
        //     $v=$vs->distributor;
        //     dump($v);
        //     // $v2=$vs1->representative;
        //     // dd($vs);
        //    if($vs->distributor ?? null)
        //    {
        //        $v=$vs->distributor;
        //     //    dd($v);
        //        return  view('third',compact('v','status'));
        //    }
        //    else
        //    {
        //        $v2=$vs1->representative ?? null;
        //     //    dd($v2);
        //        return  view('third',compact('v','status'));
        //    }


    }
    public function data() {
        $httpClient = new GuzzleClient();
        $url='http://80.209.226.8:3000/api/admin/getUsers';
        $response = $httpClient->request( 'Get', $url,[
        'headers' => [
        'Content-Type'     => 'application/json',
    ]]);
    $body = $response->getBody()->getContents();
       $us=json_decode($body);
         $users=$us->users;
        //  foreach($users as $n)
        //   dump($n);
        //   dd("k");
       return view('project',compact('users'));
    }
//     public function image($id){
//         //  $post_data=$id;
//         $httpClient = new GuzzleClient();
//         $url='http://80.209.226.8:3000/api/admin/getDistributor';
//         $response = $httpClient->request( 'POST', $url,[
//             'form_params' => [
//                 'id' =>$id
//             ],
//         ]);
//             $statusCode = $response->getStatusCode();
//             $body = $response->getBody()->getContents();
//             $vp=json_decode($body);
//             // $v=$vp->brands;
//             //  dd($v->brands[0]->distributor_id);
//             // $v= $vs->distributor ;

//             return  view('second',compact('v'));
//     }
// }
}
