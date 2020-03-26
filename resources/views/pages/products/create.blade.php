@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Add new Item</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Item Name</label>
                    <input type="text" name="name" value="{{ old('name') }}"
                           class="form-control @error('name') is-invalid @enderror">
                    @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="type" class="form-control-label">Item Type</label>
                    <input type="text" name="type" value="{{ old('type') }}"
                           class="form-control @error('type') is-invalid @enderror">
                    @error('type') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="description" class="form-control-label">Item Description</label>
                    <textarea name="description"
                    class="ckeditor form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                    @error('description') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="price" class="form-control-label">Item Price</label>
                    <input type="number" name="price" value="{{ old('price') }}"
                           class="form-control @error('price') is-invalid @enderror">
                    @error('price') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="quantity" class="form-control-label">Quantity</label>
                    <input type="number" name="quantity" value="{{ old('quantity') }}"
                           class="form-control @error('quantity') is-invalid @enderror">
                    @error('quantity') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <button class="btn btn-primary btn-block" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection