@extends('layouts.admin')

@section('title', 'NOMADS ADMIN')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title }}</h1>
            
        </div>

        @if($errors->any())

            <div class="alert alert-danger">
                <ul>
                    @
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    
                </ul>
            </div>

        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('travel-package.store') }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for='title'></label>
                        <input type="text" class="form-control" name="title" placeholder="title" value={{ $item->title }} >
                    </div>
                    <div class="form-group">
                         <label for='location'></label>
                        <input type="text" class="form-control" name="location" placeholder="location" value={{ $item->location }} >
                    </div>

                    <div class="form-group">
                        <label for='about'></label>
                        <textarea name="about" rows="10" class="d-block w-100 form-control">{{ $item->about }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for='featured_event'></label>
                        <input type="text" class="form-control" name="featured_event" placeholder="featured_event" value={{ $item->featured_event }} >
                    </div>

                    <div class="form-group">
                        <label for='language'></label>
                        <input type="text" class="form-control" name="language" placeholder="language" value={{ $item->language }} >
                    </div>

                    <div class="form-group">
                        <label for='foods'></label>
                        <input type="text" class="form-control" name="foods" placeholder="foods" value={{ $item->foods }} />
                    </div>

                    <div class="form-group">
                        <label for='departure_date'></label>
                        <input type="text" class="form-control" name="departure_date" placeholder="departure_date" value={{ $item->departuere_date }} />
                    </div>

                    <div class="form-group">
                        <label for='duration'></label>
                        <input type="text" class="form-control" name="duration" placeholder="duration" value={{$item->duration }} />
                    </div>

                    <div class="form-group">
                        <label for='type'></label>
                        <input type="text" class="form-control" name="type" placeholder="type" value={{ $item->type }} />
                    </div>

                    <div class="form-group">
                         <label for='price'></label>
                        <input type="number" class="form-control" name="price" placeholder="price" value={{ $item->price }} />
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Ubah
                    </button>
                       
                </form>
            </div>
        </div>

        


    </div>
    <!-- /.container-fluid -->
@endsection