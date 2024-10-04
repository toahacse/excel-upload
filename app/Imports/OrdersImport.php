<?php

namespace App\Imports;

use App\Models\Order;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class OrdersImport implements ToModel, ShouldQueue, WithHeadingRow, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Order([
            'buyer_name'    => $row['buyer_name'],
            'department'    => $row['department'],
            'season'        => $row['season'],
            'po'            => $row['po'],
            'style'         => $row['style'],
            'color'         => $row['color'],
            'size'          => $row['size'],
            'qty'           => $row['qty'],
            'shipping_mode' => $row['shipping_mode'],
            'shipping_week' => $row['shipping_week'],
            'order_des'     => $row['order_des'],
        ]);
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
