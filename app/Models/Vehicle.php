<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Alsofronie\Uuid\UuidModelTrait;

class Vehicle extends Authenticatable
{
    use UuidModelTrait, HasFactory, Notifiable, SoftDeletes;

    protected $fillable = ['oid','vehicle_name','model','type','distance','mainteance'];
    protected $dates = ['deleted_at', 'updated_at', 'created_at'];
}
