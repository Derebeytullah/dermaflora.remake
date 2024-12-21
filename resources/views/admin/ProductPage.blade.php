@foreach ($products as $product)
    {{$product->all();}}
@endforeach
<button>
    <a href="{{route('addproduct')}}">Ürün EKle</a>
</button>

