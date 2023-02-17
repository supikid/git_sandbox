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
