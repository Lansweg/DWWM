fetch("https://maps-api.apple.com/v1/token")
.then(response => response.json())
.then(data => {
    console.log(data);
})