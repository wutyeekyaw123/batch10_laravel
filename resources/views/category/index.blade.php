@extends('template')
@section('content')
  <div class="container">

    <div class="row">

     
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row">
          <h4 class="text-center ">Category lists!</h4>
          <div class="table-responsive text-success">
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th colspan="2"class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $rows)
                <tr>
                  <td>{{$rows->id}}</td>
                  <td>{{$rows->name}}</td>
                  <td><a href="{{route('category.edit',$rows->id)}}" class="btn btn-success">Edit</a></td>
                  <td>
                    <form method="post" action="{{route('category.destroy',$rows->id)}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-warning float-right" value="Delete">
                  </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
             
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->
@endsection