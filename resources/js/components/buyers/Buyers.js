import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faEye } from '@fortawesome/free-solid-svg-icons'
import { faEdit } from '@fortawesome/free-solid-svg-icons'
import { faTrash } from '@fortawesome/free-solid-svg-icons'
import { faTicketAlt } from '@fortawesome/free-solid-svg-icons'

// import BuyersForm from './BuyersForm';
// import BuyersList from './BuyersList';

export class Buyers extends Component {
    render() {
        return (
            <div className="container mt-4 pt-4">
                <div className="row justify-content-center">
                    <div className="col-md-12">
                        <div className="card">
                            <div className="card-header">Buyers</div>

                            <div className="card-body">
                                {/* <BuyersForm /> */}
                                <form>
                                    <div className="row">
                                        <div className="form-group col-md-4">
                                            <label>Id card</label>
                                            <input
                                                type="number"
                                                id="id_card"
                                                placeholder="Id card"
                                                className="form-control"
                                            />
                                        </div>
                                        <div className="form-group col-md-4">
                                            <label>Name</label>
                                            <input
                                                type="text"
                                                id="name"
                                                placeholder="Name"
                                                className="form-control"
                                            />
                                        </div>
                                        <div className="form-group col-md-4">
                                            <label>Email</label>
                                            <input
                                                type="email"
                                                id="email"
                                                placeholder="Email"
                                                className="form-control"
                                            />
                                        </div>
                                        <div className="col-md-12 text-center">
                                            <button className="btn btn-sm btn-primary">
                                                Register
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <br />
                                <div className="table-responsive">
                                    {/* <BuyersList /> */}
                                    <table className="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>ID-Card</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>/</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>123</td>
                                                <td>Name</td>
                                                <td>example@mail.com</td>
                                                <td>
                                                    <button className="btn btn-sm btn-primary m-1">
                                                        <FontAwesomeIcon icon={faEye} />
                                                    </button>
                                                    <button className="btn btn-sm btn-success m-1">
                                                        <FontAwesomeIcon icon={faEdit} />
                                                    </button>
                                                    <button className="btn btn-sm btn-warning m-1">
                                                        <FontAwesomeIcon icon={faTicketAlt} />
                                                    </button>
                                                    <button className="btn btn-sm btn-danger m-1">
                                                        <FontAwesomeIcon icon={faTrash} />
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('buyers_component')) {
    ReactDOM.render(<Buyers />, document.getElementById('buyers_component'));
}
