<?php

use Illuminate\Support\Facades\DB;

if (! function_exists('table')) {
    /**
     * 修改数据表的注释内容
     *
     * Date: 2018/9/20
     * @author George
     * @param string $table
     * @param string $comment
     */
    function table(string $table, string $comment) {
        DB::statement(sprintf("ALTER TABLE `%s` comment'%s'", $table, $comment));
    }
}
