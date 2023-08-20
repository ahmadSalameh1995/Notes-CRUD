@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('notes.save') }}" method="POST">
                @csrf
                @if(isset($note))
                    <input type="hidden" name="id" value="{{ $note->id }}"/>
                @endif
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="{{ isset($note) ? $note->title : '' }}">
                </div>
                <div class="form-group">
                    <label for="text">Text</label>
                    <textarea class="form-control" id="text" name="text" rows="5">{{ isset($note) ? $note->text : '' }}</textarea>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
