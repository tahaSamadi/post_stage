<?php

namespace App\Models\admin\crud;

use App\Models\admin\crud\operations\operations;

class crud
{
    public function __construct(protected $class,protected array $params)
    {
        $this->class=$class;
        $this->params=$params;
    }
    public function crud(){
        $items=$this->params['item'] ?? [];
        if($this->params['crud'] == 'change_status'){
            return (new operations())->change_states($items,$this->class,'state');
        }
        if($this->params['crud'] == 'delete_all'){
            return (new operations())->delete_items($items,$this->class);
        }
        if($this->params['crud'] == 'change_state_main'){
            $type=$this->params['change_state_main'] ?? '';
            return (new operations())->change_state_type($items,$this->class,'state_main',$type);
        }
        if($this->params['crud'] == 'change_state_header'){
            $type=$this->params['change_state_header'] ?? '';
            return (new operations())->change_state_type($items,$this->class,'state_header',$type);
        }
        else{
            throw new \Exception('the operation is not valid');
        }
    }

}
