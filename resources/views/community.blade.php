<x-layout :actualComm="$actualComm">
    <x-slot name="title"> {{ $name }} </x-slot>
    <h1 style="text-align: center"> {{ $name }} </h1>    

    <hr>

    <div id="up-container">
        <div id="comm-posts">
            <x-posts-list :posts="$posts"/>
        </div>
        <x-comm-info :comm="$actualComm"/>
    </div>
</x-layout>