<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\jadwal;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    public function resetStatusJadwal(){
        $jadwal = jadwal::where('status', 1) -> get();
        foreach($jadwal as $slot){
            $slot -> status = 0;
            $slot -> save();
        }
    }

    protected function schedule(Schedule $schedule): void
    {
        $schedule -> call(function(){
            $this -> resetStatusJadwal();
        }) -> everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
