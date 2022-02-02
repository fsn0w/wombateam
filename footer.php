
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
                <a class="hidden lg:block text-center text-[20px] border-circle mt-4" href="#">Verified Smart Contract</a>
			</div>
        </div>

        <div class="flex flex-col justify-center items-center w-full lg:w-2/12 mb-5 order-2 lg:order-3">
          <span class="font-comet text-[18px] md:text-4xl">Site map</span>
          <a class="text-[12px] md:text-xl border-circle font-light" href="https://wombat.team/mint/">Mint a Wombat</a>
          <a class="text-[12px] md:text-xl border-circle font-light" href="<?=get_site_url()?>/#roadmap">Roadmap</a>
          <a class="text-[12px] md:text-xl border-circle font-light" href="<?=get_site_url()?>/#team">Team</a>
          <a class="text-[12px] md:text-xl border-circle font-light" href="https://wombat.team/faq/">FAQs</a>
          <a class="text-[12px] md:text-xl border-circle font-light" href="<?=get_site_url()?>/#wallet">Connect Wallet</a>
        </div>

        <div class="flex justify-center items-center w-full lg:w-2/12 order-4 lg:order-2 mb-5 dapp">
           <a class="border-0" href="https://wpoo.wombat.team/">
            <svg width="77" height="31" viewBox="0 0 77 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.520508" y="0.516968" width="75.9589" height="30.063" rx="15.0315" fill="#DBC7B4" />
                <path d="M36.9619 20.8146C37.0205 21.6349 37.0645 22.3136 37.0938 22.8507C37.1328 23.3878 37.1572 23.8175 37.167 24.1398C37.1768 24.296 37.1816 24.4376 37.1816 24.5646C37.1816 24.6818 37.1768 24.8038 37.167 24.9308C37.1572 25.0577 37.1377 25.1554 37.1084 25.2238C37.0791 25.3019 37.04 25.3556 36.9912 25.3849C36.7275 25.5704 36.3809 25.6632 35.9512 25.6632C35.9316 25.6632 35.8047 25.6632 35.5703 25.6632C35.3359 25.6632 35.0869 25.5607 34.8232 25.3556C34.7646 25.3068 34.7158 25.2531 34.6768 25.1945C34.6475 25.1359 34.623 25.048 34.6035 24.9308C34.584 24.8038 34.5645 24.6232 34.5449 24.3888C34.5254 24.1447 34.5059 23.8175 34.4863 23.4073C34.4473 22.8507 34.4033 22.2697 34.3545 21.6642C34.3154 21.049 34.2764 20.5216 34.2373 20.0822C34.1982 19.6329 34.1689 19.3937 34.1494 19.3644C34.1396 19.3644 34.0127 19.3741 33.7686 19.3937C33.5342 19.4034 33.2412 19.423 32.8896 19.4523C32.5381 19.4718 32.1865 19.4962 31.835 19.5255C31.4932 19.5548 31.2002 19.5841 30.9561 19.6134L30.2676 19.672L30.1797 21.4738C30.1309 22.6066 30.0723 23.4806 30.0039 24.0958C29.9453 24.7013 29.8525 25.1359 29.7256 25.3995C29.5986 25.6632 29.4229 25.8439 29.1982 25.9415C28.9346 26.0587 28.5439 26.1271 28.0264 26.1466C27.9092 26.1564 27.7969 26.1613 27.6895 26.1613C27.3281 26.1613 27.0303 26.1222 26.7959 26.0441C26.249 25.8292 25.8975 25.4679 25.7412 24.9601C25.6338 24.5304 25.5654 23.7589 25.5361 22.6456C25.5264 22.1671 25.5215 21.6691 25.5215 21.1515C25.5215 20.4679 25.5361 19.6183 25.5654 18.6027C25.6045 17.587 25.6826 16.5861 25.7998 15.5997C26.0635 13.5197 26.4736 11.6251 27.0303 9.91614C27.5869 8.20715 28.1875 6.99133 28.832 6.26868C29.4473 5.64368 30.1943 5.23352 31.0732 5.03821C31.3955 4.96985 31.7129 4.93567 32.0254 4.93567C32.5625 4.93567 33.0801 5.03821 33.5781 5.24329C34.2227 5.4679 34.7402 6.0343 35.1309 6.9425C35.5312 7.84094 35.8633 9.37415 36.127 11.5421C36.4004 13.7003 36.6787 16.7911 36.9619 20.8146ZM33.9443 17.8263C33.9541 17.8068 33.959 17.7579 33.959 17.6798C33.959 17.4943 33.9248 17.1085 33.8564 16.5226C33.7979 15.9366 33.6953 15.1652 33.5488 14.2081C33.4121 13.2413 33.2656 12.3136 33.1094 11.4249C32.9531 10.5363 32.8164 9.86243 32.6992 9.40344C32.5625 8.85657 32.4551 8.49524 32.377 8.31946C32.3379 8.21204 32.2988 8.15833 32.2598 8.15833C32.2402 8.15833 32.2207 8.17786 32.2012 8.21692C32.1328 8.33411 32.0303 8.63684 31.8936 9.12512C31.7568 9.6134 31.6152 10.1407 31.4688 10.7072C31.332 11.2638 31.2344 11.7081 31.1758 12.0402C31.0586 12.6945 30.9219 13.6027 30.7656 14.7648C30.6094 15.9171 30.5068 16.8009 30.458 17.4161L30.3848 18.2365H30.9707C31.1367 18.2365 31.3369 18.2267 31.5713 18.2072C31.8057 18.1876 32.0156 18.1681 32.2012 18.1486C33.2559 17.9923 33.8369 17.8849 33.9443 17.8263Z" fill="#493729"/>
                <path d="M50.9805 10.9415C51.1367 11.6056 51.2148 12.3136 51.2148 13.0656C51.2148 13.8175 51.1367 14.4816 50.9805 15.0577C49.9062 18.2609 47.7383 20.1017 44.4766 20.5802L43.9492 20.6388L43.876 22.3966C43.8467 23.129 43.8125 23.6954 43.7734 24.0958C43.7441 24.4865 43.7002 24.7697 43.6416 24.9454C43.583 25.1115 43.5049 25.2286 43.4072 25.297C43.1143 25.5021 42.6895 25.6437 42.1328 25.7218C41.9277 25.7511 41.7324 25.7657 41.5469 25.7657C41.2148 25.7657 40.9121 25.7267 40.6387 25.6486C40.0723 25.4923 39.7402 25.3068 39.6426 25.0919C39.5352 24.9259 39.457 24.1544 39.4082 22.7775C39.3691 21.3907 39.3496 19.1642 39.3496 16.0978C39.3496 9.59387 39.457 6.18079 39.6719 5.85852C39.7109 5.71204 39.7744 5.59485 39.8623 5.50696C39.9502 5.41907 40.0918 5.32629 40.2871 5.22864C40.4336 5.15051 40.5752 5.0968 40.7119 5.0675C40.8584 5.02844 41.0635 5.00403 41.3271 4.99426C41.6006 4.97473 42.001 4.96008 42.5283 4.95032C43.0557 4.94055 43.4658 4.94055 43.7588 4.95032C44.0518 4.95032 44.3008 4.96985 44.5059 5.00891C44.7109 5.03821 44.96 5.09192 45.2529 5.17004C48.2217 6.00989 50.1309 7.93372 50.9805 10.9415ZM48.124 12.8751V12.714C48.124 12.089 48.0654 11.5372 47.9482 11.0587C47.8311 10.5704 47.6016 10.004 47.2598 9.3595C46.9766 8.82239 46.5859 8.29993 46.0879 7.79211C45.5898 7.2843 45.0918 6.89368 44.5938 6.62024C44.4082 6.52258 44.2471 6.44446 44.1104 6.38586C43.9932 6.3468 43.9199 6.32727 43.8906 6.32727H43.876V6.42981C43.876 6.4884 43.876 6.60559 43.876 6.78137C43.8857 6.94739 43.9004 7.19153 43.9199 7.51379C43.9395 7.87512 43.959 8.66125 43.9785 9.87219C43.998 11.0831 44.0078 12.4406 44.0078 13.9445C44.0078 17.4698 44.0469 19.2325 44.125 19.2325C44.1543 19.2325 44.2227 19.2081 44.3301 19.1593C44.4473 19.1105 44.5742 19.0519 44.7109 18.9835C46.9277 17.8409 48.0654 15.8048 48.124 12.8751Z" fill="#493729"/>
                <path d="M64.6621 10.9415C64.8184 11.6056 64.8965 12.3136 64.8965 13.0656C64.8965 13.8175 64.8184 14.4816 64.6621 15.0577C63.5879 18.2609 61.4199 20.1017 58.1582 20.5802L57.6309 20.6388L57.5576 22.3966C57.5283 23.129 57.4941 23.6954 57.4551 24.0958C57.4258 24.4865 57.3818 24.7697 57.3232 24.9454C57.2646 25.1115 57.1865 25.2286 57.0889 25.297C56.7959 25.5021 56.3711 25.6437 55.8145 25.7218C55.6094 25.7511 55.4141 25.7657 55.2285 25.7657C54.8965 25.7657 54.5938 25.7267 54.3203 25.6486C53.7539 25.4923 53.4219 25.3068 53.3242 25.0919C53.2168 24.9259 53.1387 24.1544 53.0898 22.7775C53.0508 21.3907 53.0312 19.1642 53.0312 16.0978C53.0312 9.59387 53.1387 6.18079 53.3535 5.85852C53.3926 5.71204 53.4561 5.59485 53.5439 5.50696C53.6318 5.41907 53.7734 5.32629 53.9688 5.22864C54.1152 5.15051 54.2568 5.0968 54.3936 5.0675C54.54 5.02844 54.7451 5.00403 55.0088 4.99426C55.2822 4.97473 55.6826 4.96008 56.21 4.95032C56.7373 4.94055 57.1475 4.94055 57.4404 4.95032C57.7334 4.95032 57.9824 4.96985 58.1875 5.00891C58.3926 5.03821 58.6416 5.09192 58.9346 5.17004C61.9033 6.00989 63.8125 7.93372 64.6621 10.9415ZM61.8057 12.8751V12.714C61.8057 12.089 61.7471 11.5372 61.6299 11.0587C61.5127 10.5704 61.2832 10.004 60.9414 9.3595C60.6582 8.82239 60.2676 8.29993 59.7695 7.79211C59.2715 7.2843 58.7734 6.89368 58.2754 6.62024C58.0898 6.52258 57.9287 6.44446 57.792 6.38586C57.6748 6.3468 57.6016 6.32727 57.5723 6.32727H57.5576V6.42981C57.5576 6.4884 57.5576 6.60559 57.5576 6.78137C57.5674 6.94739 57.582 7.19153 57.6016 7.51379C57.6211 7.87512 57.6406 8.66125 57.6602 9.87219C57.6797 11.0831 57.6895 12.4406 57.6895 13.9445C57.6895 17.4698 57.7285 19.2325 57.8066 19.2325C57.8359 19.2325 57.9043 19.2081 58.0117 19.1593C58.1289 19.1105 58.2559 19.0519 58.3926 18.9835C60.6094 17.8409 61.7471 15.8048 61.8057 12.8751Z" fill="#493729"/>
            </svg>
           </a>
        </div>

        <div class="flex justify-center lg:hidden w-full mb-5 order-5">
            <a class="text-[12px] border-circle" href="#">Verified Smart Contract</a>
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
