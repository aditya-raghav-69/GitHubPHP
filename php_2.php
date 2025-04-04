<?php
// Boilerplate for a PHP script
declare(strict_types=1);

/**
 * Function to print Fibonacci sequence up to a given number of terms.
 *
 * @param int $terms Number of terms to print in the Fibonacci sequence.
 * @return void
 */
function printFibonacci(int $terms): void {
    if ($terms <= 0) {
        echo "Please provide a positive integer.\n";
        return;
    }

    $a = 0;
    $b = 1;

    echo "Fibonacci Sequence: ";
    for ($i = 0; $i < $terms; $i++) {
        echo $a . " ";
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
    echo "\n";
}

// Example usage
printFibonacci(10);
?>