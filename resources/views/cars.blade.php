<x-layout>

    <x-slot:title>
        {{ $Nav}} Page | {{ $Name }}
    </x-slot:title>

    <x-slot:headings>
        Welcome to {{ $Name }}!
    </x-slot:headings>

    This is the {{ $Nav}} Page

    <strong>All Cars --</strong> <br>

    @foreach ($Cars as $Car)

    <div class="px-10 py-10 mr-5 mb-10 w-50 bg-red-500">
        <div> <img src="" alt="Image Tag"></div>
        <a class="text-bold text-green-300" href="/car/{{ $Car["id"] }}"> <strong> {{ $Car["Name"] }}  </strong> </a>
        <div> {{ $Car['Status']}}  | {{ $Car['Cost'] }} </div>
    </div>

    @endforeach

</x-layout>
