<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class UtamaController extends Controller
{
    //berita terkini
    public function terbaru()
        {
            $client = new Client();
            $response = $client->get('https://api.smkbudimuliapakisaji.sch.id/newss');
            $responsebody = $response->getBody()->getContents();
            // $data = json_decode($responsebody)[0];
            $data = json_decode($responsebody);
            
            //logo
            $client3 = new Client();
            $response3 = $client3->get('https://api.smkbudimuliapakisaji.sch.id/logosh');
            $responsebody3 = $response3->getBody()->getContents();
            $logo = json_decode($responsebody3);
            //end logo
            
            // guru
            $client4 = new Client();
            $response4 = $client4->get('https://api.smkbudimuliapakisaji.sch.id/guru');
            $responsebody4 = $response4->getBody()->getContents();
            $guru = json_decode($responsebody4);
            //end guru
            
            // jurusan
            // sija
            $client2 = new Client();
            $response2 = $client2->get('https://api.smkbudimuliapakisaji.sch.id/kategoriid');
            $responsebody2 = $response2->getBody()->getContents();
            $data2 = json_decode($responsebody2)[0];
            //tkj
            $data3 = json_decode($responsebody2)[1];
            //mm
            $data4 = json_decode($responsebody2)[2];
            //bd
            $data5 = json_decode($responsebody2)[3];
            
            // 
            // $response = Http::get('https://example.com/api/data');
            // $data = $response->json();
            
            $client5 = new Client();
        $response5 = $client5->get('https://api.smkbudimuliapakisaji.sch.id/newss');
        $responsebody5 = $response5->getBody()->getContents();
        $data9 = json_decode($responsebody5);
      
        $collection5 = collect($data9);
            
            
            
            
            $collection = collect($data);
            
            $prestasi = collect($data)->where('id_kategori', 10)->take(3)->all();
            $pengumuman = collect($data)->where('id_kategori', 2)->take(3)->all();
            $berita = collect($data)->where('id_kategori', 1)->take(3)->all();
            $informasi = collect($data)->where('id_kategori', 9)->take(5)->all();
            $terbaru = $collection5->sortByDesc('id')->take(5);
          
            
            
            // 
            
            
            return view('index', ['informasi'=>$informasi, 'data2'=>$data2, 'data3'=>$data3, 'data4'=>$data4, 'data5'=>$data5, 'prestasi'=>$prestasi, 'pengumuman'=>$pengumuman, 'berita'=>$berita, 'logo'=>$logo, 'guru'=>$guru, 'terbaru'=>$terbaru]);
        }
        
        
        // untuk halaman / page prestasi
        public function prestasi()
        {
            $client = new Client();
            $response = $client->get('https://api.smkbudimuliapakisaji.sch.id/newss');
            $responsebody = $response->getBody()->getContents();
            $data = json_decode($responsebody);
            
            $collection = collect($data);
            
            $prestasi = collect($data)->where('id_kategori', 10)->all();
            return view('prestasi', ['prestasi'=>$prestasi]);
        }
        
        // logo
        public function logo()
        {
            $client = new Client();
            $response = $client->get('https://api.smkbudimuliapakisaji.sch.id/logosh');
            $responsebody = $response->getBody()->getContents();
            $data = json_decode($responsebody);
            
            // $collection = collect($data);

            return view('logo');
        }

}