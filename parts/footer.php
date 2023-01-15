        <section class="socials-block">
            <h2 class="section-title">Социальные сети</h2>
            <div class="socials-block__body">
                <a href="https://www.youtube.com/" class="socials-block__link">
                    <svg width="304" height="66">
                        <use xlink:href="#youtube"></use>
                    </svg>
                </a>
                <div class="socials-block__text">Подпишись на ютуб, чтобы не пропуситить новые видео</div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container footer__body">
            <div class="footer__social">
                <a href="https://www.youtube.com/" class="footer__social-link">
                    <svg width="53" height="37">
                        <use xlink:href="#youtube-icon"></use>
                    </svg>
                </a>
                <a href="https://wa.me/88005553525" class="footer__social-link">
                    
                    <svg width="47" height="46">
                        <use xlink:href="#whatsapp"></use>
                    </svg>
                </a>
            </div>
            <div class="footer__copy">
                <div class="footer__copy-text">Все права защещены<br /><b><?= date("Y"); ?></b></div>
                <div class="footer__copy-img">
                    <svg width="45" height="45">
                        <use xlink:href="#copy"></use>
                    </svg>
                </div>
            </div>
        </div>
    </footer>
    <!-- Modal -->
    <!-- SVG -->

    <svg width="0" height="0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <symbol viewBox="0 0 42 42" id="arrow-prev">
                <path d="M20.1802 15.225L15.6511 19.775C15.3318 20.0958 15.1721 20.5042 15.1721 21C15.1721 21.4958 15.3318 21.9042 15.6511 22.225L20.2238 26.8187C20.5431 27.1396 20.9421 27.293 21.4205 27.279C21.9001 27.2638 22.2996 27.0958 22.619 26.775C22.9383 26.4542 23.098 26.0458 23.098 25.55C23.098 25.0542 22.9383 24.6458 22.619 24.325L21.0512 22.75H26.669C27.1626 22.75 27.5691 22.5826 27.8884 22.2478C28.2078 21.9118 28.3675 21.4958 28.3675 21C28.3675 20.5042 28.2002 20.0888 27.8658 19.754C27.5325 19.418 27.119 19.25 26.6255 19.25L21.0512 19.25L22.6625 17.6312C22.9819 17.3104 23.1346 16.9091 23.1207 16.4273C23.1056 15.9466 22.9383 15.5458 22.619 15.225C22.2996 14.9042 21.8932 14.7438 21.3996 14.7438C20.9061 14.7438 20.4996 14.9042 20.1802 15.225V15.225ZM21.3996 3.5C23.8093 3.5 26.0739 3.95967 28.1933 4.879C30.3126 5.79717 32.1562 7.04375 33.724 8.61875C35.2917 10.1937 36.5326 12.0458 37.4465 14.175C38.3617 16.3042 38.8192 18.5792 38.8192 21C38.8192 23.4208 38.3617 25.6958 37.4465 27.825C36.5326 29.9542 35.2917 31.8062 33.724 33.3812C32.1562 34.9562 30.3126 36.2034 28.1933 37.1228C26.0739 38.0409 23.8093 38.5 21.3996 38.5C18.9899 38.5 16.7254 38.0409 14.606 37.1228C12.4866 36.2034 10.643 34.9562 9.07524 33.3812C7.50748 31.8062 6.26662 29.9542 5.35268 27.825C4.43757 25.6958 3.98001 23.4208 3.98001 21C3.98001 18.5792 4.43757 16.3042 5.35268 14.175C6.26662 12.0458 7.50748 10.1937 9.07524 8.61875C10.643 7.04375 12.4866 5.79717 14.606 4.879C16.7254 3.95967 18.9899 3.5 21.3996 3.5Z" fill="url(#paint0_linear_44_86)"/>
            </symbol>
            <symbol viewBox="0 0 42 42" id="arrow-next">
                <path d="M22.3159 26.775L26.8449 22.225C27.1643 21.9042 27.324 21.4958 27.324 21C27.324 20.5042 27.1643 20.0958 26.8449 19.775L22.2723 15.1813C21.9529 14.8604 21.554 14.707 21.0756 14.721C20.596 14.7362 20.1965 14.9042 19.8771 15.225C19.5578 15.5458 19.3981 15.9542 19.3981 16.45C19.3981 16.9458 19.5578 17.3542 19.8771 17.675L21.4449 19.25H15.8271C15.3335 19.25 14.927 19.4174 14.6077 19.7522C14.2883 20.0882 14.1286 20.5042 14.1286 21C14.1286 21.4958 14.2959 21.9112 14.6303 22.246C14.9636 22.582 15.377 22.75 15.8706 22.75H21.4449L19.8336 24.3687C19.5142 24.6896 19.3615 25.0909 19.3754 25.5728C19.3905 26.0534 19.5578 26.4542 19.8771 26.775C20.1965 27.0958 20.6029 27.2563 21.0965 27.2563C21.59 27.2563 21.9965 27.0958 22.3159 26.775ZM21.0965 38.5C18.6868 38.5 16.4222 38.0403 14.3028 37.121C12.1835 36.2028 10.3399 34.9563 8.77211 33.3813C7.20435 31.8063 5.96349 29.9542 5.04954 27.825C4.13443 25.6958 3.67688 23.4208 3.67688 21C3.67688 18.5792 4.13443 16.3042 5.04954 14.175C5.96349 12.0458 7.20435 10.1938 8.77211 8.61875C10.3399 7.04375 12.1835 5.79658 14.3028 4.87725C16.4222 3.95908 18.6868 3.5 21.0965 3.5C23.5062 3.5 25.7707 3.95908 27.8901 4.87725C30.0095 5.79658 31.8531 7.04375 33.4209 8.61875C34.9886 10.1938 36.2295 12.0458 37.1434 14.175C38.0585 16.3042 38.5161 18.5792 38.5161 21C38.5161 23.4208 38.0585 25.6958 37.1434 27.825C36.2295 29.9542 34.9886 31.8063 33.4209 33.3813C31.8531 34.9563 30.0095 36.2028 27.8901 37.121C25.7707 38.0403 23.5062 38.5 21.0965 38.5Z" fill="url(#paint0_linear_44_79)"/>
            </symbol>
            <symbol viewBox="0 0 304 66" id="youtube">
                <path d="M94.4856 10.3067C93.3736 6.24766 90.1083 3.05786 85.9536 1.97131C78.431 5.90086e-07 48.2516 0 48.2516 0C48.2516 0 18.0725 5.90086e-07 10.5496 1.97131C6.39491 3.05786 3.12993 6.24766 2.01777 10.3067C6.03994e-07 17.6564 0 33 0 33C0 33 6.03994e-07 48.3437 2.01777 55.6934C3.12993 59.7524 6.39491 62.9422 10.5496 64.0286C18.0725 66 48.2516 66 48.2516 66C48.2516 66 78.431 66 85.9536 64.0286C90.1083 62.9422 93.3736 59.7524 94.4856 55.6934C96.5035 48.3437 96.5035 33 96.5035 33C96.5035 33 96.4954 17.6564 94.4856 10.3067Z" fill="#FF0000"/>
                <path d="M38.5921 47.1418L63.6633 33.0013L38.5921 18.8606V47.1418Z" fill="white"/>
                <path d="M116.879 42.9119L106.044 4.68091H115.497L119.294 22.0113C120.263 26.2799 120.97 29.9198 121.431 32.9311H121.709C122.027 30.7735 122.742 27.1569 123.846 22.0734L127.778 4.68091H137.232L126.261 42.9119V61.2513H116.871V42.9119H116.879Z" fill="black"/>
                <path d="M140.075 60.039C138.169 58.7817 136.81 56.8258 136 54.1716C135.198 51.5174 134.793 47.994 134.793 43.5855V37.5861C134.793 33.1391 135.254 29.5614 136.175 26.8683C137.097 24.1752 138.534 22.2039 140.489 20.9699C142.443 19.7359 145.009 19.115 148.186 19.115C151.316 19.115 153.819 19.7436 155.709 21.0009C157.592 22.2582 158.974 24.2295 159.848 26.8993C160.722 29.5769 161.159 33.1391 161.159 37.5861V43.5855C161.159 47.994 160.73 51.5329 159.88 54.2026C159.03 56.8803 157.648 58.8362 155.741 60.07C153.834 61.3042 151.245 61.925 147.98 61.925C144.611 61.9326 141.982 61.2963 140.075 60.039ZM150.768 53.5664C151.292 52.216 151.563 50.0196 151.563 46.9618V34.0862C151.563 31.1213 151.3 28.9482 150.768 27.5823C150.236 26.2086 149.307 25.5256 147.972 25.5256C146.685 25.5256 145.771 26.2086 145.247 27.5823C144.715 28.956 144.453 31.1213 144.453 34.0862V46.9618C144.453 50.0196 144.707 52.2236 145.215 53.5664C145.724 54.9168 146.637 55.5919 147.972 55.5919C149.307 55.5919 150.236 54.9168 150.768 53.5664Z" fill="black"/>
                <path d="M191.91 61.2592H184.458L183.632 56.199H183.426C181.4 60.0174 178.365 61.9265 174.314 61.9265C171.51 61.9265 169.436 61.0262 168.102 59.2337C166.767 57.4329 166.1 54.6236 166.1 50.8051V19.9238H175.625V50.2616C175.625 52.109 175.831 53.4204 176.244 54.2045C176.657 54.9882 177.349 55.3839 178.318 55.3839C179.144 55.3839 179.938 55.1357 180.701 54.6391C181.464 54.1421 182.02 53.5134 182.393 52.7531V19.916H191.91V61.2592Z" fill="black"/>
                <path d="M217.784 12.1689H208.33V61.2575H199.012V12.1689H189.559V4.68726H217.784V12.1689Z" fill="black"/>
                <path d="M240.757 61.2592H233.306L232.48 56.199H232.273C230.248 60.0174 227.213 61.9265 223.161 61.9265C220.357 61.9265 218.284 61.0262 216.949 59.2337C215.615 57.4329 214.947 54.6236 214.947 50.8051V19.9238H224.472V50.2616C224.472 52.109 224.679 53.4204 225.092 54.2045C225.505 54.9882 226.196 55.3839 227.165 55.3839C227.991 55.3839 228.786 55.1357 229.548 54.6391C230.311 54.1421 230.867 53.5134 231.24 52.7531V19.916H240.757V61.2592Z" fill="black"/>
                <path d="M272.279 26.5276C271.699 23.9199 270.77 22.034 269.483 20.862C268.196 19.6901 266.425 19.1081 264.169 19.1081C262.421 19.1081 260.784 19.5892 259.267 20.5594C257.75 21.5295 256.574 22.7946 255.748 24.37H255.676V2.59253H246.501V61.2505H254.366L255.335 57.3391H255.541C256.28 58.7359 257.384 59.8302 258.854 60.6453C260.324 61.4525 261.96 61.8561 263.755 61.8561C266.973 61.8561 269.348 60.4048 270.865 57.5097C272.383 54.607 273.145 50.0824 273.145 43.9203V37.3777C273.145 32.7597 272.851 29.1353 272.279 26.5276ZM263.549 43.3923C263.549 46.4035 263.422 48.763 263.167 50.4704C262.913 52.1779 262.492 53.3965 261.889 54.1103C261.293 54.832 260.482 55.1891 259.473 55.1891C258.687 55.1891 257.964 55.0106 257.297 54.6459C256.63 54.2889 256.09 53.7457 255.676 53.0316V29.5699C255.994 28.4446 256.55 27.5288 257.337 26.807C258.115 26.0852 258.973 25.7282 259.887 25.7282C260.856 25.7282 261.602 26.1008 262.127 26.8381C262.659 27.5831 263.024 28.8249 263.231 30.5789C263.438 32.3329 263.541 34.8241 263.541 38.0604V43.3923H263.549Z" fill="black"/>
                <path d="M286.657 45.7748C286.657 48.429 286.737 50.4159 286.896 51.7432C287.055 53.0701 287.388 54.0327 287.897 54.6458C288.405 55.2511 289.184 55.5537 290.24 55.5537C291.662 55.5537 292.647 55.0105 293.172 53.9317C293.704 52.853 293.99 51.0525 294.038 48.5379L302.252 49.0111C302.299 49.3681 302.323 49.8648 302.323 50.4934C302.323 54.3119 301.25 57.168 299.114 59.054C296.977 60.9399 293.95 61.8867 290.042 61.8867C285.347 61.8867 282.058 60.4509 280.175 57.5716C278.285 54.6924 277.347 50.2453 277.347 44.2225V37.0047C277.347 30.8037 278.324 26.2713 280.279 23.4152C282.233 20.5591 285.577 19.1311 290.32 19.1311C293.585 19.1311 296.095 19.7132 297.843 20.8851C299.59 22.057 300.821 23.8731 301.537 26.3489C302.252 28.8247 302.609 32.2395 302.609 36.6011V43.6793H286.657V45.7748ZM287.865 26.2946C287.38 26.8766 287.063 27.8313 286.896 29.1584C286.737 30.4855 286.657 32.4956 286.657 35.1966V38.1613H293.624V35.1966C293.624 32.5422 293.529 30.5321 293.346 29.1584C293.164 27.7847 292.83 26.8223 292.345 26.2558C291.861 25.697 291.114 25.4098 290.105 25.4098C289.088 25.4176 288.342 25.7125 287.865 26.2946Z" fill="black"/>       
            </symbol>
            <symbol viewBox="0 0 47 46" id="whatsapp">
                <path d="M0.890625 45.8405L4.1753 33.6381C1.52629 28.8847 0.684676 23.3378 1.80489 18.0154C2.9251 12.693 5.932 7.95198 10.2738 4.66243C14.6156 1.37287 20.0011 -0.244596 25.4421 0.106827C30.883 0.45825 36.0144 2.75499 39.8946 6.5756C43.7749 10.3962 46.1437 15.4844 46.5664 20.9065C46.989 26.3286 45.4373 31.7208 42.1958 36.0938C38.9543 40.4668 34.2405 43.5271 28.9195 44.7133C23.5984 45.8994 18.027 45.1318 13.2276 42.5513L0.890625 45.8405ZM13.8224 37.985L14.5854 38.4365C18.0617 40.4918 22.122 41.3423 26.1336 40.8555C30.1451 40.3687 33.8825 38.5719 36.7634 35.7452C39.6443 32.9185 41.5068 29.2206 42.0607 25.2279C42.6146 21.2351 41.8288 17.1717 39.8257 13.6709C37.8226 10.1701 34.7148 7.4285 30.9865 5.87344C27.2582 4.31838 23.119 4.03716 19.2137 5.0736C15.3085 6.11004 11.8567 8.40593 9.39618 11.6035C6.93568 14.801 5.60473 18.7206 5.61073 22.7514C5.60746 26.0937 6.53414 29.3712 8.28761 32.2192L8.76609 33.0061L6.92977 39.8167L13.8224 37.985Z" fill="#00D95F"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M32.3404 25.8847C31.8931 25.5249 31.3694 25.2716 30.8091 25.1442C30.2489 25.0168 29.6669 25.0186 29.1074 25.1495C28.2669 25.4977 27.7237 26.8134 27.1806 27.4713C27.0661 27.629 26.8978 27.7396 26.7073 27.7823C26.5168 27.8251 26.3173 27.797 26.1461 27.7034C23.0687 26.5012 20.4893 24.2965 18.8267 21.4475C18.6848 21.2697 18.6177 21.044 18.6394 20.8178C18.6612 20.5916 18.77 20.3827 18.943 20.235C19.5488 19.6368 19.9936 18.8959 20.2362 18.0809C20.2901 17.1818 20.0836 16.2863 19.6414 15.5011C19.2995 14.4002 18.6488 13.42 17.7663 12.6762C17.3111 12.472 16.8063 12.4036 16.313 12.4791C15.8197 12.5546 15.3588 12.7709 14.9859 13.1019C14.3386 13.6589 13.8249 14.3537 13.4825 15.135C13.14 15.9163 12.9777 16.7643 13.0074 17.6165C13.0093 18.0951 13.0702 18.5716 13.1884 19.0354C13.4887 20.1497 13.9505 21.2144 14.5592 22.1956C14.9983 22.9473 15.4775 23.6749 15.9946 24.3755C17.6751 26.6767 19.7876 28.6305 22.2148 30.1284C23.4328 30.8897 24.7345 31.5086 26.0943 31.973C27.5069 32.6117 29.0665 32.8568 30.6075 32.6824C31.4855 32.5499 32.3174 32.2041 33.03 31.6755C33.7426 31.1469 34.314 30.4518 34.694 29.6512C34.9172 29.1675 34.985 28.6269 34.8879 28.1033C34.6552 27.0327 33.2197 26.4007 32.3404 25.8847Z" fill="#00D95F"/>
            </symbol>
            <symbol viewBox="0 0 53 37" id="youtube-icon">
                <path d="M51.2471 5.71845C50.6493 3.47102 48.8809 1.69806 46.6309 1.09042C42.5626 3.9691e-07 26.2396 0 26.2396 0C26.2396 0 9.92501 3.9691e-07 5.84843 1.09042C3.60672 1.68973 1.83826 3.4627 1.23217 5.71845C0.144531 9.79711 0.144531 18.3124 0.144531 18.3124C0.144531 18.3124 0.144531 26.8276 1.23217 30.9063C1.82996 33.1537 3.59842 34.9267 5.84843 35.5343C9.92501 36.6247 26.2396 36.6247 26.2396 36.6247C26.2396 36.6247 42.5626 36.6247 46.6309 35.5343C48.8726 34.935 50.641 33.162 51.2471 30.9063C52.3348 26.8276 52.3348 18.3124 52.3348 18.3124C52.3348 18.3124 52.3348 9.79711 51.2471 5.71845Z" fill="#FF3000"/>
                <path d="M21.0256 26.1617L34.5838 18.3124L21.0256 10.463V26.1617Z" fill="white"/>
            </symbol>
            <symbol viewBox="0 0 45 45" id="copy">
                <g clip-path="url(#clip0_63_2242)">
                    <path d="M22.5 0.703125C10.4619 0.703125 0.703125 10.4619 0.703125 22.5C0.703125 34.5381 10.4619 44.2969 22.5 44.2969C34.5381 44.2969 44.2969 34.5381 44.2969 22.5C44.2969 10.4619 34.5381 0.703125 22.5 0.703125ZM32.795 31.1795C32.6551 31.3436 29.299 35.1988 23.1401 35.1988C15.6965 35.1988 10.4413 29.6388 10.4413 22.4048C10.4413 15.259 15.8909 9.80121 23.0767 9.80121C28.9615 9.80121 32.0384 13.0808 32.1665 13.2205C32.3243 13.3925 32.4206 13.612 32.4402 13.8445C32.4599 14.0771 32.4019 14.3097 32.2753 14.5057L30.3083 17.5516C29.9524 18.1024 29.1856 18.1977 28.7057 17.7533C28.6852 17.7345 26.374 15.6545 23.267 15.6545C19.2139 15.6545 16.7705 18.6054 16.7705 22.3414C16.7705 25.822 19.0129 29.3455 23.2988 29.3455C26.6999 29.3455 29.0362 26.8549 29.0595 26.8297C29.5105 26.3406 30.2951 26.3873 30.6861 26.9222L32.8436 29.8729C32.9836 30.0644 33.055 30.2975 33.0462 30.5346C33.0373 30.7717 32.9488 30.9989 32.795 31.1795Z" fill="#0069BF"/>
                </g>
            </symbol>
            <symbol viewBox="0 0 14 21" id="volume">
                <path d="M1.30435 20.5348C0.591304 20.5348 0 19.9435 0 19.2305V11.7696C0 11.0565 0.591304 10.4652 1.30435 10.4652C2.01739 10.4652 2.6087 11.0565 2.6087 11.7696V19.2305C2.6087 19.9609 2.01739 20.5348 1.30435 20.5348Z" fill="#F0FAFF"/>
                <path d="M6.52163 20.4913C5.80859 20.4913 5.21729 19.9 5.21729 19.187V6.76956C5.21729 6.05651 5.80859 5.46521 6.52163 5.46521C7.23468 5.46521 7.82598 6.05651 7.82598 6.76956V19.187C7.82598 19.9174 7.23468 20.4913 6.52163 20.4913Z" fill="#F0FAFF"/>
                <path d="M11.7392 20.4652C11.0261 20.4652 10.4348 19.8739 10.4348 19.1609V1.76956C10.4348 1.05651 11.0261 0.46521 11.7392 0.46521C12.4522 0.46521 13.0435 1.05651 13.0435 1.76956V19.1609C13.0435 19.8739 12.4522 20.4652 11.7392 20.4652Z" fill="#F0FAFF"/>
            </symbol>
            <symbol viewBox="0 0 44 43" id="play">
                <circle cx="21.5436" cy="21.5" r="21.5" fill="url(#paint0_linear_142_925)"/>
                <path d="M17.8009 16.6151L17.8009 24.0904C17.8009 25.6214 19.4647 26.5822 20.7926 25.8167L24.0342 23.9498L27.2759 22.0751C28.6038 21.3096 28.6038 19.3959 27.2759 18.6304L24.0342 16.7557L20.7926 14.8888C19.4647 14.1233 17.8009 15.0763 17.8009 16.6151Z" fill="#0C203C"/>
            </symbol>
            <symbol viewBox="0 0 42 42" id="pause">
                <path d="M15.75 28H19.25V14H15.75V28ZM22.75 28H26.25V14H22.75V28ZM21 38.5C18.5792 38.5 16.3042 38.0403 14.175 37.121C12.0458 36.2028 10.1938 34.9563 8.61875 33.3813C7.04375 31.8063 5.79717 29.9542 4.879 27.825C3.95967 25.6958 3.5 23.4208 3.5 21C3.5 18.5792 3.95967 16.3042 4.879 14.175C5.79717 12.0458 7.04375 10.1938 8.61875 8.61875C10.1938 7.04375 12.0458 5.79658 14.175 4.87725C16.3042 3.95908 18.5792 3.5 21 3.5C23.4208 3.5 25.6958 3.95908 27.825 4.87725C29.9542 5.79658 31.8063 7.04375 33.3813 8.61875C34.9563 10.1938 36.2028 12.0458 37.121 14.175C38.0403 16.3042 38.5 18.5792 38.5 21C38.5 23.4208 38.0403 25.6958 37.121 27.825C36.2028 29.9542 34.9563 31.8063 33.3813 33.3813C31.8063 34.9563 29.9542 36.2028 27.825 37.121C25.6958 38.0403 23.4208 38.5 21 38.5Z" fill="#0089F2"/>
            </symbol>
            <clipPath id="clip0_63_2242">
                <rect width="45" height="45" fill="white"/>
            </clipPath>
        </defs>

        <linearGradient id="paint0_linear_44_86" x1="36" y1="18" x2="1" y2="18" gradientUnits="userSpaceOnUse">
            <stop stop-color="#030E22"/>
            <stop offset="1" stop-color="#0058A6" stop-opacity="0.33"/>
        </linearGradient>
        <linearGradient id="paint0_linear_44_79" x1="4" y1="21" x2="41" y2="21" gradientUnits="userSpaceOnUse">
            <stop stop-color="#030E22"/>
            <stop offset="1" stop-color="#0058A6" stop-opacity="0.33"/>
        </linearGradient>
        <linearGradient id="paint0_linear_142_925" x1="3.20835e-08" y1="21" x2="43" y2="21" gradientUnits="userSpaceOnUse">
            <stop stop-color="#030E22"/>
            <stop offset="1" stop-color="#0058A6" stop-opacity="0"/>
        </linearGradient>
    </svg>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script type="module" src="js/main.js"></script>
</body>

</html>