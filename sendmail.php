<?php
// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include Composer's autoload
require '../vendor/autoload.php';

error_reporting(0); // Disable error reporting
session_start();
include('includes/config.php');

// Function to send a booking confirmation email
function sendBookingEmail($customerEmail, $customerName, $bookingDetails) {
    $mail = new PHPMailer(true);

    try {
        // Configure SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';                  // Gmail SMTP server
        $mail->SMTPAuth = true;                          // Enable SMTP authentication
        $mail->Username = 'thamlt.23itb@vku.udn.vn';     // Gmail username
        $mail->Password = 'pspi rieq icyz qepj';         // Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS encryption
        $mail->Port = 587;

        // Set sender and recipient
        $mail->setFrom('thamlt.23itb@vku.udn.vn', 'Tourism Management System');
        $mail->addAddress($customerEmail, $customerName); // Customer's email

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Booking Confirmation - Tourism Management System';
        $mail->Body = "
            <div style=\"font-family: Arial, sans-serif; font-size: 14px; color: #333;\">
                <h1 style=\"color: #007BFF;\">Hello, $customerName!</h1>
                <p>Thank you for booking with the <strong>Tourism Management System</strong>. Your booking has been successfully confirmed.</p>
                <p><strong>Booking Details:</strong></p>
                <table style=\"border-collapse: collapse; width: 100%; margin-top: 10px;\">
                    <tr>
                        <td style=\"padding: 10px; border: 1px solid #ddd;\"><strong>Booking ID:</strong></td>
                        <td style=\"padding: 10px; border: 1px solid #ddd;\">{$bookingDetails['booking_id']}</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 10px; border: 1px solid #ddd;\"><strong>Booking Date:</strong></td>
                        <td style=\"padding: 10px; border: 1px solid #ddd;\">{$bookingDetails['booking_date']}</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 10px; border: 1px solid #ddd;\"><strong>Package Name:</strong></td>
                        <td style=\"padding: 10px; border: 1px solid #ddd;\">{$bookingDetails['package_name']}</td>
                    </tr>
                </table>
                <p style=\"margin-top: 20px;\">If you have any questions or need further assistance, feel free to contact our support team.</p>
                <p style=\"margin-top: 20px;\">Best regards,</p>
                <p><strong>Tourism Management System</strong></p>
                <hr style=\"margin: 20px 0; border: none; border-top: 1px solid #ddd;\" />
                <footer style=\"font-size: 12px; color: #999; text-align: center;\">
                    This is an automated email. Please do not reply to this email.
                </footer>
            </div>
        ";

        // Send email
        $mail->send();
        return true;
    } catch (Exception $e) {
        // Log error
        error_log("Email could not be sent: {$mail->ErrorInfo}");
        return false;
    }
}
?>
