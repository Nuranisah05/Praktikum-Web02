@php
    $nama = "Nisah";
    $nilai = 85;
@endphp
@if ($nilai > 80)
    @php
        $ket = 'Lulus';
    @endphp
@else
    @php
        $ket = 'Gagal'
    @endphp  
@endif

Siswa {{$nama}} dinyatakan {{$ket}}