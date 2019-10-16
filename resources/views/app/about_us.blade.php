    <script src="/js/app.js" defer></script>
    {{-- app.cssの呼び出し --}}
    <link rel="stylesheet" href="/css/app.css">
@extends('layouts.app')
@section('content')
<div class="p-3 mb-2 bg-primary text-white h1">About us</div>

<form action="/form.php" method="post">
     <div class="form-group">
    <label for="inputAddress">Name</label>
    <input type="text" class="form-control" id="inputName" placeholder="Enter Name">
  </div>
    <div class="form-group">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
 
    <div class="mb-3">
    <label for="validationTextarea">Content</label>
    <textarea class="form-control" id="validationTextarea" placeholder="Please  send us message" required></textarea>
    <div class="invalid-feedback">
      Please send us a message
    </div>
  </div>

  <div class="text-right">
      <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>



@endsection