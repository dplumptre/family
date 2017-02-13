<?php

function current_link($link, $request)
{
    if ( $link == $request )
        echo " <span class=\"sr-only\">(current)</span>";
}