<footer>

    <div class="container-fluid footer-up d-flex align-items-center">
        <div class="container">
            <ul class="container d-flex justify-content-evenly footer-up-ul-class">
                <li class="d-flex align-items-center">
                    <i><img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                            alt="Digital Comics"></i><span>Digital Comics</span>
                </li>
                <li class="d-flex align-items-center">
                    <i class="d-flex"><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}"
                            alt="Digital Comics"></i><span>DC Merchandise</span>
                </li>
                <li class="d-flex align-items-center">
                    <i class="d-flex"><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}"
                            alt="Digital Comics"></i><span>Subscription</span>
                </li>
                <li class="d-flex align-items-center">
                    <i class="d-flex"><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                            alt="Digital Comics"></i><span>Comic Shop Locator</span>
                </li>
                <li class="d-flex align-items-center">
                    <i class="d-flex"><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}"
                            alt="Digital Comics"></i><span>DC Power Visa</span>
                </li>
            </ul>
        </div>
    </div>



    <div class="container">
        <div class="row d-flex">
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <p>Dc Comics</p>
                <ul>
                    <li><a href="#">Characters</a></li>
                    <li><a href="#">Comics</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">News</a></li>
                </ul>
                <p>Shop</p>
                <ul>
                    <li><a href="#">Shop DC</a></li>
                    <li><a href="#">Shop DC Collectibles</a></li>
                </ul>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <p>DC</p>
                <ul>
                    <li><a href="#">Terms Of Use</a></li>
                    <li><a href="#">Privacy Policy (New)</a></li>
                    <li><a href="#">Ad Choices</a></li>
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Subscriptions</a></li>
                    <li><a href="#">Talent Workshops</a></li>
                    <li><a href="#">CPSC Certificates</a></li>
                    <li><a href="#">Ratings</a></li>
                    <li><a href="#">Shop Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                <p>Sites</p>
                <ul>
                    <li><a href="#">DC</a></li>
                    <li><a href="#">MAD Magazine</a></li>
                    <li><a href="#">DC Kids</a></li>
                    <li><a href="#">DC Universe</a></li>
                    <li><a href="#">DC Power Visa</a></li>
                </ul>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-5 container-dc-image">
                {{-- Con l'istruzione di seguito per accedere all'immagine da inserire nel layout, affinché Blade la processi, utilizzo la direttiva
         Vite::asset() come di seguito (notiamo come asset sia un metodo statico): --}}
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="Logo DC Comics" class="dc-image">
            </div>
        </div>
    </div>



    <div class="container-fluid footer-down d-flex">
        <div class="container d-flex justify-content-between align-items-center">
            <button class="button-footer-down">Sign-Up Now!</button>

            <ul class="d-flex justify-content-between align-items-center button-footer-social">
                <li>Follow Us</li>
                <li><i><img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Facebook"></i></li>
                <li><i><img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Twitter"></i></li>
                <li><i><img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="Youtube"></i></li>
                <li><i><img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Pinterest"></i></li>
                <li><i><img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Periscope"></i></li>
            </ul>
        </div>
    </div>

</footer>
