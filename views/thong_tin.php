<div class="container">
    <div class="card p-3 mt-4">
        <h2>Nhập Thông Tin Cá Nhân</h2>
        <form action="index.php?act=thong-tin" method="POST">
            <div class="form-group mt-3">
                <label for="fullname" class="form-label">Họ và tên:</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
            </div>
            <div class="form-group mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group mt-3">
                <label for="phone" class="form-label">Số điện thoại:</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group mt-3">
                <label for="address" class="form-label">Địa chỉ:</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="form-group mt-3">
                <label for="address" class="form-label">Ngày sinh:</label>
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
            </div>
            <button type="submit" class="btn btn-primary mt-3" name="submitInfo">Gửi thông tin</button>
        </form>

        <div class="card p-3 mt-4" style="white-space: pre-line;">
            <?php if (isset($answer)): ?>
                <h2>Trả lời:</h2>
                <p><?= htmlspecialchars($answer); ?></p>
            <?php endif; ?>
        </div>

    </div>
</div>