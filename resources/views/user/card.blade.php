{{-- Slide Card --}}
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://xdcs.cdnchinhphu.vn/thumb_w/650/446259493575335936/2023/3/25/cccd-16797554773811866991223-0-7-708-1140-crop-1679755486458365624028.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.uit.edu.vn/sites/vi/files/uploads/images/thumbs/202308/the-sinh-vien.png" class="d-block w-100" alt="...">
      </div>
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(".pop").on("click", function() {
        var imageUrl = $(this).data('image');
        $('#imagepreview').attr('src', imageUrl);
        $('#imagemodal').modal('show');
    });
</script>