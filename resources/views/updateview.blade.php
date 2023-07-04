<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="col-md-4 m-auto border p-2 border-info">
        <h2 class="text-center text-warning">Update View</h2>
        <form action="Updated" method="get"> 
            <div class="mb-2">
                <label for="">Laptop Name</label>
                <input type="text" name="LName" value="{{$LName}}" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Laptop generation</label>
                <input type="text" name="Lgeneration" value="{{$Lgeneration}}"  class="form-control">
            </div> <div class="mb-2">
                <label for="">Laptop price</label>
                <input type="text" name="Pprice" value="{{$Pprice}}"  class="form-control">
            </div>
            <input type="hidden" name="pid" value="{{$id}}">
            <br>
            <button type="submit" class="btn btn-outline-warning rounded-pill">Update</button>
        </form>
    </div>
    
</body>
</html>

