<?php

namespace App\Http\Livewire\Seller\Products;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class CreateProduct extends ModalComponent
{

    use WithFileUploads;

    public $variation;
    public $images = [];

    protected $listeners = [
        'fileUploaded' => 'handleFileUpload'
    ];

    public function handleFileUpload($imageData){

        $this->images[] = $imageData;
    }

    public static function modalMaxWidth(): string
    {
        return '5xl';
    }

    public function render()
    {

        return view('livewire.seller.products.create-product',[
            'categories' => Category::all()
        ]);
    }
}
