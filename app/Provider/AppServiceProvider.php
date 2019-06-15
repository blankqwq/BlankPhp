<?php


namespace App\Provider;
use App\Models\User;
use App\Observer\UserObserve;
use Blankphp\Provider\Provider;

class AppServiceProvider extends Provider
{
    public function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        User::observe(new UserObserve);
    }

}