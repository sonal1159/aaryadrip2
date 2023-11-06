<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';

    if (empty($name) || empty($email) || empty($message) || empty($subject)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all the required fields.']);
        exit;
    }

    $toEmail = 'methesonal19@gmail.com';
    $from = $email;
    $fromName = 'Enquiry Form';
    $emailSubject = $subject;

    $htmlContent = '<h2>Enquiry Request</h2>
        <p><b>Name:</b> ' . $name . '</p>
        <p><b>Email:</b> ' . $email . '</p>
        <p><b>Mobile Number:</b> ' . $phone . '</p>
        <p><b>Message:</b><br/>' . $message . '</p>';

    $headers = "From: $fromName <$from>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    if (mail($toEmail, $emailSubject, $htmlContent, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Email sent successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to send the email.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
}
?>
