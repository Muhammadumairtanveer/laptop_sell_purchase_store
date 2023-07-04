<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
         crossorigin="anonymous"
      />
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img width= "400px" height="300px" src="image/{{$item['PImage']}}" alt="">
            </div>
            <div class="col-lg-6">
                <div class="container">
                    <h1>{{$item->LName}}</h1>
                    <h4>{{$item->generation}}</h4>
                    <h5>{{$item->Pprice}}</h5>
                </div>
            </div>
        </div>
    </div>
</body>
</html>