<?php
/**
 * Created by PhpStorm.
 * User: yongj
 * Date: 12/3/18
 * Time: 3:58 PM
 */

namespace jyk2000\Test;


use Illuminate\Support\Facades\DB;

class Block
{
    public static function get($block_name) {
        $block_name = str_replace('"', '', $block_name);
        $block_name = str_replace('\'', '', $block_name);

        $html = '';
        $ret = DB::select("
                select * 
                from block 
                where b_identifier = :block_name
                and b_active = 1 
            ", [
            'block_name' => $block_name
        ]);

        if (count($ret) > 0) {
            $html = $ret[0]->b_body;
        }

        return $html;
    }
}