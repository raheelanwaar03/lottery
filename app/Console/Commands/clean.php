<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'App Clean and insert demo data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');

        $user = new User();
        $user->name = 'Admin';
        $user->referral = 'default';
        $user->balance = 0.00;
        $user->email = 'admin@gmail.com';
        $user->country = 'Pakistan';
        $user->province = 'Punjab';
        $user->city = 'Faislabad';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'admin';
        $user->user_id = 'JM123456';
        $user->save();

        $user = new User();
        $user->name = 'User';
        $user->referral = 'default';
        $user->balance = '1000';
        $user->email = 'user@gmail.com';
        $user->country = 'Pakistan';
        $user->province = 'Punjab';
        $user->city = 'Faislabad';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'user';
        $user->user_id = 'JM123458';
        $user->save();
    }
}
