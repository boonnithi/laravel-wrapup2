@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">

      <div class="col-md-3">
        <img src="image/avatar/avatar/{{Auth::user()->id}}/avatar.jpeg" class="img-responsive" alt="">
        <a href="/profile/change">Change Profile</a>
         <h4><strong>{{ Auth::user()->name }} {{ Auth::user()->surname }} ( {{ Auth::user()->nickname }} )</strong></h4>
         <p>{{Auth::user()->biography}}</p>
         <div class="list-group">
            <p class="list-group-item-text">{{Auth::user()->education}}</p>
            <p class="list-group-item-text">Website : <a href="{{Auth::user()->website}}">{{Auth::user()->website}}</a></p>
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
                    {{csrf_field()}}
                     <input type="submit" class="btn btn-primary" value="Post">
                  </div>
               </form>
            </div>
         </div>

         @foreach ($posts->get() as $post)
         <div class="panel panel-default">
            <div class="panel-body">
            <h4><strong>{{$post->owner->name}} {{$post->owner->surname}}</strong></h4> {{-- I'm so confused because why not use $post->owner()->name instead $post->owner->surname (why () missing) https://stackoverflow.com/questions/47010807/undefined-property-illuminate-database-eloquent-relations-belongstoname-lara OK, many people found this problems too and fix by same method--}}
            <small>{{$post->created_at}}</small>
            <p>{{$post->body}}</p>
            <a href="/like/{{$post->id}}"><strong>{{$post->likes}} Like(s)</strong></a>

            </div>
         </div>
         @endforeach
      </div>

   </div>
</div>
@endsection