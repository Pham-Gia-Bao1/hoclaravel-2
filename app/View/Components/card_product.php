<?php

namespace App\View\Components;

use Illuminate\View\Component;

class card_product extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $title = 'Card Product';
        public $img = './assets/img/product/item-1.png';
        public $price = 'price';
        public $rating = 'rating';
        public $nameShop = 'Lay Coffe';

    public function __construct($title,$img, $price,$rating)
    {
        //
        $this->title = $title;
        $this->img= $img;
        // $this->nameShop=$name_shop;
        $this->price=$price;
        $this->rating=$rating;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card_product');
    }
}
