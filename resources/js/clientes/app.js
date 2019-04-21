import React from 'react';
import { render } from 'react-dom';
import cliente from './cliente';



class AppCliente extends React.Component{
    constructor(props){
        super(props);
        this.state ={
            Cliente:new cliente(),
            lista_clientes:[]
        };

    }
    render(){
        const {Cliente,lista_clientes} =this.state;
        return(
            <div className="panel panel-default">
            <div className="panel-heading">
                <i className="btn btn-success">Agregar Clientes. <i className="fa fa-save"></i></i>
                <AgregarCiente
                    cliente={Cliente}
                />
            </div>
            </div>);
    }
}
const AgregarCiente =({cliente})=>{
    const {id,Nombre,Ciudad,Calle,Telefono,Email,Detalle,Estatus} = cliente;

    return(<div className="panel-heading" id="contenedor_nvo_cliente">
        <div>
            <label>Nombre</label>
            <input className="form-control" type="text" value={Nombre} placeholder="Nombre..." />
        </div>
        <div>
            <label>Ciudad</label>
            <input className="form-control" type="text" value={Ciudad} placeholder="Ciudad..." />
        </div>
        <div>
            <label>Calle</label>
            <input className="form-control" type="text" value={Calle} placeholder="Calle..." />
        </div>
        <div>
            <label>Telefono</label>
            <input className="form-control" type="number" value={Telefono} placeholder="Telefono..." />
        </div>
        <div>
            <label>Email</label>
            <input className="form-control" type="e-mail" value={Email} placeholder="Email..." />
        </div>
        <div>
            <label>Detalle</label>
            <input className="form-control" type="text" value={Detalle} placeholder="Detalle..." />
        </div>
        <div>
            <i className={'btn btn-'+( Estatus=="V"?'info':'danger')}>
            Estatus <i className={"fa fa-"+ (Estatus=="V"?'check-circle':'times-circle')}></i>
            </i>
        </div>
    </div>);
}


console.log("Clientes...");

render(<AppCliente />,document.querySelector('#root'));