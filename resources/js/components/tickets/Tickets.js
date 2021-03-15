import React, { Component } from 'react';
import ReactDOM from 'react-dom';
/**
 * Import URL
 */
// import { API_BASE_URL } from './config'

/**
 * Import components
 */
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faEye } from '@fortawesome/free-solid-svg-icons'
import { faEdit } from '@fortawesome/free-solid-svg-icons'
import { faTrash } from '@fortawesome/free-solid-svg-icons'
import { faPlus } from '@fortawesome/free-solid-svg-icons'

export class Tickets extends Component {

    constructor (props) {
        super(props);

        this.state = {
            tickets: [],
            error: null,

        //     // form: {
        //     //     name: '',
        //     //     date_time: '',
        //     //     address: '',
        //     //     type: [],
        //     //     amount: [],
        //     //     value: []
        //     // }
        }
    }

    async componentDidMount (){
        try {
            let res = await fetch( 'http://trs.test/api/ticket');
            console.log('Res',res);
            let data = await res.json;
            console.log(data);
            this.setState({
                tickets: data.tickets
            })
        } catch (error) {
            this.setState({
                error
            })
        }
    }

    // handleChange(e){
    //     this.setState({
    //         form:{
    //             ...this.state.form,
    //             [e.target.name]: e.target.value
    //         }
    //     })
    // }

    // async handleSubmit(e){
    //     e.preventDefault()
    //     try {
    //         let config = {
    //             method: 'POST',
    //             headers: {
    //                 'Accept':'application/json',
    //                 'Content-Type':'application/json'
    //             },
    //             body: JSON.stringify(this.state.form)
    //         }
    //         // hacemos la peticion por get
    //         let res = await fetch(`http://trs.test/api/ticket`, config)
    //         // almacenamos la respeusta en data
    //         let data = await res.json()

    //         this.setState({
    //             tickets: this.state.tickets.concat(data)
    //         })
    //     } catch (error) {
    //         this.setState({
    //             error
    //         })
    //     }
    // }

    render() {
        return (
            <div className="container mt-4 pt-4">
                <div className="row justify-content-center">
                    <div className="col-md-12">
                        <div className="card">
                            <div className="card-header">Tickets</div>

                            <div className="card-body">
                                <form
                                     onChange={this.handleChange}
                                    //  onSubmit={this.handleSubmit}
                                >
                                    <div className="row">
                                        <div className="form-group col-md-4">
                                            <label>Name</label>
                                            <input
                                                type="number"
                                                id="name"
                                                name="name"
                                                placeholder="Id card"
                                                className="form-control"
                                                // value="{this.form.name}"
                                                // onChange={this.handleChange}
                                            />
                                        </div>
                                        <div className="form-group col-md-4">
                                            <label>Date time</label>
                                            <input
                                                type="datetime-local"
                                                id="date_time"
                                                name="date_time"
                                                placeholder="Date time"
                                                className="form-control"
                                                // value="{this.form.date_time}"
                                                // onChange={this.handleChange}
                                            />
                                        </div>
                                        <div className="form-group col-md-4">
                                            <label>Address</label>
                                            <input
                                                type="text"
                                                id="address"
                                                name="address"
                                                placeholder="Address"
                                                className="form-control"
                                                // value="{this.form.address}"
                                                // onChange={this.handleChange}
                                            />
                                        </div>
                                        <hr />
                                        <div className="form-group col-md-4">
                                            <label>Type</label>
                                            <input
                                                type="text"
                                                id="type"
                                                name="type[]"
                                                placeholder="Type"
                                                className="form-control"
                                                // value="{this.form.type[0]}"
                                                // onChange={this.handleChange}
                                            />
                                        </div>
                                        <div className="form-group col-md-4">
                                            <label>Amount</label>
                                            <input
                                                type="number"
                                                id="amount"
                                                name="amount[]"
                                                placeholder="Amount"
                                                className="form-control"
                                                // value="{this.form.amount[0]}"
                                                // onChange={this.handleChange}
                                            />
                                        </div>
                                        <div className="form-group col-md-4">
                                            <label>Value</label>
                                            <input
                                                type="number"
                                                id="value"
                                                name="value[]"
                                                placeholder="Value"
                                                className="form-control"
                                                // value="{this.form.value[0]}"
                                                // onChange={this.handleChange}
                                            />
                                        </div>
                                        <div>
                                            <button type="submit" className="btn btn-link btn-link">
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
                                <br />
                                <div className="table-responsive">
                                    <table className="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Date time</th>
                                                <th>Address</th>
                                                <th>/</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {this.state.tickets.map((ticket) => (
                                                <tr key="{ticket.id}">
                                                    <td>{ticket.id}</td>
                                                    <td>{ticket.name}</td>
                                                    <td>{ticket.date_time}</td>
                                                    <td>{ticket.address}</td>
                                                    <td>
                                                        <button className="btn btn-sm btn-primary m-1">
                                                            <FontAwesomeIcon icon={faEye} />
                                                        </button>
                                                        <button className="btn btn-sm btn-success m-1">
                                                            <FontAwesomeIcon icon={faEdit} />
                                                        </button>
                                                        <button className="btn btn-sm btn-danger m-1">
                                                            <FontAwesomeIcon icon={faTrash} />
                                                        </button>
                                                    </td>
                                                </tr>
                                            ))}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )

    }
}

if (document.getElementById('tickets_component')) {
    ReactDOM.render(<Tickets />, document.getElementById('tickets_component'));
}
