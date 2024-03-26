<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>savemyhomesolutions</title>
    <meta name="keywords" content="Foreclosure assistance, Stop foreclosure, Sell house in foreclosure, Stop your house from going to foreclosure, How to stop foreclosure on a house, How to sell house in probate" />
    <meta name="author" content="Super User" />
     <meta name="description" content="SaveMyHomeSolutions offers tailored solutions for homeowners facing foreclosure, helping them recover lost equity and navigate challenging financial situations." />

    <link rel="shortcut icon" href="images/w0KzoQ01(3).svg" type="image/x-icon">
    <link rel="icon" href="images/w0KzoQ01(3).svg" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/w0KzoQ01(3).svg">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="output.css?v=<?= time() ?>">

    <style>
        .card::after {
            content: "";
            position: absolute;
            background: url(images/right-side-arrow.svg) no-repeat;
            right: 0;
            top: 50%;
            width: 15px;
            height: 27px;
            transform: translate(0, -50%);
        }

        @media (max-width: 767px) {
            .card::after {
                -webkit-transform: rotate(90deg);
                right: 50%;
                margin-right: -13px;
                top: 132%;
                margin-top: -14px;
            }
        }

        .sub-menu {
            display: none;
            position: absolute;
            /* top: 100%; */
            top: calc(100% + 10px);
            z-index: 1;
        }

        #dropdownNavbarLink:hover .sub-menu,
        #dropdownNavbarLink:hover::after {
            display: block;
        }

        /* Without this, the submenu will always dissappear as soon as you move away from #dropdownNavbarLink */
        #dropdownNavbarLink::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 0;
            /* same as the gap */
            height: 10px;
            width: 100%;
        }
        .icon-text-color {
            color: rgb(20 106 122);
        }

        .circle-icons {
              display: flex; 
    justify-content: center; 
    align-items: center; 
    /* width: 100px; */
    /* height: 100px; */
    background-color: rgb(20, 106, 122);
    color: white;
    padding: 4%;
    border-radius: 50%;
}
        


        .icon-text-color-white {
            color: #fff;
        }
    </style>


</head>

