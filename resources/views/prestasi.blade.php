@extends('Layout.layout')
@section('title', 'Kegiatan Sekolah')
@section('content')
    <!-- ======= Portfoio Section ======= -->
    <section class="bg-halaman">
      <section id="portfolio" class="portfoio mt-5">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <p class=" text-white">prestasi</p>
          </div>
  
          <div class="row portfolio-container">
            @forelse ($prestasi as $pres)
            <div class="col-lg-4 col-md-6 portfolio-item rounded">
                <div class="image-container rounded">
                  <a href="{{$pres->gambar}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{$pres->judul}}">
                  <img src="{{$pres->gambar}}" class="image-cover rounded" alt="">
                  </a>
                </div>
              <div class="portfolio-info rounded d-flex justify-content-center align-items-center py-5">
                <h4 class="">{{$pres->judul}}</h4>
              </div>
            </div>
                @empty
            @endforelse
          </div>
          <style>
                                .image-container {
                                  position: relative;
                                  overflow: hidden;
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
  
        </div>
      </section><!-- End Portfoio Section -->
    </section>
    

@endsection