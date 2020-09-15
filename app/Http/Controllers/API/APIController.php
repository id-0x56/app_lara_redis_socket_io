<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\LineChartEvent;

class APIController extends Controller
{
    public function line_chart()
    {
        $data = [
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            'datasets' => [
                [
                    'label' => '2000',
                    'data' => [rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100)],
                    'borderColor' => "#3e95cd",
                    'fill' => false,
                ],
                [
                    'label' => '2010',
                    'data' => [rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100)],
                    'borderColor' => "#c45850",
                    'fill' => false,
                ],
                [
                    'label' => '2020',
                    'data' => [rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100)],
                    'borderColor' => "#e8c3b9",
                    'fill' => false,
                ],
            ],
        ];

        // dump($data);

        // return $data;
        event(new LineChartEvent($data));
    }

}
