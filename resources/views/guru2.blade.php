@extends('Layout.layout')
@section('title', 'Detail Guru')
@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/aset/baner/img1.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Profil Guru</h2>
      {{-- <ol>
        <li><a href="/">Home</a></li>
        <li><a href="guru">Guru</a></li>
        <li>Detail Guru</li>
      </ol> --}}

    </div>
</div><!-- End Breadcrumbs -->
<div class="container">
<div class="row justify-content-evenly my-3">

    <div class="col-12 col-lg-3">
        <section class="page2">
            <div class="member">
                <img src="{{$data->gambar}}" class="img-fluid rounded-circle  w-100" alt="">
                <div class="member-content">
                    <h4>{{$data->nama}}</h4>
                    <span class="fs-6">{{$data->jabatan}}</span>
                                      
                    
                    <div class="social">
                        @forelse ($data->sosmed as $item) 
                        @if ($item->twitter)
                            <a href="https://www.twitter.com/{{$item->twitter}}" ><i class="bi bi-twitter fs-3"></i></a>  
                        @endif
                        @if ($item->facebook)
                            <a href="https://www.facebook.com/{{$item->facebook}}" ><i class="bi bi-facebook fs-3"></i></a>  
                        @endif
                        @if ($item->instagram)
                            <a href="https://www.instagram.com/{{$item->instagram}}" ><i class="bi bi-instagram fs-3"></i></a>  
                        @endif
                        @if ($item->tiktok)
                            <a href="https://www.tiktok.com/{{$item->tiktok}}" ><i class="bi bi-tiktok fs-3"></i></a>  
                        @endif
                        @if ($item->linkedin)
                            <a href="https://www.linkedin.com/{{$item->linkedin}}" ><i class="bi bi-linkedin fs-3"></i></a>  
                        @endif
                        @if ($item->email)
                            <a href="{{$item->email}}" ><i class="ri ri-mail-pill fs-3"></i></a>  
                        @endif
                        @empty            
                        @endforelse
                        
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
    <div class="col-12 col-lg-7">
        
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><h5>{{$data->nama}}</h5></li>
            <li class="list-group-item"><span class="fw-bolder">NIY/NIP :</span> {{$data->niy_nip}}</li>
            <li class="list-group-item"><span class="fw-bolder">Alamat :</span> {{$data->alamat}}</li>
            <li class="list-group-item"><span class="fw-bolder">Tempat, Tanggal Lahir :</span> {{$data->ttl}}</li>
            <li class="list-group-item"><span class="fw-bolder">Pendidikan Terakhir :</span> {{$data->pend}}</li>
            <li class="list-group-item"><span class="fw-bolder">Jabatan :</span> {{$data->jabatan}}</li>
            <li class="list-group-item"><span class="fw-bolder">Motto :</span>"{{$data->motto}}"</li>
        </ul>
    </div>
  </div>
</div>
@endsection