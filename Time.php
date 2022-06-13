<?php

namespace Time;

/**
 * Time counter class
 */
class Time
{

    public float $start;
    public float $finish;
    public float $duration;

    /**
     * Save and return timestamp of begin (s)
     *
     * @return float
     */
    public function start(): float
    {
        $this->start = microtime(true);
        return $this->start;
    }

    /**
     * Save and return timestamp for end (s) and calculate duration (s) with saving to property
     *
     * @return float
     */
    public function finish(): float
    {
        $this->finish = microtime(true);
        $this->duration = $this->finish - $this->start;
        return $this->finish;
    }
}
?>