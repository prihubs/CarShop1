<x-layout>

    <x-slot:title>
        {{ $Nav}} Page | {{ $Name }}
    </x-slot:title>

    <x-slot:headings>
        Welcome to {{ $Name }}!
    </x-slot:headings>

    This is the {{ $Nav }} Details
    <?php $color = strtolower($Cars['Color']); ?>

        <div class="px-10 py-10 mr-5 mb-10 w-50 bg-gray-500 text-{{$color}}-300">
                <div> <img src="" alt="Image Tag" class="px-5 py-5 mb-3 bg-{{$color}}-300 text-gray-500"></div>
                <strong> Name: </strong>   {{   $Cars["Name"] }} <br>
                <strong> Type: </strong>   {{   $Cars['Type'] }} <br>
                <strong> Color: </strong>  {{   $Cars['Color'] }} <br>
                <strong> Model: </strong>  {{   $Cars['Model'] }} <br>
                <strong> Year: </strong>   {{   $Cars['Year'] }} <br>
                <strong> Status: </strong> {{   $Cars['Status'] }} <p> <br> </p>
        </div>

</x-layout>


