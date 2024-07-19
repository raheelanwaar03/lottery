<?php

use App\Models\admin\Lottery;
use App\Models\admin\Store;
use App\Models\AdminCoins;
use App\Models\User;

function users()
{
    $users = User::all()->count();
    return $users;
}

function products()
{
    $products = Store::all()->count();
    return $products;
}

function lotteries()
{
    $lotteries = Lottery::all()->count();
    return $lotteries;
}

function coinAd()
{
    $coinAd = AdminCoins::all()->count();
    return $coinAd;
}

