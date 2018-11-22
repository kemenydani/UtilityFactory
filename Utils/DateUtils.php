<?php

namespace Utils;


class DateUtils implements DateUtilsInterface {

    /**
     * @param $date
     * @return int|mixed
     *
     *  calculates time difference between two days in days
     *  input date format must be german date format eg. "01.01.2017"
     *  return days + one day because the today is also a day ;), datetime::diff does not calculates
     */
    public static function get_days_left($date) {
        $datetime1 = \DateTime::createFromFormat('d.m.Y', $date);
        $datetime2 = new \DateTime();

        if ($datetime1 >= $datetime2) {

            $interval = $datetime1->diff($datetime2);
            return $interval->days + 1;
        }
    }

}
