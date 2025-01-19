<?php

namespace App\Console\Commands;

use Faker\Factory;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class RandomNameGenerator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:random-name-generator';

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
        $faker = Factory::create('ar_SA');
        $names = [];
        // generate 1000 lines
        for ($i = 0; $i < 100000; $i++) {
            $names[] = [
                $faker->name(),
                '05'.$faker->numberBetween(10000000, 99999999),
            ];
        }

        $lines = [];
        foreach ($names as $name) {
            $lines[] = implode(',', $name);
        }

        // write to file
        Storage::put('random-names.txt', implode("\n", $lines));
    }
}
