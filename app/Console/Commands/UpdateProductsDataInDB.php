<?php

namespace App\Console\Commands;

use App\Services\Product\FetchProductsData;
use Illuminate\Console\Command;

class UpdateProductsDataInDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-products-data-in-d-b';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if(FetchProductsData::fetchProductsAndSaveToDatabase()->isSuccessful())
            dd('done');

        // TODO :: NEED TO LOG THIS TO ERROR CHANNEL
        dd('error');

    }
}
