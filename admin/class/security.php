<?php
class security
{
    public static function secure($text)
    {
        $safe = trim($text);
        // $safe = strip_tags($safe);
        $safe = htmlspecialchars($safe, ENT_QUOTES);
        $safe = str_replace("insert", "", $safe);
        $safe = str_replace("INSERT", "", $safe);
        $safe = str_replace("select", "", $safe);
        $safe = str_replace("SELECT", "", $safe);
        $safe = str_replace("exec", "", $safe);
        $safe = str_replace("EXEC", "", $safe);
        $safe = str_replace("union", "", $safe);
        $safe = str_replace("UNION", "", $safe);
        $safe = str_replace("drop", "", $safe);
        $safe = str_replace("DROP", "", $safe);

        return $safe;
    }
}
