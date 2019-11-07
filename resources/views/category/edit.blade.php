@extends('template')
@section('content')

<!-- Page Header -->
  <header class="masthead" style="background-image: url({{asset('clean_blog/img/home-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Edit Category Form</h1>
            <span class="subheading">Edit Category Form</span>
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        
        <form method="post" action="{{route('category.update',$category->id)}}"enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label>Name : </label>
            <input type="text" name="name" class="form-control" value="{{$category->name}}">
          </div>
          
          <div class="form-group">
            <input type="submit" name="update" class="update btn-primary" value="Update">
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection