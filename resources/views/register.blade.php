<x-layout>

    <main class="py-10">
        <section class="mt-4 bg-white max-w-[600px] mx-auto p-10 pb-6 border-2">

            <h1 class="font-bold text-3xl">
                Registre-se
            </h1>
            <p>
                Preencha as informações para se cadastrar
            </p>


            <form action="{{ route('auth.register') }}" method="POST" class="flex flex-col gap-2 mt-4">
                @csrf

                <div class="flex flex-col gap-2 mb-2">

                    <label for="name">
                        Nome
                    </label>

                    <input
                        type="text"
                        name="name"
                        placeholder="Seu nome"
                        class="bg-white p-2 border-2 @error('name') border-red-500 @enderror">
                    @error('name')
                    <p class="text-red-500">
                        {{ $message }}
                    </p>
                    @enderror

                </div>


                <div class="flex flex-col gap-2 mb-2">

                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="your@email.com"
                        class="bg-white p-2 border-2 @error('email') border-red-500 @enderror">
                    @error('email')
                    <p class="text-red-500">
                        {{ $message }}
                    </p>
                    @enderror

                </div>



                <div class="flex flex-col gap-2 mb-4">
                    <label for="password">
                        Senha

                    </label>
                    <input
                        type="password"
                        name="password"
                        placeholder="*********"
                        class="bg-white p-2 border-2 @error('password') border-red-500 @enderror">
                    @error('password')
                    <p class="text-red-500">
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                <div class="flex flex-col gap-2 mb-4">
                    <label for="password_confirmation">
                      Repita a Senha

                    </label>
                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="*********"
                        class="bg-white p-2 border-2 @error('password') border-red-500 @enderror">
                    @error('password')
                    <p class="text-red-500">
                        {{ $message }}
                    </p>
                    @enderror

                </div>


                <button
                    type="submit"
                    class="bg-white p-2 border-2">
                    Cadastrar
                </button>
            </form>
            <p>
                Já tem uma conta?
                <a href="{{ route('site.login') }}" class="underline mt-2 hover:opacity-50">
                    Faça login
                </a>
            </p>
        </section>



    </main>
</x-layout>