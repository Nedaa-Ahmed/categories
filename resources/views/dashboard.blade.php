<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    <b> Hi >> {{Auth::user()->name}}  </b> 
      <b style="float:right;">Total Users : 
    <span  style="color:blue">{{ count($users) }} </spam>
      </b>  </h2>
       </x-slot>


    


    <div class="py-12">
      
<div class="container">
<div class="row">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Created at</th>
    </tr>
  </thead>
  <tbody>

  @php($i=1)
  @foreach ($users as $users)
   
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{ $users->name}}</td>
      <td>{{ $users->email}}</td>
      <td>{{ $users->created_at->diffForHumans()}}<!--{{ Carbon\carbon::parse ($users->created_at)->diffForHumans() }} --> </td>
    </tr>
@endforeach

  </tbody>
</table>
</div>
</div>
</div>
</x-app-layout>
