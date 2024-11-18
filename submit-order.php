<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // جمع البيانات من النموذج
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    
    header("Access-Control-Allow-Origin: *"); // يسمح بالوصول من أي مصدر
header("Access-Control-Allow-Methods: POST, GET, OPTIONS"); // يسمح بالطرق المحددة
header("Access-Control-Allow-Headers: Content-Type");


    // هنا يمكنك حفظ البيانات في قاعدة بيانات أو إرسالها عبر البريد الإلكتروني
    // على سبيل المثال:
    $to = "redavd12@gmail.com";
    $subject = "طلب جديد";
    $message = "الاسم: $name\nالهاتف: $phone\nالبريد الإلكتروني: $email\nالعنوان: $address";
    $headers = "From: no-reply@example.com";

    // إرسال البريد الإلكتروني
    if (mail($to, $subject, $message, $headers)) {
        // تحويل العميل إلى صفحة شكر
        header('Location: thank-you.php');
        exit();
    } else {
        // في حال فشل الإرسال
        echo "حدث خطأ أثناء إرسال الطلب.";
    }
}
?>

