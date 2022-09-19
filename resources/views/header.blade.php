<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/js" href="{{ asset('/js/app.js') }}">
</head>

<body>
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
                                <img width="24px" height="24px" class="moon cursor-pointer" src="{{asset('img/moon.svg')}}"
                                    alt="">
                                <svg class="sun cursor-pointer fill-white" fill="fffff"
                                    xmlns="http://www.w3.org/2000/svg" height="24" width="24">
                                    <path
                                        d="M12 17q-2.075 0-3.537-1.463Q7 14.075 7 12t1.463-3.538Q9.925 7 12 7t3.538 1.462Q17 9.925 17 12q0 2.075-1.462 3.537Q14.075 17 12 17ZM2 13q-.425 0-.712-.288Q1 12.425 1 12t.288-.713Q1.575 11 2 11h2q.425 0 .713.287Q5 11.575 5 12t-.287.712Q4.425 13 4 13Zm18 0q-.425 0-.712-.288Q19 12.425 19 12t.288-.713Q19.575 11 20 11h2q.425 0 .712.287.288.288.288.713t-.288.712Q22.425 13 22 13Zm-8-8q-.425 0-.712-.288Q11 4.425 11 4V2q0-.425.288-.713Q11.575 1 12 1t.713.287Q13 1.575 13 2v2q0 .425-.287.712Q12.425 5 12 5Zm0 18q-.425 0-.712-.288Q11 22.425 11 22v-2q0-.425.288-.712Q11.575 19 12 19t.713.288Q13 19.575 13 20v2q0 .425-.287.712Q12.425 23 12 23ZM5.65 7.05 4.575 6q-.3-.275-.288-.7.013-.425.288-.725.3-.3.725-.3t.7.3L7.05 5.65q.275.3.275.7 0 .4-.275.7-.275.3-.687.287-.413-.012-.713-.287ZM18 19.425l-1.05-1.075q-.275-.3-.275-.712 0-.413.275-.688.275-.3.688-.287.412.012.712.287L19.425 18q.3.275.288.7-.013.425-.288.725-.3.3-.725.3t-.7-.3ZM16.95 7.05q-.3-.275-.287-.688.012-.412.287-.712L18 4.575q.275-.3.7-.288.425.013.725.288.3.3.3.725t-.3.7L18.35 7.05q-.3.275-.7.275-.4 0-.7-.275ZM4.575 19.425q-.3-.3-.3-.725t.3-.7l1.075-1.05q.3-.275.713-.275.412 0 .687.275.3.275.288.688-.013.412-.288.712L6 19.425q-.275.3-.7.287-.425-.012-.725-.287Z" />
                                </svg>
                                <!-- <img width="30px" class="sun cursor-pointer" src="dist/images/sun.svg" alt=""> -->
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>