<?php

class Time {
    private $hour = 0;
    private $minute = 0;
    private $second = 0;

    public function __construct($h = 0, $m = 0, $s = 0) {
        $this->hour = $h;
        $this->minute = $m;
        $this->second = $s;
    }

    public function getHour() {
        return $this->hour;
    }

    public function setHour($h) {
        $this->hour = $h;
    }

    public function getMinute() {
        return $this->minute;
    }

    public function setMinute($m) {
        $this->minute = $m;
    }

    public function getSecond() {
        return $this->second;
    }

    public function setSecond($s) {
        $this->second = $s;
    }

    public function setTime($h, $m, $s) {
        $this->hour = $h;
        $this->minute = $m;
        $this->second = $s;
    }

    public function printTime() {
        $h_str = $this->hour;
        $m_str = $this->minute;
        $s_str = $this->second;

        if ($h_str < 10) {
            $h_str = "0" . $h_str;
        }
        if ($m_str < 10) {
            $m_str = "0" . $m_str;
        }
        if ($s_str < 10) {
            $s_str = "0" . $s_str;
        }
        
        echo $h_str . ":" . $m_str . ":" . $s_str . "<br />";
    }

    public function nextSecond() {
        $this->second++;

        if ($this->second >= 60) {
            $this->second = 0;
            $this->minute++;

            if ($this->minute >= 60) {
                $this->minute = 0;
                $this->hour++;

                if ($this->hour >= 24) {
                    $this->hour = 0;
                }
            }
        }
    }
}
?>