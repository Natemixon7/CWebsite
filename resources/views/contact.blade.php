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
                        <li class="text-white hover:text-[#96958c] text-3xl"><a href="{{url('services')}}">Services</a></li>
                        <!--<li class="text-white hover:text-[#96958c] text-2xl"><a href="">Portfolio</a></li>-->
                        <li class="text-white hover:text-[#96958c] text-3xl"><a href="{{url('about')}}">About Us</a></li>
                        <li class="text-[#96958c] text-3xl"><a href="{{url('contact')}}">Contact Us</a></li>
                    </ul>
                </nav>
        </div>

        <div class="relative">
            <div class="pt-12 flex place-content-center">
                <div class="absolute z-40 mt-10">
                    <span class="text-white text-6xl">Contact Us</span>
                </div>
                <div class="place-content-center text-center">
                    <img src="/images/Contactpage/ContactPhoto2.jpg" alt="" class="h-96 w-screen">
                </div>
            </div>
        </div>

        

        <div class="relative mt-10 mb-10">
            <div class="flex inline-block">
                <div class="w-1/3">
                    <div class="">
                        <span class="text-white text-5xl ml-20">Thanks For Your Interest!</span>
                    </div>
                    <div class="bg-gray-200">
                        <span class="text-white text-2xl ml-32 float-right">Please give us a call or email us. We look forward to working for you! </span>
                    </div>
                    <div>
                        <div class="text-white text-4xl mt-20 text-center underline">Socials:</div>
                        <div class="flex inline-block place-content-center mt-5">
                            <div class="mr-5"><a href="{{url('https://www.instagram.com/pm.landscape/')}}"><img src="/images/Homepage/instagram.png" alt="" class=""></a></div>
                            <div><a href="{{url('https://www.facebook.com/pmlawnandlandscape')}}"><img src="/images/Homepage/facebook.png" alt="" class=""></a></div>
                        </div>
                    </div>
                </div>
                <div class="w-1/3">
                    <span class="text-white text-3xl ml-60">Phone:</span>
                    <div><br></div>
                    <div>
                        <a href="tel:8432563919"><span class="text-white ml-60 text-2xl hover:text-[#96958c]">(843) 256-3919</span></a>
                    </div>
                    <div>
                        <span class="text-white ml-64">M-F 10am-5pm</span>
                    </div>
                </div>
                <div class="w-1/3">
                    <span class="text-white text-3xl">Email:</span>
                    <div><br></div>
                    <div>
                        <a href="mailto:csliba@pmlawnandlandscape.com"><span class="text-white text-2xl hover:text-[#96958c]">csliba@pmlawnandlandscape.com</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <br>
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