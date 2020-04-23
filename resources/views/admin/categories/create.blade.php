@extends('admin.master')

@section('title', 'FELS Add Cat')

@section('body')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <section class="panel">
                <header class="panel-heading">
                    {{ trans('admin/categories/add_cat.title_header') }}
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form action="{{ url('/categories') }}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="title">{{ trans('admin/categories/add_cat.title') }}</label>
                                <input type="text" id="title" class="form-control{{ $errors->has('title') ? ' has-error' : '' }}" name="title" id="title" placeholder="Title">
                                 @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="desc">{{ trans('admin/categories/add_cat.desc') }}</label>
                                <textarea style="resize: none;" type="text" id="desc" name="desc" class="form-control{{ $errors->has('desc') ? ' has-error' : '' }}" id="desc" placeholder="Description"></textarea>
                                @if ($errors->has('desc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-info">{{ trans('admin/categories/add_cat.btn_submit') }}</button>
                        </form>
                        @if(session('danger'))
                            <div class="alert alert-success">
                                <p>{{ trans('admin/categories/list_cat.err_add') }}</p>
                            </div>
                        @endif
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
