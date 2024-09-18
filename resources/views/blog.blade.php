@extends('Layout.layout3')
@section('title', 'Berita SMK BM')
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
    @media only screen and (max-width: 600px) {
        .carousel-item img{
            height:280px;
             object-fit: cover;
        }
        .carousel-caption h5{
            font-size:15px;
        }
    }
    
</style>

<section class="" style="margin-top:80px; ">
    <div class="container ">
        <div class="row d-flex align-items-center">
            <div class="col-md-7">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded-3">
                        @forelse ($data1 as $d)
                            <div 
                                @if ($d->id == $data2->id)
                                    class="carousel-item p-0 active"
                                @else
                                    class="carousel-item p-0"
                                @endif
                            >   <a href="https://smkbudimuliapakisaji.sch.id/{{$d->url}}" class="">
                                <img src="{{$d->gambar}}" class="d-block w-100" alt="..." style="">
                                <div class="carousel-caption p-2 m-0 rounded" style="background-color:rgba(0,0,0,0.5); left:0; right:0; bottom:0;">
                                    <h5 class="text-start text-white text-uppercase">{{$d->judul}}</h5>
                                    <div class="d-flex">
                                        <p class="text-capitalize">
                                        {{$d->kateg[0]->kategori}}
                                        |
                                        
                                        </p>
                                        <p class="ms-3 ">
                                            @php
                                                $created_at = \Carbon\Carbon::parse($d->created_at);
                                                $now = \Carbon\Carbon::now();
                                                if ($created_at->lt($now->subDays(1))) {
                                                    echo $created_at->isoFormat('dddd, D MMMM Y');
                                                } else {
                                                    echo $created_at->diffForHumans();
                                                }
                                            @endphp
                                        </p>
                                    </div>
                                    
                                </div>
                                </a>
                            </div>
                        @empty
                        @endforelse
                    </div>

                </div>
            </div>
            <!-- enc carousel -->
            <div class="col-md-5 d-grid plachment-center">
            <div class="my-3 text-center text-md-start d-flex justify-content-center justify-content-md-start">
                    <h4 style="border-bottom: 4px solid #00A7AE; width: auto;" class="text-capitalize">trending</h4>
                </div>
                @forelse ($trending as $a)
                <div class="row mb-3 mt-2 ps-2">
                    <div class="col-7 p-0">
                    <span class="fw-bolder text-uppercase rounded-1" style=" color:orange; font-size: 13px;">{{$a->kateg[0]->kategori}}</span>
                        <a href="https://smkbudimuliapakisaji.sch.id/{{$a->url}}" class="text-white"><h6>{{$a->judul}}</h6></a>
                        <span class="text-muted fw-semibold text-uppercase" style="font-size: 12px;">{{$a->author}} | 
                         @php
                                            $created_at = \Carbon\Carbon::parse($a->created_at);
                                            $now = \Carbon\Carbon::now();
                                            if ($created_at->lt($now->subDays(1))) {
                                                echo $created_at->isoFormat('dddd, D MMMM Y');
                                            } else {
                                                echo $created_at->diffForHumans();
                                            }
                                        @endphp
                        | <i class="bi bi-eye-fill me-1"></i>{{$a->views}}</span>
                    </div>
                    <div class="col-5 d-flex align-items-center order-md-first">
                        <!--<div>-->
                            <img src="{{$a->gambar}}" class="w-100  rounded-3" alt="" style="height: 130px; object-fit: cover;">
                        <!--</div>-->
                    </div>
                </div>
                
                    @empty
                @endforelse
            </div>
            <!-- end card -->
        </div>
    </div>
</section>
<!-- end carousel L R -->

