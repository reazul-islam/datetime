<?php

namespace Reazul\Datetime;

use Carbon\Carbon;

class Datetime
{

    public static function dateFormat($date)
    {
        return date("d-m-Y h:i:s A", strtotime($date));
    }
    public static function UKFormat($date)
    {
        return date("d M Y , h:i:s A", strtotime($date));
    }

    public static function onlyDMY($date)
    {
        return date("d-m-Y", strtotime($date));
    }

    public static function onlyMY($date)
    {
        return date("F Y", strtotime($date));
    }
    public static function onlyMonth($date)
    {
        return date("F", strtotime($date));
    }

    public static function formatYmd($date)
    {
        $convert = str_replace('/', '-', $date);
        return date('Y-m-d', strtotime($convert));
    }

    public static function sqlYMD($date)
    {
        return date('Y-m-d', strtotime($date));
    }

    public static function carbonFormat($date)
    {
        //$convert = str_replace('/', '-', $date);
        $convertToCarbon = date('Y-m-d', strtotime($date));
        return Carbon::CreateFromFormat('Y-m-d', $convertToCarbon);
    }

    public static function stringDate($date)
    {
        return date("d M Y", strtotime($date));
    }

    //only time
    public static function onlyTime($date)
    {
        return date("H:i A", strtotime($date));
    }

    public static function dateTime()
    {
        return date('Y-m-d H:i:s');
    }

}
