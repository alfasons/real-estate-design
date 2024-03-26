<?php
session_start(); // Start sessi
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <meta name="keywords" content="Foreclosure assistance, Stop foreclosure, Sell house in foreclosure, Stop your house from going to foreclosure, How to stop foreclosure on a house, How to sell house in probate" />
    <meta name="author" content="Super User" />
    <meta name="description" content="SaveMyHomeSolutions offers tailored solutions for homeowners facing foreclosure, helping them recover lost equity and navigate challenging financial situations." />
    <link rel="shortcut icon" href="images/w0KzoQ01(3).svg" type="image/x-icon">
    <link rel="icon" href="images/w0KzoQ01(3).svg" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/w0KzoQ01(3).svg">
    <link rel="stylesheet" href="output.css?v=<?= time() ?>">





    <!-- Your code -->
</head>
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

    .alert-custom-danger {
        background-color: red;
        color: #fff;
        padding: 10px;
        border-radius: 2px;
    }

    .alert-custom-success {
        background-color: rgb(17 221 93);
        color: #fff;
        padding: 10px;
        border-radius: 2px;
    }
</style>

</head>

<body>

    <?php require '_header.php' ?>
    <main class="pt-36">
        <section class="bg-[#C4D6DA] py-4 h-28 bg-no-repeat bg-center bg-scroll bg-cover" style="background-image: url(images/herro2.jpg);">
            <div class="md:px-16 px-4">
                <h3 class="md:text-4xl text-2xl">Get In Touch With Us!</h3>
                <div class="flex items-center  mt-4">
                    <a href="/" class="text-blue-600 hover:text-blue-600">Home</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" class="text-blue-600" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m13.292 12l-4.6-4.6l.708-.708L14.708 12L9.4 17.308l-.708-.708z" />
                    </svg>
                    Contact Us
                </div>
            </div>
        </section>

        <div class="flex flex-col md:flex-row items-center space-x-10 mt-8 md:mt-0 pt-4 bg-[#f7fafb] md:py-6 md:pt-0 pb-6 px-16 border-b border-b-[#dbe5e8]">
            <em class="md:text-2xl text-base md:text-left text-center">Trusted By Thousands Of Homeowners For Over 10
                Years.
            </em>

            <div class="flex items-center justify-center mt-3 md:mt-0 md:space-x-10 space-x-4">

                <img src="images/z-logo-default.svg" alt="">
                <img src="images/cnbc.svg" alt="">

            </div>
        </div>

        <div class="grid gap-4 md:grid-cols-2 md:gap-12 px-4 md:px-16 my-16 mb-24">
            <div>
                <div class="text-[27px] font-medium">
                    <span class="block">We Help You Keep Your Home,</span>
                    <span class="block">Sell Your Home,</span>
                    Or We Buy Your Home!
                </div>

                <p class="text-lg my-4">Contact Home Owners Solutions Today! Its FREE!</p>

                <div class="space-y-3 text-sm">
                    <div class='' id="messageContainer"></div>
                    <form id="contactForm" method="post">
                        <input type="hidden" id="csrf_token" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">



                        <input required type="text" id="map-search" name="q" class="w-full py-2 ps-3.5 text-sm  placeholder:text-gray-600 border border-gray-300 outline-none focus:ring-0 focus:outline-none  rounded mb-3" placeholder="Seach Property Address" />


                        <div id="map-search-results" class="text-sm mb-3"></div>
                        <br>
                        <input required type="text" id="name" name="name" class="w-full py-2 ps-3.5 mb-3  py-3text-sm  placeholder:text-gray-600 border border-gray-300 outline-none focus:ring-0 focus:outline-none  rounded" placeholder="Name" />

                        <input required type="text" id="phone" name="phone" class="w-full py-2 ps-3.5 text-sm py-3  placeholder:text-gray-600 border border-gray-300 outline-none focus:ring-0 focus:outline-none  rounded mb-3" placeholder="Phone" />



                        <!-- CAPTCHA Section -->
                        <img id="captchaImage" src="captcha.php" alt="CAPTCHA" />

                        <button id="reloadCaptcha" class=" btn btn-success ">  Reload CAPTCHA</button>

                        <input required type="text" id="captchaInput" class="w-full py-2 ps-3.5 mb-3  py-3text-sm  placeholder:text-gray-600 border border-gray-300 outline-none focus:ring-0 focus:outline-none  rounded" name="captcha_input" placeholder="Enter CAPTCHA">
                       

                        <button type="submit" class="w-full py-2 flex justify-center text-white rounded bg-[#20C85F]">
                            See If You Qualify
                        </button>
                    </form>
                    <div id="messageContainer"></div>

                </div>
            </div>

            <div class="map space-y-4">
                <div class="flex gap-3 bg-[#F8FAFA] border p-3 rounded-lg">
                    <div class="text-[#146a7a]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M20 15.5c-1.2 0-2.5-.2-3.6-.6h-.3c-.3 0-.5.1-.7.3l-2.2 2.2c-2.8-1.5-5.2-3.8-6.6-6.6l2.2-2.2c.3-.3.4-.7.2-1c-.3-1.1-.5-2.4-.5-3.6c0-.5-.5-1-1-1H4c-.5 0-1 .5-1 1c0 9.4 7.6 17 17 17c.5 0 1-.5 1-1v-3.5c0-.5-.5-1-1-1M5 5h1.5c.1.9.3 1.8.5 2.6L5.8 8.8C5.4 7.6 5.1 6.3 5 5m14 14c-1.3-.1-2.6-.4-3.8-.8l1.2-1.2c.8.2 1.7.4 2.6.4zm-4-7h2a5 5 0 0 0-5-5v2a3 3 0 0 1 3 3m4 0h2c0-5-4.03-9-9-9v2c3.86 0 7 3.13 7 7" />
                        </svg>
                    </div>
                    <strong>Phone:</strong>
                    (407) 581-2918
                </div>
                <div class="flex gap-3 bg-[#F8FAFA] border p-3 rounded-lg">
                    <div class="text-[#146a7a]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M18.27 6c1.01 2.17.78 4.73-.33 6.81c-.94 1.69-2.29 3.12-3.44 4.69c-.5.7-1 1.45-1.37 2.26c-.13.27-.22.55-.32.83c-.1.28-.19.56-.28.84c-.09.26-.2.57-.53.57c-.39 0-.5-.44-.58-.74c-.24-.73-.48-1.43-.85-2.1c-.42-.79-.95-1.52-1.49-2.23zM9.12 8.42l-3.3 3.92c.61 1.29 1.52 2.39 2.39 3.49c.21.25.42.51.62.78L13 11.67l-.04.01c-1.46.5-3.08-.24-3.66-1.68c-.08-.17-.14-.37-.18-.57a3.05 3.05 0 0 1 0-1zm-2.54-3.8l-.01.01c-1.62 2.05-1.9 4.9-.93 7.31L9.63 7.2l-.05-.05zm7.64-2.26L11 6.17l.04-.01c1.34-.46 2.84.12 3.52 1.34c.15.28.27.58.31.88c.06.38.08.65.01 1.02v.01l3.2-3.8a6.988 6.988 0 0 0-3.85-3.24zM9.89 6.89l3.91-4.65l-.04-.01C13.18 2.08 12.59 2 12 2c-1.97 0-3.83.85-5.15 2.31l-.02.01z" />
                        </svg>
                    </div>
                    <strong>Address:</strong>
                    <?= date('Y') ?> 1317 Edgewater Dr #524, Orlando FL 32804
                </div>

                <div class="pt-8 text-red-600">Add google map here using your own key</div>
            </div>

        </div>
    </main>
    <?php require_once '_footer.php' ?>


    <script>
        $(document).ready(function() {
            $('#contactForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                var formData = new FormData(this);

                // Handle the AJAX request
                $.ajax({
                    url: 'send_email.php',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        try {
                            var json = JSON.parse(response);
                            if (json.success) {
                                $('#messageContainer').addClass('alert-custom-success').text("Success: " + json.message);
                                $('#contactForm').trigger("reset");
                                refreshCaptcha();
                            } else {
                                $('#messageContainer').addClass('alert-custom-danger').text("Error: " + json.message);
                            }
                        } catch (e) {
                            $('#messageContainer').addClass('alert-custom-danger').text("Error processing the request.");
                        }
                    },
                    error: function() {
                        $('#messageContainer').addClass('alert-custom-danger').text("An error occurred while submitting the form.");
                    }
                });
            });

            function refreshCaptcha() {
                $('#captchaImage').attr('src', 'captcha.php?' + new Date().getTime());
            }

            $('#reloadCaptcha').click(function(e) {
                e.preventDefault();
                refreshCaptcha();
            });
        });
    </script>




</body>

</html>