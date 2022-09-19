@include('header')
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
                        <img data-aos="fade-up-left" data-aos-anchor-placement="center-bottom" width="500px" data-aos-delay="300" src="{{asset('img/get-in-touch-animate.svg')}}" alt="" class="max-w-full mx-auto">
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
                                <div class="h-15 pt-12 lg:col-span-2">
                                    <span class="dark:text-white font-light text-sm pt-0 mb-2 text-justify text-text1 lg:text-2xl md:text-md">Nama</span>
                                    <input class="w-full bg-gray-300 text-gray-900 mt-2 p-2 rounded-lg focus:outline-primary focus:shadow-outline"
                                    type="text" placeholder="">
                                </div>

                                <div class="h-15 pt-8 lg:col-span-2">
                                    <span class="dark:text-white font-light text-sm pt-0 mb-2 text-justify text-text1 lg:text-2xl md:text-md">E-mail</span>
                                    <input class="w-full bg-gray-300 text-gray-900 mt-2 p-2 rounded-lg focus:outline-primary focus:shadow-outline"
                                    type="text" placeholder="">
                                </div>
                                <div class="h-15 pt-8 lg:col-span-2">
                                    <span class="dark:text-white font-light text-sm pt-4 mb-2 text-justify text-text1 lg:text-2xl md:text-md">Pesan</span>
                                    <input class="w-full bg-gray-300 text-gray-900 h-32  mt-2 p-3 rounded-lg focus:outline-primary focus:shadow-outline">
                                </div>
                            
                            </div>
                            <div class="mt-12 col-start-2">
                                <div 
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
@include('footer')