<section class="">
    <div class="container">
        <div class="my-2 text-md-start d-flex ">
            <h5 style="border-bottom: 4px solid #00A7AE; width: auto; padding:4px 0;" class="text-capitalize">informasi terkini</h5>
        </div>
        <div class="row d-flex">
                            @forelse ($terbaru as $c)
                            <div class="col-md-3 col-6">
                              <div class="card mb-4  border-0 bg-transparent">
                                <div class="image-container" style=" overflow: hidden;">
                                  <img src="{{$c->gambar}}" class="image-cover rounded-3" alt="">
                                </div>
                                <div class="card-body atas">
                                  <span class="fw-bolder text-uppercase rounded-1" style=" color:orange; font-size: 13px;">{{$c->kateg[0]->kategori}}</span>
                                  
                                  <a href="https://smkbudimuliapakisaji.sch.id/{{$c->url}}" class="stretched-link text-white"><p class="my-1" style="font-size:14px; font-weight:500;">{{$c->judul}}</p></a>
                                  <span class="text-muted  text-capitalize d-block mt-1 mt-md-0" style="font-size: 13px;">
                                       @php
                                            $created_at = \Carbon\Carbon::parse($c->created_at);
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
                            
                                @empty
                            @endforelse
                            
                        
        </div>
    </div>
</section>
<!-- end card middle -->

