@extends('layouts.app')
@section('container')

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
                @if (auth()->check())
                    @foreach($infos as $info)
                        <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                        @if($info->sousInfos->count()>=1)
                            <li class="md:my-0 hover:bg-purple-100 lg:hover:bg-transparent" >
                                <a href="{{route('dashboard.info.create',$info)}}">
                                    <span class="pb-1 md:pb-0 text-sm text-gray-900 font-bold">{{$info->name}}</span>
                                </a>
                                @else
                                    <a  href="{{route('dashboard.info.create',$info)}}" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                                        <span class="pb-1 md:pb-0 text-sm">{{$info->name}}</span>
                                    </a>
                                @endif
                                @if($info->sousInfos->count()>=1)
                                    <ul class="list-reset">
                                        @foreach($info->sousInfos as $sousInfo)
                                            <li class="md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                                                <a href="#" class="block pl-8 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                                                    {{$sousInfo->name}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                            @endforeach
                        @endif
            </ul>
        </div>
    </div>
    <div class="w-full lg:w-4/5 p-8 mt-6 lg:mt-0 text-gray-900 leading-normal bg-white border border-gray-400 border-rounded">
{{--        <!--Title-->--}}
{{--        <div class="font-sans">--}}
{{--            <span class="text-base text-purple-500 font-bold">&laquo;</span> <a href="#" class="text-base md:text-sm text-purple-500 font-bold no-underline hover:underline">Back Link</a>--}}
{{--            <h1 class="font-sans break-normal text-gray-900 pt-6 pb-2 text-xl">Help page title</h1>--}}
{{--            <hr class="border-b border-gray-400">--}}
{{--        </div>--}}
{{--        <!--Post Content-->--}}
{{--        <!--Lead Para-->--}}
{{--        <p class="py-6">--}}
{{--            👋 Welcome fellow <a class="text-purple-500 no-underline hover:underline" href="https://www.tailwindcss.com">Tailwind CSS</a> fan.  This starter template provides a starting point to create your own helpdesk / faq / knowledgebase articles using Tailwind CSS and vanilla Javascript.--}}
{{--        </p>--}}
{{--        <p class="py-6">The basic help article layout is available and all using the default Tailwind CSS classes (although there are a few hardcoded style tags). If you are going to use this in your project, you will want to convert the classes into components.</p>--}}
{{--        <h1 class="py-2 font-sans">Heading 1</h1>--}}
{{--        <h2 class="py-2 font-sans">Heading 2</h2>--}}
{{--        <h3 class="py-2 font-sans">Heading 3</h3>--}}
{{--        <h4 class="py-2 font-sans">Heading 4</h4>--}}
{{--        <h5 class="py-2 font-sans">Heading 5</h5>--}}
{{--        <h6 class="py-2 font-sans">Heading 6</h6>--}}
{{--        <p class="py-6">Sed dignissim lectus ut tincidunt vulputate. Fusce tincidunt lacus purus, in mattis tortor sollicitudin pretium. Phasellus at diam posuere, scelerisque nisl sit amet, tincidunt urna. Cras nisi diam, pulvinar ut molestie eget, eleifend ac magna. Sed at lorem condimentum, dignissim lorem eu, blandit massa. Phasellus eleifend turpis vel erat bibendum scelerisque. Maecenas id risus dictum, rhoncus odio vitae, maximus purus. Etiam efficitur dolor in dolor molestie ornare. Aenean pulvinar diam nec neque tincidunt, vitae molestie quam fermentum. Donec ac pretium diam. Suspendisse sed odio risus. Nunc nec luctus nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis nec nulla eget sem dictum elementum.</p>--}}
{{--        <ol>--}}
{{--            <li class="py-3">Maecenas accumsan lacus sit amet elementum porta. Aliquam eu libero lectus. Fusce vehicula dictum mi. In non dolor at sem ullamcorper venenatis ut sed dui. Ut ut est quam. Suspendisse quam quam, commodo sit amet placerat in, interdum a ipsum. Morbi sit amet tellus scelerisque tortor semper posuere.</li>--}}
{{--            <li class="py-3">Morbi varius posuere blandit. Praesent gravida bibendum neque eget commodo. Duis auctor ornare mauris, eu accumsan odio viverra in. Proin sagittis maximus pharetra. Nullam lorem mauris, faucibus ut odio tempus, ultrices aliquet ex. Nam id quam eget ipsum luctus hendrerit. Ut eros magna, eleifend ac ornare vulputate, pretium nec felis.</li>--}}
{{--            <li class="py-3">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc vitae pretium elit. Cras leo mauris, tristique in risus ac, tristique rutrum velit. Mauris accumsan tempor felis vitae gravida. Cras egestas convallis malesuada. Etiam ac ante id tortor vulputate pretium. Maecenas vel sapien suscipit, elementum odio et, consequat tellus.</li>--}}
{{--        </ol>--}}
{{--        <blockquote class="border-l-4 border-purple-500 italic my-8 pl-8 md:pl-12">Example of blockquote - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.</blockquote>--}}
{{--        <p class="py-6">Example code block:</p>--}}
        <div class="grid grid-cols-1 sm:grid-cols-2 sm:px-8 sm:py-12 sm:gap-x-8 md:py-16">
            <div class="relative z-10 col-start-1 row-start-1 px-4 pt-40 pb-3 bg-gradient-to-t from-black sm:bg-none">
                <p class="text-sm font-medium text-white sm:mb-1 sm:text-gray-500">Entire house</p>
                <h2 class="text-xl font-semibold text-white sm:text-2xl sm:leading-7 sm:text-black md:text-3xl">Beach House in Collingwood</h2>
            </div>
            <div class="col-start-1 row-start-2 px-4 sm:pb-16">
                <div class="flex items-center text-sm font-medium my-5 sm:mt-2 sm:mb-4">
                    <svg width="20" height="20" fill="currentColor" class="text-violet-600">
                        <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                    </svg>
                    <div class="ml-1">
                        <span class="text-black">4.94</span>
                        <span class="sm:hidden md:inline">(128)</span>
                    </div>
                    <div class="text-base font-normal mx-2">·</div>
                    <div>Collingwood, Ontario</div>
                </div>
                <hr class="w-16 border-gray-300 hidden sm:block">
            </div>
            <div class="col-start-1 row-start-3 space-y-3 px-4">
                <p class="flex items-center text-black text-sm font-medium">
                    <img src="/kevin-francis.jpg" alt="" class="w-6 h-6 rounded-full mr-2 bg-gray-100">
                    Hosted by Kevin Francis
                </p>
                <button type="button" class="bg-violet-100 text-violet-700 text-base font-semibold px-6 py-2 rounded-lg">Check availability</button>
            </div>
            <div class="col-start-1 row-start-1 flex sm:col-start-2 sm:row-span-3">
                <div class="w-full grid grid-cols-3 grid-rows-2 gap-2">
                    <div class="relative col-span-3 row-span-2 md:col-span-2">
                        <img src="/beach-house.jpg" alt="" class="absolute inset-0 w-full h-full object-cover bg-gray-100 sm:rounded-lg" />
                    </div>
                    <div class="relative hidden md:block">
                        <img src="/beach-house-interior.jpg" alt="" class="absolute inset-0 w-full h-full object-cover rounded-lg bg-gray-100" />
                    </div>
                    <div class="relative hidden md:block">
                        <img src="/beach-house-view.jpg" alt="" class="absolute inset-0 w-full h-full object-cover rounded-lg bg-gray-100" />
                    </div>
                </div>
            </div>
        </div>    </div>
</div>
<!--/container-->
@endsection


