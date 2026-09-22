<?php
/* =====================================================
   process-booking.php
   Handles the repair booking form submission.
   ===================================================== */

require_once 'db.php';

$success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // ---------- Sanitize input ----------
    $name = trim(strip_tags($_POST['name'] ?? ''));
    $email = trim(filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL));
    $phone = trim(strip_tags($_POST['phone'] ?? ''));
    $device_model = trim(strip_tags($_POST['device_model'] ?? ''));
    $issue_description = trim(strip_tags($_POST['issue_description'] ?? ''));

    // ---------- Validate ----------
    if ($name === '' || $email === '' || $phone === '' || $device_model === '' || $issue_description === '') {
        $error = 'Please fill in every field before submitting.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        try {
            $stmt = $pdo->prepare(
                "INSERT INTO repair_requests (name, email, phone, device_model, issue_description)
                 VALUES (:name, :email, :phone, :device_model, :issue_description)"
            );
            $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':phone' => $phone,
                ':device_model' => $device_model,
                ':issue_description' => $issue_description,
            ]);
            $success = true;
        } catch (PDOException $e) {
            $error = 'Something went wrong. Please try again.';
        }
    }
}
