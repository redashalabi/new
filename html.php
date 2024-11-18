<!-- نموذج الطلب -->
<div class="form-container">
    <form id="order-form" action="submit-order.php" method="POST">
        <!-- Step 1 -->
        <div class="form-step step-1 active">
            <label for="name">الاسم الكامل:</label>
            <input type="text" id="name" name="name" placeholder="أدخل اسمك" required>

            <label for="phone">رقم الهاتف:</label>
            <input type="text" id="phone" name="phone" placeholder="أدخل رقم هاتفك" required>

            <button type="button" class="next-step">التالي</button>
        </div>

        <!-- Step 2 -->
        <div class="form-step step-2">
            <label for="email">البريد الإلكتروني:</label>
            <input type="email" id="email" name="email" placeholder="أدخل بريدك الإلكتروني" required>

            <label for="address">العنوان:</label>
            <textarea id="address" name="address" placeholder="أدخل عنوانك" required></textarea>

            <button type="button" class="prev-step">السابق</button>
            <button type="submit" class="submit-btn">إتمام الطلب</button>
        </div>
    </form>
</div>
