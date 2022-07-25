<div class="row">
    <div class="col-lg-12">
        <div id="belajargooglemap" style="width: 500; height: 400px"></div>
    </div>
</div>
<script>
    function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('belajargooglemap'), {
            center: {
                lat: -8.199524,
                lng: 113.642272
            },
            scrollwheel: false,
            zoom: 3
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOVfpPuuh3VHFvtoas3ZuNTt2Kp9KIkTU&callback=initMap" async defer></script>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d794.4341879312955!2d113.64172482916953!3d-8.199522672235757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwMTEnNTguMyJTIDExM8KwMzgnMzIuMiJF!5e1!3m2!1sid!2sid!4v1576874715709!5m2!1sid!2sid" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>