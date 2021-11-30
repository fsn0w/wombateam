<?php
/*
 * Template Name: Main
 *
 */

get_header();
?>

<div id="content" class="relative site-content pb-12 lg:pb-40">

<!-- Animation -->

<div class="w-full mb-6 pt-20 bg-bgmenu overflow-hidden lg:pt-0">
    <div class="relative z-10 bg-cover" style="background-image:url('<?=get_stylesheet_directory_uri()?>/assets/img/main-animation/header_bg_front.png')">
        <div id="holes" class="absolute z-10 top-1/3 h-2/5 w-full">
            <div id="hole7" class="hole w-[13%] min-h-[50%] bottom-[55%] left-[68%] cursor-pointer"></div>
            <div id="hole6" class="hole w-[13%] min-h-[50%] bottom-[60%] left-[33%] cursor-pointer"></div>
            <div id="hole5" class="hole w-[11%] min-h-[50%] bottom-[70%] left-[55%] cursor-pointer"></div>
            <div id="hole4" class="hole w-[10%] min-h-[50%] bottom-[60%] left-[14%] cursor-pointer"></div>
            <div id="hole3" class="hole w-[17%] min-h-[63%] bottom-[28%] left-[69%] cursor-pointer"></div>
            <div id="hole2" class="hole w-[17%] min-h-[63%] bottom-[23%] left-[39%] cursor-pointer">
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

    <div class="mx-auto container flex mb-0 lg:mb-28" id="meet">
        <div class="pt-20 hidden lg:block bg-no-repeat bg-left-top bg-img-5"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/MeetWombats1.png" width="520" class="block -ml-16"/></div>
        <div class="w-full relative lg:w-4/6 bg-no-repeat lg:bg-img-3 lg:bg-right-top">
            <img src="<?=get_stylesheet_directory_uri()?>/assets/img/MeetWombats1.png" class="block absolute -right-20 -top-4 scale-x-[-1] w-44 lg:hidden"/>
            <div class="bg-no-repeat bg-left-top bg-img-5 bg-contain h-10 mb-10 lg:hidden"></div>
            <h1>Meet the <br/><span class="title-logo"><span>Wombateam</span></span></h1> 
                <p class="mt-10">
                The WombaTeam NFTs are NOT your ordinary collectibles. This group of 10K unique wombats gives a shit - literally.
                </p>
                <p class="mt-6 lg:mt-10">
                Each Wombat can poop a number of turds according to its rarity, and we have big plans on turning these pooping machines into an impactful, community-driven financial system. 
                </p>
                <p class="mt-6 lg:mt-10">
                Read <a href="/#roadmap">our roadmap</a> below to learn more.
                </p>
                <p class="mt-6 text-center lg:text-left lg:mt-20">
                    For news and launch alerts:
                </p>
            <div class="text-center lg:text-left"><a href="https://discord.gg/vj7RmZeBnp" target="_blank" class="btn1 mt-2 py-4 px-4 text-xl lg:py-6 lg:px-8 lg:text-4xl lg:mt-10">Join Our Discord Channel</a></div>
        </div>
    </div>

<!-- /Meet the WOMBATEAM -->

<!-- Roadmap -->

<div class="mx-auto container flex flex-col lg:flex-row bg-no-repeat bg-left-bottom lg:bg-img-1" id="roadmap">
        <div class="pt-10 lg:pt-20 lg:w-4/12 bg-no-repeat bg-right-top lg:bg-img-4">
            <h2 class="text-center lg:text-left">Introducing<br> Our Roadmap</h2>
        </div>
        <div class="w-full relative lg:w-8/12">
            <img src="<?=get_stylesheet_directory_uri()?>/assets/img/roadmap_drums_wpoo.png" width="679" class="mx-auto" alt="Introducing Our Roadmap" />
        </div>
</div>
    
<!-- /Meet the Roadmap -->

<div class="divider my-14"></div>

<!-- Stage 1 -->

