@extends('layouts.app')
@section('title','Contact - OI Design')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="row">
            <h1 class="h1 display-1"> <span class="text-warning">Contact</span></h1>
        </div>
        <div class="row">
      <div class="col-md-6">
        <h2 class ="color-2">Email</h2>
        <p class="text-light">Email: <a href="mailto:info@example.com" class="text-warning">info@oidesign.com</a></p>

        <h2 class ="color-2">Phone</h2>
        <p class="text-light">Phone: <a href="tel:+491234567890" class="text-warning">+491234567890</a></p>

        <h2  class="color-2">Address</h2>
        <p class="text-light">Musterstrasse 123,<br>
            82000, Munsterstadt, Bayern,<br>
           Germany</p>
      </div>

      <div class="col-md-6">
        <h2 class ="color-2">Contact Form</h2>
        <form method="post" action="contact.php">
          <div class="mb-3">
            <label for="name" class="form-label text-light">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required >
          </div>

          <div class="mb-3">
            <label for="email" class="form-label text-light">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required >
          </div>

          <div class="mb-3">
            <label for="message" class="form-label text-light">Message:</label>
            <textarea id="message" name="message" class="form-control" rows="4" required ></textarea>
          </div>

          <button type="submit" class="btn btn-warning" >Submit</button>
        </form>
      </div>
        </div>
    </div>
</div>
@endsection
