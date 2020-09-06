<!-- Bootstrap core JavaScript
        ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?= Url('panel/js/jquery-3.2.1.slim.min.js'); ?>"></script>
<script src="<?= Url('panel/popper.min.js'); ?>"></script>
<script src="<?= Url('panel/js/bootstrap.min.js'); ?>"></script>
<!-- Icons -->
<script src="<?= Url('panel/js/feather.min.js'); ?>"></script>
<script>
    feather.replace()
</script>
<!-- me -->
@yield('script')
<script>
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};
    function myFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("myBar").style.width = scrolled + "%";
    }
</script>
<!-- me -->