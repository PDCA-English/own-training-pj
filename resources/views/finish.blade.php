@extends('layouts.layout')

@section('title','Finish')

@section('main')
<main class="finish">
  <h1>研修お疲れ様でした！</h1>
  <br>
  <p>研修で回答いただいた内容を確認したい方は下記メールアドレスを入力ください。</p>
  <p>「送信」をクリックするとメールアドレスへ回答が送信されます。</p>
  <div>
    <input type="text" id="email" name="trainee_name" placeholder="メールアドレス"/>
  </div>
  <div class="button-submit">
    <button type="submit" class="button">送信</button>
  </div>
  <a href="/" class="button">研修選択へ戻る</a>
</main>
@endsection