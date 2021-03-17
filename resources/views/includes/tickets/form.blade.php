<form action="{{route('tickets_store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="form-group col-md-4">
            <label>Name</label>
            <input
                type="text"
                id="name"
                name="name"
                placeholder="Name"
                class="form-control"
                value="{{old('name')}}"
            />
        </div>
        <div class="form-group col-md-4">
            <label>Date time</label>
            <input
                type="datetime-local"
                id="date_time"
                name="date_time"
                placeholder="Date time"
                class="form-control"
                value="{{old('date_time')}}"
            />
        </div>
        <div class="form-group col-md-4">
            <label>Address</label>
            <input
                type="text"
                id="address"
                name="address"
                placeholder="Address"
                class="form-control"
                value="{{old('address')}}"
            />
        </div>
        <div class="col-md-12 text-center">
            <button class="btn btn-sm btn-primary">
                Save
            </button>
        </div>
    </div>
</form>