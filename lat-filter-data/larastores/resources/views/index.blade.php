@extends('mylayout')

@section('content')
   <h3>Stores</h3>
   {{-- filter:start --}}
   <form class="row g-3" method="GET">
      <div class="col-auto">
         <select name="city" class="form-select">
            <option value="" selected>All</option>
            @foreach ($cities as $city)
               <option value="{{ $city->name }}" {{ request('city') === $city->name ? 'selected' : null }}>
                  {{ $city->name }}</option>
            @endforeach
         </select>
      </div>
      <div class="col-auto">
         <input name="keyword" value="{{ request('keyword') }}" type="search" class="form-control"
            placeholder="Search...">
      </div>
      <div class="col-auto">
         <button type="submit" class="btn btn-primary mb-3">Search</button>
      </div>
   </form>
   {{-- filter:end --}}
   <div class="row">
      <div class="col">
         <table class="table">
            <thead>
               <tr>
                  <th scope="col">Name</th>
                  <th scope="col">City</th>
                  <th scope="col">Address</th>
               </tr>
            </thead>
            <tbody>
               @forelse ($stores as $store)
                  <tr>
                     <th>{{ $store->name }}</th>
                     <td>{{ $store->city->name }}</td>
                     <td>{{ $store->address }}</td>
                  </tr>
               @empty
                  <tr>
                     <td colspan="100%">
                        Data not found
                     </td>
                  </tr>
               @endforelse
            </tbody>
         </table>
      </div>
   </div>
   @if ($stores->hasPages())
      <div class="row">
         <div class="col">
            {{ $stores->links('pagination::bootstrap-4') }}
         </div>
      </div>
   @endif

@endsection