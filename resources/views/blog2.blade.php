@extends('Layout.layb')

@section('title')
    {{$data->judul}}
@endsection

@section('meta')
    
    <meta name="keywords" content="@forelse (json_decode($data->tag) as $item) {{$item}}, @empty @endforelse smkbudimulia">
    <meta name="author" content="{{$data->author}}">
    <meta property="og:url" content="{{$data->url}}" />
    <meta property="og:image" content="{{$data->gambar}}"/>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{$data->judul}}" />
    <meta property="og:description" content="{{$data->judul}}" />
    <meta property="og:site_name" content="SMK BM Pakisaji" />
    
    <!---->
    @php
        $words = explode(' ', $data->deskripsi);
        $limited_words = array_slice($words, 10, 30);
        $deskripsi = implode(' ', $limited_words);
    @endphp
                    
    <!---->
    <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "NewsArticle",
    "mainEntityOfPage": {
      "@type": "WebPage",
      "@id": "{{ Request::url() }}"
    },
    "headline": "{{ $data->judul }}",
    "datePublished": "{{ $data->created_at }}",
    "dateModified": "{{ $data->updated_at }}",
    "author": {
      "@type": "Person",
      "name": "{{ $data->author }}"
    },
    "publisher": {
      "@type": "Organization",
      "name": "{{ config('app.name') }}",
      "logo": {
        "@type": "ImageObject",
        "url": "https://smkbudimuliapakisaji.sch.id/assets/aset/logo.png"
      }
    },
    "description": "{!! $deskripsi !!}",
    "articleBody": "@forelse (json_decode($data->tag) as $item) {{$item}} @empty @endforelse"
  }
</script>
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Ditulis oleh" />
    <meta name="twitter:data1" content="{{$data->author}}" />
    <meta name="twitter:label2" content="Estimasi waktu membaca" />
    <meta name="twitter:data2" content="3 menit" />
    
    <!---->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9539844897878104"
     crossorigin="anonymous"></script>

@endsection


@section('content')
@php
    $english_days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    $indonesian_days = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

    $english_day1 = Carbon\Carbon::parse($data->created_at)->format('l, d M Y | H:i');
    $indonesian_day1 = str_replace($english_days, $indonesian_days, $english_day1);

@endphp


    <button type="button" class="btn btn-success btn-floating float-left rounded-circle" id="shareBtn">
        <a href="https://api.whatsapp.com/send?text={{ urlencode($data->judul . "\n\n" . Request::fullUrl()) }}" target="_blank" class="share">
          <i class="bi bi-whatsapp"></i>
        </a>
    </button>
    <!--<button type="button" class="btn btn-primary btn-floating float-left rounded-circle" id="shareBtn1">-->
    <!--    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}&title={{ urlencode($data->judul) }}" target="_blank" class="share">-->
    <!--        <i class="bi bi-facebook"></i>-->
    <!--    </a>-->
    <!--</button>-->
    <button type="button" class="btn btn-primary btn-floating float-left rounded-circle" id="shareBtn1">
       <a href="javascript:shareOnFacebook();" class="share">
            <i class="bi bi-facebook"></i>
        </a>
    </button>
    <button type="button" class="btn btn-floating float-left rounded-circle" id="shareBtn2" style="background-color: #1da1f2;" onclick="window.open('https://twitter.com/share?url={{ urlencode(Request::fullUrl()) }}&text={{ urlencode($data->judul) }}', '_blank');">
        <a class="share">
            <i class="bi bi-twitter"></i>
        </a>
    </button>
 

<!-- Tambahkan kode JavaScript pada bagian bawah file blade template Anda -->
@section('scripts')
    <script>
        function openFacebookApp() {
            // Gunakan URI skema khusus Facebook untuk membuka aplikasi
            window.location.href = "fb://page/PAGE_ID";
        }

        function shareOnFacebook() {
            var shareUrl = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(window.location.href) + "&title=urlencode($data->judul)" + encodeURIComponent(document.title);

            if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
                if (window.location.href.indexOf("fb://") === -1) {
                    window.location.href = "fb://page/PAGE_ID";
                    setTimeout(function() {
                        if (document.webkitHidden || document.hidden) {
                            window.location.href = shareUrl;
                        }
                    }, 500);
                } else {
                    setTimeout(function() {
                        document.location = shareUrl;
                    }, 500);
                }
            } else {
                window.open(shareUrl);
            }
        }
    </script>
@endsection


<style>
.share{
    color:#fff;
}
#shareBtn {
  position: fixed;
  bottom: 220px;
  right: 8px;
  z-index: 999;
}
#shareBtn1 {
  position: fixed;
  bottom: 265px;
  right: 8px;
  z-index: 999;
}
#shareBtn2 {
  position: fixed;
  bottom: 310px;
  right: 8px;
  z-index: 999;
}
</style>

<div class="col-xs-12 col-md-12 text-light mb-2">
  <div class="row align-items-center">
    <div class="col-lg-6 mb-3">
      <span class="text-light mb-5">{{ $indonesian_day1}} | <i class="bi bi-eye-fill ms-1 me-1"></i>{{$data->views}}</span>
      <h2 class="fw-bold">{{$data->judul}}</h2 class="fw-bold mb-3">
      
      <div class="d-flex align-items-center">
        <img src="https://img.freepik.com/free-icon/hacker_318-828193.jpg?size=338&ext=jpg&ga=GA1.2.1853520817.1676958642&semt=sph" alt="gambar-{{$data->author}}" 
        class="image-fluid rounded-circle d-inline" style="max-width:9%;">
        <h6 class="d-inline ms-3">{{$data->author}}</h6>
      </div>
    </div>

    <div class="col-lg-6">
      <img src="{{$data->gambar}}" alt="Gambar:{{$data->judul}}" class="img-fluid rounded " title="Gambar: {{$data->judul}}" style="width:100%;height:100%;">
    </div>
  </div>
