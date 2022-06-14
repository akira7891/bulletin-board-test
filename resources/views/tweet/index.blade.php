<h1>データベースのデータを出力</h1>
@foreach($tweets as $tweet)
<p>{{$tweet->content}}</p>
@endforeach
