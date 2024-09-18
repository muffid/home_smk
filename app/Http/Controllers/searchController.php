<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function sea(Request $request)
    {
        // dd($request);
        $client = new Client();
        $response = $client->post('https://api.smkbudimuliapakisaji.sch.id/key', [
            'form_params' => [
                'key' => $request->keyword,
            ],
        ]);
        $responseData = json_decode($response->getBody(), true);
        // dd($responseData);
        return view('search', ['data' => $responseData]);
    }
    
}