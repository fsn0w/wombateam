
</main>

<?php do_action( 'wombateam_content_end' ); ?>

</div>

<?php do_action( 'wombateam_content_after' ); ?>

<footer id="colophon" class="site-footer py-5 md:py-12 bg-bgfooter" role="contentinfo">
	<div class="container flex flex-wrap mx-auto text-center text-xs lg:text-3xl">

	    <div class="flex flex-col justify-center w-1/2 lg:w-5/12 mb-5 order-1">
	        <img class="max-w-[123px] md:max-w-[300px]" src="<?=get_stylesheet_directory_uri()?>/assets/img/title-logo.svg" />
	        <span class="hidden lg:block text-[15px] text-left">@<?php echo date_i18n( 'Y' );?> - All rights reserved to WombaTeam</span>
	    </div>

	    <div class="flex items-center justify-end w-1/2 lg:w-3/12 mb-5 order-2 lg:order-4">
	        <div>
                <span class="block md:text-xl font-light mb-4">follow us on</span>
                <div class="flex justify-center mt-1">
                    <a href="https://twitter.com/WombaTeam" target="_blank"
                    class="icon-tw brightness-125 border-b-0 hover:brightness-100 w-[16px] h-[16px] md:w-[35px] md:h-[35px]"></a>
                    <a href="https://t.me/WombaTeam" target="_blank"
                    class="icon-tg brightness-125 border-b-0 hover:brightness-100 w-[16px] h-[16px] md:w-[35px] md:h-[35px] mx-[10px]"></a>
                    <a href="https://discord.gg/vj7RmZeBnp" target="_blank"
                    class="icon-ds brightness-125 border-b-0 hover:brightness-100 w-[16px] h-[16px] md:w-[35px] md:h-[35px]"></a>
                </div>
                <a class="hidden lg:block text-center text-[20px] border-circle mt-4" href="https://polygonscan.com/address/0x557E6bf1442E47Edd7cc61d231257362e8f662d9" target="_blank">Verified Smart Contract</a>
			</div>
        </div>

        <div class="flex flex-col justify-center items-center w-full lg:w-2/12 mb-5 order-2 lg:order-3">
          <span class="font-comet text-[18px] md:text-4xl">Site map</span>
          <a class="text-[12px] md:text-xl border-circle font-light" href="https://wombat.team/the-poo-collector/">WPOO collecting</a>
          <a class="text-[12px] md:text-xl border-circle font-light" href="https://wombat.team/wdao-tokens/index.html">WDAO tokens</a>
          <a class="text-[12px] md:text-xl border-circle font-light" href="https://wombat.team/mint/">Mint</a>
          <a class="text-[12px] md:text-xl border-circle font-light" href="<?=get_site_url()?>/#roadmap">Roadmap</a>
          <a class="text-[12px] md:text-xl border-circle font-light" href="<?=get_site_url()?>/#team">Team</a>
          <a class="text-[12px] md:text-xl border-circle font-light" href="https://wombat.team/faq/">FAQs</a>
          <a class="text-[12px] md:text-xl border-circle font-light" href="<?=get_site_url()?>/#wallet">Connect Wallet</a>
        </div>

        <div class="flex justify-center items-center w-full lg:w-2/12 order-4 lg:order-2 mb-5 dapp">
           <a class="border-0" href="https://wpoo.wombat.team/">
            <svg width="61" height="31" viewBox="0 0 61 31" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect y="0.480957" width="60.3331" height="30.0631" rx="15.0315" fill="#DBC7B4"/>
            <path d="M21.7478 20.8872C21.8076 21.7245 21.8525 22.4173 21.8824 22.9655C21.9223 23.5137 21.9472 23.9523 21.9572 24.2813C21.9671 24.4408 21.9721 24.5853 21.9721 24.7149C21.9721 24.8345 21.9671 24.9591 21.9572 25.0887C21.9472 25.2183 21.9273 25.318 21.8974 25.3877C21.8674 25.4675 21.8276 25.5223 21.7777 25.5522C21.5086 25.7416 21.1547 25.8363 20.7161 25.8363C20.6962 25.8363 20.5666 25.8363 20.3274 25.8363C20.0882 25.8363 19.834 25.7316 19.5648 25.5223C19.505 25.4725 19.4552 25.4176 19.4153 25.3578C19.3854 25.298 19.3605 25.2083 19.3406 25.0887C19.3206 24.9591 19.3007 24.7747 19.2808 24.5355C19.2608 24.2863 19.2409 23.9523 19.2209 23.5337C19.1811 22.9655 19.1362 22.3724 19.0864 21.7544C19.0465 21.1264 19.0066 20.5881 18.9668 20.1396C18.9269 19.681 18.897 19.4368 18.877 19.4069C18.8671 19.4069 18.7375 19.4169 18.4883 19.4368C18.2491 19.4468 17.95 19.4667 17.5912 19.4966C17.2323 19.5166 16.8735 19.5415 16.5146 19.5714C16.1657 19.6013 15.8667 19.6312 15.6175 19.6611L14.9148 19.7209L14.8251 21.56C14.7752 22.7163 14.7154 23.6084 14.6456 24.2364C14.5858 24.8544 14.4911 25.298 14.3615 25.5672C14.232 25.8363 14.0525 26.0207 13.8233 26.1204C13.5541 26.24 13.1554 26.3098 12.6271 26.3297C12.5075 26.3397 12.3929 26.3447 12.2832 26.3447C11.9144 26.3447 11.6104 26.3048 11.3711 26.225C10.8129 26.0057 10.4541 25.6369 10.2946 25.1186C10.1849 24.68 10.1152 23.8925 10.0853 22.7562C10.0753 22.2677 10.0703 21.7594 10.0703 21.2311C10.0703 20.5333 10.0853 19.6661 10.1152 18.6294C10.155 17.5928 10.2348 16.571 10.3544 15.5643C10.6235 13.4411 11.0422 11.5073 11.6104 9.76288C12.1785 8.01848 12.7916 6.77746 13.4495 6.03983C14.0775 5.40188 14.84 4.98322 15.7371 4.78386C16.0661 4.71409 16.39 4.6792 16.709 4.6792C17.2572 4.6792 17.7855 4.78386 18.2939 4.99319C18.9518 5.22246 19.4801 5.8006 19.8788 6.72762C20.2875 7.64468 20.6264 9.20966 20.8956 11.4226C21.1747 13.6255 21.4588 16.7804 21.7478 20.8872ZM18.6677 17.837C18.6777 17.817 18.6827 17.7672 18.6827 17.6874C18.6827 17.4981 18.6478 17.1043 18.578 16.5062C18.5182 15.9082 18.4135 15.1207 18.264 14.1438C18.1245 13.157 17.9749 12.21 17.8155 11.3029C17.656 10.3959 17.5164 9.70806 17.3968 9.23956C17.2572 8.68135 17.1476 8.31254 17.0679 8.13311C17.028 8.02347 16.9881 7.96864 16.9482 7.96864C16.9283 7.96864 16.9084 7.98858 16.8884 8.02845C16.8187 8.14807 16.714 8.45707 16.5744 8.95547C16.4349 9.45387 16.2903 9.99215 16.1408 10.5703C16.0013 11.1385 15.9016 11.592 15.8418 11.9309C15.7222 12.5988 15.5826 13.5258 15.4231 14.712C15.2636 15.8882 15.159 16.7903 15.1091 17.4183L15.0344 18.2556H15.6325C15.8019 18.2556 16.0063 18.2457 16.2455 18.2257C16.4847 18.2058 16.699 18.1858 16.8884 18.1659C17.965 18.0064 18.5581 17.8968 18.6677 17.837Z" fill="#493729"/>
            <path d="M36.0569 10.8095C36.2164 11.4873 36.2961 12.21 36.2961 12.9776C36.2961 13.7451 36.2164 14.4229 36.0569 15.011C34.9604 18.2805 32.7475 20.1595 29.4182 20.6479L28.8799 20.7078L28.8052 22.502C28.7753 23.2496 28.7404 23.8277 28.7005 24.2364C28.6706 24.6351 28.6258 24.9242 28.5659 25.1036C28.5061 25.2731 28.4264 25.3927 28.3267 25.4625C28.0277 25.6718 27.5941 25.8164 27.0259 25.8961C26.8166 25.926 26.6172 25.941 26.4278 25.941C26.0889 25.941 25.7799 25.9011 25.5008 25.8213C24.9226 25.6619 24.5837 25.4725 24.4841 25.2532C24.3744 25.0837 24.2947 24.2962 24.2448 22.8907C24.2049 21.4753 24.185 19.2026 24.185 16.0726C24.185 9.43394 24.2947 5.95012 24.514 5.62118C24.5538 5.47166 24.6186 5.35204 24.7083 5.26233C24.798 5.17262 24.9426 5.07792 25.1419 4.97824C25.2915 4.8985 25.436 4.84367 25.5755 4.81377C25.7251 4.7739 25.9344 4.74898 26.2035 4.73901C26.4826 4.71907 26.8913 4.70412 27.4296 4.69415C27.9679 4.68418 28.3865 4.68418 28.6856 4.69415C28.9846 4.69415 29.2388 4.71409 29.4481 4.75396C29.6574 4.78386 29.9116 4.83869 30.2107 4.91843C33.2409 5.77568 35.1897 7.73938 36.0569 10.8095ZM33.1413 12.7832V12.6187C33.1413 11.9808 33.0815 11.4176 32.9618 10.9291C32.8422 10.4307 32.608 9.85259 32.2591 9.19471C31.97 8.64647 31.5713 8.11318 31.0629 7.59484C30.5546 7.0765 30.0462 6.67778 29.5378 6.39868C29.3484 6.299 29.184 6.21926 29.0444 6.15945C28.9248 6.11958 28.85 6.09964 28.8201 6.09964H28.8052V6.2043C28.8052 6.26411 28.8052 6.38373 28.8052 6.56315C28.8151 6.73261 28.8301 6.98181 28.85 7.31075C28.87 7.67957 28.8899 8.48199 28.9098 9.71803C28.9298 10.9541 28.9397 12.3396 28.9397 13.8747C28.9397 17.4731 28.9796 19.2724 29.0594 19.2724C29.0893 19.2724 29.159 19.2474 29.2687 19.1976C29.3883 19.1478 29.5179 19.088 29.6574 19.0182C31.9202 17.8519 33.0815 15.7736 33.1413 12.7832Z" fill="#493729"/>
            <path d="M50.0221 10.8095C50.1816 11.4873 50.2613 12.21 50.2613 12.9776C50.2613 13.7451 50.1816 14.4229 50.0221 15.011C48.9256 18.2805 46.7127 20.1595 43.3834 20.6479L42.8451 20.7078L42.7704 22.502C42.7405 23.2496 42.7056 23.8277 42.6657 24.2364C42.6358 24.6351 42.5909 24.9242 42.5311 25.1036C42.4713 25.2731 42.3916 25.3927 42.2919 25.4625C41.9929 25.6718 41.5592 25.8164 40.9911 25.8961C40.7817 25.926 40.5824 25.941 40.393 25.941C40.0541 25.941 39.7451 25.9011 39.466 25.8213C38.8878 25.6619 38.5489 25.4725 38.4492 25.2532C38.3396 25.0837 38.2598 24.2962 38.21 22.8907C38.1701 21.4753 38.1502 19.2026 38.1502 16.0726C38.1502 9.43394 38.2598 5.95012 38.4791 5.62118C38.519 5.47166 38.5838 5.35204 38.6735 5.26233C38.7632 5.17262 38.9078 5.07792 39.1071 4.97824C39.2566 4.8985 39.4012 4.84367 39.5407 4.81377C39.6902 4.7739 39.8996 4.74898 40.1687 4.73901C40.4478 4.71907 40.8565 4.70412 41.3948 4.69415C41.933 4.68418 42.3517 4.68418 42.6507 4.69415C42.9498 4.69415 43.204 4.71409 43.4133 4.75396C43.6226 4.78386 43.8768 4.83869 44.1758 4.91843C47.2061 5.77568 49.1549 7.73938 50.0221 10.8095ZM47.1064 12.7832V12.6187C47.1064 11.9808 47.0466 11.4176 46.927 10.9291C46.8074 10.4307 46.5732 9.85259 46.2243 9.19471C45.9352 8.64647 45.5365 8.11318 45.0281 7.59484C44.5197 7.0765 44.0114 6.67778 43.503 6.39868C43.3136 6.299 43.1491 6.21926 43.0096 6.15945C42.89 6.11958 42.8152 6.09964 42.7853 6.09964H42.7704V6.2043C42.7704 6.26411 42.7704 6.38373 42.7704 6.56315C42.7803 6.73261 42.7953 6.98181 42.8152 7.31075C42.8352 7.67957 42.8551 8.48199 42.875 9.71803C42.895 10.9541 42.9049 12.3396 42.9049 13.8747C42.9049 17.4731 42.9448 19.2724 43.0245 19.2724C43.0544 19.2724 43.1242 19.2474 43.2339 19.1976C43.3535 19.1478 43.4831 19.088 43.6226 19.0182C45.8854 17.8519 47.0466 15.7736 47.1064 12.7832Z" fill="#493729"/>
            </svg>
           </a>
        </div>

        <div class="flex justify-center lg:hidden w-full mb-5 order-5">
            <a class="text-[12px] border-circle" href="https://polygonscan.com/address/0x557E6bf1442E47Edd7cc61d231257362e8f662d9" target="_blank">Verified Smart Contract</a>
        </div>

        <div class="block justify-center lg:hidden w-full order-6">
            <span class="text-[8px]">@<?php echo date_i18n( 'Y' );?> - All rights reserved to WombaTeam</span>
        </div>
