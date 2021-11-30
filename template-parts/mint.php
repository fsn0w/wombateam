<?php
/*
 * Template Name: Mint
 *
 */

get_header();
?>

<div id="content" class="relative site-content">

<!-- Mint -->

    <div class="w-full pt-28 bg-bgmenu lg:pt-44">

        <div class="mx-auto container text-center -mb-32 relative z-20 lg:mb-[-17rem]">
            <h1 class="text-center"><span class="text-dark">Mint Your Wombats</span></h1>
            <div class="whitespace-nowrap text-dark text-3xl text-center flex flex-row justify-center items-center my-4 lg:text-5xl">
                <button class="minus border-[3px] border-dark rounded-lg w-8 h-8 font-light leading-[1px] mt-2 mx-4 lg:mt-4 lg:mx-8 lg:w-12 lg:h-12">&#8211;</button>
                    <span><input value="1" id="mint_n" class="mint-number bg-transparent border-0 inline-block w-8 font-bold text-5xl text-center lg:w-12 lg:text-7xl" disabled />/5</span>
                <button class="plus border-[3px] border-dark rounded-lg w-8 h-8 font-light leading-[1px] mt-2 mx-4 lg:mt-4 lg:mx-8 lg:w-12 lg:h-12">&#43;</button>
            </div>
            <span class="text-[#37271B] text-lg lg:text-2xl">Price: 
                <input value="0.05" class="mint-price bg-transparent border-0 inline-block w-12 font-bold text-center text-lg lg:w-14 lg:text-2xl" disabled /> 
                <span class="text-xs font-bold lg:text-sm">ETH</span></span> 
            <div class="text-center relative">
                <button id="mintbtn" class="btn2 text-xl mt-2 py-4 px-10 lg:py-8 lg:px-16 lg:text-5xl">Mint</button>
                <span class="absolute -right-24">Coming soon...</span>
            </div>
        </div>

        <div class="w-full pt-20 overflow-hidden relative lg:pt-0">
            <div class="relative z-10 bg-cover" style="background-image:url('<?=get_stylesheet_directory_uri()?>/assets/img/main-animation/header_bg_front.png')">
                <div id="holes" class="absolute z-10 top-1/3 h-2/5 w-full">

                    <div id="hole5" class="hole w-[17%] min-h-[63%] bottom-[28%] left-[75%]">
                        <div class="wombat w-full obj-hide"><div class="body1"></div></div>
                    </div>
                    <div class="hole-number bottom-[10%] left-[89%] select-none">5</div>

                    <div id="hole4" class="hole w-[13%] min-h-[50%] bottom-[60%] left-[62%]">
                        <div class="wombat w-full obj-hide"><div class="body0"></div></div>
                    </div>
                    <div class="hole-number bottom-[40%] left-[72%] select-none">4</div>

                    <div id="hole3" class="hole w-[13%] min-h-[50%] bottom-[60%] left-[40%]">
                        <div class="wombat w-full obj-hide"><div class="body1"></div></div>
                    </div>
                    <div class="hole-number bottom-[40%] left-[50%] select-none">3</div>

                    <div id="hole2" class="hole w-[17%] h-[63%] bottom-[28%] left-[25%]">
                        <div class="wombat w-full obj-hide"><div class="body0"></div></div>
                    </div>
                    <div class="hole-number bottom-[12%] left-[40%] select-none">2</div>

                    <div id="hole1" class="hole w-[13%] min-h-[50%] bottom-[54%] left-[8%]">
                        <div class="wombat w-full"><div class="body1"></div></div>
                    </div>
                    <div class="hole-number bottom-[40%] left-[20%] select-none">1</div>

                </div>
                <img class="relative opacity-0 z-0" src="<?=get_stylesheet_directory_uri()?>/assets/img/main-animation/header_bg_front.png" alt="ground">
            </div>
            <img class="absolute top-20 left-0 animate-pulse lg:top-0" src="<?=get_stylesheet_directory_uri()?>/assets/img/main-animation/clouds.png" alt="clouds">
        </div>
        
    </div>

</div>

<?php
get_footer(); 