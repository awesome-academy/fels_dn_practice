@extends('admin.master')

@section('title', 'FELS Les Show')

@section('body')
<section id="main-content">

    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('admin/categories/list_cat.title_header') }}
                </div>
                <div class="row w3-res-tb">
                    @if(session('success'))
                        <div class="alert alert-success">
                            <p>{{ trans('admin/categories/list_cat.add') }}</p>
                        </div>
                    @endif
                    @if(session('update'))
                        <div class="alert alert-success">
                            <p>{{ trans('admin/categories/list_cat.update') }}</p>
                        </div>
                    @endif
                    <div class="col-sm-5 m-b-xs">
                        <button id="" type="button" class="btn btn-default"><a action="{{ route('lessions.create') }}">+</a></button>
                        <select class="input-sm form-control w-sm inline v-middle">
                            <option value="0">A-Z</option>
                            <option value="1">Z-A</option>
                        </select>
                        <button class="btn btn-sm btn-default">{{ trans('admin/categories/list_cat.filter') }}</button>
                    </div>
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-3">
                        <form class="input-group" action="{{ route('lessions.index') }}" method="GET">
                            <input type="hidden" name="action" value="search">
                            <input name="key" type="text" id="input" class="input-sm form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-default" type="submit">{{ trans('admin/categories/list_cat.search') }}</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light">
                        <thead>
                            <tr>
                                <th style="width:20px;">
                                    <label class="i-checks m-b-none">
                                        <input type="checkbox"><i></i>
                                    </label>
                                </th>
                                <th>{{ trans('admin/lessions/list_les.id') }}</th>
                                <th>{{ trans('admin/lessions/list_les.cat') }}</th>
                                <th>{{ trans('admin/lessions/list_les.user') }}</th>
                                <th>{{ trans('admin/lessions/list_les.result') }}</th>
                                <th>{{ trans('admin/lessions/list_les.name') }}</th>
                                <th>{{ trans('admin/lessions/list_les.action') }}</th>
                                <th style="width:30px;"></th>
                            </tr>
                        </thead>    
                        @php($i = 0)
                        @foreach($lessions as $lession)
                        <tbody>
                            <tr>
                                <td>
                                    <label class="i-checks m-b-none">
                                        <input type="checkbox" name="post[]"><i></i></label>
                                </td>
                                <td><?php echo ++$i; ?></td>
                                
                                <td><span class="text-ellipsis">{{$lession->category_id}}</span></td>
                                <td><span class="text-ellipsis">{{$lession->user_id}}</span></td>
                                <td><span class="text-ellipsis">{{$lession->result}}</span></td>
                                <td><span class="text-ellipsis">{{$lession->name}}</span></td>
                                <td>
                                    <a href="{{ route('lessions.edit', $lession->id) }}" class="active"><i class="fa fa-pencil-square-o text-info active"></i></a>
                                    <form action="{{ url("lessions/$lession->id") }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" title="Delete" onclick="return confirm('Bạn có chắc chắn muốn xóa?');" class="btn-option-user"><i class="fa fa-trash text-danger"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination-user">
                    {{$lessions->links()}}
                </div>
            </div>
        </div>
    </section>
    <div class="footer">
        <div class="wthree-copyright">
            <p style="text-align: center;">© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
    </div>
</section>

@endsection
