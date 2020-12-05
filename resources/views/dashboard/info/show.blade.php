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
                        @foreach($infos as $inf)
                            <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                            @if($inf->sousInfos->count()>=1)
                                <li class="md:my-0 hover:bg-purple-100 lg:hover:bg-transparent" >
                                    <a href="{{route('dashboard.info.create',$inf)}}">
                                        <span class="pb-1 md:pb-0 text-sm text-gray-900 font-bold">{{$inf->name}}</span>
                                    </a>
                                    @else
                                        <a  href="{{route('dashboard.info.create',$inf)}}" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                                            <span class="pb-1 md:pb-0 text-sm">{{$inf->name}}</span>
                                        </a>
                                    @endif
                                    @if($inf->sousInfos->count()>=1)
                                        <ul class="list-reset">
                                            @foreach($inf->sousInfos as $sousInfo)
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
            <!--Title-->
             <div class="mb-3">
                 <a href="{{route('dashboard.info.create',$info)}}" class="mr-5  hover:bg-blue-700 hover:text-white border border-gray-400 text-blue-700 font-bold py-2 px-6 rounded-lg text-white">
                     Créer {{$info->name}}
                 </a>
                 <span class="font-sans break-normal text-gray-900 pt-6 pb-2 text-xl">Liste des infos</span>
             </div>
            <hr class="border-b border-gray-400">
                <div class="container mx-auto px-4 sm:px-8 max-w-3xl">

                    <div class="main-title my-8">
                        <h1 class="font-bold text-2xl text-center">{{$info->name}}</h1>
                    </div>
test
                    <div class="main-question mb-8 flex flex-col divide-y text-gray-800 text-base">
                        @foreach($contents as $content)
                            <div class="item px-6 py-6" x-data="{isOpen : false}">
                                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                                    <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">{{$content->id}}</h4>
                                    <svg
                                        class="w-5 h-5 text-gray-500"
                                        fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>
                                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                                    {{$content->info}}
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!--/container-->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>

@endsection


