<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
 </h2>
       </x-slot>

 <div class="py-12">
      
<div class="container">
<div class="row">


<div class="col-md-8">
<div class ="card">
@if(session('succsess'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('siccesss')}}</strong> Category inserted successful
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class ="card-header">All Category </div>
@endif

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

  
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td> </td>
    </tr>


  </tbody>
</table>

</div>
    </div>

    <div class="col-md-4">
    <div class ="card">
        <div class ="card-header">Add Category </div>
<div class="card-body">

<form action="{{ route('AddCat') }}" method="POST" >
        @csrf  


  <div class="mb-3">
    <label for="category_name" class="form-label">Category name</label>
    <input type="text" name="category_name" class="form-control" id="category_name" aria-describedby="emailHelp">

    @error('category_name')
    <span class="text-danger">{{$message}} </span>
    @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Add Category</button>
</form>
</div>
</div>
    </div>


        </div>
        </div> 

</x-app-layout>
