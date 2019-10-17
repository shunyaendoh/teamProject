@extends('layouts.app')
@section('content')
<div class="container bg-light">
    <div class="justify-content-center" style="margin: 4rem 14rem;">
        <div class="p-3 mb-2 bg-dark text-white h1">About us</div>

        <form action="/form.php" method="post">
             <div class="form-group">
            <label for="inputAddress">お名前</label>
            <input type="text" class="form-control" id="inputName" placeholder="Name">
          </div>
            <div class="form-group">
              <label for="inputEmail4">メールアドレス</label>
              <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
         
            <div class="mb-3">
            <label for="validationTextarea">お問い合わせ内容</label>
            <textarea class="form-control" id="validationTextarea" placeholder="Message" required></textarea>
            <div class="invalid-feedback">
              Please send us a message
            </div>
          </div>
        
          <div class="text-right">
              <button type="submit" class="btn btn-dark">送信</button>
          </div>
        </form>
        </div>

    </div>
</div>
@endsection