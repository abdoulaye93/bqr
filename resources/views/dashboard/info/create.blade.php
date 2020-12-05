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
            <div class="font-sans">
                <h1 class="font-sans break-normal text-gray-900 pt-6 pb-2 text-xl"><span>Renseigner les informations</span>
                    <a href="{{route('dashboard.info.show',$info)}}" class="mr-5 hover:bg-blue-700 hover:text-white border border-gray-400 text-blue-700 font-bold py-2 px-6 rounded-lg text-white">
                        voir {{$info->name}}
                    </a>
                </h1>
                {{$info->id}}
                <hr class="border-b border-gray-400">
                <form class="mt-2"  action="{{route('dashboard.info.store',$info)}}" accept-charset="UTF-8"  method="POST"  >
                    @csrf
                    <label class="block">
                        <span class="text-gray-700">Nom</span>
                        <input class="form-input mt-1 ml-4 block w-full" @error('info') is-invalid @enderror name="info" value="{{ old('info') }}"  placeholder="Entrer l'information " >
                    </label>
                    @error('info')
                    <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">
                        {{$message}}
                    </div>
                    @enderror
                    <label class="block mt-4">
                        <span class="text-gray-700">Locaitée</span>
                        <select name="localite_id" class="form-select mt-1 block w-full">
                            @foreach($localites as $localite)
                                <option value="{{$localite->id}}">{{$localite->name}}</option>
                            @endforeach
                        </select>
                    </label>
                    <div class=" flex flex-col  justify-center">
                        <button class="py-3 my-8 text-lg bg-gradient-to-r from-purple-500 to-indigo-600 rounded-xl text-white">Enregistrer</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
    <!--/container-->
@endsection


