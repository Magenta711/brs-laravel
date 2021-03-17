<form action="{{route('buyers_store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="form-group col-md-4">
            <label>Id card</label>
            <input
                type="number"
                id="id_card"
                name="id_card"
                value="{{old('id_card')}}"
                placeholder="Id card"
                class="form-control"
            />
        </div>
        <div class="form-group col-md-4">
            <label>Name</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{old('name')}}"
                placeholder="Name"
                class="form-control"
            />
        </div>
        <div class="form-group col-md-4">
            <label>Email</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{old('email')}}"
                placeholder="Email"
                class="form-control"
            />
        </div>
        <div class="col-md-12 text-center">
            <button class="btn btn-sm btn-primary">
                Register
            </button>
        </div>
    </div>
</form>