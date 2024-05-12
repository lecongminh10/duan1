<div class="newsletter-popup mfp-hide bg-img" id=""newsletter-popup-form
    style="background: #f1f1f1 no-repeat center/cover url(assets/images/newsletter_popup_bg.jpg)">
    <div class="newsletter-popup-content">
        <img src="views/assets/images/logo.png" alt="Logo" class="logo-newsletter" width="111" height="44">
        <h2>Theo dõi chúng tôi </h2>

        <p>
            Nhận thông báo mới nhất từ những ưu đãi hot
        </p>

        <form id="">
            <div class="input-group">
                <input type="email" class="form-control" id="newsletter-email" name="newsletter-email"
                    placeholder="Your email address" required />
                <input type="submit" class="btn btn-primary" value="Submit" />
            </div>
        </form>
        <div class="newsletter-subscribe">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" value="0" id="show-again" />
                <label for="show-again" class="custom-control-label">
                    Không nhắc lại lại
                </label>
            </div>
        </div>
    </div>

    <button title="Close (Esc)" type="button" class="mfp-close" onclick="closePopup()">
        ×
    </button>
</div>



<div class="modal fade" id="binhluanthanhcong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../dangnhap/logout.php">Logout</a>
                </div>
            </div>
        </div>
</div>

<

