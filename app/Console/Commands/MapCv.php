<?php

namespace App\Console\Commands;

use http\Client\Curl\User;
use Illuminate\Console\Command;

class MapCv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'map:cv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        //
        $cnt = 0;
        $files = \File::files(public_path('pdfs'));
        foreach ($files as $file) {
            $fileName = str_replace('/home/hanoiforum.vnu.edu.vn/public_html/public/pdfs/', '', $file);
            $fileName = str_replace('.pdf', '', $fileName);
            $user = \App\Models\User::selectRaw('CONCAT(first_name, " ", last_name ) as f_name, id')
                ->having('f_name', $fileName)
                ->first();

            if ($user) {
                $item = \App\Models\User::find($user->id);
                $item->pdf_cv = $fileName;
                $item->save();
            }
        }
       // dd($cnt);
    }
}