</div>

<div class="col-xs-12 col-md-12 text-light mt-3 mb-5">
<section>
  <div class="row">
      <div class="col-lg-8 col-xs-12">
        <div class="card border-0 bg-transparent">
          <div class="card-body text-start content"  id="content">
              {!! $data->deskripsi !!}
              {{-- {{$data->deskripsi}} --}}
              @forelse (json_decode($data->tag) as $item)
                <a href="#" class="btn btn-sm btn-success m-1">{{$item}}</a> 
              @empty
              @endforelse
          </div>

          <style>
            .content blockquote {
              background-color: none;
              border-left: 10px solid #1b84a3;
              margin: 20px 0;
              padding: 20px;
              font-style: italic;
            }
            .content img {
              float: left;
              /* margin-right: 20px; */
              width: 100%;
              height: auto;
              margin: 10px 20px 10px 0;
            }

          </style>
        </div>
      </div>
      <div class="col-lg-4 col-xs-12 d-md-2 container">
        <div class="sticky-top" style="z-index:1;">
            <div class="p-1">
                <!--<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="false">-->
                <!--  <div class="carousel-inner">-->
                <!--    <div class="carousel-item active">-->
                <!--      <img class="d-block w-100" src="https://cf.shopee.co.id/file/id-50009109-52155fdf4d17888dcf393046cb247683_xhdpi" alt="First slide">-->
                <!--    </div>-->
                <!--    <div class="carousel-item">-->
                <!--      <img class="d-block w-100" src="https://cf.shopee.co.id/file/id-50009109-58a74e204fb680bc71b3033510d6722c_xhdpi" alt="Second slide">-->
                <!--    </div>-->
                <!--    <div class="carousel-item">-->
                <!--      <img class="d-block w-100" src="https://cf.shopee.co.id/file/id-50009109-d343a6b4926c87367c7bc0e246fff1d0_xxhdpi" alt="Third slide">-->
                <!--    </div>-->
                <!--    <div class="carousel-item">-->
                <!--      <img class="d-block w-100" src="https://cf.shopee.co.id/file/id-50009109-7a4828713f548e48c941f0a35344fb45_xxhdpi" alt="Four slide">-->
                <!--    </div>-->
                <!--    <div class="carousel-item">-->
                <!--      <img class="d-block w-100" src="https://cf.shopee.co.id/file/id-50009109-a3aa39258eebb663648cb8e2a63c99eb_xxhdpi" alt="Five slide">-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9539844897878104"
                     crossorigin="anonymous"></script>
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-format="fluid"
                     data-ad-layout-key="-gw-3+1f-3d+2z"
                     data-ad-client="ca-pub-9539844897878104"
                     data-ad-slot="7538038036"></ins>
                <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        <hr> 
        
        <div class="my-2 text-center text-md-start d-flex justify-content-center justify-content-md-start">
                    <h3 style="border-bottom: 4px solid #00A7AE; width: auto;">Berita Terkait</h3>
                </div>
                @forelse ($data2 as $a)
                <div class="row mb-3 mt-2 mx-2">
                    <div class="col-7 p-0">
                        <a href="{{$a->url}}" class="text-white"><p class="text-white mb-1" style="font-size:13px;font-weight:600;">{{$a->judul}}</p></a>
                        <span class="fw-semibold text-capitalize" style="font-size: 12px;">{{$a->author}} | 
                        @php
                            $updated_at = \Carbon\Carbon::parse($a->created_at);
                            $now = \Carbon\Carbon::now();
                            if ($updated_at->lt($now->subDays(1))) {
                                echo $updated_at->isoFormat('dddd, D MMMM Y');
                            } else {
                                echo $updated_at->diffForHumans();
                            }
                         @endphp
                        </span>
                    </div>
                    <div class="col-5 d-flex align-items-center order-md-first" style="">
                        <img src="{{$a->gambar}}" class="w-100  rounded-3" alt="" style="height: 90px; object-fit: cover;">
                    </div>
                </div>
                
                    @empty
                @endforelse
            
        </div>
      </div>
  </div>
 </section>

  <hr>
<section>
    <!---->

    <!---->
  <div class="container col-12">
    <h4>Rekomendasi untuk anda</h4>
    <div class="row mt-2">
    @forelse ($data1 as $item)
    <div class="col-6 col-xs-6 col-md-6 col-lg-2 mb-2">
      
      <div class="card bg-transparent border-0">
        <img src="{{$item->gambar}}" class="img-fluid rounded" style="height: 100px; width: auto; object-fit:cover;">
        <!--{{-- <div class="card-body"> --}}-->
          <p class="card-title mt-1 mb-0" style="font-size: 12px; font-weight:600; color:orange;">Berita</p>
          <p class="card-title mt-1" style="font-size: 12px; font-weight:400; cursor:pointer;" onclick="window.open('{{$item->url}}');">{{$item->judul}}</p>
        <!--{{-- </div> --}}-->
      </div>
    </div>
      @empty
          
      @endforelse
      
    </div>
  </div>
  </section>
 </div>

@endsection