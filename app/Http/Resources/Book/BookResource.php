<?php

namespace App\Http\Resources\Book;

use Illuminate\Http\Resources\Json\JsonResource;


class BookResource extends JsonResource
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
            'bookname' =>$this->bookname,
            'author'=>$this->author,
            'href'=>[
                'comment'=>route('comments.index', $this->id)
            ]
        ];
    }
}
