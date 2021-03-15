import React from 'react';


const TicketsForm = () => {
    <form>
        <div className="row">
            <div className="form-group col-md-4">
                <label>Name</label>
                <input
                    type="number"
                    id="id_card"
                    placeholder="Id card"
                    className="form-control"
                />
            </div>
            <div className="form-group col-md-4">
                <label>Date time</label>
                <input
                    type="datetime"
                    id="date_time"
                    placeholder="Date time"
                    className="form-control"
                />
            </div>
            <div className="form-group col-md-4">
                <label>Address</label>
                <input
                    type="text"
                    id="address"
                    placeholder="Address"
                    className="form-control"
                />
            </div>
            <div>
                <button className="btn btn-link btn-link">
                    <FontAwesomeIcon icon={faPlus} />
                    Add ticket type
                </button>
            </div>
            <div className="col-md-12 text-center">
                <button className="btn btn-sm btn-primary">
                    Save
                </button>
            </div>
        </div>
    </form>
}

export default TicketsForm
