<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/datatable.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <title>Sell laptop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <style>
      .dataTables_wrapper{
        display: flex;
        flex-direction: column;
        align-items:initial !important;
        overflow-x: hidden;
        padding: 0.5em 1.5em;
        border: 1px solid #000;
      }
    </style>
</head>
<body>
  <center class="mb-5">
    <h1>Admin</h1>
  
    
    
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-danger fw-bold fs-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add laptops
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        
            <div class="modal-body">
              <form action="insertData" method="POST" class="action" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <input type="text" placeholder="Enter Laptop name" class="form-control" name="LName" id="">
                </div>
                <div class="mb-2">
                    <input type="text" placeholder="Enter Laptop generation" class="form-control" name="Lgeneration" id="">
                </div>
                <div class="mb-2">
                    <input type="text" placeholder="Enter Laptop price" class="form-control" name="Pprice" id="">
                </div>
                <div class="mb-2">
                    <input type="file" class="form-control" name="image">
                </div>
                <button type="submit" class="btn btn-outline-danger fw-bold fs-4 rounded-pill"> Add your laptop </button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
      </div>
    </center> 
    <table class="table container" id="myTable">
      <thead >
          <th>id</th>
          <th>laptop name</th>
          <th>laptop generation</th>
          <th>Price</th>
          <th>Image</th>
          <th>Update</th>
          <th>Delete</th>
      </thead>
      <tbody>
        @foreach($data as $item) 
        <tr>
          <form action="Update" method="get" enctype="multipart/form-data">
            <td>
               <input type="hidden" name="pid" value="{{$item['Id']}}"/>
                {{$item['Id']}}
            </td>
            <td>
              <input type="hidden" name="LName" value="{{$item['LName']}}"/>
                {{$item['LName']}}
            </td>
            <td>
               <input type="hidden" name="Lgeneration" value="{{$item['Lgeneration']}}"/>
                {{$item->Lgeneration}}
            </td>
            <td>
              <input type="hidden" name="Pprice" value="{{$item['Pprice']}}"/>
                {{$item->Pprice}}
            </td> 
            <td>
              <img src="image/{{$item->PImage}}" alt="" style="height: 75px"/>
            </td> 
            <td><input type="submit"  class="btn btn-success" name="update" value="Update"></td>
            <td><input type="submit"  class="btn btn-danger" value="Delete"></td>   
          </form>
        </tr>
       @endforeach
      </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8"  src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="//code.jquery.com/jquery-1.12.3.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script>
    $(document).ready( function () {
      $('#myTable').DataTable();
    });
    </script>
</body>
</html>
