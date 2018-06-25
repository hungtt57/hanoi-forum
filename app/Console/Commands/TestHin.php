<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use File;
class TestHin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:hin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
            $accounts = User::all();
            foreach ($accounts as $account) {
                    if($account->abstract and str_contains($account->abstract,'/files/attachments/')) {

                      $ext = File::extension(public_path($account->abstract));
                      $filename = $account->'.'.$ext;
//                        $file->move(public_path() . '/files/attachments/', $filename);
//
//                        if ($old) {
//                            @unlink(public_path($old));
//                        }
                    }

            }

    }
}
