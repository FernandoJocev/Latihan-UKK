@extends('layouts.index')

@section('main-content')
<div class="container">
 <h1>Create Post</h1>
 <div id="form-section">
  <form id="form-submit" action="{{ Route('add.post') }}">
   <input type="file" name="thumbnail">
   <input type="text" name="caption" placeholder="Caption">
   <button type="submit">Create post</button>
  </form>
 </div>
</div>
@endsection

@section('javascript')

@endsection