@extends('admin.layouts.admin')

@section('content')

               <div class="col-lg-12 grid-margin stretch-card">
                    
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Categories Records</h4>
                        <a href="{{ route('admin.blog-category.create')}}">
                        <button type="button" class="btn btn-primary btn-fw ">Add New</button>
                        </a>
                        {{-- <p class="card-description"></code> --}}
                        </p>
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> # </th>
                              <th> Image </th>
                              <th> Category </th>
                              <th> Manage </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($categories as $category)
                            <tr>
                              <td> {{ $category -> id }} </td>
                              <td> <img src="{{ asset("storage/$category->image") }}" alt="image">  </td>
                              <td> {{ $category -> name }} </td>
                              <td>
                                <button type="button" class="btn btn-success btn-sm me-1 " onclick="location.href='{{ route('admin.blog-category.edit', $category->id) }}';">Edit</button>
                                  <form type="submit" method="POST" style="display: inline" action="{{ route('admin.blog-category.destroy', $category->id)}}" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" style="style="display: inline"">Delete</button>
                                </form>
                            </td>
                            </tr>
                            <tr>
                                @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
{{-- 
            </div>
        </div> --}}
@endsection
