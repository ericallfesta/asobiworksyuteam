<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<form>
      <div class="form-group">
      <label class="control-label col-sm-4" for="email">メールアドレス</label>
      <div class="col-sm-8">

        <input type="text" name="email" id="email" value="" class="form-control input-lg" placeholder="" required="">
        <span class="help-block">▼ 確認のため再入力</span>
        <input type="text" name="email02" id="email02" value="" class="form-control input-lg" placeholder="確認用メールアドレス" required="">
        <span class="help-block">※半角200文字以内で入力してください。<br>
        <ul>
          <li>携帯電話アドレス（<b class="red">特に@ezweb.ne.jp</b>）でのご登録は、手続きメールが届かない場合がございます。<br>
          PCのメール又はフリーメールアドレスでのご登録をおすすめします。</li>
          <li>自動的に迷惑メールフィルタで迷惑メールとして別フォルダに振り分けられている場合があります。</li>
          <li>メールは「info@shigoto-ryokou.com」より送信されますので、受信拒否機能を設定されている場合は、<br>
          ドメイン「shigoto-ryokou.com」のメールが受信できるように設定後、改めてお試しください。</li>
          <li>登録していただいたメールアドレスが間違っていたと予想される場合は、登録手続きを最初からやり直してください。</li>
        </ul>
        </span>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="pass">パスワード</label>
      <div class="col-sm-8">

        <input type="password" name="pass" id="pass" value="" class="form-control input-lg" required="">
        <span class="help-block">▼ 確認のため再入力</span>
        <input type="password" name="pass02" id="pass02" value="" class="form-control input-lg" placeholder="確認用パスワード" required="">
        <span class="help-block">半角英数8文字〜15文字以内</span>
      </div>
    </div>
</form>
</body>
</html>


