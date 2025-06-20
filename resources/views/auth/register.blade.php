<x-main>
    <h1>registrati!</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" class="form-control"name="name" id="exampleFormControlInput1"
                placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email"id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control"name="password" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Conferma
                password</label>
            <input type="password" class="form-control" name="password_confirmation" id="exampleFormControlInput1"
                placeholder="name@example.com">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Registrati!!</button>
        </div>
    </form>
</x-main>
