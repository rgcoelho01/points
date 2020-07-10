@extends('layouts.app')
  
@section('title','Points')
@section('content')
<div class="container mt-3">
  <h3>Toast Example</h3>
  <p>A toast is like an alert box that is only shown for a couple of seconds when something happens (i.e. when a user clicks on a button, submits a form, etc.).</p>
  <p>In this example, we use a button to show the toast message.</p>
 
  <button type="button" class="btn btn-primary" id="myBtn">Show Toast</button>

  <div class="toast mt-3">
    <div class="toast-header">
      Toast Header
    </div>
    <div class="toast-body">
      Some text inside the toast body
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $('.toast').toast('show');
  });
});
</script>
@endsection

