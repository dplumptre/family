<?php

use Carbon\Carbon;
use Spatie\Html\Html;


function html()
{
    return app(Html::class);
}

function arr()
{

    return [
        0 => 'pending',
        1 => 'processing',
        2 => 'completed'
    ];

}


function current_link($link, $request)
{
    if ($link == $request)
        echo "active";
}


function banks()
{
    return [
        'access bank pls' => 'Access Bank Plc',
        'citibank' => 'Citibank Nig Ltd',
        'diamond bank' => 'Diamond Bank Plc',
        'ecobank' => 'Ecobank Nig Ltd',
        'enterprise bank' => 'Enterprise Bank',
        'fidelity bank' => 'Fidelity Bank Ltd',
        'first bank' => 'First Bank nigeria Ltd',
        'fcmb' => 'First City Monument Bank',
        'gtb' => 'Guaranty Trust Bank',
        'heritage banking' => 'Heritage Banking Ltd',
        'key stone bank' => 'Key Stone Bank',
        'mainStreet' => 'MainStreet Bank',
        'skye bank' => 'Skye Bank Plc',
        'stanbic ibtc' => ' Stanbic IBTC Bank Ltd',
        'standard chatered bank' => 'Standard Chartered Bank Nigeria Ltd',
        'sterling bank' => 'Sterling Bank',
        'sunTrust bank' => 'SunTrust Bank Ltd',
        'union bank' => 'Union Bank Plc',
        'united bank for africa' => 'United Bank For Africa Plc (UBA)',
        'unity bank' => 'Unity Bank Plc',
        'wema bank' => 'Wema Bank Plc',
        'zenith bank' => 'Zenith Bank Plc',
    ];
}


function createRandomPassword()
{
    $chars = "abcdefghijkmnopqrstuvwxyz023456789";

    srand((double)microtime() * 1000000);

    $i = 0;

    $pass = '';

    while ($i <= 7) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }
    return $pass;
}


function reduceCharsToAbout15($string)
{

    $strlen = strlen($string);

    if ($strlen > 30) {
        for ($i = 10; $i <= $strlen; $i++) {

            $string = substr($string, $i); //restricting char to be revoming first 10 characters

            $strl = strlen($string);

            if ($strl <= 15) {
                break;
            } //making sure the char output isnt more than 10

        }

    }

    return $string;

}


function arrageImageName($imagename)
{
    $w = preg_replace("/\s*[^A-Za-z0-9.]/", "", $imagename);
    $w = reduceCharsToAbout15($w); //check size first make sure its not more than 15 chars long
    $filename = "fm_" . createRandomPassword() . $w;

    return $filename;
}



if ( !function_exists('now') )
{
    function now()
    {
        return Carbon::now();
    }
}


if ( !function_exists('automated_receivers') )
{
    function automated_receivers()
    {
        $r = \App\Models\AutomatedReceiver::select(['id'])->get()->toArray();
        return array_column($r, 'id');
    }
}