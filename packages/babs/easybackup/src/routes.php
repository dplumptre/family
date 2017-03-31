<?php

Route::get('easybackup', function(){

    //echo realpath( base_path() );
    echo basename(base_path('new.zip'));

});