<section class="my-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-md-5 text-center text-md-start d-flex justify-content-center justify-content-md-start">
                    <h3 style="border-bottom: 4px solid #00A7AE; width: auto; padding:4px 0;">Kategori</h3>
                    </div>
                    <style>
                        #myTabjustified li .nav-link{
                            color: #20262E;
                        }
                        #myTabjustified li .active{
                            background-color:  #00A7AE;
                            color: #ffff;
                        }
                    </style>
                    <div class="col-md-7">
                        <ul class="nav nav-tabs d-flex text-white fw-semibold" id="myTabjustified" role="tablist">
                            <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100 " id="contact-tab" data-bs-toggle="tab" data-bs-target="#jurusan-justified" type="button" role="tab" aria-controls="home" aria-selected="false">Jurusan</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile" aria-selected="false">Pengumuman</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-justified" type="button" role="tab" aria-controls="contact" aria-selected="false">Prestasi</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="contact" aria-selected="true">Global</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tabs my-3">
                <div class="tab-content pt-2" id="myTabjustifiedContent">
                    <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            @forelse ($data as $c)
                            <div class="col-md-4 col-6">
                              <div class="card mb-4  border-0 bg-transparent">
                                <div class="image-container" style=" overflow: hidden;">
                                  <img src="{{$c->gambar}}" class="image-cover rounded-3" alt="">
                                </div>
                                <div class="card-body atas">
                                  <span class="fw-bolder text-uppercase rounded-1" style="color:#00A7AE; font-size: 13px;">{{$c->kateg[0]->kategori}}</span>
                                  
                                  <a href="https://smkbudimuliapakisaji.sch.id/{{$c->url}}" class="stretched-link text-white"><p class="my-1" style="font-size:14px; font-weight:500;">{{$c->judul}}</p></a>
                                  <span class="text-muted text-capitalize d-block mt-1 mt-md-0" style="font-size: 13px;">
                                       @php
                                            $created_at = \Carbon\Carbon::parse($c->created_at);
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
                            <style>
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
                                .atas {
                                  margin-top:-68px;
                                }
                            </style>
                                @empty
                            @endforelse
                        </div>
                    </div>
                    <!-- end global -->
                    <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            @forelse ($pengumuman as $e)
                            <div class="col-md-4 col-6">
                              <div class="card mb-4  border-0  bg-transparent">
                                <div class="image-container" style=" overflow: hidden;">
                                  <img src="{{$e->gambar}}" class="image-cover rounded-3" alt="">
                                </div>
                                <div class="card-body atas">
                                  <span class="fw-bolder text-uppercase rounded-1" style=" color:purple; font-size: 13px;">{{$e->kateg[0]->kategori}}</span>
                                  
                                  <a href="https://smkbudimuliapakisaji.sch.id/{{$e->url}}" class="stretched-link text-white"><p class="my-1" style="font-size:14px; font-weight:500;">{{$e->judul}}</p></a>
                                  <span class="text-muted  text-capitalize d-block mt-1 mt-md-0" style="font-size: 13px;">
                                       @php
                                            $created_at = \Carbon\Carbon::parse($e->created_at);
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
                             @empty
                            @endforelse
                        </div>
                    </div>
                    <!-- end pengumuman -->
                    <div class="tab-pane fade" id="contact-justified" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                            @forelse ($prestasi as $f)
                            <div class="col-md-4 col-6">
                              <div class="card mb-4  border-0  bg-transparent">
                                <div class="image-container" style=" overflow: hidden;">
                                  <img src="{{$f->gambar}}" class="image-cover rounded-3" alt="">
                                </div>
                                <div class="card-body atas">
                                  <span class="fw-bolder text-uppercase rounded-1" style=" color:purple; font-size: 13px;">{{$f->kateg[0]->kategori}}</span>
                                  
                                  <a href="https://smkbudimuliapakisaji.sch.id/{{$f->url}}" class="stretched-link text-white"><p class="my-1" style="font-size:14px; font-weight:500;">{{$f->judul}}</p></a>
                                  <span class="text-muted  text-capitalize d-block mt-1 mt-md-0" style="font-size: 13px;">
                                       @php
                                            $created_at = \Carbon\Carbon::parse($f->created_at);
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
                                @empty
                            @endforelse
                        </div>
                    </div>
                    <!-- end prestasi -->
                    <div class="tab-pane fade" id="jurusan-justified" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                            @forelse ($jurusan as $g)
                            <div class="col-md-4 col-6">
                              <div class="card mb-4  border-0  bg-transparent">
                                <div class="image-container" style=" overflow: hidden;">
                                  <img src="{{$g->gambar}}" class="image-cover rounded-3" alt="">
                                </div>
                                <div class="card-body atas">
                                  <span class="fw-bolder text-uppercase rounded-1" style=" color:purple; font-size: 13px;">{{$g->kateg[0]->kategori}}</span>
                                  
                                  <a href="https://smkbudimuliapakisaji.sch.id/{{$g->url}}" class="stretched-link text-white"><p class="my-1" style="font-size:14px; font-weight:500;">{{$g->judul}}</p></a>
                                  <span class="text-muted  text-capitalize d-block mt-1 mt-md-0" style="font-size: 13px;">
                                       @php
                                            $created_at = \Carbon\Carbon::parse($g->created_at);
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
                                @empty
                            @endforelse
                        </div>
                    </div>
                    <!-- end jurusan -->
                </div><!-- End Default Tabs -->
                </div>
            </div>
            
            <!-- end left -->
            <div class="col-md-4">
                <div class="sticky-top my-5 mt-5">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9539844897878104"
                     crossorigin="anonymous"></script>
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-format="fluid"
                     data-ad-layout-key="-gu-17-54+1y+oj"
                     data-ad-client="ca-pub-9539844897878104"
                     data-ad-slot="4462586049"></ins>
                <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <div class="my-2 text-center text-md-start d-flex justify-content-center justify-content-md-start">
                    <h5 style="border-bottom: 4px solid #00A7AE; width: auto;" class="text-capitalize">rekomendasi untuk anda</h5>
                </div>
                <ul class="list-group list-group-item border-0 p-0 bg-transparent">
                @forelse ($data1 as $h)
                <li class="list-group-item border-0 p-0 bg-transparent">
                <div class="row mb-3 mt-2">
                    <div class="col-7 p-0  ">
                        <span class="fw-bolder text-uppercase rounded-1" style=" color:#93DEFF; font-size: 13px;">{{$h->kateg[0]->kategori}}</span>
                        <a href="https://smkbudimuliapakisaji.sch.id/{{$h->url}}" class="stretched-link text-light">
                            <p class="" style="font-size:12px; font-weight:500;">{{$h->judul}}</p>
                        </a>
                        <span class="text-muted text-uppercase d-block " style="font-size: 10px; margin-top:-12px;">
                             @php
                                $created_at = \Carbon\Carbon::parse($h->created_at);
                                $now = \Carbon\Carbon::now();
                                if ($created_at->lt($now->subDays(1))) {
                                    echo $created_at->isoFormat('dddd, D MMMM Y');
                                } else {
                                    echo $created_at->diffForHumans();
                                }
                            @endphp
                        </span>
                    </div>
                    <div class="col-5 d-flex align-items-center order-first">
                        <img src="{{$h->gambar}}" class="w-100 rounded-3" alt="" style="height: 90px; object-fit: cover;">
                    </div>
                </div>
                </li>
                @empty
                @endforelse
                </ul>
            </div>
            </div>
        </div>
    </div>
</section>

<!---->

@endsection

