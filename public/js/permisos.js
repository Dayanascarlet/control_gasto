const validar=()=>{

const per_nombre=document.querySelector('#per_nombre');


if(per_nombre.value.length==0){
	Swal.fire({
		icon: 'error',
		title:'ERROR',
		text:'El campo permisos es obligatorio'
	});
	return false;
     }
}
