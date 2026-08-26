<x-layout>

    <main class="py-10">
        <section class="mt-4 bg-white max-w-[600px] mx-auto p-10 border-2">
            
        <h1>
            Faça Login
        </h1>
        <p>
            Insira seus dados para acessar
        </p>
        
        
        <form action="/login" method="POST" class="flex flex-col gap-4 mt-4">
                @csrf 

                <div>

                <label for="email">Email</label>
                
                <input
                    type="email"
                    name="email"
                    placeholder="your@email.com"
                    class="bg-white p-2 border-2">   
                </div>

                <input
                    type="password"
                    name="password"
                    placeholder="*********"
                    class="bg-white p-2 border-2">

                <button
                    type="submit"
                    class="bg-white p-2 border-2">
                    Entrar
                </button>
            </form>
        </section>



    </main>
</x-layout>