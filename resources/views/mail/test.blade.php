<div>
    <h2>{{ trans('admin/categories/list_cat.hi') }}, {{$c_name}}!</h2>
<p>{{ trans('admin/categories/list_cat.add') }}</p>
<h4>{{ trans('admin/categories/list_cat.send_cat') }}</h4>
<table border="1" cellspacing="0" cellpadding="10" width="500px">
    <thead>
        <tr>
            <th>{{ trans('admin/categories/list_cat.id') }}</th>
            <th>{{ trans('admin/categories/list_cat.title') }}</th>
            <th>{{ trans('admin/categories/list_cat.desc') }}</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="text-align: center;">{{$categories->id}}</td>
            <td style="text-align: center;">{{$categories->title}}</td>
            <td style="text-align: center;">{{$categories->desc}}</td>
        </tr>
    </tbody>
</table>
