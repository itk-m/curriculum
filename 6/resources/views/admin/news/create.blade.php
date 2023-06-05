{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{ $posts = null }}


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'つぶやき処')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ホーム
                </div>
                <form action="{{ url('admin/news/create') }}" method="POST" enctype="multipart/form-data">
                    {{-- @csrf重要記述 --}}
                    @csrf
                    @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <div class="card-body">
                        <input name="body" type="text" class="form-control" Placeholder="いまどうしてる">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-2 text-center px-5 py-2">つぶやく</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection