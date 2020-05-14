@extends('admin.master')

@section('title', 'FELS Les Add')

@section('body')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <section class="panel">
                <header class="panel-heading">
                    {{ trans('admin/lessions/add_les.title_header') }}
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form">
                            <div class="form-group">
                                <label for="category" class="">{{ trans('admin/lessions/add_les.cat') }}:</label>
                                <select class="input-sm form-control">
                                    <option value="0">Bulk action</option>
                                    <option value="1">Delete selected</option>
                                    <option value="2">Bulk edit</option>
                                    <option value="3">Export</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category" class="">{{ trans('admin/lessions/add_les.word') }}:</label>
                                <select class="input-sm form-control">
                                    <option value="0">Bulk action</option>
                                    <option value="1">Delete selected</option>
                                    <option value="2">Bulk edit</option>
                                    <option value="3">Export</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="result">{{ trans('admin/lessions/add_les.result') }}</label>
                                <textarea style="resize: none;" type="text" class="form-control" id="result" placeholder="Description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-info">{{ trans('admin/lessions/add_les.btn_submit') }}</button>
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
