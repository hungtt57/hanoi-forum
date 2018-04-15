<?php

namespace App\Console\Commands;

use App\Models\Banner;
use Illuminate\Console\Command;
use Intervention\Image\Facades\Image;

class BlurBanner extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blur:banner';

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
	    $banners = Banner::all();

	    foreach ($banners as $banner)
	    {
		    $filename = basename($banner->image);
	    	$image = Image::make(public_path('files/'.$filename))->blur(45)->save(public_path( 'files/blur-' . $filename ));
	    }
    }
}
