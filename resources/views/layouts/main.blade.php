<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>
    <link rel="stylesheet" href="/css/main.css">
    <livewire:styles />

</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex-col md:flex-row flex items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="/">
                        <svg
                            name="logo"
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-16"
                            viewBox="0 0 58 58"
                            >
                            <path
                                fill="#fff"
                                d="M36.537 28.156l-11-7a1.005 1.005 0 00-1.019-.033A1.002 1.002 0 0024 22v14a1.001 1.001 0 001.537.844l11-7a1.002 1.002 0 000-1.688zM26 34.179V23.821L34.137 29 26 34.179z"
                            />
                            <path
                                fill="#fff"
                                d="M57 6H1a1 1 0 00-1 1v44a1 1 0 001 1h56a1 1 0 001-1V7a1 1 0 00-1-1zM10 28H2v-9h8v9zm-8 2h8v9H2v-9zm10 10V8h34v42H12V40zm44-12h-8v-9h8v9zm-8 2h8v9h-8v-9zm8-22v9h-8V8h8zM2 8h8v9H2V8zm0 42v-9h8v9H2zm54 0h-8v-9h8v9z"
                            />
                        </svg>
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="" class="hover:text-gray-300">
                        Movies
                    </a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="" class="hover:text-gray-300">
                        Tv Shows
                    </a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="" class="hover:text-gray-300">
                        Actors
                    </a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row item-center">
                <livewire:search-dropdown>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
                
            </div>
        </div>
    </nav>
    @yield('content')
    <livewire:scripts />
</body>
</html>