</footer>

</div>

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/web3/3.0.0-rc.5/web3.min.js"></script>
<script>
	jQuery(".main-nav ul > .menu-item").click(function() {
		if (jQuery(this).hasClass('wallet-connected')) {
			jQuery(this).find('.sub-menu').toggle("slow");
		}
	});
</script>

<script>
	function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function eraseCookie(name) {
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}
</script>

<script>

let currentAccount = null;
let web3;
let walletBtn = jQuery('.wallet-btn');
let walletBtnMsg = jQuery('.wallet-btn a');
let mintBtn = jQuery('#mintbtn');

let contactAddress = "0xb82A72453403f350E14B8bF7dcc6FBD045Cc0d3C";
let abi = [{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"approved","type":"address"},{"indexed":true,"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"operator","type":"address"},{"indexed":false,"internalType":"bool","name":"approved","type":"bool"}],"name":"ApprovalForAll","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":true,"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[],"name":"IS_SALE_ACTIVE","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"MAX_SUPPLY","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"SALE_PRICE","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"approve","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"getApproved","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"operator","type":"address"}],"name":"isApprovedForAll","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"maxWombatsPerMint","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tokensAmount","type":"uint256"}],"name":"mintReserved","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"tokensAmount","type":"uint256"}],"name":"mintSale","outputs":[],"stateMutability":"payable","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"ownerOf","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"provenanceHash","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"safeTransferFrom","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"tokenId","type":"uint256"},{"internalType":"bytes","name":"_data","type":"bytes"}],"name":"safeTransferFrom","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"operator","type":"address"},{"internalType":"bool","name":"approved","type":"bool"}],"name":"setApprovalForAll","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"string","name":"baseURI","type":"string"}],"name":"setBaseURI","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"string","name":"_provenanceHash","type":"string"}],"name":"setProvenanceHash","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"bool","name":"_isSaleActive","type":"bool"}],"name":"setSaleStatus","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"bytes4","name":"interfaceId","type":"bytes4"}],"name":"supportsInterface","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"index","type":"uint256"}],"name":"tokenByIndex","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"uint256","name":"index","type":"uint256"}],"name":"tokenOfOwnerByIndex","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"tokenURI","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"transferFrom","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"withdraw","outputs":[],"stateMutability":"nonpayable","type":"function"}];

