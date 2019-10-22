<style>
</style>
@extends('layouts.app')
@section('content')
<div class="container bg-light">
    <div class="justify-content-center" style="margin: 4rem 14rem;">
    
        <div class="p-3 mb-2 bg-dark text-white h2 text-center">Contact form</div>
        
            <div class="form-group">
              <label for="inputAddress">お名前</label>
              <div>{{ $contact->name }}</div>
            </div>

            <div class="form-group">
              <label for="inputEmail4">メールアドレス</label>
              <div>{{ $contact->email }}</div>
            </div>
         
            <div class="mb-3">
              <label for="validationTextarea">お問い合わせ内容</label>
              <div class="border" style="height: 100px; background-color: #f5f5f5;">
                <div class="ml-2">{{ $contact->body }}</div>
              </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex">
<a href="{{ route('idea.index') }}" class="mx-auto">ホームへ戻る</a>
</div>
@endsection