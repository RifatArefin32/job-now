<x-layout> 
    <x-slot:title> Job Details | Job Now</x-slot:title>
    <x-slot:heading> Job Details for "{{$job['title']}}"</x-slot:heading>
    
    <div>
        <div>
            <strong>Job Information: </strong>
            <div>
                <ol>
                    <li>Job id: {{$job['id']}}</li>
                    <li>Title: {{$job['title']}}</li>
                    <li>No. of vacancy: {{$job['vacancy']}}</li>
                    <li>Salay: {{(string)$job['salary'] . " " . $job['currency']}} per month</li>
                    <li>Job Title: {{$job['deadline']}}</li>
                </ol>    
            </div> 
            <div>
                <strong>Job Description: </strong>
                <div>{{$job['description']}}</div>
            </div> 
        </div>
    </div>
    
</x-layout>