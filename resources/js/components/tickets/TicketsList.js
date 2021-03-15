import React from 'react';

const TikectsList = ({tickets}) => 
{
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
                    <button className="btn btn-sm btn-danger m-1">
                        <FontAwesomeIcon icon={faTrash} />
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
}

export default TikectsList