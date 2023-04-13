<?php

namespace App\Service;

class Skills
{
    private string $name;
    private int $years, $percentage;

    public function setValues(string $name, int $years, int $percentage): void
    {
        $this->name = $name;
        $this->years = $years;
        $this->percentage = $percentage;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getYears(): int
    {
        return $this->years;
    }

    /**
     * @param int $years
     */
    public function setYears(int $years): void
    {
        $this->years = $years;
    }

    /**
     * @return int
     */
    public function getPercentage(): int
    {
        return $this->percentage;
    }

    /**
     * @param int $percentage
     */
    public function setPercentage(int $percentage): void
    {
        $this->percentage = $percentage;
    }
}