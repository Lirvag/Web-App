<?php

$title = 'About me';
$content = <<<HTML
 <div class="container1">
        <div class="nav-wrapper1">
            <div class="nav-link-wrappers">
                <div class="nav-link-wrapper1">
                    <a href="about.html">ЛИЧНА ИНФОРМАЦИЯ</a>
                </div>

                <div class="nav-link-wrapper1">
                    <a href="interests.html">ХОБИТА И ИНТЕРЕСИ</a>
                </div>

                <div class="nav-link-wrapper1">
                    <a href="projects.html">ПРОЕКТИ</a>
                </div>
                <div class="nav-link-wrapper1">
                    <a href="contacts.html">КОНТАКТИ</a>
                </div>
            </div>

        </div>

    </div>

    <div class="info-wrapper">
        <div class="picture-wrapper">
            <div class="picture-image-wrapper">
                <img src="./assets.images/engines/78-785827_user-profile-avatar-login-account-male-user-icon.png">
                </div>
            
        </div>
        <div class="txt-content-wrapper">
            <table>
               
                <p>Име: .........................</p>
                
               <p>Град: .........................</p>
                
              <p>Адрес: .........................</p>
               
        <p>Образование: .........................</p>
                
           <p>Професия: .........................</p>
              

            </table>
            


        </div>
    </div>
HTML;
include './resources/layout.php';