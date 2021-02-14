<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>رمضان</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500&display=swap" rel="stylesheet">
  
        <style>

            body {
                font-family: 'Tajawal', sans-serif;
                
            }
            /* main color */
.bg-main-color{
    background-color: #02C2FF;
}
/* border color */
            .br-blue{
                border-color: #02C2FF;
            }
.cssAnimation{
    animation: 1s ease-out 0s 1 slideInFromLeft;
}

/* animation */
            @keyframes slideInFromLeft {
  0% {
    transform: translateX(-100%);
  }
 
  100% {
    transform: translateX(0);
  }
}

        </style>
              <!-- js -->
              <script >
               
                // hash handler 
                const hasher = () => {
                    alert("ramdan karem "+location.hash)
                 
                }
                 // event on hash change 
                window.addEventListener("hashchange", hasher, false);
                              </script>
    </head>
    <body class="antialiased">
        <div class=" bg-white h-screen w-screen flex flex-col   items-center justify-center ">

            <div  class="text-4xl text-gray-500 pb-10 cssAnimation	"> اكتب اسمك </div>

           <input type="text" id="inputName" class="w-10/12  rounded-2xl py-4 	text-lg p-3 border-4 br-blue border-opacity-100 "/>

            <button id="submitBtn" class="absolute bottom-8 left-8 h-15 w-25 rounded-2xl  text-white p-3 px-10   bg-main-color">التالي</button>
        </div>
        <!-- js -->
              <script >
                  
// set hash
let submitBtn = document.getElementById('submitBtn');

submitBtn.addEventListener("click", () => {
    let inputName = document.getElementById('inputName').value;
    inputName ?window.location.hash = inputName:console.info(  inputName );
    
}, false);



         </script>
    </body>
</html>
