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

    public function drawWinnerInfo() {
        if (empty($this->participants)) {
            throw new Exception("No participants to draw from.");
        }
        $lines = @file('data.csv', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        array_shift($lines);
        $winnerIndex = array_rand($lines);
        $row = str_getcsv($lines[$winnerIndex], ',', '"', '\\');
        return [
            'Nome' => isset($row[2]) ? mb_strtoupper($row[2]) : '',
            'Email' => isset($row[3]) ? $row[3] : '',
            'Telefone' => isset($row[4]) ? $row[4] : ''
        ];
    }
}
