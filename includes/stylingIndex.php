<style>
.banner {
    width: 100%;
    height: 625px;
    margin-top: -92px;
    z-index: 0;
    position: relative;

}

a:hover {
    text-decoration: none;
}

.logo h6 {
    font-size: 18px;
    color: #fff;
}




.carousel-item {
    width: 100%;
    height: 625px;
}

.banner__item {
    border: 4px solid #f8f9fa27;
    height: 450px;
    width: 70%;
    margin: 7% 15%;
    text-align: center;

}

.banner__content {
    color: #fff;
    margin-top: 12%;
}




.btn-life {
    padding: 1.5% 3.7%;
    font-weight: bold;
    text-transform: uppercase;
    margin-top: 3%;
    border: none;
    background-color: #17a2b8;
    color: #fff;
    border-radius: 100px;
    font-size: 14px;
}

.btn-life:hover {
    transition: .5s ease all;
    background-color: #05313f;
}

.bg1 {
    background: url('images/slider/slider-1.jpg');
    background-color: rgba(0, 0, 0, 0.55);
    background-blend-mode: overlay;
    background-attachment: fixed;
}

.bg2 {

    background: url('images/slider/slider-2.jpg');
    background-color: rgba(0, 0, 0, 0.55);
    background-blend-mode: overlay;
    background-attachment: fixed;
}

.bg3 {

    background: url('images/slider/slider-3.jpg');
    background-color: rgba(0, 0, 0, 0.55);
    background-blend-mode: overlay;
    background-attachment: fixed;
}

.meadow {
    color: #17a2b8;
    font-weight: bolder;
}




/* about */

.about {
    border: 1px solid #fff;
    height: 850px;
    padding: 0%;
    margin: 0%;
    color: #04181e;
}

.about .container {
    margin-top: 5%;
}



.about_write_up p {
    line-height: 2rem;
    font-size: 14px;
    opacity: .9;
}

.about_write_up h6,
.about__goal h6 {
    margin: 5% 0% 3% 0%;
    padding: 0%;
    font-size: 18px;
}

.beneath {
    border-bottom: 3px solid #17a2b8;
    font-weight: bold;
}

.about__img {
    height: 362px;
    background: url('images/image_02.jpg');
    background-repeat: no-repeat;
    background-size: contain;
}

.about__goal__details {
    height: 150px;
    text-align: center;
    padding: 15% 5%;
    border-radius: 10px;
    color: #05232c;
    box-shadow: 2px 1px 5px 5px #17a3b84e;
}

.about__goal__details i {
    font-size: 30px;
}

.about__goal__details h5 {
    font-size: 17px;
    margin-top: 6%;
    text-transform: uppercase;
}




/*latest causes */

.causes {
    border: 1px solid #fff;
    height: 700px;
    padding: 1% 0%;
}

.causes .container {
    margin-top: 0%
}

.big {
    display: none;
}

.h3 {
    text-align: center;
    margin: 3% 0% 5% 0%;
}

.causes__box {
    height: 480px;
    padding: 0% 0%;
    border-radius: 10px;
}

.causes__box img {
    width: 100%;
}

.causes__box h6 {
    font-size: 18px;
    margin: 8% 0% 3% 6%;
}

.fill_up {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    padding: 0% 6%;
    margin-top: 6%;
}

.fill h5 {
    font-size: 14px;
}

.btn-donate {
    padding: 3% 9.7%;
    font-weight: bold;
    text-transform: uppercase;
    margin: 4% 0% 0% 6%;
    border: none;
    background-color: #17a2b8;
    color: #fff;
    border-radius: 100px;
    font-size: 12px;
}

.fill span {
    opacity: .8;
    font-weight: bolder;
}

.progress {
    width: 88%;
    margin: 2% 6%;
}

/*<!--===================Countdown/subscribe Section=========================-->*/
.counter_area {
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    width: 100%;
    padding: 7% 0%;
    background-attachment: fixed;

}


.counter_area .single_counter {
    margin-bottom: 30px;
}

.counter_area .single_counter h3 {
    margin-top: 40px;
    margin-bottom: 15px;
    font-weight: bolder;
}

.counter_area .single_counter h3 span {
    font-size: 46px;
    font-weight: 300;
    color: #fff;
}

.counter_area .single_counter p {
    font-weight: 15px;
    color: #E8E8E8;
    margin-bottom: 0;
    font-weight: bolder;
}

.counter_icon i {
    font-size: 45px;
    color: #fff;

}

.counter_bg_1 {
    background-image: url(images/slider/slide-02.jpg);
    background-blend-mode: overlay;
    background-attachment: fixed;
    background-color: rgba(0, 0, 0, .5);
    background-size: cover;
}


/*@ media*/
@media(max-width: 767px) {
    .counter_area {
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        width: 100%;
        padding: 20% 0%;
        height: 690px;
    }


    .counter_area .single_counter h3>span {
        margin-bottom: 11px;
        font-size: 20px !important;

    }

    .counter_area .single_counter h3 {
        margin-top: 0px !important;
    }

    .counter_area .single_counter p {
        font-weight: 15px;
        color: #E8E8E8;
        margin-bottom: 0;
        font-size: 13px !important;
        margin-top: -10px;
    }

    .single_counter {
        margin-top: -20px;
        margin-bottom: 25% !important;

    }

}


/*<!--===================End Countdown/subscribe Section=========================-->*/


/*help  */
.help {
    border: 1px solid #f8f9fa68;
    margin: 0% 0%;
    height: 720px;
    padding: 7% 0%;
    background-color: #f8f9fa68;
}

.help .container h3 {
    text-align: center;
    margin-bottom: 8%;
}

.help__img {
    height: 400px;
    background: url('images/volu.jpg');
    background-repeat: no-repeat;
    background-size: 100% 100%;

}

.help_boxes {
    height: 130px;
    padding: 4% 4%;
    border-radius: 10px;
    box-shadow: 2px 1px 5px 5px #17a3b84e;
    margin-bottom: 4%;
    margin-top: 17%;
    background-color: #fff;
}

.help_boxes i {
    margin-top: 5%;
    font-size: 22px;
    margin-bottom: 5%;
}

.help_boxes a {
    float: right;
    color: #17a2b8;
}

/*end */


/*events*/

.events {
    border: 1px solid #fff;
    height: 700px;
    padding: 5%;
}

