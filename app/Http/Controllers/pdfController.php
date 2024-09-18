<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use GuzzleHttp\Client;



class pdfController extends Controller
{
    //

    
    
    // public function index(){
    //     //menampilkan halaman laporan
    //     return view('laporan');
    // }
    // public function ambil(){
      

        
    //     $data = PDF::loadView('datapdf', ['data'=> 'ini adalah contoh data dalam pdf']);
    //     return $data->download('formulirPPDB.pdf');
    // }

    // public function pdf($id)
    // {
    //     $client = new Client();
    //     $response = $client->get('http://localhost:1234/joinsiswa/'.$id);
    //     $responsebody = $response->getBody()->getContents();
    //     $data = json_decode($responsebody);
    //     return view('formulirPPDB.pdf')->with('data', $data);
    // }
        // public function pdf($x){
            
        //     //
        //     $client = new Client();
        //     $response = $client->get('http://localhost:1234/joinsiswa/'.$x);
        //     $responseBody = $response->getBody()->getContents();
        //     $data = json_decode($responseBody);
            
            
        //     $pdf = PDF::loadView('laporan', ['data'=>$data]);
        //              return $pdf->download('FormulirSMKBM.pdf');
        // } 
         public function pdf2($id)
        {
            $client = new Client();
            // dd($id);
            $response = $client->get('https://api.smkbudimuliapakisaji.sch.id/joinsiswa/'.$id);
            $responsebody = $response->getBody()->getContents();
            $data = json_decode($responsebody);
            // $co = (array) $data1[0];
            // $x[] = $co;
            //  var_dump($data);
            // dd($data);
            // return view('pdf', ['data', $data]);
            return view('pdf')->with('data', $data);

            // return response()->download(public_path('file.pdf'));->with('data', $data)

    
        }
        

    
}




