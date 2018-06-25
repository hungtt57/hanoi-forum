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
                      $filename = $account->abstract_panel.'_'.str_slug($account->first_name).str_slug($account->last_name).'_'.str_slug($account->title_of_paper).'.'.$ext;
                        $success = \File::copy(public_path($account->abstract),public_path( '/files/attachments/'.$filename) );

//                        if ($account->abstract) {
//                            @unlink(public_path($account->abstract));
//                        }
                        $account->abstract =  '/files/attachments/'.$filename;
                        $account->save();
                    }

            }

    }
}
