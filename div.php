<?php
class Division {
    public function divide($numerator, $denominator) {
        if ($denominator == 0) {
            throw new Exception("Division by zero is not allowed.");
        }
        return $numerator / $denominator;
    }
}
try {
    $div = new Division();
    $result = $div->divide(10, 0); 
    echo "Result: " . $result;
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage();
}
?>
