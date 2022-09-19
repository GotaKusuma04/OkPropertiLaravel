<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @vite('resources/css/app.css')
    </head>
    <header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent bg-white dark:bg-slate-900">
        <div class="container">
            <div class="relative flex items-center justify-between">
                <div class="px-5">
                    <a href="home.html"><svg class="fill-[#180202] dark:fill-white" 
                        xmlns="http://www.w3.org/2000/svg" width="184" height="53" viewBox="0 0 144.715 36.212"><defs><style>.b{fill:#f78218;}.c{font-size:16px;font-family:Montserrat-SemiBold, Montserrat;font-weight:600;}</style></defs><g transform="translate(-32.944 -50.25)"><g transform="translate(32.944 50.25)"><path class="a" d="M413.36,181.221l-7.331,11.165,7.247,11.123h-8.848l-7.215-11.127,7.425-11.2Z" transform="translate(-361.727 -168.424)"/><path class="a" d="M147.83,175.512a12.179,12.179,0,0,0-.77,16.376l2.766-2.766a3.257,3.257,0,0,0,.88-3.312c-.019-.082-.032-.163-.048-.244a5.963,5.963,0,1,1,4.155,4.3l-.069-.014a3.257,3.257,0,0,0-3.312.88l-2.767,2.767a12.178,12.178,0,1,0-.836-17.983Z" transform="translate(-133.419 -160.089)"/><path class="b" d="M63.963,62.268,50.631,50.25,32.944,67.062l.115.1s5.1,3.024,8.468.454l9.218-8.762L52.351,60.3a14.426,14.426,0,0,1,11.613,1.971Z" transform="translate(-32.944 -50.25)"/></g><text class="c" transform="translate(91.659 74.321)"><tspan x="0" y="0">PROPERTI</tspan></text></g>
                    </svg></a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
                        <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                    </button>
                    <nav id="nav-menu"
                        class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white dark:bg-slate-900 py-5 shadow-lg lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="home.html"
                                    class="mx-8 flex py-2 text-base text-secondary dark:text-white group-hover:text-primary">Home</a>
                            </li>
                            <li class="group">
                                <a href="product.html"
                                    class="mx-8 flex py-2 text-base text-secondary dark:text-white group-hover:text-primary">Product</a>
                            </li>
                            <li class="group">
                                <a href="portofolio.html"
                                    class="mx-8 flex py-2 text-base text-secondary dark:text-white group-hover:text-primary">Portofolio</a>
                            </li>
                            <li class="group">
                                <a href="index.html"
                                    class="mx-8 flex py-2 text-base text-secondary dark:text-white group-hover:text-primary">Contact</a>
                            </li>
                            <li class="group">
                                <a href="about.html"
                                    class="mx-8 flex py-2 text-base text-secondary dark:text-white group-hover:text-primary">About
                                    Us</a>
                            </li>
                            <li class="flex items-center pl-8">
                                <div class="flex ">
                                    <span class="text-sm text-text1 dark:text-slate-500 mr-2">Light</span>
                                    <input type="checkbox" id="dark-toggle" class="hidden">
                                    <label for="dark-toggle">
                                        <div
                                            class="w-9 h-5 bg-slate-500 rounded-full flex items-center p-1 cursor-pointer">
                                            <div
                                                class="w-4 h-4 bg-white rounded-full toggle-circle transition duration-300 ease ini out">
                                            </div>
                                        </div>
                                    </label>
                                    <span class="text-sm dark:text-white text-slate-500 ml-2">Dark</span>
                                </div>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- COROSEL -->
    <section id="about" class="bg-white dark:bg-slate-900 pt-16">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 data-aos="fade-up-right" data-aos-anchor-placement="center-center" data-aos-delay="200" class="mb-4 pt-4 text-2xl pl-12 lg:text-4xl font-extrabold text-primary dark:text-white text-left">
                        Contact
                    </h1>
                    <a href="index.html"><h2 data-aos="fade-up-right" data-aos-anchor-placement="top-up" data-aos-delay="500"class="mb-5 pl-12 text-2xl font-light text-black dark:text-white lg:text-2xl lg:w-full text-justify">
                        <span class="text-black font-semibold dark:text-primary">Ok Properti</span> menyediakan halaman Contact untuk memudahkan customer dalam menghubungi kami
                    </h2></a>
                </div>              
                <div class="w-full self-end mt-12 lg:w-1/2 right-0">                    
                    <div class="relative mt-10">
                        <img data-aos="fade-up-left" data-aos-anchor-placement="center-bottom" width="500px" data-aos-delay="300" src="dist/img/get-in-touch-animate.svg" alt="" class="max-w-full mx-auto">
                        <span class="absolute bottom-0 -z-10">
                            <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#F3821A" d="M45.7,-24.3C58.7,-3.9,68.3,20.5,60.1,35.6C51.9,50.7,26,56.5,1.6,55.6C-22.8,54.7,-45.6,47.1,-53.2,32.3C-60.9,17.5,-53.3,-4.4,-41.9,-23.9C-30.5,-43.4,-15.2,-60.4,0.5,-60.7C16.3,-61,32.7,-44.7,45.7,-24.3Z" transform="translate(100 100) scale(1.2)" />
                            </svg>
                        </span> 
                    </div>     
                </div>
                
            </div>
        </div>
    </section>

    <!-- END COROSEL -->
  
    <!-- ISI -->
    <section id="aboutt" class="dark:bg-slate-700 bg-white pt-24 pb-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-start px-4 pt-8">
                    <h1 data-aos="zoom-in-up" data-aos-anchor-placement="center-bottom" data-aos-delay="300"
                        class="mb-2 text-xl font-bold uppercase dark:text-white text-text1 text-center lg:text-3xl md:text-md lg:text-center">
                        HUBUNGI KAMI
                        <hr data-aos="zoom-in-up" data-aos-anchor-placement="center-bottom" data-aos-delay="300" 
                        class="my-2 border-primary flex mx-auto border-t-4 w-60 dark:gray-700 lg:my-2">
                    </h1>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-start px-4 pt-12">
                    <div class="grid grid-cols-3 gap-8 sm:gap-2">
                        <!-- text -->
                        <div data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-delay="500"
                            class="h-15 pt-0  lg:col-span-1 aspect-video ">
                            <h1 class=" dark:text-white font-bold text-sm pt-12 mb-2 text-justify text-text1 lg:text-2xl md:text-md">
                                FACEBOOK
                            </h1>
                            <p class="dark:text-white text-sm text-justify font-light text-text1 lg:text-2xl mb-10">Nyoman Gotama</p>
    
                            <h1 class=" dark:text-white font-bold text-sm pt-0 mb-2 text-justify text-text1 lg:text-2xl md:text-md">
                                WHATSAPP
                            </h1>
                            <p class="dark:text-white text-sm text-justify font-light text-text1 lg:text-2xl mb-10">085346100532</p>
    
                            <h1 class=" dark:text-white font-bold text-sm pt-0 mb-2 text-justify text-text1 lg:text-2xl md:text-md">
                                INSTAGRAM
                            </h1>
                            <p class="dark:text-white text-sm text-justify font-light text-text1 lg:text-2xl mb-10">nyoman_gotama</p>
                        </div>
                        <!-- Contact -->
                            <div class="grid col-span-2 grid-rows-3,9">
                                <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-delay="500"
                                class="h-15 pt-12 lg:col-span-2">
                                    <span class="dark:text-white font-light text-sm pt-0 mb-2 text-justify text-text1 lg:text-2xl md:text-md">Nama</span>
                                    <input class="w-full bg-gray-300 text-gray-900 mt-2 p-2 rounded-lg focus:outline-primary focus:shadow-outline"
                                    type="text" placeholder="">
                                </div>

                                <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-delay="500"
                                class="h-15 pt-8 lg:col-span-2">
                                    <span class="dark:text-white font-light text-sm pt-0 mb-2 text-justify text-text1 lg:text-2xl md:text-md">E-mail</span>
                                    <input class="w-full bg-gray-300 text-gray-900 mt-2 p-2 rounded-lg focus:outline-primary focus:shadow-outline"
                                    type="text" placeholder="">
                                </div>
                                <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-delay="500"
                                    class="h-15 pt-8 lg:col-span-2">
                                        <span class="dark:text-white font-light text-sm pt-4 mb-2 text-justify text-text1 lg:text-2xl md:text-md">Pesan</span>
                                         <input class="w-full bg-gray-300 text-gray-900 h-32  mt-2 p-3 rounded-lg focus:outline-primary focus:shadow-outline">
                                </div>
                            
                            </div>
                            <div class="mt-12 col-start-2">
                                <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-delay="500"
                                class="h-15 pt-0 lg:col-span-2">
                                    <button class="col-start-2 uppercase text-sm font-bold tracking-wide bg-primary text-gray-100 px-2 py-4 rounded-lg w-full focus:outline-none focus:shadow-outline">
                                        Send
                                    </button>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ISI END -->

    <!-- FOOTER -->
    <footer class="sm:px-48 sm:py-6 pt-8 bg-slate-900">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0 px-10">
                <a href="home.html" class="flex items-center">
                    <svg class="fill-[#ffffff] dark:fill-white" data-aos="zoom-in-up" 
                        xmlns="http://www.w3.org/2000/svg" width="144.715" height="36.212" viewBox="0 0 144.715 36.212"><defs><style>.b{fill:#f78218;}.c{font-size:16px;font-family:Montserrat-SemiBold, Montserrat;font-weight:600;}</style></defs><g transform="translate(-32.944 -50.25)"><g transform="translate(32.944 50.25)"><path class="a" d="M413.36,181.221l-7.331,11.165,7.247,11.123h-8.848l-7.215-11.127,7.425-11.2Z" transform="translate(-361.727 -168.424)"/><path class="a" d="M147.83,175.512a12.179,12.179,0,0,0-.77,16.376l2.766-2.766a3.257,3.257,0,0,0,.88-3.312c-.019-.082-.032-.163-.048-.244a5.963,5.963,0,1,1,4.155,4.3l-.069-.014a3.257,3.257,0,0,0-3.312.88l-2.767,2.767a12.178,12.178,0,1,0-.836-17.983Z" transform="translate(-133.419 -160.089)"/><path class="b" d="M63.963,62.268,50.631,50.25,32.944,67.062l.115.1s5.1,3.024,8.468.454l9.218-8.762L52.351,60.3a14.426,14.426,0,0,1,11.613,1.971Z" transform="translate(-32.944 -50.25)"/></g><text class="c" transform="translate(91.659 74.321)"><tspan x="0" y="0">PROPERTI</tspan></text></g>
                    </svg>
                </a>

            </div>
        </div>

        <div class="m-12 grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
                <h2 class="mb-2 text-sm font-semibold text-white">Alamat Kami</h2>
                <ul class="text-gray-400">
                    <li class="mb-2">
                        <a href="#" class="hover:underline">Jalan Seroja 11, Denpasar</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-2  text-sm font-semibold text-white">Fitur</h2>
                <ul class="text-gray-400">
                    <li class="#">
                        <a href="#" class="hover:underline">Home</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Produk</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Portofolio</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Kontak</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Tentang Kami</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-2 text-sm font-semibold  sm:mx-auto text-white">Ikuti Kami</h2>
                <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                        <a href="#" class="text-gray-500 hover:text-white ">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" /></svg>
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd" /></svg>
                            <span class="sr-only">Instagram page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z"
                                    clip-rule="evenodd" /></svg>
                            <span class="sr-only">Whatshapp account</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <h2 class="text-sm tracking-widest md:text-right font-semibold text-white px-8  "> <a href="kebijakan.html"
                class="hover:underline">Kebijakan Privasi </a> | <a href="syarat.html" class="hover:underline">Syarat &
                Ketentuan</a> </h2>
        <hr class="my-2 border-gray-200 sm:mx-auto dark:gray-700 lg:my-2">
        <span class="px-12 block text-sm md:text-center text-gray-400">© 2022 <a href="#" class="hover:underline">CV.
                Avatar Solution™</a>. All Rights Reserved.
        </span>
    </footer>

    <!-- FOOTER END -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script> -->
    <script src="dist/js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
