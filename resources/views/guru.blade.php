@extends('Layout.layout')
@section('title', 'Guru')
@section('content')

<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/aset/baner/img1.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Guru</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li>Guru</li>
      </ol>

    </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Trainers Section ======= -->
<section id="trainers" class="trainers">
    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        
        @forelse ($data as $item)
            
        
        {{-- <div class="col-6 col-lg-3 col-md-4 d-flex align-items-stretch">
          <div class="member">
            <img src="{{$item->gambar}}" class="img-fluid" alt="">
            <div class="member-content">
                <h4>{{$item->nama}}</h4>
                <span>{{$item->jabatan}}</span>
                 <h4>Motto</h4>
              <p style="font-style: italic">
                {{$item->motto}}
              </p>
              <a href="{{$item->url}}" class="stretched-link">selengkapnya</a>
              <div class="social">
                @foreach ($item->sosmed as $sos)
                <a href="{{$sos->twitter}}"><i class="bi bi-twitter"></i></a>
                <a href="{{$sos->facebook}}"><i class="bi bi-facebook"></i></a>
                <a href="{{$sos->instagram}}"><i class="bi bi-instagram"></i></a>
                <a href="{{$sos->linkedin}}"><i class="bi bi-linkedin"></i></a>
                @endforeach
              </div>
            </div>
          </div>
        </div> --}}

        {{--  --}}
        <div class="col-6 col-lg-3 col-md-4 d-flex align-items-stretch mb-5">
        <div class="card" style="width: 18rem;">
          <img src="{{$item->gambar}}" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">{{$item->nama}}</h5>
            <p class="card-title">{{$item->jabatan}}</p>
            <p class="card-text text-start">
            @php
              $words = explode(' ', $item->motto);
              $limited_words = array_slice($words, 0, 10);
              $deskripsi = implode(' ', $limited_words);
            @endphp
            {!! $deskripsi !!}...
            </p>
          
            <a href="detail/{{$item->url}}" class="card-link stretched-link btn btn-success rounded-pill">Selengkapnya</a>
          </div>
        </div>
        </div>
      
        @empty
            
        @endforelse
      
      </div>

    </div>
  </section><!-- End Trainers Section -->

@endsection