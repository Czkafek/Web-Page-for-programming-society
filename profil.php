<?php 
    include("header.html");
?>
<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bootstrap demo</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

      <style>
        a {
            text-decoration: none;
        }
        body {
            background-color: #1a1a1a;
            height: 100vh;
            width: 100vw;
        }
        button {
            background-color: #EB8259;
            font-size: 1.1rem;
            font-weight: 700;
            color: #1e1e1e;
            border-radius: 100px;
            padding: 3px 15px 5px 15px;
            /*margin: 30px 10px 0px 0px;*/
            transition: background-color 0.15s;
            border: none;
        }
        button:hover {
            background-color: #eb9979;
        }
        .category {
            font-weight: 700;
        }
        .category:hover {
            background-color: #eb9979 !important;
        }
    </style>
    </head>
    <body style="background-color: #1a1a1a;">
        
    <main>
        <div class="container mt-xl-4 p-5 w-75 h-75 d-flex" style="background-color: #1e1e1e; color: #f8f8f8;">
            <div class="profil-logo w-25">
                <img src="images/logo-white.png" class="w-100 h-100 object-fit-cover">
            </div>
            <div class="profil-content pt-5">
                <div class="informations d-flex">
                    <col1 class="pe-5">
                        <p class="h1 m-0">Username</p>
                        <p class="h5 m-1" style="color: #6D6D6D;">He/him</p>
                    </col1>
                    <col2 class="pe-5 justify-content-end d-flex flex-column">
                        <p class="h3 m-0">Newsletter</p>
                        <p class="h5 m-1" style="color: #6D6D6D;">Active</p>
                    </col2>
                    <col3 class="pe-5 justify-content-end d-flex flex-column">
                        <p class="h3 m-0">Tytuł</p>
                        <p class="h5 m-1" style="color: #6D6D6D;">Senior front-end developer</p>
                    </col3>
                </div>
                <div class="buttons">
                    <button class="mt-4 me-3">Edytuj dane</button>
                    <button class="mt-4 me-3">Zmień hasło</button>
                    <button class="mt-4 me-3">Wyloguj się</button>
                </div>
            </div>
        </div>
        <div class="container d-flex w-75 p-0 hover-overlay" style="color: #1e1e1e;">
            <div class="category flex-grow-1 d-flex justify-content-center h4 p-2" style="background-color: #EB8259;">Twoje wpisy</div>
            <div class="category flex-grow-1 d-flex justify-content-center h4 p-2" style="background-color: #EB8259;">Śledzone kursy</div>
            <div class="category flex-grow-1 d-flex justify-content-center h4 p-2" style="background-color: #EB8259;">Twoje zamówienia</div>
        </div>
        <div class="category-title container w-75 p-0 h1 mt-3 pb-3" style="color: #f8f8f8;">
            <p>Twoje wpisy:</p>
        </div>
        <div class="container w-75 p-5" style="background-color: #1e1e1e; color: #9d9d9d;">
            <div class="wpis-title h1" style="color: #f8f8f8;">Nazwa wpisu</div>
            <div class="wpis-content h5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae nulla sit amet est vestibulum ultrices ut a arcu. Curabitur vitae aliquet tellus, ultrices tincidunt urna. Aenean sem...</div>
            <div class="wpis-stats-buttons d-flex my-auto mt-4">
                <div class="wpis-stats m-0 me-5 p-0 h5 d-flex">
                    <p class="me-4 my-auto">Odpowiedzi: <span style="color: #EB8259;">0</span></p>
                    <p class="my-auto">Likes: <span style="color: #EB8259;">0</span></p>
                </div>
                <div class="wpis-buttons d-flex align-items-center"">
                    <button class="me-3">Edytuj</button>
                    <button>Przejdź do wpisu</button>
                </div>
            </div>
        </div>
        <div class="container w-75 p-5" style="background-color: #1e1e1e; color: #9d9d9d;">
            <div class="wpis-title h1" style="color: #f8f8f8;">Nazwa wpisu</div>
            <div class="wpis-content h5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae nulla sit amet est vestibulum ultrices ut a arcu. Curabitur vitae aliquet tellus, ultrices tincidunt urna. Aenean sem...</div>
            <div class="wpis-stats-buttons d-flex my-auto mt-4">
                <div class="wpis-stats m-0 me-5 p-0 h5 d-flex">
                    <p class="me-4 my-auto">Odpowiedzi: <span style="color: #EB8259;">0</span></p>
                    <p class="my-auto">Likes: <span style="color: #EB8259;">0</span></p>
                </div>
                <div class="wpis-buttons d-flex align-items-center"">
                    <button class="me-3">Edytuj</button>
                    <button>Przejdź do wpisu</button>
                </div>
            </div>
        </div>
    </main>
      
      
    </body>
</html>
<?php 
    include("footer.html");
?>