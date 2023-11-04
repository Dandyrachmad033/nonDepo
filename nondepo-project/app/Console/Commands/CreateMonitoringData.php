<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Log;
use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\monitoring;

class CreateMonitoringData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-monitoring-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create monitoring data for the previous day with not monitoring';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $yesterday = Carbon::yesterday()->format('d-m-Y');
            $dataBelumDimonitor = monitoring::where('time_monitoring', 'LIKE', $yesterday . '%')
                ->where('monitor', 'not')
                ->get();
            foreach ($dataBelumDimonitor as $item) {
                $currentHour = now()->format('H');
                if ($currentHour >= 7 && $currentHour < 15) {
                    $currentShift = 'shift 1';
                } elseif ($currentHour >= 15 && $currentHour < 23) {
                    $currentShift = 'shift 2';
                } else {
                    $currentShift = 'shift 3';
                }
                // Buat data baru dengan nilai-nilai yang sama kecuali monitor diubah menjadi 'done'
                $dataBaru = [
                    'no_container' => $item->no_container,
                    'set_temp' => $item->set_temp,
                    'sup_temp' => $item->sup_temp,
                    'ret_temp' => $item->ret_temp,
                    'remark' => $item->remark,
                    'time_monitoring' => now()->format('d-m-Y H:i:s'),
                    'photo' => $item->photo,
                    'alarm' => $item->alarm,
                    'shift' => $currentShift,
                    'monitor' => 'not', // Ubah status monitor menjadi 'done'
                ];

                monitoring::create($dataBaru);
            }

            $this->info('Monitoring data created for the previous day.');
        } catch (\Exception $e) {
            Log::error('Error creating monitoring data: ' . $e->getMessage());
            $this->error('Error creating monitoring data.');
        }
    }
}
