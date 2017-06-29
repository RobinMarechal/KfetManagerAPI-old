<?php

namespace App;

use App\Custom\Model;

class Order extends Model 
{

    protected $table = 'orders';
    public $timestamps = true;
    protected $fillable = array('customer_id', 'timestamps', 'menu_id');
    public $temporalField = 'created_at';

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function orderProducts()
    {
        return $this->hasMany('App\OrderProduct');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    public function menu()
    {
        return $this->belongsTo('App\Menu');
    }

    public function detail()
    {
        return $this->hasMany('App\OrderProduct');
    }

}