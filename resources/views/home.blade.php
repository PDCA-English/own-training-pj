@extends('layouts.layout')

@section('title','Index')

@section('main')
<main>
  <div id="contact">
    <h2 class="section-title">情報の入力をお願いします。</h2>
    <form class="form" method="get" action="/content">
      @csrf
      <div>
        <input type="text" id="name" name="user_name" placeholder="氏名を入力してください"/>
      </div>
      <div class="training-options">
        <form action="cgi-bin/formmail.cgi" method="post">
          <p>研修選択
          <select name="training-number">
          <option value="tr1">１：○○○○○○○</option>
          <option value="tr2">２：○○○○○○○</option>
          <option value="tr3">３：○○○○○○○</option>
          <option value="tr4">４：○○○○○○○</option>
          </select></p>
        </form>
      </div>
      <div class="button-submit">
        <button type="submit" class="button">研修開始</button>
      </div>

    </form>
  </div>
</main>
@endsection