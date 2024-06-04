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
                        <li class="text-[#96958c] text-3xl"><a href="{{url('about')}}">About Us</a></li>
                        <li class="text-white hover:text-[#96958c] text-3xl"><a href="{{url('contact')}}">Contact Us</a></li>
                    </ul>
                </nav>
        </div>

        <div class="relative">
            <div class="pt-12 flex place-content-center">
                <div class="absolute z-40 mt-10">
                    <span class="text-white text-6xl">About Us</span>
                </div>
                <div class="place-content-center text-center">
                    <img src="/images/Aboutpage/AboutBackgroundMed.jpg" alt="" class="h-96 w-screen">
                </div>
            </div>
        </div>

        <div class="mt-20 relative">
            <div class="flex place-content-center">
                <span class="text-white text-6xl">Introduction</span>
            </div>
        </div>
        
        <div class="relative">
            <div class="pt-14 flex inline-block place-content-left">
                <div class="flex inline-block w-1/3 h-1/2">
                    <img src="/images/Aboutpage/OwnerPhoto.jpg" alt="" class="ml-72">
                </div>
                <div class="flex h-96 w-96 ml-20 mt-1">
                    <span class="text-white text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum alias placeat quas dicta dolores et suscipit, omnis deleniti nam vero, iusto libero eius. Itaque, officiis beatae facilis quidem, ut vitae deserunt iste nihil, laboriosam cupiditate iure accusamus! Suscipit quaerat, quidem consectetur laborum iusto vero tenetur cumque incidunt non eos dignissimos rem numquam placeat vitae. Ratione fugiat eaque vitae laboriosam commodi exercitationem eius asperiores itaque? Excepturi dicta explicabo corrupti. Accusamus consectetur fuga distinctio voluptatum maxime, in fugit quos praesentium dolores, perferendis molestias quasi accusantium? Maiores enim, obcaecati iure recusandae mollitia eligendi voluptatibus atque itaque ipsa saepe, quibusdam rerum asperiores tenetur corporis.</span>
                </div>
            </div>
        </div>

        <div class="mt-20 relative">
            <div class="flex place-content-center">
                <span class="text-white text-6xl">Education</span>
            </div>
        </div>

        <div class="mt-10 relative">
            <div class="flex place-content-center">
                <div class="w-[50rem] text-center">
                    <span class="text-white text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptatibus ipsum voluptatum tempora dicta vitae, ipsa alias eos, pariatur ipsam cupiditate, veritatis culpa. Assumenda unde adipisci cum expedita blanditiis, laudantium harum, at vero commodi, hic praesentium. Ratione sunt, tempore nisi accusantium exercitationem earum quasi, animi eos voluptate illum quibusdam dicta cumque ad velit! Eligendi et quaerat a, blanditiis corporis expedita voluptate repudiandae! Ipsa, commodi! Quia enim esse, ipsum, facere asperiores illo harum adipisci iste eius nulla, dolorem voluptatem sunt illum? Velit nisi tempore quas similique culpa minima! Provident alias inventore accusamus fugiat illum, delectus, quae, quis cupiditate facilis nostrum aliquid!</span>
                </div>
            </div>
            <div class="flex place-content-center">
                <div class="">
                    <img src="/images/Aboutpage/Workers.jpg" alt="" class="p-3">
                </div>
                <div class="">
                    <img src="/images/Aboutpage/EducationPic.jpg" alt="" class="p-3">
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