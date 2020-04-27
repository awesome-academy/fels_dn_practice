@extends('admin.master')

@section('title', 'FELS Cat Edit')

@section('body')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <section class="panel">
                <header class="panel-heading">
                    {{ trans('admin/categories/edit_cat.title_header') }}
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" method="POST" action="{{ url('categories/'.$categories->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('put') }}
                            <div class="form-group">
                                <label for="title">{{ trans('admin/categories/add_cat.title') }}</label>
                                <input type="text" name="title" class="form-control" id="title" value="{{ $categories->title }}">
                            </div>
                            <div class="form-group">
                                <label for="desc">{{ trans('admin/categories/add_cat.desc') }}</label>
                                <textarea style="resize: none;" id="desc" type="text" class="form-control" name="desc">{{$categories->desc}}</textarea>
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
