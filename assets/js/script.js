$(document).ready(function(){



	//INICIALIZAÇÕES

	//*Modal

	$('.modal').modal();

	//*Paralax

	$('.parallax').parallax();

	//*Select

	$('select').formSelect();

	//*DataPicker

    $('.datepicker').datepicker({
    	autoClose:true,
    	format:'yyyy-mm-dd',
    	i18n:{
    		done:'',
    		cancel:'',
    		months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
    		monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
    		weekdays:['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'],
    		weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
    		weekdaysAbbrev:	['D','S','T','Q','Q','S','S']
    	}
	});
	
	//*SideNav
	$('.sidenav').sidenav();


	







	
});

//PLUGIN MASK
$('#cpf').mask('000.000.000-00');
$('#rg').mask('00.000.000-00');
$('#telefone').mask('(00)0000-0000');
$('#placa').mask('AAA-0000');



//AÇÕES
$('#limpartudo').on("click",function(){
	$('#cpf').val("");
	$('#nomecompleto').val("");
	$('#dt_nascimento').val("");
	$('#pai').val("");
	$('#mae').val("");
	$('#cpf').val("");
	$('#rg').val("");
	$('#numero').val("");
	$('#rua').val("");
	$('#bairro').val("");
	$('#cidade').val("");
	$('#estado').val("");
	$('#telefone').val("");
	$('#email').val("");
	$('#nm_residencia').val("");
	




});


function excluir(id) {

	var instance = M.Modal.getInstance($('#modal_editar'));

	$.ajax({

		url:'http://cadastropankararu.com/ajax/excluir',
		type:'POST',
		data:{id:id},
		success:function(html) {
			instance.open();
			$('#modal_editar').html(html);
		}
	});
}




function cancel() {

	var instance = M.Modal.getInstance($('#modal_editar'));
	instance.close();
}


