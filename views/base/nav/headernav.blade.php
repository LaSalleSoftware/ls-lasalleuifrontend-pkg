<label for="menu-toggle" class="pointer-cursor lg:hidden block">
    <svg
        class="fill-current text-white hover:text-purple-300 focus:text-purple-300"
        xmlns="http://www.w3.org/2000/svg"
        width="20"
        height="20"
        viewBox="0 0 20 20"
    >
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        <title>Menu</title>
    </svg>
</label>
<input class="hidden" type="checkbox" id="menu-toggle" />

<div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
    <nav>
        <ul class="lg:flex items-center justify-between text-white text-xl pt-4 lg:pt-0 font-semibold">
            <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:text-purple-300" href="/blog/all?page=1">Blog</a></li>
            <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:text-purple-300" href="#">Pricing</a></li>
            <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:text-purple-300" href="#">Documentation</a></li>
            <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:text-purple-300 " href="#">Support</a></li>
        </ul>
    </nav>
</div>
