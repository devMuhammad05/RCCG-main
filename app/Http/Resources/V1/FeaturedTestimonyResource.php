<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FeaturedTestimonyResource extends JsonResource
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
        'name' => $this->is_shared_anonymously ? 'Anonymous' : $this->user?->name,
        'avatar' => $this->is_shared_anonymously ? null : $this->user?->avatar,
        'is_shared_anonymously' => $this->is_shared_anonymously,
        'message' => $this->message,
        'show_as_featured' => $this->show_as_featured,
    ];
}

}
