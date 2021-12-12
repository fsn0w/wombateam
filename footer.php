
</main>

<?php do_action( 'wombateam_content_end' ); ?>

</div>

<?php do_action( 'wombateam_content_after' ); ?>

<footer id="colophon" class="site-footer py-12 bg-bgfooter" role="contentinfo">
	<?php do_action( 'wombateam_footer' ); ?>

	<div class="container mx-auto text-center text-xs lg:text-3xl">
		<div class="px-8 lg:px-0">
			<img src="<?=get_stylesheet_directory_uri()?>/assets/img/title-logo.svg" class="mx-auto" />
			<div class="flex justify-center gap-10 mt-8 mb-4 lg:mt-12 lg:mb-6"> 
				<a href="https://twitter.com/WombaTeam" target="_blank" class="icon-tw w-10 h-10 brightness-125 border-b-0 hover:brightness-100 lg:w-20 lg:h-20"></a>
				<a href="https://t.me/WombaTeam" target="_blank" class="icon-tg w-10 h-10 brightness-125 border-b-0 hover:brightness-100 lg:w-20 lg:h-20 "></a>
				<a href="https://discord.gg/vj7RmZeBnp" target="_blank" class="icon-ds w-10 h-10 brightness-125 border-b-0 hover:brightness-100 lg:w-20 lg:h-20"></a>
			</div>
			<div class="text-center mb-8"><a href="https://rinkeby.etherscan.io/address/0x74bc0b16e51f8b53f914c41f82adeeac6219fb12" class="border-text text-sm lg:text-base" target="_blank">Verified Smart Contract</a></div>
			@<?php echo date_i18n( 'Y' );?> - All rights reserved to WombaTeam
		</div>
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
				ethereum.request({ method: 'wallet_switchEthereumChain', params:[{chainId: '0x4'}]});

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
