<?php

namespace App\Livewire;

use App\Livewire\Forms\OrderForm;
use Livewire\Component;

class Order extends Component
{
    public $product;

    public OrderForm $order;

    public function save()
    {
        $this->order->store($this->product);

        session()->flash('order-success');
    }

    public function render()
    {
        return view('livewire.order');
    }
}
