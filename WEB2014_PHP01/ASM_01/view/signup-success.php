<?php
echo '
    <link rel="stylesheet" href="assets/css/login-page.css">;
    ';
?>

<!-- Signuppage page section -->

<div class="login-page">
    <div class="login-page__wrap">
        <div class="login-page__left-section">
            <div class="login-page__left-img">
                <img src="./assets/images/login/output-onlinegiftools.gif" alt="" class="login-page__left-img-img">
            </div>
        </div>
        <div class="login-page__right-section">
            <div class="login-page__right-wrap">
                <div class="login-page__back-to-last-page"><i
                        class="previous-page-icon fa-solid fa-arrow-left-long"></i></div>
                <h2 class="signup-page-success__title">SINGUP SUCCESSFULLY</h2>
                <div class="signup-page-success__icon">
                    <svg width="246" height="246" viewBox="0 0 246 246" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_721_50391)">
                            <path
                                d="M123 13.667C101.376 13.667 80.2378 20.0793 62.258 32.093C44.2783 44.1067 30.2647 61.1822 21.9895 81.1603C13.7144 101.138 11.5492 123.122 15.7679 144.33C19.9865 165.539 30.3995 185.02 45.69 200.311C60.9806 215.601 80.4619 226.014 101.671 230.233C122.879 234.452 144.862 232.286 164.84 224.011C184.819 215.736 201.894 201.722 213.908 183.743C225.921 165.763 232.334 144.624 232.334 123C232.334 94.0033 220.815 66.194 200.311 45.69C179.807 25.186 151.997 13.667 123 13.667ZM123 218.667C104.079 218.667 85.5831 213.056 69.8508 202.544C54.1185 192.032 41.8567 177.091 34.6159 159.61C27.3751 142.13 25.4806 122.894 29.1719 104.337C32.8632 85.7792 41.9746 68.733 55.3538 55.3538C68.7331 41.9746 85.7792 32.8632 104.337 29.1719C122.894 25.4806 142.13 27.3751 159.61 34.6159C177.091 41.8566 192.032 54.1185 202.544 69.8508C213.056 85.5831 218.667 104.079 218.667 123C218.667 148.373 208.588 172.706 190.647 190.647C172.706 208.588 148.373 218.667 123 218.667Z"
                                fill="#A9B819" />
                            <path
                                d="M191.333 82.6834C190.053 81.4107 188.321 80.6963 186.516 80.6963C184.71 80.6963 182.978 81.4107 181.698 82.6834L105.848 158.192L64.8481 117.192C63.5976 115.842 61.8619 115.043 60.023 114.973C58.184 114.902 56.3924 115.565 55.0422 116.816C53.6921 118.066 52.8939 119.802 52.8235 121.641C52.753 123.48 53.4159 125.272 54.6664 126.622L105.848 177.667L191.333 92.3867C191.974 91.7515 192.482 90.9957 192.829 90.163C193.176 89.3303 193.354 88.4371 193.354 87.535C193.354 86.633 193.176 85.7398 192.829 84.9071C192.482 84.0744 191.974 83.3186 191.333 82.6834Z"
                                fill="#A9B819" />
                        </g>
                        <defs>
                            <clipPath id="clip0_721_50391">
                                <rect width="246" height="246" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                </div>
                <form class="login-page__form" action="./index.php?act=loginpage" method="post">
                    <input class="login-page__btn" name="signinbtn" type="submit" value="Sign in">
                </form>
            </div>
        </div>
    </div>
</div>