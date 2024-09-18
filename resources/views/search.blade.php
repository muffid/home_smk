@extends('Layout.layout3')
<!--@section('title', )-->
@section('title')
Hasil "{{$_GET["keyword"]}}"
@endsection
@section('content')
<style>
    body{
        background-color:#080C21;
        color:#fff;
    }
    section{
        background-color:#080C21;
    }
    .carousel-item img{
            height: 430px;
            object-fit: cover;
    }
    .atas {
        margin-top:-110px;
    }
    @media only screen and (max-width: 600px) {
        .carousel-item img{
            height:280px;
             object-fit: cover;
        }
        .carousel-caption h5{
            font-size:15px;
        }
        .atas {
        margin-top:-68px;
        }
    }
    .image-container {
        position: relative;
        overflow: hidden;
        padding-top: 100%;
    }
                                
    .image-cover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 70%;
        object-fit: cover;
    }
    
    
</style>

<section class=""  style="margin-top:110px; ">
    <div class="container">
        <div class="my-2 text-md-start d-flex ">
            <h5 style="border-bottom: 4px solid #00A7AE; width: auto; padding:4px 0;" class="text-capitalize">hasil pencarian "{{$_GET["keyword"]}}"</h5>
        </div>
        <div class="row d-flex">
    @php
        $cek = count($data)
    @endphp
    
    @if ($cek == 0)
        <li>Hasil pencarian kosong</li>
    @else
        @foreach ($data as $c)
        
            <div class="col-md-4 col-6">
                <div class="card mb-4  border-0 bg-transparent">
                    <div class="image-container" style=" overflow: hidden;">
                        <img src="{{$c["gambar"]}}" class="image-cover rounded-3" alt="">
                    </div>
                    <div class="card-body atas" style="">
                        <span class="fw-bolder text-uppercase rounded-1" style=" color:orange; font-size: 13px;">Berita</span>
                                  
                        <a href="https://smkbudimuliapakisaji.sch.id/{{$c["url"]}}" class="stretched-link text-white"><p class="my-1" style="font-size:14px; font-weight:500;">{{$c["judul"]}}</p></a>
                        <span class="text-muted  text-capitalize d-block mt-1 mt-md-0" style="font-size: 13px;">
                        @php
                            $created_at = \Carbon\Carbon::parse($c["created_at"]);
                            $now = \Carbon\Carbon::now();
                            if ($created_at->lt($now->subDays(1))) {
                                echo $created_at->isoFormat('dddd, D MMMM Y');
                            } else {
                                echo $created_at->diffForHumans();
                            }
                        @endphp
                        </span>
                    </div>
                </div>
            </div>
                            
        @endforeach
    @endif
        </div>
    </div>
</section>


<!-- end card middle -->
@endsection

