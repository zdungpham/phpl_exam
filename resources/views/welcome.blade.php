<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <main class="main">
        <div class="containter">
            <h1 class="text-center">Add products to the database</h1>
            
                <form action="/createProduct" method="post">
                    @csrf
                <div class="row">
                    <div class="mb-3 col-4">
                        <label class="form-label">Product Type</label>
                        <input type="text" name="prod_type" class="form-control">
                    </div>
                    <div class="mb-3 col-4">
                        <label class="form-label">Product Code</label>
                        <input type="text" name="prod_code" class="form-control">
                    </div>
                    <div class="mb-3 col-4">
                        <label class="form-label">Product Name</label>
                        <input type="text" name="prod_name" class="form-control"> </input>
                    </div>
                    <div class="mb-3 col-4">
                        <label class="form-label">Quantity</label>
                        <input type="number" name="price" class="form-control">
                    </div>
                    <div class="mb-3 col-4">
                        <label class="form-label">Note</label>
                        <input type="text" name="note" class="form-control"> </input>
                    </div>
                    
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary text-center">Add product</button>
                    </div>
                </form>


        </div>
        <div>
            <h2 class="text-center">Display a list of products</h2>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Product Type</th>
                <th scope="col">Product Code</th>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Note</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $items)
                <tr>
                <th scope="row">{{$items['id']}}</th>
                <td>{{$items['productType']}}</td>
                <td>{{$items['productCode']}}</td>
                <td>{{$items['productName']}}</td>
                <td>{{$items['quantity']}}</td>
                <td>{{$items['note']}}</td>
                </tr>
                @endforeach
                
            </tbody>
            </table>
        </div>
        <div>
            <h3 class="text-center" >Report on total quantity of products</h3>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Product Type</th>
                <th scope="col">Quantity</th>
                <th scope="col">Note</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $items)
                <tr>
                <td>{{$items['productType']}}</td>
                <td>{{$items['quantity']}}</td>
                <td>{{$items['note']}}</td>
                </tr>
                @endforeach
                
            </tbody>
            </table>
        </div>
    </main>
</body>

</html>