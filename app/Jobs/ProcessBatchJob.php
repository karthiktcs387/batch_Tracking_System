<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class ProcessBatchJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $ids;

    public function __construct($ids)
    {
        $this->ids = $ids;
    }

    public function handle()
    {
        DB::table('jobs')
            ->whereIn('id', $this->ids)
            ->update([
                'status' => 'completed'
            ]);
    }
}