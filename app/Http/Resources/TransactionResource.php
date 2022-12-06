<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
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
            'id' => $this->id,
            'income' => $this->income,
            'user_id' => $this->user_id,
            'category_id' => $this->category_id,
            'category_name' => $this->category->name,
            'description' => $this->description,
            'value' => $this->value,
            'due_date' => $this->due_date->format('d/m/Y'),
            'installments_qty' => $this->installments_qty,
            'recurrent' => $this->recurrent,
            'fixed_value' => $this->fixed_value,
            'paid' => $this->paid
        ];
    }
}
