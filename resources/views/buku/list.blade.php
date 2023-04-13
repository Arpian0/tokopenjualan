<h2>Daftar Buku</h2>
<h3>{{$sub_judul}}</h3>

<p>Perintah Kondisional</p>
@if ($poin > 80 && $poin <= 100)
    Rating A<br>
@ifseif ($poin > 60 && $poin <= 80)
    Rating B<br>
@ifseif ($poin > 40 && $poin <= 60)
    Rating C<br>
@ifseif ($poin > 20 && $poin <= 40)
    Rating D<br>
@ifseif ($poin > 0 && $poin <= 20)
    Rating E<br>
@else
    Salah nilai<br>
@endif

<p>Perintah Perulangan</p>
@foreach ($buku as $b)
    {{ $b }}<br />
@endforeach

<p>Perintah Switch</p>
@switch($flag)
    @case(1)
        Jenis Pemrograman<br />
    @break
    @case(2)
        Jenis Struktur Data<br />
    @break
    @case(3)
        Jenis Basis Data<br />
    @break
    @default
        Bukan buku komputer<br />
@endswitch