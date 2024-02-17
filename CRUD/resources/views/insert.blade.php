<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


    <h1 class="text-center m-3">Product Insert Page!</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



    @isset($successMessage)
    <div class="alert alert-success" role="alert">
        {{$successMessage}}
      </div>
    @endisset






    <form class="row g-3 m-5" method="POST" action="/insertData" enctype='multipart/form-data'>
        @csrf
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="productName" id="inputEmail4">
        </div>
        <div class="col-md-12">
            <label for="inputPassword4" class="form-label">Product Price</label>
            <input type="text" class="form-control" name="productPrice" id="inputPassword4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Product Description</label>
            <input type="text" class="form-control" name="productDescription" id="inputAddress">
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="formFile" class="form-label">Select your Product Image:</label>
                <input class="form-control" type="file" name="productImage" id="formFile">
              </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Add Product</button>
        </div>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
