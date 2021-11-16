<?php
/*
 * Template Name: Main
 *
 */

get_header();
?>

<div id="content" class="relative site-content pb-12 lg:pb-40">

<!-- Animation -->

<div class="w-full mb-24 pt-20 bg-bgmenu overflow-hidden lg:pt-0">
    <div class="relative z-10 bg-cover" style="background-image:url('<?=get_stylesheet_directory_uri()?>/assets/img/main-animation/header_bg_front.png')">
        <div id="holes" class="absolute z-10 top-1/3 h-2/5 w-full">
            <div id="hole7" class="hole w-[13%] min-h-[50%] bottom-[55%] left-[68%]"></div>
            <div id="hole6" class="hole w-[13%] min-h-[50%] bottom-[60%] left-[33%]"></div>
            <div id="hole5" class="hole w-[11%] min-h-[50%] bottom-[70%] left-[55%]"></div>
            <div id="hole4" class="hole w-[10%] min-h-[50%] bottom-[60%] left-[14%]"></div>
            <div id="hole3" class="hole w-[17%] min-h-[63%] bottom-[28%] left-[69%]"></div>
            <div id="hole2" class="hole w-[17%] min-h-[63%] bottom-[23%] left-[39%]">
                <div class="sign-animation">
                    <img class="sign obj-hide" id="wombat_sign" src="<?=get_stylesheet_directory_uri()?>/assets/img/main-animation/sign_optional.png" alt="Sign">
                </div>
            </div>
            <div id="hole1" class="hole w-[17%] h-[63%] bottom-[28%] left-[18%]"></div>
        </div>
        <img class="relative opacity-0 z-0" src="<?=get_stylesheet_directory_uri()?>/assets/img/main-animation/header_bg_front.png" alt="ground">
    </div>
    <img class="absolute top-20 left-0 animate-pulse lg:top-0" src="<?=get_stylesheet_directory_uri()?>/assets/img/main-animation/clouds.png" alt="clouds">
</div>


<!-- /Animation -->

<!-- Meet the WOMBATEAM -->

    <div class="mx-auto container flex mb-0 lg:mb-28">
        <div class="pt-20 hidden lg:block"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/MeetWombats1.png" width="520" class="block -ml-16"/></div>
        <div class="w-full relative lg:w-4/6">
            <img src="<?=get_stylesheet_directory_uri()?>/assets/img/MeetWombats1.png" class="block absolute -right-20 -top-20 scale-x-[-1] w-44 lg:hidden"/>
            <h1>Meet the <br/><span class="title-logo"><span>Wombateam</span></span></h1>
                <p class="mt-10">
                    The WombaTeam is a group of XX,XXX,XXX unique collectible Wombat NFTs that are FULL OF SHIT. 
                </p>
                <p class="mt-6 lg:mt-10">
                    Wait a minute!<br>
                    Did we just write shit?<br>
                    Holly crap, we did. <br>
                    Why? because they<br>
                    give a shit! Literally.
                </p>
                <p class="mt-6 lg:mt-10">
                    Read our roadmap below to make some sense out of this mambo jambo.
                </p>
                <p class="mt-6 text-center lg:text-left lg:mt-20">
                    for news and launch alerts:
                </p>
            <div class="text-center lg:text-left"><a href="" class="btn1 mt-2 py-4 px-4 text-xl inactive lg:py-6 lg:px-8 lg:text-4xl lg:mt-10">discord channel coming soon</a></div>
        </div>
    </div>

<!-- /Meet the WOMBATEAM -->

<!-- Roadmap -->

<div class="mx-auto container flex flex-col lg:flex-row">
        <div class="pt-10 lg:pt-20 lg:w-4/12">
            <h2 class="text-center lg:text-left">Introducing<br> Our Roadmap</h2>
        </div>
        <div class="w-full relative lg:w-8/12">
            <img src="<?=get_stylesheet_directory_uri()?>/assets/img/roadmap_drums.png" width="679" class="mx-auto" alt="Introducing Our Roadmap" />
        </div>
