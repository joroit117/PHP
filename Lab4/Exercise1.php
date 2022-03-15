<html>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</html>
<?php
    $students = array('Ivan Ivanov' => 4, 'Dragan Dragamov' => 5.45, 'Dimo Petrov' => 5.67);
    
    echo "<ol>";
    foreach ($students as $key => $value) {
        echo "<li>";
        echo "Student $key has grade: $value";
        echo "</li>";
    }
    echo "</ol>";
    
    echo "<ul>";
    foreach ($students as $key => $value) {
        echo "<li>";
        echo "Student $key has grade: $value";
        echo "</li>";
    }
    echo "</ul>";
    
    echo "<table>";
    echo "<tr><th>First Name, Last Name</th><th>Grade</th></tr>";
    foreach ($students as $key => $value) {
        echo "<tr>";
        echo "<td>$key</td>";
        echo "<td>$value</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
