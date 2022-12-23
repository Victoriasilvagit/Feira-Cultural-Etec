@extends('templates.template-header-w-btn')

@section('title')
    Login de Visitante
@endsection

@section('content')
    <!-- Container -->
    <section class="h-4/5 flex flex-col justify-around">

        @if (Session::has('message'))
            <section class="popup">
                <div class="popup-inner">
                    <div class="popup-content">
                        <div class="content text-center">
                            <h6 class=" text-red-netflix font-bold">{{ Session::get('message') }}</h6>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <form method="POST" action="{{url('visitor/login')}}" class="bg-black/80 w-4/5 lg:w-3/6 mx-auto p-3 md:p-5 rounded-md">
            @csrf
            <fieldset class="flex flex-col space-y-3">

                <legend class="text-white text-xl md:text-3xl">Login</legend>

                <input type="text" placeholder="Email" name="email" id="email" required
                    class="bg-input-netflix input-check focus:ring-1 focus:invalid:ring-red-netflix focus:valid:ring-green-600 rounded-md text-white placeholder:text-gray-netflix text-md md:text-xl border-none p-2">

                <input type="submit" value="Logar"
                    class="block bg-red-netflix px-3 py-2 rounded-md text-white text-xs md:text-lg text-center hover:bg-red-netflix/95 hover:cursor-pointer">

            </fieldset>

        </form>

    </section>
@endsection
