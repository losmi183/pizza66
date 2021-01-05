<?php

function size($size) {

    $l = 0;

    switch($size) 
    {
        case 'mala'    : $l=25; break;
        case 'srednja' : $l=32; break;
        case 'velika'  : $l=51; break;
    }
    return $l;
}

function jsonToArray($json)
{
    return json_decode($json, true);
}


function setBgColor($status)
{
    if($status == 'active') return 'bg-active';
    if($status == 'finished') return 'bg-finished';
    if($status == 'admin') return 'bg-admin';
}

function formatDate($time)
{
    return date('d.m.Y. G:i', strtotime($time));
}

