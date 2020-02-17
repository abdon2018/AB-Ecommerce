<h1>Mis productos</h1>
@foreach ($products as $product)
  <h3>{{$product->name}}</h3>
  <img src="/storage/{{$product->image}}" width="250">
  <h3>{{$product->id}}</h3>
  <h3>{{$product->price}}</h3>
@endforeach
