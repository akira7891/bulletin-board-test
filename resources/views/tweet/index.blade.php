@if(session('feedback.success'))
<p>{{session('feedback.success')}}</p>
@endif

<h1>投稿フォームのテスト</h1>
<form action="/tweet/create" method="post">
    @csrf
    <input type="text" name="tweet">
    <input type="submit" value="送信する">
    @error('tweet')
    <p>文字が入力されていません</p>
    @enderror
</form>

<h1>データベースのデータを出力</h1>
@foreach($tweets as $tweet)
<p>{{$tweet->content}}</p>
<a href="{{route('tweet.update.index',['tweetId'=>$tweet->id])}}">編集する</a>
<form action="{{route('tweet.delete',['tweetId'=>$tweet->id])}}" method="post">
    @csrf
    <input type="submit" value="削除する">
</form>

@endforeach
