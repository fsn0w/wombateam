<?php
/*
 * Template Name: Poop Collector
 *
 */

get_header();
?>

<div id="content" class="relative site-content poo-collector pb-12 lg:pb-40 lg:pt-36">

<!-- Poo Collector Header -->

    <div class="mx-auto container flex mb-0 lg:mb-28 mt-20">
        <div class="hidden lg:block bg-no-repeat bg-left-top"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/pooemoji.png" width="520" class="block -ml-16"/></div>
        <div>
            <img src="<?=get_stylesheet_directory_uri()?>/assets/img/pooemoji.png" width="171" class="mx-auto mb-4 mt-8 lg:hidden"/>
            <h1>The Poop Collector</h1>
            <p class="mt-10">
                Collect your wombat’s WPOO (tokens) and help make their burrows a cleaner, better smelling space.
            </p>
            <div class="text-center lg:text-left">
                <a href="#" target="_blank" class="btn1 mt-2 py-4 px-4 text-xl lg:py-6 lg:px-8 lg:text-4xl lg:mt-10">launch the wpoo collector app</a>
            </div>
        </div>
    </div>

<!-- /Poo Collector Header -->

<div class="divider d-none md:d-block my-14"></div>

<!-- How does it work? -->
    <div class="mx-auto container pt-0 lg:pt-18">
        <div class="w-full pt-0 md:pt-15 mb-[65px] md:mb-[100px] bg-none md:bg-no-repeat md:bg-left-top md:bg-img-poos">
            <h2 class="text-center">How does it work?</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16 lg:gap-10 mb-10 lg:mb-16">
           <div class="relative flex flex-col items-center border-solid border-4 border-light-brown rounded-[55px] pt-[65px] md:pt-[114px] pb-[30px] px-[34px] ">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/img/poo-collector/1.png"
                class="absolute rounded-full w-[80px] md:w-[132px] top-[-40px] md:top-[-66px]" alt="">
                <span class="absolute left-[23px] top-[23px] font-comet md:static text-3xl md:text-6xl">1</span>
                <p class="text-center">Launch the WPOO collector app</p>
           </div>
           <div class="relative flex flex-col items-center border-solid border-4 border-light-brown rounded-[55px] pt-[65px] md:pt-[114px] pb-[30px] px-[34px] ">
                           <img src="<?=get_stylesheet_directory_uri()?>/assets/img/poo-collector/2.png"
                           class="absolute rounded-full w-[80px] md:w-[132px] top-[-40px] md:top-[-66px]" alt="">
                           <span class="absolute left-[23px] top-[23px] font-comet md:static text-3xl md:text-6xl">2</span>
                           <p class="text-center">Connect your wallet and make sure you have configured Polygon on your MetaMask</p>
                      </div>
           <div class="relative flex flex-col items-center border-solid border-4 border-light-brown rounded-[55px] pt-[65px] md:pt-[114px] pb-[30px] px-[34px] ">
                           <img src="<?=get_stylesheet_directory_uri()?>/assets/img/poo-collector/3.png"
                           class="absolute rounded-full w-[80px] md:w-[132px] top-[-40px] md:top-[-66px]" alt="">
                           <span class="absolute left-[23px] top-[23px] font-comet md:static text-3xl md:text-6xl">3</span>
                           <p class="text-center whitespace-pre-wrap">Click the Collect button.
                           You’ll get to enjoy the tokens and your wombat will get a cleaner burrow.</p>
                      </div>
           <div class="relative flex flex-col items-center border-solid border-4 border-light-brown rounded-[55px] pt-[65px] md:pt-[114px] pb-[30px] px-[34px] ">
                           <img src="<?=get_stylesheet_directory_uri()?>/assets/img/poo-collector/4.png"
                           class="absolute rounded-full w-[80px] md:w-[132px] top-[-40px] md:top-[-66px]" alt="">
                           <span class="absolute left-[23px] top-[23px] font-comet md:static text-3xl md:text-6xl">4</span>
                           <p class="font-comet font-bold mb-3">Coming soon...</p>
                           <p class="text-center">Stake your tokens and get rewarded with WDAO governance tokens</p>
           </div>
        </div>
    </div>
<!-- /How does it work -->
<div class="divider d-none md:d-block my-14"></div>

<!-- Fine prints -->
    <div class="mx-auto container pt-0 lg:pt-18">
        <div class="flex flex-col items-center md:flex-row">
            <img src="<?=get_stylesheet_directory_uri()?>/assets/img/poo-collector/butpoop.png"
            class="ml-0 md:mr-[50px] max-w-[350px]">
            <div>
              <h1>The Poop Collector</h1>
              <p>According to WHO (Wombat Health Organization) guidelines, WPOOs need to <span class="font-bold">be collected at least once per week</span>, and are subjected to the following WPOO timeline:</p>
            </div>
        </div>
        <div class="flex flex-col w-full md:w-11/12 timeline">

            <div class="timeline-block flex">
                <div class="block-left w-5/12 md:w-2/5 pr-5">
                    <span class="block text-[25px] md:text-[40px] font-comet leading-normal text-menu">Day 1</span>
                    <span class="block mt-2 md:mt-0 whitespace-pre-wrap lg:whitespace-normal text-primary font-normal">Fresh
                    start</span>
                </div>

                <div class="block-right w-7/12 md:w-1/2 pl-5 md:pl-10">
                    <p class="mb-0">Ah! a fresh start. Every day the wombats will poop the max. WPOOs according to their poopabily.</p>
                </div>
            </div>

        </div>
        <picture>
            <source srcset="<?=get_stylesheet_directory_uri()?>/assets/img/poo-collector/chart-desktop.png"
                media="(min-width: 640px)">
            <img class="w-full" src="<?=get_stylesheet_directory_uri()?>/assets/img/poo-collector/chart-mobile.png">
        </picture>
        <div class="text-center mt-12 lg:mt-20">
           <a href="#" target="_blank" class="btn1 mt-2 w-full md:w-auto py-4 px-4 text-xl lg:py-6 lg:px-8 lg:text-4xl lg:mt-10">launch the wpoo collector app</a>
        </div>
    </div>
<!-- /Fine prints -->
</div>

<?php

get_footer();