<div class="mx-auto container flex flex-col lg:flex-row">
        <div class="text-center px-6 bg-no-repeat bg-bottom lg:bg-img-11 lg:px-0 lg:w-4/12">
            <h2 class="mb-10 uppercase lg:normal-case">Stage 1</h2>
            <img src="<?=get_stylesheet_directory_uri()?>/assets/img/stage1_wombateam.png" width="323" alt="Stage 1" class="mx-auto" />
        </div>
        <div class="w-full pt-6 px-6 lg:px-0 lg:pt-0 lg:w-8/12">
            <p>Get your hands on one (or more) of the unique digital WombaTeam collectibles living on the Ethereum blockchain (out of 10,000 in the series).<br><br>

Minting a Wombat costs 0.05 ETH (+ gas fee) and each one will have a different combination of traits (different backgrounds, facial expressions, clothes etc.) - some more rare than others.<br><br>

You've probably noticed it by now, but we love wombats. <strong>That’s why we will be donating 10% of all sales to Wombat-related charities and research</strong> (as per the DAO - see Stage 3)<strong>.</strong> 
            </p>
            <div class="mt-16 text-center bg-no-repeat bg-right-top lg:bg-img-10 lg:mx-0 lg:text-left">
                <a href="/mint/" class="btn1 mt-2 py-4 px-4 text-xl lg:py-6 lg:px-8 lg:text-4xl lg:mt-10 opacity-20">Mint a Wombat</a>
                <p class="mt-8 text-center lg:text-left lg:text-3xl">Launch date will be announced on our <a href="https://t.me/WombaTeam" target="_blank">Telegram</a> & <a href="https://discord.gg/vj7RmZeBnp" target="_blank">Discord</a> channels</p>
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
                Once we hit the P-Day (the exact timing of which is kept secret and will be shared with our allies over encrypted channels), your Wombat will start pooping <strong>WPOO tokens</strong> and trust us, it’s going to be an absolute shitshow.<br><br>

                These adorable marsupials poop up to 80 cubes per day - yes, they really drop that many cube-shaped turds on the daily. Magical, isn't it?!
                <br><br>

                The number of Wpoo tokens your wombat will produce daily will depend on its rarity. The larger the rarity factor, the more tokens you will get.<br><br>

                We know, we know. If we had to guess what you were thinking right now, it'd probably be something along the lines of "holy shit"!

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
                Using your WPOO tokens, you can start your farming activity. After all, animal droppings do make some of the best farm fertiliser.<br><br>
As a culmination of your farming efforts, your harvest will be delivered to you in the form of WDAO tokens, which are the Wombat DAO governing currency.
We shit you not!<br><br>

As a DAO member you‘ll get a chance to participate in additional projects, decide on important things like which Wombat-related charity will get our support, our future road map and other (stinky) business decisions.    
            </p>
            <p class="mt-8"><a href="/faq/">Learn More</a></p>
        </div>
</div>
    
<!-- /Stage 3 -->

<div class="divider my-24"></div>

<!-- Stage 4 -->

<div class="mx-auto relative container flex flex-col lg:flex-row">
        <div class="absolute -left-4 h-20 w-32 bg-img-coins bg-contain bg-no-repeat bg-left-top lg:hidden"></div>
        <div class="absolute -right-20 -bottom-24 h-20 w-32 bg-img-dash bg-contain bg-no-repeat bg-left-top lg:hidden"></div>
        <div class="text-center px-6 lg:px-0 lg:w-4/12">
            <h2 class="mb-6 uppercase lg:normal-case">Stage 4</h2>
            <img src="<?=get_stylesheet_directory_uri()?>/assets/img/stage4_shitmoney.png" width="313" alt="Stage 4" class="mx-auto mb-4" />
        </div>
        <div class="w-full px-6 lg:px-0 lg:w-8/12 bg-no-repeat lg:bg-img-coins lg:bg-right-bottom lg:text-center lg:leading-normal">
            Because <span class="lg:block lg:uppercase lg:font-comet lg:text-title">everybody</span> is allowed to <span class="lg:block lg:uppercase lg:font-comet lg:text-title">dream,</span> right? ;)
        </div>
</div>
    
<!-- /Stage 4 -->

<div class="divider my-24"></div>

