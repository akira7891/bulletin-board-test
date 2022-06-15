<a href="/tweet">もどる</a>
<form action="{{route('tweet.update.edit',['tweetId'=>$tweet->id])}}" method="post">
    @csrf
    <input type="text" name="tweet" value="{{$tweet->content}}">
    <input type="submit" value="送信する">
</form>
@if(session('feedback.success'))
<p>投稿の編集が完了しました！</p>
@endif
