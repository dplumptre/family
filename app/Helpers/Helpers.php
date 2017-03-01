<?php

use App\User;
use Illuminate\Support\Facades\Auth;

function current_link($link, $request)
{
    if ( $link == $request )
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