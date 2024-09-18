<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sukses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <!-- Modal -->

     @if (session('message')) 

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <!--<h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>-->
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>

                @if ($id == 'sudah ada')
                    <div class="modal-body">
                        <h4>Mohon Maaf, NISN Sudah Terdaftar</h4>
                        <p>silahkan Isi dengan data pribadi anda sendiri</p>
                    </div>
                    <div class="modal-footer">
                        <a href="https://smkbudimuliapakisaji.sch.id/daftar"><button type="button"
                                class="btn btn-primary">Kembali</button></a>
                    @else
                        <div class="modal-body">

                            <h4>Selamat {{ $nama }}, Anda Telah Berhasil Mendaftar</h4>
                            <p>Berikut adalah kode unik Pendaftaran Anda</p>
                            <h4> {{ $id }} </h4>
                            <div>silahkan download formulir anda dalam bentuk PDF berukuran A4
                                untuk diserahkan kepada pihak SMK Budi Mulia Pakisaji
                            </div>

                        </div>
                        <div class="modal-footer">
                            <a href="{{ url('download-pdf/' . $id) }}"><button type="button"
                                    class="btn btn-primary">Download
                                    PDF</button></a>
                @endif


                {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                {{-- 
                </div>
            </div>
        </div>
        </div> --}}
                 @else
                 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <!--<h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>-->
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                    <div class="modal-body">
                        <h4>Mohon Maaf, Akses dilarang / Data sudah terdaftar</h4>
                        <p>Dokumen bersifat privasi dan hak milik SMK Budi Mulia Pakisaji</p>
                    </div>
                    <div class="modal-footer">
                        <a href="https://smkbudimuliapakisaji.sch.id/daftar"><button type="button"
                                class="btn btn-primary">Kembali</button></a>
                                 </div>
            </div>
        </div>
    @endif 


                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
                    integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
                    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
                </script>
                <script>
                    $(document).ready(function() {
                        $("#staticBackdrop").modal('show');
                    });
                </script>
</body>

</html>