<body>
    <?php require '_header.php' ?>

    <main class="pt-36">
        <!-- Hero Banner -->
        <div class="relative min-h-[80vh] bg-white bg-scroll bg-no-repeat bg-center bg-cover p-10"
            style="background-image: url(images/hero.webp)">
            <div class="absolute inset-0 bg-black/65"></div>
            <div class="relative flex justify-center items-start text-white text-center" style="padding: 0% 15% 0% 15%;">
                <div class="space-y-4">
                    <h1 class="text-[9vw] md:text-[4vw] text-white font-extrabold md:leading-[3.5rem] leading-[1em] md:tracking-normal tracking-widest uppercase">
                        <span class="hidden md:block"><span class="block">Solutions For All</span><br><span class=""> Home owners</span></span>
                
                        <span class="md:hidden">Solutions For All Home owners</span>
                    </h1>
                    <p class="text-lg md:text-[1.75vw] tracking-tighter md:tracking-wide leading-relaxed">
                        We Help You Keep Your Home, Sell Your Home, Or We Buy Your Home!
                    </p>
                    <div class="py-2 hidden md:block"></div>
                    <button id='btn-1' class="text-[3vw] font-extrabold text-white bg-[#20C85F] hover:bg-[#33D977] 
                    border-b-4 border-b-deep-green md:rounded-xl rounded md:py-11 py-5 px-10">
                        SEE IF YOU QUALIFY
                    </button>
                </div>
            </div>
        </div>

        <img src="2022/02/fhos-hero-mobile-image.jpg" class="md:hidden my-6">

        <div class="flex flex-col md:flex-row items-center space-x-10 bg-[#f7fafb] md:py-6 pt-0 pb-6 px-16 border-b border-b-[#dbe5e8]">
            <em class="md:text-2xl text-base md:text-left text-center">Trusted By Thousands Of Homeowners For Over 10
                Years.</em>

            <div class="flex items-center justify-center mt-3 md:mt-0 md:space-x-10 space-x-4">
            <img src="images/z-logo-default.svg" alt="">
                <img src="images/cnbc.svg" alt="">
            </div>
        </div>

        <section class="flex flex-col items-center justify-center py-12 space-y-10">
            <div>
                <h3 class="text-2xl font-medium md:text-3xl text-center">How Our Process Works For You</h3>

                <div class="grid md:grid-cols-3 gap-8 mt-4">
                    <div class="flex items-center md:text-left text-center space-x-14 my-4">
                        <div class="max-w-xs space-y-2 relative card">
                            <div class="flex items-center md:justify-start justify-center  space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M20 15.5c-1.2 0-2.5-.2-3.6-.6h-.3c-.3 0-.5.1-.7.3l-2.2 2.2c-2.8-1.5-5.2-3.8-6.6-6.6l2.2-2.2c.3-.3.4-.7.2-1c-.3-1.1-.5-2.4-.5-3.6c0-.5-.5-1-1-1H4c-.5 0-1 .5-1 1c0 9.4 7.6 17 17 17c.5 0 1-.5 1-1v-3.5c0-.5-.5-1-1-1M5 5h1.5c.1.9.3 1.8.5 2.6L5.8 8.8C5.4 7.6 5.1 6.3 5 5m14 14c-1.3-.1-2.6-.4-3.8-.8l1.2-1.2c.8.2 1.7.4 2.6.4zm-4-7h2a5 5 0 0 0-5-5v2a3 3 0 0 1 3 3m4 0h2c0-5-4.03-9-9-9v2c3.86 0 7 3.13 7 7" />
                                </svg>
                                <div class="text-xl">Contact Us</div>
                            </div>
                            <p class="text-sm">
                                Schedule your FREE In Person or Phone Consultation. We will be in contact within 24
                                hours.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center md:text-left text-center space-x-14 my-4">
                        <div class="max-w-xs space-y-2 relative card">
                            <div class="flex items-center md:justify-start justify-center  space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g fill="currentColor">
                                        <path d="M2 5a3 3 0 0 1 3-3h10a3 3 0 0 1 3 3v1h1a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3h-1v3a1 1 0 0 1-1.707.707L12.586 18H7a1 1 0 0 1-1-1v-3H5a3 3 0 0 1-3-3V5zm16 3v3a3 3 0 0 1-3 3h-3.586l-2 2H13a1 1 0 0 1 .707.293L16 18.586V17a1 1 0 0 1 1-1h2a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1h-1zM8 14.586l2.293-2.293A1 1 0 0 1 11 12h4a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h2a1 1 0 0 1 1 1v1.586z" />
                                    </g>
                                </svg>
                                <div class="text-xl">Free Consultation</div>
                            </div>
                            <p class="text-sm">
                                We will go over your situation, hear your wants and needs, to know what is best for you.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center md:text-left text-center space-x-14 my-4">
                        <div class="max-w-xs space-y-2 relative">
                            <div class="flex items-center md:justify-start justify-center  space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M20 15.5c-1.2 0-2.5-.2-3.6-.6h-.3c-.3 0-.5.1-.7.3l-2.2 2.2c-2.8-1.5-5.2-3.8-6.6-6.6l2.2-2.2c.3-.3.4-.7.2-1c-.3-1.1-.5-2.4-.5-3.6c0-.5-.5-1-1-1H4c-.5 0-1 .5-1 1c0 9.4 7.6 17 17 17c.5 0 1-.5 1-1v-3.5c0-.5-.5-1-1-1M5 5h1.5c.1.9.3 1.8.5 2.6L5.8 8.8C5.4 7.6 5.1 6.3 5 5m14 14c-1.3-.1-2.6-.4-3.8-.8l1.2-1.2c.8.2 1.7.4 2.6.4zm-4-7h2a5 5 0 0 0-5-5v2a3 3 0 0 1 3 3m4 0h2c0-5-4.03-9-9-9v2c3.86 0 7 3.13 7 7" />
                                </svg>
                                <div class="text-xl">Problem Solved</div>
                            </div>
                            <p class="text-sm">
                                Whatever option you decide we will be here to help you. In most cases, we are able to
                                help you
                                <a href="contact-us.php" class="text-blue-600 hover:text-orange-400">sell your home FAST</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" id='btn-2' class="px-8 py-2 flex justify-center text-white rounded bg-[#20C85F]">
                Get My Free Consultation
            </button>
        </section>


        <section class="flex flex-col items-center justify-center space-y-14 py-4 md:py-16 px-4 md:px-16 bg-[#FBFCFA]">
            <h3 class="text-xl md:text-4xl md:text-left text-center">Are You Currently Facing Any of These Situations?
            </h3>

            <div class="grid gap-4 md:grid-cols-2 md:gap-12">
                <div class="flex items-start space-x-4">

                    <div class="circle-icons">
                        <i class="fa fa-home fa-2x fa-icon icon-text-color-white" aria-hidden="true"></i>
                    </div>


                    <div>
                        <h3 class="text-xl font-medium">Foreclosure</h3>
                        <p>The bank is not forgiving. Maybe you don't have the income to pay your mortgage or maybe the
                            bank increased your payments and the payment is no longer affordable each month.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="circle-icons">
                        <i class="fa fa-map-marker fa-2x fa-icon icon-text-color-white" aria-hidden="true"></i>
                    </div>

                    <div>
                        <h3 class="text-xl font-medium">Relocation</h3>
                        <p>Whether you decide to move or you are forced to relocate because of work reasons or military
                            deployment, you need to do something with the house your leave behind.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="circle-icons">
                        <i class="fa fa-heartbeat fa-2x fa-icon icon-text-color-white" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-medium">Divorce</h3>
                        <p>The bank is not forgiving. Maybe you don't have the income to pay your mortgage or maybe the
                            bank increased your payments and the payment is no longer affordable each month.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="circle-icons">
                        <i class="fa fa-user fa-2x fa-icon icon-text-color-white" aria-hidden="true"></i>

                    </div>
                    <div>
                        <h3 class="text-xl font-medium">Death in family</h3>
                        <p>Whether you decide to move or you are forced to relocate because of work reasons or military
                            deployment, you need to do something with the house your leave behind.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="circle-icons">
                        <i class="fa fa-usd fa-2x fa-icon icon-text-color-white" aria-hidden="true"></i>
                    </div>


                    <div>
                        <h3 class="text-xl font-medium">Debt</h3>
                        <p>The bank is not forgiving. Maybe you don't have the income to pay your mortgage or maybe the
                            bank increased your payments and the payment is no longer affordable each month.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="circle-icons">
                        <i class="fa fa-briefcase fa-2x fa-icon icon-text-color-white" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-medium">Job loss</h3>
                        <p>Whether you decide to move or you are forced to relocate because of work reasons or military
                            deployment, you need to do something with the house your leave behind.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="flex flex-col items-center justify-center space-y-14 py-4 px-4 md:py-16 md:px-[5rem]">
            <h3 class="text-xl md:text-4xl md:text-left text-center">Why Work With SaveMyHomeowner Solutions?</h3>

            <div class="grid gap-4 md:grid-cols-2 md:gap-14">
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <i class="fa fa-home fa-2x fa-icon icon-text-color" aria-hidden="true"></i>


                        <div>
                            <h3 class="text-xl font-medium">Keep Your Home or Sell It On Your Terms</h3>
                            <p>The bank is not forgiving. Maybe you don't have the income to pay your mortgage or maybe
                                the
                                bank increased your payments and the payment is no longer affordable each month.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <i class="fa fa-usd fa-2x fa-icon icon-text-color" aria-hidden="true"></i>

                        <div>
                            <h3 class="text-xl font-medium">You Pay NO Commissions Or Fees</h3>
                            <p>MySaveHomesSolutions wants to make sure you get as much of your equity as possible. Even if there is no
                                equity left in your home, we will still make sure you have RELOCATION money!</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <i class="fa fa-heart fa-2x fa-icon icon-text-color" aria-hidden="true"></i>

                        <div>
                            <h3 class="text-xl font-medium">Work With The Best</h3>
                            <p>The people at MySaveHomesSolutions have been helping homeowners for over 10 years.
                                <a href="foreclosure.php" class="text-blue-600 hover:bg-orange-400">foreclosure</a>.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <i class="fa fa-home fa-2x fa-icon icon-text-color" aria-hidden="true"></i>



                        <div>
                            <h3 class="text-xl font-medium">Make No Repairs To Your Home</h3>
                            <p>We will purchase your property AS IS so you don't have to fix anything before we
                                purchase.</p>
                        </div>
                    </div>
                </div>

                <div class="hidden md:block h-full bg-cover bg-center bg-no-repeat rounded-xl" style="background-image: url('images/pexels-christina-morillo-1181438.jpg');">
                </div>

                <img src="2023/07/why-work-with--homeowner-solutions-group-photo.jpg" class="md:hidden rounded-xl">
            </div>
        </section>

        <section class="flex flex-col items-center justify-center space-y-14 py-4 md:py-16 px-4 md:px-16 bg-[#FBFCFA]">
            <h3 class="text-xl md:text-4xl md:text-left text-center">What Our Clients Say</h3>

            <div class="grid gap-4 md:grid-cols-2 md:gap-12">
                <div class="max-w-xl bg-white border border-gray-200 rounded-lg shadow pb-12">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://picsum.photos/id/28/850/480" alt="" />
                    </a>
                    <div class="flex flex-col items-center justify-center text-center p-5 pt-0">
                        <div class="max-w-lg flex flex-col items-center space-y-4">
                            <!-- start rating -->
                            <div class="flex items-center text-[#F8B32A] mt-8 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                            </div>
                            <!-- end rating -->

                            <p>"When all seemed lost, Save My Home Solutions stepped in and turned things around for us. We can't thank them enough for their compassion and expertise."
                            </p>

                            <div class="text-base">
                                <h4 class="font-medium">Grace S.</h4>
                                <p class="text-sm"> Homeowner</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-w-xl bg-white border border-gray-200 rounded-lg shadow-lg">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://picsum.photos/id/54/850/480" alt="" />
                    </a>
                    <div class="flex flex-col items-center justify-center text-center p-5 pt-0">
                        <div class="max-w-lg flex flex-col items-center space-y-4">
                            <!-- start rating -->
                            <div class="flex items-center text-[#F8B32A] mt-8 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                            </div>
                            <!-- end rating -->

                            <p>"Grateful doesn't even begin to describe how we feel towards Home Solutions. Their assistance during our foreclosure crisis was a true lifesaver."</p>

                            <div class="text-base">
                                <h4 class="font-medium">John M.</h4>
                                <p class="text-sm"> Homeowner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <section class="flex text-center justify-center py-4 bg-[#F27405] text-white text-2xl">
            Call 407-581-2918 to get started.
        </section>
    </main>

    <?php require_once '_footer.php' ?>
 
</body>

</html>