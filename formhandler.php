<?php 
// Basic form handler with validation and sanitization

function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

echo "<h2>Submitted Data:</h2>";

// Handle text inputs
if (isset($_POST['fullname'])) {
    echo "Full Name: " . sanitize($_POST['fullname']) . "<br>";
}

if (isset($_POST['email'])) {
    echo "Email: " . sanitize($_POST['email']) . "<br>";
}

if (isset($_POST['password'])) {
    // Don't display password for security
    echo "Password: [hidden]<br>";
}

if (isset($_POST['age'])) {
    echo "Age: " . sanitize($_POST['age']) . "<br>";
}

if (isset($_POST['gender'])) {
    echo "Gender: " . sanitize($_POST['gender']) . "<br>";
}

if (isset($_POST['department'])) {
    echo "Department: " . sanitize($_POST['department']) . "<br>";
}

// Handle checkboxes (can have multiple values)
if (isset($_POST['course']) && is_array($_POST['course'])) {
    $courses = implode(', ', array_map('sanitize', $_POST['course']));
    echo "Courses: " . $courses . "<br>";
} elseif (isset($_POST['course'])) {
    echo "Course: " . sanitize($_POST['course']) . "<br>";
}

if (isset($_POST['country'])) {
    echo "Country: " . sanitize($_POST['country']) . "<br>";
}

if (isset($_POST['comment'])) {
    echo "Comment: " . nl2br(sanitize($_POST['comment'])) . "<br>";
}
?>