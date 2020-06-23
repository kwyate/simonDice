class Simon{
	constructor(){
		this.fraseArray = Array.from(simonFrase.value.toUpperCase());
		this.keys = Array.prototype.slice.call(document.querySelectorAll(".key"));
		this.posLetter = 0;
	}
	keyPrint(){
		let tiempo = 0;
		this.fraseArray.map((letra)=>{
			this.keys.map((tecla)=>{
				if( letra.charCodeAt(0) == tecla.getAttribute("data-key")){
					setTimeout(()=>{
						console.log(letra, letra.charCodeAt(0));
						tecla.classList.add("key-animation");
						setTimeout(()=>{
							tecla.classList.remove("key-animation");
						},1000);
					}, tiempo);
					tiempo += 1000;
				}
			});
		});
	}
	keyPress(){
		document.addEventListener("keydown", (tecla)=>{
			if(this.posLetter < this.fraseArray.length){
				let t = tecla.keyCode;
				if(this.fraseArray[this.posLetter].charCodeAt(0) === t){
					this.keys.map((e)=>{
						if(t == e.getAttribute("data-key")){
							e.classList.add("active", "success");
							this.posLetter += 1;
						}
					});
				}else{
					this.keys.map((e)=>{
						if(t == e.getAttribute("data-key")){
							e.classList.add("active", "fail");

						}
					});
				}
			}
		});
		document.addEventListener("keyup",(tecla)=>{
			if(simonFrase.value == simonRespuesta.value){
				alert_success.classList.remove("alert-completado");
				btn_next.removeAttribute("disabled");
			}
		});
	}
}
const simon = new Simon();
simon.keyPrint();
simon.keyPress();