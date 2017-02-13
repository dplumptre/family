<?php

function current_link($link, $request)
{
    if ( $link == $request )
        echo "active";
}