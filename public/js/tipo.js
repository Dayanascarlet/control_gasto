const validar=()=>{
const tip_descripcion=document.querySelector('#tip_descripcion');
if(tip_descripcion.value.length==0){
	Swal.fire({
		icon: 'error',
		title:'ERROR',
		text:'El campo tipo es obligatorio'
	});
	return false;
     }
}
