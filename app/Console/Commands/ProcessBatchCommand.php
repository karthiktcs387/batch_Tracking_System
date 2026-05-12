<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ProcessBatchCommand extends Command
{
    protected $signature = 'process:batch';

    protected $description = 'Process pending jobs';

    public function handle()
    {
        $this->info('Command Running');

        $records = DB::table('jobs')
            ->where('status', 'pending')
            ->orderBy('id', 'asc')
            ->get();

        foreach ($records as $record) {

            DB::table('jobs')
                ->where('id', $record->id)
                ->update([
                    'status' => 'completed'
                ]);

            $this->info('Processed: ' . $record->file_name);
        }

        return 0;
    }
}