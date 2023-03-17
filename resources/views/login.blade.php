<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
     @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="./app.css" rel="stylesheet">
    <title>Travel around the world</title>
</head>
<style>
    body {
        background-color: black;
    }
</style>

<body class="bg-blue-400">

    <section class="min-h-screen flex items-center justify-center bg-2b2d42">
        <!-- login container -->
        <div class="bg-gray-100 flex rounded-2xl shadow-2xl max-w-7xl p-5 items-center text-black  ">
            <!-- form -->
            <div class="md:w-1/2 px-8 md:px-16 ">
                <a href="{{URL::to('index')}}">
                    <img class="mx-auto block cursor-pointer" src="../img/7wonders.png" alt=""></a>
                <h2 class="font-bold text-2xl text-center ">Login</h2>
                <p class="text-xs mt-4 text-[#002D74] text-center">If you are already a member, easily log in</p>

                <form action="" class="flex flex-col gap-4" method="POST" id="loginForm">
                    <input class="p-2 mt-8 rounded-xl border" id="username" type="username" name="username" placeholder="Username" required>
                    <div class="relative">
                        <input class="p-2 rounded-xl border w-full" id="password" type="password" name="password" placeholder="Password" required>
                        <svg id="togglePassword" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="cursor-pointer bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                      </svg>
                    </div>
                    <button type="submit" name="submit" id="submit" class="bg-black rounded-md text-white py-2 hover:scale-105 duration-300">Login</button>
                </form>

                <div class="mt-5 text-xs border-b border-[#002D74] py-4 text-[#002D74] ">
                    <a href="# ">Forgot your password?</a>
                </div>

                <div class="mt-3 text-xs flex justify-between items-center text-[#002D74] ">
                    <p>Don't have an account?</p>
                    <button class="py-2 px-5 bg-white border rounded-xl hover:scale-110 duration-300 ">Register</button>
                </div>
            </div>

            <!-- image -->
            <div class="md:block hidden w-1/2 ">
                <img class="rounded-2xl " src="../img/women.jpg ">
            </div>
        </div>
    </section>

    <script src="./effect.js "></script>
    <script src="./oop.js "></script>
    <script src="./get.js "></script>
</body>

</html>