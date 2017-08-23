<?php
if (isset($_SESSION['is_logged_in'])) {
    header("location: " . ROOT_URL . "flats");
}
?>


<h3>Witamy w serwisie lokatorów kamienicy czynszowej</h3>

<div class="carouselContainer mx-auto">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="<?php echo ROOT_PATH; ?>assets/img_dist/home/1.jpg" class="d-block img-fluid" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="<?php echo ROOT_PATH; ?>assets/img_dist/home/2.jpg" class="d-block img-fluid" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="<?php echo ROOT_PATH; ?>assets/img_dist/home/3.jpg" class="d-block img-fluid" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img src="<?php echo ROOT_PATH; ?>assets/img_dist/home/4.jpg" class="d-block img-fluid" alt="Fourth slide">
            </div>
            <div class="carousel-item">
                <img src="<?php echo ROOT_PATH; ?>assets/img_dist/home/5.jpg" class="d-block img-fluid" alt="Fifth slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<script src="<?php echo ROOT_PATH; ?>assets/js_dest/home/index.js"></script>