<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <title>Home</title>
</head>
<body>
   <div class="bg-white">
       <header class="absolute inset-x-0 top-0 z-50">
         <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
           <div class="flex lg:flex-1">
           <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
    <span class="sr-only">Your Company</span>
    <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
</a>

           </div>
           <div class="flex lg:hidden">
             <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
               <span class="sr-only">Open main menu</span>
               <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
               </svg>
             </button>
           </div>
           <div class="hidden lg:flex lg:gap-x-12">
             <a href="{{ route('User.index') }}" class="text-sm/6 font-semibold text-gray-900">User</a>
             <a href="{{ route('Supplier.index') }}" class="text-sm/6 font-semibold text-gray-900">Supplier</a>
             <a href="{{ route('Stok.index') }}" class="text-sm/6 font-semibold text-gray-900">Stock</a>
             <a href="{{ route('BarangMasuk.index') }}" class="text-sm/6 font-semibold text-gray-900">Incoming Items</a>
             <a href="{{ route('BarangKeluar.index') }}" class="text-sm/6 font-semibold text-gray-900">Outgoing Items</a>
             <a href="{{ route('PinjamBarang.index') }}" class="text-sm/6 font-semibold text-gray-900">Borrowed Items</a>
           </div>
           <div class="hidden lg:flex lg:flex-1 lg:justify-end">
             <a href="#" class="text-sm/6 font-semibold text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
           </div>
         </nav>
         <!-- Mobile menu, show/hide based on menu open state. -->
         <div class="lg:hidden" role="dialog" aria-modal="true">
           <!-- Background backdrop, show/hide based on slide-over state. -->
           <div class="fixed inset-0 z-50"></div>
           <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
             <div class="flex items-center justify-between">
               <a href="#" class="-m-1.5 p-1.5">
                 <span class="sr-only">Your Company</span>
                 <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
               </a>
               <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                 <span class="sr-only">Close menu</span>
                 <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                 </svg>
               </button>
             </div>
             <div class="mt-6 flow-root">
               <div class="-my-6 divide-y divide-gray-500/10">
                 <div class="space-y-2 py-6">
                   <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">User</a>
                   <a href="{{ route('Supplier.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Supplier</a>
                   <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Stok</a>
                   <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Barang Masuk</a>
                   <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Barang Keluar</a>
                   <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Pinjam Barang</a>
                 </div>
                 <div class="py-6">
                   <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </header>
   </div>
   <div class="relative isolate px-6 pt-14 lg:px-8">
     <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
       <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
     </div>
    
     @yield('content')


     <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
       <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
     </div>
   </div>
</body>
</html>