function detectMetaMask() {
            if (typeof window.ethereum !== 'undefined') {
                return true
            } else {
                return false
            }
        }

function handleAccountsChanged(accounts) {
            console.log('Calling handleAccountsChanged')

            if (accounts.length === 0) {
                console.log('Please connect to MetaMask.');
                walletBtnMsg.html('Connect with Metamask')
            } else if (accounts[0] !== currentAccount) {
                currentAccount = accounts[0];
				walletBtnMsg.html(currentAccount.substring(0, 4)+'...'+currentAccount.slice(-4))
				walletBtn.addClass('wallet-connected')
                if(currentAccount != null) {
                    // Set the button label
					walletBtnMsg.html(currentAccount.substring(0, 4)+'...'+currentAccount.slice(-4))
					walletBtn.addClass('wallet-connected')
                }
				//setCookie

				jQuery('#mintaction').removeClass("opacity-50 cursor-not-allowed pointer-events-none");
				setCookie('wallet',currentAccount,2);

				// goto Rinkeby network
				ethereum.request({ method: 'wallet_switchEthereumChain', params:[{chainId: '0x1'}]});

                //supplyTotal();

            }
        }

function supplyTotal() {
	var token = new web3.eth.Contract(
                        abi,
                        contactAddress
            );


	const totalSupply = token.methods.totalSupply().call().then(result => {
    	console.log(result);
	});

}

