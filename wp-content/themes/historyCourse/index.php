<?php get_header(); ?>

<body>
    <main class="main">
        <section id="home" class="section__bg">
            <header class="appBar">
                <div class="container">
                    <div>
                        <div class="logo">
                            <a href="#home"><img src="<?php the_field('header_logo'); ?>" alt="<?php single_post_title(); ?>" width="93" height="89" /></a>
                        </div>
                        <nav class="nav desktop">
                            <ul>
                                <?php
                                $links = [
                                    'navigation_link_1',
                                    'navigation_link_2',
                                    'navigation_link_3',
                                    'navigation_link_4'
                                ];
                                foreach ($links as $field) {
                                    $link = get_field($field);

                                    if ($link) :
                                        $link_url = esc_url($link['url']);
                                        $link_title = esc_html($link['title']);
                                        $link_target = esc_attr($link['target'] ?? '_self');
                                ?>
                                        <li>
                                            <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>">
                                                <p><?php echo $link_title; ?></p>
                                                <div class="hover">_________</div>
                                            </a>
                                        </li>
                                <?php
                                    endif;
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                    <div>
                        <div class="desktop">
                            <a href="<?php echo  get_field('social_link_phone') ?>"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.0833 16.6667C28.7409 16.6667 30.3306 17.3251 31.5028 18.4972C32.6749 19.6694 33.3333 21.2591 33.3333 22.9167C33.3333 23.4692 33.5528 23.9991 33.9435 24.3898C34.3342 24.7805 34.8641 25 35.4167 25C35.9692 25 36.4991 24.7805 36.8898 24.3898C37.2805 23.9991 37.5 23.4692 37.5 22.9167C37.5 20.154 36.4025 17.5045 34.449 15.551C32.4955 13.5975 29.846 12.5 27.0833 12.5C26.5308 12.5 26.0009 12.7195 25.6102 13.1102C25.2195 13.5009 25 14.0308 25 14.5833C25 15.1359 25.2195 15.6658 25.6102 16.0565C26.0009 16.4472 26.5308 16.6667 27.0833 16.6667Z" />
                                    <path d="M27.0833 8.33342C30.9511 8.33342 34.6604 9.86987 37.3953 12.6048C40.1302 15.3397 41.6667 19.049 41.6667 22.9167C41.6667 23.4693 41.8862 23.9992 42.2769 24.3899C42.6676 24.7806 43.1975 25.0001 43.75 25.0001C44.3025 25.0001 44.8324 24.7806 45.2231 24.3899C45.6138 23.9992 45.8333 23.4693 45.8333 22.9167C45.8333 17.9439 43.8579 13.1748 40.3416 9.6585C36.8253 6.14219 32.0561 4.16675 27.0833 4.16675C26.5308 4.16675 26.0009 4.38624 25.6102 4.77694C25.2195 5.16764 25 5.69755 25 6.25008C25 6.80262 25.2195 7.33252 25.6102 7.72322C26.0009 8.11392 26.5308 8.33342 27.0833 8.33342ZM45.3125 33.1459C45.1979 32.8115 45.0001 32.5117 44.7377 32.2748C44.4753 32.0379 44.1569 31.8717 43.8125 31.7917L31.3125 28.9376C30.9732 28.8607 30.62 28.8699 30.2852 28.9645C29.9504 29.0592 29.6447 29.2361 29.3958 29.4792C29.1042 29.7501 29.0833 29.7709 27.7292 32.3542C23.2358 30.2837 19.6354 26.6685 17.5833 22.1667C20.2292 20.8334 20.25 20.8334 20.5208 20.5209C20.764 20.2721 20.9409 19.9663 21.0355 19.6315C21.1302 19.2967 21.1394 18.9435 21.0625 18.6042L18.2083 6.25008C18.1284 5.9057 17.9622 5.58731 17.7253 5.3249C17.4884 5.06248 17.1886 4.86467 16.8542 4.75008C16.3676 4.57631 15.8652 4.45071 15.3542 4.37508C14.8276 4.25299 14.2903 4.18321 13.75 4.16675C11.2083 4.16675 8.77077 5.17642 6.97355 6.97364C5.17633 8.77087 4.16666 11.2084 4.16666 13.7501C4.17768 22.2557 7.56142 30.4098 13.5758 36.4242C19.5902 42.4387 27.7443 45.8224 36.25 45.8334C37.5085 45.8334 38.7547 45.5855 39.9174 45.1039C41.0801 44.6223 42.1365 43.9164 43.0264 43.0265C43.9163 42.1366 44.6222 41.0802 45.1038 39.9175C45.5854 38.7548 45.8333 37.5086 45.8333 36.2501C45.834 35.7198 45.7922 35.1903 45.7083 34.6667C45.6208 34.1493 45.4883 33.6404 45.3125 33.1459ZM36.25 41.6668C28.8477 41.6612 21.7502 38.7183 16.516 33.4841C11.2818 28.2499 8.33884 21.1523 8.33332 13.7501C8.33881 12.3152 8.91126 10.9406 9.92589 9.92598C10.9405 8.91135 12.3151 8.3389 13.75 8.33342H14.4375L16.6667 18.0001L15.5417 18.5834C13.75 19.5209 12.3333 20.2709 13.0833 21.8959C14.3046 25.3534 16.2808 28.4954 18.8682 31.0936C21.4556 33.6918 24.5893 35.681 28.0417 36.9167C29.7917 37.6251 30.4792 36.3126 31.4167 34.5001L32.0208 33.3542L41.6667 35.5626V36.2501C41.6612 37.685 41.0887 39.0595 40.0741 40.0742C39.0595 41.0888 37.6849 41.6613 36.25 41.6668Z" />
                                </svg>
                            </a>
                        </div>
                        <div class="desktop">
                            <a href="<?php echo  get_field('social_link_instagram') ?>"><svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.619 2.0875C16.9161 1.98175 17.6485 1.95825 23.5 1.95825C29.3515 1.95825 30.0839 1.98371 32.3791 2.0875C34.6743 2.19129 36.2409 2.5575 37.6118 3.08821C39.0472 3.63067 40.3495 4.47863 41.4266 5.57529C42.5233 6.65042 43.3693 7.95075 43.9098 9.38817C44.4424 10.759 44.8067 12.3257 44.9124 14.6169C45.0182 16.918 45.0417 17.6504 45.0417 23.4999C45.0417 29.3514 45.0162 30.0838 44.9124 32.381C44.8086 34.6722 44.4424 36.2389 43.9098 37.6097C43.3692 39.0473 42.5218 40.3498 41.4266 41.4265C40.3495 42.5232 39.0472 43.3692 37.6118 43.9097C36.2409 44.4423 34.6743 44.8066 32.383 44.9123C30.0839 45.0181 29.3515 45.0416 23.5 45.0416C17.6485 45.0416 16.9161 45.0161 14.619 44.9123C12.3277 44.8085 10.7611 44.4423 9.39022 43.9097C7.95265 43.3691 6.65016 42.5217 5.57343 41.4265C4.4775 40.3507 3.62942 39.0489 3.0883 37.6117C2.55759 36.2408 2.19334 34.6742 2.08759 32.3829C1.98184 30.0819 1.95834 29.3495 1.95834 23.4999C1.95834 17.6484 1.9838 16.916 2.08759 14.6208C2.19139 12.3257 2.55759 10.759 3.0883 9.38817C3.63022 7.95091 4.47895 6.64907 5.57538 5.57334C6.65059 4.47765 7.95177 3.62958 9.38826 3.08821C10.7591 2.5575 12.3258 2.19325 14.617 2.0875H14.619ZM32.2048 5.965C29.9331 5.86121 29.2516 5.83967 23.5 5.83967C17.7484 5.83967 17.0669 5.86121 14.7952 5.965C12.6939 6.06096 11.5542 6.4115 10.7943 6.70721C9.78972 7.09888 9.07101 7.563 8.31705 8.31696C7.60235 9.01227 7.05232 9.85872 6.7073 10.7943C6.41159 11.5541 6.06105 12.6938 5.96509 14.7951C5.8613 17.0668 5.83976 17.7483 5.83976 23.4999C5.83976 29.2515 5.8613 29.933 5.96509 32.2047C6.06105 34.306 6.41159 35.4458 6.7073 36.2056C7.05197 37.1397 7.60226 37.9877 8.31705 38.6829C9.01226 39.3977 9.86022 39.948 10.7943 40.2926C11.5542 40.5883 12.6939 40.9389 14.7952 41.0348C17.0669 41.1386 17.7464 41.1602 23.5 41.1602C29.2536 41.1602 29.9331 41.1386 32.2048 41.0348C34.3061 40.9389 35.4458 40.5883 36.2057 40.2926C37.2103 39.901 37.929 39.4368 38.683 38.6829C39.3978 37.9877 39.9481 37.1397 40.2927 36.2056C40.5884 35.4458 40.939 34.306 41.0349 32.2047C41.1387 29.933 41.1603 29.2515 41.1603 23.4999C41.1603 17.7483 41.1387 17.0668 41.0349 14.7951C40.939 12.6938 40.5884 11.5541 40.2927 10.7943C39.9011 9.78963 39.4369 9.07092 38.683 8.31696C37.9876 7.60231 37.1412 7.05229 36.2057 6.70721C35.4458 6.4115 34.3061 6.06096 32.2048 5.965ZM20.7486 30.1406C22.2852 30.7803 23.9962 30.8666 25.5894 30.3849C27.1826 29.9031 28.5592 28.8832 29.4839 27.4993C30.4087 26.1154 30.8243 24.4534 30.6598 22.7971C30.4953 21.1408 29.7608 19.593 28.5819 18.418C27.8303 17.667 26.9216 17.0919 25.9212 16.7342C24.9207 16.3764 23.8533 16.245 22.796 16.3493C21.7386 16.4536 20.7175 16.791 19.8062 17.3373C18.8949 17.8836 18.1161 18.6251 17.5257 19.5085C16.9354 20.392 16.5483 21.3953 16.3923 22.4463C16.2362 23.4972 16.3152 24.5697 16.6234 25.5866C16.9316 26.6034 17.4615 27.5392 18.1748 28.3267C18.8881 29.1141 19.7671 29.7337 20.7486 30.1406ZM15.6706 15.6705C16.6988 14.6423 17.9194 13.8267 19.2628 13.2703C20.6061 12.7138 22.046 12.4275 23.5 12.4275C24.9541 12.4275 26.3939 12.7138 27.7373 13.2703C29.0806 13.8267 30.3013 14.6423 31.3294 15.6705C32.3576 16.6987 33.1732 17.9193 33.7296 19.2627C34.2861 20.606 34.5725 22.0459 34.5725 23.4999C34.5725 24.954 34.2861 26.3938 33.7296 27.7372C33.1732 29.0805 32.3576 30.3012 31.3294 31.3293C29.2529 33.4058 26.4366 34.5724 23.5 34.5724C20.5634 34.5724 17.7471 33.4058 15.6706 31.3293C13.5941 29.2528 12.4275 26.4365 12.4275 23.4999C12.4275 20.5633 13.5941 17.747 15.6706 15.6705ZM37.0282 14.0764C37.283 13.8361 37.4869 13.547 37.628 13.2265C37.7691 12.9059 37.8444 12.5602 37.8495 12.21C37.8546 11.8598 37.7894 11.5121 37.6577 11.1875C37.5261 10.8629 37.3306 10.5681 37.0829 10.3204C36.8353 10.0727 36.5404 9.87728 36.2158 9.7456C35.8913 9.61392 35.5436 9.5487 35.1934 9.55381C34.8431 9.55892 34.4975 9.63424 34.1769 9.77532C33.8563 9.91641 33.5673 10.1204 33.3269 10.3752C32.8595 10.8707 32.6036 11.5289 32.6135 12.21C32.6234 12.8911 32.8984 13.5416 33.3801 14.0232C33.8618 14.5049 34.5122 14.7799 35.1934 14.7898C35.8745 14.7998 36.5327 14.5439 37.0282 14.0764Z" />
                                </svg>
                            </a>
                        </div>

                        <div class="mobile">
                            <button id="burger-menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <div class="mobile-menu">
                                <nav class="nav mobile">
                                    <ul>
                                        <?php
                                        $links = [
                                            'navigation_link_1',
                                            'navigation_link_2',
                                            'navigation_link_3',
                                            'navigation_link_4'
                                        ];

                                        foreach ($links as $field) {
                                            $link = get_field($field);

                                            if ($link) :
                                                $link_url = esc_url($link['url']);
                                                $link_title = esc_html($link['title']);
                                                $link_target = esc_attr($link['target'] ?? '_self');
                                        ?>
                                                <li>
                                                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>">
                                                        <p><?php echo $link_title; ?></p>
                                                        <div class="hover">_________</div>
                                                    </a>
                                                </li>
                                        <?php
                                            endif;
                                        }
                                        ?>
                                        <li>
                                            <div class="social">
                                                <div>
                                                    <a href="<?php echo  get_field('social_link_instagram') ?>"><svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.619 2.0875C16.9161 1.98175 17.6485 1.95825 23.5 1.95825C29.3515 1.95825 30.0839 1.98371 32.3791 2.0875C34.6743 2.19129 36.2409 2.5575 37.6118 3.08821C39.0472 3.63067 40.3495 4.47863 41.4266 5.57529C42.5233 6.65042 43.3693 7.95075 43.9098 9.38817C44.4424 10.759 44.8067 12.3257 44.9124 14.6169C45.0182 16.918 45.0417 17.6504 45.0417 23.4999C45.0417 29.3514 45.0162 30.0838 44.9124 32.381C44.8086 34.6722 44.4424 36.2389 43.9098 37.6097C43.3692 39.0473 42.5218 40.3498 41.4266 41.4265C40.3495 42.5232 39.0472 43.3692 37.6118 43.9097C36.2409 44.4423 34.6743 44.8066 32.383 44.9123C30.0839 45.0181 29.3515 45.0416 23.5 45.0416C17.6485 45.0416 16.9161 45.0161 14.619 44.9123C12.3277 44.8085 10.7611 44.4423 9.39022 43.9097C7.95265 43.3691 6.65016 42.5217 5.57343 41.4265C4.4775 40.3507 3.62942 39.0489 3.0883 37.6117C2.55759 36.2408 2.19334 34.6742 2.08759 32.3829C1.98184 30.0819 1.95834 29.3495 1.95834 23.4999C1.95834 17.6484 1.9838 16.916 2.08759 14.6208C2.19139 12.3257 2.55759 10.759 3.0883 9.38817C3.63022 7.95091 4.47895 6.64907 5.57538 5.57334C6.65059 4.47765 7.95177 3.62958 9.38826 3.08821C10.7591 2.5575 12.3258 2.19325 14.617 2.0875H14.619ZM32.2048 5.965C29.9331 5.86121 29.2516 5.83967 23.5 5.83967C17.7484 5.83967 17.0669 5.86121 14.7952 5.965C12.6939 6.06096 11.5542 6.4115 10.7943 6.70721C9.78972 7.09888 9.07101 7.563 8.31705 8.31696C7.60235 9.01227 7.05232 9.85872 6.7073 10.7943C6.41159 11.5541 6.06105 12.6938 5.96509 14.7951C5.8613 17.0668 5.83976 17.7483 5.83976 23.4999C5.83976 29.2515 5.8613 29.933 5.96509 32.2047C6.06105 34.306 6.41159 35.4458 6.7073 36.2056C7.05197 37.1397 7.60226 37.9877 8.31705 38.6829C9.01226 39.3977 9.86022 39.948 10.7943 40.2926C11.5542 40.5883 12.6939 40.9389 14.7952 41.0348C17.0669 41.1386 17.7464 41.1602 23.5 41.1602C29.2536 41.1602 29.9331 41.1386 32.2048 41.0348C34.3061 40.9389 35.4458 40.5883 36.2057 40.2926C37.2103 39.901 37.929 39.4368 38.683 38.6829C39.3978 37.9877 39.9481 37.1397 40.2927 36.2056C40.5884 35.4458 40.939 34.306 41.0349 32.2047C41.1387 29.933 41.1603 29.2515 41.1603 23.4999C41.1603 17.7483 41.1387 17.0668 41.0349 14.7951C40.939 12.6938 40.5884 11.5541 40.2927 10.7943C39.9011 9.78963 39.4369 9.07092 38.683 8.31696C37.9876 7.60231 37.1412 7.05229 36.2057 6.70721C35.4458 6.4115 34.3061 6.06096 32.2048 5.965ZM20.7486 30.1406C22.2852 30.7803 23.9962 30.8666 25.5894 30.3849C27.1826 29.9031 28.5592 28.8832 29.4839 27.4993C30.4087 26.1154 30.8243 24.4534 30.6598 22.7971C30.4953 21.1408 29.7608 19.593 28.5819 18.418C27.8303 17.667 26.9216 17.0919 25.9212 16.7342C24.9207 16.3764 23.8533 16.245 22.796 16.3493C21.7386 16.4536 20.7175 16.791 19.8062 17.3373C18.8949 17.8836 18.1161 18.6251 17.5257 19.5085C16.9354 20.392 16.5483 21.3953 16.3923 22.4463C16.2362 23.4972 16.3152 24.5697 16.6234 25.5866C16.9316 26.6034 17.4615 27.5392 18.1748 28.3267C18.8881 29.1141 19.7671 29.7337 20.7486 30.1406ZM15.6706 15.6705C16.6988 14.6423 17.9194 13.8267 19.2628 13.2703C20.6061 12.7138 22.046 12.4275 23.5 12.4275C24.9541 12.4275 26.3939 12.7138 27.7373 13.2703C29.0806 13.8267 30.3013 14.6423 31.3294 15.6705C32.3576 16.6987 33.1732 17.9193 33.7296 19.2627C34.2861 20.606 34.5725 22.0459 34.5725 23.4999C34.5725 24.954 34.2861 26.3938 33.7296 27.7372C33.1732 29.0805 32.3576 30.3012 31.3294 31.3293C29.2529 33.4058 26.4366 34.5724 23.5 34.5724C20.5634 34.5724 17.7471 33.4058 15.6706 31.3293C13.5941 29.2528 12.4275 26.4365 12.4275 23.4999C12.4275 20.5633 13.5941 17.747 15.6706 15.6705ZM37.0282 14.0764C37.283 13.8361 37.4869 13.547 37.628 13.2265C37.7691 12.9059 37.8444 12.5602 37.8495 12.21C37.8546 11.8598 37.7894 11.5121 37.6577 11.1875C37.5261 10.8629 37.3306 10.5681 37.0829 10.3204C36.8353 10.0727 36.5404 9.87728 36.2158 9.7456C35.8913 9.61392 35.5436 9.5487 35.1934 9.55381C34.8431 9.55892 34.4975 9.63424 34.1769 9.77532C33.8563 9.91641 33.5673 10.1204 33.3269 10.3752C32.8595 10.8707 32.6036 11.5289 32.6135 12.21C32.6234 12.8911 32.8984 13.5416 33.3801 14.0232C33.8618 14.5049 34.5122 14.7799 35.1934 14.7898C35.8745 14.7998 36.5327 14.5439 37.0282 14.0764Z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="<?php echo  get_field('social_link_phone') ?>"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M27.0833 16.6667C28.7409 16.6667 30.3306 17.3251 31.5028 18.4972C32.6749 19.6694 33.3333 21.2591 33.3333 22.9167C33.3333 23.4692 33.5528 23.9991 33.9435 24.3898C34.3342 24.7805 34.8641 25 35.4167 25C35.9692 25 36.4991 24.7805 36.8898 24.3898C37.2805 23.9991 37.5 23.4692 37.5 22.9167C37.5 20.154 36.4025 17.5045 34.449 15.551C32.4955 13.5975 29.846 12.5 27.0833 12.5C26.5308 12.5 26.0009 12.7195 25.6102 13.1102C25.2195 13.5009 25 14.0308 25 14.5833C25 15.1359 25.2195 15.6658 25.6102 16.0565C26.0009 16.4472 26.5308 16.6667 27.0833 16.6667Z" />
                                                            <path d="M27.0833 8.33342C30.9511 8.33342 34.6604 9.86987 37.3953 12.6048C40.1302 15.3397 41.6667 19.049 41.6667 22.9167C41.6667 23.4693 41.8862 23.9992 42.2769 24.3899C42.6676 24.7806 43.1975 25.0001 43.75 25.0001C44.3025 25.0001 44.8324 24.7806 45.2231 24.3899C45.6138 23.9992 45.8333 23.4693 45.8333 22.9167C45.8333 17.9439 43.8579 13.1748 40.3416 9.6585C36.8253 6.14219 32.0561 4.16675 27.0833 4.16675C26.5308 4.16675 26.0009 4.38624 25.6102 4.77694C25.2195 5.16764 25 5.69755 25 6.25008C25 6.80262 25.2195 7.33252 25.6102 7.72322C26.0009 8.11392 26.5308 8.33342 27.0833 8.33342ZM45.3125 33.1459C45.1979 32.8115 45.0001 32.5117 44.7377 32.2748C44.4753 32.0379 44.1569 31.8717 43.8125 31.7917L31.3125 28.9376C30.9732 28.8607 30.62 28.8699 30.2852 28.9645C29.9504 29.0592 29.6447 29.2361 29.3958 29.4792C29.1042 29.7501 29.0833 29.7709 27.7292 32.3542C23.2358 30.2837 19.6354 26.6685 17.5833 22.1667C20.2292 20.8334 20.25 20.8334 20.5208 20.5209C20.764 20.2721 20.9409 19.9663 21.0355 19.6315C21.1302 19.2967 21.1394 18.9435 21.0625 18.6042L18.2083 6.25008C18.1284 5.9057 17.9622 5.58731 17.7253 5.3249C17.4884 5.06248 17.1886 4.86467 16.8542 4.75008C16.3676 4.57631 15.8652 4.45071 15.3542 4.37508C14.8276 4.25299 14.2903 4.18321 13.75 4.16675C11.2083 4.16675 8.77077 5.17642 6.97355 6.97364C5.17633 8.77087 4.16666 11.2084 4.16666 13.7501C4.17768 22.2557 7.56142 30.4098 13.5758 36.4242C19.5902 42.4387 27.7443 45.8224 36.25 45.8334C37.5085 45.8334 38.7547 45.5855 39.9174 45.1039C41.0801 44.6223 42.1365 43.9164 43.0264 43.0265C43.9163 42.1366 44.6222 41.0802 45.1038 39.9175C45.5854 38.7548 45.8333 37.5086 45.8333 36.2501C45.834 35.7198 45.7922 35.1903 45.7083 34.6667C45.6208 34.1493 45.4883 33.6404 45.3125 33.1459ZM36.25 41.6668C28.8477 41.6612 21.7502 38.7183 16.516 33.4841C11.2818 28.2499 8.33884 21.1523 8.33332 13.7501C8.33881 12.3152 8.91126 10.9406 9.92589 9.92598C10.9405 8.91135 12.3151 8.3389 13.75 8.33342H14.4375L16.6667 18.0001L15.5417 18.5834C13.75 19.5209 12.3333 20.2709 13.0833 21.8959C14.3046 25.3534 16.2808 28.4954 18.8682 31.0936C21.4556 33.6918 24.5893 35.681 28.0417 36.9167C29.7917 37.6251 30.4792 36.3126 31.4167 34.5001L32.0208 33.3542L41.6667 35.5626V36.2501C41.6612 37.685 41.0887 39.0595 40.0741 40.0742C39.0595 41.0888 37.6849 41.6613 36.25 41.6668Z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div>

                                                    <a href="<?php echo  get_field('social_link_telegram') ?>">
                                                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M32.5909 5.06781L3.16612 16.7527C2.21009 17.0714 2.31631 18.4524 3.27235 18.771L10.7082 21.108L13.6825 30.4559C13.895 31.1995 14.851 31.412 15.3822 30.8809L19.7375 26.8442L28.0231 32.8992C28.6605 33.3241 29.5103 33.0054 29.7228 32.2618L35.459 7.61725C35.7777 5.8114 34.1843 4.43045 32.5909 5.06781ZM15.3822 22.9139L14.4261 28.4376L12.3016 20.7893L33.0158 7.19234L15.3822 22.9139Z" fill="#2F2F2F" />
                                                        </svg>
                                                    </a>
                                                </div>

                                        </li>
                                    </ul>

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="home__main container">
                <div>
                    <h1>
                        <?php the_field('home_section_title'); ?>
                    </h1>

                    <div class="avatar mobile">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home-1.png" alt="Рамка" class="avatar-frame" />
                        <img src="<?php the_field('home_section_image'); ?>" alt="<?php the_field('home_section_title'); ?>" class="photo" />
                    </div>

                    <button class="accent-button">
                        <?php the_field('home_section_button'); ?>
                    </button>
                </div>
                <div>
                    <div class="avatar desktop">
                        <img src="<?php echo get_template_directory_uri(); ?> /images/home-1.png" alt="Рамка" width="364" height="583" class="avatar-frame" />
                        <img src="<?php the_field('home_section_image'); ?>" alt="<?php the_field('home_section_title'); ?>" width="618" height="621" class="photo" />
                    </div>
                </div>
            </div>
        </section>

        <section id="about">
            <div id="bg-1_1" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-1.png" alt="bg_element-1"></div>
            <div id="bg-2_1" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-2.png" alt="bg_element-2"></div>
            <div class="container">
                <div class="section__title-1">
                    <h2><?php the_field('about_section_title'); ?></h2>
                </div>
                <div class="section__text">
                    <p><?php the_field('about_section_text'); ?></p>
                </div>
                <div class="section__collection">
                    <div class="section__card" id="card-1">
                        <span><?php the_field('about_section_card_1'); ?></span>
                    </div>
                    <div class="section__card" id="card-2">
                        <span><?php the_field('about_section_card_2'); ?></span>
                    </div>
                    <div class="section__card" id="card-3">
                        <span><?php the_field('about_section_card_3'); ?></span>
                    </div>
                    <div class="section__card" id="card-4">
                        <span><?php the_field('about_section_card_4'); ?></span>
                    </div>
                    <div class="section__card" id="card-5">
                        <span><?php the_field('about_section_card_5'); ?></span>
                    </div>
                    <div class="section__card" id="card-6">
                        <span><?php the_field('about_section_card_6'); ?></span>
                    </div>
                </div>
            </div>
        </section>

        <section id="advantages" class="section__bg">

            <div id="bg-5_1" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-5.png" alt="bg_element-5"></div>
            <div class="container">
                <div class="section__title-2">
                    <h2><?php the_field('advantages_section_title'); ?>
                        <div id="bg-3_1" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-3.png" alt="bg_element-3"></div>
                        <div id="bg-4_1" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-4.png" alt="bg_element-4"></div>
                    </h2>
                </div>
                <div class="section__collection">
                    <div class="section__column">
                        <div class="section__card">
                            <span class="number"><?php the_field('advantages_card_1_number'); ?></span>
                            <div class="text"><?php the_field('advantages_card_1_text'); ?></div>
                        </div>
                        <div class="section__card">
                            <span class="number"><?php the_field('advantages_card_2_number'); ?></span>
                            <div class="text"><?php the_field('advantages_card_2_text'); ?></div>
                        </div>
                        <div class="section__card">
                            <span class="number"><?php the_field('advantages_card_3_number'); ?></span>
                            <div class="text"><?php the_field('advantages_card_3_text'); ?></div>
                        </div>
                    </div>
                    <div class="section__column">
                        <div class="section__card">
                            <span class="number"><?php the_field('advantages_card_4_number'); ?></span>
                            <div class="text"><?php the_field('advantages_card_4_text'); ?></div>
                        </div>
                        <div class="section__card">
                            <span class="number"><?php the_field('advantages_card_5_number'); ?></span>
                            <div class="text"><?php the_field('advantages_card_5_text'); ?></div>
                        </div>
                        <div class="section__card">
                            <span class="number"><?php the_field('advantages_card_6_number'); ?></span>
                            <div class="text"><?php the_field('advantages_card_6_text'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="reviews">
            <div id="bg-2_2" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-2.png" alt="bg_element-2"></div>
            <div id="bg-4_2" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-4.png" alt="bg_element-4"></div>
            <div id="bg-6_1" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-6.png" alt="bg_element-6"></div>
            <div class="container">
                <div class="section__title-1">
                    <h2><?php the_field('reviews_section_title'); ?></h2>
                </div>
                <div class="section__collection">
                    <div class="section__card" id="review-1">
                        <div id="bg-1_2" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-1.png" alt="bg_element-1"></div>
                        <div class="title"><?php the_field('review_1_title'); ?></div>
                        <div class="text">
                            <?php the_field('review_1_text'); ?>
                        </div>
                    </div>
                    <div class="section__card" id="review-2">
                        <div class="title"><?php the_field('review_2_title'); ?></div>
                        <div class="text">
                            <?php the_field('review_2_text'); ?>
                        </div>
                    </div>
                    <div class="section__card" id="review-3">
                        <div id="bg-5_2" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-5.png" alt="bg_element-5"></div>
                        <div class="title"><?php the_field('review_3_title'); ?></div>
                        <div class="text">
                            <?php the_field('review_3_text'); ?>
                        </div>
                    </div>
                    <div class="section__card" id="review-4">
                        <div id="bg-3_2" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-3.png" alt="bg_element-3"></div>
                        <div id="bg-4_3" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-4.png" alt="bg_element-4"></div>
                        <div class="title"><?php the_field('review_4_title'); ?></div>
                        <div class="text">
                            <?php the_field('review_4_text'); ?>
                        </div>
                    </div>
                    <div class="section__card" id="review-5">
                        <div id="bg-6_2" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-6.png" alt="bg_element-6"></div>
                        <div class="title"><?php the_field('review_5_title'); ?></div>
                        <div class="text">
                            <?php the_field('review_5_text'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        let menuBtn = document.querySelector("#burger-menu");
        let menu = document.querySelector(".mobile-menu");

        menuBtn.addEventListener("click", function(e) {
            e.stopPropagation();
            menuBtn.classList.toggle("active");
            menu.classList.toggle("active");
        });

        document.addEventListener("click", function(e) {
            if (!menu.contains(e.target) && !menuBtn.contains(e.target)) {
                menuBtn.classList.remove("active");
                menu.classList.remove("active");
            }
        });
    </script>
    <?php get_footer(); ?>