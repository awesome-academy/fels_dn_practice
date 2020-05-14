@extends('admin.master')

@section('title', 'FELS Les Edit')

@section('body')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <section class="panel">
                <header class="panel-heading">
                    {{ trans('admin/lessions/edit_les.title_header') }}
                </header>
                @if (session('update_success'))
                    <div class="alert alert-success mb-0 mt-2" role="alert">
                        {{ session('update_success') }}
                    </div>
                @endif
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" method="POST" action="{{ route('lessions.update', ['lessions' => $lessions->id]) }}">
                            {{ csrf_field() }}
                            {{ method_field('put') }}
                            <div class="form-group">
                                <label for="title">{{ trans('admin/lessions/list_les.cat') }}</label>
                                <input type="text" name="category_id" class="form-control" id="title" value="{{ $lessions->category_id }}">
                            </div>
                             <div class="form-group">
                                <label for="title">{{ trans('admin/lessions/list_les.user') }}</label>
                                <input type="text" name="user_id" class="form-control" id="title" value="{{ $lessions->user_id }}">
                            </div>
                            <div class="form-group">
                                <label for="desc">{{ trans('admin/lessions/list_les.result') }}</label>
                                <textarea style="resize: none;" id="desc" type="text" class="form-control" name="result">{{ $lessions->result }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="desc">{{ trans('admin/lessions/list_les.name') }}</label>
                                <textarea style="resize: none;" id="desc" type="text" class="form-control" name="name">{{ $lessions->name }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-info">{{ trans('admin/categories/add_cat.btn_submit') }}</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <div class="footer">
        <div class="wthree-copyright">
            <p style="text-align: center;">© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
    </div>
</section>

@endsection
