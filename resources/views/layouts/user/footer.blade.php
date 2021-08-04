<footer id="fh5co-footer" role="contentinfo" >
    <div class="container" >

        <div class="row copyright">
            <div class="col-md-12 text-center">
                <p>
                    <small class="block">&copy; Copyright {{ config('app.name') }}</small> 
                </p>
                <p>
                    <ul class="fh5co-social-icons">
                        @foreach ($sosmed as $sos)
                            <a class="btn btn-dark btn-social" href="{{ $sos->link }}"><i class="{{ $sos->icon }}"></i></a>
                    @endforeach
                    </ul>
                </p>
            </div>
        </div>

    </div>
</footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="/css/user/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="/css/user/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="/css/user/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="/css/user/js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="/css/user/js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="/css/user/js/jquery.countTo.js"></script>
<!-- Flexslider -->
<script src="/css/user/js/jquery.flexslider-min.js"></script>
<!-- Main -->
<script src="/css/user/js/main.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

{{-- tombol tambah kurang --}}

</body>
</html>

