<x-layout :actualComm="$actualComm">
    <x-slot name="title"> {{ $name }} </x-slot>
    <h1 style="text-align: center"> {{ ucfirst($name) }} </h1>    
    <x-comm-info :comm="$actualComm"/>
    <hr>

    <div id="up-container">
        <div id="comm-posts">
            <x-posts-list :posts="$posts"/>
        </div>
    </div>
</x-layout>