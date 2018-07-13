@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Change Profile Picture</h1>
    <form action="/profile/change" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Upload new profile picture</label>
            <input type="file" class="form-control" name="avatar">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success pull-right" value="Upload new picture">
        </div>
    </form>
</div>
    
@endsection