@extends('admin.news.create')
@section('title', '最近のつぶやき')


@section('post_table')
@if (isset($posts))

<div class="post_main">
    @foreach($posts as $post)
    <div class="post_box">
        <div class="post_heading">
            <h3>
                {{ $post->user_id }}
            </h3>
            <time>{{ $post->created_at }}</time>
        </div>
        <div class="post_body">
            <p>{{ Str::limit($post->body, 255) }}</p>
            @if(Auth::check() && Auth::user()->id == $post->user_id)
            <a href="{{ url('admin/news/delete?id='.$post->id)}}">
                削除
            </a>
            @else
            <!--空ボックスを置いてflexレイアウトを保持する--->
            <div></div>
            @endif
        </div>
    </div><!--post_box--->
    @endforeach
</div><!---post_main--->

@endif
@endsection