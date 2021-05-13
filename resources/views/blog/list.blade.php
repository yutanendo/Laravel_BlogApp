@extends('layout')
@section('title', 'ブログ一覧')
@section('content')
    <div class="row">
  <div class="col-md-8 col-md-offset-2">
      <h2>ブログ記事一覧</h2>
      @if (session('err_msg'))
        <p class="text-danger">
            {{ session('err_msg') }}
        </p>
      @endif
      <table class="table table-striped">
          <tr>
              <th>記事番号</th>
              <th>日付</th>
              <th>タイトル</th>
              <th>内容</th>
              <th></th>
          </tr>
          @foreach($blogs as $blog)
          <tr>
              <td>{{ $blog->id }}</td>
              <td>{{ $blog->updated_at }}</td>
              <td><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></td>
              <td>{{ $blog->content }}</td>
              <td><button type="buttun"  class="btn btn-primary"  onclick="location.href='/blog/edit/{{ $blog->id }}'">編集</button></td>
              <td>
              <form method="POST" action="{{ route('delete', $blog->id) }}" onSubmit="return checkDelete()">
              @csrf
              <button type="submit"  class="btn btn-primary"  onclick="">削除</button>
              </form>
              </td>
          </tr>
          @endforeach
      </table>
  </div>
</div>
<script>
function checkDelete(){
    if(window.confirm('削除してよろしいですか？')){
        return true;
    } else {
        return false;
    }
}
</script>
@endsection