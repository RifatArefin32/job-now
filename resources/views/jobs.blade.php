<x-layout> 
    <x-slot:title>Jobs | Job Now</x-slot:title>
    <x-slot:heading> Jobs Page </x-slot:heading>
    
    @foreach ($jobs as $job)
        <div>
            <div>
                <h2>{{$job["title"] . " | " . (string)$job["salary"] . " " . (string)$job["currency"]}}</h2>
                <a href="/job/{{$job['id']}}" style="color: blue">{{ "See details" }}</a> 
                <br><br>
            </div>
        </div>
    @endforeach


</x-layout>
