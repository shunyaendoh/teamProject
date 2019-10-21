<style>
</style>
@extends('layouts.app')
@section('content')
<div class="container bg-light">
    <div class="justify-content-center" style="margin: 4rem 14rem;">
        <div class="p-3 mb-2 bg-dark text-white h2 text-center">About us</div>
        <div class="border mb-3">
          <div class="p-3 mb-2 text-dark text-center">
            <p>
              アイデア村/Ideathonは「起業したいけどビジネスパートナーがいない！」<br>といった悩みを解決するサービスです。
            </p>
            <p>
              私たちは "アイデアを通して人と人をつなげる"をモットーに掲げています。
            </p>
            <p>
              もしあなたが私たちにコメントを残したいなら、<br>下記のコンタクトフォームを利用してください。
            </p>
            <p>
              また、あなたがデベロッパーであるなら<br><a href="https://github.com/shunyaendoh/teamProject">こちら</a>からGitHubのレポジトリにアクセスできます。
            </p>
            </div>
        </div>

        <div class="p-3 mb-2 bg-dark text-white h2 text-center">Contact form</div>
        <form action="{{ route('contact.complete')}}" method="post">
        @csrf
             <div class="form-group">
            <label for="inputAddress">お名前</label>
            <input type="text" class="form-control" id="inputName" placeholder="Name" name="name">
          </div>
            <div class="form-group">
              <label for="inputEmail4">メールアドレス</label>
              <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
            </div>
         
            <div class="mb-3">
            <label for="validationTextarea">お問い合わせ内容</label>
            <textarea class="form-control" id="validationTextarea" placeholder="Message" name="body" required></textarea>
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