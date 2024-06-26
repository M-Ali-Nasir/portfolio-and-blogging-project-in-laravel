@extends('admin.layouts.admin')

@section('content')

                <div class="col-lg-12 grid-margin stretch-card">
                    
                    <div class="card">
                      <div class="card-body">
                      <div class="search-field d-none d-md-block" >
                        <form class="d-flex align-items-center h-100" action="{{ route('admin.blog.search') }}" method="GET">
                          <div class="input-group border border-1">
                            <div class="input-group-prepend bg-transparent">
                              <i class="input-group-text border-0 mdi mdi-magnify"></i>
                            </div>
                            <input type="text" class="form-control bg-transparent border-0" name="search" placeholder="Search Blog Posts" required>
                          </div>
                        </form>
                      </div>
                        <h4 class="card-title">Found {{ $blogPosts->count() }} Records in Blog Posts</h4>
                        <a href="{{ route('admin.blogs.create')}}"> 
                        <button type="button" class="btn btn-primary btn-fw ">Add New</button>
                        </a>
                        {{-- <p class="card-description"></code> --}}
                        </p>

                        @if($blogPosts->isNotEmpty())
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> # </th>
                              <th> Photo </th>
                              <th> Title </th>
                              <th> Category </th>
                              <th> Manage </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($blogPosts as $portfolio)
                            <tr>
                              <td> {{ $portfolio -> id }} </td>
                              <td> <img src="{{ asset("storage/$portfolio->image") }}" alt="image"> </td>
                              {{-- <td> <i class="fab {{ $service -> icon }}"  aria-hidden="true"></i></td> --}}
                              <td> {{ $portfolio -> title }} </td>
                              <td> {{ $portfolio -> post__categories-> name }} </td>
                              <td> 
                                <button type="button" class="btn btn-success btn-sm me-1 " onclick="location.href='{{ route('admin.blogs.edit', $portfolio->id) }}';">Edit</button>
                                  <form type="submit" method="POST" style="display: inline" action="{{ route('admin.blogs.destroy', $portfolio->id)}}" onsubmit="return confirm('Are you sure?')">
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
                        @else
                        <div class="alert alert-danger" role="alert">
                          No Records Founded
                        </div>
                        @endif
                        
                      </div>
                    </div>
                  </div>
{{-- 
            </div>
        </div> --}}
@endsection
