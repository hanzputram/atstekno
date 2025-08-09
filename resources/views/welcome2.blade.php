<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');

    .font {
        font-family: "Outfit", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }

    .marquee {
        animation: scrolling var(--marquee-time) linear infinite;
    }

    .marquee:hover {
        animation-play-state: paused;
    }

    @keyframes scrolling {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(calc(-1 * var(--marquee-width)));
        }
    }
</style>

<body class="font bg-white max-w-[100%] mx-auto">
    <div class="absolute w-[300px] z-[-2] h-[300px] rounded-full top-[0px] right-[0px] bg-red-600 blur-[180px]">
    </div>
    <div class="absolute w-[300px] z-[-2] h-[300px] rounded-full bottom-[0px] left-[0px] bg-red-600 blur-[180px]">
    </div>
    <div class="absolute w-[300px] z-[-2] h-[300px] rounded-full bottom-[-2000px] left-[0px] bg-red-600 blur-[180px]">
    </div>
    <div class="absolute w-[300px] z-[-2] h-[300px] rounded-full bottom-[-800px] right-[0px] bg-red-600 blur-[180px]">
    </div>
    <div
        class="absolute w-[300px] z-[-2] h-[300px] rounded-full bottom-[-2300px] overflow-hidden right-[0px] bg-red-600 blur-[180px]">
    </div>
    <x-navbar />
    <div class="container relative z-[-1]">
        <div class="max-w-[93%] mx-auto">
            <p class="text-5xl font-medium flex justify-center mt-24">
                Introducing &nbsp;PT&nbsp; <span class="text-red-600">A</span>nugerah &nbsp; <span
                    class="text-red-600">T</span>ama &nbsp; <span class="text-red-600">S</span>ejati
            </p>
            <p class="text-5xl font-medium flex justify-center text-[#626262] mt-5">
                The Best &nbsp; <span class="text-black relative">Industrial Electrical Supplier <svg class="mt-2"
                        width="600" height="29" viewBox="0 0 738 29" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M310.858 3.24122C329.804 2.82094 348.044 3.15559 367.052 2.85027C390.647 2.4717 414.682 1.49651 438.298 1.27754C461.805 1.06015 485.437 0.908834 508.995 0.80811C532.58 0.707108 556.131 0.656125 579.729 0.637377C603.277 0.61927 626.876 0.633348 650.443 0.665769C666.465 0.687642 682.469 0.718094 698.482 0.751817C705.51 0.76649 712.504 0.782114 719.538 0.797702C724.77 0.80967 730.009 0.821608 735.251 0.8335C735.98 0.835295 736.679 0.868625 737.195 0.928378C737.71 0.988239 738.001 1.06914 738.002 1.15621C738.002 1.24333 737.71 1.33114 737.194 1.40266C736.679 1.474 735.98 1.52288 735.251 1.54109C729.966 1.67214 724.685 1.80315 719.41 1.93413C713.536 2.07967 707.679 2.22521 701.823 2.37018C700.898 2.02352 699.623 1.76721 697.245 1.67504C696.031 1.62803 694.262 1.62312 692.961 1.70459C691.792 1.77778 690.913 1.89435 690.079 2.0054C689.206 2.12155 688.378 2.23182 687.311 2.27974C685.5 2.36111 683.783 2.53274 681.977 2.7131C681.318 2.77877 680.647 2.84568 679.957 2.90973C674.349 3.04752 668.756 3.18469 663.166 3.32138C660.998 3.30862 659.006 3.3011 657.319 3.33549C655.805 3.36633 654.42 3.45802 653.042 3.56805C652.176 3.58914 651.31 3.61022 650.444 3.63131C644.873 3.76691 639.244 3.90226 633.659 4.03672C629.301 3.99278 624.718 3.95433 618.761 3.98439C616.196 3.99733 613.668 3.97584 611.242 3.95529C607.665 3.92484 604.255 3.89692 601.296 3.98376C599.315 4.04184 597.232 4.01635 595.157 3.99093C592.379 3.95682 589.596 3.92295 587.066 4.09108C585.478 4.19678 584.021 4.31958 582.673 4.43346C580.529 4.61464 578.658 4.77312 576.964 4.8031C573.789 4.85929 571.017 5.00622 568.577 5.13582C565.644 5.29169 563.191 5.42249 561.036 5.34062C560.709 5.32821 560.335 5.31097 559.915 5.29131C557.702 5.18768 554.15 5.02211 549.039 5.20077C547.223 5.26437 545.52 5.39213 543.854 5.51748C541.425 5.7 539.094 5.87693 536.553 5.84314C536.173 5.83807 535.777 5.80184 535.416 5.76872C534.957 5.72662 534.557 5.68988 534.32 5.72921C533.627 5.84457 532.526 5.9763 531.331 6.11964C530.454 6.22495 529.525 6.3366 528.669 6.45231C522.145 6.5942 515.564 6.73508 509.023 6.8733C506.025 6.93667 503.052 6.99928 500.023 7.06219C498.479 6.92179 496.903 6.79778 495.242 6.71014C493.071 6.59562 490.262 6.58874 486.659 6.57971C483.985 6.57337 480.855 6.56616 477.241 6.51451C470.577 6.41853 463.658 6.5542 459.264 6.71385C458.333 6.74761 457.4 6.78287 456.402 6.821C452.66 6.96514 447.811 7.14768 438.861 7.40176C430.313 7.64339 423.121 7.77873 417.648 7.88231C414.854 7.93517 412.545 7.97889 410.779 8.02384C407.758 8.10074 404.073 8.18434 400.305 8.26981C394.432 8.40314 388.645 8.53709 385.262 8.64955C384.072 8.68934 382.826 8.73512 381.485 8.7843C377.77 8.92056 373.31 9.085 367.082 9.23979C360.605 9.40146 356.566 9.42919 352.364 9.41438C350.661 9.40831 349.163 9.29721 347.625 9.1824C345.458 9.01924 343.142 8.85006 340.03 8.96566C339.304 8.99264 338.532 9.0384 337.725 9.08639C336.244 9.17454 334.648 9.2701 333.019 9.26883C332.451 9.26839 331.951 9.24017 331.461 9.21251C330.922 9.1821 330.398 9.15233 329.782 9.161C327.501 9.19312 325.296 9.2416 323.346 9.28485C320.832 9.34062 318.742 9.38748 317.448 9.37876C315.127 9.36342 312.523 9.463 309.948 9.56357C307.975 9.64048 305.994 9.71856 304.087 9.74718C298.498 9.83151 291.053 10.0742 283.149 10.3989C280.181 10.5213 277.78 10.4861 274.492 10.4463C272.477 10.421 270.199 10.392 267.405 10.3958C265.823 10.3978 264.493 10.5022 263.211 10.6C262.042 10.6898 260.965 10.7729 259.863 10.7639C258.89 10.7559 258.275 10.6429 257.692 10.5355C257.044 10.4161 256.434 10.3037 255.425 10.3512C254.888 10.3764 254.237 10.4546 253.467 10.5475C253.163 10.5843 252.837 10.6233 252.478 10.6627C252.496 10.6366 252.5 10.6135 252.5 10.5961C252.498 10.4732 251.437 10.4327 250.404 10.3932C249.992 10.3774 249.581 10.3619 249.245 10.3411C248.005 10.2648 245.679 10.3024 243.924 10.3492C243.181 10.3689 242.508 10.3469 241.727 10.3212C241.032 10.2984 240.203 10.2738 239.18 10.2729C238.595 10.2724 238.146 10.2477 237.775 10.227C237.507 10.2121 237.279 10.1993 237.068 10.1996C236.886 10.2 236.739 10.2389 236.575 10.2826C236.457 10.3141 236.328 10.3483 236.17 10.3724C235.792 10.4301 235.307 10.4567 234.966 10.4497C234.809 10.4464 234.684 10.4358 234.561 10.4252C234.417 10.4129 234.274 10.4005 234.078 10.3998C233.177 10.3966 232.306 10.4588 231.407 10.5234C231.059 10.5484 230.706 10.5737 230.346 10.5958C229.654 10.6372 228.934 10.6676 228.167 10.6643C227.794 10.6627 227.398 10.6472 227.015 10.6322C226.614 10.6165 226.225 10.6015 225.896 10.6033C224.559 10.611 223.316 10.7318 222.18 10.8429C221.424 10.9169 220.715 10.9865 220.058 11.0158C218.831 11.07 218.145 11.1943 217.659 11.2856C217.405 11.3329 217.197 11.3718 216.98 11.3877C216.78 11.3903 216.578 11.3923 216.38 11.394C216.198 11.3912 216.01 11.3883 215.835 11.3957C215.822 11.3963 215.808 11.3971 215.795 11.3977C214.69 11.4025 213.611 11.3962 212.547 11.3898C210.189 11.3746 207.754 11.3636 205.229 11.4828C204.686 11.5084 204.135 11.5682 203.577 11.629C202.894 11.7034 202.198 11.7796 201.491 11.7967C199.84 11.8364 198.032 11.8193 196.331 11.8008C193.733 11.7741 191.365 11.7446 188.994 11.9352C188.225 11.9976 187.481 12.0845 186.739 12.1721C186.325 12.2208 185.91 12.27 185.494 12.3148C185.58 12.2542 185.626 12.1985 185.668 12.1465C185.756 12.0394 185.831 11.9477 186.231 11.8588C187.177 11.6487 188.259 11.3672 188.133 11.1914C188.098 11.1437 188.123 11.0886 188.15 11.033C188.219 10.8935 188.287 10.751 187.394 10.7165C186.792 10.6933 185.256 10.6454 184.296 10.7823C184.087 10.8121 183.961 10.8616 183.82 10.9167C183.568 11.0156 183.267 11.1328 182.362 11.1881C182.21 11.1974 182.045 11.2068 181.874 11.216C181.185 11.2533 180.377 11.2962 180.087 11.3789C179.75 11.4742 179.826 11.5677 179.914 11.6767C180.03 11.8186 180.166 11.9872 179.442 12.2207C179.298 12.2668 179.023 12.2904 178.815 12.3083C178.669 12.3208 178.558 12.3307 178.547 12.3435C178.535 12.3582 178.582 12.3862 178.643 12.4217C178.858 12.5468 179.227 12.7655 177.711 12.8276C177.302 12.8444 176.835 12.8496 176.417 12.8542C175.802 12.861 175.295 12.8667 175.228 12.9069C175.203 12.9222 175.186 12.9384 175.171 12.955C174.685 12.9675 174.201 12.9801 173.719 12.9927C173.12 12.9687 172.18 13.0061 171.07 13.0512C170.799 13.0623 170.514 13.0737 170.218 13.0851C169.241 13.1113 168.271 13.1376 167.311 13.1637C166.545 13.1729 165.753 13.1713 164.887 13.1545C163.113 13.1222 161.591 13.0171 160.122 12.9144C159.503 12.8711 158.893 12.8281 158.278 12.7914C158.516 12.7744 158.732 12.7571 158.898 12.7383C160.034 12.61 160.492 12.4278 160.911 12.2601C161.19 12.1486 161.454 12.0434 161.897 11.965C162.709 11.8216 162.623 11.6936 162.559 11.599C162.526 11.5499 162.5 11.5097 162.608 11.481C162.696 11.4581 162.898 11.4411 163.108 11.4235C163.291 11.4082 163.48 11.3923 163.601 11.3718C165.07 11.1239 164.623 11.0294 163.97 10.8918C163.61 10.8159 163.192 10.7268 162.996 10.5917C162.828 10.4472 162.88 10.401 163.649 10.3116C163.045 10.26 162.443 10.2085 161.844 10.157C161.611 10.1708 161.436 10.2242 161.191 10.3111C160.752 10.4664 159.319 10.5727 158.216 10.6559C157.701 10.6945 157.272 10.7276 157 10.7597C155.615 10.9279 156.027 11.0685 156.387 11.1923C156.586 11.2604 156.769 11.3234 156.631 11.3831C156.572 11.4086 156.658 11.4281 156.745 11.4481C156.813 11.4635 156.882 11.4792 156.886 11.498C156.909 11.6346 156.09 11.7695 155.338 11.8948C154.908 11.9665 154.499 12.0353 154.274 12.0993C154.206 12.1188 154.152 12.1381 154.101 12.1568C154.027 12.184 153.955 12.21 153.841 12.2344C153.583 12.29 153.048 12.3422 152.467 12.3993C152.169 12.4286 151.859 12.4592 151.566 12.4922C151.187 12.5349 151.054 12.595 150.912 12.6578C150.812 12.7021 150.707 12.7479 150.514 12.7901C150.173 12.8661 149.427 12.9198 148.74 12.9697C148.441 12.9914 148.153 13.0126 147.911 13.0345C147.813 13.0434 147.766 13.0548 147.756 13.0681C146.638 13.1591 145.583 13.249 144.567 13.3368C139.397 13.7817 134.92 14.174 128.251 14.3747C126.973 14.4139 125.622 14.4887 124.284 14.5797C119.835 14.76 115.5 14.947 111.107 15.1542C110.225 15.0832 109.158 15.0439 107.926 15.0389C105.504 15.0365 103.176 15.1535 100.247 15.3141C98.1745 15.4267 95.753 15.5649 93.0471 15.6802C88.4518 15.8784 83.6781 16.1389 78.3646 16.5604C73.0621 16.9776 66.9634 17.5685 62.7033 18.0514C60.3366 18.3172 57.9211 18.5018 55.5977 18.6961C54.4738 18.7882 53.3237 18.8889 52.3189 18.9885C50.4431 19.1762 48.8454 19.386 47.7431 19.663C47.1842 19.8021 46.6526 19.9829 46.143 20.1582C45.7805 20.283 45.4233 20.4057 45.0625 20.511C44.0878 20.6351 43.1281 20.7596 42.1542 20.8883C40.4194 21.0197 37.7371 21.2944 35.1841 21.8524C34.1782 21.9984 33.188 22.1451 32.2241 22.2903C30.1221 22.6084 28.07 22.9318 26.0012 23.2734C25.3246 23.3851 24.6457 23.4987 23.9601 23.6154C23.9537 23.6164 23.9472 23.6175 23.9407 23.6186C22.568 23.852 21.179 24.0956 19.8206 24.3402C19.2346 24.4459 18.6593 24.5506 18.0719 24.6591C16.5939 24.9319 15.1038 25.2155 13.6396 25.5009C12.8713 25.6504 12.0844 25.8062 11.302 25.9626C10.0375 26.2154 8.75174 26.4779 7.48356 26.7401C5.42665 27.1654 3.3825 27.5974 1.33353 28.0321C0.998171 28.1032 0.672828 28.1573 0.430038 28.1812C0.187324 28.2051 0.045475 28.1972 0.0365422 28.1571C0.0277089 28.1171 0.152624 28.047 0.381785 27.9613C0.610818 27.8756 0.926497 27.7813 1.25867 27.6974C3.29127 27.1849 5.32102 26.6754 7.3639 26.1733C8.62267 25.8638 9.8989 25.5541 11.1552 25.2543C11.9327 25.0689 12.7139 24.8848 13.478 24.7064C14.9333 24.3669 16.4181 24.0287 17.8888 23.7023C18.4734 23.5727 19.0455 23.4468 19.6291 23.3199C20.9845 23.025 22.3722 22.7312 23.7429 22.4481C23.7512 22.4464 23.7595 22.4446 23.7677 22.4429C24.4465 22.3028 25.1177 22.1659 25.7876 22.0309C27.8501 21.6158 29.897 21.2193 31.9943 20.8291C33.0798 20.6263 34.2012 20.4219 35.3307 20.22C35.9471 20.1096 36.5778 19.9981 37.1917 19.8905C37.5225 19.8325 37.8603 19.7739 38.2025 19.7149C42.8448 18.9119 47.4569 18.1766 52.1178 17.4802C55.3175 17.0019 58.5216 16.5469 61.7386 16.1194C69.6266 15.0701 77.4798 14.1985 85.4164 13.4327C93.2742 12.6735 101.252 12.0151 109.127 11.4291C149.306 8.49978 189.796 6.84822 230.215 5.45898C240.152 5.12364 250.469 4.8065 260.412 4.51966C267.663 4.31103 275.108 4.11034 282.24 3.92625C289.603 3.73745 296.651 3.5649 304.047 3.39515C306.246 3.34427 308.514 3.29305 310.858 3.24122Z"
                            fill="#FF0000" />
                    </svg></span> &nbsp; in Indonesia
            </p>
            <div class="flex justify-between my-20">
                <img src="images/SE.webp" width="500px" class="shadow-md" alt="">
                <img src="images/GAE.webp" width="500px" class="shadow-md" alt="">
            </div>
            <div class="flex justify-between items-center">
                <p class="text-5xl font-medium">
                    PT&nbsp; <span class="text-red-600">A</span>nugerah &nbsp; <span class="text-red-600">T</span>ama
                    &nbsp;
                    <span class="text-red-600">S</span>ejati
                </p>
                <div class="h-[2px] w-[40%] bg-red-600">
                </div>
            </div>
            <p class="text-2xl mt-6 text-justify mb-10">
                PT. Anugerah Tama Sejati or shortened as PT ATS was formed in 1st august 2019, located in Surabaya, East
                Java, Indonesia. Our Company engaged in electrical equipment for industries. Besides selling electrical
                equipment for industry, PT Anugerah Tama Sejati provide solutions and give the best service for all of
                our customers.
            </p>
            <div class="flex justify-between items-center">
                <div class="h-[2px] w-[60%] bg-red-600">
                </div>
                <p class="text-5xl font-medium">
                    Vision & Mision
                </p>
            </div>
            <p class="text-5xl font-medium my-10">
                Our <span class="text-red-600">Vision</span>
            </p>
            <p class="text-2xl">
                PT Anugerah Tama Sejati is committed in providing the best service with professionalism in giving
                solutions to fulfill our customer’s needs.
            </p>
            <p class="text-5xl font-medium my-10">
                Our <span class="text-red-600">Mission</span>
            </p>
            <p class="text-2xl">
                PT. Anugerah Tama Sejati is a creative, innovative, trusted and to be a mainstay for our customer. And
                to become a healthy and growing company for our employees.
            </p>
            <div class="w-[100%] h-[2px] bg-red-600 mt-10">
            </div>
            <p class="flex justify-center text-5xl mt-10 font-bold">
                Our Stockist
            </p>
            <div class="overflow-hidden my-10 mx-auto py-2">
                <ul class="marquee py-3 inline-flex space-x-4 max-w-full items-center" x-data="Marquee({ speed: 1, spaceX: 4, dynamicWidthElements: true })">
                    <!-- if you are putting elements that require dynamic width calculations (e.g. images), add the flex-shrink-0 class to each li element -->
                    <li class="flex-shrink-0">
                        <img src="images/schneider.png" class="max-h-20 w-auto">
                    </li>
                    <li class="flex-shrink-0">
                        <img src="images/gaee.png" class="max-h-20 w-auto">
                    </li>
                    <li class="flex-shrink-0">
                        <img src="images/himel.png" class="max-h-20 w-auto">
                    </li>
                    <li class="flex-shrink-0">
                        <img src="images/omron.png" class="max-h-20 w-auto">
                    </li>
                    <li class="flex-shrink-0">
                        <img src="images/autonics.png" class="max-h-20 w-auto">
                    </li>
                    <li class="flex-shrink-0">
                        <img src="images/socomec.png" class="max-h-20 w-auto">
                    </li>
                    <li class="flex-shrink-0">
                        <img src="images/legrand.png" class="max-h-20 w-auto">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <x-footer />
    <script>
        /**
         * See https://stackoverflow.com/a/24004942/11784757
         */
        const debounce = (func, wait, immediate = true) => {
            let timeout
            return () => {
                const context = this
                const args = arguments
                const callNow = immediate && !timeout
                clearTimeout(timeout)
                timeout = setTimeout(function() {
                    timeout = null
                    if (!immediate) {
                        func.apply(context, args)
                    }
                }, wait)
                if (callNow) func.apply(context, args)
            }
        }

        /**
         * Append the child element and wait for the parent's
         * dimensions to be recalculated
         * See https://stackoverflow.com/a/66172042/11784757
         */
        const appendChildAwaitLayout = (parent, element) => {
            return new Promise((resolve, _) => {
                const resizeObserver = new ResizeObserver((entries, observer) => {
                    observer.disconnect()
                    resolve(entries)
                })
                resizeObserver.observe(element)
                parent.appendChild(element)
            })
        }

        document.addEventListener('alpine:init', () => {
            Alpine.data(
                'Marquee',
                ({
                    speed = 0.01,
                    spaceX = 0,
                    dynamicWidthElements = false
                }) => ({
                    dynamicWidthElements,
                    async init() {
                        if (this.dynamicWidthElements) {
                            const images = this.$el.querySelectorAll('img')
                            // If there are any images, make sure they are loaded before
                            // we start cloning them, since their width might be dynamically
                            // calculated
                            if (images) {
                                await Promise.all(
                                    Array.from(images).map(image => {
                                        return new Promise((resolve, _) => {
                                            if (image.complete) {
                                                resolve()
                                            } else {
                                                image.addEventListener('load', () => {
                                                    resolve()
                                                })
                                            }
                                        })
                                    })
                                )
                            }
                        }

                        // Store the original element so we can restore it on screen resize later
                        this.originalElement = this.$el.cloneNode(true)
                        const originalWidth = this.$el.scrollWidth + spaceX * 4
                        // Required for the marquee scroll animation 
                        // to loop smoothly without jumping 
                        this.$el.style.setProperty('--marquee-width', originalWidth + 'px')
                        this.$el.style.setProperty(
                            '--marquee-time',
                            ((1 / speed) * originalWidth) / 100 + 's'
                        )
                        this.resize()
                        // Make sure the resize function can only be called once every 100ms
                        // Not strictly necessary but stops lag when resizing window a bit
                        window.addEventListener('resize', debounce(this.resize.bind(this), 100))
                    },
                    async resize() {
                        // Reset to original number of elements
                        this.$el.innerHTML = this.originalElement.innerHTML

                        // Keep cloning elements until marquee starts to overflow
                        let i = 0
                        while (this.$el.scrollWidth <= this.$el.clientWidth) {
                            if (this.dynamicWidthElements) {
                                // If we don't give this.$el time to recalculate its dimensions
                                // when adding child nodes, the scrollWidth and clientWidth won't
                                // change, thus resulting in this while loop looping forever
                                await appendChildAwaitLayout(
                                    this.$el,
                                    this.originalElement.children[i].cloneNode(true)
                                )
                            } else {
                                this.$el.appendChild(
                                    this.originalElement.children[i].cloneNode(true)
                                )
                            }
                            i += 1
                            i = i % this.originalElement.childElementCount
                        }

                        // Add another (original element count) of clones so the animation
                        // has enough elements off-screen to scroll into view
                        let j = 0
                        while (j < this.originalElement.childElementCount) {
                            this.$el.appendChild(this.originalElement.children[i].cloneNode(true))
                            j += 1
                            i += 1
                            i = i % this.originalElement.childElementCount
                        }
                    },
                })
            )
        })

        Alpine.start()
    </script>
</body>

</html>
