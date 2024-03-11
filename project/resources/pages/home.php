<?php

$title = 'Начало';
$content = <<<HTML
<div class="portfolio-items-wrapper">
    <div class="portfolio-item-wrapper">
        <div class="portfolio-img-background" style="background-image:url(./assets/images/engines/istockphoto-1178274977-1024x1024.jpg)"></div>
        
        <div class="img-text-wrapper">
            
            <div class = "subtitle">
                <a href="petrol.php">Бензинови двигатели</a>
            </div>
            
        </div>

        

    </div>

    <div class="portfolio-item-wrapper">
        <div class="portfolio-img-background" style="background-image:url(./assets/images/engines/istockphoto-1178274379-1024x1024.jpg)"></div>

        <div class="img-text-wrapper">
            
            <div class = "subtitle">
                    <a href="disel.php">Дизелови двигатели</a>
                </div>
                    
            

        </div>

        

    </div>

    <div class="portfolio-item-wrapper">
        <div class="portfolio-img-background" style="background-image:url(./assets/images/engines/hydrogen/istockphoto-827345476-1024x1024.jpg)"></div>
        
        <div class="img-text-wrapper">
            
            <div class = "subtitle">
                <a href="hydro.php">Водородни двигатели</a>
            </div>

        </div>

        

    </div>

    <div class="portfolio-item-wrapper">
        <div class="portfolio-img-background" style="background-image:url(./assets/images/engines/electric/istockphoto-1167119897-1024x1024.jpg)"></div>

        <div class="img-text-wrapper">
            
            <div class = "subtitle">
                <a href="electric.php">Електрически двигатели</a>
            </div>

        </div>

        

    </div>

    <div class="portfolio-item-wrapper">
        <div class="portfolio-img-background" style="background-image:url(./assets/images/engines/steam/istockphoto-910863288-1024x1024.jpg)"></div>

        <div class="img-text-wrapper">
            
            <div class = "subtitle">
                <a href="steam.php">Парни двигатели</a>
            </div>

        </div>

        

    </div>

    <div class="portfolio-item-wrapper">
        <div class="portfolio-img-background" style="background-image:url(./assets/images/engines/jet/istockphoto-541144900-1024x1024.jpg)"></div>

        <div class="img-text-wrapper">
            
            <div class = "subtitle">
                <a href="jet.php">Реактивни двигатели</a>
            </div>

        </div>

        

    </div>
</div>

<script>
    const portfolioItems = document.querySelectorAll('.portfolio-item-wrapper')
    portfolioItems.forEach(portfolioItem=> {
        portfolioItem.addEventListener('mouseover', () =>{
          console.log(portfolioItem.childNodes[1].classList);
          portfolioItem.childNodes[1].classList.add('img-darken');
        })

        portfolioItem.addEventListener('mouseout', () =>{
          console.log(portfolioItem.childNodes[1].classList);
          portfolioItem.childNodes[1].classList.remove('img-darken');
        })
    })
</script>
HTML;
include './resources/layout.php';
