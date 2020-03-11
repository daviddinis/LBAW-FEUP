<?php

include_once('tpl_common.php');

drawHTMlHeader();
?>


<body style="margin:0px; padding: 0px; font-family: 'Raleway', sans-serif; " class="container-fluid vh-100">
    <?php
    drawNavBar();
    drawNavBarTop();
    ?>


    <main id="main" class="ml-lg-auto col-lg-10 text-center h-100 pr-5">
        <div class="container-fluid py-2 my-3 pr-lg-5 text-left bg-white ">
            <div class="blockquote py-2 pr-lg-5">
                <div class="d-flex">
                    <div class="flex-column pl-5 pr-3 justify-content-center d-none d-md-flex ">
                        <img src="assets/david.jpg" class="rounded-img " alt="User Photo" />
                        <span class="text-center ">David Dinis</span>
                    </div>
                    <div class="container-fluid bg-light border">
                        <h2 class="font-weight-bolder pl-lg-2 ">
                            How do I wash my yellow jacket?
                            <a href="#" class="small text-secondary">
                                <i class="fa fa-flag "></i> Report</a>
                        </h2>
                        <p class="pl-lg-2 pt-lg-2">
                            SO, I have this yellow jacket and I don't know how to wash it. How do I wash
                            it? It is yellow. Please help.
                            <br />
                            EDIT: The jacket is yellow
                        </p>
                        <span class="tag"> #Laundry</span> <br />
                        <span class="text-left pt-lg-3">
                            Asked on 16, June 2015
                        </span>
                    </div>
                </div>
            </div>
            <!-- REPLY -->
            <div class="blockquote py-lg-2 px-lg-5 d-flex flex-column">
                <div class="d-flex  px-lg-5">
                    <div class="d-flex flex-column px-4">
                        <i class=" fa fa-angle-up fa-2x goodGreen"></i>
                        <i class="">42</i>
                        <i class=" fa fa-angle-down fa-2x badPurple "></i>
                    </div>
                    <div class="border d-flex p-3 w-100">
                        <div class="d-flex flex-column align-items-center pr-4">
                            <img src="assets/henrique.jpg" class="rounded-img" alt="User Photo" />
                            <span class="text-center">Henrique Freitas</span>
                        </div>
                        <div>
                            <span class="small">
                                <span class="font-weight-bolder">4253 points </span>
                                | Member since October 2010 | Posted 15 days ago |
                                <a href="#" class="small text-secondary  text-nowrap">
                                    <i class="fa fa-flag "></i>
                                    Report
                                </a>
                                <span class="px-lg-5 font-weight-bold text-danger text-nowrap">
                                    <i class="fa fa-heart "></i> Best Answer!</span>
                            </span>
                            <p class="pt-lg-3 pl-lg-2 ">
                                In order to wash your yellow jacket you need to use special yellow jacket
                                washing soap In order to wash your yellow jacket you need to use special
                                yellow jacket washing soap In order to wash your yellow jacket you need to
                                use special yellow jacket washing soap In order to wash your yellow jacket
                                you need to use special yellow jacket
                            </p>
                        </div>
                    </div>
                </div>
                <!-- COMMENT -->
                <div class="d-flex pt-2 justify-content-center px-lg-5">
                    <div class="d-flex flex-column align-items-center pr-3">
                        <img src="assets/rita.jpg" class="small rounded-img" alt="User Photo" />
                    </div>
                    <div class="border w-75">
                        <span class=" small px-3">
                            <span class="font-weight-bolder">3443 points</span>
                            | Member since May 2015 | Posted 15 days ago |
                            <a href="#" class="small text-secondary">
                                <i class="fa fa-flag "></i>
                                Report
                            </a>
                        </span>
                        <p class="py-lg-2 px-lg-2 small">
                            Indeed there is a special soap used for yellow jackets! Best answer for me!
                        </p>
                    </div>
                </div>
            </div>
            <div class="blockquote py-lg-2 px-lg-5 d-flex flex-column">
                <div class="d-flex px-lg-5">
                    <div class="d-flex flex-column px-4">
                        <i class=" fa fa-angle-up fa-2x goodGreen"></i>
                        <i class="">100</i>
                        <i class=" fa fa-angle-down fa-2x  badPurple"></i>
                    </div>
                    <div class="border d-flex p-3 w-100">
                        <div class="d-flex flex-column align-items-center pr-4">
                            <img src="assets/jose.jpg" class="rounded-img" alt="User Photo" />
                            <span class="text-center">José Gomes</span>
                        </div>
                        <div>
                            <span class="small">
                                <span class="font-weight-bolder">4253 points </span>
                                | Member since May 2015 | Posted 1 month ago |
                                <a href="#" class="small text-secondary">
                                    <i class="fa fa-flag "></i>
                                    Report
                                </a>
                            </span>
                            <p class="pt-lg-3 pl-lg-2 ">
                                Soak it in rice... that might work...
                            </p>
                        </div>
                    </div>
                </div>
                <!-- COMMENT -->
                <div class="d-flex pt-2 justify-content-center px-lg-5">
                    <div class="d-flex flex-column align-items-center pr-3">
                        <img src="assets/rita.jpg" class="small rounded-img" alt="User Photo" />
                    </div>
                    <div class="border w-75">
                        <span class=" small px-3">
                            <span class="font-weight-bolder">3443 points</span>
                            | Member since May 2015 | Posted 15 days ago |
                            <a href="#" class="small text-secondary">
                                <i class="fa fa-flag "></i>
                                Report
                            </a>
                        </span>
                        <p class="py-lg-2 px-lg-2 small">
                            Indeed there is a special soap used for yellow jackets! Best answer for me!
                        </p>
                    </div>
                </div>
                <!-- COMMENT -->
                <div class="d-flex pt-2 justify-content-center px-lg-5">
                    <div class="d-flex flex-column align-items-center pr-3">
                        <img src="assets/henrique.jpg" class="small rounded-img" alt="User Photo" />
                    </div>
                    <div class="border w-75">
                        <span class=" small px-3">
                            <span class="font-weight-bolder">3443 points</span>
                            | Member since October 2010 | Posted today |
                            <a href="#" class="small text-secondary">
                                <i class="fa fa-flag "></i>
                                Report
                            </a>
                        </span>
                        <p class="py-lg-2 px-lg-2 small">
                            I like trainsI like trainsI like trainsI like trainsI like trainsI like
                            trainsI like trainsI like trainsI like trainsI like trainsI like trainsI like
                            trainsI like trainsI like trainsI like trainsI like trainsI like trainsI like
                            trainsI like trainsI like trainsI like trainsI like trainsI like trainsI like
                            trainsI like trainsI like trainsI like trainsI like trains
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>