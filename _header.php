  <!-- second nav -->

  <header class="fixed w-full z-20 top-0 start-0 bg-white">
        <section class="text-gray-600 body-font px-4 md:px-5 ">
            <div class="container mx-auto flex flex-wrap md:p-5 py-4 px-0 justify-between items-center">
            <a  href="/"class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                    <img src="images/logo01_252x54.png"
                        class="max-w-[140px] md:max-w-[250px]">
                </a>
                <div class="md:ml-auto flex flex-wrap items-stretch space-x-8 text-base font-medium justify-between">
                    <div class="flex items-center space-x-2 -mt-3 md:mt-0">
                        <div class="bg-[#20C85F] text-white rounded-full p-2 hidden md:block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M6.62 10.79c1.44 2.83 3.76 5.15 6.59 6.59l2.2-2.2c.28-.28.67-.36 1.02-.25c1.12.37 2.32.57 3.57.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02z" />
                            </svg>
                        </div>
                        <div class="text-xl cursor-pointer">
                            <h3 class="text-[#20C85F] hidden md:block">Call Now to Get Started</h3>
                            <p class="md:text-2xl text-lg tracking-wider font-bold">(407) 581-2918</p>
                        </div>
                        <button class="md:hidden block" type="button" id="open-mobile-menu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M3 18h18v-2H3zm0-5h18v-2H3zm0-7v2h18V6z" />
                            </svg>
                        </button>
                    </div>
                    <div
                        class="hidden bg-[#20C85F] hover:bg-[#33D977]  text-xl md:flex items-center justify-center px-12 cursor-pointer text-white rounded uppercase"><a href="contact-us.php">
                        See if you Qualify
                        </a>
                       </div>
                </div>
            </div>
            <a href="contact-us.php"
                class="w-full md:hidden font-semibold uppercase py-3 mb-6 md:mb-0 mx-auto flex justify-center text-white rounded bg-[#20C85F]">
                See if you Qualify
            </a>
        </section>

        <section id="menuContainer" class="hidden md:block text-gray-600 body-font">
            <div class="bg-[#20C85F] px-14 flex flex-wrap p-5 py-2 flex-col md:flex-row items-center">
                <a href="" class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81zM12 3L2 12h3v8h6v-6h2v6h6v-8h3" />
                    </svg>
                </a>
                <ul
                    class="md:ml-auto flex flex-wrap items-center space-x-6 text-base text-white font-medium justify-between">
                    <li class="text-[#0D3B66]"><a href="/">Home</a></li>
                    <!-- <li class="hover:text-[#0D3B66]">About</li> -->
                    <li href="#" class="relative hover:text-[#0D3B66]" id="dropdownNavbarLink">
                        <div class="flex items-center space-x-2 cursor-pointer">
                            Services
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6z" />
                            </svg>
                        </div>

                        <div class="sub-menu absolute -left-4 rounded-lg shadow w-56 bg-white border">
                            <ul class="py-2 text-sm text-gray-700 divide-y divide-gray-100">
                                <li>
                                    <a href="foreclosure.php" class="block px-4 py-2 hover:text-[#377ef9]">Foreclosure</a>
                                </li>
                                <!-- <li>
                                <a href="#" class="block px-4 py-2 hover:text-[#377ef9]">Short Sale</a>
                            </li> -->
                            </ul>
                        </div>
                    </li>
                    <!-- <li class="hover:text-[#0D3B66]">Testimonials</li> -->
                    <li class="hover:text-[#0D3B66]"><a href="contact-us.php">Contact Us</a></li>
                </ul>
            </div>
        </section>
    </header>