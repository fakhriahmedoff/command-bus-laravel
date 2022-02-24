<?php

namespace App\Commands\PostCommands;


class AbstractPost    {
                
    public $id;
    public $category_id;
    public $title;
    public $description;
    public $created_at;
    public $updated_at;
    
    public function __construct($data){
                        
              $this->id= $data["id"] ?? null;
              $this->category_id= $data["category_id"] ?? null;
              $this->title= $data["title"] ?? null;
              $this->description= $data["description"] ?? null;
              $this->created_at= $data["created_at"] ?? null;
              $this->updated_at= $data["updated_at"] ?? null;
       }

    
}