</div>
    
<!-- /Meet the Roadmap -->

<div class="divider my-14"></div>

<!-- Stage 1 -->

<div class="mx-auto container flex flex-col lg:flex-row">
        <div class="text-center px-6 lg:px-0 lg:w-4/12">
            <h2 class="mb-10 uppercase lg:normal-case">Stage 1</h2>
            <img src="<?=get_stylesheet_directory_uri()?>/assets/img/stage1_wombateam.png" width="323" alt="Stage 1" class="mx-auto" />
        </div>
        <div class="w-full pt-6 px-6 lg:px-0 lg:pt-0 lg:w-8/12">
            <p>Get your hands on one<br>
(or more) unique digital WombaTeam collectibles living on the Ethereum blockchain (out of 10,000<br>
in the series).<br><br>

Minting a Wombat costs<br>
0.1 ETH (+gas fee) and each one will have a different combination of traits (different backgrounds, facial expressions, cloths etc.) - some more rare than others.<br><br>

Not sure if you noticed it by now, but we love Wombats. <br><strong>That’s why we will be donating X% of the sales for Wombat related charities and research</strong><br> (This will be decided by the DAO, see stage 3). 
            </p>
            <div class="-mx-8 text-center lg:mx-0 lg:text-left">
                <p class="mt-16 text-center lg:text-left lg:text-3xl">for news and launch alerts:</p>
                <a href="" class="btn1 mt-2 py-4 px-4 text-xl inactive lg:py-6 lg:px-8 lg:text-4xl lg:mt-10">discord channel coming soon</a>
            </div>
        </div>
</div>
    
<!-- /Stage 1 -->

<div class="divider my-20"></div>

<!-- Stage 2 -->

<div class="mx-auto container flex flex-col lg:flex-row">
        <div class="text-center px-6 lg:px-0 lg:w-4/12">
            <h2 class="mb-10 uppercase lg:normal-case">Stage 2</h2>
            <img src="<?=get_stylesheet_directory_uri()?>/assets/img/stage2_poopdrop.png" width="321" alt="Stage 2" class="mx-auto" />
        </div>
        <div class="w-full px-6 lg:px-0 lg:w-8/12">
            <p>
                <strong>Once we hit X% of sales, your Wombat will start pooping WPOO tokens and trust us, it's going to be an absolute shit show.</strong><br><br>

These lovely marsupial creatures poop up to 80 cubes per day (yes - they drop that many square-shaped turds each day, magical, isn't it?)<br><br>

The number of WoPoo tokens your wombat will produce daily will depend on its rarity. The bigger the rarity factor is - the more tokens you will get.<br><br>

If we can guess what's going through your mind while reading it, it's probably something like "holy shit"!

            </p>
        </div>
</div>
    
<!-- /Stage 2 -->

<div class="divider my-20"></div>

<!-- Stage 3 -->

<div class="mx-auto container flex flex-col lg:flex-row">
        <div class="text-center px-6 lg:px-0 lg:w-4/12">
            <h2 class="mb-4 uppercase lg:mb-20 lg:normal-case">Stage 3</h2>
            <img src="<?=get_stylesheet_directory_uri()?>/assets/img/stage3_fertilizer.png" width="313" alt="Stage 3" class="mx-auto mb-4" />
        </div>
        <div class="w-full px-6 lg:px-0 lg:w-8/12">
            <p>
                <strong>This is where shit happens! </strong><br>
                Using your WPOO tokens you can start your farming activity (and it's a known fact that animals' droppings make a good fertilizer that increases the growth and productivity of farms).<br><br>
A culmination of your farming efforts - the harvest will be delivered to you in the form of WDAO tokens, which are the Wombat DAO governing currency.
We shit you not!<br><br>

As a DAO member, you‘ll get a chance to participate in additional projects, decide on important things like which Wombat related charity will get our support, the future road map and other (stinky) business decisions.    

            </p>
        </div>
</div>
    
<!-- /Stage 3 -->

<div class="divider my-24"></div>

<!-- Stage 4 -->

<div class="mx-auto container flex flex-col lg:flex-row">
        <div class="text-center px-6 lg:px-0 lg:w-4/12">
            <h2 class="mb-6 uppercase lg:normal-case">Stage 4</h2>
            <img src="<?=get_stylesheet_directory_uri()?>/assets/img/stage4_shitmoney.png" width="313" alt="Stage 4" class="mx-auto mb-4" />
        </div>
        <div class="w-full px-6 lg:px-0 lg:w-8/12 lg:text-center lg:leading-normal">
            Because <span class="lg:block lg:uppercase lg:font-comet lg:text-title">everybody</span> is allowed to <span class="lg:block lg:uppercase lg:font-comet lg:text-title">dream</span> right? ;)
        </div>
