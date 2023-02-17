<?php

use Carbon\Carbon;

class SampleLib
{
    /**
     * 本日の日付(Y年m月d日)を取得する
     */
    public function getTodayDate(): string
    {
        $dt = Carbon::today();
        return $dt->format('Y年m月d日');
    }

    /**
     * 曜日を取得する
     */
    public function getDayOfWeekStr($dt)
    {
        $num = $this->getDayOfWeek($dt);
        $ret = "";
        switch ($num) {
            case 0:
                $ret = "日";
                break;
            case 1:
                $ret = "月";
                break;
            case 2:
                $ret = "火";
                break;
            case 3:
                $ret = "水";
                break;
            case 4:
                $ret = "木";
                break;
            case 5:
                $ret = "金";
                break;
            case 6:
                $ret = "土";
                break;
        }
        $ret .= "曜日";
        return $ret;
    }

    /**
     * 本日の日付(Ymd)を取得する
     */
    public function getTodayDateNumber()
    {
        $dt = Carbon::today();
        return $dt->format('Ymd');
    }

    /**
     * 曜日を取得する（0:日曜 1:月曜 ... 6:土曜）
     */
    public function getDayOfWeek($dt): int
    {
        return $dt->dayOfWeek;
    }
}
