<?php

class CollatzConjecture {
    private int $startNumber;

    public function __construct(int $startNumber = 1) {
        $this->startNumber = $startNumber;
    }

    private function collatzSequence(int $n): array {
        $sequence = [];
        $maxValue = $n;
        $steps = 0;

        while ($n !== 1) {
            $sequence[] = $n;
            if ($n % 2 === 0) {
                $n /= 2;
            } else {
                $n = 3 * $n + 1;
            }
            $maxValue = max($maxValue, $n);
            $steps++;
        }

        return ['steps' => $steps, 'maxValue' => $maxValue];
    }

    public function calculateRange(int $start, int $end): array {
        $results = [];

        for ($i = $start; $i <= $end; $i++) {
            $results[$i] = $this->collatzSequence($i);
        }

        return $results;
    }

    public function statistics(array $results): array {
        $maxIterations = 0;
        $minIterations = PHP_INT_MAX;
        $maxValue = 0;
        
        $maxIterationsNumber = 0;
        $minIterationsNumber = 0;
        $maxValueNumber = 0;

        foreach ($results as $number => $data) {
            if ($data['steps'] > $maxIterations) {
                $maxIterations = $data['steps'];
                $maxIterationsNumber = $number;
            }

            if ($data['steps'] < $minIterations) {
                $minIterations = $data['steps'];
                $minIterationsNumber = $number;
            }

            if ($data['maxValue'] > $maxValue) {
                $maxValue = $data['maxValue'];
                $maxValueNumber = $number;
            }
        }

        return [
            'max_iterations_number' => $maxIterationsNumber,
            'max_iterations' => $maxIterations,
            'min_iterations_number' => $minIterationsNumber,
            'min_iterations' => $minIterations,
            'max_value_number' => $maxValueNumber,
            'max_value' => $maxValue
        ];
    }
}

?>
