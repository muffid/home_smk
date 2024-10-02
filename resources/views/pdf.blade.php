<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormulirSMKBM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="{{ ('/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{('/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
</head>

<body class="" style="font-size: 12px; font-style:  Arial, Helvetica, sans-serif;">

    <div class="container">
        <div class="row d-flex align-items-center ">
            <div class="col-3">
                <img src="https://smkbudimuliapakisaji.sch.id/assets/aset/logo.png" class="w-100">
            </div>
            <div class="col-9">
                <div class="text-center">
                    <h5 class="fw-bold">FORMULIR PENDAFTARAN ONLINE SISWA BARU</h5>
                    <h5 class="fw-bold" style="margin-top: -10px;">SMK BUDI MULIA PAKISAJI</h5>
                    <h6 style="margin-top: -8px;">TAHUN PELAJARAN 2025/2026</h6>
                </div>
            </div>
        </div>

        @forelse ($data as $pd)
        <div class="row d-flex justify-content-end">
            <div class="col-7">
                <p class="fw-bold text-start" style="font-size: 14px;">Kode Referal : @if ($pd->referral)
                    {{$pd->referral}}@else - @endif</p>
            </div>
            <div class="col-5">
                <p class="fw-bold text-end" style="font-size: 14px;">Kode Pendaftaran : @if ($pd->id_users)
                    {{$pd->id_users}}@else error @endif</p>
            </div>
        </div>
        <table class="table table-bordered" style="margin-top: -8px;">
            <thead class="text-center">
                <tr>
                    <th scope="col">Gelombang Inden</th>
                    <th scope="col">Data Siswa</th>
                    <th scope="col">Data Ayah</th>
                    <th scope="col">Data Ibu</th>
                    <th scope="col">Data Wali</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Nama</th>
                    <td>{{$pd->nama_lengkap}}</td>
                    <td>{{$pd->nama_ayah}}</td>
                    <td>{{$pd->nama_ibu}}</td>
                    <td>@if ($pd->nama_wali) {{$pd->nama_wali}}@else - @endif</td>
                </tr>
                <tr>
                    <th scope="row">NISN</th>
                    <td>{{$pd->nisn}}</td>
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
                    <td>{{$pd->jurusan}}</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Tempat, Tgl Lahir</th>
                    <td>{{$pd->tempat_lahir}}, {{Carbon\Carbon::parse($pd->tanggal_lahir)->format('d M Y')}}</td>
                    <td>@if ($pd->tempat_lahir_ayah){{$pd->tempat_lahir_ayah}}@else - @endif
                        @if ($pd->tgl_lahir_ayah) {{Carbon\Carbon::parse($pd->tgl_lahir_ayah)->format('d M Y')}} @else -
                        @endif
                    </td>

                    <td>@if ($pd->tempat_lahir_ibu){{$pd->tempat_lahir_ibu}}@else - @endif
                        @if ($pd->tgl_lahir_ibu) {{Carbon\Carbon::parse($pd->tgl_lahir_ibu)->format('d M Y')}} @else -
                        @endif
                    </td>

                    <td>@if ($pd->tempat_lahir_wali){{$pd->tempat_lahir_wali}}@else - @endif
                        @if ($pd->tgl_lahir_wali) {{Carbon\Carbon::parse($pd->tgl_lahir_wali)->format('d M Y')}} @else -
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row">Agama</th>
                    <td>{{$pd->agama}}</td>
                    <td>{{$pd->agama_ayah}}</td>
                    <td>{{$pd->agama_ibu}}</td>
                    <td>@if ($pd->agama_wali) {{$pd->agama_wali}}@else - @endif</td>
                </tr>
                <tr>
                    <th scope="row">Alamat</th>
                    <td>{{$pd->alamat}} Rt. {{$pd->rt}} Rw. {{$pd->rw}}</td>
                    <td>@if ($pd->alamat_ayah) {{$pd->alamat_ayah}} ,@else - , @endif
                        @if ($pd->rt_ayah) Rt. {{$pd->rt_ayah}} @else Rt. - @endif
                        @if ($pd->rw_ayah) Rw. {{$pd->rw_ayah}} @else Rw. - @endif
                    </td>

                    <td>@if ($pd->alamat_ibu) {{$pd->alamat_ibu}} ,@else - , @endif
                        @if ($pd->rt_ibu) Rt. {{$pd->rt_ibu}} @else Rt. - @endif
                        @if ($pd->rw_ibu) Rw. {{$pd->rw_ibu}} @else Rw. - @endif
                    </td>

                    <td>@if ($pd->alamat_wali) {{$pd->alamat_wali}} @else - @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row">Kota/Kabupaten</th>
                    <td>{{$pd->kota_kab}}</td>
                    <td>@if ($pd->kota_kab_ayah) {{$pd->kota_kab_ayah}} @else - @endif</td>
                    <td>@if ($pd->kota_kab_ibu) {{$pd->kota_kab_ibu}} @else - @endif</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Kode Pos</th>
                    <td>{{$pd->kode_pos}}</td>
                    <td>@if ($pd->kode_pos_ayah) {{$pd->kode_pos_ayah}} @else - @endif</td>
                    <td>@if ($pd->kode_pos_ibu) {{$pd->kode_pos_ibu}} @else - @endif</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Nomor Telepon</th>
                    <td>{{$pd->no_telp}}</td>
                    <td>@if ($pd->no_telp_ayah) {{$pd->no_telp_ayah}} @else - @endif</td>
                    <td>@if ($pd->no_telp_ibu) {{$pd->no_telp_ibu}} @else - @endif</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Anak Ke</th>
                    <td>{{$pd->anak_ke}}</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Jumlah Sudara Kandung</th>
                    <td>
                        @if ($pd->jmbl_s_kandung > 0)
                        {{$pd->jmbl_s_kandung}}
                        @else
                        -
                        @endif
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Jumlah Sudara Tiri</th>
                    <td>
                        @if ($pd->jmbl_s_tiri > 0)
                        {{$pd->jmbl_s_tiri}}
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
                        @if (json_decode($pd->bahasa))
                        @forelse ( json_decode($pd->bahasa) as $bahasa )
                        <p class="d-inline">{{$bahasa}}</p>,
                        @empty
                        @endforelse

                        @else
                        -
                        @endif
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Asal Sekolah</th>
                    <td>
                        @if ($pd->asal_sekolah)
                        {{$pd->asal_sekolah}}
                        @else
                        -
                        @endif
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                <tr>
                    <th scope="row">Tanggal Ijazah</th>
                    <td>@if ($pd->tgl_sttb) {{$pd->tgl_sttb}} @else - @endif </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Nomor Ijazah</th>
                    <td>@if ($pd->tgl_sttb)
                        {{$pd->no_sttb}}
                        @else
                        -
                        @endif</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Lama belajar</th>
                    <td>{{$pd->lama_belajar}}</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Status</th>
                    <td>-</td>
                    <td>{{$pd->hidup_mati_ayah}}</td>
                    <td>{{$pd->hidup_mati_ibu}}</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Kewarganegaraan</th>
                    <td>-</td>
                    <td>{{$pd->wni_wna_ayah}}</td>
                    <td>{{$pd->wni_wna_ibu}}</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">Pendidikan Terakhir</th>
                    <td>-</td>
                    <td>@if ($pd->pend_terakhir_ayah) {{$pd->pend_terakhir_ayah}} @else - @endif </td>
                    <td>@if ($pd->pend_terakhir_ibu) {{$pd->pend_terakhir_ibu}} @else - @endif </td>
                    <td>@if ($pd->pend_terakhir_wali) {{$pd->pend_terakhir_wali}} @else - @endif </td>
                    <!--<td>{{$pd->pend_terakhir_ayah}}</td>-->
                    <!--<td>{{$pd->pend_terakhir_ibu}}</td>-->
                    {{-- <td>-</td> --}}
                </tr>
                <tr>
                    <th scope="row">Pekerjaan</th>
                    <td>-</td>
                    <td>@if ($pd->pekerjaan_ayah) {{$pd->pekerjaan_ayah}} @else - @endif </td>
                    <td>@if ($pd->pekerjaan_ibu) {{$pd->pekerjaan_ibu}} @else - @endif </td>
                    <td>@if ($pd->pekerjaan_wali) {{$pd->pekerjaan_wali}} @else - @endif </td>
                    <!--<td>{{$pd->pekerjaan_ayah}}</td>-->
                    <!--<td>{{$pd->pekerjaan_ibu}}</td>-->
                    {{-- <td>-</td> --}}
                </tr>
                <tr>
                    <th scope="row">Penghasilan</th>
                    <td>-</td>
                    <td>@if ($pd->penghasilan_ayah) {{$pd->penghasilan_ayah}} @else - @endif </td>
                    <td>@if ($pd->penghasilan_ibu) {{$pd->penghasilan_ibu}} @else - @endif </td>
                    <td>@if ($pd->penghasilan_wali) {{$pd->penghasilan_wali}} @else - @endif </td>
                    <!--<td>{{$pd->penghasilan_ayah}}</td>-->
                    <!--<td>{{$pd->penghasilan_ibu}}</td>-->
                    {{-- <td>-</td> --}}
                </tr>
                <tr>
                    <th scope="row">Hubungan Wali</th>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <!--<td>{{$pd->penghasilan_ayah}}</td>-->
                    <!--<td>{{$pd->penghasilan_ibu}}</td>-->
                    <td>@if ($pd->hubungan_wali) {{$pd->hubungan_wali}} @else - @endif </td>
                </tr>

            </tbody>
        </table>
        <div class="row d-flex justify-content-end">
            <div class="col-5 text-end ">
                <p class="fw-bold" style="font-size: 14px;">Online,
                    {{ Carbon\Carbon::parse($pd->created_at)->format('d M Y') }}</p>
            </div>
        </div>
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
                            <td>{{$pd->nama_ibu}}</td>

                            <td>{{$pd->nama_lengkap}}</td>
                        </tr>

                        <tr>
                            <td>Tanda Tangan</td>

                            <td>Tanda Tangan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @empty
        @endforelse
        <div>
            <p class="fw-bolder fst-italic">Catatan</p>
            <p>Sertakan Dokumen Dibawah Ini</p>
            <ol>
                <li>KK</li>
                <li>Fc KTP Orangf Tua</li>
                <li>Akta Kelahiran</li>
                <li>Ijazah</li>
                <li>Foto 3x4 3 Lembar</li>
            </ol>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Vendor JS Files -->
    <script src="{{ ('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ ('/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ ('/assets/js/main.js') }}"></script>

    <script type="text/javascript">
    window.print();
    </script>
</body>

</html>