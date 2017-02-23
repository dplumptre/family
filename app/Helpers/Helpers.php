<?php

use App\User;
use Illuminate\Support\Facades\Auth;

function current_link($link, $request)
{
    if ( $link == $request )
        echo "active";
}
