<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="{{ '/assets/css/style.css' }}" rel="stylesheet">
    <link href="{{ '/assets/vendor/simple-datatables/style.css' }}" rel="stylesheet">
</head>

<body class="" style="font-size: 12px; font-style:  Arial, Helvetica, sans-serif;">



    <div class="container">
        <div class="row d-flex align-items-center ">
            <div class="col-3">
                {{-- <img src="https://smkbudimuliapakisaji.sch.id/assets/aset/logo.png" class="w-100"> --}}
            </div>
            <div class="col-9">
                <div class="text-center">
                    <h5 class="fw-bold">FORMULIR PENDAFTARAN ONLINE SISWA BARU</h5>
                    <h5 class="fw-bold" style="margin-top: -10px;">SMK BUDI MULIA PAKISAJI</h5>
                    <h6 style="margin-top: -8px;">TAHUN PELAJARAN 2025/2026</h6>
                </div>
            </div>
        </div>

        <!-- Bordered Table -->
        @forelse ($data as $pd)
        <div class="row d-flex justify-content-end">
            <div class="col-5">
                <p class="fw-bold text-end" style="font-size: 14px;">Kode Pendaftaran : {{ $pd->id_users }}</p>
            </div>
        </div>
        <table class="table table-bordered" style="margin-top: -8px;">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Data Siswa</th>
                    <th scope="col">Data Ayah</th>
                    <th scope="col">Data Ibu</th>
                    <th scope="col">Data Wali</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Nama</th>
                    <td>{{ $pd->nama_lengkap }}</td>
                    <td>{{ $pd->nama_ayah }}</td>
                    <td>{{ $pd->nama_ibu }}</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">NISN</th>
                    <td>{{ $pd->nisn }}</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Jenis Kelamin</th>
                    <td>
                        @if ($pd->jenis_kelamin == 'L')
                        Laki-Laki
                        @else
                        Perempuan
                        @endif
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Jurusan</th>
                    <td>{{ $pd->jurusan }}</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Tempat, Tgl Lahir</th>
                    <td>{{ $pd->tempat_lahir }}, {{ Carbon\Carbon::parse($pd->tanggal_lahir)->format('d M Y') }}
                    </td>
                    <td>{{ $pd->tempat_lahir_ayah }},
                        {{ Carbon\Carbon::parse($pd->tgl_lahir_ayah)->format('d M Y') }}</td>
                    <td>{{ $pd->tempat_lahir_ibu }},
                        {{ Carbon\Carbon::parse($pd->tgl_lahir_ibu)->format('d M Y') }}</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Agama</th>
                    <td>{{ $pd->agama }}</td>
                    <td>{{ $pd->agama_ayah }}</td>
                    <td>{{ $pd->agama_ibu }}</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Alamat</th>
                    <td> {{ $pd->alamat }} Rt. {{ $pd->rt }} Rw. {{ $pd->rw }}</td>
                    <td> {{ $pd->alamat_ayah }} Rt. {{ $pd->rt_ayah }} Rw. {{ $pd->rw_ayah }}</td>
                    <td>{{ $pd->alamat_ibu }} Rt. {{ $pd->rt_ibu }} Rw. {{ $pd->rw_ibu }}</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Kota/Kabupaten</th>
                    <td>{{ $pd->kota_kab }}</td>
                    <td>{{ $pd->kota_kab_ayah }}</td>
                    <td>{{ $pd->kota_kab_ibu }}</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Kode Pos</th>
                    <td>{{ $pd->kode_pos }}</td>
                    <td>{{ $pd->kode_pos_ayah }}</td>
                    <td>{{ $pd->kode_pos_ibu }}</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Nomor Telepon</th>
                    <td>{{ $pd->no_telp }}</td>
                    <td>{{ $pd->no_telp_ayah }}</td>
                    <td>{{ $pd->no_telp_ibu }}</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Anak Ke</th>
                    <td>{{ $pd->anak_ke }}</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Jumlah Sudara Kandung</th>
                    <td>{{ $pd->jmbl_s_kandung }}</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Jumlah Sudara Tiri</th>
                    <td>
                        @if ($pd->jmbl_s_tiri > 0)
                        {{ $pd->jmbl_s_tiri }}
                        @else
                        -
                        @endif
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Bahasa Sehari-hari</th>
                    <td>
                        @forelse (json_decode($pd->bahasa) as $bahasa)
                        <p class="d-inline">{{ $bahasa }}</p>,
                        @empty
                        @endforelse
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Asal Sekolah</th>
                    <td>
                        @if ($pd->asal_sekolah)
                        {{ $pd->asal_sekolah }}
                        @else
                        -
                        @endif
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                <tr>
                    <th scope="row">Tanggal STTB</th>
                    <td>
                        @if ($pd->tgl_sttb)
                        {{ $pd->tgl_sttb }}
                        @else
                        -
                        @endif
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Nomor STTB</th>
                    <td>
                        @if ($pd->tgl_sttb)
                        {{ $pd->no_sttb }}
                        @else
                        -
                        @endif
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Lama belajar</th>
                    <td>{{ $pd->lama_belajar }}</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Status</th>
                    <td>-</td>
                    <td>{{ $pd->hidup_mati_ayah }}</td>
                    <td>{{ $pd->hidup_mati_ibu }}</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Kewarganegaraan</th>
                    <td>-</td>
                    <td>{{ $pd->wni_wna_ayah }}</td>
                    <td>{{ $pd->wni_wna_ibu }}</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Pendidikan Terakhir</th>
                    <td>-</td>
                    <td>{{ $pd->pend_terakhir_ayah }}</td>
                    <td>{{ $pd->pend_terakhir_ibu }}</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Pekerjaan</th>
                    <td>-</td>
                    <td>{{ $pd->pekerjaan_ayah }}</td>
                    <td>{{ $pd->pekerjaan_ibu }}</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Penghasilan</th>
                    <td>-</td>
                    <td>{{ $pd->penghasilan_ayah }}</td>
                    <td>{{ $pd->penghasilan_ibu }}</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
        <div class="row d-flex justify-content-end">
            <div class="col-5 text-end ">
                <p class="fw-bold" style="font-size: 14px;">Online,
                    {{ Carbon\Carbon::parse($pd->created_at)->format('d M Y') }}</p>
            </div>
        </div>
        <!-- End Bordered Table -->

        @empty
        @endforelse
        <div class="row d-flex justify-content-end  " style="margin-top: -10px;">
            <div class="col-8">
                <table class="table table-borderless text-center">
                    <thead style="font-size: 14px;">
                        <tr>
                            <th>Wali Murid</th>
                            <th>Calon Siswa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>(...........................................)</td>

                            <td>(...........................................)</td>
                        </tr>


                        <tr>
                            <td>Tanda Tangan & Nama Terang</td>

                            <td>Tanda Tangan & Nama Terang</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Vendor JS Files -->
    <script src="{{ '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js' }}"></script>
    <script src="{{ '/assets/vendor/simple-datatables/simple-datatables.js' }}"></script>
    <script src="{{ '/assets/js/main.js' }}"></script>

    <script type="text/javascript">
    // window.onload = function() {
    //   window.location.href = "{{ $pdf->download() }}";
    // }
    // window.print();
    </script>
</body>

</html>