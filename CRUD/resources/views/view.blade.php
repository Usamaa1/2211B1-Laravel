<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1>All Products Page!</h1>


   @if(Session::has('productDelete'))
    <div class="alert alert-danger" role="alert">
        {{Session::get('productDelete')}}
      </div>
    @endif

   @if(Session::has('productUpdate'))
    <div class="alert alert-success" role="alert">
        {{Session::get('productUpdate')}}
      </div>
    @endif

    <div class="container">

        @foreach ($products as $product)
        <div class="card" style="width: 18rem;">
            <img src="storage/{{$product->productImage}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$product->productName}}</h5>
                <p class="card-text">{{$product->productPrice}}</p>
                <p class="card-text">{{$product->productDescription}}</p>
                <a href="/update/{{$product->id}}" class="btn btn-primary">Update</a>
                <a href="/delete/{{$product->id}}" class="btn btn-danger">Delete</a>
            </div>
        </div>
        @endforeach


      
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
