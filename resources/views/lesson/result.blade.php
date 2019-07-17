@extends('layouts.app')

 @section('content')
<div class="container">
    <div class="row mt-3">
      <div class="col-md-8">
        <h2>Basic 500</h2>
      </div>
      <div class="col-md-4 text-right text-progress-md">
        <span class="font-weight-bold">Result:</span> 1 of 20
      </div>
    </div>
    
    <table class="table mt-5">
        <thead class="h3">
          <tr>
            <th scope="col"></th>
            <th scope="col">Word</th>
            <th scope="col">Answer</th>
          </tr>
        </thead>
        <tbody class="h4">
          <tr>
            <td>O</td>
            <td>人</td>
            <td>Person</td>
          </tr>
          <tr>
            <td>X</td>
            <td>人</td>
            <td>Person</td>
          </tr>
        </tbody>
    </table>
</div>
@endsection