.events .container h3 {
    text-align: center;
    margin-bottom: 8%;
}

.event__box {}

.event__box .donate a {
    display: flex;
    flex-direction: row;
    float: left;
    align-items: center;
    margin-left: 6%;
    margin-top: 13%;
    color: #05232c;
}

.event__box h5 {
    margin-left: 6%;
    font-size: 14px;
    margin-top: 5%;
}

.event__box {
    height: 420px;
    padding: 0% 0%;
    border-radius: 10px;
    margin-bottom: 20%;
}

.event__box img {
    border-radius: 10px;
    width: 100%;
}

.event__box h6 {
    font-size: 18px;
    margin: 8% 0% 3% 6%;
}

.donate a h5 {
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 10%;
    font-weight: bolder;
    opacity: .7;
}

.donate a i {
    margin-left: 4%;
    opacity: .7;
}

/*end*/

/*gallery*/

.gallery {
    border: 1px solid #f8f9fa68;
    margin-top: 35%;
    clear: both;
    height: 500px;
    padding: 7% 0%;
    background-color: #f8f9fa68;
}

.gallery .container {
    overflow: hidden;
}

.gallery .container h3 {
    text-align: center;
    margin-bottom: 5%;
}

#owl-demo .item {
    margin: 15px;
}

#owl-demo .item img {
    display: block;
    width: 100%;
    border-radius: 10px;
    height: auto;

}



