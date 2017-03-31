<?php


if ( !function_exists('strrevpos') )
{

    function strrevpos($instr, $needle)
    {
        $rev_pos = strpos (strrev($instr), strrev($needle));
        if ($rev_pos===false) return false;
        else return strlen($instr) - $rev_pos - strlen($needle);
    };

}


if ( !function_exists('after') )
{
    //after ('@', 'biohazard@online.ge');
    //returns 'online.ge'
    //from the first occurrence of '@'
    function after($_this, $inthat)
    {
        if (!is_bool(strpos($inthat, $_this)))
            return substr($inthat, strpos($inthat, $_this) + strlen($_this));
    }
}



if ( !function_exists('after_last') )
{
    //after_last ('[', 'sin[90]*cos[180]');
    //returns '180]'
    //from the last occurrence of '['
    function after_last($_this, $inthat)
    {
        if (!is_bool(strrevpos($inthat, $_this)))
            return substr($inthat, strrevpos($inthat, $_this) + strlen($_this));
    }

}


if ( !function_exists('before') )
{
    //before ('@', 'biohazard@online.ge');
    //returns 'biohazard'
    //from the first occurrence of '@'
    function before($_this, $inthat)
    {
        return substr($inthat, 0, strpos($inthat, $_this));
    }
}


if ( !function_exists('before_last') )
{
    //before_last ('[', 'sin[90]*cos[180]');
    //returns 'sin[90]*cos['
    //from the last occurrence of '['
    function before_last($_this, $inthat)
    {
        return substr($inthat, 0, strrevpos($inthat, $_this));
    }

}


if ( !function_exists('between') )
{
    //between ('@', '.', 'biohazard@online.ge');
    //returns 'online'
    //from the first occurrence of '@'
    /**
     * @param $_this
     * @param $that
     * @param $inthat
     * @return string
     */
    function between($_this, $that, $inthat)
    {
        return before($that, after($_this, $inthat));
    }

}


if ( !function_exists('between_last') )
{
    //between_last ('[', ']', 'sin[90]*cos[180]');
    //returns '180'
    //from the last occurrence of '['
    function between_last($_this, $that, $inthat)
    {
        return after_last($_this, before_last($that, $inthat));
    }

}


if ( !function_exists('str_take') )
{
    //Take the no. of characters length
    //from a string and indicate how many to skip before taking
    function str_take($length, $string, $skip=0)
    {
        return substr($string, $skip, $length);
    }

}


if ( !function_exists('str_rtake') )
{
    //Take from rigth to left the no. of characters length
    //from a string and indicate how many to skip before taking
    function str_rtake($length, $string, $skip=0)
    {
        if ($skip == 0){
            return substr($string, -$length);
        } elseif ($skip > 0){
            $skip = $skip  + $length;
            return substr($string, -$skip, $length);
        }
    }
}
