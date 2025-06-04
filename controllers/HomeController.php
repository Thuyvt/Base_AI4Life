<?php

class HomeController
{
    public function index() 
    {
        require_once PATH_VIEW . 'main.php';
    }
    
    public function soThich()
    {
        $title = 'Nhập sở thích';
        $view = 'so_thich';
        include PATH_VIEW_MAIN;
    }

    public function thongTin()
    {
        $title = 'Thông tin cá nhân';
        $view = 'thong_tin';
        $answer = "";
        if (isset($_POST["submitInfo"])) {
            $hoVaTen = $_POST["fullName"];
            $ngaySinh = $_POST["date_of_birth"];
            $ngaySinhFormatted = date('d/m/Y', strtotime($ngaySinh));
            $gioiTinh = $_POST["gender"];
            // Call the openrouter_api function to get the answer
            $promt = "Xin hãy tính các chỉ số thần số học (bao gồm con số chủ đạo, 
            con số linh hồn, con số nhân cách, con số định mệnh, 
            con số thái độ, con số năm cá nhân 2025, và các chỉ số liên quan khác) 
            dựa trên thông tin của tôi và phân tích xem với các chỉ số này, 
            tôi sẽ phù hợp với mẫu người như thế nào
            (về tính cách, giá trị, mục tiêu sống, hoặc sự tương thích trong mối quan hệ).
            Thông tin của tôi là:
            Tên khai sinh đầy đủ: $hoVaTen;
            Ngày sinh: $ngaySinhFormatted;
            Giới tính: $gioiTinh";
            $answer = openrouter_api(MODEL_DEEPSEEK_R1, $promt);
        }

        include PATH_VIEW_MAIN;
    }
    public function hoiDap()
    {
        $title = 'Hỏi đáp';
        $view = 'hoi_dap';
        if (isset($_POST['question'])) {
            $modelAi = $_POST['model-ai'] ?? array_key_first(MODEL_OPTIONS); // Default model
            // Call the openrouter_api function to get the answer
            $answer = openrouter_api($modelAi, $_POST['question']);
        }

        include PATH_VIEW_MAIN;

    }
}