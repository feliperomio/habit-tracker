<header class="bg-white border-b-2 flex justify-between p-4">
    {{--Logo--}}
    <div>
        logo aqui
    </div>


    {{--Github--}}
    <div>
        github

        @auth
        <form class="inline" action="/logout" method="POST">
            @csrf
            <button type="submit" class="bg-white p-2 border-2">
                Sair
            </button>
        </form>
        @endauth


        @guest
        <a href="/login" class="bg-white p-2 border-2">
            Login
        </a>
        @endguest



    </div>




</header>