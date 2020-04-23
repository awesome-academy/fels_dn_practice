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
                        <form role="form">
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ trans('admin/categories/add_cat.title') }}</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="desc">{{ trans('admin/categories/add_cat.desc') }}</label>
                                <textarea style="resize: none;" type="text" class="form-control" id="desc" placeholder="Description"></textarea>
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
