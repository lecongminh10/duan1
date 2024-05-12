<div class="container mt-5">
    <form action="insert_process.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="anh_1" class="form-label">Ảnh 1</label>
            <input type="file" class="form-control" id="anh_1" name="anh_1" required>
        </div>
        <div class="mb-3">
            <label for="anh_2" class="form-label">Ảnh 2</label>
            <input type="file" class="form-control" id="anh_2" name="anh_2" required>
        </div>
        <div class="mb-3">
            <label for="anh_3" class="form-label">Ảnh 3</label>
            <input type="file" class="form-control" id="anh_3" name="anh_3" required>
        </div>
        <div class="mb-3">
            <label for="noidung_1" class="form-label">Nội dung 1</label>
            <textarea class="form-control" id="noidung_1" name="noidung_1" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="noidung_2" class="form-label">Nội dung 2</label>
            <textarea class="form-control" id="noidung_2" name="noidung_2" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="noidung_3" class="form-label">Nội dung 3</label>
            <textarea class="form-control" id="noidung_3" name="noidung_3" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>