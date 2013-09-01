
var pronta = true; //Indica se pode haver troca de imagem

// = Imagens
// Descrição:: Classe para tratamento das imagens

var Imagens = function () {
	var imagem_atual = 1;

	this.imagens 	= document.getElementsByTagName("img");	//Vetor com as imagens da página
	this.length		= this.imagens.length;					//Tamanho do vetor
	this.container 	= this.imagens[1].parentNode;			//Container das imagens
	this.limite 	= this.container.scrollHeight;			//Limite para fazer o scroll

	this.avanca_imagem = function(){

		var vai_de				= this.container.scrollTop										//Ponto inicial
		var vai_ate				= this.container.scrollTop + this.imagens[imagem_atual].width;	//Ponto final
		var velocidade			= 10;															//Velocidade do scroll
		var div					= this.container;												//Container a ser usado localmente
		var intervalo;																			//Vai ser usado para controlar o setInterval

		if(this.limite <= vai_ate){
			vai_ate = 0;
		}

		//Cria o smooth de transição das imagens
		intervalo = setInterval(function(){
			pronta = false;

			//Verifica se está descendo ou subindo o scroll
			if(vai_ate > vai_de){
				console.log("maior");
				if (div.scrollTop <= vai_ate) {
					div.scrollTop += velocidade;
				}else{
					clearInterval(intervalo);
					pronta = true;
				}
			}else{
				console.log("menor");
				if (div.scrollTop > vai_ate) {
					div.scrollTop -= velocidade;
				}else{
					clearInterval(intervalo);
					pronta = true;
				}
			}
		},20)		

		//Caso esteja na ultima imagem retorna a primeira
		if(this.length < imagem_atual){
			imagem_atual++;
		}else{
			imagem_atual = 1;
		}
	}

}

//Ao carregar todos os elementos
//Inicia o intervalo de avanço de imagens
//desde que esteja pronta a imagem para ser trocada
window.onload = function () {
	var imagens = new Imagens();
	
	setInterval(function(){
		if(pronta){
			imagens.avanca_imagem();
		}
	},5000)
}