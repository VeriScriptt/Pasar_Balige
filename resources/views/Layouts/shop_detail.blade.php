@extends('template.master')
@section('master')
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Tank Top T-Shirt</strong></div>
    </div>
  </div>
</div>  

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="{{ asset('assets/images/cloth_1.jpg') }}" alt="Image" class="img-fluid">
      </div>
      <div class="col-md-6">
        <h2 class="text-black">Tank Top T-Shirt</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, vitae, explicabo? Incidunt facere, natus soluta dolores iusto! Molestiae expedita veritatis nesciunt doloremque sint asperiores fuga voluptas, distinctio, aperiam, ratione dolore.</p>
        <p class="mb-4">Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis.</p>
        <p><strong class="text-primary h4">Rp.50.000</strong></p>
        <div class="mb-1 d-flex">
          <label class="d-flex mr-3 mb-3" for="option-sm">
            <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
              <input type="radio" id="option-sm" name="shop-sizes">
            </span>
            <span class="d-inline-block text-black">Small</span>
          </label>
        
          <label class="d-flex mr-3 mb-3" for="option-md">
            <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
              <input type="radio" id="option-md" name="shop-sizes">
            </span>
            <span class="d-inline-block text-black">Medium</span>
          </label>
        
          <label class="d-flex mr-3 mb-3" for="option-lg">
            <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
              <input type="radio" id="option-lg" name="shop-sizes">
            </span>
            <span class="d-inline-block text-black">Large</span>
          </label>
        
          <label class="d-flex mr-3 mb-3" for="option-xl">
            <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
              <input type="radio" id="option-xl" name="shop-sizes">
            </span>
            <span class="d-inline-block text-black">Extra Large</span>
          </label>
        </div>
        <div class="mb-5">
          <div class="input-group mb-3" style="max-width: 120px;">
          <div class="input-group-prepend">
            <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
          </div>
          <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
          <div class="input-group-append">
            <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
          </div>
        </div>

        </div>
        <p><a href="/cart" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p>

      </div>
    </div>
  </div>
</div>


{{-- Profil Toko --}}
<div class="store-profile">
<div class="store-details">
<div class="store-image">
  <img src="{{ asset('assets/images/icon_tokoh.jpg') }}" alt="Store Logo" class="img-fluid">
</div>
<div class="store-info">
  <h4>Mak Lambok</h4>
  <p>Lantai 4</p>
  <div class="store-badges">
    <span class="badge badge-primary">Fashion</span>
    <span class="badge badge-success">Makanan</span>
  </div>
</div>
</div>
<div class="store-actions">
<a href="{{ route('toko') }}" class="btn btn-sm btn-outline-primary">Kunjungi Toko</a>
<a href="{{ route('toko') }}" class="btn btn-sm btn-primary">Chat Sekarang</a>
</div>
</div>

{{-- Other Products --}}

<div class="site-section block-3 site-blocks-2 bg-light">
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-7 site-section-heading text-center pt-4 mb-5">
    <h2>Other Products</h2>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="row">
      @foreach ($produks as $produk)
      <div class="col-md-3 mb-4">
          <div class="card">
              <img src="{{ asset('images/produk/' . $produk->gambar_produk) }}" alt="{{ $produk->nama_produk }}" class="card-img-top">
              <div class="card-body">
                  <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                  <p class="card-text">Harga: Rp. {{ number_format($produk->harga, 2) }}</p>
                  <p class="card-text">Stok: {{ $produk->stok }}</p>
                  <a href="#" class="btn btn-primary">Lihat Produk</a>
              </div>
          </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 text-center">
    <a href="{{ route('shop') }}" class="btn btn-primary">Lihat Lainnya</a>
  </div>
</div>
</div>
</div>

@endsection