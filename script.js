document.getElementById('payment-form').addEventListener('submit', function(event) {
    event.preventDefault(); // منع الإرسال الافتراضي للنموذج
    alert('تم إرسال الطلب بنجاح!'); // رسالة تأكيد
    // يمكنك إضافة هنا أي منطق آخر لمعالجة الدفع
});
