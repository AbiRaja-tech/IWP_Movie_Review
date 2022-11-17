const allStar = document.querySelectorAll('.rating .star')
const ratingValue = document.querySelector('.rating input')

var k=0;

allStar.forEach((item, idx)=> {
	item.addEventListener('click', function () {
		let click = 0
		ratingValue.value = idx + 1

		allStar.forEach(i=> {
			i.classList.replace('bxs-star', 'bx-star')
			i.classList.remove('active')
		})
		for(let i=0; i<allStar.length; i++) {
			if(i <= idx) {
				allStar[i].classList.replace('bx-star', 'bxs-star')
				allStar[i].classList.add('active')
				++k;
			} else {
				allStar[i].style.setProperty('--i', click)
				click++
			}
		}
	})
})

function disp(event){
	//event.preventDefault();
	//console.log("hello");
	l = document.getElementById("result");
	l.innerHTML += "Review Added Successfully!!!!";
}



