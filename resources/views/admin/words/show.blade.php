@extends('admin.master')
@section('title', 'FELS Word Show')
@section('body')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('admin/words/list_word.title_header') }}
                </div>
                <div class="row w3-res-tb">
                    <div class="col-sm-5 m-b-xs">
                        <button id="" type="button" class="btn btn-default"><a href="{{ route('words.create') }}">+</a></button>
                        <select class="input-sm form-control w-sm inline v-middle">
                            <option value="0">A-Z</option>
                            <option value="1">Z-A</option>
                        </select>
                        <button class="btn btn-sm btn-default">{{ trans('admin/words/list_word.filter') }}</button>
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <input type="text" class="input-sm form-control" placeholder="Search">
                            <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">{{ trans('admin/words/list_word.search') }}</button>
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

                                <th>{{ trans('admin/words/list_word.id') }}</th>
                                <th>{{ trans('admin/words/list_word.name') }}</th>
                                <th>{{ trans('admin/words/list_word.cat') }}</th>
                                <th>{{ trans('admin/words/list_word.content') }}</th>
                                <th>{{ trans('admin/words/list_word.action') }}</th>
                            </tr>
                        </thead>
                        @php($i = 0)
                        @foreach($words as $word)
                        <tbody>
                            <tr>
                                <td>
                                    <label class="i-checks m-b-none">
                                        <input type="checkbox" name="post[]"><i></i></label>
                                </td>
                                <td><?php echo ++$i; ?></td>
                                <td><span class="text-ellipsis">{{$word->name}}</span></td>
                                <td><span class="text-ellipsis">{{$word->category->title}}</span></td>
                                <td><span class="text-ellipsis">{{$word->content}}</span></td>
                                <td>
                                <a href="{{ route('words.edit', $word->id) }}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-info active"></i></a>
                                    <form action="{{ route('words.destroy',$word->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" title="Delete" onclick="return confirm('Bạn có chắc chắn muốn xóa?');" class="btn-option-user"><i class="fa fa-trash text-danger"></i></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-7 text-right text-center-xs">
                            {{$words->links()}}
                        </div>
                    </div>
                </footer>
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