async function mint(maxTokens,tokens,amount) {
            console.log("Mint " + tokens + " // Amount: "+amount+" ETH")
            const wombatContract = new web3.eth.Contract(
                        abi,
                        contactAddress
            );
			wombatContract.methods.mintSale(tokens).send({ from: ethereum.selectedAddress, value: web3.utils.toWei(amount, "ether"), }).then(receipt=> {console.log(receipt)});
        }


async function connect() {
            console.log('Calling connect()')
            ethereum
            .request({ method: 'eth_requestAccounts' })
            .then(handleAccountsChanged)
            .catch((err) => {

                console.error(err);

            });

			window.ethereum.enable(); // get permission to access accounts

			// detect Metamask account change
			window.ethereum.on('accountsChanged', function (accounts) {
				handleAccountsChanged(accounts);
			});

			// detect Network account change
			window.ethereum.on('networkChanged', function(networkId){
				console.log('networkChanged',networkId);
				if (networkId != 1) {
					walletBtnMsg.html('Mainnet Network Only')
					walletBtn.addClass('wallet-error')
				}
				else {
					walletBtnMsg.html(currentAccount.substring(0, 4)+'...'+currentAccount.slice(-4))
					walletBtn.removeClass('wallet-error')
					walletBtn.addClass('wallet-connected')
				}
			});

        }

