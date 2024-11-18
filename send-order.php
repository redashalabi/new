<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // استلام البيانات من النموذج
    $product = htmlspecialchars($_POST['product']);
    $price = htmlspecialchars($_POST['price']);
    $size = htmlspecialchars($_POST['size']);
    $address = htmlspecialchars($_POST['address']);
    $whatsapp = htmlspecialchars($_POST['whatsapp']);

    // عنوان البريد الإلكتروني الذي سيتم إرسال الطلب إليه
    $to = "redavd12@gmail.com";

    // إعداد البريد
    $subject = "طلب جديد: $product";
    $message = "تم استلام طلب جديد:\n\n";
    $message .= "المنتج: $product\n";
    $message .= "السعر: $price جنيه\n";
    $message .= "المقاس: $size\n";
    $message .= "عنوان التوصيل: $address\n";
    $message .= "رقم الواتساب: $whatsapp\n";

    // عنوان المرسل
    $headers = "";

    // إرسال البريد
    if (mail($to, $subject, $message, $headers)) {
        echo "<p style='color: green;'>تم إرسال الطلب بنجاح!</p>";
    } else {
        echo "<p style='color: red;'>حدث خطأ أثناء إرسال الطلب. حاول مرة أخرى.</p>";
    }
} else {
    echo "<p>طريقة الطلب غير صحيحة.</p>";
}
?>
