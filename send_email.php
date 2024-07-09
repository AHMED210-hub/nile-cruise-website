<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $date = htmlspecialchars($_POST['date']);
    $guests = htmlspecialchars($_POST['guests']);
    $notes = htmlspecialchars($_POST['notes']);

    $to = "your-email@example.com";  // استبدل هذا البريد الإلكتروني بالبريد الإلكتروني الخاص بك
    $subject = "حجز رحلة نيلية جديد";
    $message = "
    الاسم: $name\n
    البريد الإلكتروني: $email\n
    رقم الهاتف: $phone\n
    تاريخ الرحلة: $date\n
    عدد الضيوف: $guests\n
    ملاحظات إضافية: $notes
    ";
    $headers = "From: no-reply@example.com";  // استبدل هذا بالبريد الإلكتروني الخاص بالنظام

    if (mail($to, $subject, $message, $headers)) {
        echo "تم إرسال النموذج بنجاح!";
    } else {
        echo "حدث خطأ أثناء إرسال النموذج. حاول مرة أخرى لاحقًا.";
    }
} else {
    echo "طريقة الطلب غير صالحة.";
}
?>