</script>
<script>

jQuery(document).ready(function() {
            m = detectMetaMask()
            if(m) {
				if (getCookie('wallet')) {
					connect()
				}
            } else {
				walletBtnMsg.html('Install Metamask')
				walletBtnMsg.attr('href','https://metamask.io/download.html')
				walletBtn.addClass('wallet-error')
            }

            try {
                web3 = new Web3(Web3.givenProvider);
            } catch (error) {
                alert(error)
            }

			// Main menu Btn

			walletBtn.click(function() {
                connect()
            });

			// Mint form

			mintBtn.click(function() {

					var maxTokens = "5";
					var tokens = jQuery("#mint_n").val();
					var amount = 0.05*tokens;

					if (tokens>0) {
						mint(maxTokens, tokens.toString(), amount.toString())
					}
			});


})

</script>

<script>
/*

	+/- buttons

*/

jQuery(document).ready(function($) {

	const mintMin = 1;
    const mintMax = 5;
	const tokenPrice = 0.05;

    $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < mintMin ? mintMin : count;
        $input.val(count);
        $input.change();

		$('.mint-price').val((parseInt($input.val())*tokenPrice).toFixed(2));
		$('.mint-price').change();

		$('#hole'+(count+1)+' .wombat').addClass('obj-hide');

        return false;
    });

    $('.plus').click(function () {
        var $input = $(this).parent().find('input');

        if (parseInt($input.val())<mintMax) {
            $input.val(parseInt($input.val()) + 1);
            $input.change();

			$('.mint-price').val((parseInt($input.val())*tokenPrice).toFixed(2));
			$('.mint-price').change();

			$('#hole'+$input.val()+' .wombat').removeClass('obj-hide');
        }

        return false;
    });

});

</script>


</body>
</html>
