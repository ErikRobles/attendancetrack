<?php

namespace App\Imports;

use App\Models\Zoom;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ZoomImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Zoom([
            'user_name' => $row[0],
            'user_email' => $row[1],
            'join_time' => $row[2],
            'leave_time' => $row[3],
            'duration' => $row[4]
        ]);
    }
}
