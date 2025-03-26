@extends('layouts.app')

@section('content')
    <div class="w-screen h-screen flex  flex-col justify-center items-center">

        <div  id="message" class="fixed top-24 right-4 z-0">
            @if (session('status'))
                <div class="bg-green-100 text-green-700 px-4 py-3 rounded-md border-l-4 shadow-lg transition-opacity duration-500">
                    {{ session('status') }}
                </div>

                <script>
                    setTimeout(() => {
                        let messageDiv = document.getElementById('message');
                        if (messageDiv) {
                            messageDiva.classList.add('opacity-0', 'transition-opacity', 'duration-500');
                            setTimeout(() => messageDiv.remove(), 500); // remove from DOM after fading
                        }
                    }, 4000);
                </script>
            @endif
        </div>

        <h1 class="text-4xl text-dark font-bold">Raymart <span class="text-primary">Magallanes</span></h1>
        <p class="text-2xl text-dark font-medium">Poblacion, Sagbayan, Bohol</p>
        <p class="text-2xl text-dark">BSIT III</p>
    </div>
@endsection