/* <!--===================Footer Section=========================-->*/
.footer {
    background-repeat: no-repeat;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.footer .footer_top {
    padding-top: 145px;
    padding-bottom: 129px;
    background: #fff;
}

@media (max-width: 767px) {
    .footer .footer_top {
        padding-top: 60px;
        padding-bottom: 30px;
    }
}

@media (max-width: 767px) {
    .footer .footer_top .footer_widget {
        margin-bottom: 30px;
    }
}

@media (min-width: 768px) and (max-width: 991px) {
    .footer .footer_top .footer_widget {
        margin-bottom: 30px;
    }
}

.footer .footer_top .footer_widget .footer_title {
    font-size: 22px;
    font-weight: 600;
    color: #001D38;
    text-transform: capitalize;
    margin-bottom: 40px;
}

@media (max-width: 767px) {
    .footer .footer_top .footer_widget .footer_title {
        margin-bottom: 20px;
    }
}

.footer .footer_top .footer_widget .footer_logo {
    font-size: 22px;
    font-weight: 400;
    color: #fff;
    text-transform: capitalize;
    margin-bottom: 40px;
}

@media (max-width: 767px) {
    .footer .footer_top .footer_widget .footer_logo {
        margin-bottom: 20px;
    }
}

.footer .footer_top .footer_widget p {
    color: #919191;
    font-size: 13px;
    font-weight: 400;
    line-height: 28px;
}

.footer .footer_top .footer_widget p a {
    color: #919191;
}

.footer .footer_top .footer_widget p a:hover {
    color: #5DB2FF;
}

.footer .footer_top .footer_widget p.footer_text {
    font-size: 16px;
    color: #B2B2B2;
    margin-bottom: 23px;
    font-weight: 400;
    line-height: 28px;
}

.footer .footer_top .footer_widget p.footer_text a.domain {
    color: #B2B2B2;
    font-weight: 400;
}

.footer .footer_top .footer_widget p.footer_text a.domain:hover {
    color: #5DB2FF;
    border-bottom: 1px solid #5DB2FF;
}

.footer .footer_top .footer_widget p.footer_text.doanar a {
    font-weight: 500;
    color: #B2B2B2;
}

.footer .footer_top .footer_widget p.footer_text.doanar a:hover {
    color: #5DB2FF;
    border-bottom: 1px solid #5DB2FF;
}

.footer .footer_top .footer_widget p.footer_text.doanar a.first {
    margin-bottom: 10px;
}

.footer .footer_top .footer_widget ul li {
    color: #919191;
    font-size: 13px;
    line-height: 32px;
    list-style-type: none;
}

.footer .footer_top .footer_widget ul li a {
    color: #919191;
    text-decoration: none;
    font-weight: 400;
}

.footer .footer_top .footer_widget ul li a:hover {
    color: #5DB2FF;
}

.footer .footer_top .footer_widget .newsletter_form {
    position: relative;
    margin-bottom: 20px;
}

.footer .footer_top .footer_widget .newsletter_form input {
    width: 100%;
    height: 50px;
    background: #fff;
    padding-left: 20px;
    font-size: 15px;
    color: #000;
    border: none;
    border: 1px solid #E8E8E8;
    border-radius: 30px;
}

.footer .footer_top .footer_widget .newsletter_form input::placeholder {
    font-size: 15px;
    color: #919191;
}

.footer .footer_top .footer_widget .newsletter_form button {
    position: absolute;
    top: 0;
    right: 0;
    height: 40px;
    border: none;
    font-size: 14px;
    color: #fff;
    background: #5DB2FF;
    padding: 10px;
    padding: 0 22px;
    cursor: pointer;
    border-radius: 30px;
    top: 5px;
    right: 5px;
    font-size: 13px;
    font-weight: 500;
}

.footer .footer_top .footer_widget .newsletter_text {
    font-size: 13px;
    color: #919191;
    line-height: 26px;
}

.footer .copy-right_text {
    padding-bottom: 30px;
    background: #fff;
    margin-top: -80px;
}

.footer .copy-right_text .footer_border {
    border-top: 1px solid #E8E8E8;
    padding-bottom: 30px;
}

.footer .copy-right_text .copy_right {
    font-size: 15px;
    color: #919191;
    margin-bottom: 0;
    font-weight: 500;
}

@media (max-width: 767px) {
    .footer .copy-right_text .copy_right {
        font-size: 13px;
    }
}

.footer .copy-right_text .copy_right a {
    color: #5DB2FF;
}



@media (max-width: 767px) {
    .footer .socail_links {
        margin-top: 30px;
    }
}




/*<!--===================End Footer Section=========================-->*/




/* */


.section_banner {
    height: 690px;
    margin-top: -19%;

}

.bg_about {
    background: url('images/slider/slider-2.jpg');
    background-color: rgba(0, 0, 0, 0.55);
    background-blend-mode: overlay;
    background-attachment: fixed;
}

.bg_g {
    background: url('images/slider/slider-3.jpg');
    background-color: rgba(0, 0, 0, 0.55);
    background-blend-mode: overlay;
    background-attachment: fixed;
}

.bg_c {
    background: url('images/slider/slide-02.jpg');
    background-color: rgba(0, 0, 0, 0.55);
    background-blend-mode: overlay;
    background-attachment: fixed;
}

.bg_d {
    background: url('images/slider/slider-4.jpg');
    background-color: rgba(0, 0, 0, 0.55);
    background-blend-mode: overlay;
    background-attachment: fixed;
}

.section_banner .container {
    top: 45%;
    position: relative;
}

.section_banner_details {
    border: 4px solid #f8f9fa27;
    color: #fff;
    padding: 10% 0%;
    width: 60%;
    margin: 0% 20%;
}











/*********************************MEDIA QUERIES******************* */

/* Min width 0px to 360px */
@media (min-width: 0px) and (max-width: 360px) {
    .banner__item {
        width: 100%;
        margin: 30% 0%;
        border: none;
    }

    .banner__content {
        width: 90%;
        margin: 60% 5% 0% 5%;
    }

    .banner__content h3 {
        font-size: 19px;
    }

    .banner__content p {
        font-size: 11px;
        width: 90%;
        margin: 5% 5%;
        opacity: .8 !important;
    }

    .section_banner {
        height: 330px;
        margin-top: -21%;

    }

    .method {
        border: 1px solid #17a3b84e;
        box-shadow: 2px 1px 5px 5px #17a3b84e;
        height: 300px;
        width: 90% !important;
        background: #fff;
        margin: -20% 5% 0% 5% !important;
        padding: 2% 5%;
        z-index: 22222;
        position: relative;
        text-align: center;
    }

    .bg_about {
        background: url('images/slider/slider-2.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -820px -150px;
    }

    .bg_g {
        background: url('images/slider/slider-3.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -600px -120px;
    }

    .bg_c {
        background: url('images/slider/slide-02.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -600px 0px;
    }

    .bg_d {
        background: url('images/slider/slider-4.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -100px -130px;
    }


    .section_banner .container {
        top: 34%;
        position: relative;
    }

    .section_banner_details {
        border: 4px solid #f8f9fa27;
        color: #fff;
        padding: 10% 0%;
        width: 90%;
        margin: 0% 5%;
    }

    .section_banner_details h4 {
        font-size: 14px;
    }

    .carousel-control-prev {
        display: none;
    }

    .carousel-control-next {
        display: none;
    }

    .btn-life {
        font-size: 11px !important;
        padding: 3% 8% !important;
    }

    .banner {
        height: 500px;
    }

    .carousel-item {
        width: 100%;
        height: 500px !important;
    }

    .bg1 {
        background-size: cover !important;
        background-position: -320px 0px;
        background-color: rgba(0, 0, 0, 0.6) !important;
    }

    .bg2 {
        background-size: cover !important;
        background-position: -590px 0px;
        background-color: rgba(0, 0, 0, 0.7) !important;
    }

    .bg3 {
        background-size: cover !important;
        background-position: -500px 0px;
        background-color: rgba(0, 0, 0, 0.8) !important;
    }


    /*about*/

    .about {
        height: 1600px;
    }

    .about .container {
        margin-top: 15% !important;
    }

    .about .container .h3 {
        font-size: 20px;
    }

    .about_write_up h6,
    .about__goal h6 {
        font-size: 14px;
        margin-bottom: 5%;
    }

    .about_write_up p {
        font-size: 12px;
        line-height: 1.5rem;
    }

    .about__goal {
        margin-top: -45%;
    }

    .about__goal__details {
        padding: 2% 5% !important;
        margin-bottom: 7%;
        margin-top: 5%;
    }

    .about__goal__details i {
        margin-top: 10%;
    }

    /*latest causes*/

    .causes {
        height: 1450px !important;
    }

    .causes .container .h3 {
        font-size: 20px;
    }

    .causes__box {
        margin-top: 5% !important;
        margin-bottom: 8%;
        height: 410px !important;
    }

    .causes__box img {
        border-radius: 10px;
    }

    .causes__box h6 {
        font-size: 14px !important;
    }

    .fill h5 {
        font-size: 10px !important;
    }

    .progress {
        height: 15px !important;
    }


    /*counter*/
    .counter_area {
        margin: 0% 5%;
        width: 90%;

    }

    /*help*/

    .help {
        margin-top: 20% !important;
        height: 1100px !important;
    }

    .help .container h3 {
        text-align: center;
        margin-bottom: 15% !important;
        font-size: 20px !important;
    }

    .help__img {
        height: 280px !important;
    }

    /*events*/

    .events {
        border: 1px solid #fff;
        height: 2450px !important;
        padding: 5%;
        margin-top: 20%;
    }

    .events .container h3 {
        text-align: center;
        margin-bottom: 8%;
        margin-bottom: 15% !important;
        font-size: 20px !important;
    }

    .event__box {
        height: 360px !important;
    }

    /*gallery*/
    .gallery {
        height: 330px !important;
    }

    .gallery .container h3 {
        text-align: center;
        margin-bottom: 5%;
        font-size: 20px !important;
    }

    .form {
        border: 2px solid #17a3b84e;
        width: 100% !important;
        margin: 10% 0% !important;
        padding: 5% 6%;
        box-shadow: 2px 1px 5px 5px #17a3b84e;
        border-radius: 10px;
    }

}






/* Min width 361px to 500px */
@media (min-width: 361px) and (max-width: 415px) {
    .banner__item {
        width: 100%;
        margin: 30% 0%;
        border: none;
    }

    .banner__content {
        width: 90%;
        margin: 45% 5% 0% 5%;
    }

    .banner__content h3 {
        font-size: 19px;
    }

    .banner__content p {
        font-size: 11px;
        width: 90%;
        margin: 5% 5%;
        opacity: .8 !important;
    }

    .carousel-control-prev {
        display: none;
    }

    .section_banner {
        height: 330px;
        margin-top: -19%;

    }

    .bg_about {
        background: url('images/slider/slider-2.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -820px -150px;
    }

    .bg_g {
        background: url('images/slider/slider-3.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -650px -100px;
    }

    .bg_c {
        background: url('images/slider/slide-02.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -600px 0px;
    }

    .bg_d {
        background: url('images/slider/slider-4.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -100px -130px;
    }

    .method {
        border: 1px solid #17a3b84e;
        box-shadow: 2px 1px 5px 5px #17a3b84e;
        height: 300px;
        width: 90% !important;
        background: #fff;
        margin: -20% 5% 0% 5% !important;
        padding: 2% 5%;
        z-index: 22222;
        position: relative;
        text-align: center;
    }

    .section_banner .container {
        top: 34%;
        position: relative;
    }

    .section_banner_details {
        border: 4px solid #f8f9fa27;
        color: #fff;
        padding: 10% 0%;
        width: 90%;
        margin: 0% 5%;
    }

    .section_banner_details h4 {
        font-size: 14px;
    }


    .carousel-control-next {
        display: none;
    }

    .btn-life {
        font-size: 11px !important;
        padding: 3% 8% !important;
    }

    .banner {
        height: 500px;
    }

    .carousel-item {
        width: 100%;
        height: 500px !important;
    }

    .bg1 {
        background-size: cover !important;
        background-position: -320px 0px;
        background-color: rgba(0, 0, 0, 0.6) !important;
    }

    .bg2 {
        background-size: cover !important;
        background-position: -590px 0px;
        background-color: rgba(0, 0, 0, 0.7) !important;
    }

    .bg3 {
        background-size: cover !important;
        background-position: -500px 0px;
        background-color: rgba(0, 0, 0, 0.8) !important;
    }


    /*about*/

    .about {
        height: 1600px;
    }

    .about .container {
        margin-top: 15% !important;
    }

    .about .container .h3 {
        font-size: 20px;
    }

    .about_write_up h6,
    .about__goal h6 {
        font-size: 14px;
        margin-bottom: 5%;
    }

    .about_write_up p {
        font-size: 12px;
        line-height: 1.5rem;
    }

    .about__goal {
        margin-top: -25%;
    }

    .about__goal__details {
        padding: 2% 5% !important;
        margin-bottom: 4% !important;
        margin-top: 4%;
    }

    .about__goal__details i {
        margin-top: 10%;
    }

    /*latest causes*/

    .causes {
        height: 1650px !important;
    }

    .causes .container .h3 {
        font-size: 20px;
    }

    .causes__box {
        margin-top: 5% !important;
        margin-bottom: 8%;
        height: 465px !important;
    }

    .causes__box img {
        border-radius: 10px;
    }

    .causes__box h6 {
        font-size: 14px !important;
    }

    .fill h5 {
        font-size: 10px !important;
    }

    .progress {
        height: 15px !important;
    }


    /*counter*/
    .counter_area {
        margin: 0% 5%;
        width: 90%;

    }

    /*help*/

    .help {
        margin-top: 20% !important;
        height: 1100px !important;
    }

    .help .container h3 {
        text-align: center;
        margin-bottom: 15% !important;
        font-size: 20px !important;
    }

    .help__img {
        height: 300px !important;
    }

    .help_boxes {
        margin-top: 7% !important;
    }



    /*events*/

    .events {
        border: 1px solid #fff;
        height: 2800px !important;
        padding: 5%;
        margin-top: 20%;
    }

    .events .container h3 {
        text-align: center;
        margin-bottom: 8%;
        margin-bottom: 15% !important;
        font-size: 20px !important;
    }

    .event__box {
        height: 405px !important;
    }

    /*gallery*/
    .gallery {
        height: 330px !important;
    }

    .gallery .container h3 {
        text-align: center;
        margin-bottom: 5%;
        font-size: 20px !important;
    }

    .form {
        border: 2px solid #17a3b84e;
        width: 100% !important;
        margin: 10% 0% !important;
        padding: 5% 6%;
        box-shadow: 2px 1px 5px 5px #17a3b84e;
        border-radius: 10px;
    }

}









/* Min width 361px to 455px */
@media (min-width: 416px) and (max-width: 455px) {
    .banner__item {
        width: 100%;
        margin: 30% 0%;
        border: none;
    }

    .banner__content {
        width: 90%;
        margin: 45% 5% 0% 5%;
    }

    .banner__content h3 {
        font-size: 19px;
    }

    .section_banner {
        height: 330px;
        margin-top: -19%;
    }

    .bg_about {
        background: url('images/slider/slider-2.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -820px -150px;
    }

    .bg_g {
        background: url('images/slider/slider-3.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -650px -120px;
    }

    .bg_c {
        background: url('images/slider/slide-02.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -600px 0px;
    }

    .bg_d {
        background: url('images/slider/slider-4.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -100px -130px;
    }

    .method {
        border: 1px solid #17a3b84e;
        box-shadow: 2px 1px 5px 5px #17a3b84e;
        height: 300px;
        width: 90% !important;
        background: #fff;
        margin: -20% 5% 0% 5% !important;
        padding: 2% 5%;
        z-index: 22222;
        position: relative;
        text-align: center;
    }

    .section_banner .container {
        top: 34%;
        position: relative;
    }

    .section_banner_details {
        border: 4px solid #f8f9fa27;
        color: #fff;
        padding: 10% 0%;
        width: 90%;
        margin: 0% 5%;
    }

    .section_banner_details h4 {
        font-size: 14px;
    }


    .banner__content p {
        font-size: 11px;
        width: 90%;
        margin: 5% 5%;
        opacity: .8 !important;
    }

    .carousel-control-prev {
        display: none;
    }

    .carousel-control-next {
        display: none;
    }

    .btn-life {
        font-size: 11px !important;
        padding: 3% 8% !important;
    }

    .banner {
        height: 500px;
    }

    .carousel-item {
        width: 100%;
        height: 500px !important;
    }

    .bg1 {
        background-size: cover !important;
        background-position: -320px 0px;
        background-color: rgba(0, 0, 0, 0.6) !important;
    }

    .bg2 {
        background-size: cover !important;
        background-position: -590px 0px;
        background-color: rgba(0, 0, 0, 0.7) !important;
    }

    .bg3 {
        background-size: cover !important;
        background-position: -500px 0px;
        background-color: rgba(0, 0, 0, 0.8) !important;
    }


    /*about*/

    .about {
        height: 1600px;
    }

    .about .container {
        margin-top: 15% !important;
    }

    .about .container .h3 {
        font-size: 20px;
    }

    .about_write_up h6,
    .about__goal h6 {
        font-size: 14px;
        margin-bottom: 5%;
    }

    .about_write_up p {
        font-size: 12px;
        line-height: 1.5rem;
    }

    .about__goal {
        margin-top: -15%;
    }

    .about__goal__details {
        padding: 2% 5% !important;
        margin-bottom: 4% !important;
        margin-top: 4%;
    }

    .about__goal__details i {
        margin-top: 10%;
    }

    /*latest causes*/

    .causes {
        height: 1850px !important;
    }

    .causes .container .h3 {
        font-size: 20px;
    }

    .causes__box {
        margin-top: 5% !important;
        margin-bottom: 8%;
        height: 515px !important;
    }

    .causes__box img {
        border-radius: 10px;
    }

    .causes__box h6 {
        font-size: 14px !important;
    }

    .fill h5 {
        font-size: 10px !important;
    }

    .progress {
        height: 15px !important;
    }


    /*counter*/
    .counter_area {
        margin: 0% 5%;
        width: 90%;
        height: 800px !important;

    }

    /*help*/

    .help {
        margin-top: 20% !important;
        height: 1100px !important;
    }

    .help .container h3 {
        text-align: center;
        margin-bottom: 15% !important;
        font-size: 20px !important;
    }

    .help_boxes i {
        margin-top: -3% !important;
    }

    .help__img {
        height: 300px !important;
    }

    .help_boxes {
        margin-top: 7% !important;
    }



    /*events*/

    .events {
        border: 1px solid #fff;
        height: 3000px !important;
        padding: 5%;
        margin-top: 20%;
    }

    .events .container h3 {
        text-align: center;
        margin-bottom: 8%;
        margin-bottom: 15% !important;
        font-size: 20px !important;
    }

    .event__box {
        height: 445px !important;
    }

    /*gallery*/
    .gallery {
        height: 330px !important;
    }

    .gallery .container h3 {
        text-align: center;
        margin-bottom: 5%;
        font-size: 20px !important;
    }

    .form {
        border: 2px solid #17a3b84e;
        width: 90% !important;
        margin: 10% 5% !important;
        padding: 5% 6%;
        box-shadow: 2px 1px 5px 5px #17a3b84e;
        border-radius: 10px;
    }

}









/* Min width 456px to 500px */
@media (min-width: 456px) and (max-width: 500px) {
    .banner__item {
        width: 100%;
        margin: 30% 0%;
        border: none;
    }

    .banner__content {
        width: 90%;
        margin: 30% 5% 0% 5%;
    }

    .banner__content h3 {
        font-size: 22px;
    }

    .section_banner {
        height: 330px;
        margin-top: -19%;
    }

    .bg_about {
        background: url('images/slider/slider-2.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -820px -150px;
    }

    .bg_g {
        background: url('images/slider/slider-3.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -650px -120px;
    }

    .bg_c {
        background: url('images/slider/slide-02.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -600px 0px;
    }

    .bg_d {
        background: url('images/slider/slider-4.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -100px -130px;
    }

    .method {
        border: 1px solid #17a3b84e;
        box-shadow: 2px 1px 5px 5px #17a3b84e;
        height: 300px;
        width: 90% !important;
        background: #fff;
        margin: -20% 5% 0% 5% !important;
        padding: 2% 5%;
        z-index: 22222;
        position: relative;
        text-align: center;
    }

    .section_banner .container {
        top: 34%;
        position: relative;
    }

    .section_banner_details {
        border: 4px solid #f8f9fa27;
        color: #fff;
        padding: 10% 0%;
        width: 90%;
        margin: 0% 5%;
    }

    .section_banner_details h4 {
        font-size: 14px;
    }


    .banner__content p {
        font-size: 14px;
        width: 90%;
        margin: 5% 5%;
        opacity: .8 !important;
    }

    .carousel-control-prev {
        display: none;
    }

    .carousel-control-next {
        display: none;
    }

    .btn-life {
        font-size: 11px !important;
        padding: 3% 8% !important;
    }

    .banner {
        height: 500px;
    }

    .carousel-item {
        width: 100%;
        height: 500px !important;
    }

    .bg1 {
        background-size: cover !important;
        background-position: -320px 0px;
        background-color: rgba(0, 0, 0, 0.6) !important;
    }

    .bg2 {
        background-size: cover !important;
        background-position: -590px 0px;
        background-color: rgba(0, 0, 0, 0.7) !important;
    }

    .bg3 {
        background-size: cover !important;
        background-position: -500px 0px;
        background-color: rgba(0, 0, 0, 0.8) !important;
    }


    /*about*/

    .about {
        height: 1700px;
    }

    .about .container {
        margin-top: 15% !important;
    }

    .about .container .h3 {
        font-size: 25px;
    }

    .about_write_up h6,
    .about__goal h6 {
        font-size: 17px;
        margin-bottom: 5%;
    }

    .about_write_up p {
        font-size: 14px;
        line-height: 1.5rem;
    }

    .about__goal {
        margin-top: 0%;
    }

    .about__goal__details {
        padding: 2% 5% !important;
        margin-bottom: 4% !important;
        margin-top: 4%;
    }

    .about__goal__details i {
        margin-top: 5%;
    }

    /*latest causes*/

    .causes {
        height: 2450px !important;
    }

    .causes .container .h3 {
        font-size: 20px;
    }

    .causes__box {
        margin-top: 5% !important;
        margin-bottom: 8%;
        height: 600px !important;
    }

    .causes__box img {
        border-radius: 10px;
    }

    .causes__box h6 {
        font-size: 14px !important;
    }

    .fill h5 {
        font-size: 10px !important;
    }

    .progress {
        height: 15px !important;
    }


    /*counter*/
    .counter_area {
        margin: 0% 5%;
        width: 90%;
        height: 850px !important;

    }

    /*help*/

    .help {
        margin-top: 20% !important;
        height: 1300px !important;
    }

    .help .container h3 {
        text-align: center;
        margin-bottom: 15% !important;
        font-size: 20px !important;
    }

    .help_boxes i {
        margin-top: -3% !important;
    }

    .help__img {
        height: 400px !important;
    }

    .help_boxes {
        margin-top: 7% !important;
        height: 150px !important;
    }



    /*events*/

    .events {
        border: 1px solid #fff;
        height: 3400px !important;
        padding: 5%;
        margin-top: 20%;
    }

    .events .container h3 {
        text-align: center;
        margin-bottom: 8%;
        margin-bottom: 15% !important;
        font-size: 20px !important;
    }

    .event__box {
        height: 505px !important;
    }

    /*gallery*/
    .gallery {
        height: 330px !important;
    }

    .gallery .container h3 {
        text-align: center;
        margin-bottom: 5%;
        font-size: 20px !important;
    }

    .form {
        border: 2px solid #17a3b84e;
        width: 90% !important;
        margin: 10% 5% !important;
        padding: 5% 6%;
        box-shadow: 2px 1px 5px 5px #17a3b84e;
        border-radius: 10px;
    }

}







/* Min width 501px to 575px */
@media (min-width: 501px) and (max-width: 575px) {
    .banner__item {
        width: 100%;
        margin: 30% 0%;
        border: none;
    }

    .banner__content {
        width: 90%;
        margin: 30% 5% 0% 5%;
    }

    .section_banner {
        height: 430px;
        margin-top: -19%;
    }

    .bg_about {
        background: url('images/slider/slider-2.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -820px -150px;
    }

    .bg_g {
        background: url('images/slider/slider-3.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -500px -100px;
    }

    .bg_c {
        background: url('images/slider/slide-02.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -600px 0px;
    }

    .bg_d {
        background: url('images/slider/slider-4.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -250px -130px;
    }

    .method {
        border: 1px solid #17a3b84e;
        box-shadow: 2px 1px 5px 5px #17a3b84e;
        height: 300px;
        width: 90% !important;
        background: #fff;
        margin: -20% 5% 0% 5% !important;
        padding: 2% 5%;
        z-index: 22222;
        position: relative;
        text-align: center;
    }

    .section_banner .container {
        top: 34%;
        position: relative;
    }

    .section_banner_details {
        border: 4px solid #f8f9fa27;
        color: #fff;
        padding: 10% 0%;
        width: 90%;
        margin: 0% 5%;
    }

    .section_banner_details h4 {
        font-size: 14px;
    }


    .banner__content h3 {
        font-size: 22px;
    }

    .banner__content p {
        font-size: 14px;
        width: 90%;
        margin: 5% 5%;
        opacity: .8 !important;
    }

    .carousel-control-prev {
        display: none;
    }

    .carousel-control-next {
        display: none;
    }

    .btn-life {
        font-size: 11px !important;
        padding: 3% 8% !important;
    }

    .banner {
        height: 500px;
    }

    .carousel-item {
        width: 100%;
        height: 500px !important;
    }

    .bg1 {
        background-size: cover !important;
        background-position: -320px 0px;
        background-color: rgba(0, 0, 0, 0.6) !important;
    }

    .bg2 {
        background-size: cover !important;
        background-position: -590px 0px;
        background-color: rgba(0, 0, 0, 0.7) !important;
    }

    .bg3 {
        background-size: cover !important;
        background-position: -500px 0px;
        background-color: rgba(0, 0, 0, 0.8) !important;
    }


    /*about*/

    .about {
        height: 1700px;
    }

    .about .container {
        margin-top: 15% !important;
    }

    .about .container .h3 {
        font-size: 25px;
    }

    .about_write_up h6,
    .about__goal h6 {
        font-size: 17px;
        margin-bottom: 5%;
    }

    .about_write_up p {
        font-size: 14px;
        line-height: 1.5rem;
    }

    .about__goal {
        margin-top: 0%;
    }

    .about__goal__details {
        padding: 2% 5% !important;
        margin-bottom: 4% !important;
        margin-top: 4%;
    }

    .about__goal__details i {
        margin-top: 5%;
    }

    /*latest causes*/

    .causes {
        height: 2350px !important;
    }

    .causes .container .h3 {
        font-size: 20px;
    }

    .causes__box {
        margin-top: 5% !important;
        margin-bottom: 8%;
        height: 640px !important;
    }

    .causes__box img {
        border-radius: 10px;
    }

    .causes__box h6 {
        font-size: 14px !important;
    }

    .fill h5 {
        font-size: 14px !important;
    }

    .progress {
        height: 15px !important;
    }


    /*counter*/
    .counter_area {
        margin: 0% 5%;
        width: 90%;
        height: 850px !important;

    }

    /*help*/

    .help {
        margin-top: 20% !important;
        height: 1300px !important;
    }

    .help .container h3 {
        text-align: center;
        margin-bottom: 15% !important;
        font-size: 20px !important;
    }

    .help_boxes i {
        margin-top: -3% !important;
    }

    .help__img {
        height: 400px !important;
    }

    .help_boxes {
        margin-top: 7% !important;
        height: 150px !important;
    }



    /*events*/

    .events {
        border: 1px solid #fff;
        height: 3750px !important;
        padding: 5%;
        margin-top: 20%;
    }

    .events .container h3 {
        text-align: center;
        margin-bottom: 8%;
        margin-bottom: 15% !important;
        font-size: 20px !important;
    }

    .event__box {
        height: 550px !important;
    }

    /*gallery*/
    .gallery {
        height: 330px !important;
    }

    .gallery .container h3 {
        text-align: center;
        margin-bottom: 5%;
        font-size: 20px !important;
    }

    .form {
        border: 2px solid #17a3b84e;
        width: 90% !important;
        margin: 10% 5% !important;
        padding: 5% 6%;
        box-shadow: 2px 1px 5px 5px #17a3b84e;
        border-radius: 10px;
    }

}




/* =============576px to 676px=============== */

@media (min-width: 576px) and (max-width: 676px) {
    .banner__item {
        width: 100%;
        margin: 30% 0%;
        border: none;
    }

    .banner__content {
        width: 90%;
        margin: 30% 5% 0% 5%;
    }

    .banner__content h3 {
        font-size: 22px;
    }

    .section_banner {
        height: 570px;
        margin-top: -19%;
    }

    .bg_about {
        background: url('images/slider/slider-2.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -720px -100px;
    }

    .bg_g {
        background: url('images/slider/slider-3.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -500px 0px;
    }

    .bg_d {
        background: url('images/slider/slider-4.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -220px -130px;
    }

    .method {
        border: 1px solid #17a3b84e;
        box-shadow: 2px 1px 5px 5px #17a3b84e;
        height: 300px;
        width: 90% !important;
        background: #fff;
        margin: -20% 5% 0% 5% !important;
        padding: 2% 5%;
        z-index: 22222;
        position: relative;
        text-align: center;
    }

    .section_banner .container {
        top: 39%;
        position: relative;
    }

    .section_banner_details {
        border: 4px solid #f8f9fa27;
        color: #fff;
        padding: 10% 0%;
        width: 90%;
        margin: 0% 5%;
    }

    .section_banner_details h4 {
        font-size: 17px;
    }

    .banner__content p {
        font-size: 14px;
        width: 90%;
        margin: 5% 5%;
        opacity: .8 !important;
    }

    .carousel-control-prev {
        display: none;
    }

    .carousel-control-next {
        display: none;
    }

    .btn-life {
        font-size: 11px !important;
        padding: 3% 8% !important;
    }

    .banner {
        height: 500px;
    }

    .carousel-item {
        width: 100%;
        height: 500px !important;
    }

    .bg1 {
        background-size: cover !important;
        background-position: -320px 0px;
        background-color: rgba(0, 0, 0, 0.6) !important;
    }

    .bg2 {
        background-size: cover !important;
        background-position: -590px 0px;
        background-color: rgba(0, 0, 0, 0.7) !important;
    }

    .bg3 {
        background-size: cover !important;
        background-position: -500px 0px;
        background-color: rgba(0, 0, 0, 0.8) !important;
    }


    /*about*/

    .about {
        height: 1700px;
    }

    .about .container {
        margin-top: 15% !important;
    }

    .about .container .h3 {
        font-size: 25px;
    }

    .about_write_up h6,
    .about__goal h6 {
        font-size: 17px;
        margin-bottom: 5%;
    }

    .about_write_up p {
        font-size: 14px;
        line-height: 1.5rem;
    }

    .about__goal {
        margin-top: 0%;
    }

    .about__goal__details {
        padding: 2% 5% !important;
        margin-bottom: 4% !important;
        margin-top: 4%;
    }

    .about__goal__details i {
        margin-top: 5%;
    }

    /*latest causes*/

    .causes {
        height: 2350px !important;
    }

    .causes .container .h3 {
        font-size: 20px;
    }

    .causes__box {
        margin-top: 5% !important;
        margin-bottom: 8%;
        height: 640px !important;
    }

    .causes__box img {
        border-radius: 10px;
    }

    .causes__box h6 {
        font-size: 14px !important;
    }

    .fill h5 {
        font-size: 14px !important;
    }

    .progress {
        height: 15px !important;
    }


    /*counter*/
    .counter_area {
        margin: 0% 5%;
        width: 90%;
        height: 890px !important;

    }

    /*help*/

    .help {
        margin-top: 20% !important;
        height: 1300px !important;
    }

    .help .container h3 {
        text-align: center;
        margin-bottom: 15% !important;
        font-size: 20px !important;
    }

    .help_boxes i {
        margin-top: -3% !important;
    }

    .help__img {
        height: 400px !important;
    }

    .help_boxes {
        margin-top: 7% !important;
        height: 150px !important;
    }



    /*events*/

    .events {
        border: 1px solid #fff;
        height: 3950px !important;
        padding: 5%;
        margin-top: 20%;
    }

    .events .container h3 {
        text-align: center;
        margin-bottom: 8%;
        margin-bottom: 15% !important;
        font-size: 20px !important;
    }

    .event__box {
        height: 580px !important;
    }

    .event__box h5 {
        font-size: 16px !important;
    }

    /*gallery*/
    .gallery {
        height: 330px !important;
    }

    .gallery .container h3 {
        text-align: center;
        margin-bottom: 5%;
        font-size: 20px !important;
    }

    .form {
        border: 2px solid #17a3b84e;
        width: 90% !important;
        margin: 10% 5% !important;
        padding: 5% 6%;
        box-shadow: 2px 1px 5px 5px #17a3b84e;
        border-radius: 10px;
    }

}








/* =============677 to 767px=============== */

@media (min-width: 677px) and (max-width: 767px) {
    .banner__item {
        width: 100%;
        margin: 30% 0%;
        border: none;
    }

    .banner__content {
        width: 90%;
        margin: -11% 5% 0% 5% !important;
    }

    .banner__content h3 {
        font-size: 26px;
    }

    .banner__content p {
        font-size: 17px;
        width: 90%;
        margin: 5% 5%;
        opacity: .8 !important;
    }

    .section_banner {
        height: 570px;
        margin-top: -19%;
    }

    .bg_about {
        background: url('images/slider/slider-2.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -720px -100px;
    }

    .bg_g {
        background: url('images/slider/slider-3.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -500px 0px;
    }

    .bg_d {
        background: url('images/slider/slider-4.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -220px -130px;
    }

    .method {
        border: 1px solid #17a3b84e;
        box-shadow: 2px 1px 5px 5px #17a3b84e;
        height: 300px;
        width: 90% !important;
        background: #fff;
        margin: -20% 5% 0% 5% !important;
        padding: 2% 5%;
        z-index: 22222;
        position: relative;
        text-align: center;
    }

    .section_banner .container {
        top: 39%;
        position: relative;
    }

    .section_banner_details {
        border: 4px solid #f8f9fa27;
        color: #fff;
        padding: 10% 0%;
        width: 90%;
        margin: 0% 5%;
    }

    .section_banner_details h4 {
        font-size: 17px;
    }

    .carousel-control-prev {
        display: none;
    }

    .carousel-control-next {
        display: none;
    }

    .btn-life {
        font-size: 15px !important;
        padding: 3% 8% !important;
    }

    .banner {
        height: 500px;
    }

    .carousel-item {
        width: 100%;
        height: 500px !important;
    }

    .bg1 {
        background-size: cover !important;
        background-position: -320px 0px;
        background-color: rgba(0, 0, 0, 0.6) !important;
    }

    .bg2 {
        background-size: cover !important;
        background-position: -590px 0px;
        background-color: rgba(0, 0, 0, 0.7) !important;
    }

    .bg3 {
        background-size: cover !important;
        background-position: -500px 0px;
        background-color: rgba(0, 0, 0, 0.8) !important;
    }


    /*about*/

    .about {
        height: 1850px;
    }

    .about .container {
        margin-top: 15% !important;
    }

    .about .container .h3 {
        font-size: 25px;
    }

    .about_write_up h6,
    .about__goal h6 {
        font-size: 17px;
        margin-bottom: 5%;
    }

    .about_write_up p {
        font-size: 18px;
        line-height: 2rem;
    }

    .about__goal {
        margin-top: 0%;
    }

    .about__goal__details {
        padding: 2% 5% !important;
        margin-bottom: 4% !important;
        margin-top: 4%;
    }

    .about__goal__details i {
        margin-top: 5%;
    }

    /*latest causes*/

    .causes {
        height: 2350px !important;
    }

    .causes .container .h3 {
        font-size: 20px;
    }

    .causes__box {
        margin-top: 5% !important;
        margin-bottom: 8%;
        height: 640px !important;
    }

    .causes__box img {
        border-radius: 10px;
    }

    .causes__box h6 {
        font-size: 14px !important;
    }

    .fill h5 {
        font-size: 14px !important;
    }

    .progress {
        height: 15px !important;
    }


    /*counter*/
    .counter_area {
        margin: 0% 5%;
        width: 90%;
        height: 910px !important;

    }

    /*help*/

    .help {
        margin-top: 20% !important;
        height: 1300px !important;
    }

    .help .container h3 {
        text-align: center;
        margin-bottom: 15% !important;
        font-size: 20px !important;
    }

    .help_boxes i {
        margin-top: -3% !important;
    }

    .help__img {
        height: 400px !important;
    }

    .help_boxes {
        margin-top: 7% !important;
        height: 150px !important;
    }



    /*events*/

    .events {
        border: 1px solid #fff;
        height: 3950px !important;
        padding: 5%;
        margin-top: 20%;
    }

    .events .container h3 {
        text-align: center;
        margin-bottom: 8%;
        margin-bottom: 15% !important;
        font-size: 20px !important;
    }

    .event__box {
        height: 580px !important;
    }

    .event__box h5 {
        font-size: 16px !important;
    }

    /*gallery*/
    .gallery {
        height: 330px !important;
    }

    .gallery .container h3 {
        text-align: center;
        margin-bottom: 5%;
        font-size: 20px !important;
    }

    .form {
        border: 2px solid #17a3b84e;
        width: 90% !important;
        margin: 10% 5% !important;
        padding: 5% 6%;
        box-shadow: 2px 1px 5px 5px #17a3b84e;
        border-radius: 10px;
    }

}






/* =============767 to 991px=============== */

@media (min-width: 767px) and (max-width: 991px) {
    .banner__item {
        width: 70%;
        margin: 10% 15%;
        height: 300px;

    }

    .banner__content {
        width: 90%;
        margin: 4% 5% 0% 5% !important;
    }

    .banner__content h3 {
        font-size: 26px;
    }

    .banner__content p {
        font-size: 17px;
        width: 90%;
        margin: 5% 5%;
        opacity: .8 !important;
    }

    .section_banner {
        height: 570px;
        margin-top: -19%;
    }

    .bg_about {
        background: url('images/slider/slider-2.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -720px -100px;
    }

    .bg_g {
        background: url('images/slider/slider-3.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: -500px 0px;
    }

    .bg_d {
        background: url('images/slider/slider-4.jpg');
        background-color: rgba(0, 0, 0, 0.55);
        background-blend-mode: overlay;
        background-attachment: fixed;
        background-position: 0px -130px;
    }

    .method {
        border: 1px solid #17a3b84e;
        box-shadow: 2px 1px 5px 5px #17a3b84e;
        height: 300px;
        width: 90% !important;
        background: #fff;
        margin: -20% 5% 0% 5% !important;
        padding: 2% 5%;
        z-index: 22222;
        position: relative;
        text-align: center;
    }

    .section_banner .container {
        top: 39%;
        position: relative;
    }

    .section_banner_details {
        border: 4px solid #f8f9fa27;
        color: #fff;
        padding: 10% 0%;
        width: 90%;
        margin: 0% 5%;
    }

    .section_banner_details h4 {
        font-size: 17px;
    }



    .btn-life {
        font-size: 15px !important;
        padding: 3% 8% !important;
    }

    .banner {
        height: 500px;
    }

    .carousel-item {
        width: 100%;
        height: 500px !important;
    }



    /*about*/

    .about {
        height: 1450px;
    }

    .about .container {
        margin-top: 15% !important;
    }

    .about .container .h3 {
        font-size: 25px;
    }

    .about_write_up h6,
    .about__goal h6 {
        font-size: 17px;
        margin-bottom: 5%;
    }

    .about_write_up p {
        font-size: 18px;
        line-height: 2rem;
        margin-bottom: 5%;
    }



    .about__goal {
        margin-top: 0%;
    }

    .about__goal__details {
        padding: 2% 5% !important;
        margin-bottom: 4% !important;
        margin-top: 4%;
    }

    .about__goal__details i {
        margin-top: 5%;
    }

    /*latest causes*/

    .causes {
        height: 1150px !important;
    }

    .causes .container .h3 {
        font-size: 20px;
    }

    .causes__box {
        margin-top: 5% !important;
        margin-bottom: 8%;
        height: 440px !important;
    }

    .big {
        display: block;
    }

    .causes__box img {
        border-radius: 10px;
    }

    .causes__box h6 {
        font-size: 14px !important;
    }

    .fill h5 {
        font-size: 14px !important;
    }

    .progress {
        height: 15px !important;
    }


    /*counter*/
    .counter_area {
        margin: 0% 5%;
        width: 90%;
        height: 390px !important;

    }

    /*help*/

    .help {
        margin-top: 20% !important;
        height: 1100px !important;
    }

    .help .container h3 {
        text-align: center;
        margin-bottom: 15% !important;
        font-size: 20px !important;
    }

    .help_boxes i {
        margin-top: 3% !important;
    }

    .help__img {
        height: 400px !important;
        margin-bottom: 5%;
    }

    .help_boxes {
        margin-top: 7% !important;
        height: 140px !important;
    }



    /*events*/

    .events {
        border: 1px solid #fff;
        height: 1250px !important;
        padding: 5%;
        margin-top: 5%;
    }

    .events .container h3 {
        text-align: center;
        margin-bottom: 8%;
        margin-bottom: 15% !important;
        font-size: 20px !important;
    }

    .event__box {
        height: 400px !important;
    }

    .event__box h5 {
        font-size: 16px !important;
    }

    /*gallery*/
    .gallery {
        height: 330px !important;
    }

    .gallery .container h3 {
        text-align: center;
        margin-bottom: 5%;
        font-size: 20px !important;
    }

}
</style>