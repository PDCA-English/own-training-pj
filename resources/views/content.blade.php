@extends('layouts.layout')

@section('title','Content')

@section('main')
<main class="finish">
  <h1>ようこそ{{ $data1['user_name'] }}さん！</h1>
  <h1>今回の研修は{{ $data1['training-number'] }}です。</h1>
  <br>
  <iframe width="1920" height="800" src="https://www.youtube.com/embed/BHACKCNDMW8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <p>質問番号を選んでください</p>
  <div class="training-options">
    <form action="cgi-bin/formmail.cgi" method="post">
      <p>質問番号
      <select name="training-number">
      <option value="tr1">Q１</option>
      <option value="tr2">Q２</option>
      <option value="tr3">Q３</option>
      <option value="tr4">Q４</option>
      </select></p>
  </div>
  <div>
    <input type="text" id="email" name="trainee_name" placeholder="回答を記入してください"/>
  </div>
  <div class="button-submit">
    <button type="submit" class="button">回答提出</button>
  </div>
  <a href="/finish" class="button">研修終了</a>
</main>
@endsection