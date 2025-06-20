<x-main>
    <h1>Esegui il login</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf

        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email"id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control"name="password" id="exampleFormControlInput1" placeholder="">
        </div>

        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Login</button>
        </div>
    </form>
</x-main>
