class Simon{
	constructor(){
		this.fraseArray = Array.from(simonFrase.value.split("-")[0].toUpperCase());
		this.velocidad = simonFrase.value.split("-")[1] *500;
		this.keys = Array.prototype.slice.call(document.querySelectorAll(".key"));
		this.posLetter = 0;
		btn_next.classList.add("d-none");
		btn_terminar.classList.add("d-none");
		this.oprimir = true;
	}
	keyPrint(){
		console.log("velocidad", this.fraseArray);
		console.log("velocidad", this.velocidad);
		let tiempo = 5000;
		this.fraseArray.map((letra)=>{
			this.keys.map((tecla)=>{
				if( letra.charCodeAt(0) == tecla.getAttribute("data-key")){
					setTimeout(()=>{
						tecla.classList.add("key-animation");
						setTimeout(()=>{
							tecla.classList.remove("key-animation");
						},1000);
					}, tiempo - this.velocidad);
					tiempo += 1000;
				}
			});
		});
	}
	keyPress(){
		document.addEventListener("keydown", (tecla)=>{
			if(this.oprimir){
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
								btn_terminar.classList.remove("d-none");
								this.oprimir = false;
								simonRespuesta.setAttribute("disabled", "true");
							}
						});
					}
				}
			}

		});
		document.addEventListener("keyup",(tecla)=>{
			if(this.oprimir){
				if(simonFrase.value.split("-")[0] == simonRespuesta.value){
					alert_success.classList.remove("alert-completado");
					btn_next.classList.remove("d-none");
				}
			}
		});
	}
	clickNext(){
		btn_next.addEventListener("click", (e)=>{

		});
		if(simonFrase.value.split("-")[1] == 10){
			btn_next.remove();
			btn_terminar.classList.remove("btn-danger", "d-none");
			btn_terminar.classList.add("btn-success");
			btn_terminar.innerText = "Ver Puntaje"
		}
	}
}
const simon = new Simon();
simon.keyPrint();
simon.keyPress();
simon.clickNext();