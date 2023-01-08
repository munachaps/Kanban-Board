@extends('layouts.app')

@section('content')
<div class="md:mx-4 relative overflow-hidden">
    <main class="h-full flex flex-col overflow-auto">
        <add-task :initial-data="{{ $tasks }}"></add-task>
    </main>
</div>
@endsection