</div>
    
<!-- /Stage 4 -->

<div class="divider my-24"></div>

<!-- C2A -->

<div class="mx-auto container flex flex-col lg:flex-row">
        <div class="w-full text-center">
            <strong>Get your shit together!!!</strong><br>join the WombaTeam revolution<br>

            <a href="" class="btn1 mt-10 py-2 px-10 text-xl lg:py-6 lg:px-24 lg:text-5xl ">mint your wombat<br>(aka-WPOO generator)</a>

        </div>
</div>
    
<!-- /C2A -->

<!-- Slider -->

<div class="hidden mx-auto mt-40 lg:flex lg:flex-row">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
      </div>
    </div>
</div>
    
<!-- /Slider -->

<!-- Sneak peak -->

<div class="mx-auto mt-10 container flex flex-col lg:mt-40 lg:flex-row">
        <div class="lg:w-4/12">
        </div>
        <div class="w-full lg:w-8/12">
        <h2 class="mb-10 text-center lg:text-left">Get a sneak peak</h2>

        <!-- Slider Mobile -->

        <div class="-mx-8 mb-8 flex flex-row lg:hidden">
            <div class="swiper mySwiper-mob">
            <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
            </div>
            </div>
        </div>
            
        <!-- /Slider Mobile -->

            <p>We have a very diversified Wombat Team and no one is like the other. <br><br>

