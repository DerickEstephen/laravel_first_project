<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project BootStrap Replica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    },
                    container: {
                        center: true,
                        padding: {
                            DEFAULT: "1rem",
                            md: "1.5rem",
                            lg: "2rem"
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-[#202124]">

    <section class="absolute inset-x-0 top-0">
        <div class="container py-5 text-white">
            <div class="flex justify-between items-center">
                <a href="{{ route('index') }}" class="font-extrabold text-3xl">
                    LOGO<span class="text-cyan-500">.</span>
                </a>
                <ul class="flex gap-5 font-medium">
                    <li><a href="{{ route('index') }}" class="hover:text-cyan-300">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-cyan-300">About</a></li>
                    <li><a href="{{ route('products') }}" class="hover:text-cyan-300">Products</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-cyan-300">Services</a></li>
                </ul>
                <a href="#" class="px-6 py-2 bg-cyan-500 font-medium rounded-full flex gap-3 items-center">
                    <svg class="h-5" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"></path></svg>Contact Us
                </a>
            </div>
        </div>
    </section>
