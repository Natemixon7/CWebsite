<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Property Masters</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        @vite('resources/css/app.css')
        @vite('resources/js/checkout.js')

    </head>
    <body class="relative pt-12 bg-[#769973] text-shadow-xl">
        <div class="pt-5 fixed h-24 w-full bg-[#627252] z-50 top-0">
                <span class="static text-3xl text-white "><a href="{{url('/')}}">&nbsp; Property Masters </a></span>
                <a href="{{url('/')}}"><img src="/images/Homepage/facebook.png" alt="Real Logo" class="static float-left mt-2 ml-2"></a>
                <span class="static float-right mr-5 mt-2"><a href="{{url('https://www.facebook.com/pmlawnandlandscape')}}"><img src="/images/Homepage/facebook.png" alt="" class=""></a></span>
                <span class="static float-right mr-5 mt-2"><a href="{{url('https://www.instagram.com/pm.landscape/')}}"><img src="/images/Homepage/instagram.png" alt="" class=""></a></span>

                <nav class="">
                    <ul class="flex inline space-x-5 place-content-center">
                        <li class="text-white hover:text-[#96958c] text-3xl"><a href="{{url('/')}}">Home</a></li>
                        <li class="text-[#96958c] text-3xl"><a href="{{url('services')}}">Services</a></li>
                        <li class="text-white hover:text-[#96958c] text-3xl"><a href="{{url('about')}}">About Us</a></li>
                        <li class="text-white hover:text-[#96958c] text-3xl"><a href="{{url('contact')}}">Contact Us</a></li>
                    </ul>
                </nav>
        </div>

        <div class="relative">
            <div class="pt-12 flex place-content-center">
                <div class="absolute z-40 mt-10">
                    <span class="text-white text-6xl">Services</span>
                </div>
                <div class="place-content-center text-center">
                    <img src="/images/Aboutpage/AboutBackgroundMed.jpg" alt="" class="h-96 w-screen">
                </div>
            </div>
        </div>

        <div id="LawnServices" class="text-[#769973] h-20">Lawn Services</div>
        <div class="pt-10 text-center text-5xl text-white">Lawn Services</div>

        <div class="flex place-content-center mt-5">
            <div class="place-content-center text-white text-center w-1/2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, tempora totam? Doloremque quo blanditiis earum aspernatur, laborum fuga totam repudiandae distinctio iste laudantium consequuntur, eligendi maxime deleniti saepe alias dignissimos fugiat? Fugit, tempore. Placeat fugiat voluptate veritatis voluptas quos esse quia tempore accusantium dolorem perspiciatis! Sed ducimus at deserunt, assumenda unde id beatae eveniet fuga reprehenderit doloremque dignissimos hic dicta asperiores veritatis veniam perspiciatis molestiae laudantium minima. Placeat sequi, itaque soluta ad quod incidunt reprehenderit minima voluptate sit officiis voluptatum dolorum blanditiis fuga velit aliquam sed cum sunt a accusantium odit rerum nulla iure. Deserunt hic quisquam veniam fugiat qui!
            </div>
        </div>

        <div class="relative mb-20">
            <div class="flex inline-block h-80 place-content-center">
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/LawnServices/Aeration.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                <img src="/images/Servicespage/LawnServices/Fertilizer.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                <img src="/images/Servicespage/LawnServices/Aeration2.jpg" alt="" class="hover:scale-125">
                </div>
            </div>
            <div class="flex place-content-center inline-block h-80 place-content-center">
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/LawnServices/MowedBackyard.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/LawnServices/MowerYardBackground2.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/LawnServices/WebBackgroundYard.jpg" alt="" class="hover:scale-125">
                </div>
            </div>
        </div>

        <div id="DesignInstall" class="text-[#769973] h-20 text-shadow-none">DesignInstall</div>
        <div class="pt-10 text-center text-5xl text-white">Design and Installation</div>

        <div class="flex place-content-center mt-5">
            <div class="place-content-center text-white text-center w-1/2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, tempora totam? Doloremque quo blanditiis earum aspernatur, laborum fuga totam repudiandae distinctio iste laudantium consequuntur, eligendi maxime deleniti saepe alias dignissimos fugiat? Fugit, tempore. Placeat fugiat voluptate veritatis voluptas quos esse quia tempore accusantium dolorem perspiciatis! Sed ducimus at deserunt, assumenda unde id beatae eveniet fuga reprehenderit doloremque dignissimos hic dicta asperiores veritatis veniam perspiciatis molestiae laudantium minima. Placeat sequi, itaque soluta ad quod incidunt reprehenderit minima voluptate sit officiis voluptatum dolorum blanditiis fuga velit aliquam sed cum sunt a accusantium odit rerum nulla iure. Deserunt hic quisquam veniam fugiat qui!
            </div>
        </div>

        <div class="relative mb-20">
            <div class="flex inline-block h-80 place-content-center">
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/DesignInstallation/DoublePalmTree.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/DesignInstallation/Plants.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/DesignInstallation/Sod.jpg" alt="" class="hover:scale-125">
                </div>
            </div>
            <div class="flex place-content-center inline-block h-80 place-content-center">
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/DesignInstallation/PineBushes.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/DesignInstallation/SinglePalmTree.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/DesignInstallation/Steps.jpg" alt="" class="hover:scale-125">
                </div>
            </div>
            <div class="flex place-content-center inline-block h-80 place-content-center">
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/DesignInstallation/Markings.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/DesignInstallation/TallBushes.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/DesignInstallation/MeasuringBushes.jpg" alt="" class="hover:scale-125">
                </div>
            </div>
        </div>

        <div id="Hardscapes" class="text-[#769973] h-20 text-shadow-none">Hardscapes</div>
        <div class="pt-10 text-center text-5xl text-white">Hardscapes</div>

        <div class="flex place-content-center mt-5">
            <div class="place-content-center text-white text-center w-1/2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, tempora totam? Doloremque quo blanditiis earum aspernatur, laborum fuga totam repudiandae distinctio iste laudantium consequuntur, eligendi maxime deleniti saepe alias dignissimos fugiat? Fugit, tempore. Placeat fugiat voluptate veritatis voluptas quos esse quia tempore accusantium dolorem perspiciatis! Sed ducimus at deserunt, assumenda unde id beatae eveniet fuga reprehenderit doloremque dignissimos hic dicta asperiores veritatis veniam perspiciatis molestiae laudantium minima. Placeat sequi, itaque soluta ad quod incidunt reprehenderit minima voluptate sit officiis voluptatum dolorum blanditiis fuga velit aliquam sed cum sunt a accusantium odit rerum nulla iure. Deserunt hic quisquam veniam fugiat qui!
            </div>
        </div>

        <div class="relative mb-20">
            <div class="flex inline-block h-80 place-content-center">
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/Hardscapes/FinishedFountain.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/Hardscapes/LandscapeHouseBackground.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/Hardscapes/GrillPatioBackground.jpg" alt="" class="hover:scale-125">
                </div>
            </div>
            <div class="flex place-content-center inline-block h-80 place-content-center">
                <div class="flex place-content-center p-5">
                <img src="/images/Servicespage/Hardscapes/BackPatio.jpg" alt="" class="hover:scale-125">
                    </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/Hardscapes/FountainProgress3.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/Hardscapes/Playground2.jpg" alt="" class="hover:scale-125">
                </div>
            </div>
            <div class="flex place-content-center inline-block h-80 place-content-center">
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/Hardscapes/FountainProgress.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/Hardscapes/Playground.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/Hardscapes/FountainProgress2.jpg" alt="" class="hover:scale-125">
                </div>
            </div>
        </div>

        <div id="GradingDrainage" class="text-[#769973] h-20 text-shadow-none">GradingDrainage</div>
        <div class="pt-10 text-center text-5xl text-white">Grading and Drainage</div>

        <div class="flex place-content-center mt-5">
            <div class="place-content-center text-white text-center w-1/2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, tempora totam? Doloremque quo blanditiis earum aspernatur, laborum fuga totam repudiandae distinctio iste laudantium consequuntur, eligendi maxime deleniti saepe alias dignissimos fugiat? Fugit, tempore. Placeat fugiat voluptate veritatis voluptas quos esse quia tempore accusantium dolorem perspiciatis! Sed ducimus at deserunt, assumenda unde id beatae eveniet fuga reprehenderit doloremque dignissimos hic dicta asperiores veritatis veniam perspiciatis molestiae laudantium minima. Placeat sequi, itaque soluta ad quod incidunt reprehenderit minima voluptate sit officiis voluptatum dolorum blanditiis fuga velit aliquam sed cum sunt a accusantium odit rerum nulla iure. Deserunt hic quisquam veniam fugiat qui!
            </div>
        </div>

        <div class="relative mb-20">
            <div class="flex inline-block h-80 place-content-center">
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/GradingDrainage/Drainage.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/GradingDrainage/Drainage3.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/GradingDrainage/Drainage4.jpg" alt="" class="hover:scale-125">
                </div>
            </div>
            <div class="flex place-content-center inline-block h-80 place-content-center">
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/GradingDrainage/Grading.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/GradingDrainage/Drainage2.jpg" alt="" class="hover:scale-125">
                </div>
            </div>
        </div>

        <div id="MulchFlowerbeds" class="text-[#769973] h-20 text-shadow-none">MulchFlowerbeds</div>
        <div class="pt-10 text-center text-5xl text-white">Mulch and Flowerbeds</div>

        <div class="flex place-content-center mt-5">
            <div class="place-content-center text-white text-center w-1/2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, tempora totam? Doloremque quo blanditiis earum aspernatur, laborum fuga totam repudiandae distinctio iste laudantium consequuntur, eligendi maxime deleniti saepe alias dignissimos fugiat? Fugit, tempore. Placeat fugiat voluptate veritatis voluptas quos esse quia tempore accusantium dolorem perspiciatis! Sed ducimus at deserunt, assumenda unde id beatae eveniet fuga reprehenderit doloremque dignissimos hic dicta asperiores veritatis veniam perspiciatis molestiae laudantium minima. Placeat sequi, itaque soluta ad quod incidunt reprehenderit minima voluptate sit officiis voluptatum dolorum blanditiis fuga velit aliquam sed cum sunt a accusantium odit rerum nulla iure. Deserunt hic quisquam veniam fugiat qui!
            </div>
        </div>

        <div class="relative mb-20">
            <div class="flex inline-block h-80 place-content-center">
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/MulchFlowerbeds/Mulch4.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/MulchFlowerbeds/Flowerbed.jpg" alt="" class="hover:scale-125">
                </div>
                
            </div>
            <div class="flex place-content-center inline-block h-80 place-content-center">
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/MulchFlowerbeds/Mulch3.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/MulchFlowerbeds/Mulch.jpg" alt="" class="hover:scale-125">
                </div>
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/MulchFlowerbeds/Mulch2.jpg" alt="" class="hover:scale-125">
                </div>
            </div>
        </div>
        
        <div id="CleanRemoval" class="text-[#769973] h-20 text-shadow-none">CleanRemoval</div>
        <div class="pt-10 text-center text-5xl text-white">Clean Ups and Removal</div>

        <div class="flex place-content-center mt-5">
            <div class="place-content-center text-white text-center w-1/2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, tempora totam? Doloremque quo blanditiis earum aspernatur, laborum fuga totam repudiandae distinctio iste laudantium consequuntur, eligendi maxime deleniti saepe alias dignissimos fugiat? Fugit, tempore. Placeat fugiat voluptate veritatis voluptas quos esse quia tempore accusantium dolorem perspiciatis! Sed ducimus at deserunt, assumenda unde id beatae eveniet fuga reprehenderit doloremque dignissimos hic dicta asperiores veritatis veniam perspiciatis molestiae laudantium minima. Placeat sequi, itaque soluta ad quod incidunt reprehenderit minima voluptate sit officiis voluptatum dolorum blanditiis fuga velit aliquam sed cum sunt a accusantium odit rerum nulla iure. Deserunt hic quisquam veniam fugiat qui!
            </div>
        </div>

        <div class="relative mb-20">
            <div class="flex inline-block h-80 place-content-center">
                <div class="flex place-content-center p-5">
                    <img src="/images/Servicespage/CleanUpRemoval/RemovalService.jpg" alt="" class="hover:scale-125">
                </div>
            </div>
        </div>
        
        <div class="relative bg-[#627252] w-full h-32">
            <div class="flex inline-block">
                <div class="w-1/3 h-32">
                    
                    <div class="absolute bottom-0">
                        <div class="text-white ml-10"> &copy; Property Masters 2020 All Rights Reserved </div>
                    </div>
                </div>
                <div class="w-1/3 h-32 place-content-center">
                    <div class="flex place-content-center">
                        <img src="" alt="Logo" class="">
                    </div>
                    <div class="text-white text-center text-lg">Property Masters</div>
                    <div class="text-center bottom-0">
                        <div class="text-white ml-10">Website by: <a href="mailto:natemixon77@gmail.com" class="hover:text-[#96958c]">natemixon77@gmail.com</a> </div>
                    </div> 
                </div>
                <div class="w-1/3 h-32 place-content-center">
                    <div class="">
                        <div class="text-white text-lg text-center hover:text-[#96958c]"><a href="tel:8432563919">(843) 256-3919</a></div>
                    </div>
                    <div>
                        <div class="text-white text-lg text-center hover:text-[#96958c]"><a href="mailto:csliba@pmlawnandlandscape.com">csliba@pmlawnandlandscape.com</a></div>
                    </div>
                    <div>
                        <div class="flex inline place-content-center mt-2">
                            <span class="mr-5"><a href="{{url('https://www.instagram.com/pm.landscape/')}}"><img src="/images/Homepage/instagram.png" alt="" class=""></a></span>
                            <span class=""><a href="{{url('https://www.facebook.com/pmlawnandlandscape')}}"><img src="/images/Homepage/facebook.png" alt="" class=""></a></span>
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>