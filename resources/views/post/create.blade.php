@extends('template')
@section('content')

<!-- Page Header -->
  <header class="masthead" style="background-image: url({{asset('clean_blog/img/home-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Post Create Form</h1>
            <span class="subheading">Post Create Form</span>
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
        
        <form method="post" action="{{route('post.store')}}"enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Title : </label>
            <input type="text" name="title" class="form-control">
          </div>
          
          <div class="form-group">
            <label>Content : </label>
            <textarea name="content" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label>Photo : </label>
            <span class="text-danger">[Supported file types:jpeg,png,jpg]</span>
            <input type="file" name="photo" class="form-control">
          </div>

          <div class="form-group">
            <label>Categories</label>
            <select name="category" class="form-control">
              <option value="">Choose Category</option>

              {--accept data and loop--}
              <!-- $categories must same with array in pagecontroller -->
              @foreach($categories as $row)
              <option value="{{$row->id}}">{{$row->name}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <input type="submit" name="save" class="save btn-primary" value="Save">
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection