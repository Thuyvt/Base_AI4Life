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
            $fullName = $_POST["fullName"];
            $ngaySinh = $_POST["date_of_birth"];
            $ngaySinhFormatted = date('d/m/Y', strtotime($ngaySinh));
            // Call the openrouter_api function to get the answer
            $promt = "Xin hãy tính và giải thích các chỉ số thần số học 
            (bao gồm con số chủ đạo, con số linh hồn, 
            con số nhân cách, con số định mệnh, con số thái độ, con số năm cá nhân 2025, 
            và các chỉ số khác nếu có) cùng với cung hoàng đạo cho tôi. Thông tin của tôi là:
            Ngày sinh: $ngaySinhFormatted;
            Tên khai sinh đầy đủ: $fullName";
            var_dump($promt);


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