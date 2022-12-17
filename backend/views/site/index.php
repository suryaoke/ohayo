<?php

/** @var yii\web\View $this */

use dosamigos\chartjs\ChartJs;

$this->title = 'My Yii Application';



$total = [];

foreach ($data as $data1) {

    $total[] = $data1["jumlah"];
}



$total1 = [];
foreach ($data as $data2) {
    $total1[] = $data2["bulan"];
}

?>


<div class="site-index content" style="width: 1050px; ">

    <div class="row">
        <div class="col-6">
            <?= ChartJs::widget([
                'type' => 'bar',
                'options' => [
                    'height' => 100,
                    'width' => 100
                ],
                'data' => [
                    'labels' => $total1,
                    'datasets' => [

                        [
                            'label' => "Data Penjualan Ohayo | bakery&cake ",
                            'backgroundColor' => "#007bff",
                            'borderColor' => "rgba(255,99,132,1)",
                            'pointBackgroundColor' => "rgb(0, 0, 255)",
                            'pointBorderColor' => "#fff",
                            'pointHoverBackgroundColor' => "#fff",
                            'pointHoverBorderColor' => "rgba(255,99,132,1)",
                            'data' => $total
                        ]
                    ]
                ]
            ]);
            ?>
        </div>

        <div class="col-6">

        </div>
    </div>
</div>