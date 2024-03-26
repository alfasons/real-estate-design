<footer class="text-white body-font bg-[#242D3C] px-16">
        <div class="grid gap-4 md:gap-0 md:grid-cols-2 py-8">
            <div class="w-72 flex-shrink-0 md:mx-0 mx-auto md:text-left">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <img src="images/w0KzoQ01(3).svg"
                        alt="">
                </a>
                <p class="mt-8 text-sm text-white">We specialize in helping homeowners of all types facing issues with
                    their properties. With our experience, we will help you keep your home if your lender allows it. Or
                    we help sell or buy your home.</p>
            </div>
            <div class="flex flex-col items-center w-full  justify-center">
                <div class="w-full md:px-4 space-y-4 font-light">
                    <h2 class="title-font  tracking-widest text-base mb-3 font-semibold">Address</h2>

                    <div class="flex items-start space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7M7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9" />
                            <circle cx="12" cy="9" r="2.5" fill="currentColor" />
                        </svg>

                        <div>
                            <span class="block"> SaveMyHomeowner Solutions</span>
                            <span class="block">1317 Edgewater Dr #524 </span>
                            Orlando FL 32804 
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M15 12h2c0-2.76-2.24-5-5-5v2c1.66 0 3 1.34 3 3m4 0h2a9 9 0 0 0-9-9v2c3.87 0 7 3.13 7 7m1 3.5c-1.25 0-2.45-.2-3.57-.57c-.1-.03-.21-.05-.31-.05c-.26 0-.51.1-.71.29l-2.2 2.2a15.045 15.045 0 0 1-6.59-6.59l2.2-2.21a.96.96 0 0 0 .25-1A11.36 11.36 0 0 1 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1c0 9.39 7.61 17 17 17c.55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1M5.03 5h1.5c.07.88.22 1.75.45 2.58l-1.2 1.21c-.4-1.21-.66-2.47-.75-3.79M19 18.97c-1.32-.09-2.6-.35-3.8-.76l1.2-1.2c.85.24 1.72.39 2.6.45z" />
                        </svg>

                        <div>
                            (407) 581-2918 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="border-top: 1px solid rgba(255,255,255,.1);">
            <div class="flex justify-center text-sm py-3 md:text-left text-center">
                Copyright © 2024 savemyhomesolutions
            </div>
        </div>
    </footer>

    <!-- Mobile overlay -->
    <div id="drawer"
        class="fixed top-0 left-0 md:hidden w-screen  h-screen bg-[#F4F4F4] z-40 p-4 pb-16 overflow-y-auto  transition-transform -translate-x-full">
        <button id="close-drawer" type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example"
            class="text-[#7A7A7A] bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-4 end-4 flex items-center justify-center">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>

        <div class="flex flex-col items-center justify-center text-center  text-text-title mt-20 text-xl space-y-4">
            <div class="text-[#0D3B66] hover:text-[#0D3B66]">Home</div>
            <div class="border-b-2 border-b-gray-400 w-52"></div>
            <div class="w-52 hover:text-[#0D3B66] flex flex-col justify-center items-center">
                <button type="button" id="mobile-dropdown" class="flex items-center space-x-2 cursor-pointer">
                    Services
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6z" />
                    </svg>
                </button>

                <div class="submenu flex flex-col text-left w-full divide-y divide-[#0D3B66] text-base mt-4"
                    style="display: none;">
                    <a href="foreclosure.php" class="py-1">Foreclosure</a>
                    <!-- <a href="#" class="py-1">Dashboard</a> -->
                </div>
            </div>
            <div class="border-b-2 border-b-gray-400 w-52"></div>
            <div class="hover:text-[#0D3B66]">Contact</div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        const searchInput = document.getElementById("map-search");
        const searchResults = document.getElementById("map-search-results");

        searchInput.addEventListener("input", function () {
            const inputValue = this.value.trim();
            if (inputValue !== "") {
                const url = `search.php?input=${encodeURIComponent(inputValue)}`;
                fetch(url)
                    .then((response) => response.json())
                    .then((data) => {
                        displayResults(data.predictions);
                    })
                    .catch((error) => {
                        console.error("Error fetching data:", error);
                    });
            } else {
                // Clear the dropdown if input is empty
                searchResults.innerHTML = "";
                searchResults.style.display = "none";
            }
        });

        // Display search results
        function displayResults(predictions) {
            searchResults.innerHTML = '';
            if (predictions.length === 0) {
                searchResults.style.display = 'none';
                return;
            }
            predictions.forEach(prediction => {
                const resultItem = document.createElement('div');
                resultItem.classList.add('result-item');

                // Create an icon element
                const icon = document.createElement('img');
                icon.src = 'images/location.svg'; // URL to your location icon image
                icon.alt = 'Location Icon';
                icon.classList.add('icon');
                resultItem.appendChild(icon);

                // Create a span element for the location name
                const locationName = document.createElement('span');
                locationName.textContent = prediction.description;
                resultItem.appendChild(locationName);

                resultItem.addEventListener('click', function() {
                    searchInput.value = prediction.description;
                    searchResults.style.display = 'none';
                });
                searchResults.appendChild(resultItem);
            });
            searchResults.style.display = 'block';
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var openButton = document.getElementById('open-mobile-menu');
            var closeButton = document.getElementById('close-drawer');
            var drawer = document.getElementById('drawer');

            openButton.addEventListener('click', function () {
                drawer.classList.remove('-translate-x-full');
            });

            closeButton.addEventListener('click', function () {
                drawer.classList.add('-translate-x-full');
            });

            // Toggle Menu
            var menuLink = document.querySelector("#mobile-dropdown");

            menuLink.addEventListener("click", function ($event) {
                var x = $event.currentTarget.nextElementSibling;
                if (x && x.classList.contains('submenu')) {
                    // x is the next sibling with class 'submenu'
                    if (x.style.display === "block") {
                        x.style.display = "none";
                    } else {
                        x.style.display = "block";
                    }
                }
            });
        });
        $("#btn-1,#btn-2").on('click', function(e) {
        e.preventDefault(); // Prevents the default action of the button (if it's a submit button, for example)
        window.location.href = 'https://savemyhomesolutions.com/contact-us.php'; // Sets the current page's URL to the new URL, which navigates to the new page
    });
    </script>