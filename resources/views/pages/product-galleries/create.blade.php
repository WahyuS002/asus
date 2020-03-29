@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Add new Item</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('product-galleries.store') }}" method="POST" enctype="multipart/form-data">
                @csrf                
                <div class="form-group">
                    <label for="name" class="form-control-label">Item Name</label>
                    <select name="products_id" class="form-control @error('products_id') is-invalid @enderror">
                        @foreach ($products as $product)                                    
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                    @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                </div>                               
                <div class="form-group">
                    <label for="photo" class="form-control-label">Photo</label>                                    
                    <div class="custom-file">                    
                        <input type="file" name="photo" value="{{ old('photo') }}" class="custom-file-input @error('photo') is-invalid @enderror" accept="image/*" required>
                        <label class="custom-file-label" for="customFile">Choose photo</label>
                        @error('photo') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="is_default" class="form-control-label">Default</label>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input @error('is_default') is-invalid @enderror" type="radio" name="is_default" value="1" checked>
                        <label class="form-check-label">
                          Ya
                        </label>
                        &nbsp; &nbsp; &nbsp;
                        <input class="form-check-input @error('is_default') is-invalid @enderror" type="radio" name="is_default" value="0">
                        <label class="form-check-label">
                          Tidak
                        </label>
                    </div>                
                    @error('is_default') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <button class="btn btn-primary btn-block" type="submit">Save Photo</button>
            </form>
        </div>
    </div>
@endsection