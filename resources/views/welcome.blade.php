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
                        <li class="text-[#96958c] text-3xl"><a href="{{url('/')}}">Home</a></li>
                        <li class="text-white hover:text-[#96958c] text-3xl"><a href="{{url('services')}}">Services</a></li>
                        <!--<li class="text-white hover:text-[#96958c] text-2xl"><a href="">Portfolio</a></li>-->
                        <li class="text-white hover:text-[#96958c] text-3xl"><a href="{{url('about')}}">About Us</a></li>
                        <li class="text-white hover:text-[#96958c] text-3xl"><a href="{{url('contact')}}">Contact Us</a></li>
                    </ul>
                </nav>
        </div>
        <div class="relative">
            <div class="pt-12 flex inline-block place-content-center">
                <div class="absolute z-40 bg-black text-white opacity-75 mt-44 ">
                    <span class="flex text-8xl h-68 items-center justify-center p-10 opacity-100"> Serving the Low Country Since 2020. </span>
                </div>
            
                <div class="absolute z-40 bg-[#627252] text-white inset-x w-40 bottom-56 text-center p-3 rounded h-28 w-60 hover:bg-[#769973] hover:brightness-100">
                    <span class="text-3xl"><a href="" class="block w-full h-full place-content-center">Get A Quote</a></span>
                </div>

                <div class="flex h-1/2 w-1/3 bg-green-200">
                    <img src="/images/Homepage/GrillPatioBackground.jpg" alt="" class="h-full w-full brightness-75 hover:brightness-100 hover:contrast-100 contrast-85 z-30">
                </div>

                <div class="flex h-1/2 w-1/3 bg-gray-200">
                    <img src="/images/Homepage/TreeBushBackground.jpg" alt="" class="h-full w-full brightness-75 hover:brightness-100 hover:contrast-100 contrast-85 z-30">
                </div>

                <div class="flex h-1/2 w-1/3 bg-blue-100">
                    <img src="/images/Homepage/MowerYardBackground.jpg" alt="" class="h-full w-full brightness-75 hover:brightness-100 hover:contrast-100 contrast-85 z-30">
                </div>
            </div>
        </div>

        <h1 class="pt-10 text-center text-5xl text-white">Services</h1>

        <div class="relative mb-20">
            <div class="flex inline-block h-56 place-content-center">
                <div class="flex group place-content-center size-50 h-60 p-5" style="cursor: pointer;" onclick="location.href='{{url('/services/#LawnServices')}}';">
                    <span class="absolute z-40 text-white text-5xl mt-12 group-hover:invisible">Lawn</span>
                    <span class="absolute z-40 text-white text-5xl mt-28 group-hover:invisible">Services</span>
                    <img src="/images/Homepage/LandscapeYardBackground.jpg" alt="" class="brightness-[.25] hover:brightness-100 hover:scale-110">
                </div>
                <div class="flex group place-content-center size-50 h-60 p-5" style="cursor: pointer;" onclick="location.href='{{url('/services/#DesignInstall')}}';">
                    <span class="absolute z-40 text-white text-5xl mt-12 group-hover:invisible">Design &</span>
                    <span class="absolute z-40 text-white text-5xl mt-28 group-hover:invisible">Installation</span>
                    <img src="/images/Homepage/DesignInstallService.jpg" alt="" class="brightness-[.25] hover:brightness-100 hover:scale-110">
                </div>
                <div class="flex group place-content-center size-50 h-60 p-5" style="cursor: pointer;" onclick="location.href='{{url('/services/#Hardscapes')}}';">
                    <span class="absolute z-40 text-white text-5xl mt-20 group-hover:invisible">Hardscapes</span>
                    <img src="/images/Homepage/LandscapeHouseBackground.jpg" alt="" class="brightness-[.25] hover:brightness-100 hover:scale-110">
                </div>
            </div>
            <div class="flex place-content-center inline-block h-56 place-content-center">
                <div class="flex group place-content-center size-50 h-60 p-5" style="cursor: pointer;" onclick="location.href='{{url('/services/#GradingDrainage')}}';">
                    <span class="absolute z-40 text-white text-5xl mt-12 group-hover:invisible">Grading &</span>
                    <span class="absolute z-40 text-white text-5xl mt-28 group-hover:invisible">Drainage</span>
                    <img src="/images/Homepage/GradingDrainageService.jpg" alt="" class="brightness-[.25] hover:brightness-100 hover:scale-110">
                </div>
                <div class="flex group place-content-center size-50 h-60 p-5" style="cursor: pointer;" onclick="location.href='{{url('/services/#MulchFlowerbeds')}}';">
                    <span class="absolute z-40 text-white text-5xl mt-12 group-hover:invisible">Mulch &</span>
                    <span class="absolute z-40 text-white text-5xl mt-28 group-hover:invisible">Flowerbeds</span>
                    <img src="/images/Homepage/LandscapeMulchBackground.jpg" alt="" class="brightness-[.25] hover:brightness-100 hover:scale-110">
                </div>
                <div class="flex group place-content-center size-50 h-60 p-5" style="cursor: pointer;" onclick="location.href='{{url('/services/#CleanRemoval')}}';">
                    <span class="absolute z-40 text-white text-5xl mt-12 group-hover:invisible">Clean Up</span>
                    <span class="absolute z-40 text-white text-5xl mt-28 group-hover:invisible">& Removal</span>
                    <img src="/images/Homepage/RemovalServiceResize.jpg" alt="" class="w-[16.7rem] brightness-[.25] hover:brightness-100 hover:scale-110">
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
