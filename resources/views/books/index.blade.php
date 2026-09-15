
@section('title', 'Daftar Buku')
@section('content')

    <h2>Daftar Buku</h2>
<ul>
    @if($stock > 0)
        <p>Stock Tersedia</p>
    @else
        <p>Stock habis</p>
    @endif
</ul>