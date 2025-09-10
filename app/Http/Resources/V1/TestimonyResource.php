<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TestimonyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->user->name,
            'avatar' => $this->user->avatar,
            'is_shared_anonymously' => $this->is_shared_anonymously,
            'message' => $this->message,
            'show_as_featured' => $this->show_as_featured,
        ];
    }
}
