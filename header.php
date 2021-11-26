<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-background antialiased text-[15px] leading-5 bg-bgpage text-text font-thin lg:text-base lg:leading-8' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="<?= (is_page_template('template-parts/mint.php') ?'':'min-h-screen'); ?> flex flex-col overflow-x-hidden">

	<?php do_action( 'tailpress_header' ); ?>
	<header class="absolute w-full z-50 <?= (is_page_template('template-parts/main.php') || is_page_template('template-parts/mint.php') ?'':'bg-bgmenu'); ?>">
		<div class="mx-auto px-4 lg:container">
			<div class="lg:flex lg:justify-between lg:items-center py-3 lg:pt-6 lg:pb-10">
				<div class="flex justify-between items-center">
					<div>
						<a href="/" title="Wombateam"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/logo_wombateam.svg" alt="Wombateam Logo"></a>
					</div>

					<div class="lg:hidden">
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
						<svg width="23" height="34" viewBox="0 0 23 34" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M5.6879 19.3851H3.44181H2.40861C1.95542 19.3851 1.52602 19.3618 1.19571 19.3268C0.865407 19.2918 0.0528493 19.2012 0.0158548 18.4733C0.0158548 18.3632 0 17.9112 0 17.6962C0 17.4812 0 17.2273 0 17.1405C0 17.0537 0.0105699 16.9488 0.0158548 16.8815C0.0158548 16.8517 0.0158548 16.8167 0.00660616 16.7856C0 16.6691 0 16.0603 0 16.0526C0 15.8557 0 15.5785 0.00660616 15.4581C0.0475643 14.3921 1.9726 14.3688 1.98845 14.3675L8.24713 14.3546L11.4947 14.3468H12.8516C14.2204 14.3468 15.8495 14.3468 17.83 14.3546H19.7154L22.1927 14.3805C22.5468 14.3805 22.9855 14.5761 22.9974 15.4607C22.9974 15.5591 22.9974 15.8363 22.9974 16.0772L22.9749 16.6134V16.6471C22.963 16.7274 22.9524 16.8102 22.9432 16.8685C22.9432 16.9022 22.959 16.9981 22.959 16.9981L22.9789 17.2998C22.9934 17.6534 23.0079 18.0769 23.0079 18.1793V18.4098C23.0079 19.1118 22.2707 19.231 21.9509 19.2828C21.6014 19.3381 21.248 19.3663 20.894 19.3669H19.9598C17.4138 19.3773 14.4014 19.3799 14.371 19.3799H10.0295L5.6879 19.3851Z" fill="#37271B"/>
							<path d="M5.6879 26.6925H3.44181H2.40861C1.95542 26.6925 1.52602 26.6691 1.19571 26.6342C0.865407 26.5992 0.0528493 26.5085 0.0158548 25.7742C0.0158548 25.6641 0 25.2121 0 24.9971C0 24.7821 0 24.5282 0 24.4427C0 24.3572 0.0105699 24.251 0.0158548 24.1772C0.0158548 24.1474 0.0158548 24.1124 0.00660616 24.0814C0 23.9752 0 23.3651 0 23.3586C0 23.1618 0 22.8859 0.00660616 22.7642C0.0475643 21.6995 1.9726 21.6749 1.98845 21.6749L8.24713 21.6619L11.4947 21.6542H12.8516C14.2204 21.6542 15.8495 21.6542 17.83 21.6619H19.7154L22.1835 21.6866C22.5468 21.6866 22.9841 21.8821 22.9974 22.7667C22.9974 22.8665 22.9974 23.1423 22.9974 23.3845L22.9749 23.9195V23.9531C22.963 24.0347 22.9524 24.1176 22.9432 24.1759C22.9432 24.2083 22.959 24.3054 22.959 24.3054L22.9789 24.6072C22.9934 24.9608 23.0079 25.3843 23.0079 25.4879V25.7172C23.0079 26.4192 22.2707 26.5396 21.9509 26.5901C21.6014 26.6455 21.248 26.6736 20.894 26.6743H19.9598C17.4138 26.6847 14.4014 26.6873 14.371 26.6873H10.0295L5.6879 26.6925Z" fill="#37271B"/>
							<path d="M5.6879 33.9987H3.44181H2.41389C2.00698 33.9972 1.60041 33.9756 1.19571 33.934C0.853516 33.8977 0.0528493 33.8135 0.0158548 33.0856C0.0158548 32.9742 0 32.5235 0 32.3085C0 32.0935 0 31.8397 0 31.7542C0 31.6687 0.0105699 31.5625 0.0158548 31.4951C0.0158548 31.4653 0.0158548 31.4291 0.00660616 31.398C0 31.2814 0 30.6714 0 30.6649C0 30.468 0 30.1922 0.00660616 30.0704C0.0475643 29.0058 1.9726 28.9812 1.98845 28.9812L8.24713 28.9682L11.4947 28.9604H12.8516C14.2204 28.9604 15.8495 28.9604 17.83 28.9682H19.7154L22.1927 28.9941C22.5468 28.9941 22.9855 29.1884 22.9974 30.073C22.9974 30.1727 22.9974 30.4499 22.9974 30.6908L22.9749 31.2257V31.2607C22.963 31.341 22.9524 31.4239 22.9432 31.4822C22.9432 31.5146 22.959 31.6052 22.959 31.6052L22.9789 31.907C22.9934 32.2619 23.0079 32.6906 23.0079 32.7877V33.0273C23.0079 33.728 22.2707 33.8485 21.9509 33.9003C21.6013 33.9544 21.2479 33.9825 20.894 33.9845H19.9598C17.4138 33.9948 14.4014 33.9974 14.371 33.9974H10.0295L5.6879 33.9987Z" fill="#37271B"/>
							<path d="M22.2046 15.4775C22.2046 15.563 22.2046 15.8311 22.2046 16.0707L22.1901 16.4126V16.5512C22.1742 16.6639 22.1584 16.7805 22.1531 16.8103C22.1477 16.8468 22.1477 16.8838 22.1531 16.9203C22.1531 16.9514 22.1663 17.0175 22.1729 17.0706V17.1263L22.1874 17.3296C22.202 17.7182 22.2152 18.1067 22.2152 18.1793V18.4059C22.2152 18.4577 21.6206 18.586 20.8939 18.5898H19.9612C17.3861 18.6002 14.375 18.6028 14.375 18.6028H10.0334H5.68789H3.44179H2.40991C1.53261 18.6028 0.811222 18.5212 0.807258 18.4318C0.803294 18.3425 0.792725 17.9138 0.792725 17.6962C0.792725 17.4786 0.792725 17.2441 0.792725 17.1613C0.792725 17.0784 0.805937 16.9372 0.808579 16.9139C0.811226 16.8867 0.811226 16.8594 0.808579 16.8323C0.808579 16.8103 0.800652 16.7546 0.796688 16.7105C0.792725 16.6665 0.792725 16.2637 0.792725 16.0526C0.792725 15.8415 0.792725 15.5863 0.792725 15.4866C0.792725 15.3868 1.34104 15.1498 1.99108 15.1446H2.71644H4.28078L8.24447 15.1356C8.41491 15.1356 9.87619 15.1356 11.4921 15.1278H12.8516C14.2191 15.1278 15.8482 15.1278 17.8287 15.1356H19.7141L22.1729 15.1615C22.1928 15.2657 22.2034 15.3715 22.2046 15.4775Z" fill="#997B5F"/>
							<path d="M22.2046 22.7837C22.2046 22.8705 22.2046 23.1373 22.2046 23.3769L22.1901 23.7188V23.8587C22.1742 23.9701 22.1584 24.0879 22.1531 24.1177C22.1477 24.1542 22.1477 24.1913 22.1531 24.2278C22.1531 24.2576 22.1663 24.325 22.1729 24.3768V24.4325L22.1874 24.6358C22.202 25.0244 22.2152 25.4129 22.2152 25.4867V25.7121C22.2152 25.7652 21.6206 25.8934 20.8939 25.896H19.9612C17.3861 25.9064 14.375 25.909 14.375 25.909H10.0334H5.68789H3.44179H2.40991C1.53261 25.909 0.811222 25.8274 0.807258 25.7393C0.803294 25.6512 0.792725 25.2148 0.792725 25.0036C0.792725 24.7925 0.792725 24.5516 0.792725 24.4687C0.792725 24.3858 0.805937 24.2447 0.808579 24.2226C0.811222 24.1951 0.811222 24.1673 0.808579 24.1398C0.808579 24.1177 0.800652 24.0633 0.796688 24.018C0.792725 23.9727 0.792725 23.5725 0.792725 23.3588C0.792725 23.145 0.792725 22.8925 0.792725 22.7928C0.792725 22.693 1.34104 22.456 1.99108 22.4521H2.71644H4.28078L8.24447 22.4443L11.4947 22.4314H12.8516C14.2191 22.4314 15.8482 22.4314 17.8287 22.4392H19.7141L22.1729 22.4638C22.193 22.5693 22.2037 22.6763 22.2046 22.7837Z" fill="#997B5F"/>
							<path d="M22.2046 30.0898C22.2046 30.1766 22.2046 30.4434 22.2046 30.6843L22.1901 31.0263V31.1648C22.1742 31.2775 22.1584 31.3941 22.1531 31.4239C22.1477 31.4604 22.1477 31.4975 22.1531 31.534C22.1531 31.5638 22.1663 31.6311 22.1729 31.6829V31.7399L22.1874 31.9433C22.202 32.3383 22.2152 32.7204 22.2152 32.7929V33.0196C22.2152 33.0714 21.6206 33.1996 20.8939 33.2035H19.9612C17.3861 33.2138 14.375 33.2164 14.375 33.2164H10.0334H5.68789H3.44179H2.41255C1.53526 33.2164 0.813864 33.1348 0.809901 33.0468C0.805937 32.9587 0.792725 32.5209 0.792725 32.3098C0.792725 32.0987 0.792725 31.8578 0.792725 31.7762C0.792725 31.6946 0.805937 31.5508 0.808579 31.5288C0.811226 31.5017 0.811226 31.4743 0.808579 31.4472C0.808579 31.4239 0.800652 31.3695 0.796688 31.3177C0.792725 31.2659 0.792725 30.8773 0.792725 30.6649C0.792725 30.4525 0.792725 30.1999 0.792725 30.0989C0.792725 29.9979 1.34104 29.7622 1.99108 29.7583H2.71644H4.28078L8.24447 29.7492L11.4947 29.7375H12.8516C14.2191 29.7375 15.8482 29.7375 17.8287 29.7453H19.7141L22.1729 29.7699C22.193 29.8754 22.2037 29.9825 22.2046 30.0898Z" fill="#997B5F"/>
							<path d="M9.11644 9.47174C8.97077 9.47056 8.82704 9.43876 8.69497 9.37849L8.67912 9.37072C8.51757 9.2985 8.3683 9.2024 8.2365 9.08578C7.86764 8.77033 7.58053 8.37346 7.39884 7.92788L7.38563 7.90068C7.33318 7.77141 7.28906 7.63904 7.25351 7.50435C7.21261 7.36013 7.18128 7.21347 7.1597 7.06528V7.0355V7.01866C7.11431 6.66727 7.12099 6.3113 7.17952 5.96178C7.24764 5.5637 7.38152 5.17916 7.57589 4.82331L7.62477 4.74042C7.65913 4.68084 7.7014 4.6109 7.7569 4.52931L7.94055 4.28322L7.95376 4.26768C8.08588 4.11096 8.21801 3.97755 8.35013 3.84286C8.49693 3.70423 8.62967 3.55198 8.7465 3.38824C8.75514 3.37469 8.76139 3.3598 8.765 3.34421C8.77001 3.30117 8.77001 3.25772 8.765 3.21469C8.74841 3.05365 8.71295 2.89502 8.6593 2.74194C8.60833 2.58499 8.54608 2.43177 8.473 2.28345C8.36208 2.06744 8.2381 1.85811 8.10174 1.65658L8.03964 1.56203C7.90752 1.35868 7.49133 0.729222 8.00925 0.23446C8.17121 0.0822857 8.3874 -0.00183769 8.61173 3.0462e-05C8.89284 0.0130727 9.16464 0.102786 9.39654 0.259068C9.78718 0.503927 10.1299 0.815368 10.4086 1.17865C10.5933 1.4168 10.7527 1.67285 10.8843 1.94281C11.0431 2.26108 11.1565 2.59928 11.2212 2.94788C11.2624 3.1818 11.2713 3.4201 11.2476 3.65635C11.2181 3.93222 11.1385 4.20068 11.0124 4.449C10.8085 4.82168 10.5459 5.16045 10.2342 5.45277L10.2197 5.46702C10.1259 5.56287 10.0307 5.66001 9.95543 5.7429L9.84708 5.88148C9.84194 5.8924 9.83575 5.90281 9.82859 5.91257C9.81405 5.93588 9.80084 5.9579 9.78499 5.97992C9.70081 6.12397 9.63597 6.27807 9.59209 6.43841C9.55291 6.58961 9.53206 6.74481 9.52999 6.9008V6.94872C9.52999 7.00571 9.52999 7.06269 9.52999 7.09378V7.12486V7.15595C9.5337 7.19942 9.53987 7.24266 9.54849 7.28547L9.55773 7.33986C9.60409 7.5689 9.67863 7.79157 9.7797 8.003L9.78895 8.02372L9.79688 8.04445C9.80877 8.07424 9.82066 8.10144 9.83123 8.12604C9.86707 8.20339 9.89624 8.28354 9.91843 8.36565C9.97312 8.52968 9.97629 8.70603 9.92753 8.87184C9.87876 9.03766 9.78031 9.18529 9.64494 9.2956C9.49434 9.41154 9.30792 9.47368 9.11644 9.47174Z" fill="#37271B"/>
							<path d="M13.4462 12.408C13.2309 12.4064 13.023 12.3313 12.8582 12.1956C12.7011 12.0672 12.5797 11.9019 12.5055 11.7151C12.425 11.5167 12.3867 11.3042 12.3931 11.0908V11.0766C12.4031 10.8506 12.4513 10.6278 12.5358 10.4173C12.6231 10.2005 12.7391 9.99583 12.8807 9.80858C12.951 9.71246 13.0269 9.62035 13.1079 9.53271C13.1344 9.50292 13.1687 9.46795 13.2044 9.43168L13.244 9.39153L13.355 9.28533C13.4475 9.19855 13.5426 9.11307 13.6377 9.02629C13.7916 8.89744 13.936 8.75808 14.0698 8.60924C14.091 8.58243 14.1104 8.55431 14.1279 8.52505C14.1425 8.49915 14.1451 8.49008 14.1464 8.48879C14.156 8.45908 14.16 8.42793 14.1583 8.39683C14.1524 8.32542 14.1232 8.25776 14.0751 8.20384C13.996 8.11336 13.9075 8.03131 13.8108 7.95905C13.6338 7.82953 13.2216 7.50185 13.3365 6.97082C13.4118 6.62501 13.7263 6.25977 14.3935 6.25977H14.4503C14.8722 6.28011 15.2801 6.4146 15.6288 6.64832C15.8635 6.8026 16.068 6.99694 16.2326 7.22209C16.4199 7.477 16.5513 7.76718 16.6184 8.07432C16.6923 8.41255 16.6873 8.76274 16.6039 9.09882C16.5591 9.27475 16.4939 9.44509 16.4097 9.60653L16.4018 9.62078C16.3199 9.77174 16.2244 9.91521 16.1164 10.0495C15.9326 10.2703 15.7253 10.4714 15.498 10.6492C15.3487 10.767 15.2087 10.8693 15.0858 10.9587L14.9101 11.0882L14.8414 11.14C14.7872 11.1828 14.7436 11.2177 14.7093 11.2527C14.6394 11.3132 14.574 11.3786 14.5137 11.4483C14.4777 11.4892 14.4446 11.5325 14.4146 11.5778C14.3882 11.6257 14.371 11.662 14.3618 11.684L14.3459 11.7216C14.2975 11.8739 14.2121 12.0124 14.097 12.1252C13.9819 12.238 13.8407 12.3217 13.6853 12.3692C13.6119 12.3876 13.5365 12.3971 13.4607 12.3977L13.4462 12.408Z" fill="#37271B"/>
							<path d="M8.55887 0.792619C8.60247 0.749878 8.75573 0.792619 8.98166 0.922138C9.28729 1.11853 9.55556 1.36574 9.7744 1.65262C9.92954 1.84677 10.0633 2.05647 10.1734 2.2782C10.2985 2.53188 10.3874 2.80121 10.4377 3.07863C10.466 3.2416 10.4722 3.40753 10.4562 3.57209C10.4385 3.75604 10.3875 3.93543 10.3055 4.10183C10.1304 4.40917 9.90749 4.68795 9.64492 4.92816C9.5313 5.04343 9.42692 5.15093 9.33708 5.25325L9.21684 5.40738C9.17721 5.45789 9.14682 5.51488 9.11114 5.56668C8.98486 5.7751 8.88839 5.99954 8.82444 6.23371C8.76967 6.44864 8.73954 6.66889 8.73459 6.89037C8.73358 6.99155 8.73799 7.09271 8.74781 7.19344C8.75542 7.28773 8.76821 7.38156 8.78612 7.4745C8.84344 7.76553 8.93661 8.04866 9.06358 8.31767C9.10322 8.42128 9.1455 8.4977 9.16003 8.55987C9.17456 8.62204 9.17456 8.66478 9.14946 8.68938C9.12436 8.71399 9.07811 8.70363 9.00941 8.67384C8.91311 8.63121 8.82401 8.57443 8.74516 8.50547C8.38496 8.18437 8.12749 7.76777 8.00395 7.30612C7.96926 7.18449 7.94278 7.06075 7.92468 6.9357C7.88882 6.65755 7.89371 6.3758 7.93921 6.09901C7.99403 5.78481 8.10116 5.48158 8.25631 5.20144C8.29991 5.12762 8.34087 5.0525 8.38843 4.97996L8.54962 4.76496C8.66325 4.63544 8.78216 4.50593 8.8971 4.38806C9.0992 4.20389 9.27677 3.99545 9.4256 3.76767C9.47558 3.67988 9.50999 3.5844 9.52733 3.48532C9.54511 3.38136 9.54955 3.27563 9.54055 3.17059C9.51886 2.95024 9.47188 2.73301 9.4005 2.52299C9.34229 2.3243 9.26853 2.13031 9.17985 1.94275C9.03849 1.66704 8.87917 1.40055 8.70288 1.14491C8.57737 0.957108 8.51263 0.836656 8.55887 0.792619Z" fill="#BFA084"/>
							<path d="M14.1067 7.13521C14.0803 7.25436 14.4212 7.38777 14.696 7.72711C14.8447 7.90516 14.933 8.12434 14.9484 8.35398C14.9611 8.5479 14.9151 8.74119 14.8162 8.90962C14.7765 8.9742 14.7324 9.03608 14.6841 9.09483C14.4355 9.36062 14.1708 9.61148 13.8914 9.84604L13.7896 9.94447C13.7553 9.98074 13.7196 10.0144 13.6879 10.0494C13.625 10.1179 13.5659 10.1897 13.5109 10.2644C13.4099 10.3981 13.3269 10.5439 13.2638 10.6983C13.2109 10.8275 13.1806 10.9646 13.1739 11.1037C13.1697 11.211 13.1877 11.3181 13.2268 11.4184C13.2516 11.4848 13.2924 11.5443 13.3457 11.592C13.3601 11.6059 13.3776 11.6165 13.3969 11.6228C13.4161 11.6291 13.4366 11.6309 13.4567 11.6282C13.5241 11.6114 13.5531 11.522 13.6047 11.4029C13.634 11.3336 13.6675 11.2661 13.7051 11.2008C13.7576 11.1164 13.8164 11.0359 13.8808 10.9599C13.9623 10.8641 14.0506 10.7741 14.145 10.6905C14.1966 10.6439 14.2534 10.5985 14.3128 10.5506L14.4053 10.4807L14.5097 10.4043C14.6511 10.3007 14.8096 10.1893 14.9748 10.0572C15.1578 9.91534 15.3248 9.75468 15.4729 9.57793C15.5511 9.4807 15.6201 9.37666 15.679 9.26709C15.7363 9.15713 15.7807 9.0411 15.8111 8.92127C15.8669 8.7 15.87 8.46914 15.8204 8.24648C15.7756 8.04393 15.6888 7.85258 15.5654 7.68437C15.4571 7.53524 15.3229 7.40592 15.169 7.30229C14.9438 7.15027 14.6808 7.06077 14.408 7.04325C14.223 7.03418 14.1173 7.08081 14.1067 7.13521Z" fill="#BFA084"/>
							</svg>
						</a>
					</div>
				</div>
					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden block bg-white shadow-inner rounded-2xl mt-4 p-4 font-comet lg:shadow-none lg:mt-0 lg:p-0 lg:bg-transparent xl:bg-transparent lg:block',
							'menu_class'      => 'items-center lg:mt-6 lg:flex',
							'theme_location'  => 'primary',
							'li_class'        => 'main-menu',
							'fallback_cb'     => false,
						)
					);
					?>
			</div>
		</div>
	</header>

