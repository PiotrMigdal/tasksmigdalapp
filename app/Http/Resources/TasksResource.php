<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TasksResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'id' => $this->id,
          'name' => $this->name,
          'description' => $this->description,
          'date_created' => $this->date_created,
          'date_completed' => $this->date_completed,
          'due_date' => $this->due_date,
          'status_id' => $this->status_id,
          'project_id' => $this->project_id
        ];
    }
}
