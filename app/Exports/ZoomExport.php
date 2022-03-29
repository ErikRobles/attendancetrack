<?php

namespace App\Exports;

use App\Models\Zoom;
use Maatwebsite\Excel\Concerns\FromCollection;

class ZoomExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Zoom::all();
    }
}
