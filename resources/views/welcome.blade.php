<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Landing Page PerpusQu</title>
	<meta name="author" content="name">
	<meta name="description" content="description here">
	<meta name="keywords" content="keywords,here">
		
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
</head>

<body class="bg-gray-400 font-sans leading-normal tracking-normal">
	<!--Nav-->
	<nav class="bg-gray-800 p-2 mt-0 w-full"> <!-- Add this to make the nav fixed: "fixed z-10 top-0" -->
		<div class="container mx-auto flex flex-wrap items-center">
			<div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
				<a class="text-white no-underline hover:text-white hover:no-underline" href="#">
					<span class="text-2xl pl-2"><i class="em em-grinning"></i> PerpusQu</span>
				</a>
			</div>
			<div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="inline-block py-2 px-4 text-white no-underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="inline-block py-2 px-4 text-white no-underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-block py-2 px-4 text-white no-underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
			</div>
		</div>
	</nav>

	<!--Hero-->
	<div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
		<!--Left Col-->
		<div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-12 pb-24 px-6">
			<p class="uppercase tracking-loose">Website PerpusQu</p>
			<h1 class="font-bold text-3xl my-4">PerpusQu - Perpustakaan Digital</h1>
			<p class="leading-normal mb-4">Selamat datang di website perpustakaan digital "PerpusQu". Di website ini kalian akan dapat melihat beragam buku dengan kumpulan koleksi yang lengkap. Tidak perlu ragu untuk membaca dan meminjam buku disini, karena sudah terpercaya. Enjoy!</p>
			
		</div>
		<!--Right Col-->
		<div class="w-full lg:w-1/2 lg:py-6 text-center">
			<!--Add your product image here-->
			<svg class="fill-current text-gray-900 w-3/5 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M17 6V5h-2V2H3v14h5v4h3.25H11a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6zm-5.75 14H3a2 2 0 0 1-2-2V2c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v4a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-5.75zM11 8v8h6V8h-6zm3 11a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>
		</div>
	</div>

	<!--Container-->
	<div class="bg-white h-screen">
		<div class="container mx-auto pt-24 md:pt-16 px-6">
			<p class="py-4"><i class="em em-wave"></i> <i class="em em-world_map"></i></p>		
		</div>
	</div>

</body>
</html>