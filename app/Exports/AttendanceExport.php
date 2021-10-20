<?php

namespace App\Exports;

use App\Models\AppModelsAttendance;
use Maatwebsite\Excel\Concerns\FromCollection;

class AttendanceExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return AppModelsAttendance::all();
    }
}
