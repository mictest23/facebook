<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
  <div class="min-h-screen flex items-center justify-center">
    <div class="grid grid-cols-5 content-end gap-12">
        <div class="p-2 col-span-3">
            <div class="grid grid-cols-1">
                <h1 class="text-5xl font-semibold text-blue-600">facebook</h1>
                <h1 class="text-3xl font-base text-black mt-3">Mga Kamakailang Pag-log in</h1>
                <p class="text-md text-gray-500">I-click ang iyong litrato o maglagay ng account.</p>

                <div class="mt-6 grid grid-cols-3 gap-4">
                    <div class="grid grid-cols-1 bg-white divide-y shadow-sm hover:shadow-xl rounded-lg">
                        <div>
                            <img src="/images/profile.jpeg" alt="profile picture" class="object-fill rounded-tl-lg rounded-tr-lg h-48" width="200px">
                        </div>
                        <div class="p-3 text-center text-xl">Mark</div>
                    </div>
                    <div class="grid grid-cols-1 bg-white divide-y shadow-sm hover:shadow-xl rounded-lg">
                        <div>
                            <img src="/images/profile2.jpeg" alt="profile picture" class="object-fill rounded-tl-lg rounded-tr-lg h-48" width="200px">
                        </div>
                        <div class="p-3 text-center text-xl">Elon</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-4 col-span-2 w-96">
            <div class="p-5 bg-white shadow-lg rounded-md w-96">
                <form>
                    <div class="mb-4">
                        <input type="text" id="email" name="email" class="w-full px-5 py-5 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Email or Numero ng Telepono">
                    </div>
                    <div class="mb-6">
                        <input type="password" id="password" name="password" class="w-full px-5 py-5 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Password">
                    </div>
                    <button type="submit" class="w-full py-3 px-3 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                        Log In
                    </button>
                </form>
                <a href=""><p class="text-center mt-4 mb-6 text-blue-600 hover:underline">Nakalimutan ang password?</p></a>
                <hr class="h-px my-8 bg-gray-300 border-0 dark:bg-gray-700">
                <button type="submit" class="w-full mt-1 mb-2 py-3 bg-green-500 text-white font-semibold rounded hover:bg-green-600 focus:outline-none focus:bg-blue-600">
                    Gumawa ng bagong account
                </button>
            </div>
            <p class="text-sm mt-7 text-center"><span class="font-bold">Gumawa ng Page</span> para sa celebrity, brand o business.</p>
        </div>

    </div>
  </div>
</body>

</html>
