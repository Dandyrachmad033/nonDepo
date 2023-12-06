<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\monitoring;
use App\Models\plugging;
use Illuminate\Support\Collection;

class HistoryPlug_export implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    protected $startDate;
    protected $endDate;

    public function __construct($startDate, $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }
    public function collection()
    {
        $data = plugging::select('*')->where('time', '>=', $this->startDate)->where('time', '<=', $this->endDate)->get();
        // $data = Plugging::leftJoin('monitorings', 'pluggings.monitoring_id', '=', 'monitorings.id')
        //     ->select('pluggings.*', 'monitorings.nama_monitoring')
        //     ->where('pluggings.created_at', '>=', $this->startDate)
        //     ->where('pluggings.created_at', '<=', $this->endDate)
        //     ->get();

        return $data;
    }
}
