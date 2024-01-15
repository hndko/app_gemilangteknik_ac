<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Gemilang Teknik</strong>. All Rights Reserved
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- render the button and direct it to wa.me -->
<a href="https://api.whatsapp.com/send/?phone=<?= "62" . substr($phone_number, 1) ?>&text=<?= $message ?>" class="float bounce" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>