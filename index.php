
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caloteiro</title>
</head>
<body>
    <img src="foto.png">
    <h2>Pague o meu dinheiro, índio maldito!</h2>
</body>
</html>


<style>

body {
    display: grid;
    justify-items: center;
    align-items: center;
}

body img {
    width: 40vw;
    border-radius: 100%;

    animation: girar 4s infinite;

}

@keyframes girar {
    0% {
        transform: rotate(0deg)
    }

    100% {
        transform: rotate(360deg);
    }
}

</style>
