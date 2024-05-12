<?php 
extract( $lido);
?>

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Lý do hủy đơn hàng</h5>

            <form>
                <div class="mb-3">
                    <label for="cancelReason" class="form-label"></label>
                    <textarea class="form-control" id="cancelReason" rows="4" placeholder="Nhập lý do của bạn" ><?=$ghichu?></textarea>
                </div>

                <button type="button" class="btn btn-primary" onclick="submitCancelReason()">Trả lời lí do hủy đơn hàng </button>  <a href="index.php?act=huydh" class="btn btn-primary">Trở về </a>
            </form>
           
        </div>
    </div>
    
</div>

<script>
    function submitCancelReason() {
        // Thêm logic xử lý khi người dùng gửi lý do hủy đơn hàng
        var cancelReason = document.getElementById('cancelReason').value;
        console.log('Lý do hủy đơn hàng:', cancelReason);
        // Thêm logic xử lý tiếp theo tại đây
    }
</script>