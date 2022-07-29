<?php

namespace App\Http\Resources;

use App\Models\Category;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "name" => $this->name,
            "size" => $this->size->first()->name ?? "-",
            "color" => $this->color->first()->name ?? "-",
            "price" => $this->price,
            "stock" => $this->stock,
            "category" => Category::where('id', $this->category_id)->first()->name
        ];
    }
}
