<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tangkapanController extends Controller
{
    //
    public function index(){
        $client = new \GuzzleHttp\Client();
        $response =$client->request('GET', 'http://localhost:1234/viewDataSiswa');
        $form = json_decode($response->getBody()->getContents(),true);
        
        return view('formsukses',['formsukses'=>$form]);
    }
}