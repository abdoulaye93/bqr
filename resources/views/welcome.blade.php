<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Help Article: Tailwind Toolbox</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="https://unpkg.com/tailwindcss@next/dist/tailwind.min.css" rel="stylesheet">
    <!--Replace with your tailwind.css once created-->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato');
        html { font-family: 'Lato', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 tracking-wider tracking-normal">
<nav id="header" class="fixed w-full z-10 top-0 bg-white border-b border-gray-400">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-4">
        <div class="pl-4 flex items-center">
            <svg class="h-5 pr-3 fill-current text-purple-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M0 2C0 .9.9 0 2 0h16a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm14 12h4V2H2v12h4c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2zM5 9l2-2 2 2 4-4 2 2-6 6-4-4z"/>
            </svg>
            <a class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl"  href="#">
                BRQ
            </a>
        </div>
        <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-purple-500 appearance-none focus:outline-none">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>
        <div class="w-full flex-grow lg:flex  lg:content-center lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 z-20" id="nav-content">
            <div class="flex-1 w-full mx-auto max-w-sm content-center py-4 lg:py-0">
            </div>
            <ul class="list-reset lg:flex justify-end items-center">
                <li class="mr-3 py-2 lg:py-0">
                    <a class="inline-block py-2 px-4 text-gray-900 font-bold no-underline" href="#">Acceuil</a>
                </li>
                <li class="mr-3 py-2 lg:py-0">
                    <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:underline py-2 px-4" href="#">Comment ça marche</a>
                </li>
                <li class="mr-3 py-2 lg:py-0">
                    <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:underline py-2 px-4" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--Container-->
<div class="container w-full flex flex-wrap mx-auto px-2 pt-8 lg:pt-16 mt-16 mb-2">
    <div class="w-full lg:w-1/5 lg:px-6 text-xl text-gray-800 leading-normal">
        <p class="text-base font-bold py-2 lg:pb-6 text-gray-700">Menu</p>
        <div class="block lg:hidden sticky inset-0">
            <button id="menu-toggle" class="flex w-full justify-end px-3 py-3 bg-white lg:bg-transparent border rounded border-gray-600 hover:border-purple-500 appearance-none focus:outline-none">
                <svg class="fill-current h-3 float-right" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                </svg>
            </button>
        </div>
        <div class="w-full sticky inset-0 hidden h-64 lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-y-hidden lg:block mt-0 border border-gray-400 lg:border-transparent bg-white shadow lg:shadow-none lg:bg-transparent z-20" style="top:5em;" id="menu-content">
            <ul class="list-reset">
                <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                    <a href="#" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:border-purple-500 lg:hover:border-purple-500">
                        <span class="pb-1 md:pb-0 text-sm text-gray-900 font-bold">Acceuil</span>
                    </a>
                </li>
                <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                    <a href="#" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                        <span class="pb-1 md:pb-0 text-sm">Tasks</span>
                    </a>
                </li>
                <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                    <a href="#" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                        <span class="pb-1 md:pb-0 text-sm">Messages</span>
                    </a>
                </li>
                <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                    <a href="#" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                        <span class="pb-1 md:pb-0 text-sm">Analytics</span>
                    </a>
                </li>
                <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                    <a href="#" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                        <span class="pb-1 md:pb-0 text-sm">Payments</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="w-full lg:w-4/5 p-8 mt-6 lg:mt-0 text-gray-900 leading-normal bg-white border border-gray-400 border-rounded">
        <!--Title-->
        <div class="font-sans">
{{--            <span class="text-base text-purple-500 font-bold">&laquo;</span> <a href="#" class="text-base md:text-sm text-purple-500 font-bold no-underline hover:underline">Back Link</a>--}}
            <h1 class="font-sans break-normal text-gray-900 pt-6 pb-2 text-xl">Help page title</h1>
            <hr class="border-b border-gray-400">
        </div>
        <!--Post Content-->
        <!--Lead Para-->
        <p class="py-6">
            👋 Welcome fellow <a class="text-purple-500 no-underline hover:underline" href="https://www.tailwindcss.com">Tailwind CSS</a> fan.  This starter template provides a starting point to create your own helpdesk / faq / knowledgebase articles using Tailwind CSS and vanilla Javascript.
        </p>
        <p class="py-6">The basic help article layout is available and all using the default Tailwind CSS classes (although there are a few hardcoded style tags). If you are going to use this in your project, you will want to convert the classes into components.</p>
        <h1 class="py-2 font-sans">Heading 1</h1>
        <h2 class="py-2 font-sans">Heading 2</h2>
        <h3 class="py-2 font-sans">Heading 3</h3>
        <h4 class="py-2 font-sans">Heading 4</h4>
        <h5 class="py-2 font-sans">Heading 5</h5>
        <h6 class="py-2 font-sans">Heading 6</h6>
        <p class="py-6">Sed dignissim lectus ut tincidunt vulputate. Fusce tincidunt lacus purus, in mattis tortor sollicitudin pretium. Phasellus at diam posuere, scelerisque nisl sit amet, tincidunt urna. Cras nisi diam, pulvinar ut molestie eget, eleifend ac magna. Sed at lorem condimentum, dignissim lorem eu, blandit massa. Phasellus eleifend turpis vel erat bibendum scelerisque. Maecenas id risus dictum, rhoncus odio vitae, maximus purus. Etiam efficitur dolor in dolor molestie ornare. Aenean pulvinar diam nec neque tincidunt, vitae molestie quam fermentum. Donec ac pretium diam. Suspendisse sed odio risus. Nunc nec luctus nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis nec nulla eget sem dictum elementum.</p>
        <ol>
            <li class="py-3">Maecenas accumsan lacus sit amet elementum porta. Aliquam eu libero lectus. Fusce vehicula dictum mi. In non dolor at sem ullamcorper venenatis ut sed dui. Ut ut est quam. Suspendisse quam quam, commodo sit amet placerat in, interdum a ipsum. Morbi sit amet tellus scelerisque tortor semper posuere.</li>
            <li class="py-3">Morbi varius posuere blandit. Praesent gravida bibendum neque eget commodo. Duis auctor ornare mauris, eu accumsan odio viverra in. Proin sagittis maximus pharetra. Nullam lorem mauris, faucibus ut odio tempus, ultrices aliquet ex. Nam id quam eget ipsum luctus hendrerit. Ut eros magna, eleifend ac ornare vulputate, pretium nec felis.</li>
            <li class="py-3">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc vitae pretium elit. Cras leo mauris, tristique in risus ac, tristique rutrum velit. Mauris accumsan tempor felis vitae gravida. Cras egestas convallis malesuada. Etiam ac ante id tortor vulputate pretium. Maecenas vel sapien suscipit, elementum odio et, consequat tellus.</li>
        </ol>
        <blockquote class="border-l-4 border-purple-500 italic my-8 pl-8 md:pl-12">Example of blockquote - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.</blockquote>
        <p class="py-6">Example code block:</p>
        <!--/ Post Content-->
        <!-- Useful -->
        <!-- /Useful -->
    </div>
    <!--Back link -->
</div>
<!--/container-->
<footer class="footer bg-white relative pt-1 border-b-2 border-blue-700">
    <div class="container mx-auto px-6">
        <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
            <div class="sm:w-2/3 text-center py-6">
                <p class="text-sm text-blue-700 font-bold mb-2">
                    © 2020 BRQ Tous Droits Réservés
                </p>
            </div>
        </div>
    </div>
</footer><script>
    /*Toggle dropdown list*/
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");

    var helpMenuDiv = document.getElementById("menu-content");
    var helpMenu = document.getElementById("menu-toggle");

    document.onclick = check;

    function check(e){
        var target = (e && e.target) || (event && event.srcElement);


        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, navMenu)) {
                // click on the link
                if (navMenuDiv.classList.contains("hidden")) {
                    navMenuDiv.classList.remove("hidden");
                } else {navMenuDiv.classList.add("hidden");}
            } else {
                // click both outside link and outside menu, hide menu
                navMenuDiv.classList.add("hidden");
            }
        }

        //Help Menu
        if (!checkParent(target, helpMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, helpMenu)) {
                // click on the link
                if (helpMenuDiv.classList.contains("hidden")) {
                    helpMenuDiv.classList.remove("hidden");
                } else {helpMenuDiv.classList.add("hidden");}
            } else {
                // click both outside link and outside menu, hide menu
                helpMenuDiv.classList.add("hidden");
            }
        }

    }

    function checkParent(t, elm) {
        while(t.parentNode) {
            if( t == elm ) {return true;}
            t = t.parentNode;
        }
        return false;
    }


</script>
</body>
</html>