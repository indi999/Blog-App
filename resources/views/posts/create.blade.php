@extends('layouts.master')

@section('content')

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
        <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
</div>

<main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
        Create new post
        </h3>
        
        @include('layouts.errors')

        <form method="POST" action="/posts">
            @csrf

            <div class="form-group">
                <label for="formGroupExampleInput">Title</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="title" >
            </div>
            <!--
            <div class="form-group">
              <label for="exampleFormControlSelect1">Category</label>
              <select class="form-control" id="exampleFormControlSelect1" name="category">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            -->
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Post</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="body" ></textarea>
            </div>
            <!--
            <div class="form-group">
                <label for="exampleFormControlFile1">Image input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status">
                <label class="form-check-label" for="exampleCheck1" >Publish</label>
            </div>
            -->
            <button type="submit" class="btn btn-primary" >Submit</button>

          </form>



      </div><!-- /.blog-main -->

     <!-- blog-sidebar -->
     @include('layouts.sidebar')

    </div><!-- /.row -->    

</main><!-- /.container -->

<br/>
<hr/>

@endsection