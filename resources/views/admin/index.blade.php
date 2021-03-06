@extends('admin.layouts.layout')

@section('content')
    <div class="page-content">
        <div class="clearfix container-fluid row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image:url('/vendor/images/01.jpg');">
                    <div class="dimmer"></div>
                    <div class="panel-content">
                        <i class="voyager-tree"></i><h4> 文章</h4>
                        <p>目前为止，您一共发布了 {{ \App\Models\Post::isNotDraft()->count() }} 篇文章，再接再厉。</p>
                        <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">查看所有文章</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="analytics-container">
            <p style="border-radius:4px; padding:20px; background:#fff; margin:0; color:#999; text-align:center;">
                ～_～
            </p>
        </div>
    </div>
@endsection
