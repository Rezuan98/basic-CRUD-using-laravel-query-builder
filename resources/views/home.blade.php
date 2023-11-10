<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>query builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="bg-success text-center p-5 text-white">Student Information</h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <form method="post" action="{{url('/insert')}}">
                    @csrf
                    <input class="form-control m-2" type="text" name="name" placeholder="Enter Student Name">
                    <input class="form-control m-1" type="text" name="email" placeholder="Enter Student Email">
                    <input class="form-control m-1" type="text" name="dept" placeholder="Enter Student Dept">
                    <button class=" btn btn-primary p-1 m-1">Submit</button>
                </form>
            </div>
            <div class="col-lg-7">
                <table class="table table-striped">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Dept</th>
                    <th>Edit</th>
                    <th>Delete</th>

                    <tbody>
                        @foreach ($select as $item)

                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->dept}}</td>
                            <td><a href="{{url('/edit/'.$item->id)}}"><button class="btn btn-success p-1 ">Edit</button></a></td>
                            <td><a href="{{url('/delete/'.$item->id)}}"><button class="btn btn-warning p-1 ">Delete</button></a></td>
                        </tr>
                            
                        @endforeach
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>