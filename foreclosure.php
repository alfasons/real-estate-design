<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreclosure</title>
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
        #map-search-results {
            position: absolute;
            background-color: white;
            border: 1px solid #ccc;
         
            max-height: 200px;
            overflow-y: auto;
            display: none;
            z-index: 1000;
        }

        .result-item {
            padding: 5px;
            cursor: pointer;
        }

        .result-item:hover {
            background-color: #f0f0f0;
        }
        .icon-text-color{
            color: rgb(20 106 122);
        }
    </style>
</head>

<body>
    <!-- second nav -->
    <?php require '_header.php' ?>
    <main class="pt-36">
    <!-- content -->
    <section class="bg-[#C4D6DA] py-4 h-28 bg-no-repeat bg-center bg-scroll bg-cover" style="background-image: url(images/herro2.jpg);">
        <div class="md:px-16 px-4">
            <h3 class="text-2xl md:text-4xl">Are You Facing Foreclosure?</h3>
            <div class="flex items-center  md:mt-4">
                <a href="/" class="text-blue-600 hover:text-blue-600"><i class='fa fa-home'></i> Home</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" class="text-blue-600" viewBox="0 0 24 24">
                    <path fill="currentColor" d="m13.292 12l-4.6-4.6l.708-.708L14.708 12L9.4 17.308l-.708-.708z" />
                </svg>
                Foreclosure
            </div>
        </div>
    </section>

    <div class="flex flex-col md:flex-row items-center space-x-10 mt-5 md:mt-0 pt-4 bg-[#f7fafb] md:py-6 md:pt-0 pb-6 px-16 ">
        <em class="md:text-2xl text-base md:text-left text-center">Trusted By Thousands Of Homeowners For Over 10
            Years.</em>

            <div class="flex items-center justify-center mt-8 md:mt-0 md:space-x-10 space-x-4 " style="margin-top: 10px;">
           
                <img src="images/z-logo-default.svg" alt="">
                <img src="images/cnbc.svg" alt="">
               
            </div>
    </div>

    <div class="px-4 md:px-16 py-8">
        <div class="py-4 bg-[#F9F9F9] rounded-xl flex items-center justify-center border">
            <div class="max-w-5xl md:space-x-4 flex w-full flex-col md:flex-row md:items-center md:px-2 px-3">
                <span class="md:w-1/4 text-center">Solutions For All Homeowners</span>
               
            </div>
        </div>
    </div>

    <section class="px-4 md:px-16 space-y-4 leading-loose">
        <p>When things go wrong and protecting your home from foreclosure becomes a challenge,
            many people are left
            reeling from the reality that they may not be able to keep the roof over their heads. Financial
            difficulties, although often fleeting, can affect your ability to pay your mortgage, which could lead to
            your home being featured on foreclosure listings faster than you might think.</p>

        <p>The truth is that owning a home is the American dream, and missing mortgage
            payments can quickly result in foreclosures. However, residents on the verge of losing their
            bank-owned homes still have options! Homeowners Solutions has been helping people secure their real
            estate for more than 10 years and can help you prevent your home from becoming a new foreclosure listing!
            Give us a call today to find out what your options are!</p>


        <h3 class="text-2xl font-medium md:text-3xl my-4">What Is a Real Estate Foreclosure ?</h3>

        <p>Foreclosure is the term used to describe the legal process of repossessing or "taking back" real estate
            because a mortgagor fails to make payments as agreed. The process may only be initiated by the lender, which
            is often a bank. is a state that allows for judiciary foreclosure. As a result, a bank or
            homeowners' association wishing to foreclose a property must first obtain a judge's consent. The truth is
            that foreclosures are never easy, but there are actions you can take to prevent your financial
            troubles from getting to this stage. Get in touch with us to find out how!</p>
    </section>

    <!-- for sale -->
    <section class="px-4 md:px-16 md:flex py-12 pb-14 md:space-x-12">
        <div class="md:w-1/2 space-y-4">
            <h3 class="text-5xl font-medium md:text-3xl my-4 hidden md:block">
                <span class="block">How Foreclosure Will</span> Affect You?
            </h3>
            <h3 class="text-3xl font-medium md:text-3xl my-4 block md:hidden">
                How Foreclosure Will Affect You?
            </h3>

            <div class="flex items-start space-x-4 rounded p-3 bg-[#F8FAFA] border">
                
                <i class="fa fa-home fa-2x fa-sm fa-icon icon-text-color" aria-hidden="true"></i>

                <div>
                    <p><span class="block">Future Loan and Rental applications will</span> likely be denied.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4 rounded p-3 bg-[#F8FAFA] border">
              
                <i class="fa fa-briefcase fa-2x fa-sm fa-icon icon-text-color" aria-hidden="true"></i>
                <div>
                    <p><span class="block">FCan negatively impact future employment</span> opportunities.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4 rounded p-3 bg-[#F8FAFA] border">
            <i class="fa fa-diamond fa-2x fa-icon  fa-sm icon-text-color" aria-hidden="true"></i>
                
                <div>
                    <p><span class="block">The bank may want you to vacate and start</span> eviction proceedings
                        immediately.</p>
                </div>
            </div>

            <ul class="list-disc leading-10 pl-4">
                <li>Lowers your credit up to 400 points.</li>
                <li>Bank can garnish your wages or bank account for up to 10 years.</li>
                <li>Affects credit for 10+ years.</li>
                <li>May be 7 years before you are able to purchase another home.</li>
            </ul>
        </div>
        <img src="images/depositphotos_8947438-stock-photo-foreclosure-house.jpg" class="rounded-xl">
    </section>

    <section class="py-12 bg-gradient-to-b from-[#F7FAFB] to-white px-4 md:px-16">
        <h3 class="text-2xl font-medium md:text-3xl my-4">Why Should You Reach Out To Us?</h3>

        <p>If you are facing Foreclosure you should reach out to us because:</p>

        <ul class="list-disc pl-8 leading-10">
            <li>We are the most trusted name in Real Estate in .</li>
            <li>We have helped more homeowners out of Foreclosure than anyone in .</li>
            <li>We are a family orientated company.</li>
            <li>Our Services are provided at NO CHARGE to you (I Like saying "No Charge" instead of "FREE". If you don't
                agree and
                think we should use FREE, go for it.)</li>
            <li>We have over 10 years experience in Foreclosures.</li>
            <li>We are regarded at the #1 expert in Foreclosures.</li>
            <li>We have helped over 1000 homeowners out of foreclosure.</li>
        </ul>
    </section>

    <section class="p4 md:px-16 py-12 pb-16 bg-[#F8FAFB]">
        <h3 class="text-2xl font-medium md:text-3xl my-4 text-center">
            How We Can Help?
        </h3>

        <div class="grid gap-4 md:grid-cols-3 md:px-28 px-4 md:gap-12 md:mt-10 mt-5">
            <div class="bg-white flex flex-col items-center justify-center text-center space-y-4 p-4 py-8 text-lg border rounded">

            <i class="fa fa-bank fa-2x fa-icon icon-text-color" aria-hidden="true"></i>

                <p class="text-[14px]">
                    We first and foremost assist homeowners submit the best Loan Modification Application.
                </p>
            </div>
            <div class="bg-white flex flex-col items-center justify-center text-center space-y-4 p-4 py-8 text-lg border rounded">
            <i class="fa fa-gavel fa-2x fa-icon icon-text-color" aria-hidden="true"></i>
                <p class="text-[14px]">
                    We have multiple options to get you out of Foreclosure.
                </p>
            </div>
            <div class="bg-white flex flex-col items-center justify-center text-center space-y-4 p-4 py-8 text-lg border rounded">
            <i class="fa fa-map-marker fa-2x fa-icon icon-text-color" aria-hidden="true"></i>

                <p class="text-[14px]">
                    We can help you relocate if needed.
                </p>
            </div>
        </div>
    </section>


    <section class="px-4 md:px-16 py-8 md:pb-0 pb-12">
        <h3 class="text-2xl font-medium md:text-3xl my-4 text-center">
            Which Is The Best Option To Avoid Foreclosure?
        </h3>

        <div class="grid gap-4 md:grid-cols-4 md:gap-8 md:mt-10 mt-5">
            <div class="bg-[#FBFCFD] flex flex-col items-center justify-center text-center space-y-4 p-4 pb-6 text-lg border rounded">
                <div class="flex gap-2 text-[#146a7a] font-medium">
                <i class="fa fa-ban fa-2x fa-icon" aria-hidden="true"></i>
                    Bankruptcy
                </div>

                <div class="text-base">
                    <p>Cost: $3,000-5,000</p>
                    <p>Credit Score: Damaged</p>
                </div>

                <p class="text-[14px]">
                    May not be able to keep your home.Will not be able to buy another Home for up to 7 years. Just as
                    bad as being foreclosed on.
                </p>
            </div>
            <div class="bg-[#FBFCFD] flex flex-col items-center justify-start text-center space-y-4 p-4 pb-6 border rounded">
                <div class="flex gap-2 text-[#146a7a] font-medium">
                <i class="fa fa-money fa-2x fa-icon" aria-hidden="true"></i>
                   

                    Short Sale
                </div>

                <div class="text-base">
                    <p>Cost: $0-Free</p>
                    <p>Credit Score: Good</p>
                    <p>(Only lowers 60-70 points)</p>
                </div>

                <p class="text-xs text-[14px] tracking-widest">
                    Can purchase another home in 1-2 years.
                </p>
            </div>
            <div class="bg-[#FBFCFD] flex flex-col items-center justify-start text-center space-y-4 p-4 pb-6 border rounded">
                <div class="flex gap-2 text-[#146a7a] font-medium">
                <i class="fa fa-usd fa-2x fa-icon" aria-hidden="true"></i>
                    
                    Loan Modification
                </div>

                <div class="text-base">
                    <p>Cost: Monthly Attorney Fees</p>
                    <p>$500-600 (Can run up to $6k+)</p>
                    <p>Credit Score: Damaged</p>
                </div>

                <p class="text-xs text-[14px] tracking-wider">
                    May never see the equity in your property. Less than 20% are approved. All lates fees, penalties and
                    interest will be added to your mortgage.
                </p>
            </div>
            <div class="bg-[#FBFCFD] flex flex-col items-center justify-start text-center space-y-4 p-4 pb-6 border rounded">
                <div class="flex gap-2 text-[#146a7a] font-medium">
                <i class="fa fa-balance-scale fa-2x fa-icon" aria-hidden="true"></i>
                    Equity
                </div>

                <div class="text-base">
                    <p>Cost: Standard</p>
                    <p>Closing Fees</p>
                    <p>Credit Score: Good</p>
                </div>

                <p class="text-xs text-[14px] tracking-widest">
                    Can purchase a new home immediately.
                </p>
            </div>
        </div>
    </section>


    <div class="hidden relative md:block h-[638px] my-14 bg-cover bg-right bg-no-repeat" style="background-image: url(images/keep-your-home.jpg);">
        <div class="flex flex-col justify-start absolute left-16 top-40 max-w-sm p-5 py-6 bg-white border rounded-lg">
            <h1 class="text-2xl text-[#0d0d0d]">We Help You Keep Your Home, Sell Your Home, <br /> Or We Buy Your Home!
            </h1>
            <p class="my-4">We Help You Keep Your Home, <br> Sell Your Home, Or We Buy Your Home!</p>

            <div class="space-y-3 text-sm">
               
                <button id='btn-1' type="submit" class="w-full py-2 flex justify-center text-white rounded bg-[#20C85F]">
                    See If You Qualify
                </button>
            </div>
        </div>
    </div>
    </main>

    <?php require_once '_footer.php' ?>

</body>

</html>