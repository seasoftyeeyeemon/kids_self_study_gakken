<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ryouri2 extends Model
{
    protected $connection ="buono_main";
    protected $table ='m_ryouri_2';

    public static function getRyouri2($ryouri_1_id){
        $shokuzai_id =self::where('ryouri_1_id',$ryouri_1_id)->get();
        return $shokuzai_id;
    }
}
