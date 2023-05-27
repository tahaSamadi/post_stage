<?php

namespace App\Models\admin\trait;

use Hekmatinasser\Verta\Verta;

trait convert_date
{
    public function get_created_at_verta(){
        return  (new Verta($this->created_at))->format('%B %d، %Y');
    }
}
