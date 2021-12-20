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
        <div class="container mx-auto flex-row -mb-32 relative z-20 lg:flex lg:mb-[-17rem]">
        <div class="bg-[#F7F0E8] w-96 p-3 text-center text-[#8A6A50] font-medium text-xl rounded-md absolute ">The initial minting window is over now.<br>
You can view the minted collection on <a href="https://opensea.io/collection/wombateam" target="_blank">OpeanSea</a> and follow us on <a href="https://t.me/WombaTeam" target="_blank">Telegram</a> / <a href="https://discord.gg/vj7RmZeBnp" target="_blank">Discord</a> where we will be announcing the next minting window.</div> 
            <div class="mb-4 opacity-20"><h1 class="text-center lg:hidden"><span class="text-dark">Mint Your Wombats</span></h1></div>
<!--
            <div class="mx-auto w-full text-center max-w-sm lg:mx-0 lg:w-2/5">
                <div class=" text-xl rounded-lg bg-[#e9f0f766] p-4">
                    <h5 class="text-[#8A6A50] text-xl font-comet drop-shadow lg:text-4xl">Get Your Shit Together!</h5>
                    <span class="text-bgfooter text-xs font-medium block mt-2 mb-2 lg:text-xl">Only</span>
                    <span id="countdown" class="mx-auto text-bgfooter font-medium text-lg mt-4 lg:mt-7 lg:text-2xl">
                            <ul class="flex justify-center gap-3">
                                <li><div id="hours" class="text-xl p-1 lg:text-2xl bg-[#c8bdb4] rounded-lg w-14 tracking-widest -mb-2 lg:mb-0"></div><span class="text-[8px] lg:text-sm">hours</span></li>
                                <li><div id="minutes" class="text-xl p-1 lg:text-2xl bg-[#c8bdb4] rounded-lg w-14 tracking-widest -mb-2 lg:mb-0"></div><span class="text-[8px] lg:text-sm">minutes</span></li>
                                <li><div id="seconds" class="text-xl p-1 lg:text-2xl bg-[#c8bdb4] rounded-lg w-14 tracking-widest -mb-2 lg:mb-0"></div><span class="text-[8px] lg:text-sm">seconds</span></li>
                            </ul>
                    </span>
                    <p id="mint-desc" class="text-[#8A6A50] font-medium mt-2 lg:mt-4 text-xs lg:text-xl">Until the initial minting window will be closed!</p>
                    <p id="nomint-desc" class="hidden text-[#8A6A50] font-medium mt-2 lg:mt-4 text-xs lg:text-xl">Shit, shit, shit... The initial minting window has closed!<br>
                    <span class="text-dark text-xs lg:text-sm leading-3">
Have a look at the WombaTeam collection on <a href="https://opensea.io/collection/wombateam" class="border-b border-dark hover:text-dark" target="_blank">opensea.io</a> and stay tuned for the next minting window.</span></p>
                </div>
            </div>
-->
            <div class="w-full mx-auto text-center opacity-20">
                <h1 class="hidden text-center lg:block"><span class="text-dark">Mint Your Wombats</span></h1> 
                <div class="whitespace-nowrap text-dark text-3xl text-center flex flex-row justify-center items-center my-4 lg:text-5xl">
                    <button class="minus border-[3px] border-dark rounded-lg w-8 h-8 font-light leading-[1px] mt-2 mx-4 lg:mt-4 lg:mx-8 lg:w-12 lg:h-12">&#8211;</button>
                        <span><input value="1" id="mint_n" class="mint-number bg-transparent border-0 inline-block w-8 font-bold text-5xl text-center lg:w-12 lg:text-7xl" disabled />/5</span>
                    <button class="plus border-[3px] border-dark rounded-lg w-8 h-8 font-light leading-[1px] mt-2 mx-4 lg:mt-4 lg:mx-8 lg:w-12 lg:h-12">&#43;</button>
                </div>
                <span class="text-[#37271B] text-lg lg:text-2xl">Price: 
                    <input value="0.05" class="mint-price bg-transparent border-0 inline-block w-12 font-bold text-center text-lg lg:w-14 lg:text-2xl" disabled /> 
                    <span class="text-xs font-bold lg:text-sm">ETH</span></span> 
                <div class="text-center relative">
                    <button id="mintbtn" class="btn2 text-xl mt-2 py-4 px-10 lg:py-8 lg:px-16 lg:text-5xl" disabled>Mint</button>
                </div>
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
<!--
    <script>
(function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  let start = "<?php 
  
  if (isset($_GET['status']) && $_GET['status']=='end') {
      echo "Dec 13, 2021 12:00:00";
    } 
  else {
      echo "Dec 14, 2021 12:00:00";
} 
  
  ?>",
      countDown = new Date(start ).getTime(),
      x = setInterval(function() {    

        var d = new Date();
           var utc = d.getTime() + (d.getTimezoneOffset() * 60000);
            var distance = countDown - utc;

        if (distance < 0) {
          let countdown = document.getElementById("countdown"),
              mintBtn = document.getElementById("mintbtn");

          /* countdown.style.display = "none"; */
          mintBtn.classList.add("opacity-60");
          mintBtn.classList.add("cursor-not-allowed");
          document.getElementById("mint-desc").classList.add("hidden");
          document.getElementById("nomint-desc").classList.remove("hidden");

          document.getElementById("hours").innerText = "0",
          document.getElementById("minutes").innerText = "0",
          document.getElementById("seconds").innerText = "0";

          clearInterval(x);
        }
        else {
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
        }
      }, 0)
  }());
    </script>
-->

<?php
get_footer(); 