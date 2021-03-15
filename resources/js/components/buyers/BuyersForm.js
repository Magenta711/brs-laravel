import React from 'react';

const BuyersForm = () => {
    <form>
        <div className="row">
            <div className="form-group col-md-4">
                <label for="id_card">Id card</label>
                <input
                    type="number"
                    id="id_card"
                    placeholder="Id card"
                    className="form-control"
                />
            </div>
            <div className="form-group col-md-4">
                <label for="id_card">Name</label>
                <input
                    type="text"
                    id="name"
                    placeholder="Name"
                    className="form-control"
                />
            </div>
            <div className="form-group col-md-4">
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    placeholder="Email"
                    className="form-control"
                />
            </div>
            <div className="col-md-12 justify-content-center">
                <button className="btn btn-sm btn-primary">
                    Register
                </button>
            </div>
        </div>

    </form>
}

export default BuyersForm