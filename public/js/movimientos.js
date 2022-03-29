const validar=()=>{
const mov_fecha=document.querySelector('#mov_fecha');
const mov_cantidad=document.querySelector('#mov_cantidad');
const mov_detalle=document.querySelector('#mov_detalle');
const tip_id=document.querySelector('#tip_id');
const usu_id=document.querySelector('#usu_id');

if(mov_fecha.value.length==0){
	Swal.fire({
		icon: 'error',
		title:'ERROR',
		text:'El campo tipo es obligatorio'
	});
	return false;
     }
if(mov_cantidad.value.length==0){
	Swal.fire({
		icon: 'error',
		title:'ERROR',
		text:'El campo tipo es obligatorio'
	});
	return false;
     }

 if(mov_detalle.value.length==0){
	Swal.fire({
		icon: 'error',
		title:'ERROR',
		text:'El campo tipo es obligatorio'
	});
	return false;
     }
     
     if(tip_id.value.length==0){
	Swal.fire({
		icon: 'error',
		title:'ERROR',
		text:'El campo tipo es obligatorio'
	});
	return false;
     }
     
     if(usu_id.value.length==0){
	Swal.fire({
		icon: 'error',
		title:'ERROR',
		text:'El campo tipo es obligatorio'
	});
	return false;
     }

         
}