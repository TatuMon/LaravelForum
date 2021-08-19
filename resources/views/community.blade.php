<x-layout :comms="$comms" :actualComm="$actualComm">
    <x-slot name="title"> {{ $name }} </x-slot>
    <h1 style="text-align: center"> {{ $name }} </h1>    

    <hr>

    <div id="up-container">
        <x-posts-list :posts="$posts"/>
    </div>
</x-layout>