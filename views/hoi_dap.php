<div class="container">
    <div class="card p-3 mt-4" style="white-space: pre-line;">
        <?php if (isset($answer)): ?>
            <h2>Trả lời:</h2>
            <p><?= htmlspecialchars($answer); ?></p>
        <?php endif; ?>
    </div>
   

    <form action="index.php?act=hoi-dap" method="POST">
        <!-- Chọn model -->
        <div class="form-group mt-3">
           <span class="form-label">Danh sách Model</a>
            <select class="form-select" name="model-ai">>  
                <?php foreach (MODEL_OPTIONS as $key => $value): ?>
                    <option value="<?= $key ?>"><?= $value ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div class="form-group mt-3">
            <span class="form-label">Nhập câu hỏi:</span>
            <textarea class="form-control" id="question" name="question" required></textarea>
        </div>   
        
        <button type="submit" class="btn btn-success mt-3" name="submitQA">Submit</button>
    </form>
</div>