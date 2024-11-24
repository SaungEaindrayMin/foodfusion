<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Default')</title>
    @vite('resources/css/app.css')

    @yield ('theme')
</head>
<body>


<!-- ========== HEADER ========== -->
<header class="flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full py-5  fixed top-0  bg-white/50 backdrop-blur-xl z-99  ">
  <nav class="relative max-w-7xl w-full flex flex-wrap md:grid md:grid-cols-12 basis-full items-center px-4 md:px-6 mx-auto">
    <div class="md:col-span-3">
      <!-- Logo -->
      <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="../templates/creative-agency/index.html" aria-label="Preline">
        <img src="/magic-of-flavor-high-resolution-logo-transparent.png"  alt="" class="w-10 h-10">
      </a>
      <!-- End Logo -->
    </div>

    <!-- Button Group -->
    <div class="flex items-center gap-x-1 md:gap-x-2 ms-auto py-1 md:ps-6 md:order-3 md:col-span-3">
      <button type="button" onclick="Signin.showModal()" class="btn py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl bg-white border border-gray-400 text-black hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none  ">
        Sign in
      </button>
      <button type="button" onclick="Signup.showModal()" class=" btn py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent bg-yellow-400 text-black hover:bg-yellow-500 focus:outline-none focus:bg-yellow-500 transition disabled:opacity-50 disabled:pointer-events-none">
        Sign up
      </button>

      <div class="md:hidden">
        <button type="button" class="hs-collapse-toggle size-[38px] flex justify-center items-center text-sm font-semibold rounded-xl border border-gray-200 text-black hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" id="hs-navbar-hcail-collapse" aria-expanded="false" aria-controls="hs-navbar-hcail" aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-hcail">
          <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
          <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>
      </div>
    </div>
    <!-- End Button Group -->

    <!-- Collapse -->
    <div id="hs-navbar-hcail" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block md:w-auto md:basis-auto md:order-2 md:col-span-6" aria-labelledby="hs-navbar-hcail-collapse">
      <div class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:justify-center md:items-center md:gap-y-0 md:gap-x-7 md:mt-0">
        <div>
          <a class="relative inline-block text-black focus:outline-none before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-yellow-400 dark:text-black/70" href="#" aria-current="page">Work</a>
        </div>
        <div>
          <a class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">Services</a>
        </div>
        <div>
          <a class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">About</a>
        </div>
        <div>
          <a class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">Careers</a>
        </div>
        <div>
          <a class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">Blog</a>
        </div>
      </div>
    </div>
    <!-- End Collapse -->
  </nav>
</header>
<!-- ========== END HEADER ========== -->
 


<div class="">
  @yield('content')
</div>
    


<script src="/node_modules/preline/dist/preline.js"></script>
@vite('resources/js/app.js')
</body>
</html>