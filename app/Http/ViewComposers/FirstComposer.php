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
       $v=json_decode($body);
       $users=$v->users;
       $view->with('users', $v->users);
    }
}
