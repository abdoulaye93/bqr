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
        @if (session('message'))
            <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-teal-500">
            <span class="text-xl inline-block mr-5 align-middle">
            <i class="fas fa-bell" />
            </span>
                <span class="inline-block align-middle mr-8">
                <b class="capitalize">{{session('message')}}</b>
            </span>
                <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
                    <span>×</span>
                </button>
            </div>
        @endif
        <form class="mt-2"  action="{{route('email')}}" accept-charset="UTF-8"  method="POST"  >
            @csrf
            <label class="block">
                <span class="text-gray-700">Message</span>
                <textarea class=" form-input block w-full resize-x border rounded-md" placeholder="Entrer l'information " @error('info') is-invalid @enderror name="info" ></textarea>{{ old('info') }}  </textarea>

            </label>
            @error('info')
            <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">
                {{$message}}
            </div>
            @enderror
            <div class=" flex flex-col  justify-center">
                <button class="py-3 my-8 text-lg bg-gradient-to-r from-purple-500 to-indigo-600 rounded-xl text-white">Envoyer</button>
            </div>
        </form>
    </div>
</div>
<!--/container-->
@endsection


