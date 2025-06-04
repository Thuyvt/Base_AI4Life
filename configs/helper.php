<?php

if (!function_exists('debug')) {
    function debug($data)
    {
        echo '<pre>';
        print_r($data);
        die;
    }
}

if (!function_exists('upload_file')) {
    function upload_file($folder, $file)
    {
        $targetFile = $folder . '/' . time() . '-' . $file["name"];

        if (move_uploaded_file($file["tmp_name"], PATH_ASSETS_UPLOADS . $targetFile)) {
            return $targetFile;
        }

        throw new Exception('Upload file không thành công!');
    }
}

// Funtion connect to openrouter API
if (!function_exists('openrouter_api')) {
    function openrouter_api($model, $prompt)
    {
        $url = "https://openrouter.ai/api/v1/chat/completions";
        
        $data = [
            "model" => $model, // Chọn mô hình
            "messages" => [["role" => "user", "content" => $prompt]]
        ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer ". API_OPENROUTER_KEY,
            "Content-Type: application/json"
        ]);
        $response = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($response, true);
        return $result['choices'][0]['message']['content'] ?? "Không nhận được phản hồi.";

    }
}
