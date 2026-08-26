<x-layout>

    <main class="py-10">
        <section class="mt-4 bg-white max-w-[600px] mx-auto p-10 border-2">

            <h1 class="font-bold text-3xl">
                Faça Login
            </h1>
            <p>
                Insira seus dados para acessar
            </p>


            <form action="/login" method="POST" class="flex flex-col gap-2 mt-4">
                @csrf

                <div class="flex flex-col gap-2 mb-2">

                    <label for="email" class="flex flex-col gap-2 mb-4 ">
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
                    <label for="password" class="flex flex-col gap-2 mb-4">
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


                <button
                    type="submit"
                    class="bg-white p-2 border-2">
                    Entrar
                </button>
            </form>
        </section>



    </main>
</x-layout>