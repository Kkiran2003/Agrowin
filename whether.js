
async function getWeather() {
    const location = document.getElementById("locationInput").value;
    const apiKey = "2e729cb8a6544c8097a72529251804";
    const url = `http://api.weatherapi.com/v1/current.json?key=${apiKey}&q=${location}&aqi=yes`;

    try {
        const response = await fetch(url);
        const data = await response.json();

        if (data.error) {
            document.getElementById("result").innerHTML = `<p>चूक: ${data.error.message}</p>`;
        } else {
            const city = data.location.name;
            const country = data.location.country;
            const tempC = data.current.temp_c;

            const result = `
                <h2>${city}, ${country}</h2>
                <p>आजचे तापमान: <strong>${tempC}°C</strong></p>
            `;
            document.getElementById("result").innerHTML = result;
        }
    } catch (error) {
        document.getElementById("result").innerHTML = `<p>माहिती मिळवता आली नाही.</p>`;
    }
}