<!-- C2A -->

<div class="mx-auto container flex flex-col lg:flex-row">
        <div class="w-full text-center bg-no-repeat bg-left-top lg:bg-img-dash">
            <strong>Get your shit together!</strong><br>Join the WombaTeam revolution<br>

            <a href="https://discord.gg/vj7RmZeBnp" target="_blank" class="btn1 mt-10 py-2 px-10 text-xl lg:py-6 lg:px-24 lg:text-5xl ">Join Our Discord Channel</a>

        </div>
</div>
    
<!-- /C2A -->

<!-- Slider -->

<div class="hidden mx-auto mt-40 lg:flex lg:flex-row">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper"></div>
    </div>
</div>
    
<!-- /Slider -->

<!-- Sneak peek -->
<div class="w-full lg:bg-left-top lg:bg-no-repeat lg:bg-img-sneakpeak">
    <div class="mx-auto mt-10 container flex flex-col lg:mt-40 lg:flex-row">
            <div class="lg:w-4/12">
            </div>
            <div class="w-full lg:w-8/12">
            <h2 class="mb-10 text-center lg:text-left">Get a sneak peek</h2>

            <!-- Slider Mobile -->

            <div class="-mx-8 mb-8 flex flex-row lg:hidden">
                <div class="swiper mySwiper-mob">
                    <div class="swiper-wrapper"></div>
                </div>
            </div>
                
            <!-- /Slider Mobile -->

                <p>We have a very diverse WombaTeam and no single member is like the other. <br><br>
                Our talented artist created 163 attributes and our algorithm created 10,000 combinations of them - some are more rare than others (with number 2 being the rarest… #JustSaying). <br><br>
                While you won’t know which one you’ll get until you mint it, you can rest assured it will be unique and poop cubes daily (all Wombats do).<br><br>
                Please note that we will mint 300 Wombats (out of the 10,000) in advance, in order to reserve some for community giveaways, partners and the team.<br></p>
    <div class="w-full text-center lg:mt-24"><a href="/mint/" class="btn1 mt-10 py-2 px-10 text-xl lg:py-6 lg:px-24 lg:text-5xl opacity-20">Mint a Wombat</a></div>
            </div>
    </div>
</div>    
<!-- /Sneak peak -->

<div class="divider my-24 lg:hidden"></div>

<!-- Team -->

<div class="mx-auto relative mt-20 container bg-no-repeat lg:bg-img-8 lg:bg-right-top lg:mt-40" id="team">
        <div class="absolute left-0 h-full w-12 bg-no-repeat bg-contain bg-img-team-mob bg-left-top lg:hidden"></div>
        <div class="w-full pl-8 lg:pl-0 lg:w-8/12">
        <h2 class="mb-10">The Team behind<br> the <span class="title-logo"><span>Wombateam</span></span></h2>
            <p>Believe it or not, we are all part of the same family, scattered around the world with various skill sets that are being put to the test with this ambitious project.
            <br><br> Well, to be honest, there’s one Guy we adopted along the way, but he's basically like family now.</p>
        </div>
        
        <div class="mt-20 flex flex-col gap-10 lg:flex-row">
            <div class="w-full lg:w-1/2">
                <div class="flex gap-5 mb-5 lg:mb-10 lg:gap-10">
                    <img src="<?=get_stylesheet_directory_uri()?>/assets/img/team/team1.png" alt="The Visionary Dreamer" class="w-1/2 object-contain">
                    <h3>The Visionary Dreamer</h3>
                </div>
                <p>With deep roots in the blockchain world and a passion for DeFi, he already has a 5-year plan for these cute Wombats and some (crazy) ideas for the market they can create.</p>
            </div>
            <div class="w-full lg:w-1/2">
                <div class="flex gap-5 mb-5 lg:mb-10 lg:gap-10">
                    <img src="<?=get_stylesheet_directory_uri()?>/assets/img/team/team2.png" alt="The Adopted Guy" class="w-1/2 object-contain">
                    <h3>The Adopted Guy</h3>
                </div>
                <p>The true artist in the group.<br> He’s the one breathing life into these adorable creatures.</p>
            </div>
        </div>
        <div class="mt-16 flex flex-col gap-10 lg:flex-row">
            <div class="w-full lg:w-1/2">
                <div class="flex gap-5 mb-5 lg:mb-10 lg:gap-10">
                    <img src="<?=get_stylesheet_directory_uri()?>/assets/img/team/team3.png" alt="The Party Pooper" class="w-1/2 object-contain">
                    <h3>The<br> Party Pooper</h3>
                </div>
                <p>You all know someone like that.<br>You have him in every group.<br>He’s the one that says “na, it won’t work”, “it’s too complicated” etc. - but don’t worry, our visionary guy is very good at motivating him.</p>
            </div>
            <div class="w-full lg:w-1/2">
                <div class="flex gap-5 mb-5 lg:mb-10 lg:gap-10">
                    <img src="<?=get_stylesheet_directory_uri()?>/assets/img/team/team4.png" alt="And A Few Others" class="w-1/2 object-contain"> 
                    <h3>And<br> A Few Others</h3>
                </div>
                <p>The geeks, the wordsmiths, the project managers, the coders - you know, the people that actually make this work.</p>
            </div>
        </div>
</div>
    
<!-- /Team -->

<div class="divider my-24 lg:hidden"></div>

<!-- TL;DR -->

<div class="mx-auto mt-20 relative container bg-top bg-no-repeat lg:bg-img-12 lg:mt-40">
        <div class="absolute left-0 bg-contain top-0 w-full h-20 bg-no-repeat bg-top bg-img-12 lg:hidden"></div>
        <h2 class="mb-10 text-center lg:mb-16">TL;DR</h2>

        <div class="flex flex-col gap-10 mb-10 lg:mb-16 lg:flex-row">
            <div class="w-full text-center px-2 lg:w-1/3">
                <div class="svg-circle"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/tl-dr/nft.svg" alt=""></div>
                <p>A series of 10K NFTs that are minted in a fair launch for <br>0.05 ETH each (+ gas fees)</p>
            </div>
            <div class="w-full text-center px-2 lg:w-1/3">
                <div class="svg-circle"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/tl-dr/drawn.svg" alt=""></div>
                <p>Each one has been hand drawn by our artist and algorithmically generated at random from over 163 unique attributes</p>
            </div>
            <div class="w-full text-center px-2 lg:w-1/3">
                <div class="svg-circle"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/tl-dr/cube.svg" alt=""></div>
                <p>Every wombat unlocks daily WPOO tokens distributed according to its rarity<br>(once we hit the P-Day)</p>
            </div>
        </div>
        <div class="flex flex-col gap-10 mb-10 lg:mb-16 lg:flex-row">
            <div class="w-full text-center px-2 lg:w-1/3">
                <div class="svg-circle"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/tl-dr/tree.svg" alt=""></div>
                <p>WPOO tokens can then be used for farming </p>
            </div>
            <div class="w-full text-center px-2 lg:w-1/3">
                <div class="svg-circle"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/tl-dr/wombat.svg" alt=""></div>
                <p>Farming activity will grant you WDAO<br>(our governance tokens)</p>
            </div>
            <div class="w-full text-center px-2 lg:w-1/3">
                <div class="svg-circle"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/tl-dr/wombats.svg" alt=""></div>
                <p>Together we can use the power of (cubic) poo to influence the life of Wombats and WombaTeam holders</p>
            </div>
        </div>

        <div class="w-full text-center lg:mt-24"><a href="/mint/" class="btn1 mt-10 py-2 px-10 text-xl lg:py-6 lg:px-24 lg:text-5xl opacity-20">Got it,<br/> let’s mint a Wombat</a></div>

</div>
    
<!-- /TL;DR -->


</div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>

      /* add 50 images */

        let swiperList = document.querySelectorAll('.swiper-wrapper');
        for (var i = 0; i < swiperList.length; i++) {
            for (var n = 1; n < 51; n++) {
                swiperList[i].innerHTML += '<div class="swiper-slide"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/nft/nft_('+n+').png" /></div>';
            }
        }

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