Our talented artist created XXX attributs and our algorithm created XX,XXX,XXX variations of them - some are more rare than others (with number 2 being the rarest… #JustSaying). <br><br>

While you don’t know which one you’ll get to mint in advance, you can rest assured it will still be very unique and it will still poop cubes daily<br>(all Wombats do).<br>
</p>
<div class="w-full text-center lg:mt-24"><a href="" class="btn1 mt-10 py-2 px-10 text-xl lg:py-6 lg:px-24 lg:text-5xl ">mint your wombat<br>(aka-WPOO generator)</a></div>
        </div>
</div>
    
<!-- /Sneak peak -->

<div class="divider my-24 lg:hidden"></div>

<!-- Team -->

<div class="mx-auto mt-20 container lg:mt-40">
        <div class="w-full pl-8 lg:pl-0 lg:w-8/12">
        <h2 class="mb-10">The Team behind<br> the <span class="title-logo"><span>Wombateam</span></span></h2>
            <p>Believe it or not, we are all part of the same family, scattered around the world with various skill sets that are being put to the test with this ambitious project.
            <br><br>
            Well, to be honest, there’s one Guy we adopted along the way, but he is like family now.</p>
        </div>
        
        <div class="mt-20 flex flex-col gap-10 lg:flex-row">
            <div class="w-full lg:w-1/2">
                <div class="flex gap-5 mb-5 lg:mb-10 lg:gap-10">
                    <img src="<?=get_stylesheet_directory_uri()?>/assets/img/team/team1.png" alt="The Visionary Dreamer" class="w-1/2">
                    <h3>The Visionary Dreamer</h3>
                </div>
                <p>With deep roots in the blockchain world and a passion for DeFi, he already has a 5-years plan for these cute Wombats and he has some (crazy) ideas for the market they can create.</p>
            </div>
            <div class="w-full lg:w-1/2">
                <div class="flex gap-5 mb-5 lg:mb-10 lg:gap-10">
                    <img src="<?=get_stylesheet_directory_uri()?>/assets/img/team/team2.png" alt="The Adopted Guy" class="w-1/2">
                    <h3>The Adopted Guy</h3>
                </div>
                <p>The true artist in the group.<br> He’s the one breathing life into these adorable creatures.</p>
            </div>
        </div>
        <div class="mt-16 flex flex-col gap-10 lg:flex-row">
            <div class="w-full lg:w-1/2">
                <div class="flex gap-5 mb-5 lg:mb-10 lg:gap-10">
                    <img src="<?=get_stylesheet_directory_uri()?>/assets/img/team/team3.png" alt="The Party Pooper" class="w-1/2">
                    <h3>The<br> Party Pooper</h3>
                </div>
                <p>You all know someone like that.<br>You have him in every group.<br>He’s the one that says “na, it won’t work”, “it’s too complicated” etc. - but don’t worry, our visionary guy is very good at motivating him.</p>
            </div>
            <div class="w-full lg:w-1/2">
                <div class="flex gap-5 mb-5 lg:mb-10 lg:gap-10">
                    <img src="<?=get_stylesheet_directory_uri()?>/assets/img/team/team4.png" alt="And A Few Others" class="w-1/2">
                    <h3>And<br> A Few Others</h3>
                </div>
                <p>The geeks, the wordsmiths, the project managers, the coders - you know, the people that actually make this work.</p>
            </div>
        </div>
</div>
    
<!-- /Team -->

<div class="divider my-24 lg:hidden"></div>

<!-- TL;DR -->

<div class="mx-auto mt-20 container lg:mt-40">

        <h2 class="mb-10 text-center lg:mb-16">TL;DR</h2>

        <div class="flex flex-col gap-10 mb-10 lg:mb-16 lg:flex-row">
            <div class="w-full text-center px-2 lg:w-1/3">
                <div class="svg-circle"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/tl-dr/nft.svg" alt=""></div>
                <p>A series of 10K NFTs that are minted in a fair launch for<br> 0.0X ETH</p>
            </div>
            <div class="w-full text-center px-2 lg:w-1/3">
                <div class="svg-circle"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/tl-dr/drawn.svg" alt=""></div>
                <p>Each one was hand drawn by our artist and algorithmically generated at random from over X unique attributes</p>
            </div>
            <div class="w-full text-center px-2 lg:w-1/3">
                <div class="svg-circle"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/tl-dr/cube.svg" alt=""></div>
                <p>Each wombat unlocks the daily WPOO tokens distribution according to it's rarity<br>(once we hit X% minting)</p>
            </div>
        </div>
        <div class="flex flex-col gap-10 mb-10 lg:mb-16 lg:flex-row">
            <div class="w-full text-center px-2 lg:w-1/3">
                <div class="svg-circle"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/tl-dr/tree.svg" alt=""></div>
                <p>The WPOO tokens can be used for farming </p>
            </div>
            <div class="w-full text-center px-2 lg:w-1/3">
                <div class="svg-circle"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/tl-dr/wombat.svg" alt=""></div>
                <p>Farming activity will grant you with WDAO<br>(our governance tokens)</p>
            </div>
            <div class="w-full text-center px-2 lg:w-1/3">
                <div class="svg-circle"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/tl-dr/wombats.svg" alt=""></div>
                <p>Together we can use the power of (cubic) poo to influence the life of Wombats and WombaTeam holders.</p>
            </div>
        </div>

</div>
    
<!-- /TL;DR -->


</div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3.5,
        spaceBetween: 50,
        centeredSlides: true,
        loop: true,
        loopFillGroupWithBlank: true,
      });

      var swiperMob = new Swiper(".mySwiper-mob", {
        slidesPerView: 1.5,
        spaceBetween: 20,
        centeredSlides: true,
        loop: true,
        loopFillGroupWithBlank: true,
      });
    </script>

<?php

get_footer();