<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function sea(Request $request){
        dd($request);
    }
    
    public function berita()
    {
        $client = new Client();
        $response = $client->get('https://api.smkbudimuliapakisaji.sch.id/newss');
        $responsebody = $response->getBody()->getContents();
        $data = json_decode($responsebody);
        // 
        $client1 = new Client();
        $response1 = $client1->get('https://api.smkbudimuliapakisaji.sch.id/newsss');
        $responsebody1 = $response1->getBody()->getContents();
        $data1 = json_decode($responsebody1)[0];
        $data2 = json_decode($responsebody1)[1];
        //
        $collection = collect($data);
            
            $prestasi = collect($data)->where('id_kategori', 10)->all();
            $pengumuman = collect($data)->where('id_kategori', 2)->all();
            $berita = collect($data)->where('id_kategori', 1)->all();
            $informasi = collect($data)->where('id_kategori', 9)->all();
            $trend = $collection->sortByDesc('views')->take(3);
            $terbaru = $collection->sortByDesc('id')->take(5);
            $jurusan = collect($data)->whereIn('id_kategori', [3, 4, 5, 6, 7, 8])->all();
        
        
        return view('blog',['data'=>$data, 'data1'=>$data1, 'data2'=>$data2, 'prestasi'=>$prestasi, 'pengumuman'=>$pengumuman, 'berita'=>$berita, 'informasi'=>$informasi,'jurusan'=>$jurusan, 'trending'=>$trend, 'terbaru'=>$terbaru]);
    }

    public function isiberita($url)
    {
        $client = new Client();
        $response = $client->get('https://api.smkbudimuliapakisaji.sch.id/news/'.$url);
        $responsebody = $response->getBody()->getContents();
        $data = json_decode($responsebody)[0];
        $data1 = json_decode($responsebody)[1];
        $data2 = json_decode($responsebody)[2];
        // dd($data2);

        // $response1 = $client->get('https://api.smkbudimuliapakisaji.sch.id/news/'.$url);
        // $responsebody1 = $response1->getBody()->getContents();
        // $data1 = json_decode($responsebody1)[1];
         
        // $client2 = new Client();
        // $response2 = $client2->get('https://api.smkbudimuliapakisaji.sch.id/newsss');
        // $responsebody2 = $response2->getBody()->getContents();
        // $data2 = json_decode($responsebody2)[0];
        // dd($data2);
        return view('blog2',['data'=>$data,'data1'=>$data1, 'data2'=>$data2]);
    }

    // guru

    public function guru()
    {
        $client = new Client();
        $response = $client->get('https://api.smkbudimuliapakisaji.sch.id/guru');
        $responsebody = $response->getBody()->getContents();
        $data = json_decode($responsebody);
        return view('guru',['data'=>$data]);
    }
    public function detail($url)
    {
        $client = new Client();
        $response = $client->get('https://api.smkbudimuliapakisaji.sch.id/show-guru/'.$url);
        $responsebody = $response->getBody()->getContents();
        $data = json_decode($responsebody);
        return view('guru2',['data'=>$data]);
    }
    
    
    

}
