<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map Search</title>
    <style>
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
    </style>
</head>
<body>
    <form>
        <label for="map-search">Search for a location:</label><br>
        <input type="text" id="map-search" name="q" placeholder="Enter a location">
    </form>

    <div id="map-search-results"></div>

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
</body>
</html>
