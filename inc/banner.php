<style>


    .banner_wrapp {
        height: 700px;
        /* background-color: #00F; */
    }
    .product {
        width: 100%;
        height: 700px;
        margin: 0px 0 0 0px;
        /* background-color: #0FF; */
    }
    #slides {
        position: relative;
        height: 700px;
        padding: 0px;
        margin: 0px;
        list-style-type: none;
    }
    .slide {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        opacity: 0;
        /* z-index: 1; */
        -webkit-transition: opacity 2s;
        -moz-transition: opacity 2s;
        -o-transition: opacity 2s;
        transition: opacity 2s;
    }
    .showing {
        opacity: 1;
    }
    .slide:nth-of-type(1) {
        background-image: url("img/banners/Eriksberg_night.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
        /* -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
        /* filter: grayscale(100%); */
        /* -moz-filter: grayscale(100%); */
        /* filter: brightness(80%);
        -webkit-filter: brightness(80%);
        -moz-filter: brightness(80%); */
    }
    .slide:nth-of-type(2) {
        background-image: url("img/banners/citiesnew2.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
        /* -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
        /* filter: grayscale(100%); */
        /* -moz-filter: grayscale(100%); */
        /* filter: brightness(80%);
        -webkit-filter: brightness(80%);
        -moz-filter: brightness(80%); */
    }
    .slider_text {
        color: #dc202e;
        font-size: 60px;
        font-weight: 300;
        text-transform: uppercase;
        font-family: 'Anton', sans-serif;
        /* font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; */
        text-align: center;
        text-shadow: 1px 1px 30px #000;
        position: absolute;
        top: 300px;
        left: 150px;
    }
</style>
<div class="banner_wrapp">
    <div class="product">
        <ul id="slides">
            <li class="slide showing">
                <div class="slider_text" style="filter: brightness(100%);">
                    Boka byggställning</br>
                    <span style="color:#FFF; font-size: 40px;">enkel och snabb</span>
                    <span>
                        <form action="reserve.php" method="post" name="formrequest" id="formrequest">
                            
                            <input type="submit" class="button_boking" value="Boka" />
                                
                            <input type="hidden"  name="email" id="email" value="mybokning@stallningshyra.se"/>
                            <input type="hidden" name="password" id="password" value="newclient246"/>
                            <input type="hidden" name="status" id="status" value="Active"/>
                            <input type="hidden" name="via" id="via" value="1000"/>
                            <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
                        </form>
                    </span>
                </div>
            </li>
            <li class="slide">
                <div class="slider_text" style="filter: brightness(100%);">
                    Boka byggställning</br>
                    <span style="color:#FFF; font-size: 40px;">enkel och snabb</span>
                    <span>
                        <form action="reserve.php" method="post" name="formrequest" id="formrequest">
                            
                            <input type="submit" class="button_boking" value="Boka" />
                                
                            <input type="hidden"  name="email" id="email" value="mybokning@stallningshyra.se"/>
                            <input type="hidden" name="password" id="password" value="newclient246"/>
                            <input type="hidden" name="status" id="status" value="Active"/>
                            <input type="hidden" name="via" id="via" value="1000"/>
                            <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
                        </form>
                    </span>
                </div>
            </li>
        </ul>
    </div>
</div>
<script>
    var slides = document.querySelectorAll('#slides .slide');
    var currentSlide = 0;
    var slideInterval = setInterval(nextSlide,5000);

    function nextSlide(){
        slides[currentSlide].className = 'slide';
        currentSlide = (currentSlide+1)%slides.length;
        slides[currentSlide].className = 'slide showing';
    }
</script>