<!DOCTYPE html>
<html translate="en">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" id="viewport">
        		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
			<link rel="pingback" href="<?php esc_url(get_bloginfo( 'pingback_url' )); ?>">
		<?php endif; ?>
     
        <link href="https://fonts.cdnfonts.com/css/helvetica-neue-55" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    

    
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <div class="container">

        <div class="header_inner jsb">    
            <a href="#" class="logo">Logo</a>
            <div class="header_nav  ">
                <nav class="jsb desk">
                <a href="#">Главная</a>
                <a href="#">Каталог</a>
                <a href="#">О компании</a>
                <a href="#">Клиентам</a>
                </nav>

          
                <div class="btns">
                    <a href="#" class="cart"> <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25" cy="25" r="24.5" stroke="#fe6402"/>
                        <path d="M18.8897 36.4138H31.1103C33.2552 36.4138 35 34.669 35 32.5241V20.8966C35 20.5172 34.6897 20.2069 34.3103 20.2069H30.1724V19.1724C30.1724 16.3207 27.8517 14 25 14C22.1483 14 19.8276 16.3207 19.8276 19.1724V20.2069H15.6897C15.3103 20.2069 15 20.5172 15 20.8966V32.5241C15 34.669 16.7448 36.4138 18.8897 36.4138ZM21.2069 19.1724C21.2069 17.0793 22.9069 15.3793 25 15.3793C27.0931 15.3793 28.7931 17.0793 28.7931 19.1724V20.2069H21.2069V19.1724ZM16.3793 21.5862H19.8276V23.3103C19.8276 23.6897 20.1379 24 20.5172 24C20.8966 24 21.2069 23.6897 21.2069 23.3103V21.5862H28.7931V23.3103C28.7931 23.6897 29.1034 24 29.4828 24C29.8621 24 30.1724 23.6897 30.1724 23.3103V21.5862H33.6207V32.5241C33.6207 33.9069 32.4931 35.0345 31.1103 35.0345H18.8897C17.5069 35.0345 16.3793 33.9069 16.3793 32.5241V21.5862Z" fill="#fe6402"/>
                        </svg>
                        </a>
                        <a href="#" class="search">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="24.5" stroke="#fe6402"/>
                                <path d="M34.8301 34.1163L29.2137 28.4683C30.6034 26.8852 31.323 24.8236 31.2203 22.7196C31.1177 20.6155 30.2008 18.6338 28.6637 17.1934C27.1265 15.753 25.0894 14.9668 22.9831 15.0011C20.8768 15.0353 18.8664 15.8873 17.3768 17.3768C15.8873 18.8664 15.0353 20.8768 15.0011 22.9831C14.9668 25.0894 15.753 27.1265 17.1934 28.6637C18.6338 30.2008 20.6155 31.1177 22.7196 31.2203C24.8236 31.323 26.8852 30.6034 28.4683 29.2137L34.1163 34.8511C34.1634 34.9013 34.2203 34.9414 34.2835 34.9687C34.3467 34.9961 34.4148 35.0102 34.4837 35.0102C34.5526 35.0102 34.6207 34.9961 34.6839 34.9687C34.7471 34.9414 34.804 34.9013 34.8511 34.8511C34.9 34.8026 34.9384 34.7445 34.964 34.6806C34.9896 34.6166 35.0018 34.548 34.9998 34.4792C34.9978 34.4103 34.9818 34.3425 34.9526 34.2801C34.9234 34.2177 34.8817 34.1619 34.8301 34.1163ZM23.1248 30.1795C21.7337 30.1795 20.3738 29.767 19.2171 28.9941C18.0605 28.2213 17.1589 27.1227 16.6266 25.8375C16.0942 24.5523 15.9549 23.138 16.2263 21.7736C16.4977 20.4092 17.1676 19.156 18.1513 18.1723C19.135 17.1886 20.3882 16.5187 21.7526 16.2473C23.117 15.9759 24.5313 16.1152 25.8165 16.6476C27.1017 17.1799 28.2003 18.0814 28.9731 19.2381C29.746 20.3948 30.1585 21.7547 30.1585 23.1458C30.1557 25.0104 29.4138 26.7979 28.0953 28.1163C26.7769 29.4348 24.9894 30.1767 23.1248 30.1795Z" fill="#fe6402"/>
                                </svg>
                                
                        </a>
                        <a href="#form" class="btn desk">Заказать звонок</a>
                    </div>
                    <div class="burger">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="30" height="30" rx="4" fill="#FE6402"/>
                            <path d="M22 11.5H8C7.45 11.5 7 11.95 7 12.5C7 13.05 7.45 13.5 8 13.5H22C22.55 13.5 23 13.05 23 12.5C23 11.95 22.55 11.5 22 11.5Z" fill="#F5F5F5"/>
                            <path d="M22 16.5H8C7.45 16.5 7 16.95 7 17.5C7 18.05 7.45 18.5 8 18.5H22C22.55 18.5 23 18.05 23 17.5C23 16.95 22.55 16.5 22 16.5Z" fill="#F5F5F5"/>
                            </svg>
                            
                            </div>
            </div>

        </div>
    </div>
    <div class="burger_inner popup">

        <div class="close"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.1834 15.021L29.513 2.75879C30.1041 2.17364 30.1041 1.22639 29.513 0.642738C28.9234 0.0575932 27.9657 0.0575932 27.3761 0.642738L15.057 12.8945L2.62407 0.460129C2.03445 -0.130987 1.07675 -0.130987 0.487123 0.460129C-0.1025 1.05274 -0.1025 2.01193 0.487123 2.60305L12.911 15.0284L0.442217 27.4283C-0.147406 28.0134 -0.147406 28.9607 0.442217 29.5443C1.03184 30.1295 1.98954 30.1295 2.57917 29.5443L15.0374 17.1549L27.4208 29.5399C28.0105 30.131 28.9682 30.131 29.5578 29.5399C30.1474 28.9473 30.1474 27.9881 29.5578 27.3969L17.1834 15.021Z" fill="#F5F5F5" />
        </svg></div>
        <div class="header_inner">
            
            <a href="#">Главная</a>
            <a href="#">Каталог</a>
            <a href="#">О компании</a>
            <a href="#">Клиентам</a>
        </div>
    </div>
</header>

<div class="wrapper">