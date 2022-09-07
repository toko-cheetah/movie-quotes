@props(['routeEdit', 'routeDelete'])

<div class="flex justify-between items-center">        
    <a href="{{ $routeEdit }}" class="text-gray-300 ml-10 mr-5 underline">Update</a>
    
    <form action="{{ $routeDelete }}" method="post">
        @csrf
        @method('DELETE')
        <button class="text-gray-400 underline">Delete</button>
    </form>
</div>