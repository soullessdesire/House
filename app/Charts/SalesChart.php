<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class SalesChart extends Chart
{
    public function __construct()
    {
        parent::__construct();

        $this->labels(['January', 'February', 'March', 'April', 'May'])
            ->dataset('Monthly Sales', 'line', [150, 200, 180, 250, 300])
            ->options([
                'responsive' => true,
                'maintainAspectRatio' => false,
            ]);
    }
}
