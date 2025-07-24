<?php

class LittleTiger {
    private $participants = [];

    /**
     * @throws Exception
     */
    public function __construct($csvFile = 'data.csv') {
        $lines = @file($csvFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if (!$lines || count($lines) < 2) {
            throw new Exception("No participants found or CSV file not found: $csvFile");
        }
        array_shift($lines);
        foreach ($lines as $line) {
            $row = str_getcsv($line, ',', '"', '\\');
            if (!empty($row[2])) {
                $this->participants[] = $row[2];
            }
        }
        if (empty($this->participants)) {
            throw new Exception("No valid participants found in CSV.");
        }
    }

    public function drawWinner() {
        if (empty($this->participants)) {
            throw new Exception("No participants to draw from.");
        }
        $index = array_rand($this->participants);
        return $this->participants[$index];
    }

    public function getParticipants() {
        return $this->participants;
    }
}
