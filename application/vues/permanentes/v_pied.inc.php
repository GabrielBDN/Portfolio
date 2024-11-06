<footer class="footer footer--bg">
    <div class="container text-center">
        <h1 class="footer__title">Contact</h1>
        <ul class="footer__contact-information">
            <li><a href="tel:0651252689"><i class="material-icons">phone</i>06.51.25.26.89</a></li>
            <li><a href="mailto:gabriel.beduneau1@gmail.com"><i class="material-icons">email</i> gabriel.beduneau1@gmail.Com</a></li>
            <li><a href="#"><i class="material-icons">location_on</i> EPITECH | Montpellier</a></li>
        </ul>
    </div>
    <hr style="border: 0;border-top: 1px solid #525B60;display:block;margin-top: 40px;">
    <div class="container text-center">
        <p class="footer__paragraph">Copyright &copy; 2025, All Rights Reserved.</p>
    </div>

    </div>
</footer>
</div>


<script>
    // Désactiver uniquement les liens avec href="#"
    $('a').click(function (e) {
        if ($(this).attr('href') === '#') {
            e.preventDefault();
        }
    });

    // Initialiser MixItUp
    var mixer = mixitup(".portfolio");
</script>

</body>

</html>