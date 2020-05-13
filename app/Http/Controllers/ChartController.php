<?php

namespace App\Http\Controllers;

use App\Models\Lessions;
use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        $chart_options = [
            'chart_title' => 'Lessions by Weeks',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Lessions',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'line',
            'filter_field' => 'created_at',
            'filter_days' => 7,
            ];

        $chart1 = new LaravelChart($chart_options);

        $chart_options = [
                'chart_title' => 'Lessions by Category',
                'chart_type' => 'pie',
                'report_type' => 'group_by_relationship',
                'model' => 'App\Models\Lessions',

                'relationship_name' => 'category', /*represents function category() on Lessions model*/
                'group_by_field' => 'title', /*category.title*/

                'aggregate_function' => 'count',
                'aggregate_field' => 'category_id', /*show only data filtered by that datetime field*/

                'filter_field' => 'created_at',
                'group_by_date' =>'week', /*show only lessions for last 7 days*/
        ];
        $chart2 = new LaravelChart($chart_options);
        return view('chart', compact('chart1','chart2'));
    }
}
