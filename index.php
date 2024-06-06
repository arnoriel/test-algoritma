<?php

// Reverse Alphabet
function reverseWord($word) {
    $length = strlen($word);
    $result = '';
    for ($i = $length - 2; $i >= 0; $i--) {
        $result .= $word[$i];
    }
    $result .= $word[$length - 1];
    return $result;
}

// Contoh penggunaan
$input = "NEGIE1";
$output = reverseWord($input);
echo "Hasil: " . $output . "\n"; // Hasil: EIGEN1

// Longest Word
function longest($sentence) {
    $words = explode(" ", $sentence);
    $longest_word = '';
    foreach ($words as $word) {
        if (strlen($word) > strlen($longest_word)) {
            $longest_word = $word;
        }
    }
    return $longest_word;
}

$sentence = "Saya sangat senang mengerjakan soal algoritma";
echo "Longest Word: " . longest($sentence) . "\n"; // Hasil: "mengerjakan"

// Count Words in Query
function countWordsInQuery($input, $query) {
    $input_count = array_count_values($input);
    $result = [];
    foreach ($query as $q) {
        $result[] = isset($input_count[$q]) ? $input_count[$q] : 0;
    }
    return $result;
}

$INPUT = ['xc', 'dz', 'bbb', 'dz'];
$QUERY = ['bbb', 'ac', 'dz'];
echo "Count Words in Query: " . implode(", ", countWordsInQuery($INPUT, $QUERY)) . "\n"; // Hasil: 1, 0, 2

// Difference of Diagonals
function diagonalDifference($matrix) {
    $n = count($matrix);
    $primary = 0;
    $secondary = 0;

    for ($i = 0; $i < $n; $i++) {
        $primary += $matrix[$i][$i];
        $secondary += $matrix[$i][$n - 1 - $i];
    }

    return abs($primary - $secondary);
}

$matrix = [[1, 2, 0], [4, 5, 6], [7, 8, 9]];
echo "Difference of Diagonals: " . diagonalDifference($matrix) . "\n"; // Hasil: 3
?>
