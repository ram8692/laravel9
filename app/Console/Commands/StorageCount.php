<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
//this command is created to count files and folders
//php artisan storage:count bootstrap --folder
class StorageCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    //protected $signature = 'abc:name'; it will create diff section with name of abc
    //below code means "?" means optional "*" as many as u can enter arguments
    //protected $signature = 'storage:count (path?*)';
    //below code is to count files and sub folder
    protected $signature = 'storage:count {path : enter your path} {--F|--folder : pass this if u want to count folder}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'count files and folder from given path';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $DIR = base_path($this->argument('path'))."/";
        $files = array_filter(glob($DIR."*"),"is_file") ?? 0;
        //if multiple argument have to check then use options function
        if($this->option("folder")){
            $folders = glob($DIR."*",GLOB_ONLYDIR) ?? 0;
            return $this->info("Total ".count($files)." files and folder ".count($folders));
        }else{
            return $this->info("Total ".count($files)." files");
        }
        
    }
}
