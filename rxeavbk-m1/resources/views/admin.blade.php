@extends('layouts.app')

@section('content')
<div class="container">

    @if ( Auth::user()->role == 2 )

        <div class="adminka">
            <a href="/admin">adminka</a>
        </div>

            <div class="admincontainer">

                <p>Добавить категорию товара</p>

                    <div class="input-group mb-3">
            
                        <form action="/public/admin/create_category" method="post" enctype="multipart/form-data">@csrf
                            <input type="text" class="form-control" placeholder="name" name="name" required>
                            <input type="submit">
                        </form>

                    </div>

                <p>Добавить товар</p>

                    <div class="input-group mb-3">
                    
                        <form action="/public/admin/create_product" method="post" enctype="multipart/form-data">@csrf
                            <input type="text" class="form-control" placeholder="name" name="name" required>
                            <input type="text" class="form-control" placeholder="photo" name="photo" required>
                            <input type="text" class="form-control" placeholder="price" name="price" required>
                            <input type="text" class="form-control" placeholder="year" name="year" required>
                            <input type="text" class="form-control" placeholder="country" name="country" required>
                            <input type="text" class="form-control" placeholder="model" name="model" required>
                            <input type="text" class="form-control" placeholder="count" name="count" required>
                            <input type="text" class="form-control" placeholder="id_cat" name="id_cat" required>
                            <input type="submit">
                        </form>

                    </div>
            </div>
    @endif

</div>
@endsection
