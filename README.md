# AI4Life - Hướng dẫn sử dụng & tích hợp OpenRouter

## 1. Giới thiệu

AI4Life là một ứng dụng PHP giúp bạn hỏi đáp, tra cứu thần số học, cung hoàng đạo... thông qua các mô hình AI mạnh mẽ tích hợp qua OpenRouter API.

## 2. Yêu cầu hệ thống

- PHP >= 7.4
- Composer (nếu sử dụng thư viện ngoài)
- MySQL/MariaDB (nếu sử dụng database)
- Máy chủ web (Apache/Nginx/Laragon/XAMPP...)

## 3. Cài đặt
1. **Clone dự án về máy:**
    bash
    git clone https://github.com/yourusername/AI4Life.git
2. **Cấu hình môi trường:**
    - Mở file `configs/env.php`
    - Cập nhật các thông tin kết nối DB, đường dẫn nếu cần.
    - Thay đổi khóa API OpenRouter tại dòng:
      ```php
      define('API_OPENROUTER_KEY', "sk-...");
      ```

3. **Khởi động máy chủ web** (ví dụ với Laragon):
    - Đặt thư mục dự án vào `www`
    - Truy cập: [http://localhost:3000/AI4Life/](http://localhost:3000/AI4Life/)

## 4. Hướng dẫn sử dụng

- **Nhập thông tin cá nhân:**  
  Vào mục "Thông tin cá nhân", nhập họ tên, ngày sinh... và gửi để nhận kết quả thần số học, cung hoàng đạo.
- **Hỏi đáp AI:**  
  Vào mục "Hỏi đáp", chọn mô hình AI, nhập câu hỏi và nhận câu trả lời từ AI.

## 5. Tích hợp OpenRouter

### a. Đăng ký tài khoản & lấy API Key

- Đăng ký tại [https://openrouter.ai/](https://openrouter.ai/)
- Vào trang quản lý API, tạo và copy API Key.

### b. Cấu hình API Key

- Mở file `configs/env.php`
- Dán API Key vào dòng:
  ```php
  define('API_OPENROUTER_KEY', "sk-...");
###  c. Cấu hình mô hình AI
Trong configs/env.php, bạn có thể thêm/bớt các mô hình AI tại hằng số MODEL_OPTIONS:
### d. Gọi API OpenRouter trong code
Hàm openrouter_api($model, $prompt) đã được xây dựng sẵn (xem trong code).
Khi người dùng gửi câu hỏi hoặc thông tin, controller sẽ gọi hàm này để lấy kết quả từ AI.
6. Tuỳ biến
Bạn có thể chỉnh sửa giao diện tại thư mục views/.
Thêm chức năng mới bằng cách tạo controller và view tương ứng.
7. Hỗ trợ
Nếu gặp lỗi hoặc cần hỗ trợ, hãy tạo issue trên GitHub hoặc liên hệ tác giả.