@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">

      <div class="col-md-3">
         <h3>{{ Auth::user()->name }} {{ Auth::user()->surname }}</h3>
         <div class="list-group">
            <p class="list-group-item-text">Education : </p>
            <p class="list-group-item-text">Education : </p>
         </div>
      </div>

      <div class="col-md-8">
         <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">New Post</h3>
            </div>
            <div class="panel-body">
               <form action="/post/new" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                     <textarea class="form-control" name="body" rows="8" cols="80"></textarea>
                  </div>
                  <div class="form-group pull-right">
                     <input type="submit" class="btn btn-primary" value="Post">
                  </div>
               </form>
            </div>
         </div>

         @foreach ($posts->get() as $post)
         <div class="panel panel-default">
            <div class="panel-body">
            {{$post->body}}

            </div>
         </div>
         @endforeach
      </div>

   </div>
</div>
@endsection