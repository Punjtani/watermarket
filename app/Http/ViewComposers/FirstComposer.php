<?php
namespace App\Http\ViewComposers;

use App\Models\Menu;
use GuzzleHttp\Client as GuzzleClient;
class FirstComposer
{
    public function compose($view)
    {
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
}
